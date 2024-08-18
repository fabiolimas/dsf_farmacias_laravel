@extends('layouts.painel.app')
@section('title', 'Exames')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-7 col-xl-8">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">

                        <!-- lista -->
                        <div class=" ">
                            <div class="">

                                <!--  -->
                                <div class=" px-1 px-lg-3 mb-3">
                                    <a class="btn btn-primary d-block d-md-inline-block mb-3 me-lg-3   "
                                        href="{{ route('painel.farmacia.exames.create') }}" role="button"
                                        style="padding: 16px 24px;">
                                        <div class="d-flex gap-2 align-items-center">
                                            <i data-feather="folder-plus"></i>
                                            Cadastrar novo exame
                                        </div>
                                    </a>

                                </div>

                                <div class="d-flex pb-1  flex-column flex-lg-row gap-2 align-items-center pt-3 ">
                                    <h1 class="fs-4 fw-600  text-green-2 px-0 ps-lg-4  text-center text-md-start" style="min-width: 280px">
                                        Exames realizados
                                    </h1>

                                    <!-- pesquisa -->
                                    <div class="w-100 px-2 px-md-0 pe-lg-4">
                                        <div class=" position-relative">
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
                                <div class="mt-4 px-2 px-md-0">
                                    <div class="px-2 px-lg-4">
                                        @foreach ($examesProntos as $examePronto)
                                            <div class="bloco-exames-realizados bg-green-light rounded-3 mb-3 p-3 p-md-4 ">

                                                <div class="d-xl-flex gap-3 px-0 px-md-2 align-items-center ">
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div class="">
                                                            <div
                                                                class="bg-white border-green-light px-2 py-2 fw-600  text-center lh-1 rounded-3">
                                                                <div class="fs-24px text-green-2 mb-1 px-2">{{date('d',strtotime($examePronto->data_exame))}}</div>
                                                                <div class="fs-16px text-green px-2 fw-500">{{date('M', strtotime($examePronto->data_exame))}}</div>
                                                            </div>
                                                        </div>

                                                        <div class="fs-20px fw-500 ">
                                                            <a href="{{ route('painel.farmacia.exames.show', ['id' => $examePronto->id]) }}"
                                                                class="text-decoration-none d-block">
                                                                <div class="text-green-2">{{$examePronto->nome_exame}}</div>
                                                                <div class="text-green">{{$examePronto->nome_cliente}}</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- img -->
                                                    <div
                                                        class="flex-bloco-img d-xl-flex gap-3 mt-lg-3 mt-lg-0 justify-content-center justify-content-lg-start">
                                                        <div class="">
                                                            <a href="{{ route('painel.farmacia.exames.show', ['id' => 1]) }}"
                                                                class="text-decoration-none d-block">
                                                                <img src="{{ asset('assets/img/ilustracoes/exame.jpg') }}"
                                                                    alt=""
                                                                    class="w-100 rounded-3 border-green-light"
                                                                    style="filter: blur(0px)">
                                                            </a>
                                                        </div>

                                                        <!-- acoes -->


                                                        <a href="{{ route('painel.farmacia.exames.show', ['id' => 1]) }}"
                                                            class="btn btn-primary-light text-center  py-2  text-green d-flex align-items-center"
                                                            style="background: #B2D2D2" title="Visualizar">
                                                            <i class="mx-auto" data-feather="printer"
                                                                style="min-width: 70px; min-height: 45px; stroke-width: 1.6"></i>
                                                        </a>


                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach


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

@endsection
