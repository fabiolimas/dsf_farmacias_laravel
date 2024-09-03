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

    $pedidos=PedidoDeCompra::paginate(10);
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

    return view('pages.painel.admin.compras.create', compact('exames','clientes','pedido','itensPedido'));
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
}
