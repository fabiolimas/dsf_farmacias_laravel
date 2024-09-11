<?php

namespace App\Http\Controllers\Painel\Farmacia;

use App\Models\Exame;
use App\Models\Agenda;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\ClienteFarmacia;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ExameFarmacia;

class AgendaController extends Controller
{
    public function index()
    {

         $farmacia=Cliente::find(auth()->user()->cliente_id);


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
            ->join('exame_farmacias', 'exame_farmacias.exame_id','agendas.exame_id')


            ->select(
                'agendas.*',
                'agendas.data_exame',
                'agendas.id as agendaId',
                'cliente_farmacias.email as emailCliente',
                'cliente_farmacias.telefone as telefone',
                'cliente_farmacias.cpf as cpf',
                'users.*',
                'exame_farmacias.estoque as estoqueExame'

            )
            ->where('agendas.cliente_id', $farmacia->id)
            ->where('agendas.status', 'aberto')

            ->orderBy('agendas.data_exame', 'asc')
            ->orderBy('agendas.hora_exame', 'asc')

            ->get()
            ->groupBy('data_exame'); // Agrupa pelos exames na mesma data


        return view('pages.painel.farmacia.agenda.index', compact('examesDia', 'agendas', 'farmacia', 'clientesFarma', 'exames'));
    }

    public function create()
    {
         $farmacia=Cliente::find(auth()->user()->cliente_id);

        $clientesFarma = ClienteFarmacia::where('cliente_id', $farmacia->id)->get();
        $exames = ExameFarmacia::join('exames','exames.id', 'exame_farmacias.exame_id')
        ->where('exame_farmacias.cliente_id', $farmacia->id)
        ->where('exame_farmacias.valor', '!=', null)
        ->where('exame_farmacias.valor', '>=', 1)
        ->get();

        $agendas = Agenda::join('cliente_farmacias', 'cliente_farmacias.id', 'agendas.cliente_farmacia_id')->where('agendas.cliente_id', $farmacia->id)->orderBy('agendas.hora_exame', 'asc')->get();

        return view('pages.painel.farmacia.agenda.create', compact('agendas', 'exames', 'farmacia', 'clientesFarma'));
    }

    public function edit(Request $request)
    {

        $agenda = Agenda::find($request->id);

         $farmacia=Cliente::find(auth()->user()->cliente_id);
        $clientesFarma = ClienteFarmacia::where('cliente_id', $farmacia->id)->get();
        $clienteAgendado = ClienteFarmacia::find($agenda->cliente_farmacia_id);
        $exames = Exame::all();
        $exameAgendado = Exame::find($agenda->exame_id);
        $agendas = Agenda::join('cliente_farmacias', 'cliente_farmacias.id', 'agendas.cliente_farmacia_id')->where('agendas.cliente_id', $farmacia->id)->orderBy('agendas.hora_exame', 'asc')->get();
        return view('pages.painel.farmacia.agenda.edit', compact('exames', 'agendas', 'exameAgendado', 'agenda', 'farmacia', 'clientesFarma', 'clienteAgendado'));
    }

    public function update(Request $request)
    {


        $agenda = Agenda::find($request->id);
        $exame = Exame::find($agenda->exame_id);

        $agenda->update($request->all());
        $agenda->update(['nome_exame' => $exame->nome]);

        return redirect()->route('painel.farmacia.agenda.index')->with('success', 'Agendamento editado com sucesso!');
    }

    public function store(Request $request)
    {

        $cliente = ClienteFarmacia::find($request->cliente_farmacia_id);

        $exame = ExameFarmacia::join('exames','exames.id', 'exame_farmacias.exame_id')
        ->where('exame_id', $request->exame_id)->first();



        $agenda = new Agenda();
        $agenda->cliente_farmacia_id = $cliente->id;
        $agenda->nome_cliente = $cliente->nome;
        $agenda->exame_id = $exame->id;
        $agenda->nome_exame = $exame->nome;
        $agenda->data_exame = $request->data_exame;
        $agenda->hora_exame = $request->hora_exame;
        $agenda->cliente_id = $request->cliente_id;
        $agenda->user_id = auth()->id();
        $agenda->status = 'aberto';
        $agenda->save();

        return redirect()->route('painel.farmacia.agenda.index')->with('success', 'Exame agendado com sucesso!');
    }

    public function buscaAgendados(Request $request)
    {
        $busca = $request->pesquisa;



         $farmacia=Cliente::find(auth()->user()->cliente_id);


        $clientesFarma = ClienteFarmacia::where('cliente_id', $farmacia->id)->get();
        $exames = Exame::all();
        if ($busca == '') {
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
            ->limit(3)
            ->groupBy('data_exame');
        } else {


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
                ->where('agendas.nome_cliente', 'like', '%' . $busca . '%')
                ->orWhere('agendas.nome_exame', 'like', '%' . $busca . '%')

                ->orderBy('agendas.data_exame', 'asc')
                ->orderBy('agendas.hora_exame', 'asc')

                ->get()
                ->groupBy('data_exame');
        }
        $agendas = Agenda::join('cliente_farmacias', 'cliente_farmacias.id', 'agendas.cliente_farmacia_id')
            ->join('users', 'users.id', 'agendas.user_id')
            ->select('agendas.*', 'agendas.id as agendaId', 'cliente_farmacias.email as emailCliente', 'cliente_farmacias.telefone as telefone', 'cliente_farmacias.cpf as cpf', 'users.*')
            ->where('agendas.cliente_id', $farmacia->id)
            ->where('agendas.status', 'aberto')

            ->orderBy('agendas.hora_exame', 'asc')->get();

        if ($examesDia->count() >= 1) {
            return view('pages.painel.farmacia.buscas.exames_agendados', compact('examesDia', 'agendas', 'farmacia', 'clientesFarma', 'exames'));
        } else {
            return response()->json(['status' => 'Nenhum agendamento encontrado']);
        }
    }
}
