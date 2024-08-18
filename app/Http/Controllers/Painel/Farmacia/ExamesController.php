<?php

namespace App\Http\Controllers\Painel\Farmacia;

use App\Models\Exame;
use App\Models\Agenda;
use App\Models\Cliente;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Resultado;
use Illuminate\Http\Request;
use App\Models\ClienteFarmacia;
use App\Http\Controllers\Controller;

class ExamesController extends Controller
{
   public function index(Request $request){

    $farmacia = Cliente::where('user_id', auth()->id())->first();


        $clientesFarma = ClienteFarmacia::where('cliente_id', $farmacia->id)->get();
        $exames = Exame::all();
        $agendas = Agenda::join('cliente_farmacias', 'cliente_farmacias.id', 'agendas.cliente_farmacia_id')
            ->join('users', 'users.id', 'agendas.user_id')
            ->select('agendas.*', 'agendas.id as agendaId', 'cliente_farmacias.email as emailCliente', 'cliente_farmacias.telefone as telefone', 'cliente_farmacias.cpf as cpf', 'users.*')
            ->where('agendas.cliente_id', $farmacia->id)
            ->where('agendas.status', 'aberto')
            ->orderBy('agendas.hora_exame', 'asc')->get();

        // $unlock = DB::statement('SET SESSION sql_mode=(SELECT REPLACE(@@SESSION.sql_mode, "ONLY_FULL_GROUP_BY", ""));');

        $examesDia =   Agenda::join('cliente_farmacias', 'cliente_farmacias.id', '=', 'agendas.cliente_farmacia_id')
            ->join('users', 'users.id', '=', 'agendas.user_id')

            ->select(
                'agendas.*',
                'agendas.data_exame',
                'agendas.id as agendaId',
                'cliente_farmacias.email as emailCliente',
                'cliente_farmacias.telefone as telefone',
                'cliente_farmacias.cpf as cpf',
                'users.*'
            )
            ->where('agendas.cliente_id', $farmacia->id)
            ->where('agendas.status', 'aberto')
            
            ->orderBy('agendas.data_exame', 'asc')
            ->orderBy('agendas.hora_exame', 'asc')
            
            ->get()
            ->groupBy('data_exame'); // Agrupa pelos exames na mesma data

            $examesProntos=Agenda::where('status', 'pronto')->get();

    return view('pages.painel.farmacia.exames.index', compact('examesProntos','examesDia', 'agendas', 'farmacia', 'clientesFarma', 'exames'));
   }

   public function examesProntos(Request $request){

    $examesProntos=Agenda::where('status', 'pronto')->get();
  
    return view('pages.painel.farmacia.exames.list',compact('examesProntos'));

   }

   public function ShowResult(Request $request){
    $farmacia = Cliente::where('user_id', auth()->id())->first();
 

    $resultado=Resultado::where('agendas_id',$request->id)->first();

    $array = json_decode($resultado->perguntas, true);

    $clienteFarma=ClienteFarmacia::find($resultado->cliente_farmacia_id);
    return view('pages.painel.farmacia.exames.show',compact('array','clienteFarma','farmacia','resultado'));
   }

   public function updatePresenca(Request $request){

        $agenda=Agenda::find($request->id);

       

        $agenda->update(['status'=>$request->status]);
    
    return redirect()->back();
   }


   public function confirmados(){

    $farmacia = Cliente::where('user_id', auth()->id())->first();

    $examesConfirmados=Agenda::where('status','confirmado')
    ->where('cliente_id', $farmacia->id)->get();

   

    return view('pages.painel.farmacia.exames.confirmados', compact('examesConfirmados'));
   }

   public function dadosExame(Request $request){

    $agenda=Agenda::find($request->id);

    $exame=Exame::find($agenda->exame_id);

    $cliente=ClienteFarmacia::find($agenda->cliente_farmacia_id);

    return view('pages.painel.farmacia.exames.dados-exame', compact('agenda', 'exame','cliente'));

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
       $resultado->nome_fab_auricular=$request->nome_fab_auricular;
       $resultado->cnpj_fab_auricular=$request->cnpj_fab_auricular;
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

    $farmacia = Cliente::where('user_id', auth()->id())->first();
 

    $resultado=Resultado::where('agendas_id',$request->id)->first();

    $array = json_decode($resultado->perguntas, true);

    $clienteFarma=ClienteFarmacia::find($resultado->cliente_farmacia_id);
    // return view('pages.painel.farmacia.exames.exame_pdf',compact('array','clienteFarma','farmacia','resultado'));

     $pdf = PDF::loadView('pages.painel.farmacia.exames.exame_pdf', compact('array','clienteFarma','farmacia','resultado'));
     return $pdf->stream('resultado.pdf');
}
}