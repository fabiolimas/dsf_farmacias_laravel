<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Models\PedidoDeCompra;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

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

        $faturamentoCliente = PedidoDeCompra::join('clientes', 'clientes.id', '=', 'pedido_de_compras.cliente_id')
            ->select(
                'clientes.razao_social',
                'clientes.cnpj',
                DB::raw('SUM(pedido_de_compras.total_pedido) as total_faturado')
            )
            ->where('status', 'recebido')

            ->groupBy('clientes.razao_social', 'clientes.cnpj')
            ->orderBy('total_faturado', 'desc') // Agrupa por cliente
            ->get();



        return view('pages.painel.admin.graficos.index', compact('faturamento', 'qtdExames', 'mapaClientes', 'faturamentoCliente'));
    }
}
