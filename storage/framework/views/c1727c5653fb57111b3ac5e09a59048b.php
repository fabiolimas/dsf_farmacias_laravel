<?php $__env->startSection('title', 'Gráficos'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4 graficos">

            <!-- Quantidade de exames gerados -->
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body px-4 py-4">

                        <div class="d-sm-flex align-items-center  gap-4">
                            <h2 class="fs-24px fw-600 text-green-2 pt-1 ">Quantidade de exames</h2>
                            <div class="d-flex gap-3 ps-lg-3">
                                <div class="">
                                    <div class="dropdown">
                                        <button class="btn btn-light bg-white shadow-sm border text-green " type="button"
                                            id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <div class="d-flex gap-1 align-items-center">
                                                Todos
                                                <img src="<?php echo e(asset('assets/img/icons/chevron-down-2.svg')); ?>" alt=""
                                                    width="25">
                                            </div>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="#">Todos</a>
                                            <a class="dropdown-item" href="#">Todos</a>
                                            <a class="dropdown-item" href="#">Todos</a>
                                            <a class="dropdown-item" href="#">Todos</a>
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

            <!-- Exames mais pedidos -->
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body px-2 py-4">

                        <!-- head -->
                        <div class="d-sm-flex px-3 align-items-center  gap-4 justify-content-between">
                            <h2 class="fs-24px fw-600 text-green-2 pt-1 ">Exames mais pedidos</h2>
                            <!-- dropdown -->
                            <div class="d-flex gap-3 ps-lg-3 ">
                                <div class="">
                                    <div class="dropdown">
                                        <button class="btn btn-light bg-white shadow-sm border text-green " type="button"
                                            id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <div class="d-flex gap-1 align-items-center">
                                                6 meses
                                                <img src="<?php echo e(asset('assets/img/icons/chevron-down-2.svg')); ?>" alt=""
                                                    width="25">
                                            </div>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="#">6 meses</a>
                                            <a class="dropdown-item" href="#">6 meses</a>
                                            <a class="dropdown-item" href="#">6 meses</a>
                                            <a class="dropdown-item" href="#">6 meses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- conteúdo -->
                        <div class="pt-2"></div>
                        <div class="position-relative mt-4">
                            <!-- Lista -->
                            <div class="mt-2 lista-scroll p-3 pt-0 clientes-lista-assinantes pb-5 "
                                style="max-height: 500px">

                                <?php $__currentLoopData = [3, 3, 3, 3, 3, 3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div
                                        class="d-flex gap-2 mb-3text-green-2 fw-600 bg-green-light  p-2 rounded-3 mb-3 align-items-center ">
                                        <div class="">
                                            <div class="bg-white border-green-light px-2 py-2  text-center lh-1 rounded-3">
                                                <div class="fs-2 text-green-2 py-1 px-1">#<?php echo e($key + 1); ?></div>
                                            </div>
                                        </div>
                                        <div class="d-flex  align-items-center">
                                            <div class="">
                                                <div class="text-green-2 fs-18px">PSA Teste Rápido</div>
                                                <div class="text-green fs-16px">456 realizados</div>
                                            </div>
                                        </div>
                                        <div class="fs-18px text-green-2 ms-auto pe-3">
                                            50 em estoque
                                        </div>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="ver-mais-lista-scroll text-center">
                                <button type="button"
                                    class="btn btn-ligth shadow bg-white  py-1 text-green fs-20px fw-600">
                                    Ver mais
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Ticket médio -->
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body px-2 py-4">

                        <!-- head -->
                        <div class="d-flex px-3 align-items-center  gap-4 justify-content-between">
                            <h2 class="fs-24px fw-600 text-green-2 pt-1 ">Ticket médio</h2>
                            <!-- dropdown -->
                            <div class="d-flex gap-3 ps-lg-3 ">
                                <div class="">
                                    <div class="dropdown">
                                        <button class="btn btn-light bg-white shadow-sm border text-green " type="button"
                                            id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <div class="d-flex gap-1 align-items-center">
                                                24h
                                                <img src="<?php echo e(asset('assets/img/icons/chevron-down-2.svg')); ?>"
                                                    alt="" width="25">
                                            </div>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="#">24h</a>
                                            <a class="dropdown-item" href="#">24h</a>
                                            <a class="dropdown-item" href="#">24h</a>
                                            <a class="dropdown-item" href="#">24h</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- conteúdo -->
                        <div class="pt-2"></div>
                        <div class="position-relative mt-4">
                            <!-- Lista -->
                            <div class="mt-2 lista-scroll p-3 pt-0 clientes-lista-assinantes pb-5 "
                                style="max-height: 500px">

                                <?php $__currentLoopData = [3, 3, 3, 3, 3, 3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div
                                        class="d-flex gap-2 mb-3text-green-2 fw-600 bg-green-light  p-2 rounded-3 mb-3 align-items-center ">
                                        <div class="d-flex  align-items-center">
                                            <div class="">
                                                <div class="text-green-2 fs-18px">PSA Teste Rápido</div>
                                                <div class="text-green fs-16px">6 realizados</div>
                                            </div>
                                        </div>
                                        <div class="fs-5 text-green-2 ms-auto pe-3">
                                            R$ 120,00
                                        </div>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="ver-mais-lista-scroll text-center">
                                <button type="button"
                                    class="btn btn-ligth shadow bg-white  py-1 text-green fs-20px fw-600">
                                    Ver mais
                                </button>
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
    <script src="<?php echo e($qtdExames->cdn()); ?>"></script>
    <?php echo e($qtdExames->script()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292571460/domains/indutivatecnologia.com/public_html/dsf/resources/views/pages/painel/farmacia/graficos/index.blade.php ENDPATH**/ ?>