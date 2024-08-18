@extends('layouts.painel.app')
@section('title', 'Agenda')
@section('head')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar')
            const calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'pt-br',
                themeSystem: 'bootstrap5',

                headerToolbar: {
                    left: 'title'
                },


                selectMirror: true,

                initialView: 'dayGridMonth',
                selectable: true,

                events: [
                    @foreach ($agendas as $agenda)

                        {
                            title: '{{ $agenda->hora_exame }}-{{ $agenda->nome_exame }}',
                            start: '{{ $agenda->data_exame }}',
                        },
                    @endforeach

                ],
            })
            calendar.render()
        })
    </script>
@stop
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Próximos exames -->
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="card ">
                    <div class="card-body py-3 px-0 px-md-2 px-lg-2  py-lg-4">


                        <div class="px-3 d-flex justify-content-between align-items-center mb-4 pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 ">Próximos exames</h2>
                            <div class="">

                                <a href="{{ route('painel.farmacia.agenda.create') }}" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Cadastrar novo exame"
                                    class="btn btn-primary d-flex align-items-center justify-content-center p-0 rounded-circle"
                                    style="width: 40px; height: 40px">
                                    <i class="" data-feather="plus"></i>
                                </a>
                            </div>
                        </div>

                        <!--  -->
                        <!-- pesquisa -->
                        <div class="pt-2 px-3">
                            <div class="mb-0 position-relative">
                                <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                <input type="text" class="form-control input-pesquisar-cliente" name=""
                                    id="pesquisa" placeholder="Pesquisar" />

                                <button type="submit" class="btn btn-none text-green p-1"
                                    style="position: absolute; top:3px; right: 20px">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>




                        <div class="position-relative mt-4 resultBusca">
                            <!-- Lista -->
                            <div class=" lista-scroll p-3 pt-0 clientes-lista-assinantes " style="max-height: 550px">
                               
                                @foreach ($examesDia as $dataExame => $exame)
                                <div class=" mb-2 pb-1">
                                    <div class="fs-20 text-green fw-600">
                                        {{   date('d  M  ', strtotime($dataExame)) }}
                                    </div>
                                </div>
                             
                                @foreach($exame as $agenda)
                                    <div class="px-2 pb-4">
                                        <!--  -->

                                        <a href="#"
                                            class="px-2 py-2 proximo-horarios mb-2 rounded-3 text-decoration-none d-block"
                                            data-bs-toggle="modal" data-bs-target="#modal-ver-agenda-{{ $agenda->agendaId }}">
                                            <div class="d-flex gap-4 align-items-center">
                                                <div class="text-green-2 fw-700 lh-1">
                                                    <div class="fs-3 mb-1">
                                                        {{ $agenda->hora_exame }}
                                                    </div>
                                                    {{-- <div class="fs-18px fw-600">
                                                        {{09:00}}
                                                    </div> --}}
                                                </div>
                                                <div class="divisor-horarios cor-roxo" style="max-height: 53px"></div>
                                                <div class="fs-18px text-green-2 fw-600">
                                                    <div class="text-green-2">{{ $agenda->nome_exame }}</div>
                                                    <div class="text-green">
                                                        {{ $agenda->nome_cliente }}
                                                    </div>

                                                </div>
                                            </div>
                                        </a>



                                    </div>
                                    <!-- Modal ver agenda -->
                                    <div class="modal modal-custom fade" id="modal-ver-agenda-{{ $agenda->agendaId }}"
                                        tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg border-0"
                                            role="document">
                                            <div class="modal-content bg-transparent ">
                                                <div class="modal-body p-lg-5  border-0">

                                                    <div class="p-3  p-md-4 shadow rounded-3  bg-white border">

                                                        <div class="d-flex flex-column flex-lg-row flex-wrap gap-4">

                                                            <!--  -->
                                                            <div class="">
                                                                <div class="d-flex  align-items-center p-3 rounded-3 px-4"
                                                                    style="border: 1px solid #B2D2D2">
                                                                    <div class="">
                                                                        <div
                                                                            class="bg-white position-relative bg-logo-farmacia">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="64" height="64"
                                                                                viewBox="0 0 64 64" fill="none">
                                                                                <path
                                                                                    d="M31.9999 58.6667C46.7275 58.6667 58.6666 46.7276 58.6666 32C58.6666 17.2724 46.7275 5.33337 31.9999 5.33337C17.2723 5.33337 5.33325 17.2724 5.33325 32C5.33325 46.7276 17.2723 58.6667 31.9999 58.6667Z"
                                                                                    stroke="#00B1AC" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M32 16V32L42.6667 37.3333"
                                                                                    stroke="#00B1AC" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <!-- nome -->
                                                                    <div class=" fs-20px ms-3">
                                                                        <a href="#"
                                                                            class="text-decoration-none d-block lh-1">
                                                                            <div
                                                                                class="text-green-2 fw-700 fs-2 text-truncate mb-1">
                                                                                {{ $agenda->hora_exame }}
                                                                            </div>
                                                                            {{-- <div class="text-green-2 text-truncate fw-600">às 09:00</div> --}}
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--  -->
                                                            <div class="">
                                                                <div class="d-flex align-items-center p-3 rounded-3 px-4"
                                                                    style="border: 1px solid #B2D2D2">
                                                                    <!-- foto -->
                                                                    <div class="">
                                                                        <div class="bg-white position-relative bg-logo-farmacia"
                                                                            style="background-image: url({{ asset($agenda->img_perfil) }}); border: 1px solid #00B1AC">
                                                                        </div>
                                                                    </div>
                                                                    <!-- nome -->
                                                                    <div class=" fs-20px ms-3">
                                                                        <a href="#"
                                                                            class="text-decoration-none d-block">
                                                                            <div class="text-green-2 fw-500 text-truncate">
                                                                                Responsável: </div>
                                                                            <div class="text-green text-truncate">
                                                                                {{ $agenda->name }}</div>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--  -->
                                                            <div class="">
                                                                <div class="d-flex align-items-center p-3 rounded-3 px-4"
                                                                    style="border: 1px solid #B2D2D2">
                                                                    <!-- foto -->
                                                                    <div class="">
                                                                        <div
                                                                            class="bg-white position-relative bg-logo-farmacia">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="64" height="64"
                                                                                viewBox="0 0 64 64" fill="none">
                                                                                <path
                                                                                    d="M37.3334 5.33337H16.0001C14.5856 5.33337 13.229 5.89528 12.2288 6.89547C11.2287 7.89566 10.6667 9.25222 10.6667 10.6667V53.3334C10.6667 54.7479 11.2287 56.1044 12.2288 57.1046C13.229 58.1048 14.5856 58.6667 16.0001 58.6667H48.0001C49.4146 58.6667 50.7711 58.1048 51.7713 57.1046C52.7715 56.1044 53.3334 54.7479 53.3334 53.3334V21.3334L37.3334 5.33337Z"
                                                                                    stroke="#00B1AC" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M37.3333 5.33337V21.3334H53.3333"
                                                                                    stroke="#00B1AC" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M42.6666 34.6666H21.3333"
                                                                                    stroke="#00B1AC" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M42.6666 45.3334H21.3333"
                                                                                    stroke="#00B1AC" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M26.6666 24H23.9999H21.3333"
                                                                                    stroke="#00B1AC" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <!-- nome -->
                                                                    <div class=" fs-20px ms-3">
                                                                        <a href="#"
                                                                            class="text-decoration-none d-block">
                                                                            <div class="text-green-2 fw-500 text-truncate">
                                                                                Exame: {{ $agenda->nome_exame }}
                                                                            </div>
                                                                            <div class="text-green text-truncate">{{$agenda->estoqueExame}} em
                                                                                estoque</div>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--  -->
                                                        <div class="mt-4">
                                                            <!--  -->
                                                            <div class="">
                                                                <div class="d-flex flex-column flex-lg-row align-items-center p-3 px-4 rounded-3 gap-2 gap-lg-4"
                                                                    style="border: 1px solid #B2D2D2">
                                                                    <!--  -->
                                                                    <div class="d-flex align-items-center w-lg-100">
                                                                        <!-- foto -->
                                                                        <div class="">
                                                                            <div
                                                                                class="bg-white position-relative bg-logo-farmacia">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="64" height="64"
                                                                                    viewBox="0 0 64 64" fill="none">
                                                                                    <path
                                                                                        d="M53.3334 56V50.6667C53.3334 47.8377 52.2096 45.1246 50.2092 43.1242C48.2088 41.1238 45.4957 40 42.6667 40H21.3334C18.5044 40 15.7913 41.1238 13.7909 43.1242C11.7906 45.1246 10.6667 47.8377 10.6667 50.6667V56"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M31.9999 29.3333C37.891 29.3333 42.6666 24.5577 42.6666 18.6667C42.6666 12.7756 37.891 8 31.9999 8C26.1089 8 21.3333 12.7756 21.3333 18.6667C21.3333 24.5577 26.1089 29.3333 31.9999 29.3333Z"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <!-- nome -->
                                                                        <div class=" fs-20px ms-3">
                                                                            <a href="#"
                                                                                class="text-decoration-none d-block">
                                                                                <div
                                                                                    class="text-green-2 fw-500 text-truncate">
                                                                                    Cliente: {{ $agenda->nome_cliente }}
                                                                                </div>
                                                                                <div class="text-green text-truncate">CPF:
                                                                                    {{ $agenda->cpf }}</div>
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                    <!-- divisoar -->
                                                                    <div class="divisor-modal-ver-agenda-farmacia "
                                                                        style=""></div>

                                                                    <div class="d-flex align-items-center w-lg-100">
                                                                        <!-- nome -->
                                                                        <div class=" fs-20px ">
                                                                            <a href="#"
                                                                                class="text-decoration-none d-block">
                                                                                <div
                                                                                    class="text-green-2 fw-500 text-truncate">
                                                                                    Número: {{ $agenda->telefone }}
                                                                                </div>
                                                                                <div
                                                                                    class="text-green text-truncate text-truncate">
                                                                                    Email: {{ $agenda->emailCliente }}
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4 pt-2 gy-3">
                                                            <div class="col-12 col-lg-6">
                                                                <a href="{{ route('painel.farmacia.agenda.edit', $agenda->agendaId) }}"
                                                                    class="btn btn-primary-light w-100 py-2 fs-20px text-green fw-400">
                                                                    Editar informações
                                                                </a>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <button type="button"
                                                                    class="btn btn-primary w-100 py-2 fs-20px fw-400" data-bs-toggle="modal"
                                                                    data-bs-target="#modal-presenca-{{ $agenda->agendaId }}">Confirmar</button>
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
                                    {{-- confirmar presença --}}
                                    <div class="modal modal-custom fade" id="modal-presenca-{{ $agenda->agendaId}}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg border-0"
                                            role="document">
                                            <div class="modal-content bg-transparent ">
                                                <div class="modal-body p-lg-5  border-0">

                                                    <div class="p-4 shadow rounded-3  bg-white border">

                                                        <div class="d-flex flex-column flex-lg-row flex-wrap gap-4">

                                                            <!--  -->
                                                           <h4>Confirma Presença?</h4>

                                                            <!--  -->
                                                            
                                                        </div>

                                                       

                                                        <div class="row mt-4 pt-2 gy-2">
                                                            <div class="col-12 col-lg-6">
                                                                <a href="{{route('painel.farmacia.exames.presenca', ['id'=>$agenda->agendaId, 'status'=>'confirmado'])}}" id="modal-link-editar-user"
                                                                    class="btn btn-primary-light w-100 py-2 fs-20px text-green">
                                                                    Cliente Compareceu
                                                                </a>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <a href="{{route('painel.farmacia.exames.presenca', ['id'=>$agenda->agendaId, 'status'=>'cancelado'])}}" id="modal-link-ver-mais"
                                                                    class="btn btn-danger w-100 py-2 fs-20px">Cliente Cancelou</a>
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
                                @endforeach
                            </div>
                            @if ($examesDia->count() >= 3)
                                <div class="ver-mais-lista-scroll text-center">
                                    <button type="button"
                                        class="btn btn-ligth shadow bg-white  py-1 text-green fs-20px fw-600">
                                        Ver mais
                                    </button>
                                </div>
                            @else
                            @endif
                        </div>


                    </div>
                </div>

            </div>

            <!-- Agenda de exames -->
            <div class="col-12 col-lg-7 col-xl-8">

                <div class="card ">

                    <div class="card-body py-3 px-0 px-md-2 px-lg-2  py-lg-4">
                        <div
                            class="px-3 d-sm-flex text-center text-sm-start justify-content-between align-items-center mb-4 pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 ">Agenda de exames</h2>
                            <div class="">

                                <a href="{{ route('painel.farmacia.agenda.create') }}"
                                    class="btn btn-primary d-flex align-items-center justify-content-center py-2 px-3 gap-2 rounded-3 fs-18px">
                                    <i class="" data-feather="folder-plus"></i>
                                    Agendar novo
                                </a>
                            </div>
                        </div>
                        <div id='calendar'></div>


                        {{-- <div class="px-3">
                            <div class="calendario">
                                <!-- dias semana -->
                                <div class="calendario-semana d-flex text-center rounded-3 fw-600 fs-20 text-green">
                                    <div class="calendario-semana-dia  px-3 py-2">Seg</div>
                                    <div class="calendario-semana-dia  px-3 py-2">Seg</div>
                                    <div class="calendario-semana-dia  px-3 py-2">Seg</div>
                                    <div class="calendario-semana-dia  px-3 py-2">Seg</div>
                                    <div class="calendario-semana-dia  px-3 py-2">Seg</div>
                                    <div class="calendario-semana-dia  px-3 py-2">Seg</div>
                                    <div class="calendario-semana-dia  px-3 py-2">Seg</div>
                                </div>

                                <!-- dias -->
                                <div class="mt-4 calendario-dias d-flex flex-wrap text-center rounded-3 fw-500 fs-16px">
                                    <div class="calendario-dia  px-3 py-2"></div>

                                    <!--  -->
                                    <div class="calendario-dia p-1 position-relative ">
                                        <!-- data -->
                                        <div
                                            class="calendario-dia-data rounded-2 d-flex  fs-14px text-white align-items-center gap-2 justify-content-center">
                                            02 de Out
                                            <span class=" d-flex">
                                                <span
                                                    class="badge rounded-pill text-bg-white bg-white text-green-2">8</span>
                                            </span>
                                        </div>
                                        <!-- agendas -->
                                        <div
                                            class="mt-1 calendario-dia-agenda roxo rounded-2 d-flex fs-14px align-items-center gap-2 justify-content-center text-uppercase">
                                            <div class="text-truncate" style="width: 80%">
                                                17:45 - Dengue Antígeno NS1
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div
                                            class="mt-1 calendario-dia-agenda laranja rounded-2 d-flex  fs-14px align-items-center gap-2 justify-content-center text-uppercase">
                                            <div class="text-truncate" style="width: 80%">
                                                17:45 - Dengue Antígeno NS1
                                            </div>
                                        </div>

                                        <!-- ver mais -->
                                        <div class="position-absolute pb-1" style="bottom: 0;width:100%; left: 0">
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#modal-ver-todas-agenda"
                                                class="btn mb-1 btn-light bg-white border-0 shadow rounded-3 py-1 px-2 text-green fw-600 fs-12px">
                                                Ver mais
                                            </button>

                                        </div>

                                    </div>

                                    <!--  -->
                                    <div class="calendario-dia p-1 position-relative ">
                                        <!-- data -->
                                        <div
                                            class="calendario-dia-data rounded-2 d-flex  fs-14px text-white align-items-center gap-2 justify-content-center">
                                            03 de Out
                                            <span class=" d-flex">
                                                <span
                                                    class="badge rounded-pill text-bg-white bg-white text-green-2">1</span>
                                            </span>
                                        </div>
                                        <!-- agendas -->
                                        <div
                                            class="mt-1 calendario-dia-agenda verde rounded-2 d-flex fs-14px align-items-center gap-2 justify-content-center text-uppercase">
                                            <div class="text-truncate" style="width: 80%">
                                                17:45 - BETA-hCG
                                            </div>
                                        </div>


                                        <!-- ver mais -->
                                        <div class="position-absolute pb-1 d-none" style="bottom: 0;width:100%; left: 0">
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#modal-ver-todas-agenda"
                                                class="btn mb-1 btn-light bg-white border-0 shadow rounded-3 py-1 px-2 text-green fw-600 fs-12px">
                                                Ver mais
                                            </button>
                                        </div>

                                    </div>

                                    <!--  -->
                                    <div class="calendario-dia p-1 position-relative ">
                                        <!-- data -->
                                        <div
                                            class="calendario-dia-data rounded-2 d-flex  fs-14px text-white align-items-center gap-2 justify-content-center">
                                            04 de Out
                                            <span class=" d-flex">
                                                <span
                                                    class="badge rounded-pill text-bg-white bg-white text-green-2">16</span>
                                            </span>
                                        </div>
                                        <!-- agendas -->
                                        <div
                                            class="mt-1 calendario-dia-agenda vermelho rounded-2 d-flex fs-14px align-items-center gap-2 justify-content-center text-uppercase">
                                            <div class="text-truncate" style="width: 80%">
                                                17:45 - Dengue Antígeno NS1
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div
                                            class="mt-1 calendario-dia-agenda laranja rounded-2 d-flex  fs-14px align-items-center gap-2 justify-content-center text-uppercase">
                                            <div class="text-truncate" style="width: 80%">
                                                17:45 - Dengue Antígeno NS1
                                            </div>
                                        </div>

                                        <!-- ver mais -->
                                        <div class="position-absolute pb-1" style="bottom: 0;width:100%; left: 0">
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#modal-ver-todas-agenda"
                                                class="btn mb-1 btn-light bg-white border-0 shadow rounded-3 py-1 px-2 text-green fw-600 fs-12px">
                                                Ver mais
                                            </button>

                                        </div>

                                    </div>

                                    <div class="calendario-dia  px-3 py-2"></div>
                                    <div class="calendario-dia  px-3 py-2"></div>
                                    <div class="calendario-dia  px-3 py-2"></div>
                                    <div class="calendario-dia  px-3 py-2"></div>

                                    @foreach ([3, 3, 33, 3, 3, 3, 3, 3, 3, 3, 33, 3, 3, 3, 3, 3, 33, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3] as $item)
                                        <div class="calendario-dia  px-3 py-2"></div>
                                    @endforeach

                                    <div class="calendario-dia  px-3 py-2" style="height: auto"></div>
                                    <div class="calendario-dia  px-3 py-2" style="height: auto"></div>
                                    <div class="calendario-dia  px-3 py-2" style="height: auto"></div>
                                    <div class="calendario-dia  px-3 py-2" style="height: auto"></div>
                                    <div class="calendario-dia  px-3 py-2" style="height: auto"></div>
                                    <div class="calendario-dia  px-3 py-2" style="height: auto"></div>
                                    <div class="calendario-dia  px-3 py-2" style="height: auto"></div>
                                </div>

                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- modal ver mais agendas -->
    <div class="modal modal-data-exames modal-custom fade" id="modal-ver-todas-agenda" tabindex="-1"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal border-0" role="document">
            <div class="modal-content bg-transparent ">
                <div class="modal-body p-lg-5 pb-lg-3  border-0">

                    <div class="px-2 py-4 shadow rounded-3  bg-white border">

                        <div class="fs-18px fw-600 text-green text-center px-3">
                            Exames do dia
                        </div>
                        <div class="text-center text-green-2 fs-20px fw-700">
                            02 de Outubro
                        </div>

                        <div class="position-relative mt-4">
                            <!-- Lista -->
                            <div class=" lista-scroll p-3 px-2 pt-0 clientes-lista-assinantes " style="max-height: 520px">
                                @foreach ([3, 33, 3, 3, 3] as $item)
                                    <!--  -->
                                    <a href="#"
                                        class="px-2 py-2 proximo-horarios mb-2 rounded-3 text-decoration-none d-block"
                                        data-bs-toggle="modal" data-bs-target="#modal-ver-agenda">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div class="text-green-2 fw-700 lh-1">
                                                <div class="fs-3 mb-1">
                                                    08:30
                                                </div>
                                                <div class="fs-18px fw-600">
                                                    09:00
                                                </div>
                                            </div>
                                            <div class="divisor-horarios cor-roxo" style="max-height: 53px"></div>
                                            <div class="fs-18px text-green-2 fw-600">
                                                <div class="">COVID-19</div>
                                                <div class="text-green">
                                                    Pedro Henrique
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--  -->
                                    <a href="#"
                                        class="px-2 py-2 proximo-horarios mb-2 rounded-3 text-decoration-none d-block"
                                        data-bs-toggle="modal" data-bs-target="#modal-ver-agenda">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div class="text-green-2 fw-700 lh-1">
                                                <div class="fs-3 mb-1">
                                                    10:30
                                                </div>
                                                <div class="fs-18px fw-600">
                                                    09:00
                                                </div>
                                            </div>
                                            <div class="divisor-horarios cor-verde" style="max-height: 53px"></div>
                                            <div class="fs-18px text-green-2 fw-600">
                                                <div class="">Hemoglobina Glicada</div>
                                                <div class="text-green">
                                                    Pedro Henrique
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="fechar-modal text-center pt-2 pt-lg-4">
                        <button type="button" class="btn btn-ligth shadow bg-white text-green-2 py-1"
                            data-bs-dismiss="modal" onclick="fecharModalAgendas()">
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
        const myModal = new bootstrap.Modal(document.getElementById("modal-ver-todas-agenda"), {});

        function fecharModalAgendas() {
            myModal.hide()
        }
        const modal2 = new bootstrap.Modal(document.getElementById("modal-ver-agenda"), {});
        // modal2.show()
    </script>

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
                url: "{{ route('painel.farmacia.agenda.busca') }}", // Arquivo PHP que processará a busca
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
