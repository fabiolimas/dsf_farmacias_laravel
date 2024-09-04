@extends('layouts.painel.app')
@section('title', 'Dados do usuário')
@section('content')
    <div class="">
        <div class="row gy-4">

            <div class="col-12 text-end">
                <div class="d-flex ">
                    <a href="{{ route('painel.admin.clientes.edit', $user->id) }}" class="btn btn-primary px-4 d-flex align-items-center gap-2">
                        <i class="" data-feather="edit" style="max-width: 17px;max-height: 17px"></i>
                        Editar
                    </a>
                </div>

            </div>

            <!-- novo usuário -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Dados da farmácia</h1>

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

                            <!-- classe -->
                            <div class="mb-3 pb-2">
                                <label for="classe" class="form-label text-green fw-500 fs-18px">Classe</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('classe') is-invalid @enderror"
                                    name="classe" id="classe" value="{{ old('classe', $user->cliente->classe) }}"
                                    placeholder="" readonly required />
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


                                <input type="password"
                                    class="form-control form-control-custom fs-18px fw-500 @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="" value="Senha Preenchida" readonly
                                    required />
                                @error('password')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-3">


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

                        <form action="#" method="post">
                            @csrf
                            <!-- CEP -->
                            <div class="mb-3 pb-2">
                                <label for="cep" class="form-label text-green fw-500 fs-18px">
                                    CEP
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cep') is-invalid @enderror"
                                    name="cep" id="cep" value="{{ old('cep', $user->cliente->cep) }}"
                                    placeholder="12345.678" required readonly />
                                @error('cep')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- estado -->
                            <div class="mb-3 pb-2">
                                <label for="estado" class="form-label text-green fw-500 fs-18px">Estado</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('estado') is-invalid @enderror"
                                    name="estado" id="estado" value="{{ old('estado', $user->cliente->estado) }}"
                                    placeholder="" readonly required />
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
                                    placeholder="Guarulhos" required readonly />
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
                                    id="logradouro" placeholder="Rua Brasil" required readonly />
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
                                    <input class="form-check-input checkbox-custom-circle " type="checkbox"
                                        name="sem_numero_end" value="1" id="sem-numero" disabled
                                        @if (old('sem_numero_end', $user->cliente->sem_numero_end)) checked @endif />
                                    <label class="form-check-label" for="sem-numero"> Sem número </label>
                                </div>

                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('num_endereco') is-invalid @enderror"
                                    name="num_endereco" id="num_endereco" placeholder="10"
                                    value="{{ old('num_endereco', $user->cliente->num_endereco) }}" required readonly />
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
                                    id="complemento" placeholder="" maxlength="255" readonly />
                                @error('complemento')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-3 pt-3">

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- Pagamento -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-3 p-lg-4">


                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Pagamento</h2>

                        <form action="" method="post">
                            @csrf

                            <!-- Nome no cartão -->
                            <div class="mb-3 pb-2">
                                <label for="nome_cartao" class="form-label text-green fw-500 fs-18px">
                                    Nome no cartão
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('nome_cartao') is-invalid @enderror"
                                    name="nome_cartao" id="nome_cartao"
                                    value="{{ old('nome_cartao', $user->cliente->nome_cartao) }}"
                                    placeholder="Digite o nome que está no cartão" required readonly />
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
                                    value="{{ old('numero_cartao', $user->cliente->numero_cartao) }}" readonly required />
                                @error('numero_cartao')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- CNPJ -->
                            <div class="mb-3 pb-2">
                                <label for="validade_cartao" class="form-label text-green fw-500 fs-18px">Validade</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('validade_cartao') is-invalid @enderror"
                                    name="validade_cartao" id="validade_cartao"
                                    value="{{ is_null($user->cliente->validade_cartao) ? '' : getMesAno(date('Y-m-d', strtotime($user->cliente->validade_cartao . '-01'))) }}"
                                    placeholder="0" readonly required />
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
                                    placeholder="123" required readonly />
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
                                    id="cnpj_cpf_cartao" placeholder="000.000.000-00" readonly required />
                                @error('cnpj_cpf_cartao')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-4 pb-1"></div>

                            <div class="pt-5 mt-5">

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
    </script>

@endsection
