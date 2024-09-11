@extends('layouts.painel.app')
@section('title', 'Estoque')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12">
                <div class="card min-vh-100">
                    <div class="card-body px-2 px-md-4 py-4">



                        <!-- lista -->
                        <div class="mt-2 pt-1 ">
                            <div class="">
                                <div
                                    class="d-sm-flex text-center text-md-start justify-content-between gap-2 align-items-center">
                                    <h1 class="fs-4 fw-600 mb-4 text-green-2">
                                        Estoque
                                    </h1>
                                    {{-- <div class="">
                                        <a class="btn btn-primary d-block d-md-inline-block mb-3 py-2 px-3   "
                                            href="{{ route('painel.farmacia.clientes.create') }}" role="button"
                                            style="">
                                            <div class="d-flex justify-content-center gap-2 align-items-center py-1">
                                                <i data-feather="user-plus"></i>
                                                Cadastrar novo cliente
                                            </div>
                                        </a>
                                    </div> --}}
                                    @if($exameSemPreco >=1)
                                    <span class="produtoSemPreco text-danger bg-warning"><i data-feather="alert-triangle" title="Configurar preço de venda"></i>Existem exames sem preço de venda!</span>
                                    @else

                                    @endif
                                </div>
                                <!-- pesquisa -->
                                <div class="pt-3">
                                    <div class="mb-3 position-relative">
                                        <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                        <input type="text" class="form-control input-pesquisar-cliente" name="pesquisa"
                                            id="pesquisa" placeholder="Pesquisar" />

                                        <button type="submit" class="btn btn-none text-green p-1"
                                            style="position: absolute; top:3px; right: 20px">
                                            <i data-feather="search"></i>
                                        </button>

                                    </div>

                                </div>


                                <div class="table-responsive mt-5">
                                    <table class="table text-green-2 resultBusca">
                                        <thead>
                                            <tr class="fs-18px ">
                                                <th scope="col"><span
                                                        class="text-green-2 d-inline-block pb-3">Descrição</span></th>
                                                <th scope="col"><span class="text-green-2 d-inline-block pb-3">Quantidade</span>
                                                </th>
                                                <th scope="col"><span class="text-green-2 d-inline-block pb-3">Valor de Compra</span></th>
                                                <th scope="col"><span
                                                        class="text-green-2 d-inline-block pb-3">Valor de Venda</span></th>
                                                        <th scope="col"><span
                                                            class="text-green-2 d-inline-block pb-3">Opção</span></th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($exames as $exame)
                                                <tr class=" table-tr-cliente fw-500 fs-18px " data-bs-toggle="modal"
                                                    data-bs-target="#detalhes-produto-{{ $exame->exame_farma_id }}"
                                                    style="cursor:pointer">
                                                    <td class="@if($exame->valor == null || $exame->valor < 1) text-danger @else @endif">
                                                        <span  class="@if($exame->valor == null || $exame->valor < 1) text-danger @else text-green @endif "> @if($exame->valor == null || $exame->valor < 1)

                                                        @else  @endif {{ $exame->nome }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="@if($exame->valor == null || $exame->valor < 1) text-danger @else text-green @endif">{{ $exame->estoque }}</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                        class="@if($exame->valor == null || $exame->valor < 1) text-danger @else text-green @endif">R$ {{number_format($exame->valor_de_compra,2,',','.')}}</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                        class="@if($exame->valor == null || $exame->valor < 1) text-danger @else text-green @endif">R$ {{number_format($exame->valor,2,',','.')}}</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                        class="text-green"><i data-feather="edit"></i></span>
                                                    </td>



                                                </tr>

                                                <div class="modal modal-custom fade" id="detalhes-produto-{{ $exame->exame_farma_id }}" tabindex="-1"
                                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
                                                        <div class="modal-content bg-transparent ">
                                                            <div class="modal-body p-lg-5  border-0">

                                                                <div class="p-4 shadow rounded-3  bg-white border">


                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"> Atualizar Preço de Venda</h5>

                                                                      </div>

                                                                    <form action="{{ route('painel.farmacia.estoque.update', $exame->exame_farma_id) }}" method="post"
                                                                        id="form-remover">

                                                                        @csrf


                                                                        <input type="hidden" name="exame_id" value="{{ $exame->exame_farma_id }}">

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
                                                                                        name="quantidade" id="qtd_estoque" value="{{ $exame->estoque }}"
                                                                                        placeholder="0" disabled/>

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
                                                                                name="valor" id="valor" placeholder="R$ 0,00" value="{{$exame->valor}}" required />
                                                                            @error('valor')
                                                                                <div class="invalid-feedback fw-500">{{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="row">

                                                                            <div class="col-md-6">
                                                                                <button type="button" class=" btn btn-secondary " data-bs-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">Cancelar</span>
                                                                                  </button>
                                                                            </div>
                                                                            <div class="col-md-6">

                                                                                <button type="submit" id="modal-link-ver-mais"
                                                                                    class="btn btn-primary w-100 py-2 fs-16px">Salvar</button>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>




@endsection


@section('scripts')

    <script>
        $('document').ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let resultado = $('.resultBusca');

            $('#pesquisa').keyup(function() {

                $.ajax({
                    url: "{{ route('painel.farmacia.estoque.busca-exame') }}", // Arquivo PHP que processará a busca
                    type: "post",
                    data: {
                        pesquisa: $('#pesquisa').val(),


                    }, // Dados a serem enviados para o servidor
                    success: function(response) {

                        resultado.html(response);
                        resultado.html(response.status);
                    },
                    error: function(result) {
                        console.log(result);
                    }



                });
            });

        });
    </script>
@endsection
