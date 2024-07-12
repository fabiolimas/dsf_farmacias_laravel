@extends('layouts.painel.app')
@section('title', 'Cadastrar novo usuário')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- novo usuário -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Cadastrar novo usuário</h1>

                        <form action="#" method="post">
                            @csrf
                            <!-- Nome fantasia -->
                            <div class="mb-3 pb-2">
                                <label for="name" class="form-label text-green fw-500 fs-18px">Nome fantasia</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('name') is-invalid @enderror"
                                    name="name" id="name" value="{{ old('name', $user->name) }}"
                                    placeholder="Ex: João Almeida" required readonly />
                                @error('name')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- CNPJ -->
                            <div class="mb-3 pb-2">
                                <label for="cnpj" class="form-label text-green fw-500 fs-18px">CNPJ</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cnpj') is-invalid @enderror"
                                    name="cnpj" id="cnpj" value="{{ old('cnpj', $user->cliente->cnpj) }}"
                                    placeholder="00.000.000/0000-00" readonly required />
                                @error('cnpj')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Classe -->
                            {{-- todo: ver quais a opções de 'classe' --}}
                            <div class="mb-3 pb-2 position-relative">
                                <div class="" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%">
                                </div>
                                <label for="classe" class="form-label text-green fw-500 fs-18px">Classe</label>
                                <select
                                    class="form-select form-control-custom fs-18px @error('classe') is-invalid @enderror"
                                    name="classe" id="classe" readonly="readonly" required>
                                    <option value="ME" @if (old('classe', $user->cliente->classe) == 'ME') selected @endif>ME</option>
                                    <option value="ME" @if (old('classe', $user->cliente->classe) == 'ME') selected @endif>ME</option>
                                    <option value="ME" @if (old('classe', $user->cliente->classe) == 'ME') selected @endif>ME</option>
                                </select>
                                @error('classe')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Telefone comercial -->
                            <div class="mb-3 pb-2">
                                <label for="telefone_comercial" class="form-label text-green fw-500 fs-18px">
                                    Telefone comercial
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('telefone') is-invalid @enderror"
                                    name="telefone" value="{{ old('telefone', $user->cliente->telefone) }}"
                                    id="telefone_comercial" readonly placeholder="(99) 99999-9999" required />
                                @error('telefone')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- E-mail para login -->
                            <div class="mb-3 pb-2">
                                <label for="email" class="form-label text-green fw-500 fs-18px">
                                    E-mail para login
                                </label>
                                <input type="email"
                                    class="form-control form-control-custom fs-18px fw-500 @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{ old('email', $user->email) }}"
                                    placeholder="usuario@email.com" readonly required />
                                @error('email')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Senha para login -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="password" class="form-label text-green fw-500 fs-18px">
                                    Senha para login
                                </label>
                                <button type="button" class="btn btn-none border-0 text-green p-1 disabled "
                                    style="position: absolute; top: 43px; right: 13px">
                                    <i data-feather="refresh-cw" width="20"></i>
                                </button>

                                <input type="password"
                                    class="form-control form-control-custom fs-18px fw-500 @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="" value="Senha Preenchida" readonly
                                    required />
                                @error('password')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-3">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600 disabled"
                                    style="background: #386160; border-color: #386160; opacity: 1">
                                    Confirmado
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- endereço -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card @if (false) card-form-desabled @endif">
                    <div class="card-body p-3 p-lg-4">


                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Endereço</h2>

                        <form action="{{ route('painel.admin.clientes.store-endereco', ['user' => $user->id]) }}"
                            method="post">
                            @csrf
                            <!-- CEP -->
                            <div class="mb-3 pb-2">
                                <label for="cep" class="form-label text-green fw-500 fs-18px">
                                    CEP
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cep') is-invalid @enderror"
                                    name="cep" id="cep" value="{{ old('cep', $user->cliente->cep) }}"
                                    placeholder="12345.678" required />
                                @error('cep')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- estado -->
                            <div class="mb-3 pb-2">
                                <label for="estado" class="form-label text-green fw-500 fs-18px">Estado</label>
                                <select
                                    class="form-select form-control-custom fs-18px @error('estado') is-invalid @enderror"
                                    name="estado" id="estado" required>
                                    <option value="AC" @if (old('estado', $user->cliente->estado) == 'AC') selected @endif>Acre</option>
                                    <option value="AL" @if (old('estado', $user->cliente->estado) == 'AL') selected @endif>Alagoas
                                    </option>
                                    <option value="AP" @if (old('estado', $user->cliente->estado) == 'AP') selected @endif>Amapá
                                    </option>
                                    <option value="AM" @if (old('estado', $user->cliente->estado) == 'AM') selected @endif>Amazonas
                                    </option>
                                    <option value="BA" @if (old('estado', $user->cliente->estado) == 'BA') selected @endif>Bahia
                                    </option>
                                    <option value="CE" @if (old('estado', $user->cliente->estado) == 'CE') selected @endif>Ceará
                                    </option>
                                    <option value="DF" @if (old('estado', $user->cliente->estado) == 'DF') selected @endif>Distrito
                                        Federal</option>
                                    <option value="ES" @if (old('estado', $user->cliente->estado) == 'ES') selected @endif>Espírito
                                        Santo</option>
                                    <option value="GO" @if (old('estado', $user->cliente->estado) == 'GO') selected @endif>Goiás
                                    </option>
                                    <option value="MA" @if (old('estado', $user->cliente->estado) == 'MA') selected @endif>Maranhão
                                    </option>
                                    <option value="MT" @if (old('estado', $user->cliente->estado) == 'MT') selected @endif>Mato Grosso
                                    </option>
                                    <option value="MS" @if (old('estado', $user->cliente->estado) == 'MS') selected @endif>Mato Grosso
                                        do Sul</option>
                                    <option value="MG" @if (old('estado', $user->cliente->estado) == 'MG') selected @endif>Minas Gerais
                                    </option>
                                    <option value="PA" @if (old('estado', $user->cliente->estado) == 'PA') selected @endif>Pará
                                    </option>
                                    <option value="PB" @if (old('estado', $user->cliente->estado) == 'PB') selected @endif>Paraíba
                                    </option>
                                    <option value="PR" @if (old('estado', $user->cliente->estado) == 'PR') selected @endif>Paraná
                                    </option>
                                    <option value="PE" @if (old('estado', $user->cliente->estado) == 'PE') selected @endif>Pernambuco
                                    </option>
                                    <option value="PI" @if (old('estado', $user->cliente->estado) == 'PI') selected @endif>Piauí
                                    </option>
                                    <option value="RJ" @if (old('estado', $user->cliente->estado) == 'RJ') selected @endif>Rio de
                                        Janeiro</option>
                                    <option value="RN" @if (old('estado', $user->cliente->estado) == 'RN') selected @endif>Rio Grande
                                        do Norte</option>
                                    <option value="RS" @if (old('estado', $user->cliente->estado) == 'RS') selected @endif>Rio Grande
                                        do Sul</option>
                                    <option value="RO" @if (old('estado', $user->cliente->estado) == 'RO') selected @endif>Rondônia
                                    </option>
                                    <option value="RR" @if (old('estado', $user->cliente->estado) == 'RR') selected @endif>Roraima
                                    </option>
                                    <option value="SC" @if (old('estado', $user->cliente->estado) == 'SC') selected @endif>Santa
                                        Catarina</option>
                                    <option value="SP" @if (old('estado', $user->cliente->estado) == 'SP') selected @endif>São Paulo
                                    </option>
                                    <option value="SE" @if (old('estado', $user->cliente->estado) == 'SE') selected @endif>Sergipe
                                    </option>
                                    <option value="TO" @if (old('estado', $user->cliente->estado) == 'TO') selected @endif>Tocantins
                                    </option>
                                    <option value="EX" @if (old('estado', $user->cliente->estado) == 'EX') selected @endif>Estrangeiro
                                    </option>
                                </select>
                                @error('estado')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Logradouro -->
                            <div class="mb-3 pb-2">
                                <label for="cidade" class="form-label text-green fw-500 fs-18px">
                                    Cidade
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cidade') is-invalid @enderror"
                                    name="cidade" value="{{ old('cidade', $user->cliente->cidade) }}" id="cidade"
                                    placeholder="Guarulhos" required />
                                @error('cidade')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Logradouro -->
                            <div class="mb-3 pb-2">
                                <label for="logradouro" class="form-label text-green fw-500 fs-18px">
                                    Logradouro
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('logradouro') is-invalid @enderror"
                                    name="logradouro" value="{{ old('logradouro', $user->cliente->logradouro) }}"
                                    id="logradouro" placeholder="Rua Brasil" required />
                                @error('logradouro')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Número -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="num_endereco" class="form-label text-green fw-500 fs-18px">
                                    Número
                                </label>
                                <div class="text-green p-1 fs-18px "
                                    style="position: absolute; top: 43px; right: 13px; background: #E6F2F1">
                                    <input class="form-check-input checkbox-custom-circle" type="checkbox"
                                        name="sem_numero_end" value="1" id="sem-numero"
                                        @if (old('sem_numero_end', $user->cliente->sem_numero_end)) checked @endif />
                                    <label class="form-check-label" for="sem-numero"> Sem número </label>
                                </div>

                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('num_endereco') is-invalid @enderror"
                                    name="num_endereco" id="num_endereco" placeholder="10"
                                    value="{{ old('num_endereco', $user->cliente->num_endereco) }}" required />
                                @error('num_endereco')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- complemento -->
                            <div class="mb-3 pb-2">
                                <label for="complemento" class="form-label text-green fw-500 fs-18px">
                                    Complemento
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('complemento') is-invalid @enderror"
                                    name="complemento" value="{{ old('complemento', $user->cliente->complemento) }}"
                                    id="complemento" placeholder="" maxlength="255" />
                                @error('complemento')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mt-3 pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600 btn-submit">
                                    Próximo
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- Pagamento -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card @if ('card desabilitado') card-form-desabled @endif">
                    <div class="card-body p-3 p-lg-4">


                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Pagamento</h2>

                        <form action="#" method="post">

                            <!-- Nome no cartão -->
                            <div class="mb-3 pb-2">
                                <label for="nome_no_cartao" class="form-label text-green fw-500 fs-18px">
                                    Nome no cartão
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('nome_no_cartao') is-invalid @enderror"
                                    name="nome_no_cartao" id="nome_no_cartao"
                                    placeholder="Digite o nome que está no cartão" required />
                                @error('nome_no_cartao')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Número do cartão -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="numero_cartao" class="form-label text-green fw-500 fs-18px">
                                    Número do cartão
                                </label>


                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('numero_cartao') is-invalid @enderror"
                                    name="numero_cartao" id="numero_cartao" placeholder="10" value="" required />
                                @error('numero_cartao')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Validade -->
                            <div class="mb-3 pb-2">
                                <label for="validade" class="form-label text-green fw-500 fs-18px">
                                    Validade
                                </label>
                                <input type="month"
                                    class="form-control form-control-custom fs-18px fw-500 @error('validade') is-invalid @enderror"
                                    name="validade" id="validade" placeholder="" min="{{ date('Y-m') }}" required />
                                @error('validade')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- cvv -->
                            <div class="mb-3 pb-2">
                                <label for="cvv" class="form-label text-green fw-500 fs-18px">
                                    CVV
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cvv') is-invalid @enderror"
                                    name="cvv" id="cvv" placeholder="123" required />
                                @error('cvv')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- CNPJ ou CPF -->
                            <div class="mb-3 pb-2">
                                <label for="cnpj_cpf_cartao" class="form-label text-green fw-500 fs-18px">
                                    CPF ou CNPJ
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cnpj_cpf_cartao') is-invalid @enderror"
                                    name="cnpj_cpf_cartao" value="" id="cnpj_cpf_cartao"
                                    placeholder="000.000.000-00" required />
                                @error('cnpj_cpf_cartao')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-4 pb-1"></div>

                            <div class="pt-5 mt-5">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600 btn-submit">
                                    Cadastrar
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>


