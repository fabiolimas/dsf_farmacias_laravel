@extends('layouts.painel.app')
@section('title', 'Visualizar Exame')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Visualizar exame -->
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="card ">
                    <div class="card-body py-3 px-0 px-lg-2  py-lg-4">

                        <div class="px-3 d-flex justify-content-between align-items-center mb-3 ">
                            <h2 class="fs-4 fw-600 text-green-2 ">Visualizar exame</h2>
                        </div>

                        <div class="px-3">
                            <img src="{{ asset('assets/img/ilustracoes/exame.png') }}" alt="" class="w-100">
                        </div>

                        <div class=" px-3 mt-4 d-lg-flex">
                            <a class="w-100  btn btn-primary d-block d-md-inline-block mb-3 me-lg-3   "
                                href="{{ route('painel.farmacia.clientes.create') }}" role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                    <i data-feather="send"></i>
                                    Enviar por email
                                </div>
                            </a>
                            <a name="" id="" class="w-100  btn btn-outline-primary d-block d-md-inline-block mb-3 "
                                href="" role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                    <i data-feather="download"></i>
                                    Baixar
                                </div>
                                
                            </a>
                        </div>


                    </div>
                </div>

            </div>



        </div>

    </div>

@endsection

@section('scripts')
@endsection
