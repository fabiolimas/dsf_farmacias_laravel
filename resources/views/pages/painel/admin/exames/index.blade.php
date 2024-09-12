@extends('layouts.painel.app')
@section('title', 'Exames')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-7 col-xl-7">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">

                        <!--  -->
                        <div class=" px-4">
                            <a class="btn btn-primary d-block d-md-inline-block mb-3   "
                                href="{{ route('painel.admin.exames.create') }}" role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="folder-plus"></i>
                                    Cadastrar novo exame
                                </div>
                            </a>

                        </div>

                        <!-- lista -->
                        <div class="mt-2 pt-1 ">
                            <div class="mt-3">

                                <div class="d-flex  flex-column flex-lg-row gap-2 align-items-center ">
                                    <h1 class="fs-4 fw-600 mb-4 text-green-2 px-0 ps-lg-4  " style="min-width: 260px">Exames
                                        postados</h1>

                                    <!-- pesquisa -->
                                    <div class="w-100 pe-lg-4">
                                        <div class="mb-3 position-relative">
                                            <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                            <input type="text" class="form-control input-pesquisar-cliente"
                                                name="" id="pesquisa" placeholder="Pesquisar" />

                                            <button type="submit" class="btn btn-none text-green p-1"
                                                style="position: absolute; top:3px; right: 20px">
                                                <i data-feather="search"></i>
                                            </button>

                                        </div>

                                    </div>

                                </div>




                                <!-- lista -->
                                <div class="mt-4 pt-2">
                                    <div class="px-lg-4">

                                        <div id="load-pesquisa" style="display:none">
                                            <div class="spinner-border spinner-border-sm text-secondary mx-auto mb-3"
                                                role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>

                                        <div class="" id="lista-exames">

                                            @foreach ($exames as $exame)
                                                <div class="bg-green-light rounded-3 mb-3 p-3 p-md-4 ">
                                                    <div class="d-xl-flex gap-3 px-md-2 align-items-center">
                                                        <div class="d-flex gap-3 align-items-center">

                                                            <div class="fs-20px fw-500 ">
                                                                <a href="{{ route('painel.admin.exames.edit', $exame->id) }}"
                                                                    class="text-decoration-none d-block">
                                                                    <div class="text-green-2">{{ $exame->nome }}</div>
                                                                    {{-- <div class="text-green">Carla Silva</div> --}}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- img -->
                                                        <div class=" d-sm-flex gap-3 mt-2 mt-xl-0">
                                                            <div class="">
                                                                <a href="{{ route('painel.admin.exames.edit', $exame->id) }}"
                                                                    class="text-decoration-none d-block">
                                                                    <img src="{{ asset('assets/img/logos/logo.svg') }}"
                                                                        alt=""
                                                                        class="w-100 rounded-3 border-green-light"
                                                                        style="filter: blur(0px)">
                                                                </a>
                                                            </div>

                                                            <!-- acoes -->


                                                            <a href="{{ route('painel.admin.exames.edit', $exame->id) }}"
                                                                class="btn btn-primary-light text-center mt-2 mt-sm-0  py-2  text-green d-flex align-items-center"
                                                                style="background: #B2D2D2" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="">
                                                                <i class="mx-auto" data-feather="edit-3"
                                                                    style="min-width: 70px; min-height: 45px; stroke-width: 1.6"></i>
                                                            </a>

                                                            <div class="mt-2 mt-sm-0">
                                                                <div class="" data-bs-toggle="modal"
                                                                    onclick="setRotaRemover(`{{ route('painel.admin.exames.destroy', $exame->id) }}`)"
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
                                                </div>
                                                <!-- Modal remover -->
    <div class="modal modal-custom fade" id="modal-remover" tabindex="-1" data-bs-backdrop="static"
    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
        <div class="modal-content bg-transparent ">
            <div class="modal-body p-lg-5  border-0">

                <div class="p-4 shadow rounded-3  bg-white border">


                    <div class="fs-5 text-center">
                        Tem certeza que deseja remover este exame?
                    </div>


                    <form action="{{ route('painel.admin.exames.destroy', $exame->id) }}" method="post" id="form-remover">
                       @method('delete')
                        @csrf
                        <div class="row mt-4 pt-2 gy-2">
                            <div class="col-12 col-lg-6">
                                <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-danger w-100 py-2 fs-16px " id="modal-link-editar-user">
                                    Cancelar
                                </button>
                            </div>
                            <div class="col-12 col-lg-6">
                                <button type="submit" id="modal-link-ver-mais"
                                    class="btn btn-primary w-100 py-2 fs-16px">Sim</button>
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
                                            @endforeach

                                        </div>

                                        <div class="">
                                            {{ $exames->links() }}
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



    

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <script>
        function setRotaRemover(rota) {
            document.getElementById('form-remover').action = rota
        }


        function pesquisar() {
            let str = document.querySelector('#pesquisa').value

            document.getElementById('lista-exames').innerHTML = ''
            let docLoad = document.getElementById('load-pesquisa')
            docLoad.className = 'd-flex'


            // getClientesJson


            axios
                .get(`{{ route('painel.admin.clientes.pesquisar') }}?nome=${str}`)
                .then(res => {
                    console.log(res.data);

                    document.getElementById('lista-exames').innerHTML = ''
                    let html = ''

                    for (let i in res.data) {


                        html += `
                        <div class="bg-green-light rounded-3 mb-3 p-3 p-md-4 ">
                            <div class="d-xl-flex gap-3 px-md-2 align-items-center">
                                <div class="d-flex gap-3 align-items-center">

                                    <div class="fs-20px fw-500 ">
                                        <a href="{ route('painel.farmacia.exames.show', ['id' => 1]) }"
                                            class="text-decoration-none d-block">
                                            <div class="text-green-2">{ $exame->nome }</div>
                                            <div class="text-green">Carla Silva</div>
                                        </a>
                                    </div>
                                </div>
                                <!-- img -->
                                <div class=" d-sm-flex gap-3 mt-2 mt-xl-0">
                                    <div class="">
                                        <a href="{ route('painel.farmacia.exames.show', ['id' => 1]) }"
                                            class="text-decoration-none d-block">
                                            <img src="{ asset('assets/img/ilustracoes/exame.jpg') }"
                                                alt=""
                                                class="w-100 rounded-3 border-green-light"
                                                style="filter: blur(0px)">
                                        </a>
                                    </div>

                                    <!-- acoes -->


                                    <a href="{ route('painel.admin.exames.edit', $exame->id) }"
                                        class="btn btn-primary-light text-center mt-2 mt-sm-0  py-2  text-green d-flex align-items-center"
                                        style="background: #B2D2D2" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="">
                                        <i class="mx-auto" data-feather="edit-3"
                                            style="min-width: 70px; min-height: 45px; stroke-width: 1.6"></i>
                                    </a>

                                    <div class="mt-2 mt-sm-0">
                                        <div class="" data-bs-toggle="modal"
                                            onclick="setRotaRemover(`{ route('painel.admin.exames.destroy', $exame->id) }`)"
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
                        </div>
                        `
                    }

                    docLoad.className = 'd-none'
                    document.getElementById('lista-exames').innerHTML = html
                    if (html == '') {
                        document.getElementById('lista-exames').innerHTML = `
                            <div class="alert alert-warning text-center fs-4 fw-300" role="alert">
                                Sem registros.
                            </div>
                        `
                    }

                })
        }
        document.querySelector('#pesquisa').onkeyup = function() {
            pesquisar()
        }
    </script>
@endsection
