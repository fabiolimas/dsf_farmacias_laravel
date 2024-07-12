<?php $__env->startSection('title', 'Exames'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Próximos atendimentos -->
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">


                        <!--  -->
                        <div class=" px-3">
                            <a class="btn btn-primary d-block d-md-inline-block mb-3 me-lg-3   "
                                href="<?php echo e(route('painel.farmacia.exames.atendimento')); ?>" role="button"
                                style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="file-plus"></i>
                                    Iniciar atendimento
                                </div>
                            </a>
                            <a name="" id="" class="btn btn-outline-primary d-block d-md-inline-block mb-3 "
                                href="<?php echo e(route('painel.farmacia.exames.lista')); ?>" role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="archive"></i>
                                    Ver exames
                                </div>
                            </a>
                        </div>

                        <div class="px-3 d-flex justify-content-between align-items-center mb-3  pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 pt-2 ">Próximos atendimentos</h2>
                        </div>

                        <!--  -->
                        <!-- pesquisa -->
                        <div class="pt-2 px-3">
                            <div class="mb-0 position-relative">
                                <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                <input type="text" class="form-control input-pesquisar-cliente" name=""
                                    id="pesquisa" placeholder="Pesquisar" />

                                <button type="submit" class="btn btn-none text-green p-1"
                                    style="position: absolute; top:3px; right: 20px">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>




                        <div class="position-relative mt-4">
                            <!-- Lista -->
                            <div class=" lista-scroll p-3 pt-0 clientes-lista-assinantes " style="max-height: 550px">
                                <?php $__currentLoopData = [3, 33, 3, 3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class=" mb-2 pb-1">
                                        <div class="fs-20 text-green fw-600">
                                            05 de Setembro
                                        </div>
                                    </div>
                                    <div class="px-3 pb-4">
                                        <!--  -->

                                        <div class="d-flex gap-2 align-items-center mb-3">

                                            <button type="button" class="btn btn-none border-0 p-0 text-start"
                                                data-bs-toggle="modal" data-bs-target="#modal-ver-agenda">
                                                <div class="d-flex gap-4  pt-1 align-items-center">
                                                    <div class="text-green-2 fw-700 lh-1">
                                                        <div class="fs-3 mb-1">
                                                            08:30
                                                        </div>
                                                        <div class="fs-18px fw-600">
                                                            09:00
                                                        </div>
                                                    </div>
                                                    <div class="divisor-horarios cor-roxo" style="max-height: 53px"></div>
                                                    <div class="fs-18px text-green-2 fw-600">
                                                        <div class="text-green-2">COVID-19</div>
                                                        <div class="text-green">
                                                            Pedro Henrique
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>

                                            <a href="<?php echo e(route('painel.farmacia.exames.atendimento')); ?>"
                                                class="btn btn-primary-light-3 py-2 btn-lg fs-18px ms-auto fw-600"
                                                style="">
                                                Iniciar
                                            </a>
                                        </div>


                                        <!--  -->
                                        <div class="d-flex gap-2 align-items-center mb-3 ">
                                            <button type="button" class="btn btn-none border-0 p-0 text-start"
                                                data-bs-toggle="modal" data-bs-target="#modal-ver-agenda">
                                                <div class="d-flex gap-4  pt-1 align-items-center">
                                                    <div class="text-green-2 fw-700 lh-1">
                                                        <div class="fs-3 mb-1">
                                                            10:30
                                                        </div>
                                                        <div class="fs-18px fw-600">
                                                            09:00
                                                        </div>
                                                    </div>
                                                    <div class="divisor-horarios cor-verde" style="max-height: 53px"></div>
                                                    <div class="fs-18px text-green-2 fw-600">
                                                        <div class="">BETA-hCG</div>
                                                        <div class="text-green">
                                                            Pedro Henrique
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button type="button"
                                                class="btn btn-primary-light-3 py-2 btn-lg fs-18px ms-auto fw-600"
                                                style="">
                                                Iniciar
                                            </button>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="ver-mais-lista-scroll text-center">
                                <!-- todo: ver no figma, n tem esse ver mais -->
                                <button type="button"
                                    class="btn btn-ligth shadow bg-white  py-1 text-green fs-20px fw-600">
                                    Ver mais
                                </button>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <!-- Lista -->
            <div class="col-12 col-lg-7 col-xl-8">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">

                        <!-- lista -->
                        <div class=" ">
                            <div class="">

                                <div class="d-flex  flex-column flex-lg-row gap-2 align-items-center ">
                                    <h1 class="fs-4 fw-600 mb-4 text-green-2 px-0 ps-lg-4  " style="min-width: 260px">Exames
                                        postados</h1>

                                    <!-- pesquisa -->
                                    <div class="w-100 pe-lg-4">
                                        <div class="mb-3 position-relative">
                                            <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                            <input type="text" class="form-control input-pesquisar-cliente"
                                                name="" id="pesquisa" placeholder="Pesquisar" />

                                            <button type="submit" class="btn btn-none text-green p-1"
                                                style="position: absolute; top:3px; right: 20px">
                                                <i data-feather="search"></i>
                                            </button>

                                        </div>

                                    </div>

                                </div>




                                <!-- lista -->
                                <div class="mt-4">
                                    <div class="px-lg-4">
                                        <?php $__currentLoopData = [3, 3, 3, 3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="bg-green-light rounded-3 mb-3 p-4 ">

                                                <div class="d-flex gap-3 px-2 align-items-center">
                                                    <div class="">
                                                        <div
                                                            class="bg-white border-green-light px-2 py-2 fw-600  text-center lh-1 rounded-3">
                                                            <div class="fs-24px text-green-2 mb-1 px-2">05</div>
                                                            <div class="fs-16px text-green px-2 fw-500">Ago</div>
                                                        </div>
                                                    </div>

                                                    <div class="fs-20px fw-500 me-lg-5 ">
                                                        <a href="<?php echo e(route('painel.farmacia.exames.show', ['id' => 1])); ?>"
                                                            class="text-decoration-none d-block">
                                                            <div class="text-green-2">PSA Teste Rápido</div>
                                                            <div class="text-green">Carla Silva</div>
                                                        </a>
                                                    </div>
                                                    <!-- img -->
                                                    <div class=" d-flex gap-3">
                                                        <div class="">
                                                            <a href="<?php echo e(route('painel.farmacia.exames.show', ['id' => 1])); ?>"
                                                                class="text-decoration-none d-block">
                                                                <img src="<?php echo e(asset('assets/img/ilustracoes/exame.jpg')); ?>"
                                                                    alt=""
                                                                    class="w-100 rounded-3 border-green-light"
                                                                    style="filter: blur(0px)">
                                                            </a>
                                                        </div>

                                                        <!-- acoes -->


                                                        <a href="<?php echo e(route('painel.exames.edit', ['id' => 1])); ?>"
                                                            class="btn btn-primary-light  py-2  text-green d-flex align-items-center"
                                                            style="background: #B2D2D2" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="">
                                                            <i class="" data-feather="printer"
                                                                style="min-width: 70px; min-height: 45px; stroke-width: 1.6"></i>
                                                        </a>


                                                    </div>
                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292571460/domains/indutivatecnologia.com/public_html/dsf/resources/views/pages/painel/farmacia/exames/index.blade.php ENDPATH**/ ?>