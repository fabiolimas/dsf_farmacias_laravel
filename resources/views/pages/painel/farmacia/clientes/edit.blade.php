@extends('layouts.painel.app')
@section('title', 'Editar cliente')
@section('content')
    <div class="">
        <div class="row gy-4">

            <!-- Editar cliente -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Editar cliente</h1>

                        <form action="{{route('painel.farmacia.clientes.update', $cliente->id)}}" method="post">
                            @csrf
                            @method('put')

                            <!-- Nome  -->
                            <div class="mb-3 pb-2">
                                <label for="nome" class="form-label text-green fw-500 fs-18px">
                                    Nome
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('nome') is-invalid @enderror"
                                    name="nome" id="nome"  value="{{$cliente->nome}}" />
                                @error('nome')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- cpf  -->
                            <div class="mb-3 pb-2">
                                <label for="cpf" class="form-label text-green fw-500 fs-18px">
                                    CPF
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('cpf') is-invalid @enderror"
                                    name="cpf" id="cpf" placeholder="000.000.000-01"
                                   value="{{$cliente->cpf}}" />
                                @error('cpf')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Data de nascimento  -->
                            <div class="mb-3 pb-2">
                                <label for="data_nascimento" class="form-label text-green fw-500 fs-18px">
                                    Data de nascimento
                                </label>
                                <input type="date"
                                    class="form-control form-control-custom fs-18px fw-500 @error('dt_nascimento') is-invalid @enderror"
                                    name="data_nascimento" id="data_nascimento" placeholder=""
                                     value="{{date('Y-m-d', strtotime($cliente->data_nascimento))}}" />
                                @error('dt_nascimento')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- sexo -->
                            <div class="mb-3 pb-2">
                                <label for="sexo" class="form-label text-green fw-500 fs-18px">sexo</label>
                                <select class="form-select form-control-custom fs-18px fw-500 @error('sexo') is-invalid @enderror"
                                    name="sexo" id="sexo">
                                    <!-- tood: ver no figma se tem opcoes -->
                                    @switch($cliente->sexo)
                                        @case('Masculino')
                                        <option value="Masculino" class="fw-500" selected>Masculino</option>
                                        <option value="Feminino" class="fw-500">Feminino</option>
                                            @break
                                        @case('Feminino')
                                        <option value="Masculino" class="fw-500" >Masculino</option>
                                        <option value="Feminino" class="fw-500" selected>Feminino</option>
                                            @break
                                        @default
                                            
                                    @endswitch
                                    
                                </select>
                                @error('sexo')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- E-mail para login -->
                            <div class="mb-3 pb-2">
                                <label for="email" class="form-label text-green fw-500 fs-18px">
                                    Email
                                </label>
                                <input type="email"
                                    class="form-control form-control-custom fs-18px fw-500 @error('email') is-invalid @enderror"
                                    name="email"id="email" placeholder="usuario@email.com" value="{{$cliente->email}}" />
                                @error('email')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Telefone  -->
                            <div class="mb-3 pb-2">
                                <label for="telefone" class="form-label text-green fw-500 fs-18px">
                                    Telefone
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('telefone') is-invalid @enderror"
                                    name="telefone" id="telefone" placeholder="(99) 99999-9999"
                                     value="{{$cliente->telefone}}" />
                                @error('telefone')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
                            </div>

                             <!-- Responsavel  -->
                             <div class="mb-3 pb-2 " style="@if($cliente->responsavel != null) display:block @else display:none @endif" id="responsaveis">
                                <label for="responsavel" class="form-label text-green fw-500 fs-18px">
                                    Responsavel
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 @error('responsavel') is-invalid @enderror"
                                    name="responsavel" id="responsavel" placeholder="Nome do responsavel"
                                    value="{{ $cliente->responsavel }}"/>
                                @error('responsavel')
                                    <div class="invalid-feedback fw-500">{{ $message }}</div>
                                @enderror
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



        </div>

    </div>

    @section('scripts')
    <script src="https://unpkg.com/imask"></script>
    <script>
        
    
        const cpf = document.getElementById('cpf');
        const telefone=document.getElementById('telefone');
    const maskOptions = {
      mask: '000.000.000-00',
    
    };
    
    const maskphone={
        mask:'(00) 00000-0000',
    }
    const maskcpf = IMask(cpf, maskOptions);
    const maskfone = IMask(telefone, maskphone);
    
    function calcularIdade(dataNascimento) {
        const hoje = new Date();
        const nascimento = new Date(dataNascimento);
        let idade = hoje.getFullYear() - nascimento.getFullYear();
        const mes = hoje.getMonth() - nascimento.getMonth();
        if (mes < 0 || (mes === 0 && hoje.getDate() < nascimento.getDate())) {
            idade--;
        }
        return idade;
    }
        $(document).ready(function(){
            $('#data_nascimento').change(function(){
                
               if(calcularIdade($('#data_nascimento').val())<18){
                    $('#responsaveis').css('display','block');
               }else{
                $('#responsavel').val(null);
                $('#responsaveis').css('display','none');
               }
    
    
    
            })
           
           
        });
        
        </script>
    @endsection
@endsection
