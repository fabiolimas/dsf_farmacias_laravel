<?php

namespace App\Http\Controllers\Painel;

use App\Models\Agenda;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\PedidoDeCompra;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficosController extends Controller
{
    public function index(Request $request)
    {
        $farmacia=Cliente::find(auth()->user()->cliente_id);
        $dataInicio = $request->input('data_inicio', '2024-01-01'); // Padrão: 1º de Janeiro de 2024
        $dataFim = $request->input('data_fim', now()->addDay()->format('Y-m-d')); // Padrão: Data atual

        // Filtrar os pedidos de compra entre as datas
        $faturamentoCliente = PedidoDeCompra::join('clientes', 'clientes.id', '=', 'pedido_de_compras.cliente_id')
            ->select(
                'clientes.razao_social',
                'clientes.cnpj',
                DB::raw('SUM(pedido_de_compras.total_pedido) as total_faturado')
            )
            ->where('status', 'recebido')
            ->whereBetween('pedido_de_compras.created_at', [$dataInicio, $dataFim]) // Filtrar por data
            ->groupBy('clientes.razao_social', 'clientes.cnpj')
            ->orderBy('total_faturado', 'desc') // Agrupar por cliente
            ->get();

            $labels = $faturamentoCliente->pluck('razao_social')->toArray(); // Rótulos (nomes dos clientes)
$dataset = $faturamentoCliente->pluck('total_faturado')->toArray(); // Dados (faturamento)

// Criar o gráfico Larapex
$faturamentografico = (new LarapexChart)->barChart()
    ->setHorizontal(false) // Gráfico de barras vertical
    ->setXAxis($labels) // Definir os clientes como rótulos do eixo X
    ->setDataset([[
        'name'  =>  'Faturamento',
        'data'  =>  $dataset // Definir o faturamento como dados do gráfico
    ]])
    ->setColors(['#0E6664']) // Cor das barras
    ->setSparkline()
    ->setHeight(315); // Altura do gráfico

     // Consulta para obter a quantidade de exames por cliente
     $examesPorCliente = Agenda::
        join('clientes','clientes.id','agendas.cliente_id')
     ->select('cliente_id', DB::raw('COUNT(*) as total_exames'),'clientes.razao_social')
     ->where('status', 'pronto')
     ->groupBy('cliente_id','clientes.razao_social')
     ->get();

 // Extrair os rótulos e os dados
 $labels = $examesPorCliente->pluck('razao_social')->toArray(); // IDs dos clientes
 $dataset = $examesPorCliente->pluck('total_exames')->toArray(); // Quantidade de exames

 // Criar o gráfico Larapex
 $qtdExames = (new LarapexChart)->barChart()
     ->setHorizontal(false) // Gráfico de barras vertical
     ->setXAxis($labels) // Definir os clientes como rótulos do eixo X
     ->setDataset([[
         'name'  =>  'Exames por Cliente',
         'data'  =>  $dataset // Definir a quantidade de exames como dados do gráfico
     ]])
     ->setColors(['#0E6664']) // Cor das barras
     ->setSparkline()
     ->setHeight(315); // Altura do gráfico

     $clientesMap=Cliente::
    select('cidade', DB::raw('COUNT(*) as totalcidade'))
    ->groupBy('cidade')
    ->get();


     $labelscity = $clientesMap->pluck('cidade')->toArray(); // IDs dos clientes
     $datasetcity = $clientesMap->pluck('totalcidade')->toArray(); // Quantidade de exames

$mapaClientes = (new LarapexChart)->pieChart()
    ->setDataset([[
        'name'  =>  'Exames por Cliente',
        'data'  =>  $datasetcity // Definir a quantidade de exames como dados do gráfico
    ]])
    ->setLabels($labelscity)
    ->setColors([
        '#E6F2F1',
        '#B2D2D2',
        '#CCEFEE',
        '#B2D2D2',
        '#CCEFEE',
    ]);



        return view('pages.painel.admin.graficos.index', compact('farmacia','clientesMap','dataInicio','dataFim','faturamentografico', 'qtdExames', 'mapaClientes', 'faturamentoCliente'));
    }
}
