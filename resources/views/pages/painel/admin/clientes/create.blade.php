@extends('layouts.painel.app')
@section('title', 'Cadastrar novo cliente')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- novo usuário -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Cadastrar novo usuário</h1>

                        <form action="{{ route('painel.admin.clientes.store') }}" method="post">
                            @csrf
                            <!-- Nome fantasia -->
                            <div class="mb-3 pb-2">
                                <label for="name" class="form-label text-green fw-500 fs-18px">Nome fantasia</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('name') is-invalid @enderror"
                                    name="name" id="name" value="{{ old('name') }}" placeholder="Ex: João Almeida"
                                    required />
                                @error('name')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- CNPJ -->
                            <div class="mb-3 pb-2">
                                <label for="cnpj" class="form-label text-green fw-500 fs-18px">CNPJ</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cnpj') is-invalid @enderror"
                                    name="cnpj" id="cnpj" value="{{ old('cnpj') }}"
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
                                    <option value="ME" @if (old('classe') == 'ME') selected @endif>ME</option>
                                    <option value="ME" @if (old('classe') == 'ME') selected @endif>ME</option>
                                    <option value="ME" @if (old('classe') == 'ME') selected @endif>ME</option>
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
                                    name="telefone" value="{{ old('telefone') }}" id="telefone_comercial"
                                    placeholder="(99) 99999-9999" required />
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
                                    name="email" id="email" value="{{ old('email') }}"
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
                                    name="password" id="password" placeholder="" value="{{ old('password') }}" required />
                                @error('password')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600">
                                    Próximo
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- endereço -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card @if ('card desabilitado') card-form-desabled @endif">
                    <div class="card-body p-3 p-lg-4">


                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Endereço</h2>

                        <form action="#" method="post">

                            <!-- CEP -->
                            <div class="mb-3 pb-2">
                                <label for="cep" class="form-label text-green fw-500 fs-18px">
                                    CEP
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cep') is-invalid @enderror"
                                    name="cep" id="cep" placeholder="12345.678" required />
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
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="EX">Estrangeiro</option>
                                </select>
                                @error('estado')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- cidade -->
                            <div class="mb-3 pb-2">
                                <label for="cidade" class="form-label text-green fw-500 fs-18px">Cidade</label>
                                <select
                                    class="form-select form-control-custom fs-18px @error('cidade') is-invalid @enderror"
                                    name="cidade" id="cidade" required>
                                    <option value="Guarulhos">Guarulhos</option>
                                </select>
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
                                    name="logradouro" id="logradouro" placeholder="" required />
                                @error('logradouro')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Número -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="numero_end" class="form-label text-green fw-500 fs-18px">
                                    Número
                                </label>
                                <div class="text-green p-1 fs-18px "
                                    style="position: absolute; top: 43px; right: 13px; background: #E6F2F1">
                                    <input class="form-check-input checkbox-custom-circle" type="checkbox" value=""
                                        id="sem-numero" />
                                    <label class="form-check-label" for="sem-numero"> Sem número </label>
                                </div>

                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('numero_end') is-invalid @enderror"
                                    name="numero_end" id="numero_end" placeholder="10" value="" required />
                                @error('numero_end')
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
                                    name="complemento" id="complemento" placeholder="" maxlength="255" />
                                @error('complemento')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-3">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600 btn-submit">
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
                                    Próximo
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
    <script src="https://unpkg.com/imask"></script>
    <script>
        var cnpj = IMask(
            document.getElementById('cnpj'), {
                mask: '00.000.000/0000-00'
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
