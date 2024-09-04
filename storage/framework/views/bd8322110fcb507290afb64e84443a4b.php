<?php $__env->startSection('title', 'Gráficos'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4 graficos">

            <!-- Faturamento -->
            <div class="col-12 col-lg-4 col-xl-5">
                <div class="card">
                    <div class="card-body px-4 py-4">

                        <div class="d-flex justify-content-between gap-3 align-items-center">
                            <h2 class="fs-24px fw-600 text-green-2 ">Faturamento</h2>
                            <div class="">
                                <div class="dropdown">
                                    <button class="btn btn-light bg-white shadow-sm border text-green " type="button"
                                        id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="d-flex gap-1 align-items-center">
                                            7 dias
                                            <img src="<?php echo e(asset('assets/img/icons/chevron-down-2.svg')); ?>" alt=""
                                                width="25">
                                        </div>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="#">7 dias</a>
                                        <a class="dropdown-item" href="#">7 dias</a>
                                        <a class="dropdown-item" href="#">7 dias</a>
                                        <a class="dropdown-item" href="#">7 dias</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php echo $faturamento->container(); ?>


                        <div class="line-chart mt-4 pt-3 position-relative pb-3">
                            <div class="line-chart-vertical"></div>
                            <div class="position-absolute d-flex w-100 justify-content-between">
                                <div class="line-chart-dot line-chart-dot-1"></div>
                                <div class="line-chart-dot line-chart-dot-2"></div>
                                <div class="line-chart-dot line-chart-dot-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quantidade de exames gerados -->
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="card">
                    <div class="card-body px-4 py-4">

                        <div class="d-md-flex align-items-center justify-content-between gap-3">
                            <h2 class="fs-24px fw-600 text-green-2 ">Quantidade de exames gerados</h2>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <div class="dropdown">
                                        <button class="btn btn-light bg-white shadow-sm border text-green " type="button"
                                            id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <div class="d-flex gap-1 align-items-center">
                                                7 dias
                                                <img src="<?php echo e(asset('assets/img/icons/chevron-down-2.svg')); ?>" alt=""
                                                    width="25">
                                            </div>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="#">7 dias</a>
                                            <a class="dropdown-item" href="#">7 dias</a>
                                            <a class="dropdown-item" href="#">7 dias</a>
                                            <a class="dropdown-item" href="#">7 dias</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="dropdown">
                                        <button class="btn btn-light bg-white shadow-sm border text-green " type="button"
                                            id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <div class="d-flex gap-1 align-items-center">
                                                7 dias
                                                <img src="<?php echo e(asset('assets/img/icons/chevron-down-2.svg')); ?>" alt=""
                                                    width="25">
                                            </div>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="#">7 dias</a>
                                            <a class="dropdown-item" href="#">7 dias</a>
                                            <a class="dropdown-item" href="#">7 dias</a>
                                            <a class="dropdown-item" href="#">7 dias</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php echo $qtdExames->container(); ?>


                        <div class="line-chart mt-4 pt-3 position-relative pb-3">
                            <div class="line-chart-vertical"></div>
                            <div class="position-absolute d-flex w-100 justify-content-between">
                                <div class="line-chart-dot line-chart-dot-1"></div>
                                <div class="line-chart-dot line-chart-dot-2"></div>
                                <div class="line-chart-dot line-chart-dot-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mapa de clientes -->
            <div class="col-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body px-4 py-4">

                        <div class="row gy-4 gx-5">
                            <!-- mapa -->
                            <div class="col-12 col-lg-6">
                                <div class="">
                                    <h2 class="fs-24px fw-600 text-green-2 w-100">Mapa de clientes</h2>
                                </div>

                                <div class="pt-3">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14630.85052938589!2d-46.64316864155674!3d-23.542836010998084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58560a6c5f29%3A0xeff177e6d6a04b7a!2sCentro%20Hist%C3%B3rico%20de%20S%C3%A3o%20Paulo%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1703699809257!5m2!1spt-BR!2sbr"
                                        height="361" style="border:0;" allowfullscreen="" class="w-100"
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>

                            <!-- pesquisa -->
                            <div class="col-12 col-lg-6 pb-4">
                                <!-- pesquisa -->
                                <div class="pb-4">
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

                                <!-- gráfico -->
                                <div id="carouselExampleIndicators" class="carousel-mapa-clientes-graficos carousel slide">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item  active" data-bs-interval="10000000"
                                            style="">
                                            <div class=" pt-3">
                                                <div class=" ms-auto"
                                                    style="margin-bottom: -45px; font-size: 10px; max-width: 145px">
                                                    <div class="d-inline-block  bg-green-light rounded-pill text-green"
                                                        style="padding: 2px 4px">
                                                        TOP 5
                                                    </div>
                                                </div>
                                            </div>
                                            <?php echo $mapaClientes->container(); ?>

                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000000" style="">
                                            <ul class="list-unstyled">
                                                <?php $__currentLoopData = [3, 3, 3, 3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class=" d-flex justify-content-between py-2 text-green-4 fs-16px">
                                                        São Paulo (SP)
                                                        <span class="d-flex bg-green-light rounded-3 py-1 px-2">
                                                            18 Unidades
                                                        </span>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Faturamento de clientes -->
            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body px-2 py-4">

                        <div class="px-3 d-md-flex justify-content-between gap-3 align-items-center">
                            <h2 class="fs-24px fw-600 text-green-2 ">Faturamento de clientes</h2>
                            
                        </div>

                        <!-- pesquisa -->
                        <div class="mt-4 px-3">
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

                        <!-- Lista -->
                        <div class="position-relative">
                            <div class="mt-2 lista-scroll p-3 clientes-lista-assinantes " style="max-height: 300px">
                                <?php $__currentLoopData = $faturamentoCliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faturamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <div class=" d-md-flex  gap-3 fw-500 text-green-2 align-items-center mb-3">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="d-inline-block">
                                                <div class="bg-green-light border-green-light rounded-3 p-2 py-1 fs-20px">
                                                    #<?php echo e($loop->index + 1); ?>

                                                </div>
                                            </div>

                                            <div class="fs-20px  fw-600 d-flex gap-2 align-items-center">
                                                <div class="text-truncate">
                                                   <?php echo e(Str::limit($faturamento->razao_social, 11, '...')); ?>

                                                </div>
                                                <div class="position-relative" style="">
                                                    <div
                                                        class="fatura-cliente-show-cnpj text-truncate bg-green-light border-green-light rounded-3 px-1 py-1 fs-12px fw-400">
                                                        <span class="fatura-cliente-show-cnpj-texto">CNPJ</span>
                                                        <span class="fatura-cliente-show-cnpj-num"><?php echo e($faturamento->cnpj); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto fs-20px fw-600 text-green">
                                            R$ <?php echo e(number_format($faturamento->total_faturado, 2, ',', '.')); ?>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                            </div>
                            <div class="ver-mais-lista-scroll text-center">
                                
                            </div>
                        </div>




                    </div>
                </div>
            </div>


        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- scripts apexchart -->
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/admin/graficos/index.blade.php ENDPATH**/ ?>