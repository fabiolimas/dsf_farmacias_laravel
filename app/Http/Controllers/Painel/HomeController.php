<?php

namespace App\Http\Controllers\Painel;

use App\Models\Exame;
use App\Models\Agenda;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\ExameFarmacia;
use App\Models\ClienteFarmacia;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $farmacia=Cliente::find(auth()->user()->cliente_id);
        $clientes=ClienteFarmacia::where('cliente_id', auth()->user()->cliente_id)->get();
      
     

        $examesPendentes = Agenda::join('cliente_farmacias', 'cliente_farmacias.id', 'agendas.cliente_farmacia_id')
        ->join('users', 'users.id', 'agendas.user_id')
        ->join('exames','exames.id','agendas.exame_id')
        ->select('agendas.*', 'agendas.id as agendaId', 'cliente_farmacias.email as emailCliente', 'cliente_farmacias.telefone as telefone', 'cliente_farmacias.cpf as cpf', 'users.*')
        
        ->where('agendas.cliente_id', $farmacia->id)
        ->where('agendas.status', 'aberto')
        ->orderBy('agendas.hora_exame', 'asc')->get();

        $examesAcabando=ExameFarmacia::join('exames','exames.id','exame_farmacias.exame_id')
        ->select('exames.nome', 'exame_farmacias.*')
        ->where('estoque','<',5)
        
        ->get();
        $examesProntos=Agenda::where('status','pronto')
        ->where('cliente_id', auth()->user()->cliente_id)->get();

        $examesPorId = Agenda::where('status', 'pronto')
        ->where('cliente_id', auth()->user()->cliente_id)
        ->select('exame_id', 'nome_exame')
        ->get()
        ->groupBy('exame_id')
        ->map(function ($exames, $exameId) {
            return [
                'nome_exame' => $exames->first()->nome_exame,
                'quantidade' => $exames->count(),
            ];
        });
    
    // Extraindo os nomes dos exames e as quantidades
    $nomesExames = $examesPorId->pluck('nome_exame')->toArray();
    $quantidades = $examesPorId->pluck('quantidade')->toArray();

    $faturamento = (new LarapexChart)->barChart()
    ->setTitle('Quantidade de Exames Prontos por Tipo')
    ->setSubtitle('')
    ->addData('Exames', $quantidades)
    ->setXAxis($nomesExames)
    ->setColors(['#0E6664'])
    ->setSparkline()
    ->setHeight(315);


            
            
            $mapaClientes = (new LarapexChart)->donutChart()
            ->setDataset([15, 24])
            ->setSparkline()
            ->setLabels([
                '1',
                '2',
            ])
            ->setColors([
                '#00B1AC',
                '#0E6664'
            ])
            ->setHeight(290);
            




        return view('pages.painel.home', compact('examesAcabando', 'examesPendentes','faturamento', 'mapaClientes','clientes','examesProntos'));
    }
}
