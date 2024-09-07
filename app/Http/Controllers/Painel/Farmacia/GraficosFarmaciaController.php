<?php

namespace App\Http\Controllers\Painel\Farmacia;

use App\Models\Venda;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficosFarmaciaController extends Controller
{
    public function index(Request $request)
    {
        // $qtdExames = (new LarapexChart)->barChart()
        //     ->setHorizontal(false)
        //     ->setXAxis(['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom'])
        //     ->setDataset([[
        //         'name'  =>  'Vendas',
        //         'data'  =>  [90, 9, 3, 4, 10, 8, 5, 6, 9, 3, 4, 10, 8, 5]
        //     ]])
        //     ->setColors(['#0E6664'])
        //     ->setSparkline()
        //     ->setHeight(315);



        if($request == null || $request->data_ini == null || $request->data_fim == null){
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
        }else{
            $examesPorId = Agenda::where('status', 'pronto')
            ->where('cliente_id', auth()->user()->cliente_id)
            ->whereBetween('data_exame', [$request->data_ini, $request->data_fim])
            ->select('exame_id', 'nome_exame')
            ->get()
            ->groupBy('exame_id')
            ->map(function ($exames, $exameId) {
                return [
                    'nome_exame' => $exames->first()->nome_exame,
                    'quantidade' => $exames->count(),
                ];
            });
        }
      
    
    // Extraindo os nomes dos exames e as quantidades
    $nomesExames = $examesPorId->pluck('nome_exame')->toArray();
    $quantidades = $examesPorId->pluck('quantidade')->toArray();

    $qtdExames = (new LarapexChart)->barChart()
   
    ->setSubtitle('')
    ->addData('Exames', $quantidades)
    ->setXAxis($nomesExames)
    ->setColors(['#0E6664'])
    ->setSparkline()
    ->setHeight(315);

    $maisvendidos = Venda::join('exames', 'exames.id', 'vendas.exame_id')
    ->join('exame_farmacias', 'exame_farmacias.exame_id', 'vendas.exame_id')
    ->select('vendas.exame_id', 'exames.nome', 'exame_farmacias.estoque', DB::raw('COUNT(vendas.exame_id) as total_vendas'))
    ->where('vendas.cliente_id', auth()->user()->cliente_id)
    ->groupBy('vendas.exame_id', 'exames.nome', 'exame_farmacias.estoque')
    ->orderBy('total_vendas', 'desc')
    ->get();

    $ticketmedio = Venda::join('exames', 'exames.id', 'vendas.exame_id')
    ->join('exame_farmacias', 'exame_farmacias.exame_id', 'vendas.exame_id')
    ->select(
        'vendas.exame_id', 
        'exames.nome', 
        'exame_farmacias.estoque', 
        DB::raw('COUNT(vendas.exame_id) as total_vendas'), 
        DB::raw('SUM(vendas.valor) as valor_total'),
        DB::raw('AVG(vendas.valor) as ticket_medio')  // Calcula o ticket médio
    )
    ->where('vendas.cliente_id', auth()->user()->cliente_id)
    ->groupBy('vendas.exame_id', 'exames.nome', 'exame_farmacias.estoque')
    ->orderBy('total_vendas', 'desc')
    ->get();


        return view('pages.painel.farmacia.graficos.index', compact('qtdExames','maisvendidos','ticketmedio'));
    }

    public function filtroGrafico(Request $request){

        if($request == null || $request->data_ini == null || $request->data_fim == null){
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
        }else{
            $examesPorId = Agenda::where('status', 'pronto')
            ->where('cliente_id', auth()->user()->cliente_id)
            ->whereBetween('data_exame', [$request->data_ini, $request->data_fim])
            ->select('exame_id', 'nome_exame')
            ->get()
            ->groupBy('exame_id')
            ->map(function ($exames, $exameId) {
                return [
                    'nome_exame' => $exames->first()->nome_exame,
                    'quantidade' => $exames->count(),
                ];
            });
        }
      
    
    // Extraindo os nomes dos exames e as quantidades
    $nomesExames = $examesPorId->pluck('nome_exame')->toArray();
    $quantidades = $examesPorId->pluck('quantidade')->toArray();

    $qtdExames = (new LarapexChart)->barChart()
   
    ->setSubtitle('')
    ->addData('Exames', $quantidades)
    ->setXAxis($nomesExames)
    ->setColors(['#0E6664'])
    ->setSparkline()
    ->setHeight(315);
        return view('pages.painel.farmacia.graficos.filtro_graf', compact('qtdExames'));
    }
}
