@extends('layouts.painel.app')
@section('title', 'Adicionar Cargo')
@section('content')
    <div class="">
        <form action="{{ route('painel.config.cargos.store') }}" method="post">
            @csrf
            <div class="row gy-4">

                <!-- Adicionar Cargo -->
                <div class="col-12 col-lg-6 col-xl-4 order-2 order-lg-1">
                    <div class="card ">
                        <div class="card-body p-3 p-lg-4">

                            <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Informações do cargo</h1>


                            <!-- Nome  -->
                            <div class="mb-3 pb-2">
                                <label for="titulo" class="form-label text-green fw-500 fs-18px">
                                    Título do cargo
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('titulo') is-invalid @enderror"
                                    name="titulo" id="titulo" value="{{ old('titulo') }}" placeholder="ex: Farmacêutico"
                                    required />
                                @error('titulo')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Quem faz parte desse cargo? -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="quem_faz_parte" class="form-label text-green fw-500 fs-18px">
                                    Quem faz parte desse cargo?
                                </label>
                                <button type="button" class="btn btn-none border-0 text-green p-1 "
                                    style="position: absolute; top: 43px; right: 13px">
                                    <i data-feather="search" width="25"></i>
                                </button>

                                <input type="text" class="form-control form-control-custom fs-18px fw-500"
                                    name="quem_faz_parte" id="quem_faz_parte" placeholder="Digite o nome" value="" />

                                <!-- resultado pesquisa -->
                                <div class="resultado-pesquisa-colaborador" id="resultado-pesquisa-colaborador"
                                    style="display: none">
                                    <!-- lista pesquisa -->
                                </div>
                            </div>
                            <!-- items -->
                            <div class="d-flex gap-2 flex-wrap" id="colaboradores-adicionados">
                                <!--  -->
                            </div>



                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600">
                                    Salvar informações
                                </button>

                            </div>


                        </div>
                    </div>

                </div>

                <!-- Acessos do cargo -->
                <div class="col-12 col-lg-6 col-xl-4 order-1 order-lg-2">
                    <div class="card ">
                        <div class="card-body p-3 p-lg-4">

                            <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Acessos do cargo</h1>

                            <!--  -->
                            <div
                                class="d-flex align-items-center gap-3 bg-green-light border-green-light p-2 rounded-3 mb-4">
                                <div class="fw-500 ps-2">
                                    <div class="fs-20px text-green-2 fw-600 ps-lg-1">Agenda</div>
                                </div>
                                <div class="ms-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="permissoes[0]"
                                            value="agenda" id="flexSwitchCheckDefault"
                                            @if (old('permissoes.0')) checked @endif>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div
                                class="d-flex align-items-center gap-3 bg-green-light border-green-light p-2 rounded-3 mb-4">
                                <div class="fw-500 ps-2">
                                    <div class="fs-20px text-green-2 fw-600 ps-lg-1">Clientes</div>
                                </div>
                                <div class="ms-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="permissoes[1]"
                                            value="clientes" id="flexSwitchCheckDefault"
                                            @if (old('permissoes.1')) checked @endif>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div
                                class="d-flex align-items-center gap-3 bg-green-light border-green-light p-2 rounded-3 mb-4">
                                <div class="fw-500 ps-2">
                                    <div class="fs-20px text-green-2 fw-600 ps-lg-1">Exames</div>
                                </div>
                                <div class="ms-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="permissoes[2]"
                                            value="exames" id="flexSwitchCheckDefault"
                                            @if (old('permissoes.2')) checked @endif>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div
                                class="d-flex align-items-center gap-3 bg-green-light border-green-light p-2 rounded-3 mb-4">
                                <div class="fw-500 ps-2">
                                    <div class="fs-20px text-green-2 fw-600 ps-lg-1">Gráficos</div>
                                </div>
                                <div class="ms-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="permissoes[3]"
                                            value="graficos" id="flexSwitchCheckDefault"
                                            @if (old('permissoes.3')) checked @endif>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div
                                class="d-flex align-items-center gap-3 bg-green-light border-green-light p-2 rounded-3 mb-4">
                                <div class="fw-500 ps-2">
                                    <div class="fs-20px text-green-2 fw-600 ps-lg-1">Ajustes</div>
                                </div>
                                <div class="ms-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="permissoes[4]"
                                            value="ajustes" @if (old('permissoes.4')) checked @endif
                                            id="flexSwitchCheckDefault">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

        </form>
    </div>


@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <script>
        var colaboradoresAdicionado = [];

        /* Pesquisar colaborador */
        function pesquisarColaborador(str) {

            let url = "{{ route('painel.config.cargos.pesquisa-colaborador') }}"
            axios.get(url + `?name=${str}`)
                .then(res => {
                    document.getElementById('resultado-pesquisa-colaborador').innerHTML = ''
                    let data = res.data
                    for (let i in data) {
                        document.getElementById('resultado-pesquisa-colaborador').innerHTML += `
                            <div class=" px-3 py-2 d-flex align-items-center gap-2 border"
                                style="border-bottom: 2px solid #B2D2D2 !important">
                                <div class="">
                                    <img src="${data[i].img_perfil}" alt=""
                                        class="border-green-light rounded-circle"
                                        style="width: 35px; min-width: 35px">
                                </div>
                                <div class="fw-500 text-green-2 fs-18px">
                                    ${data[i].name}
                                </div>
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-sm btn-primary p-1 rounded-2" 
                                        onclick="setColaborador(${data[i].id}, '${data[i].name}', '${data[i].img_perfil}')">
                                        <img src="{{ asset('assets/img/icons/plus-white.svg') }}" class="" data-feather="plus" style="max-width: 23px" />
                                    </button>
                                </div>
                            </div>
                            `

                    }

                })
                .catch(err => {

                })


        }

        document.getElementById('quem_faz_parte').onfocus = function() {
            if (this.value != '')
                document.getElementById('resultado-pesquisa-colaborador').style.display = 'block'
        }
        document.getElementById('quem_faz_parte').onkeyup = function() {
            document.getElementById('resultado-pesquisa-colaborador').style.display = 'block'
            pesquisarColaborador(this.value)
        }
        document.getElementById('quem_faz_parte').onblur = function() {
            setTimeout(() => {
                document.getElementById('resultado-pesquisa-colaborador').style.display = 'none'
            }, 200);
        }


        /* Adicioanar colaborador */
        function setColaborador(id, nome, img) {


            /* se já foi add colaborador */
            if (document.querySelectorAll('.colaboradores')) {
                for (let i in document.querySelectorAll('.colaboradores')) {
                    if (document.querySelectorAll('.colaboradores')[i].value == id) {
                        alert('O colaborador já foi adicionado!');
                        return;
                    }
                }
            }

            document.getElementById('colaboradores-adicionados').innerHTML += `
            <div
                class="rounded-3 bg-green-light border-green-light p-1 d-flex align-items-center gap-2">
                <div class="">
                    <img src="${img}" alt=""
                        class="border-green-light rounded-circle" style="width: 28px; min-width: 28px">
                </div>
                <div class="fw-500 text-green-2 fs-14px">
                    ${nome}
                </div>
                <div class="">
                    <button type="button" class="btn btn-none border-0 p-1 text-green" onclick="this.parentNode.parentNode.remove()">
                        <img src="{{ asset('assets/img/icons/x.svg') }}" style="max-width: 23px"> 
                    </button>
                </div>
                <input type="text" class="colaboradores visually-hidden" name="colaboradores[]" value="${id}">
            </div>
            `
        }
    </script>
@endsection
