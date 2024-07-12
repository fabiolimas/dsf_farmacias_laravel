@extends('layouts.painel.app')
@section('title', 'Configurações')
@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
@endsection
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- sua conta -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">





                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Sua conta</h1>

                        <form action="{{ route('painel.config.atualizar-perfil') }}" method="post">
                            @method('PUT')
                            @csrf


                            <!-- Nome fantasia -->
                            <div class="mb-3 pb-2">


                                <!-- img perfil usuario base64 -->
                                <textarea id="img_profile" class="visually-hidden" name="img_profile" cols="30" rows="10"></textarea>
                                <!--  -->
                                <div class="d-flex gap-3 align-items-center">
                                    <label for="inputImage" id="label-img-perfil" class=" rounded-circle foto-perfil-config"
                                        style="background-image: url({{ asset(auth()->user()->img_perfil ?? 'assets/img/icons/upload-2.png') }})">

                                    </label>
                                    <div class="">
                                        <label for="inputImage" class="form-label text-green fw-500 fs-18px lh-sm">
                                            Alterar imagem
                                            <div class=" fw-400 fs-12px mt-1">
                                                Indicado: jpeg 500x500
                                            </div>
                                        </label>
                                    </div>

                                    <input type="file" id="inputImage" accept="image/png, image/jpeg, image/jpg"
                                        class="visually-hidden">
                                </div>

                            </div>


                            <!-- Nome fantasia -->
                            <div class="mb-3 pb-2">
                                <label for="name" class="form-label text-green fw-500 fs-18px">
                                    Nome
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('name') is-invalid @enderror"
                                    name="name" id="name" value="{{ old('name', auth()->user()->name) }}"
                                    placeholder="Ex: Pedro Henrique" required />
                                @error('name')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- E-mail para login -->
                            <div class="mb-3 pb-2">
                                <label for="email" class="form-label text-green fw-500 fs-18px">
                                    Login
                                </label>
                                <input type="email"
                                    class="form-control form-control-custom fs-18px fw-500 @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{ old('email', auth()->user()->email) }}"
                                    placeholder="usuario@email.com" required />
                                @error('email')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Senha  -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="password" class="form-label text-green fw-500 fs-18px">
                                    Senha
                                </label>
                                {{-- <button type="button" class="btn btn-none border-0 text-green p-1 "
                                    style="position: absolute; top: 43px; right: 13px">
                                    <i data-feather="refresh-cw" width="20"></i>
                                </button> --}}

                                <input type="password"
                                    class="form-control form-control-custom fs-18px fw-500 @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="" value="" required />
                                @error('password')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600">
                                    Salvar perfil
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- colaboradores -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">


                        <div class="d-flex justify-content-between align-items-center mb-4 pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 ">Colaboradores</h2>
                            <div class="">

                                <a href="{{ route('painel.config.colaboradores.create') }}" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Adicionar colaborador"
                                    class="btn btn-primary d-flex align-items-center justify-content-center p-0 rounded-circle"
                                    style="width: 40px; height: 40px">
                                    <i class="" data-feather="plus"></i>
                                </a>
                            </div>
                        </div>

                        <!--  -->
                        <!-- pesquisa -->
                        <div class="pt-2">
                            <div class="mb-3 position-relative">
                                <label for="pesquisar-colaborador" class="visually-hidden">Pesquisar</label>
                                <input type="text" class="form-control input-pesquisar-cliente" name=""
                                    id="pesquisar-colaborador" placeholder="Pesquisar" />

                                <button type="submit" class="btn btn-none text-green p-1"
                                    style="position: absolute; top:3px; right: 20px">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>

                        <div class="" style="margin: 0 -15px">
                            <!-- lista -->
                            <div class="position-relative mt-4 pt-2">
                                <div class="lista-scroll p-3 pt-0 clientes-lista-assinantes" style="max-height: 480px">

                                    <div id="load-pesquisa" style="display:none">
                                        <div class="spinner-border spinner-border-sm text-secondary mx-auto mb-3"
                                            role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>

                                    <div class="" id="resultado-pesquisa-colaborador">

                                        @foreach ($colaboradores as $colaborador)
                                            <div class="d-flex mb-3 pb-2 align-items-center gap-3">
                                                <div class="">
                                                    <img src="{{ asset($colaborador->img_perfil ?? 'assets/img/ilustracoes/profile.png') }}"
                                                        alt="" class="rounded-circle border-green-light"
                                                        style="width: 60px; height: 60px; min-width: 60px; min-height: 60px">
                                                </div>
                                                <div class="fw-500">
                                                    <div class="fs-20px text-green-2 fw-600">{{ $colaborador->name }}</div>
                                                    <div class="fs-16px text-green">
                                                        {{ $colaborador->getRoleNames()->first() ?? 'Sem cargo' }}
                                                    </div>
                                                </div>

                                                <div class="ms-auto">

                                                    @if ($colaborador->profile == 'admin')
                                                        <span class="d-inline-block" tabindex="0"
                                                            data-bs-toggle="popover" data-bs-trigger="hover focus"
                                                            data-bs-content="Administrador principal não pode ser editado! ">
                                                            <a name="" id=""
                                                                class="btn btn-primary-light px-2 text-green-2 disabled"
                                                                href="#" role="button">
                                                                <i class="" data-feather="info"></i>
                                                            </a>
                                                        </span>
                                                    @else
                                                        <a name="" id=""
                                                            class="btn btn-primary-light px-2 text-green-2"
                                                            href="{{ route('painel.config.colaboradores.edit', ['user' => $colaborador->id]) }}"
                                                            role="button">
                                                            <i class="" data-feather="edit"></i>
                                                        </a>
                                                    @endif

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="ver-mais-lista-scroll text-center">
                                </div>

                            </div>
                        </div>



                    </div>
                </div>

            </div>

            <!-- Cargos -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">


                        <div class="d-flex justify-content-between align-items-center mb-4 pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 ">Cargos</h2>
                            <div class="">
                                <a href="{{ route('painel.config.cargos.create') }}"
                                    class="btn btn-primary d-flex align-items-center justify-content-center p-0 rounded-circle"
                                    style="width: 40px; height: 40px" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Adicionar cargo">
                                    <i class="" data-feather="plus"></i>
                                </a>
                            </div>
                        </div>

                        <!--  -->
                        <!-- pesquisa -->
                        <div class="pt-2">
                            <div class="mb-3 position-relative">
                                <label for="pesquisar-cargo" class="visually-hidden">Pesquisar</label>
                                <input type="text" class="form-control input-pesquisar-cliente" name=""
                                    id="pesquisar-cargo" placeholder="Pesquisar" />

                                <button type="button" class="btn btn-none text-green p-1"
                                    style="position: absolute; top:3px; right: 20px">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="" style="margin: 0 -15px">
                            <!-- lista -->
                            <div class="">
                                <div class="position-relative mt-4 pt-2">
                                    <div class="lista-scroll p-3 pt-0 clientes-lista-assinantes"
                                        style="max-height: 480px">

                                        <div id="load-pesquisa-cargo" style="display:none">
                                            <div class="spinner-border spinner-border-sm text-secondary mx-auto mb-3"
                                                role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="" id="resultado-pesquisa-cargos">
                                            @foreach ($cargos as $cargo)
                                                <div
                                                    class="d-flex align-items-center gap-3 bg-green-light p-2 rounded-3 mb-3">

                                                    <div class="fw-500 ps-2">
                                                        <div class="fs-20px text-green-2 fw-bold ps-lg-1">
                                                            {{ $cargo->name }}
                                                        </div>
                                                    </div>

                                                    <div class="ms-auto">
                                                        @if ($cargo->name == 'Administrador')
                                                            <span class="d-inline-block" tabindex="0"
                                                                data-bs-toggle="popover" data-bs-trigger="hover focus"
                                                                data-bs-content="Cargo principal não pode ser editado, você pode editar colaboradores com esse cargo.">
                                                                <a class="btn btn-primary-light px-2 text-green-2 bg-white disabled"
                                                                    href="#">
                                                                    <i class="" data-feather="info"></i>
                                                                </a>
                                                            </span>
                                                        @else
                                                            <a class="btn btn-primary-light px-2 text-green-2 bg-white"
                                                                href="{{ route('painel.config.cargos.edit', ['cargo' => $cargo->id]) }}">
                                                                <i class="" data-feather="edit"></i>
                                                            </a>
                                                        @endif

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="ver-mais-lista-scroll text-center">
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- Modal recortar img -->
    <div class="modal modal-custom fade" id="modal-foto-perfil" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg border-0" role="document"
            style="max-width: 600px">
            <div class="modal-content bg-transparent ">
                <div class="modal-body p-lg-5  border-0">

                    <div class="p-3  p-md-4 shadow rounded-3  bg-white border">


                        <div class="pt-3">

                            <div class="">
                                <!-- Wrap the image or canvas element with a block element (container) -->
                                <div>
                                    <img id="image" src="" alt="Imagem">
                                </div>
                            </div>

                            <div class=" d-flex align-items-center gap-3">

                                <label for="inputImage" type="button" class="btn btn-primary-light-3 rounded-2">
                                    <i class="" data-feather="upload"></i>
                                    Selecionar imagem
                                </label>
                                <button type="button" class="btn btn-primary rounded-2 py-2 px-4 ms-auto"
                                    onclick="crop()">
                                    Recortar
                                </button>

                            </div>

                        </div>

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
    <script>
        const myModal = new bootstrap.Modal(document.getElementById("modal-foto-perfil"), {});
    </script>


    <script>
        /* Exibir modal recortar img ao selecionar input img */
        document.getElementById('inputImage').onchange = () => {
            myModal.show()
        }

        var inputImage = document.getElementById('inputImage');
        var image = document.getElementById('image');
        var cropper;
        document.addEventListener('DOMContentLoaded', function() {
            inputImage = document.getElementById('inputImage');
            image = document.getElementById('image');
            cropper;

            inputImage.addEventListener('change', function() {
                var files = this.files;
                var file;

                if (files && files.length > 0) {
                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        var reader = new FileReader();

                        reader.onload = function() {
                            image.src = reader.result;

                            if (cropper) {
                                cropper.destroy();
                            }

                            setTimeout(() => {
                                cropper = new Cropper(image, {
                                    aspectRatio: 16 / 16,
                                    maxWidth: 150,
                                    maxHeight: 150,
                                    crop(event) {
                                        // console.log(event.detail.x);
                                        // console.log(event.detail.y);
                                        // console.log(event.detail.width);
                                        // console.log(event.detail.height);
                                        // console.log(event.detail.rotate);
                                        // console.log(event.detail.scaleX);
                                        // console.log(event.detail.scaleY);
                                    },
                                });
                            }, 200);
                        };
                        reader.readAsDataURL(file);
                    } else {
                        alert('Por favor, selecione um arquivo de imagem válido.');
                    }
                }
            });

        });


        /* Recortar img */
        function crop() {
            if (cropper) {
                // Obter o canvas recortado com as dimensões desejadas
                var croppedCanvas = cropper.getCroppedCanvas({
                    width: 150,
                    height: 150
                });

                // Criar um novo canvas com as dimensões desejadas
                var finalCanvas = document.createElement('canvas');
                finalCanvas.width = 150;
                finalCanvas.height = 150;

                // Desenhar a imagem recortada no novo canvas
                finalCanvas.getContext('2d').drawImage(croppedCanvas, 0, 0, 150, 150);

                // Obter a representação base64 da imagem no novo canvas
                var finalDataURL = finalCanvas.toDataURL('image/jpeg');

                document.getElementById('img_profile').value = finalDataURL
                document.getElementById('label-img-perfil').style.backgroundImage = `url(${finalDataURL})`

                myModal.hide()
                document.getElementById('inputImage').value = '';
            }
        };
    </script>

    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <!-- Pesquisar colaborador -->
    <script>
        /* Pesquisar colaborador */
        document.getElementById('pesquisar-colaborador').onkeyup = function() {

            document.getElementById('resultado-pesquisa-colaborador').innerHTML = ''
            let docLoad = document.getElementById('load-pesquisa')
            docLoad.className = 'd-flex'

            let str = this.value
            let url = "{{ route('painel.config.pesquisar-colaboradores') }}"
            axios.get(url + `?name=${str}`)
                .then(res => {
                    document.getElementById('resultado-pesquisa-colaborador').innerHTML = ''
                    let data = res.data
                    for (let i in data) {
                        document.getElementById('resultado-pesquisa-colaborador').innerHTML += `
                            <div class="d-flex mb-3 pb-2 align-items-center gap-3">
                            <div class="">
                                <img src="${data[i].img_perfil}"
                                    alt="" class="rounded-circle border-green-light"
                                    style="width: 60px; height: 60px; min-width: 60px; min-height: 60px">
                            </div>
                            <div class="fw-500">
                                <div class="fs-20px text-green-2 fw-600">${data[i].name}</div>
                                <div class="fs-16px text-green">
                                    ${data[i].cargo}
                                </div>
                            </div>

                            <div class="ms-auto">

                                    <span class="d-inline-block ${data[i].profile != 'admin' ? 'd-none' : ''}" tabindex="0"
                                        data-bs-toggle="popover" data-bs-trigger="hover focus"
                                        data-bs-content="Administrador principal não pode ser editado! ">
                                        <a name="" id=""
                                            class="btn btn-primary-light px-2 text-green-2 disabled"
                                            href="#" role="button">
                                            <i class="" data-feather="info"></i>
                                        </a>
                                    </span>
                                    <a name="" id=""
                                        class="btn btn-primary-light px-2 text-green-2 ${data[i].profile == 'admin' ? 'd-none' : ''}"
                                        href="{{ route('painel.config.colaboradores.index') }}/${data[i].id}/edit"
                                        role="button">
                                        <i class="" data-feather="edit"></i>
                                    </a>

                            </div>
                        </div>
                        `
                    }
                    feather.replace();
                    docLoad.className = 'd-none'

                    if(data.length == 0) {
                        document.getElementById('resultado-pesquisa-colaborador').innerHTML = `
                            <div class="alert alert-warning text-center fs-4 fw-300" role="alert">
                                Sem registros.
                            </div>
                        `
                    }

                })
        }

        /* Pesquisar colaborador */
        document.getElementById('pesquisar-cargo').onkeyup = function() {

            document.getElementById('resultado-pesquisa-cargos').innerHTML = ''
            let docLoad = document.getElementById('load-pesquisa-cargo')
            docLoad.className = 'd-flex'

            let str = this.value
            let url = "{{ route('painel.config.pesquisar-cargos') }}"
            axios.get(url + `?name=${str}`)
                .then(res => {
                    document.getElementById('resultado-pesquisa-cargos').innerHTML = ''
                    let data = res.data
                    console.log(data);
                    for (let i in data) {
                        document.getElementById('resultado-pesquisa-cargos').innerHTML += `
                        <div class="d-flex align-items-center gap-3 bg-green-light p-2 rounded-3 mb-3">

                            <div class="fw-500 ps-2">
                                <div class="fs-20px text-green-2 fw-bold ps-lg-1">
                                    ${data[i].name}
                                </div>
                            </div>

                            <div class="ms-auto">
                                    <span class="d-inline-block ${data[i].name != 'Administrador' ? 'd-none' : ''} " tabindex="0"
                                        data-bs-toggle="popover" data-bs-trigger="hover focus"
                                        data-bs-content="Cargo principal não pode ser editado, você pode editar colaboradores com esse cargo.">
                                        <a class="btn btn-primary-light px-2 text-green-2 bg-white disabled"
                                            href="#">
                                            <i class="" data-feather="info"></i>
                                        </a>
                                    </span>
                                    <a class="btn btn-primary-light px-2 text-green-2 bg-white ${data[i].name == 'Administrador' ? 'd-none' : ''}"
                                        href="{{ route('painel.config.cargos.index') }}/${data[i].id}/edit">
                                        <i class="" data-feather="edit"></i>
                                    </a>

                            </div>
                            </div>
                        `
                    }
                    feather.replace();
                    docLoad.className = 'd-none'

                    if(data.length == 0) {
                        document.getElementById('resultado-pesquisa-cargos').innerHTML = `
                            <div class="alert alert-warning text-center fs-4 fw-300" role="alert">
                                Sem registros.
                            </div>
                        `
                    }

                })
        }
    </script>
@endsection
