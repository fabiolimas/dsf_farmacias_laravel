<?php $__env->startSection('title', 'Lista de usuários'); ?>
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
                                <h1 class="fs-4 fw-600 mb-4 text-green-2 px-4">Lista de usuários</h1>
                                <!-- pesquisa -->
                                <div class="px-4" style="max-width: 500px">
                                    <div class="mb-3 position-relative">
                                        <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                        <input type="text" class="form-control input-pesquisar-cliente" name=""
                                            id="pesquisa" placeholder="Pesquisar" />

                                        <button type="submit" class="btn btn-none text-green p-1"
                                            style="position: absolute; top:3px; right: 20px">
                                            <i data-feather="search"></i>
                                        </button>

                                    </div>

                                </div>

                                <!-- filtro -->
                                <div class="mt-4 pt-2 px-4">
                                    <div class="d-flex gap-3 flex-wrap">
                                        <div class="">
                                            <a href="#" class="link-filtro link-filtro-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <circle cx="10" cy="10" r="10" fill="#27CA40" />
                                                </svg>
                                                Ativo
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="link-filtro link-filtro-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <circle cx="10" cy="10" r="10" fill="#FFC130" />
                                                </svg>
                                                Pagamento atrasado
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="link-filtro link-filtro-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <circle cx="10" cy="10" r="10" fill="#FF6058" />
                                                </svg>
                                                Inativo
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- lista -->

                                <div class="row gx-5">
                                    <!--  -->
                                    <div class="col-12 col-lg-6 col-xl-5">
                                        <div class="mt-4 pt-2">
                                            <div class="  px-4">
                                                <?php $__currentLoopData = [3, 33, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="d-flex mb-3 pt-1 align-items-center">
                                                        <!-- foto -->
                                                        <div class="">
                                                            <div class="bg-white position-relative bg-logo-farmacia"
                                                                style="background-image: url(<?php echo e(asset('assets/img/ilustracoes/logo-fm.png')); ?>)">
                                                                <div class=""
                                                                    style="position: absolute; bottom: 0; right: -3px">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                        height="25" viewBox="0 0 28 28" fill="none">
                                                                        <circle cx="14" cy="14" r="13"
                                                                            fill="#27CA40" stroke="white"
                                                                            stroke-width="2" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- nome -->
                                                        <div class=" fs-20px ms-3">
                                                            <a href="#" class="text-decoration-none"
                                                                data-bs-toggle="modal" data-bs-target="#modal-info">
                                                                <div class="text-green-2 fw-500">Drogasil 00.876.202/0001-00
                                                                </div>
                                                                <div class="text-green">Cliente desde outubro de 2023</div>
                                                            </a>
                                                        </div>

                                                        <!-- opcoes -->
                                                        <div class="ms-auto" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info">
                                                            <a class="text-decoration-none" data-bs-toggle="tooltip"
                                                                type="button" data-bs-placement="top" title="Informações">
                                                                <img src="<?php echo e(asset('assets/img/icons/dots.svg')); ?>"
                                                                    alt="">
                                                            </a>

                                                        </div>
                                                    </div>

                                                    
                                                    <div class="d-flex mb-3 pt-1 align-items-center">
                                                        <!-- foto -->
                                                        <div class="">
                                                            <div class="bg-white position-relative bg-logo-farmacia"
                                                                style="background-image: url(<?php echo e(asset('assets/img/ilustracoes/logo-fm-pg-menos.png')); ?>)">
                                                                <div class=""
                                                                    style="position: absolute; bottom: 0; right: -3px">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                        height="25" viewBox="0 0 28 28"
                                                                        fill="none">
                                                                        <circle cx="14" cy="14" r="13"
                                                                            fill="#FFC130" stroke="white"
                                                                            stroke-width="2" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- nome -->
                                                        <div class=" fs-20px ms-3">
                                                            <a href="#" class="text-decoration-none"
                                                                data-bs-toggle="modal" data-bs-target="#modal-info">
                                                                <div class="text-green-2 fw-500">PagueMenos
                                                                    40.091.555/0001-00
                                                                </div>
                                                                <div class="text-green">Cliente desde outubro de 2023</div>
                                                            </a>
                                                        </div>

                                                        <!-- opcoes -->
                                                        <div class="ms-auto" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info">
                                                            <a class="text-decoration-none" data-bs-toggle="tooltip"
                                                                type="button" data-bs-placement="top"
                                                                title="Informações">
                                                                <img src="<?php echo e(asset('assets/img/icons/dots.svg')); ?>"
                                                                    alt="">
                                                            </a>

                                                        </div>
                                                    </div>

                                                    
                                                    <div class="d-flex mb-3 pt-1 align-items-center">
                                                        <!-- foto -->
                                                        <div class="">
                                                            <div class="bg-white position-relative bg-logo-farmacia"
                                                                style="background-image: url(<?php echo e(asset('assets/img/ilustracoes/logo-fm.png')); ?>)">
                                                                <div class=""
                                                                    style="position: absolute; bottom: 0; right: -3px">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                        height="25" viewBox="0 0 28 28"
                                                                        fill="none">
                                                                        <circle cx="14" cy="14" r="13"
                                                                            fill="#FF6058" stroke="white"
                                                                            stroke-width="2" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- nome -->
                                                        <div class=" fs-20px ms-3">
                                                            <a href="#" class="text-decoration-none"
                                                                data-bs-toggle="modal" data-bs-target="#modal-info">
                                                                <div class="text-green-2 fw-500">Drogasil
                                                                    00.876.202/0001-00
                                                                </div>
                                                                <div class="text-green">Cliente desde outubro de 2023</div>
                                                            </a>
                                                        </div>

                                                        <!-- opcoes -->
                                                        <div class="ms-auto" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info">
                                                            <a class="text-decoration-none" data-bs-toggle="tooltip"
                                                                type="button" data-bs-placement="top"
                                                                title="Informações">
                                                                <img src="<?php echo e(asset('assets/img/icons/dots.svg')); ?>"
                                                                    alt="">
                                                            </a>

                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- paginação -->
                                <div class="pt-4 px-4">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination    ">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
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

                        <div class="d-flex flex-wrap gap-4">

                            <!--  -->
                            <div class="">
                                <div class="d-flex align-items-center p-3 rounded-3 px-4"
                                    style="border: 1px solid #B2D2D2">
                                    <!-- foto -->
                                    <div class="">
                                        <div class="bg-white position-relative bg-logo-farmacia"
                                            style="background-image: url(<?php echo e(asset('assets/img/ilustracoes/logo-fm.png')); ?>); border: 1px solid #00B1AC">
                                        </div>
                                    </div>
                                    <!-- nome -->
                                    <div class=" fs-20px ms-3">
                                        <a href="#" class="text-decoration-none d-block">
                                            <div class="text-green-2 fw-500 text-truncate">Drogasil </div>
                                            <div class="text-green">CNPJ: 40.091.555/0001-00</div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!--  -->
                            <div class="">
                                <div class="d-flex align-items-center p-3 rounded-3 px-4"
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
                                            <div class="text-green-2 fw-500 text-truncate">Email: drogasilgyn@gmail.com
                                            </div>
                                            <div class="text-green text-truncate">Telefone: (62) 98765-4321</div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="mt-4">
                            <!--  -->
                            <div class="">
                                <div class="d-flex align-items-center p-3 px-4 rounded-3 gap-4"
                                    style="border: 1px solid #B2D2D2">
                                    <!--  -->
                                    <div class="d-flex align-items-center">
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
                                                <div class="text-green-2 fw-500 text-truncate">CEP: 74561-23 </div>
                                                <div class="text-green text-truncate">Cidade: Goiânia (GO)</div>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- divisoar -->
                                    <div class="divisor-modal-info-farmacia" style=""></div>

                                    <div class="d-flex align-items-center ">
                                        <!-- nome -->
                                        <div class=" fs-20px ">
                                            <a href="#" class="text-decoration-none d-block">
                                                <div class="text-green-2 fw-500 text-truncate">CEP: 74561-23 </div>
                                                <div class="text-green text-truncate">Cidade: Goiânia (GO)</div>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 pt-2">
                            <div class="col-12 col-lg-6">
                                <button type="button" class="btn btn-primary-light w-100 py-2 fs-20px text-green">
                                    Editar informações
                                </button>
                            </div>
                            <div class="col-12 col-lg-6">
                                <button type="button" class="btn btn-primary w-100 py-2 fs-20px">Ver mais</button>
                            </div>
                        </div>

                    </div>

                    <div class="fechar-modal text-center pt-4">
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
    <script>
        const myModal = new bootstrap.Modal(document.getElementById("modal-info"), {});
        // myModal.show()
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292571460/domains/indutivatecnologia.com/public_html/dsf/resources/views/pages/painel/clientes/list.blade.php ENDPATH**/ ?>