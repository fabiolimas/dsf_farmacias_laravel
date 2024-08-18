<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado - DSF</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<style>
    td {
    padding: 9px;
}
.row.mt-2, .row.mt-3, .row.mt-4 {
    margin-top:10px;
    font-size: 13px;
}
    </style>
<body style="font-family:sans-serif">
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
                                <div class="col-md-3 " style="position:absolute; left:20px; top:4%">
                                    <div class="logoResultado">
                                        <img src="{{ asset($farmacia->logo ?? 'assets/img/ilustracoes/profile.png') }}"
                                            class="w-100" style="width:100%">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="dados text-center" style="text-align: center; margin-left:20%">
                                        <h4>{{ $farmacia->razao_social }}</h4>
                                        <p>Fone: {{ $farmacia->telefone }} CNPJ: {{ $farmacia->cnpj }}</p>
                                        <p>{{ $farmacia->logradouro }}, {{ $farmacia->num_endereco }} -
                                            {{ $farmacia->cidade }} - {{ $farmacia->estado }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                   <p> Data:{{ date('d/m/Y') }}
                                  <span style="text-align: center; font-weight:700; margin-left: 10%">Declaração de serviços farmaceuticos</span> <span style="margin-left:20%">  Nº {{ $resultado->id }}</span></p>
                                </div>
                                <div class="col-md-8">
                                   
                                </div>
                                <div class="col-md-1">
                                  
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="border-green-light p-3 rounded-3 mb-4 " style="border:1px solid #b2d2d2; border-radius:5px; padding:10px; ">
                                    <p style="font-size: 12px;
    text-align: center;">Este estabelecimento através de seu
                                        responsável tecnico, prestou assistência farmacêutica conforme abaixo. O(a) Sr.
                                        (Sra.).</p>
                                    <table>
                                    <tr>
                                        
                                        <td>
                                            Nome: {{ $clienteFarma->nome }}
                                        </td>
                                        <td>
                                            CPF: {{ $clienteFarma->cpf }}
                                        </td>
                                        <td class="col-md-4 mt-3">
                                            Telefone: {{ $clienteFarma->telefone }}
                                        </td>
                                    </tr>
                                        <tr>
                                        <td class="col-md-4 mt-3">
                                            E-mail: {{ $clienteFarma->email }}
                                        </td>
                                        <td class="col-md-4 mt-3">
                                            Idade:
                                            {{ date('Y', strtotime('now')) - date('Y', strtotime($clienteFarma->data_nascimento)) }}
                                        </td>
                                        <td class="col-md-4 mt-3">
                                            Sexo: {{ $clienteFarma->sexo }}
                                        </td>
                                    </tr>
                                    </table>
                                        <hr class='mt-2'>
                                        <table>
                                            <tr>
                                        @if($array != null)
                                        @foreach ($array['perguntas'] as $index => $pergunta)
                                       
                                            <td class="col-md-4 mt-3">
                                                {{ $pergunta }}: {{ $array['respostas'][$index] }}
                                            </td>
                                        @endforeach
                                        @else 
                                        @endif
                                    </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <span class="titleResult">Atenção Farmaceutica</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 " style="border:1px solid #b2d2d2; border-radius:5px; padding:7px; ">
                                       
                                       <table>


                                       
                                        <tr class="row">
                                            <td colspan="2">
                                                Aferição de pressão arterial braço: {{ $resultado->braco_aferido }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Resultado Sistólica: {{ $resultado->resultado_sistolica }}
                                            </td>
                                            <td colspan="2">
                                                Resultado Diastolica: {{ $resultado->resultado_distolica }}mmHG
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Aferição Glicemia Capilar: {{ $resultado->glicemia }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                 Resultado : {{ $resultado->result_glicemia }}mg/dll
                                            </td>
                                            <td class="col-m-4 "></td>
                                        </tr>
                                       
                                            <tr>
                                            <td colspan="2">
                                                Aferição de Temp. Corporal: {{ $resultado->temperatura }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Resultado : {{ $resultado->result_temperatura }}Cº
                                            </td>
                                            <td class="col-m-4 "></td>
                                            </tr>
                                    
                                            <tr>
                                            <td colspan="2">
                                                Aplicação de injetaveis : {{ $resultado->injetaveis }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Medicamento : {{ $resultado->medicamento }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Concentração : {{ $resultado->concentracao }}
                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="col-md-4 mt-3">
                                                Lote : {{ $resultado->lote }}
                                            </td>
                                            <td colspan="2">
                                                Validade : {{ date('d/m/H', strtotime($resultado->validade)) }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                MS : {{ $resultado->ms }}
                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="col-md-4 mt-3">
                                                DCB : {{ $resultado->dcb }}
                                            </td>
                                            <td colspan="2">
                                                Via de Ministração : {{ $resultado->via_ministracao }}
                                            </td>
                                            <td class="col-m-4 "></td>
                                            </tr>
                                           
                                            <tr>
                                            <td colspan="3">
                                                Médico Responsavel : {{ $resultado->medico_responsavel }}
                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="col-md-2 mt-3">
                                                CRM : {{ $resultado->crm }}
                                            </td>
                                            <td colspan="2">
                                                Endereço : {{ $resultado->endereco_medico }}
                                            </td>
                                            <td class="col-md-3 mt-3">
                                                Telefone : {{ $resultado->telefone_medico }}
                                            </td>
                                            </tr>
                                       </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <span class="titleResult">Perfuração de Lóbulo Auricular</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 " style="border:1px solid #b2d2d2; border-radius:5px; padding:10px; ">
                                        <table>
                                        <tr class="row">
                                            <td class="col-md-4 mt-3">
                                                Nome do Fabricante : {{ $resultado->nome_fab_auricular }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                CNPJ : {{ $resultado->cnpj_fab_auricular }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Número lote pistola : {{ $resultado->lote_pistola }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4 mt-3">
                                                Número lote brinco : {{ $resultado->lote_brinco }}
                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Responsavel pelo atendimento : {{ $resultado->responsavel_atendimento }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                Observações ao paciente: {{ $resultado->observacoes }}
                                            </td>
                                        </tr>
                                        
                                        </div>
                                    </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="text-center">Este Procedimento não tem finalidade de diagnóstico e não substitui a cosulta medica ou a realização de exames laboratoriais.</h5>
                                </div>
                            </div>
                        </div>

                        


                    </div>
                </div>

            </div>



        </div>

    </div>
</body>
</html>
    
