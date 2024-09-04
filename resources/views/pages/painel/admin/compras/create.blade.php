@extends('layouts.painel.app')
@section('title', 'Cadastrar novo exame')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Cadastrar novo exame -->
            <div class="col-12 col-lg-5 col-xl-4">

                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">


                        <div class="px-3 d-flex justify-content-between align-items-center mb-4 pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 ">Pedido de Compra - #{{$pedido->id}}</h2>
                            <p class="farmaName">{{$cliente->razao_social}}</p>
                        </div>
                        <form action="#" method="post">
                            @csrf
                            <div class="px-3">



                                <!-- exame -->
                                <div class="mb-2 pb-3">
                                    <div class="mb-0 position-relative">
                                        <label for="pesquisa" class="form-label text-green fw-500 fs-18px w-100">
                                            <div class="d-flex justify-content-between gap-2 w-100 align-items-center">
                                                Exame
                                            </div>

                                        </label>
                                        <div class="position-relative">
                                            <select name="exame" id="exame" class="form-select form-control-custom">
                                                <option value="">Pesquisar</option>
                                                @foreach ($exames as $exame)
                                                    <option value="{{ $exame->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#detalhes-produto-{{ $exame->id }}">
                                                        {{ $exame->nome }}</option>
                                                @endforeach
                                            </select>

                                            <div class="resultExame"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pt-3">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600" id="btnSalvarPedido">
                                    Salvar Pedido
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 col-xl-6 itensPedido">
                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">
                        @if ($itensPedido->count() == 0)
                        @else
                        <h2 class="fs-4 fw-600 text-green-2 ">Itens do pedido</h2>

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Valor Unit.</th>
                                        <th scope="col">Total</th>
                                        <th scope="col"></th>
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
                                            <td><a href="{{route('painel.admin.compras.excluir-item', $item->id)}}"><i data-feather="trash-2"></i></a></td>
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
                </div>
            </div>


            @endif
        </div>
        @foreach ($exames as $exame)
            {{-- detalhes Produto --}}
            <div class="modal modal-custom fade" id="detalhes-produto-{{ $exame->id }}" tabindex="-1"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
                    <div class="modal-content bg-transparent ">
                        <div class="modal-body p-lg-5  border-0">

                            <div class="p-4 shadow rounded-3  bg-white border">


                                <div class="fs-5 text-center">
                                    Adicionar Exame
                                </div>


                                <form action="{{ route('painel.admin.compras.store.itemPedido') }}" method="post"
                                    id="form-remover">

                                    @csrf
                                    <input type="hidden" name="cliente_id" value="{{ $pedido->cliente_id }}">
                                    <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                                    <input type="hidden" name="exame_id" value="{{ $exame->id }}">
                                    <label for="lote_validade" class="form-label text-green fw-500 fs-18px">
                                        {{ $exame->nome }}
                                    </label>
                                    <!-- Lote e validade -->
                                    <div class="mb-3 pb-3">
                                        <label for="lote_validade" class="form-label text-green fw-500 fs-18px">
                                            Lote
                                        </label>
                                        <input type="text"
                                            class="form-control form-control-custom fs-18px fw-500 @error('lote_validade') is-invalid @enderror"
                                            name="lote" id="lote" placeholder=""
                                            value="{{ old('lote_validade', 0) }}" required />
                                        @error('lote_validade')
                                            <div class="invalid-feedback fw-500">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Quantidade em estoque -->
                                    <div class="mb-2 pb-3">
                                        <div class="mb-0 position-relative">
                                            <label for="qtd_estoque" class="form-label text-green fw-500 fs-18px w-100">
                                                <div class="d-flex justify-content-between gap-2 w-100 align-items-center">
                                                    Quantidade
                                                </div>

                                            </label>
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control form-control-custom @error('qtd_estoque') is-invallid @enderror fs-18px fw-500"
                                                    name="quantidade" id="qtd_estoque" value="{{ old('qtd_estoque') }}"
                                                    placeholder="0" />

                                                <div class="text-green-2 fw-500"
                                                    style="position: absolute; top:13px; right: 15px">
                                                    Unidades
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Valor de venda -->
                                    <div class="mb-3 pb-3">
                                        <label for="valor" class="form-label text-green fw-500 fs-18px">
                                            Valor de venda
                                        </label>
                                        <input type="text"
                                            class="form-control form-control-custom fs-18px fw-500 @error('valor') is-invalid @enderror"
                                            name="preco" id="valor" placeholder="R$ 0,00" value="" required />
                                        @error('valor')
                                            <div class="invalid-feedback fw-500">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <button type="submit" id="modal-link-ver-mais"
                                            class="btn btn-primary w-100 py-2 fs-16px">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach







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

                let resultado = $('.resultExame');

                $('#exame').change(function() {

                    $.ajax({
                        url: "{{ route('busca-exame-entrada') }}", // Arquivo PHP que processará a busca
                        type: "post",
                        data: {
                            id: $('#exame').val(),


                        }, // Dados a serem enviados para o servidor
                        success: function(response) {

                            resultado.html(
                                '<button type="button" class="btn btn-success mt-2" style="background:#01a09b" data-bs-toggle="modal" data-bs-target="#detalhes-produto-' +
                                response.id + '" >Adicionar</button>');

                        },
                        error: function(result) {
                            console.log(result);
                        }



                    });
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
