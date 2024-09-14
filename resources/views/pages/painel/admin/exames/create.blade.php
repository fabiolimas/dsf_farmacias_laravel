@extends('layouts.painel.app')
@section('title', 'Cadastrar novo exame')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- novo exame -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Cadastrar novo exame</h1>

                        <form action="{{ route('painel.admin.exames.store') }}" method="post">
                            @csrf

                            <!-- Nome do exame -->
                            <div class="mb-3 pb-2">
                                <label for="nome" class="form-label text-green fw-500 fs-18px">Nome do exame</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('nome') is-invalid @enderror"
                                    name="nome" id="nome" value="{{ old('nome') }}" placeholder="Ex: COVID-19"
                                    required />
                                @error('nome')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Laboratório -->
                            <div class="mb-3 pb-2">
                                <label for="laboratorio" class="form-label text-green fw-500 fs-18px">Laboratório</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('laboratorio') is-invalid @enderror"
                                    name="laboratorio" id="laboratorio" value="{{ old('laboratorio') }}"
                                    placeholder="Ex: Kovalent" required />
                                @error('laboratorio')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Registro MS -->
                            <div class="mb-3 pb-2">
                                <label for="registro_ms" class="form-label text-green fw-500 fs-18px">
                                    Registro MS
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('registro_ms') is-invalid @enderror"
                                    name="registro_ms" id="registro_ms" value="{{ old('registro_ms') }}" placeholder="00000"
                                    required />
                                @error('registro_ms')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-3 mt-5">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600">
                                    Próximo
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>
  

@endsection
