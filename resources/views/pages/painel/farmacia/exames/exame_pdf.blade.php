<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado - DSF</title>

</head>
<style>
    td {
        padding: 9px;
    }

    .row.mt-2,
    .row.mt-3,
    .row.mt-4 {
        margin-top: 20px;
        margin-bottom: 5px;
        font-size: 13px;
    }

    .logoResultado {
        width: 104px;

        position: absolute;
        left: 20px;

    }

    .titleResult {
        margin-bottom: 5px;
        margin-left: 5px;
    }

    table,
    th,
    td {
        border-collapse: collapse;
      
        width: 100%;
    }
    p{font-size:12px;}
    
    </style>

<body style="font-family:sans-serif">
    <div class="">
        <div class="row gy-4" style="padding:5px">

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
                                <div class="col-md-3 ">
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
                                        <span style="text-align: center; font-weight:700; margin-left: 20%">Declaração
                                            de serviços farmaceuticos</span> <span style="margin-left:25%"> Nº
                                            {{ $resultado->id }}</span>
                                    </p>
                                </div>
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-1">

                                </div>
                            </div>
                            <div class="row mt-3">
                                <span class="titleResult">Dados do Paciente</span>
                                <div class="border-green-light p-3 rounded-3 mb-4 "
                                    style="border:1px solid #b2d2d2; border-radius:5px; padding:10px; ">
                                    <p style="font-size: 12px; text-align: center;">Este estabelecimento através de seu
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

                                            @if ($clienteFarma->responsavel != null)
                                                <td class="col-md-4 mt-3">
                                                    Respnsavel: {{ $clienteFarma->responsavel }}
                                                </td>
                                            @else
                                            @endif
                                        </tr>
                                    </table>
                                    

                                </div>
                            </div>

                            <div class="row mt-2">
                                <span class="titleResult">Atenção Farmaceutica</span>
                                <div class="border-green-light p-3 rounded-3 mb-4 "
                                    style="border:1px solid #b2d2d2; border-radius:5px; padding:7px; ">
                                    <table>
                                        <tr>
                                           <td>Peso:</td>
                                           <td>{{$resultado->peso}}</td>
                                           <td>Fumante:</td>
                                           <td>{{$resultado->fumante}}</td>
                                           <td>Gestante:</td>
                                           <td>{{$resultado->gestante}}</td>
                                           <td>Usa Insulina:</td>
                                           <td>{{$resultado->usa_insulina}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=3>Medicamentos que faz uso:</td>
                                            <td colspan=4>
                                                {{$resultado->uso_de_medicamentos}}
                                            </td>


                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <span class="titleResult">Exame: {{$agenda->nome_exame}}</span>
                                <div class="border-green-light p-3 rounded-3 mb-4 "
                                    style="border:1px solid #b2d2d2; border-radius:5px; padding:7px; ">
                                    <table>
                                        <tr>
                                            @if ($array != null)
                                                @foreach ($array['perguntas'] as $index => $pergunta)
                                                    <td class="col-md-4 mt-3">
                                                        {{ $pergunta }}: {{ $array['respostas'][$index] }}
                                                    </td>
                                                @endforeach
                                            @else
                                            @endif
                                        </tr>
                                    </table>
                                    <table>




                                        <tr>
                                            <td colspan="4">
                                                Médico Responsavel : {{ $resultado->medico_responsavel }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-2 mt-3">
                                                CRM : {{ $resultado->crm }}
                                            </td>
                                            <td>
                                                Endereço : {{ $resultado->endereco_medico }}
                                            </td>
                                            <td class="col-md-3 mt-3">
                                                Telefone : {{ $resultado->telefone_medico }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                        </div>

                        <div class="row mt-3">
           
                            <table>
                               
                                <tr>
                                    <td colspan="2">
                                        Responsavel pelo atendimento : {{ $resultado->responsavel_atendimento }}
                                    </td>
                                    <td colspan="2">Numero CRF: {{$resultado->crf_responsavel}}</td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        Observações ao paciente: {{ $resultado->observacoes }}
                                    </td>
                                </tr>

                        </div>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <table>
                        <tr>
                            <td style="font-size: 12px">Ass. Paciente/Responsavel:__________________________ </td>
                            <td style="font-size: 12px">Ass. do Farmaceutico:__________________________</td>
                        </tr>
                        
                    </table>

                </div>
                     <p style="text-align:center; font-wight:bold">HOSPITAL 24H MAIS PRÓXIMO EM CASO DE EMERGÊNCIA</p>
                <div class="row">
                    <p style="text-align:center; font-wight:bold">Este Procedimento não tem finalidade de diagnóstico e não substitui a
                        cosulta medica ou a realização de exames laboratoriais.</p>
                </div>
                <div><h4 style="text-align: center">{{$agenda->nome_exame}}</h4></div>
             
                
                
                <div class="row bibliografia">
                    <p style="font-wight:bold">Bibliografia</p>
                    <p>{!!$exame->bibliografia!!}</p>
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
