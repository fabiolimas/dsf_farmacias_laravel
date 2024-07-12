<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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


        return view('pages.painel.home', compact('faturamento', 'mapaClientes'));
    }
}
