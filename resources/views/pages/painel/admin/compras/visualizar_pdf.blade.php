<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado - DSF</title>
   
</head>
<style>
    td {
    padding: 9px;
}
.row.mt-2, .row.mt-3, .row.mt-4 {
    margin-top:20px;
    margin-bottom:5px;
    font-size: 13px;
}
.logoResultado {
    width: 104px;
   
    position:absolute; 
    left:20px;
 
}
.titleResult{
    margin-bottom:5px;
    margin-left:5px;
}
table, th, td {
    border-collapse: collapse;
    border-bottom: 1px solid #b2d2d2;
        width: 100%;
}
    </style>
<body style="font-family:sans-serif">
    <div class="">
        <div class="row gy-4" style="padding:5px">

            <!-- Visualizar exame -->
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="card ">
                    <div class="card-body py-3 px-0 px-lg-2  py-lg-4">

                        {{-- <div class="px-3 d-flex justify-content-between align-items-center mb-3 ">
                            <h2 class="fs-4 fw-600 text-green-2 ">Visualizar exame</h2>
                        </div> --}}

                        <div class="px-3 folhaResultado">
                            {{-- <img src="{{ asset('assets/img/ilustracoes/exame.png') }}" alt="" class="w-100"> --}}
                            <div class="row cabecalho">
                                <div class="col-md-3 ">
                                    <div class="logoResultado">
                                        <img src="{{ asset($cliente->logo ?? 'assets/img/ilustracoes/profile.png') }}"
                                            class="w-100" style="width:100%">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="dados text-center" style="text-align: center; margin-left:20%">
                                        <h4>{{ $cliente->razao_social }}</h4>
                                        <p>Fone: {{ $cliente->telefone }} CNPJ: {{ $cliente->cnpj }}</p>
                                        <p>{{ $cliente->logradouro }}, {{ $cliente->num_endereco }} -
                                            {{ $cliente->cidade }} - {{ $cliente->estado }}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
    <div class="">
        <div class="row gy-4">


            <div class="col-12 col-lg-12 col-xl-12 itensPedido" style="margin-top:30px">
                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">
                        @if ($itensPedido->count() == 0)
                        @else
                        <h2 class="fs-4 fw-600 text-green-2 ">Pedido - #{{$pedido->id}}</h2>
                        @if($pedido->status != 'aberto')
                        <p >Status do pedido: <span class="pedidoRecebido">{{$pedido->status}}</span></p>
                        @else

                        <p >Status do pedido: <span class="tag">{{$pedido->status}}</span></p>

                        @endif

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Valor Unit.</th>
                                        <th scope="col">Total</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($itensPedido as $item)
                                        <tr>
                                            <td> {{ $loop->index + 1 }}</td>
                                            <td> {{ $item->nome }}</td>
                                            <td>{{ $item->quantidade }}</td>
                                            <td>R$ {{ number_format($item->preco, 2, ',', '.') }}</td>
                                            <td>R$ {{ number_format($item->quantidade * $item->preco, 2, ',', '.') }}</td>

                                        </tr>


                                        @php
                                                    $totalPedido+=$item->quantidade * $item->preco;
                                        @endphp
                                    @endforeach
                                    <input type="hidden" id="totalPedido" value="{{$totalPedido}}">
                            </table>

                            <div class="row" style="position:relative">

                                <div class="col-md-12 " style="position:absolute; right:29px;">
                                   <h5>R$ {{number_format($totalPedido,2,',','.')}}</h5>
                                </div>
                            </div>
                    </div>
                    @if($pedido->status != 'aberto')

                    @else
                    
                    @endif

                </div>
            </div>


            @endif
        </div>


        


