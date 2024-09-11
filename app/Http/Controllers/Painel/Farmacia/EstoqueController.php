<?php

namespace App\Http\Controllers\Painel\Farmacia;

use App\Http\Controllers\Controller;
use App\Models\ExameFarmacia;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
   public function index(Request $request){

    $exames=ExameFarmacia::join('exames','exames.id', 'exame_farmacias.exame_id')
    ->select('exames.*', 'exame_farmacias.valor', 'exame_farmacias.estoque','exame_farmacias.valor_de_compra')

    ->where('cliente_id', auth()->user()->cliente_id)->get();

    $exameSemPreco=ExameFarmacia::join('exames','exames.id', 'exame_farmacias.exame_id')
    ->select('exames.*', 'exame_farmacias.valor', 'exame_farmacias.estoque','exame_farmacias.valor_de_compra')

    ->where('cliente_id', auth()->user()->cliente_id)
    ->where('exame_farmacias.valor', null)
    ->orWhere('exame_farmacias.valor','<',1)
    ->count();



    return view('pages.painel.farmacia.estoque.index', compact('exames','exameSemPreco'));
   }

   public function updateExameFarmacia(Request $request){


        $exameFarma=ExameFarmacia::where('exame_id',$request->id)->first();
    $valor=$request->valor;

    $val_formatado=str_replace(',', '.', $valor);

        $exameFarma->update(['valor'=>$val_formatado]);

        return redirect()->back()->withSuccess('Exame atualizado com  sucesso!');

   }

   public function buscaExameFarma(Request $request){

    $busca=$request->pesquisa;
    $exames=ExameFarmacia::join('exames','exames.id', 'exame_farmacias.exame_id')
    ->select('exames.*', 'exame_farmacias.valor', 'exame_farmacias.estoque','exame_farmacias.valor_de_compra')

    ->where('cliente_id', auth()->user()->cliente_id)->get();
    if($busca==''){

        $exames=ExameFarmacia::join('exames','exames.id', 'exame_farmacias.exame_id')
        ->select('exames.*', 'exame_farmacias.valor', 'exame_farmacias.estoque','exame_farmacias.valor_de_compra')

        ->where('cliente_id', auth()->user()->cliente_id)->get();


    }else{
        $exames=ExameFarmacia::join('exames','exames.id', 'exame_farmacias.exame_id')
        ->select('exames.*', 'exame_farmacias.valor', 'exame_farmacias.estoque','exame_farmacias.valor_de_compra')
        ->where('exames.nome','like','%'.$busca.'%')
        ->where('cliente_id', auth()->user()->cliente_id)->get();
    }





    if($exames->count() >=1){
        return view('pages.painel.farmacia.buscas.busca_exame_farma',compact('exames'));
    }else{
        return response()->json(['status'=>'Exame não encontrado']);
    }
}


}
