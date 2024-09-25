@extends('layouts.painel.app')
@section('title', 'Visualizar Exame')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Visualizar exame -->
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="card ">
                    <div class="card-body py-3 px-0 px-lg-2  py-lg-4">

                        {{-- <div class="px-3 d-flex justify-content-between align-items-center mb-3 ">
                            <h2 class="fs-4 fw-600 text-green-2 ">Visualizar exame</h2>
                        </div> --}}

                        <div class="px-3 folhaResultado">
                            {{-- <img src="{{ asset('assets/img/ilustracoes/exame.png') }}" alt="" class="w-100"> --}}
                            <div class="row cabecalho">
                                <div class="col-md-3">
                                    <div class="logoResultado">
                                        <img src="{{ asset($farmacia->logo ?? 'assets/img/ilustracoes/profile.png') }}"
                                            class="w-100">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="dados text-center">
                                        <h4>{{ $farmacia->razao_social }}</h4>
                                        <p>Fone: {{ $farmacia->telefone }} CNPJ: {{ $farmacia->cnpj }}</p>
                                        <p>{{ $farmacia->logradouro }}, {{ $farmacia->num_endereco }} -
                                            {{ $farmacia->cidade }} - {{ $farmacia->estado }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    Data:{{ date('d/m/Y') }}
                                </div>
                                <div class="col-md-8">
                                    <h5>Declaração de Serviços Farmacêuticos</h5>
                                </div>
                                <div class="col-md-1">
                                    Nº {{ $resultado->numero_exame }}
                                </div>
                            </div>
                            <div class="row mt-3">
                                <span class="titleResult">Dados do Paciente</span>
                                <div class="border-green-light p-3 rounded-3 mb-4 ">
                                    <p style="font-size: 13px;
    text-align: center;">Este estabelecimento através de seu
                                        responsável tecnico, prestou assistência farmacêutica conforme abaixo. O(a) Sr.
                                        (Sra.).</p>

                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            Nome: {{ $clienteFarma->nome }}
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            CPF: {{ $clienteFarma->cpf }}
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            Telefone: {{ $clienteFarma->telefone }}
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            E-mail: {{ $clienteFarma->email }}
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            Idade:
                                            {{ date('Y', strtotime('now')) - date('Y', strtotime($clienteFarma->data_nascimento)) }}
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            Sexo: {{ $clienteFarma->sexo }}
                                        </div>
                                        <hr class='mt-2'>

                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <span class="titleResult">Atenção Farmacêutica</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 ">
                                        <div class="row">
                                            <div class="col-md-3 mt-3">
                                                <label for="peso">Peso: {{$resultado->peso}}</label>

                                            </div>

                                            <div class="col-md-3 mt-3">
                                                <label for="gestante">Gestante: {{$resultado->gestante}}</label>


                                            </div>
                                            <div class="col-md-3 mt-3">
                                                <label for="fumante">Fumante: {{$resultado->fumante}}</label>

                                            </div>

                                            <div class="col-md-3 mt-3">
                                                <label for="usa_insulina">Usa Insulina: {{$resultado->usa_insulina}}</label>

                                            </div>

                                            <div class="col-md-3 mt-3">
                                                <label for="uso_de_medicamentos">Faz uso de medicamentos? quais: {{$resultado->uso_de_medicamentos}}</label>

                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <span class="titleResult">{{$agenda->nome_exame}}</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 ">
                                        <div class="row">

                                            @if($array != null)

                                            @foreach ($array['perguntas'] as $index => $pergunta)


                                                <div class="col-md-4 mt-3 mb-3">
                                                    {{ $pergunta }}: {{ $array['respostas'][$index] }}
                                                </div>
                                            @endforeach
                                            @else
                                            @endif

                                            <div class="col-md-3 mt-3">
                                                Médico Responsavel : {{ $resultado->medico_responsavel }}
                                            </div>
                                            <div class="col-md-2 mt-3">
                                                CRM : {{ $resultado->crm }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Endereço : {{ $resultado->endereco_medico }}
                                            </div>
                                            <div class="col-md-3 mt-3">
                                                Telefone : {{ $resultado->telefone_medico }}
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            Responsavel pelo atendimento : {{ $resultado->responsavel_atendimento }}
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            Observações ao paciente: {{ $resultado->observacoes }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h5 class="text-center">HOSPITAL 24H MAIS PRÓXIMO EM CASO DE EMERGÊNCIA</h5>
                                        <p class="text-center">{{$farmacia->hospital_proximo}} - {{$farmacia->end_hospital}}</p>
                                    </div>
                                <div class="row">
                                    <h5 class="text-center">Este Procedimento não tem finalidade de diagnóstico e não substitui a cosulta médica ou a realização de exames laboratoriais.</h5>
                                </div>
                                <div class="row">
                                    {!!$exame->bibliografia!!}
                                </div>
                            </div>
                        </div>

                        <div class=" px-3 mt-4 d-lg-flex">
                            @if($clienteFarma->email == null)


                            <a class="w-100  btn btn-danger d-block d-md-inline-block mb-3 me-lg-3   disabled"
                                href="#" role="button"
                                style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center justify-content-center" disabled>
                                    <i data-feather="x"></i>
                                  Paciente não possui e-mail
                                </div>
                            </a>
                            @else
                            <a class="w-100  btn btn-primary d-block d-md-inline-block mb-3 me-lg-3   "
                            href="{{ route('enviar.pdf',$resultado->agendas_id ) }}" role="button"
                            style="padding: 16px 24px;">
                            <div class="d-flex gap-2 align-items-center justify-content-center">
                                <i data-feather="send"></i>
                                Enviar por email
                            </div>
                        </a>
                            @endif

                            <a name="" id=""
                                class="w-100  btn btn-outline-primary d-block d-md-inline-block mb-3 " href="{{route('gerar.pdf',$resultado->agendas_id)}}"
                                role="button" style="padding: 16px 24px;">
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
