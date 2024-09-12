
<?php $__env->startSection('title', 'Exames'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-7 col-xl-8">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">

                        <!-- lista -->
                        <div class=" ">
                            <div class="">

                                <!--  -->
                                <div class=" px-1 px-lg-3 mb-3">
                                    <a name="" id="" class="btn btn-outline-primary d-block d-md-inline-block mb-3 "
                                href="<?php echo e(route('painel.farmacia.exames.lista')); ?>" role="button"
                                style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="archive"></i>
                                    Ver exames prontos
                                </div>
                            </a>

                                </div>

                                <div class="d-flex pb-1  flex-column flex-lg-row gap-2 align-items-center pt-3 ">
                                    <h1 class="fs-4 fw-600  text-green-2 px-0 ps-lg-4  text-center text-md-start" style="min-width: 280px">
                                        Exames realizados
                                    </h1>

                                    <!-- pesquisa -->
                                    <div class="w-100 px-2 px-md-0 pe-lg-4">
                                        <div class=" position-relative">
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
                                <div class="mt-4 px-2 px-md-0">
                                    <div class="px-lg-4">
                                        <?php $__currentLoopData = $examesConfirmados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $confirmado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="bg-green-light rounded-3 mb-3 p-3 p-md-4 ">

                                                <div class="d-xl-flex gap-3 px-md-2 align-items-center">
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div class="">
                                                            <div
                                                                class="bg-white border-green-light px-2 py-2 fw-600  text-center lh-1 rounded-3">
                                                                <div class="fs-24px text-green-2 mb-1 px-2"><?php echo e(date('d',strtotime($confirmado->data_exame))); ?></div>
                                                                <div class="fs-16px text-green px-2 fw-500"><?php echo e(date('M', strtotime($confirmado->data_exame))); ?></div>
                                                            </div>
                                                        </div>

                                                        <div class="fs-20px fw-500 ">
                                                            <a href="<?php echo e(route('painel.farmacia.exames.dados-exame', $confirmado->id)); ?>"
                                                                class="text-decoration-none d-block">
                                                                <div class="text-green-2"><?php echo e($confirmado->nome_exame); ?></div>
                                                                <div class="text-green"><?php echo e($confirmado->nome_cliente); ?></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- img -->
                                                    <div class=" d-sm-flex gap-3 mt-2 mt-xl-0">
                                                        <div class="">
                                                            <a href="<?php echo e(route('painel.farmacia.exames.dados-exame', $confirmado->id)); ?>"
                                                                class="text-decoration-none d-block">
                                                                
                                                                    <div class="row capaExame">
                                                            
                                                                     
                                                                            <div class="dados text-center">
                                                                                <h6><?php echo e($farmacia->razao_social); ?></h6>
                                                                                <p>Fone: <?php echo e($farmacia->telefone); ?> CNPJ: <?php echo e($farmacia->cnpj); ?></p>
                                                                              
                                                                            </div>
                                                                       
                                                                    </div>
                                                            </a>
                                                        </div>

                                                        <!-- acoes -->


                                                        
                                                        <a href="<?php echo e(route('painel.farmacia.exames.dados-exame', $confirmado->id)); ?>"
                                                            class="btn btn-primary-light text-center mt-2 mt-sm-0  py-2  text-green d-flex align-flex-end"
                                                            style="background: #B2D2D2" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="">
                                                            <i class="fa fa-pen" ></i>
                                                            
                                                                Lançar Resultado
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

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/exames/confirmados.blade.php ENDPATH**/ ?>