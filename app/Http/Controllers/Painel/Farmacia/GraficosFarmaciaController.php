<?php

namespace App\Http\Controllers\Painel\Farmacia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficosFarmaciaController extends Controller
{
    public function index()
    {
        $qtdExames = (new LarapexChart)->barChart()
            ->setHorizontal(false)
            ->setXAxis(['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom'])
            ->setDataset([[
                'name'  =>  'Vendas',
                'data'  =>  [90, 9, 3, 4, 10, 8, 5, 6, 9, 3, 4, 10, 8, 5]
            ]])
            ->setColors(['#0E6664'])
            ->setSparkline()
            ->setHeight(315);




        return view('pages.painel.farmacia.graficos.index', compact('qtdExames'));
    }
}
