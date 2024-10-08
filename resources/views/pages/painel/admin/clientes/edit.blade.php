@extends('layouts.painel.app')
@section('title', 'Editar usuário')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- novo usuário -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Editar Farmácia</h1>

                        <form action="{{ route('painel.admin.clientes.edit-usuario', $user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <!-- Nome fantasia -->
                            <div class="mb-3 pb-2">
                                <label for="name" class="form-label text-green fw-500 fs-18px">Nome fantasia</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('name') is-invalid @enderror"
                                    name="name" id="name" value="{{ old('name', $user->name) }}"
                                    placeholder="Ex: João Almeida" required />
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
                                    placeholder="00.000.000/0000-00" required />
                                @error('cnpj')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Classe -->
                            {{-- todo: ver quais a opções de 'classe' --}}
                            <div class="mb-3 pb-2">
                                <label for="classe" class="form-label text-green fw-500 fs-18px">Classe</label>
                                <select
                                    class="form-select form-control-custom fs-18px @error('classe') is-invalid @enderror"
                                    name="classe" id="classe" required>
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
                                    id="telefone_comercial" placeholder="(99) 99999-9999" required />
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
                                    placeholder="usuario@email.com" required />
                                @error('email')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Senha para login -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="password" class="form-label text-green fw-500 fs-18px">
                                    Senha para login
                                </label>
                                <button type="button" class="btn btn-none border-0 text-green p-1 " onclick="gerarSenha()"
                                    style="position: absolute; top: 43px; right: 13px">
                                    <i data-feather="refresh-cw" width="20"></i>
                                </button>

                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="" value="{{ old('password') }}" />
                                @error('password')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror

                                <div class="fs-12px text-green">
                                    Deixa a senha vazia caso não queira modificar
                                </div>
                            </div>

                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600">
                                    Salvar
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


                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Editar Endereço</h2>

                        <form action="{{ route('painel.admin.clientes.store-endereco', ['user' => $user->id]) }}"
                            method="post">
                            @csrf

                            <input type="hidden" name="editar" value="1">

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
                        <label for="hospital_proximo" class="form-label text-green fw-500 fs-18px">
                            Hospital mais próximo
                        </label>
                        <input type="text"
                            class="form-control form-control-custom fs-18px fw-500 @error('hospital_proximo') is-invalid @enderror"
                            name="hospital_proximo" id="hospital_proximo" placeholder="" maxlength="255" value="{{ old('hospital_proximo', $user->cliente->hospital_proximo) }}" required />
                        @error('hospital_proximo')
                            <div class="invalid-feedback fw-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 pb-2">
                        <label for="end_hospital" class="form-label text-green fw-500 fs-18px">
                            Endereço hospital
                        </label>
                        <input type="text"
                            class="form-control form-control-custom fs-18px fw-500 @error('end_hospital') is-invalid @enderror"
                            name="end_hospital" id="end_hospital" placeholder="" maxlength="255" value="{{ old('end_hospital', $user->cliente->end_hospital) }}" required/>
                        @error('end_hospital')
                            <div class="invalid-feedback fw-500">{{ $message }}</div>
                        @enderror
                    </div>

                            <div class="pt-1"></div>

                            <div class="mt-3 pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600 btn-submit">
                                    Salvar
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- Pagamento -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-3 p-lg-4">


                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Editar Pagamento</h2>

                        <form action="{{ route('painel.admin.clientes.store-pagamento', ['user' => $user->id]) }}"
                            method="post">
                            @csrf

                            <input type="hidden" name="editar" value="1">

                            <!-- Nome no cartão -->
                            <div class="mb-3 pb-2">
                                <label for="nome_cartao" class="form-label text-green fw-500 fs-18px">
                                    Nome no cartão
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('nome_cartao') is-invalid @enderror"
                                    name="nome_cartao" id="nome_cartao"
                                    value="{{ old('nome_cartao', $user->cliente->nome_cartao) }}"
                                    placeholder="Digite o nome que está no cartão" required />
                                @error('nome_cartao')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Número do cartão -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="numero_cartao" class="form-label text-green fw-500 fs-18px">
                                    Número do cartão
                                </label>
                                <div id="img-bandeira-card"
                                    class="text-green px-1 fs-18px d-flex align-items-center rounded-3"
                                    style="position: absolute; top: 43px; right: 13px; background: #fff; height: 35px; border: 1px solid #B2D2D2">
                                    <img src="{{ asset('assets/img/cards/visa.png') }}" alt="" class=""
                                        style="height: 12px">
                                </div>

                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('numero_cartao') is-invalid @enderror"
                                    name="numero_cartao" id="numero_cartao" placeholder="10"
                                    value="{{ old('numero_cartao', $user->cliente->numero_cartao) }}" required />
                                @error('numero_cartao')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Validade -->
                            <div class="mb-3 pb-2">
                                <label for="validade_cartao" class="form-label text-green fw-500 fs-18px">
                                    Validade
                                </label>
                                <input type="month"
                                    class="form-control form-control-custom fs-18px fw-500 @error('validade_cartao') is-invalid @enderror"
                                    name="validade_cartao" id="validade_cartao" placeholder=""
                                    value="{{ old('validade_cartao', $user->cliente->validade_cartao) }}"
                                    min="{{ date('Y-m') }}" required />
                                @error('validade_cartao')
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
                                    name="cvv" id="cvv" value="{{ old('cvv', $user->cliente->cvv) }}"
                                    placeholder="123" required />
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
                                    name="cnpj_cpf_cartao"
                                    value="{{ old('cnpj_cpf_cartao', $user->cliente->cnpj_cpf_cartao) }}"
                                    id="cnpj_cpf_cartao" placeholder="000.000.000-00" required />
                                @error('cnpj_cpf_cartao')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-4 pb-1"></div>
                            <div class="pt-3 pb-1"></div>
                            <div class="pt-5 mt-5">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600 btn-submit">
                                    Salvar
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
        var cvv = IMask(
            document.getElementById('cvv'), {
                mask: '00000'
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


        var telefone_comercial = IMask(
            document.getElementById('cnpj_cpf_cartao'), {
                mask: [{
                        mask: '000.000.000-00'
                    },
                    {
                        mask: '00.000.000/0000-00'
                    }
                ]
            }
        );

        var ncartao = IMask(document.getElementById('numero_cartao'), {
            mask: '0000 0000 0000 0000'
        });
    </script>


    <!-- Exibir bandeira do cartão selecionado -->
    <script>
        function detectCardBrand() {
            let number = document.getElementById('numero_cartao').value
            const cardBrandElement = document.getElementById('img-bandeira-card');
            number = number
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
                .replace(' ', '')
            if (/^4[0-9]{5}/.test(number)) {
                cardBrandElement.innerHTML =
                    ` <img src="{{ asset('assets/img/cards/visa.png') }}" alt="Visa" style="height: 12px" id="vs"> `;
                cardBrandElement.style.opacity = '1'
            } else if (/^5[1-5][0-9]{4}/.test(number)) {
                cardBrandElement.innerHTML =
                    `<img src="{{ asset('assets/img/cards/mastercard.png') }}"  alt="Mastercard" style="height: 25px; margin: 3px 3px;" id="mc">`;
                cardBrandElement.style.opacity = '1'
            }
            // Adicione mais padrões conforme necessário
            else {
                cardBrandElement.innerHTML = ''
                cardBrandElement.style.opacity = '0'
            }

        }
        detectCardBrand()

        document.getElementById('numero_cartao').oninput = function() {
            detectCardBrand()
        }


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

        function gerarSenha() {
            const caracteres = 'abcd#efghijklm#nopqrstuvwxyzAB#CDEFGHIJKLMN#OPQRS#TUVWXYZ0123#456789!@#$%^&*_?#@&%';
            const senhaLength = 10;

            let senha = '';
            for (let i = 0; i < senhaLength; i++) {
                const randomIndex = Math.floor(Math.random() * caracteres.length);
                senha += caracteres.charAt(randomIndex);
            }

            document.getElementById('password').value = senha
        }
    </script>

@endsection