@endsection
@section('scripts')
    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <!-- imask -->
    <script src="https://unpkg.com/imask"></script>
    <script>
        function alternarNumeroEndRequerido() {
            if (document.getElementById('sem-numero').checked) {
                document.getElementById('num_endereco').required = false
                document.getElementById('num_endereco').value = ''
                document.getElementById('num_endereco').setAttribute('readonly', 'readonly')
            } else {
                document.getElementById('num_endereco').required = true
                document.getElementById('num_endereco').removeAttribute('readonly')
            }
        }

        document.getElementById('sem-numero').onchange = function() {
            alternarNumeroEndRequerido()
        }
        alternarNumeroEndRequerido()

        /* imask */
        var cnpj = IMask(
            document.getElementById('cnpj'), {
                mask: '00.000.000/0000-00'
            }
        );
        var num_endereco = IMask(
            document.getElementById('num_endereco'), {
                mask: '0000000000'
            }
        );
        var telefone_comercial = IMask(
            document.getElementById('telefone_comercial'), {
                mask: [{
                        mask: '(00) 00000-0000'
                    },
                    {
                        mask: '0000000000000000000'
                    }
                ]
            }
        );

        var cep = IMask(document.getElementById('cep'), {
            mask: [{
                    mask: '00000-000'
                },
                {
                    mask: '00.000-000'
                }
            ]
        });
    </script>

@endsection
