<?php $__env->startSection('title', 'Pagamento de clientes'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">


                        <!-- lista -->
                        <div class="mt-2 pt-1 ">
                            <div class="">
                                <h1 class="fs-4 fw-600 mb-4 text-green-2 px-1 px-md-4">Pagamento de clientes</h1>
                                <!-- pesquisa -->
                                <div class="px-1 px-md-4">
                                    <div class="mb-3 position-relative" style="max-width: 600px">
                                        <label for="pesquisa-cliente" class="visually-hidden">Pesquisar</label>
                                        <input type="text" class="form-control input-pesquisar-cliente" name=""
                                            id="pesquisa-cliente" placeholder="Pesquisar" />

                                        <button type="submit" class="btn btn-none text-green p-1"
                                            style="position: absolute; top:3px; right: 20px">
                                            <i data-feather="search"></i>
                                        </button>

                                    </div>

                                </div>

                                <!-- filtro -->
                                    <div class="mt-4 pt-2 px-1 px-md-4">
                                        <div class="d-flex gap-3 flex-wrap">
                                            <div class="">
                                                <input type="checkbox" name="status"
                                                    class="visually-hidden checkbox-filtro-cliente" id="p-ativo">
                                                <label for="p-ativo" type="button"
                                                    class="link-filtro link-filtro-red border-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <circle cx="10" cy="10" r="10" fill="#27CA40" />
                                                    </svg>
                                                    Ativo
                                                </label>
                                            </div>
                                            <div class="">
                                                <input type="checkbox" name="status"
                                                    class="visually-hidden checkbox-filtro-cliente" id="p-atrasado">
                                                <label for="p-atrasado" type="button" class="link-filtro link-filtro-red">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <circle cx="10" cy="10" r="10" fill="#FFC130" />
                                                    </svg>
                                                    Pagamento atrasado
                                                </label>
                                            </div>
                                            <div class="">
                                                <input type="checkbox" name="status"
                                                    class="visually-hidden checkbox-filtro-cliente" id="p-inativo">
                                                <label type="button" for="p-inativo" class="link-filtro link-filtro-red">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <circle cx="10" cy="10" r="10" fill="#FF6058" />
                                                    </svg>
                                                    Inativo
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                <!-- lista -->
                                <div class="mt-4 pt-2">

                                    <div id="load-pesquisa" style="display:none">
                                        <div class="spinner-border spinner-border-sm text-secondary mx-auto mb-3"
                                            role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>

                                    <div class="lista-scroll clientes-lista-usuarios px-1 px-md-4">
                                        <div class="row gy-4" id="lista-clientes">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- Modal Body -->
    <div class="modal modal-custom fade" id="modal-info" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg border-0" role="document">
            <div class="modal-content bg-transparent ">
                <div class="modal-body p-lg-5  border-0">

                    <div class="p-4 shadow rounded-3  bg-white border">

                        <div class="d-flex flex-column flex-lg-row flex-wrap gap-4">

                            <!--  -->
                            <div class="">
                                <div class="d-flex align-items-center p-3 rounded-3 px-2 px-md-4"
                                    style="border: 1px solid #B2D2D2">
                                    <!-- foto -->
                                    <div class="">
                                        <div class="bg-white position-relative bg-logo-farmacia" id="bg-logo-farmacia"
                                            style="background-image: url(<?php echo e(asset('assets/img/ilustracoes/logo-fm.png')); ?>); border: 1px solid #00B1AC">
                                        </div>
                                    </div>
                                    <!-- nome -->
                                    <div class=" fs-20px ms-3">
                                        <a href="#" class="text-decoration-none d-block">
                                            <div class="text-green-2 fw-500 " id="modal-nome-farmacia"> </div>
                                            <div class="text-green">CNPJ: <span id="modal-cnpj-farmacia"></span></div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!--  -->
                            <div class="">
                                <div class="d-flex align-items-center p-3 rounded-3 px-2 px-md-4"
                                    style="border: 1px solid #B2D2D2">
                                    <!-- foto -->
                                    <div class="">
                                        <div class="bg-white position-relative bg-logo-farmacia">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                viewBox="0 0 64 64" fill="none">
                                                <path
                                                    d="M32 58.6666C46.7276 58.6666 58.6667 46.7275 58.6667 31.9999C58.6667 17.2723 46.7276 5.33325 32 5.33325C17.2724 5.33325 5.33337 17.2723 5.33337 31.9999C5.33337 46.7275 17.2724 58.6666 32 58.6666Z"
                                                    stroke="#00B1AC" stroke-width="4" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M32 42.6667V32" stroke="#00B1AC" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M32 21.3333H32.0267" stroke="#00B1AC" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- nome -->
                                    <div class=" fs-20px ms-3">
                                        <a href="#" class="text-decoration-none d-block">
                                            <div class="text-green-2 fw-500">Email: <span
                                                    id="modal-email-farmacia"></span>
                                            </div>
                                            <div class="text-green">Telefone: <span id="modal-telefone-farmacia"></span>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="mt-4">
                            <!--  -->
                            <div class="">
                                <div class="d-flex flex-column flex-lg-row align-items-center p-3 px-2 px-lg-4 rounded-3 gap-4"
                                    style="border: 1px solid #B2D2D2">
                                    <!--  -->
                                    <div class="d-flex align-items-center w-sm-100">
                                        <!-- foto -->
                                        <div class="">
                                            <div class="bg-white position-relative bg-logo-farmacia">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                    viewBox="0 0 64 64" fill="none">
                                                    <path
                                                        d="M56 26.6667C56 45.3334 32 61.3334 32 61.3334C32 61.3334 8 45.3334 8 26.6667C8 20.3016 10.5286 14.1971 15.0294 9.69619C19.5303 5.19531 25.6348 2.66675 32 2.66675C38.3652 2.66675 44.4697 5.19531 48.9706 9.69619C53.4714 14.1971 56 20.3016 56 26.6667Z"
                                                        stroke="#00B1AC" stroke-width="4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M32 34.6667C36.4183 34.6667 40 31.085 40 26.6667C40 22.2485 36.4183 18.6667 32 18.6667C27.5817 18.6667 24 22.2485 24 26.6667C24 31.085 27.5817 34.6667 32 34.6667Z"
                                                        stroke="#00B1AC" stroke-width="4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- nome -->
                                        <div class=" fs-20px ms-3">
                                            <a href="#" class="text-decoration-none d-block">
                                                <div class="text-green-2 fw-500">CEP: <span
                                                        id="modal-cep-farmacia"></span> </div>
                                                <div class="text-green">Cidade: <span id="modal-cidade-farmacia"></span>
                                                    (<span id="modal-estado-farmacia"></span>)</div>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- divisoar -->
                                    <div class="divisor-modal-info-farmacia d-none d-lg-block" style=""></div>

                                    <div class="d-flex align-items-center w-sm-100">
                                        <!-- nome -->
                                        <div class=" fs-20px ">
                                            <a href="#" class="text-decoration-none d-block">
                                                <div class="text-green-2 fw-500">Logradouro: <span
                                                        id="modal-logradouro-farmacia"></span></div>
                                                <div class="text-green">Complemento: <span
                                                        id="modal-complemento-farmacia"></span></div>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 pt-2 gy-2">
                            <div class="col-12 col-lg-6">
                                <a href="#" class="btn btn-primary-light w-100 py-2 fs-20px text-green"
                                    id="modal-link-editar-user">
                                    Editar informações
                                </a>
                            </div>
                            <div class="col-12 col-lg-6">
                                <a href="#" id="modal-link-ver-mais" class="btn btn-primary w-100 py-2 fs-20px">Ver
                                    mais</a>
                            </div>
                        </div>

                    </div>

                    <div class="fechar-modal text-center pt-2 pt-lg-4">
                        <button type="button" class="btn btn-ligth shadow bg-white text-green-2 py-1"
                            data-bs-dismiss="modal">
                            <i data-feather="x"></i>
                            Fechar
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <script>
        const myModal = new bootstrap.Modal(document.getElementById("modal-info"), {});


        function setDataCliente(user_id) {
            let url_base = "<?php echo e(url('/')); ?>";
            axios
                .get(`${url_base}/clientes/cliente-json/${user_id}`)
                .then(res => {
                    console.log(res.data);
                    let data = res.data

                    document.querySelector('#bg-logo-farmacia').style.backgroundImage = `url(${data.img_perfil})`;
                    document.querySelector('#modal-nome-farmacia').innerText = data.name
                    document.querySelector('#modal-email-farmacia').innerText = data.email
                    document.querySelector('#modal-cnpj-farmacia').innerText = data.cliente.cnpj

                    document.querySelector('#modal-telefone-farmacia').innerText = data.cliente.telefone
                    document.querySelector('#modal-cep-farmacia').innerText = data.cliente.cep
                    document.querySelector('#modal-cidade-farmacia').innerText = data.cliente.cidade
                    document.querySelector('#modal-estado-farmacia').innerText = data.cliente.estado
                    document.querySelector('#modal-logradouro-farmacia').innerText = data.cliente.logradouro
                    document.querySelector('#modal-complemento-farmacia').innerText = data.cliente.complemento

                    document.querySelector('#modal-link-ver-mais').href = `${url_base}/clientes/show/${data.id}`;
                    document.querySelector('#modal-link-editar-user').href = `${url_base}/clientes/${data.id}/edit`;

                    myModal.show()
                })
        }

        function pesquisarCliente() {
            let str = document.querySelector('#pesquisa-cliente').value

            document.getElementById('lista-clientes').innerHTML = ''
            let docLoad = document.getElementById('load-pesquisa')
            docLoad.className = 'd-flex'


            // getClientesJson

            let status = ''

            if (document.querySelector('#p-atrasado').checked)
                status += 'atrasado'
            if (document.querySelector('#p-ativo').checked)
                status += 'ativo'
            if (document.querySelector('#p-inativo').checked)
                status += 'inativo'

            axios
                .get(`<?php echo e(route('painel.admin.clientes.pesquisar')); ?>?nome=${str}`)
                .then(res => {
                    console.log(res.data);

                    document.getElementById('lista-clientes').innerHTML = ''
                    let html = ''

                    for (let i in res.data) {

                        let statusHtml = '';
                        let htmlDotUser = '';

                        if (res.data[i].status == 'inativo') {
                            statusHtml = `<span
                            class="badge rounded-pill text-bg-danger">Inativo</span>`

                            htmlDotUser = `
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 28 28" fill="none">
                                    <circle cx="14" cy="14" r="13" fill="#FF6058" stroke="white" stroke-width="2"/>
                                </svg>
                            `
                            
                        } else if (res.data[i].cliente.status_pagamento == 'Atrasado') {
                            statusHtml = `<span
                            class="badge rounded-pill text-bg-warning">Atrasado</span>`

                            htmlDotUser = `
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 28 28" fill="none">
                                    <circle cx="14" cy="14" r="13" fill="#FFC130" stroke="white" stroke-width="2"/>
                                </svg>
                            `
                            
                        } else if (res.data[i].cliente.status_pagamento == 'Ativo') {
                            statusHtml = `<span
                            class="badge rounded-pill text-bg-success">Ativo</span>`

                            htmlDotUser = `
                                <svg class="" xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25"
                                    viewBox="0 0 28 28" fill="none">
                                    <circle cx="14" cy="14" r="13"
                                        fill="#27CA40" stroke="white"
                                        stroke-width="2" />
                                </svg>
                            `
                            
                        } else {
                            statusHtml = `<span
                            class="badge rounded-pill text-bg-secondary">Sem
                            pagamento</span>`
                        }

                        if (status == 'inativo' && res.data[i].status != 'inativo') {
                            continue
                        }

                        if (status == 'atrasado' && res.data[i].cliente.status_pagamento != 'Atrasado') {
                            continue
                        }

                        if (status == 'atrasado' && res.data[i].status == 'inativo') {
                            continue
                        }

                        if (status == 'ativo' && res.data[i].cliente.status_pagamento != 'Ativo') {
                            continue
                        }

                        if (status == 'ativo' && res.data[i].status == 'inativo') {
                            continue
                        }



                        html += `
                        <div class="col-12 col-lg-3">
                            <div class=" border-green-light rounded-4 py-3 pb-2">
                                <div class="d-flex flex-column mb-3 pt-1 align-items-center">
                                    <!-- foto -->
                                    <div class="">
                                        <div class="bg-white position-relative bg-logo-farmacia"
                                            style="background-image: url(${res.data[i].img_perfil})">
                                            <div class=""
                                                style="position: absolute; bottom: 0; right: -3px">
                                                ${htmlDotUser}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nome -->
                                    <div class=" fs-24px w-100 px-4 ">
                                        <a href="#" class="text-decoration-none"
                                            onclick="setDataCliente('${res.data[i].id}')"
                                            data-bs-target="#modal-info">
                                            <div class="text-green-2 fw-500 text-center ">
                                                <div class="fw-600">${res.data[i].name}</div>
                                                <div class="fs-18px">
                                                    ${res.data[i].email}
                                                </div>
                                            </div>
                                            <div class="text-green fs-12px text-center">Cliente
                                                desde
                                                ${res.data[i].tempo_cliente}
                                            </div>

                                        </a>

                                        <div class="fs-16px mt-4 text-green-2">
                                            <div class="">
                                                Status:
                                                ${statusHtml}
                                            </div>
                                            <div class="mt-1">
                                                Último pagamento:
                                                ${res.data[i].cliente.dt_pagamento_ultimo}
                                            </div>
                                            <div class="mt-1">
                                                Vencimento:
                                                ${res.data[i].cliente.dt_pagamento_vencimento}
                                            </div>
                                            <div class="mt-3">
                                                <a href="${res.data[i].cliente.url_atualizar_ass}"
                                                    class="btn btn-primary w-100 fw-500 rounded-0">
                                                    Atualizar Assinatura +1 Mês
                                                </a>
                                            </div>
                                            <div class="mt-1 ${res.data[i].status == 'ativo' ? '' : 'd-none'}" >
                                                <a href="${res.data[i].cliente.url_desativar_conta}"
                                                    class="btn btn-danger w-100 fw-500 rounded-0">
                                                    Desativar Conta
                                                </a>
                                            </div>
                                            <div class="mt-1 ${res.data[i].status == 'inativo' ? '' : 'd-none'}">
                                                <a href="${res.data[i].cliente.url_ativar_conta}"
                                                    class="btn btn-success w-100 fw-500 rounded-0">
                                                    Ativar Conta
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                        `
                    }

                    docLoad.className = 'd-none'
                    document.getElementById('lista-clientes').innerHTML = html
                    if(html == '') {
                        document.getElementById('lista-clientes').innerHTML = `
                            <div class="alert alert-warning text-center fs-4 fw-300" role="alert">
                                Sem registros.
                            </div>
                        `
                    }

                })
        }
        document.querySelector('#pesquisa-cliente').onkeyup = function() {
            pesquisarCliente()
        }
        document.querySelector('#p-atrasado').onclick = function() {
            document.querySelector('#p-ativo').checked=false
            document.querySelector('#p-inativo').checked=false
            pesquisarCliente()
        }
        document.querySelector('#p-ativo').onclick = function() {
            document.querySelector('#p-atrasado').checked=false
            document.querySelector('#p-inativo').checked=false
            pesquisarCliente()
        }
        document.querySelector('#p-inativo').onclick = function() {
            document.querySelector('#p-atrasado').checked=false
            document.querySelector('#p-ativo').checked=false
            pesquisarCliente()
        }
        pesquisarCliente()
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292571460/domains/indutivatecnologia.com/public_html/dsf/resources/views/pages/painel/admin/clientes/pagamento/index.blade.php ENDPATH**/ ?>