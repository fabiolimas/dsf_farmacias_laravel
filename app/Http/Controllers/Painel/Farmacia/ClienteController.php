<?php

namespace App\Http\Controllers\Painel\Farmacia;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\ClienteFarmacia;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    public function index(){
        $farmacia=Cliente::find(auth()->user()->cliente_id);

        $clientesFarma=ClienteFarmacia::where('cliente_id', $farmacia->id)->get();

        return view('pages.painel.farmacia.clientes.index', compact('clientesFarma','farmacia'));
    }

    public function create(){

         $farmacia=Cliente::find(auth()->user()->cliente_id);

       
      
        return view('pages.painel.farmacia.clientes.create', compact('farmacia'));
    }

    public function store(Request $request){
        

        $clienteFarma= new ClienteFarmacia();

        $clienteFarma->fill($request->all());
        $clienteFarma->save();

        return redirect()->route('painel.farmacia.clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function edit(Request $request){

        $cliente=ClienteFarmacia::find($request->id);
        return view('pages.painel.farmacia.clientes.edit', compact('cliente'));

    }

    public function update(Request $request){

        $clienteFarma=ClienteFarmacia::find($request->id);

        $clienteFarma->update($request->all());

        return redirect()->back()->with('success','Cliente alterado com sucesso!');

    }

    public function buscaCliente(Request $request){

        $busca=$request->pesquisa;
         $farmacia=Cliente::find(auth()->user()->cliente_id);
        if($busca==''){

            $clientesFarma=ClienteFarmacia::where('cliente_id', $farmacia->id)
       
            ->get(); 
        }else{
            $clientesFarma=ClienteFarmacia::where('nome', 'like', '%'.$busca.'%')->where('cliente_id', $farmacia->id)
       
            ->get();
        }

       

      

        if($clientesFarma->count() >=1){
            return view('pages.painel.farmacia.buscas.busca_cliente',compact('clientesFarma', 'farmacia'));
        }else{
            return response()->json(['status'=>'Cliente não encontrado']);
        }
    }

    public function buscaClienteHome(Request $request){

        $busca=$request->pesquisa;
         $farmacia=Cliente::find(auth()->user()->cliente_id);
        if($busca==''){

            $clientes=ClienteFarmacia::where('cliente_id', $farmacia->id)
       
            ->get(); 
        }else{
            $clientes=ClienteFarmacia::where('nome', 'like', '%'.$busca.'%')->where('cliente_id', $farmacia->id)
       
            ->get();
        }

       

      

        if($clientes->count() >=1){
            return view('pages.painel.farmacia.buscas.busca_cliente_home',compact('clientes', 'farmacia'));
        }else{
            return response()->json(['status'=>'Cliente não encontrado']);
        }
    }

}
