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
                                    <h5>Declaração de serviços farmaceuticos</h5>
                                </div>
                                <div class="col-md-1">
                                    Nº {{ $resultado->id }}
                                </div>
                            </div>
                            <div class="row mt-3">
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
                                    <span class="titleResult">Atenção Farmaceutica</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 ">
                                        <div class="row">

                                            @if($array != null)
                                      
                                            @foreach ($array['perguntas'] as $index => $pergunta)
    
                                       
                                                <div class="col-md-4 mt-3">
                                                    {{ $pergunta }}: {{ $array['respostas'][$index] }}
                                                </div>
                                            @endforeach
                                            @else 
                                            @endif
                                            {{-- <div class="col-md-4 mt-3">
                                                Aferição de pressão arterial braço: {{ $resultado->braco_aferido }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Resultado Sistólica: {{ $resultado->resultado_sistolica }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Resultado Diastolica: {{ $resultado->resultado_distolica }}mmHG
                                            </div>
                                            <hr>

                                            <div class="col-md-4 mt-3">
                                                Aferição Glicemia Capilar: {{ $resultado->glicemia }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                 Resultado : {{ $resultado->result_glicemia }}mg/dll
                                            </div>
                                            <div class="col-m-4 "></div>
                                            <hr>
                                            <div class="col-md-4 mt-3">
                                                Aferição de Temp. Corporal: {{ $resultado->temperatura }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Resultado : {{ $resultado->result_temperatura }}Cº
                                            </div>
                                            <div class="col-m-4 "></div>
                                            <hr>
                                            <div class="col-md-4 mt-3">
                                                Aplicação de injetaveis : {{ $resultado->injetaveis }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Medicamento : {{ $resultado->medicamento }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Concentração : {{ $resultado->concentracao }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Lote : {{ $resultado->lote }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Validade : {{ date('d/m/H', strtotime($resultado->validade)) }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                MS : {{ $resultado->ms }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                DCB : {{ $resultado->dcb }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Via de Ministração : {{ $resultado->via_ministracao }}
                                            </div>
                                            <div class="col-m-4 "></div>
                                            <hr> --}}
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
                                </div>
                                {{-- <div class="row mt-3">
                                    <span class="titleResult">Perfuração de Lóbulo Auricular</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 ">
                                        <div class="row">
                                            <div class="col-md-4 mt-3">
                                                Nome do Fabricante : {{ $resultado->nome_fab_auricular }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                CNPJ : {{ $resultado->cnpj_fab_auricular }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Número lote pistola : {{ $resultado->lote_pistola }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Número lote brinco : {{ $resultado->lote_brinco }}
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Responsavel pelo atendimento : {{ $resultado->responsavel_atendimento }}
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                Observações ao paciente: {{ $resultado->observacoes }}
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <h5 class="text-center">Este Procedimento não tem finalidade de diagnóstico e não substitui a cosulta medica ou a realização de exames laboratoriais.</h5>
                                </div>
                            </div>
                        </div>

                        <div class=" px-3 mt-4 d-lg-flex">
                            <a class="w-100  btn btn-primary d-block d-md-inline-block mb-3 me-lg-3   "
                                href="{{ route('enviar.pdf',$resultado->agendas_id ) }}" role="button"
                                style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                    <i data-feather="send"></i>
                                    Enviar por email
                                </div>
                            </a>
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
