<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Models\Exame;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\PedidoDeCompra;
use App\Http\Controllers\Controller;
use App\Models\PedidoItem;

class ComprasController extends Controller
{
  public function index(){

    $pedidos=PedidoDeCompra::join('clientes', 'clientes.id','pedido_de_compras.cliente_id')
    ->select('clientes.*', 'pedido_de_compras.*')
    ->paginate(10);
    $clientes=Cliente::all();



    return view('pages.painel.admin.compras.index', compact('pedidos','clientes'));
  }

  public function create(){

    $exames=Exame::all();
    $clientes=Cliente::all();
    $pedido=PedidoDeCompra::where('status','novo')->first();
    $itensPedido=PedidoItem::join('exames','exames.id','pedido_items.exame_id')
    ->select('exames.*','pedido_items.*')
    ->where('pedido_de_compras_id', $pedido->id)->get();

    $totalPedido=0;

    return view('pages.painel.admin.compras.create', compact('totalPedido','exames','clientes','pedido','itensPedido'));
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
  public function destroy(Request $request)
    {
        $item=PedidoItem::find($request->id);
        $item->delete();
        return redirect()->route('painel.admin.compras.create')->withSuccess('Item removido com sucesso!');
    }
}
