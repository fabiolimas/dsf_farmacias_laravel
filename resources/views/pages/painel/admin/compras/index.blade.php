@extends('layouts.painel.app')
@section('title', 'Exames')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-7 col-xl-7">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">
                        @can('farmacia')
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="fs-4 fw-600 mb-4 text-green-2 px-0 ps-lg-4  " style="min-width: 260px">
                                    Pedidos de Compras <span class="badge rounded-pill text-bg-primary fs-16px fw-500 px-2" id="total-assinaturas-hoje">{{$pedidoNovo}}</span>
                                </h1>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary d-block d-md-inline-block mb-3   " href="{{route('painel.farmacia.estoque.index')}}" role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="folder-plus"></i>
                                   Estoque
                                </div>
                            </a>
                            </div>
                        </div>



                        @endcan
                        <!--  -->
                        @can('admin')
                        @if($pedidoNovo >=1)

                        <div class=" px-4 ">
                            <a class="btn btn-primary d-block d-md-inline-block mb-3  " style="background:#db8502; border-color:#db8502" href="{{route('painel.admin.compras.create')}}"  role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center ">
                                    <i data-feather="folder-plus"></i>
                                    Finalizar pedido em aberto
                                </div>
                            </a>

                        </div>

                        @else
                        <div class=" px-4">
                            <a class="btn btn-primary d-block d-md-inline-block mb-3   " href="#" data-bs-toggle="modal"
                                data-bs-target="#modal-novo-pedido" role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="folder-plus"></i>
                                    Novo pedido de compra
                                </div>
                            </a>

                        </div>
                        @endif

                        <!-- lista -->
                        <div class="mt-2 pt-1 ">
                            <div class="mt-3">

                                <div class="d-flex  flex-column flex-lg-row gap-2 align-items-center ">
                                    <h1 class="fs-4 fw-600 mb-4 text-green-2 px-0 ps-lg-4  " style="min-width: 260px">
                                        Farmacias
                                    </h1>

                                    <!-- pesquisa -->
                                    <div class="w-100 pe-lg-4">
                                        <div class="mb-3 position-relative">
                                            <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                            {{-- <input type="text" class="form-control input-pesquisar-cliente"
                                                name="" id="pesquisa" placeholder="Pesquisar" /> --}}
                                            <select name="cliente_farmacia_id" id="cliente"
                                                class="form-select form-control-custom">
                                                <option value="">Todos</option>
                                                @foreach ($clientes as $cliente)
                                                    <option value="{{ $cliente->id }}">{{ $cliente->razao_social }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-none text-green p-1"
                                                style="position: absolute; top:3px; right: 20px">
                                                <i data-feather="search"></i>
                                            </button>

                                        </div>

                                    </div>

                                </div>

                                @endcan


                                <!-- lista -->
                                <div class="mt-4 pt-2">
                                    <div class="px-lg-4">

                                        <div id="load-pesquisa" style="display:none">
                                            <div class="spinner-border spinner-border-sm text-secondary mx-auto mb-3"
                                                role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>

                                        <div class="position-relative resultBusca" id="lista-exames">

                                            @foreach ($pedidos as $pedido)
                                                <div class="bg-green-light rounded-3  p-3 mt-3 ">

                                                    <div class="row">
                                                        <div class="d-flex gap-3 align-items-center col-md-6">
                                                            <span
                                                                class="@if ($pedido->status == 'recebido') pedidoRecebido @elseif($pedido->status=='novo') pedidoNovo @else tag @endif"></span>
                                                            <div class="fs-20px fw-500 ">
                                                                <a href="@can('admmin')@if($pedido->status != 'aberto') {{route('painel.admin.compras.visualizar', $pedido->id)}} @else {{ route('painel.admin.compras.edit', $pedido->id) }} @endif @endcan @can('farmacia'){{route('painel.admin.compras.visualizar', $pedido->id)}}@endcan"
                                                                    class="text-decoration-none d-block">
                                                                    <div class="text-green-2">

                                                                        {{ Str::limit($pedido->razao_social, 15, '...') }} - #Pedido {{$pedido->id}}</div>
                                                                    {{-- <div class="text-green">Carla Silva</div> --}}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        @can('admin')

                                                        <div class="col-md-6 acts"  >
                                                            <div class="col-md-3 ms-2">
                                                                <div class="mt-2 mt-sm-0">
                                                                    <div class="" >

                                                                            <button type="button"
                                                                            class="btn btn-ligth bg-white text-green px-2 w-100 "
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Imprimir">
                                                                            <a href="{{route('painel.admin.compras.printPedido', $pedido->id)}}" class="text-green"><i class="" data-feather="printer"></i></a>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 ms-2 @if($pedido->status =='recebido') d-none @else  @endif">
                                                                <div class="mt-2 mt-sm-0">
                                                                    <div class="" >

                                                                            <button type="button"
                                                                            class="btn btn-ligth bg-white text-green px-2 w-100 "
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Editar">
                                                                            <a href="{{route('painel.admin.compras.edit', $pedido->id)}}" class="text-green"><i class="" data-feather="edit"></i></a>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3 ms-2 @if($pedido->status =='recebido') d-none @else  @endif">
                                                                <div class="mt-2 mt-sm-0">
                                                                    <div class="" data-bs-toggle="modal"
                                                                        onclick="setRotaRemover(`{{ route('painel.admin.compras.excluir-pedido', $pedido->id) }}`)"
                                                                        data-bs-target="#modal-remover">
                                                                        <button type="button"
                                                                            class="btn btn-ligth bg-white text-green px-2 w-100 "
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Excluir">
                                                                            <i class="" data-feather="trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                        </div>
                                                        @endcan
                                                        @can('farmacia')
                                                        <div class="col-md-6 acts">
                                                            <div class="col-md-3 ms-2">
                                                                <div class="mt-2 mt-sm-0">
                                                                    <div class="" >

                                                                            <button type="button"
                                                                            class="btn btn-ligth bg-white text-green px-2 w-100 "
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Imprimir">
                                                                            <a href="{{route('painel.admin.compras.printPedido', $pedido->id)}}" class="text-green"><i class="" data-feather="printer"></i></a>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 ms-2">
                                                                <div class="mt-2 mt-sm-0">
                                                                    <div class="" >

                                                                            <button type="button"
                                                                            class="btn btn-ligth bg-white text-green px-2 w-100 "
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Visualizar">
                                                                            <a href="{{route('painel.admin.compras.visualizar', $pedido->id)}}" class="text-green"><i class="" data-feather="eye"></i></a>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            @if($pedido->status != 'aberto')

                                                            @else
                                                            <div class="col-md-3 ms-2">
                                                                <div class="mt-2 mt-sm-0">
                                                                    <div class="" >

                                                                        <button type="button"
                                                                            class="btn btn-ligth bg-white text-green px-2 w-100 "
                                                                           data-bs-toggle="modal" data-bs-target="#modal-receber-pedido-{{$pedido->id}}"
                                                                            title="Confirmar">
                                                                            <i class="" data-feather="check"></i>
                                                                        </button>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            @endif


                                                        </div>
                                                        @endcan
                                                    </div>
                                                    <div class="row detalhesp">
                                                        <div class="col-md-3">
                                                            <span class="dtls">R$ {{number_format($pedido->total_pedido,2,',','.')}}</span>
                                                        </div>
                                                        {{-- <div class="col-md-3">
                                                            <span class="dtls">{{$pedido->status}}</span>
                                                        </div> --}}
                                                        <div class="col-md-4">
                                                            <span class="dtls" style="margin-left:-20px"><i class="" data-feather="clock"></i>{{date('d-m-Y H:i', strtotime($pedido->created_at))}}</span>
                                                        </div>

                                                    </div>



                                                </div>

                                                <!-- Modal remover -->
                                                <div class="modal modal-custom fade" id="modal-remover" tabindex="-1"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0"
                                                        role="document">
                                                        <div class="modal-content bg-transparent ">
                                                            <div class="modal-body p-lg-5  border-0">

                                                                <div class="p-4 shadow rounded-3  bg-white border">


                                                                    <div class="fs-5 text-center">
                                                                        Tem certeza que deseja remover este Pedido?
                                                                    </div>


                                                                    <form
                                                                        action="{{ route('painel.admin.compras.excluir-pedido', $pedido->id) }}"
                                                                        method="post" id="form-remover">
                                                                        @method('delete')
                                                                        @csrf
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
                                                                                <button type="submit"
                                                                                    id="modal-link-ver-mais"
                                                                                    class="btn btn-primary w-100 py-2 fs-16px">Sim</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>

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
                                            @endforeach

                                        </div>

                                        <div class="">
                                            {{ $pedidos->links() }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    {{-- modal novo pedido --}}
    <div class="modal modal-custom fade" id="modal-novo-pedido" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
            <div class="modal-content bg-transparent ">
                <div class="modal-body p-lg-5  border-0">

                    <div class="p-4 shadow rounded-3  bg-white border">


                        <div class="fs-5 text-center">
                            Selecione a Farmácia
                        </div>


                        <form action="{{ route('painel.admin.compras.store') }}" method="post" id="form-remover">

                            @csrf


                            <!-- pesquisa -->

                            <div class="mb-3 position-relative">
                                <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                {{-- <input type="text" class="form-control input-pesquisar-cliente"
                                        name="" id="pesquisa" placeholder="Pesquisar" /> --}}
                                <select name="cliente_farmacia_id" id="cliente"
                                    class="form-select form-control-custom" required>
                                    <option value="">Pesquisar</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->razao_social }}</option>
                                    @endforeach
                                </select>


                            </div>
                            <div class="col-12 col-lg-12">
                                <button type="submit" id="modal-link-ver-mais"
                                    class="btn btn-primary w-100 py-2 fs-16px">Confirmar</button>
                            </div>
                    </div>
                    </form>

                </div>

                <div class="fechar-modal text-center pt-2 pt-lg-4">
                    <button type="button" class="btn btn-ligth shadow bg-white text-green-2 py-1"
                        data-bs-dismiss="modal">
                        <i data-feather="x"></i>
                        Fechar
                    </button>
                </div>

            </div>
        </div>
    </div>
    </div>



@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cliente').select2();


        });
    </script>
     <script>
        $('document').ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let resultado = $('.resultBusca');

            $('#cliente').change(function() {

                $.ajax({
                    url: "{{ route('painel.admin.compras.busca') }}", // Arquivo PHP que processará a busca
                    type: "post",
                    data: {
                        id: $('#cliente').val(),


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
