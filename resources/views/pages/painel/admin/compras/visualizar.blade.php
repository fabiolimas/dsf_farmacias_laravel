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
                    <!-- Modal receber pedido -->
                    <div class="modal modal-custom fade" id="modal-receber-pedido-{{$pedido->id}}" tabindex="-1"
                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                        aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0"
                            role="document">
                            <div class="modal-content bg-transparent ">
                                <div class="modal-body p-lg-5  border-0">

                                    <div class="p-4 shadow rounded-3  bg-white border">


                                        <div class="fs-5 text-center">
                                            Confirmar Pedido?
                                        </div>
                                        <div class="fs-5 text-center text-warning">
                                            <i data-feather="alert-triangle"></i> Lembre-se de configurar o preço de venda dos exames na tela de Estoque!
                                        </div>



                                            <div class="row mt-4 pt-2 gy-2">
                                                <div class="col-12 col-lg-6">
                                                    <button type="button"
                                                        data-bs-dismiss="modal"
                                                        class="btn btn-danger w-100 py-2 fs-16px "
                                                        id="modal-link-editar-user">
                                                        Cancelar
                                                    </button>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <a href="{{route('painel.admin.compras.confirmar-pedido', $pedido->id)}} " >
                                                    <button type="submit"
                                                        id="modal-link-ver-mais"
                                                        class="btn btn-primary w-100 py-2 fs-16px">Sim</button>
                                                    </a>
                                                </div>
                                            </div>


                                    </div>

                                    <div class="fechar-modal text-center pt-2 pt-lg-4">
                                        <button type="button"
                                            class="btn btn-ligth shadow bg-white text-green-2 py-1"
                                            data-bs-dismiss="modal">
                                            <i data-feather="x"></i>
                                            Fechar
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 " style="display:flex; justify-content:flex-end; margin:5px">
                            <div class="pt-3 m-3">

                                <button type="button" class="btn btn-primary w-100 py-2 fw-600" id="btnSalvarPedido" @if($pedido->status != 'aberto') disabled @else @endif data-bs-toggle="modal" data-bs-target="#modal-receber-pedido-{{$pedido->id}}"
                                    title="Confirmar">

                                    <i class="" data-feather="check"></i>Confirmar
                                </button>

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






        </script>

    @endsection
