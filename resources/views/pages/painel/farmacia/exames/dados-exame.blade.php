@extends('layouts.painel.app')
@section('title', 'Dados do Exame')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4 ">
                        <h5>Dados do cliente</h5>
                        <!-- lista -->
                        <div class="border-green-light p-3 rounded-3 mb-4 ">

                            <form action="{{ route('painel.farmacia.exames.result-exame') }}" method="post">
                                @csrf
                                {{-- <span class="titleResult">Dados do cliente</span> --}}
                                <div class="row mb-3">

                                    <div class="col-md-8 mt-3">
                                        <label for="nome_cliente">Nome:</label>
                                        <input type="text" class="form-control" name='nome_cliente'
                                            value="{{ $cliente->nome }}" id="nome_cliente" disabled>
                                    </div>
                                    <input type="hidden" name="cliente_farmacia_id" value="{{ $cliente->id }}">
                                    <input type="hidden" name="agendas_id" value="{{ $agenda->id }}">
                                    <div class="col-md-4 mt-3">
                                        <label for="cpf_cliente">CPF:</label>
                                        <input type="text" class="form-control" name='cpf_cliente'
                                            value="{{ $cliente->cpf }}" id="cpf_cliente" disabled>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="endereco">Endereço:</label>
                                        <input type="text" class="form-control" name='endereco'
                                            value="{{ $cliente->endereco }}" id="endereco" disabled>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" class="form-control" name='telefone'
                                            value="{{ $cliente->telefone }}" id="telefone" disabled>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" name='email'
                                            value="{{ $cliente->email }}" id="email" disabled>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="idade">Idade:</label>
                                        <input type="text" class="form-control" name='idade'
                                            value=" {{ date('Y', strtotime('now')) - date('Y', strtotime($cliente->data_nascimento)) }}"
                                            id="idade" disabled>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="sexo">Sexo:</label>
                                        <input type="text" class="form-control" name='sexo'
                                            value="{{ $cliente->sexo }}" id="sexo" disabled>
                                    </div>

                                    @if( date('Y', strtotime('now')) - date('Y', strtotime($cliente->data_nascimento))  < 18)

                                    <div class="col-md-3 mt-3">
                                        <label for="responsavel">Responsavel:</label>
                                        <input type="text" class="form-control" name='responsavel'
                                            value="{{ $cliente->responsavel }}" id="responsavel" disabled>
                                    </div>

                                    @else

                                    @endif


                                </div>
                        </div>
                        <h5> Atenção Farmaceutica</h5>
                        <div class="border-green-light p-3 rounded-3 mb-4 ">
                           
                            <div class="row">
                                <div class="col-md-3 mt-3">
                                    <label for="peso">Peso:</label>
                                    <input type="text" class="form-control" name='peso' value=""
                                        id="peso">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="gestante">Gestante?</label>
                                    <select class="form-select" name="gestante" id="gestante">
                                        <option value="">Selecione</option>
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                    
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="fumante">Fumante?</label>
                                    <select class="form-select" name="fumante" id="fumante">
                                        <option value="">Selecione</option>
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="usa_insulina">Usa Insulina?</label>
                                    <select class="form-select" name="usa_insulina" id="usa_insulina">
                                        <option value="">Selecione</option>
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="uso_de_medicamentos">Faz uso de medicamentos? quais:</label>
                                    <input type="text" class="form-control" name='uso_de_medicamentos' value=""
                                        id="uso_de_medicamentos">
                                </div>
                            </div>

                        </div>

                        <h5> {{$exame->nome}}</h5>
                        <div class="border-green-light p-3 rounded-3 mb-4 ">
                            <span class="titleResult">Informações sobre o exame</span>
                            <div class="row mt-3">

                                @if ($exame->perguntas != null)
                                    @foreach ($exame->perguntas as $pergunta)
                                        <div class="col-md-3">

                                            @switch($pergunta['tipo'])
                                                @case('selecao')
                                                    {{ $pergunta['pergunta'] }}
                                                    <input type="hidden" name="perguntas[]"
                                                        value="{{ $pergunta['pergunta'] }}">
                                                    <select class="form-select" name="respostas[]">
                                                        <option value="">Selecione uma opção</option>
                                                        @foreach ($pergunta['opcoes'] as $opcao)
                                                            <option value="{{ $opcao }}">{{ $opcao }}</option>
                                                        @endforeach


                                                    </select>
                                                @break

                                                @case('multipla-escolha')
                                                    {{ $pergunta['pergunta'] }}
                                                    <input type="hidden" name="perguntas[]"
                                                        value="{{ $pergunta['pergunta'] }}">
                                                    <br>
                                                    @foreach ($pergunta['opcoes'] as $opcao)
                                                        <label for="{{ $opcao }}">{{ $opcao }}</label>
                                                        <input type="checkbox" id="{{ $opcao }}" name="respostas[]"
                                                            value="{{ $opcao }}" class="form-check-input">
                                                    @endforeach
                                                @break

                                                @case('resposta-curta')
                                                    {{ $pergunta['pergunta'] }}
                                                    <input type="hidden" class="form-control" name="perguntas[]"
                                                        value="{{ $pergunta['pergunta'] }}">

                                                    <input class="form-control" type="text" name="respostas[]">
                                                @break
                                            @endswitch

                                        </div>
                                    @endforeach
                                @else
                                @endif

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3 mt-3">
                                    <label for="medico_responsavel">Médico Responsavel</label>

                                    <input type="text" class="form-control " name="medico_responsavel"
                                        id="medico_responsavel">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="crm">CRM</label>

                                    <input type="text" class="form-control " name="crm" id="crm">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="endereco_medico">Endereço</label>

                                    <input type="text" class="form-control " name="endereco_medico"
                                        id="endereco_medico">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="telefone_medico">Telefone</label>

                                    <input type="text" class="form-control " name="telefone_medico"
                                        id="telefone_medico">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label for="observacao">Observações ao paciante</label>

                                    <textarea class="form-control" name="observacao" id="observacao"></textarea>
                                </div>

                            </div>
                        </div>

                        
                        <div class="col-md-4 mt-3">
                            <label for="responsavel_atendimento">Responsavel pelo atendimento</label>

                            <input type="text" class="form-control " name="responsavel_atendimento"
                                id="responsavel_atendimento" value="{{ auth()->user()->name }}">
                        </div>

                        <input type="hidden" value="{{$exame->bibliografia}}" name="bibliografia">
                        <button type="submit" class="btn btn-success mt-3">Salvar</button>
                    </div>
                    </form>
                </div>

            </div>







        </div>


    </div>
    </div>

    </div>

    </div>

    </div>

@endsection

@section('scripts')

@endsection
