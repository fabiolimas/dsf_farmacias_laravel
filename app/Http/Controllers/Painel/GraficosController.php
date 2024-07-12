<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;

class GraficosController extends Controller
{
    public function index()
    {
        $faturamento = (new LarapexChart)->barChart()
            ->setHorizontal(false)
            ->setXAxis(['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom'])
            ->setDataset([[
                'name'  =>  'Vendas',
                'data'  =>  [6, 9, 3, 4, 10, 8, 5]
            ]])
            ->setColors(['#0E6664'])
            ->setSparkline()
            ->setHeight(315);

        $qtdExames = (new LarapexChart)->barChart()
            ->setHorizontal(false)
            ->setXAxis(['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom'])
            ->setDataset([[
                'name'  =>  'Vendas',
                'data'  =>  [6, 9, 3, 4, 10, 8, 5, 6, 9, 3, 4, 10, 8, 5]
            ]])
            ->setColors(['#0E6664'])
            ->setSparkline()
            ->setHeight(315);

        $mapaClientes = (new LarapexChart)->pieChart()
            ->setDataset([20, 24, 30, 15, 25])
            ->setLabels([
                'São Paulo (SP)',
                'Belo Horizonte (MG)',
                'Rio de Janeiro (RJ)',
                'Goiânia (GO)',
                'Curitiba (PR)',
            ])
            ->setColors([
                '#E6F2F1',
                '#B2D2D2',
                '#CCEFEE',
                '#B2D2D2',
                '#CCEFEE',
            ]);


        return view('pages.painel.admin.graficos.index', compact('faturamento', 'qtdExames', 'mapaClientes'));
    }
}
