@extends('layouts.painel.app')
@section('title', 'Iniciar Atendimento')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Iniciar atendimento -->
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Iniciar atendimento</h1>

                        <form action="#" method="post">


                            <!-- Responsável -->
                            <div class="mb-3 pb-2">
                                <label for="responsavel" class="form-label text-green fw-500 fs-18px">Responsável</label>
                                <select
                                    class="form-select form-control-custom fs-18px fw-500 @error('responsavel') is-invalid @enderror"
                                    name="responsavel" id="responsavel" required>
                                    <!-- tood: ver no figma se tem opcoes -->
                                    <option value="" class="fw-500">João Almeida</option>
                                    <option value="" class="fw-500">João Almeida</option>
                                </select>
                                @error('responsavel')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- cliente  -->
                            <div class="mb-3 pb-2">
                                <label for="cliente" class="form-label text-green fw-500 fs-18px">
                                    Cliente
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cliente') is-invalid @enderror"
                                    name="cliente" id="cliente" value="{{ old('cliente') }}"
                                    placeholder="ex: Pedro Henrique" required />
                                @error('cliente')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- exame  -->
                            <div class="mb-3 pb-2">
                                <label for="exame" class="form-label text-green fw-500 fs-18px">
                                    Exame
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('exame') is-invalid @enderror"
                                    name="exame" id="exame" placeholder="ex: COVID-19" value="{{ old('exame') }}"
                                    required />
                                @error('exame')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Data do exame  -->
                            <div class="mb-3 pb-2">
                                <label for="dt_exame" class="form-label text-green fw-500 fs-18px">
                                    Data do exame
                                </label>
                                <input type="date"
                                    class="form-control form-control-custom fs-18px fw-500 @error('dt_exame') is-invalid @enderror"
                                    name="dt_exame" id="dt_exame" placeholder=""
                                    value="{{ old('dt_exame', date('Y-m-d')) }}" required />
                                @error('dt_exame')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Horário de início  -->
                            <div class="mb-3 pb-2">
                                <label for="hora_inicio" class="form-label text-green fw-500 fs-18px">
                                    Horário de início
                                </label>
                                <input type="time"
                                    class="form-control form-control-custom fs-18px fw-500 @error('hora_inicio') is-invalid @enderror"
                                    name="hora_inicio" id="hora_inicio" placeholder=""
                                    value="{{ old('hora_inicio', date('H:i')) }}" required />
                                @error('hora_inicio')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="pt-5">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600">
                                    Iniciar
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- Folha de exame -->
            <div class="col-12 col-lg-7 col-xl-8">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Folha de exame</h2>



                    </div>
                </div>

            </div>



        </div>

    </div>


@endsection
