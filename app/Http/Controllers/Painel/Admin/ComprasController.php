<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Models\Exame;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\PedidoDeCompra;
use App\Http\Controllers\Controller;
use App\Models\ExameFarmacia;
use App\Models\PedidoItem;

class ComprasController extends Controller
{
  public function index(){

    if(auth()->user()->profile == 'admin'){
      $pedidos=PedidoDeCompra::join('clientes', 'clientes.id','pedido_de_compras.cliente_id')
      ->select('clientes.*', 'pedido_de_compras.*')
      ->orderBY('pedido_de_compras.id', 'asc')
      ->paginate(10);


      $pedidoNovo=PedidoDeCompra::join('clientes', 'clientes.id','pedido_de_compras.cliente_id')
      ->select('clientes.*', 'pedido_de_compras.*')
      ->where('status','novo')
      ->count();

    }else{
      $pedidos=PedidoDeCompra::join('clientes', 'clientes.id','pedido_de_compras.cliente_id')
      ->select('clientes.*', 'pedido_de_compras.*')
      ->where('clientes.id',auth()->user()->cliente_id)
      ->paginate(10);

      $pedidoNovo=PedidoDeCompra::join('clientes', 'clientes.id','pedido_de_compras.cliente_id')
      ->select('clientes.*', 'pedido_de_compras.*')
      ->where('status','aberto')
      ->where('clientes.id', auth()->user()->cliente_id)
      ->count();
    }
    $clientes=Cliente::all();




    return view('pages.painel.admin.compras.index', compact('pedidos','clientes','pedidoNovo'));
  }

  public function create(){

    $exames=Exame::all();

    $pedido=PedidoDeCompra::where('status','novo')->first();
    $cliente=Cliente::find($pedido->cliente_id);
    $itensPedido=PedidoItem::join('exames','exames.id','pedido_items.exame_id')
    ->select('exames.*','pedido_items.*')
    ->where('pedido_de_compras_id', $pedido->id)->get();

    $totalPedido=0;

    return view('pages.painel.admin.compras.create', compact('totalPedido','exames','cliente','pedido','itensPedido'));
  }

  public function edit(Request $request){
    $exames=Exame::all();

    $pedido=PedidoDeCompra::find($request->id);
    $cliente=Cliente::find($pedido->cliente_id);
    $itensPedido=PedidoItem::join('exames','exames.id','pedido_items.exame_id')
    ->select('exames.*','pedido_items.*')
    ->where('pedido_de_compras_id', $pedido->id)->get();

    $totalPedido=0;



    return view('pages.painel.admin.compras.edit', compact('totalPedido','exames','cliente','pedido','itensPedido'));
  }

  public function visualizar(Request $request){
    $exames=Exame::all();

    $pedido=PedidoDeCompra::find($request->id);
    $cliente=Cliente::find($pedido->cliente_id);
    $itensPedido=PedidoItem::join('exames','exames.id','pedido_items.exame_id')
    ->select('exames.*','pedido_items.*')
    ->where('pedido_de_compras_id', $pedido->id)->get();

    $totalPedido=0;



    return view('pages.painel.admin.compras.visualizar', compact('totalPedido','exames','cliente','pedido','itensPedido'));
  }

  public function store(Request $request){

    $pedido = new PedidoDeCompra();
 $pedido->cliente_id=$request->cliente_farmacia_id;
 $pedido->status='novo';
 $pedido->save();

 return redirect()->route('painel.admin.compras.create');



  }
  public function storeItem(Request $request){

    $itemPedido= new PedidoItem();

    $itemPedido->pedido_de_compras_id=$request->pedido_id;
    $itemPedido->exame_id=$request->exame_id;
    $itemPedido->preco=$request->preco;
    $itemPedido->quantidade=$request->quantidade;
    $itemPedido->lote=$request->lote;


    $itemPedido->save();

    return redirect()->back();

  }



  public function salvarPedido(Request $request){

    $pedido=PedidoDeCompra::find($request->id);

    $pedido->update(['status'=>'aberto','total_pedido'=>$request->total_pedido]);
    return redirect()->route('painel.admin.compras.index')->withSuccess('Pedido salvo com sucesso!');

  }


  public function confirmarPedido(Request $request){

    $pedido=PedidoDeCompra::find($request->id);
    $itensPedido=PedidoItem::where('pedido_de_compras_id', $pedido->id)->get();



    foreach($itensPedido as $item){

        $exameFarmacia=ExameFarmacia::where('cliente_id', $pedido->cliente_id)
        ->where('exame_id', $item->exame_id)
    ->first();


   if($exameFarmacia == null){

        $novoExame= new ExameFarmacia();

        $novoExame->exame_id=$item->exame_id;
        $novoExame->cliente_id=$pedido->cliente_id;
        $novoExame->valor_de_compra=$item->preco;
        $novoExame->estoque=$item->quantidade;
        $novoExame->lote=$item->lote;
        $novoExame->save();

    $pedido->update(['status'=>'recebido']);

    }else{
        $estoqueAtual=$exameFarmacia->estoque;
       $estoqueAtual+=$item->quantidade;
        $exameFarmacia->update(['estoque'=>$estoqueAtual, 'valor_de_compra'=>$item->preco,'lote'=>$item->lote]);
        $pedido->update(['status'=>'recebido']);
    }
    }
    return redirect()->route('painel.admin.compras.index')->withSuccess('Pedido recebido com sucesso!');

  }



  public function destroy(Request $request)
    {
        $item=PedidoItem::find($request->id);
        $item->delete();
        return redirect()->back()->withSuccess('Item removido com sucesso!');
    }

    public function destroyPedido(Request $request)
    {
      $pedido=PedidoDeCompra::find($request->id);
        $pedido->delete();
        return redirect()->back()->withSuccess('Pedido excluido com sucesso!');
    }
}
