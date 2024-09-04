@extends('layouts.painel.app')
@section('title', 'Cadastrar novo exame')
@section('content')
    <div class="">
        <div class="row gy-4">


            <div class="col-12 col-lg-12 col-xl-12 itensPedido">
                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">
                        @if ($itensPedido->count() == 0)
                        @else
                        <h2 class="fs-4 fw-600 text-green-2 ">Itens do pedido - #{{$pedido->id}}</h2>
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

                            <div class="row">

                                <div class="col-md-12 " style="display:flex; justify-content:flex-end">
                                   <h5>R$ {{number_format($totalPedido,2,',','.')}}</h5>
                                </div>
                            </div>
                    </div>
                    @if($pedido->status != 'aberto')

                    @else
                    <div class="row">
                        <div class="col-md-12 " style="display:flex; justify-content:flex-end; margin:5px">
                            <div class="pt-3 m-3">
                                <a href="@if($pedido->status != 'aberto') #  @else {{route('painel.admin.compras.confirmar-pedido', $pedido->id)}} @endif " >
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600" id="btnSalvarPedido" @if($pedido->status != 'aberto') disabled @else @endif >
                                    Confirmar
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>


            @endif
        </div>


        <script>
            $(document).ready(function() {
                $('#exame').select2();
            });


            $('document').ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // salvar Pedido


                $('#btnSalvarPedido').click(function() {

$.ajax({
    url: "{{ route('painel.admin.compras.salvar-pedido', $pedido->id) }}", // Arquivo PHP que processará a busca
    type: "post",
    data: {
        id: {{$pedido->id}},
        total_pedido:$('#totalPedido').val(),


    }, // Dados a serem enviados para o servidor
    success: function(response) {

    window.location.href="{{route('painel.admin.compras.index')}}";

    },
    error: function(result) {
        console.log(result);
    }



});
});

            });
        </script>

    @endsection
