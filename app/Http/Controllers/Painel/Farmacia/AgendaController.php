<?php

namespace App\Http\Controllers\Painel\Farmacia;

use App\Models\Exame;
use App\Models\Agenda;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\ClienteFarmacia;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index(){

        $farmacia=Cliente::where('user_id', auth()->id())->first();

        $clientesFarma=ClienteFarmacia::where('cliente_id', $farmacia->id)->get();
        $exames=Exame::all();
        $agendas=Agenda::join('cliente_farmacias','cliente_farmacias.id','agendas.cliente_farmacia_id')->where('agendas.cliente_id', $farmacia->id)->orderBy('agendas.hora_exame', 'asc')->get();

       $examesDia=Agenda::join('cliente_farmacias','cliente_farmacias.id','agendas.cliente_farmacia_id')->where('agendas.cliente_id', $farmacia->id)->where('agendas.data_exame', date('Y-m-d'))->orderBy('agendas.hora_exame', 'asc')->get();

        return view('pages.painel.farmacia.agenda.index', compact('examesDia','agendas','farmacia', 'clientesFarma','exames'));
    }

    public function create(){
        $farmacia=Cliente::where('user_id', auth()->id())->first();

        $clientesFarma=ClienteFarmacia::where('cliente_id', $farmacia->id)->get();
        $exames=Exame::all();
        $agendas=Agenda::join('cliente_farmacias','cliente_farmacias.id','agendas.cliente_farmacia_id')->where('agendas.cliente_id', $farmacia->id)->orderBy('agendas.hora_exame', 'asc')->get();

        return view('pages.painel.farmacia.agenda.create', compact('agendas','exames','farmacia','clientesFarma'));
    }

    public function store(Request $request){

        $cliente=ClienteFarmacia::find($request->cliente_farmacia_id);
       
        $exame=Exame::find($request->exame_id);

        $agenda= new Agenda();
        $agenda->cliente_farmacia_id=$cliente->id;
        $agenda->nome_cliente=$cliente->nome;
        $agenda->exame_id=$exame->id;
        $agenda->nome_exame=$exame->nome;
        $agenda->data_exame=$request->data_exame;
        $agenda->hora_exame=$request->hora_exame;
        $agenda->cliente_id=$request->cliente_id;
        $agenda->save();

        return redirect()->route('painel.farmacia.agenda.index')->with('success','Exame agendado com sucesso!');

        
    }
}
