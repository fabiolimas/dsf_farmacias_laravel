<?php

namespace App\Http\Controllers\Painel\Farmacia;

use App\Models\Exame;
use App\Models\Venda;
use App\Models\Agenda;

use App\Models\Cliente;
use App\Models\Resultado;
use Illuminate\Http\Request;
use App\Models\ExameFarmacia;
use App\Models\ClienteFarmacia;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ExamesController extends Controller
{
   public function index(Request $request){

     $farmacia=Cliente::find(auth()->user()->cliente_id);


        $clientesFarma = ClienteFarmacia::where('cliente_id', $farmacia->id)->get();
        $exames = ExameFarmacia::all();
        $agendas = Agenda::join('cliente_farmacias', 'cliente_farmacias.id', 'agendas.cliente_farmacia_id')
            ->join('users', 'users.id', 'agendas.user_id')
            ->select('agendas.*', 'agendas.id as agendaId', 'cliente_farmacias.email as emailCliente', 'cliente_farmacias.telefone as telefone', 'cliente_farmacias.cpf as cpf', 'users.*')
            ->where('agendas.cliente_id', $farmacia->id)
            ->where('agendas.status', 'aberto')
            ->orderBy('agendas.hora_exame', 'asc')->get();

        // $unlock = DB::statement('SET SESSION sql_mode=(SELECT REPLACE(@@SESSION.sql_mode, "ONLY_FULL_GROUP_BY", ""));');

        $examesDia =   Agenda::join('cliente_farmacias', 'cliente_farmacias.id', '=', 'agendas.cliente_farmacia_id')
            ->join('users', 'users.id', '=', 'agendas.user_id')
            ->join('exame_farmacias', 'exame_farmacias.exame_id', 'agendas.exame_id')

            ->select(
                'agendas.*',
                'agendas.data_exame',
                'agendas.id as agendaId',
                'cliente_farmacias.email as emailCliente',
                'cliente_farmacias.telefone as telefone',
                'cliente_farmacias.cpf as cpf',
                'users.*',
                'exame_farmacias.estoque'
            )
            ->where('agendas.cliente_id', $farmacia->id)
            ->where('agendas.status', 'aberto')

            ->orderBy('agendas.data_exame', 'asc')
            ->orderBy('agendas.hora_exame', 'asc')

            ->get()
            ->groupBy('data_exame'); // Agrupa pelos exames na mesma data

            $examesProntos=Agenda::where('status', 'pronto')
            ->where('cliente_id', auth()->user()->cliente_id)
            ->get();

    return view('pages.painel.farmacia.exames.index', compact('examesProntos','examesDia', 'agendas', 'farmacia', 'clientesFarma', 'exames'));
   }

   public function examesProntos(Request $request){
    $farmacia=Cliente::find(auth()->user()->cliente_id);
    $examesProntos=Agenda::where('status', 'pronto')
    ->where('cliente_id', auth()->user()->cliente_id)
    ->get();

    return view('pages.painel.farmacia.exames.list',compact('examesProntos','farmacia'));

   }

   public function ShowResult(Request $request){
     $farmacia=Cliente::find(auth()->user()->cliente_id);


    $resultado=Resultado::where('agendas_id',$request->id)->first();



        $array = json_decode($resultado->perguntas, true);




    $clienteFarma=ClienteFarmacia::find($resultado->cliente_farmacia_id);
    return view('pages.painel.farmacia.exames.show',compact('array','clienteFarma','farmacia','resultado'));
   }

   public function updatePresenca(Request $request){

        $agenda=Agenda::find($request->id);
        $exame=ExameFarmacia::where('exame_id', $agenda->exame_id)
        ->where('cliente_id', $agenda->cliente_id)
        ->first();
        $venda = new Venda();
        $valor=$exame->valor;
        $val_formatado=str_replace(',', '.', $valor);
        $estoqueAtual=$exame->estoque;
       if($request->status == 'confirmado'){
        $agenda->update(['status'=>$request->status]);
        $estoqueAtual-=1;
        $exame->update(['estoque'=>$estoqueAtual]);
        $venda->cliente_farmacia_id=$agenda->cliente_farmacia_id;
        $venda->exame_id=$exame->exame_id;
        $venda->cliente_id=auth()->user()->cliente_id;
        $venda->valor=$val_formatado;
        $venda->save();




       }else{
        $agenda->update(['status'=>$request->status]);
       }



    return redirect()->back();
   }


   public function confirmados(){

     $farmacia=Cliente::find(auth()->user()->cliente_id);

    $examesConfirmados=Agenda::where('status','confirmado')
    ->where('cliente_id', $farmacia->id)->get();



    return view('pages.painel.farmacia.exames.confirmados', compact('examesConfirmados','farmacia'));
   }

   public function dadosExame(Request $request){
    $farmacia=Cliente::find(auth()->user()->cliente_id);
    $agenda=Agenda::find($request->id);

    $exame=Exame::find($agenda->exame_id);

    $cliente=ClienteFarmacia::find($agenda->cliente_farmacia_id);

    return view('pages.painel.farmacia.exames.dados-exame', compact('farmacia','agenda', 'exame','cliente'));

   }

   public function storeResultado(Request $request){


    $perguntas=['perguntas'=>$request->perguntas,'respostas'=>$request->respostas];




        $resultado= new Resultado();
       $resultado->cliente_farmacia_id=$request->cliente_farmacia_id;
       $resultado->agendas_id=$request->agendas_id;
       $resultado->perguntas=json_encode($perguntas);
       $resultado->braco_aferido=$request->braco_aferido;
       $resultado->resultado_sistolica=$request->sistolica;
       $resultado->resultado_distolica=$request->distolica;
       $resultado->glicemia=$request->glicemia;
       $resultado->result_glicemia=$request->result_glicemia;
       $resultado->temperatura=$request->temperatura;
       $resultado->result_temperatura=$request->result_temperatura;
       $resultado->injetaveis=$request->injetaveis;
       $resultado->medicamento=$request->medicamento;
       $resultado->concentracao=$request->concentracao;
       $resultado->lote=$request->lote;
       $resultado->validade=$request->validade;
       $resultado->ms=$request->ms;
       $resultado->dcb=$request->dcb;
       $resultado->via_ministracao=$request->via_ministracao;
       $resultado->medico_responsavel=$request->medico_responsavel;
       $resultado->crm=$request->crm;
       $resultado->endereco_medico=$request->endereco_medico;
       $resultado->telefone_medico=$request->telefone_medico;
       $resultado->nome_fab_auricular=$request->nome_fabricante;
       $resultado->cnpj_fab_auricular=$request->cnpj_fabricante;
       $resultado->lote_pistola=$request->lote_pistola;
       $resultado->lote_brinco=$request->lote_brinco;
       $resultado->responsavel_atendimento=$request->responsavel_atendimento;
       $resultado->observacoes=$request->observacao;

        $resultado->save();

        $agenda=Agenda::find($request->agendas_id);
        $agenda->update(['status'=>'pronto']);

        return redirect()->route('painel.farmacia.exames.confirmados')->with('success', 'Folha de resultado gerada com sucesso!');
   }

   public function gerarPDF(Request $request)
{

     $farmacia=Cliente::find(auth()->user()->cliente_id);


    $resultado=Resultado::where('agendas_id',$request->id)->first();

    $array = json_decode($resultado->perguntas, true);

    $clienteFarma=ClienteFarmacia::find($resultado->cliente_farmacia_id);
     //return view('pages.painel.farmacia.exames.exame_pdf',compact('array','clienteFarma','farmacia','resultado'));

    $pdf = PDF::loadView('pages.painel.farmacia.exames.exame_pdf', compact('array','clienteFarma','farmacia','resultado'))->setOptions(['enable_remote' => true]);
     return $pdf->download('resultado.pdf');
}

public function enviarPDFPorEmail(Request $request)
{

     $farmacia=Cliente::find(auth()->user()->cliente_id);


    $resultado=Resultado::where('agendas_id',$request->id)->first();

    $array = json_decode($resultado->perguntas, true);

    $clienteFarma=ClienteFarmacia::find($resultado->cliente_farmacia_id);

     $pdf = PDF::loadView('pages.painel.farmacia.exames.exame_pdf', compact('array','clienteFarma','farmacia','resultado'))->setOptions(['enable_remote' => true]);
      // Converter o PDF para uma string binária
    $pdfContent = $pdf->output();

    // Enviar o PDF por e-mail
    Mail::send('pages.painel.farmacia.exames.email', compact('array','clienteFarma','farmacia','resultado'), function($message) use ($pdfContent, $clienteFarma) {
        $message->to($clienteFarma->email, $clienteFarma->nome)
                ->subject('Resultado de Exame')
                ->attachData($pdfContent, 'Resultado_Exame.pdf', [
                    'mime' => 'application/pdf',
                ]);
    });

  return redirect()->back()->with('success','Resultado enviado com sucesso!');
}

public function buscaExamesProntos(Request $request){
    $busca=$request->pesquisa;

     $farmacia=Cliente::find(auth()->user()->cliente_id);

    if ($busca == '') {
        $examesProntos=Agenda::where('status', 'pronto')->get();
    }else{
        $examesProntos=Agenda::
        where('nome_exame','like','%'.$busca.'%')
        ->orWhere('nome_cliente','like','%'.$busca.'%')->get();

    }


   return view('pages.painel.farmacia.buscas.exames_prontos',compact('examesProntos','farmacia'));
}

public function entradaEstoque(){

    $exames=Exame::all();

    return view('pages.painel.farmacia.exames.create', compact('exames'));


}

public function  buscaExameCreate(Request $request){

    $exame=Exame::where('id',$request->id)->first();


  // Verifique se o exame foi encontrado
  if ($exame) {
    return response()->json($exame);
} else {
    return response()->json(['message' => 'Exame não encontrado'], 404);
}

}

public function updateEstoque(Request $request){

    $exame=ExameFarmacia::where('exame_id', $request->exame)->first();
    $valor=$request->valor;
    $val_formatado=str_replace(',', '.', $valor);
if($exame == null){
    $newExame= new ExameFarmacia();

    $newExame->exame_id=$request->exame;
    $newExame->valor=$val_formatado;
    $newExame->estoque=$request->estoque;
    $newExame->lote=$request->lote;
    $newExame->cliente_id=auth()->user()->cliente_id;
    $newExame->save();
    return redirect()->route('painel.farmacia.exames.lista')->with('success','Dados do exame atualizados com sucesso!');
}

    $estoqueAtual=$exame->estoque;
    $exame->update(['valor'=>$request->valor, 'estoque'=>$estoqueAtual+=$request->estoque, 'lote'=>$request->lote,'cliente_id'=>auth()->user()->cliente_id]);
    return redirect()->route('painel.farmacia.exames.lista')->with('success','Dados do exame atualizados com sucesso!');
}


}
