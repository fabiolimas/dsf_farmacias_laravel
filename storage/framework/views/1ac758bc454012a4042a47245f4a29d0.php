<?php $__env->startSection('title', 'Exames'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-7 col-xl-7">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">

                        <!--  -->
                        <div class=" px-4">
                            <a class="btn btn-primary d-block d-md-inline-block mb-3   "
                                href="<?php echo e(route('painel.exames.create')); ?>" role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="folder-plus"></i>
                                    Cadastrar novo exame
                                </div>
                            </a>

                        </div>

                        <!-- lista -->
                        <div class="mt-2 pt-1 ">
                            <div class="mt-3">

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
                                <div class="mt-4 pt-2">
                                    <div class="px-lg-4">
                                        <?php $__currentLoopData = [3, 3, 3, 3, 3, 3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="bg-green-light rounded-3 mb-3 p-4 d-flex gap-3 align-items-center">
                                                <div class="fs-20px fw-500 me-lg-5 ">
                                                    <div class="text-green-2">PSA Teste Rápido</div>
                                                    <div class="text-green">Neo Química</div>
                                                </div>
                                                <!-- img -->
                                                <div class=" d-flex gap-3">

                                                    <div class="">
                                                        <img src="<?php echo e(asset('assets/img/ilustracoes/exame.jpg')); ?>"
                                                            alt="" class="w-100 rounded-3 border-green-light"
                                                            style="filter: blur(0px)">
                                                    </div>

                                                    <!-- acoes -->


                                                    <a href="<?php echo e(route('painel.exames.edit', ['id' => 1])); ?>"
                                                        class="btn btn-primary-light  py-2  text-green d-flex align-items-center"
                                                        style="background: #B2D2D2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Editar">
                                                        <i class="" data-feather="edit-3"
                                                            style="min-width: 70px; min-height: 45px; stroke-width: 1.6"></i>
                                                    </a>
                                                    <div class="">
                                                        <button type="button"
                                                            class="btn btn-ligth bg-white text-green px-2"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Excluir">
                                                            <i class="" data-feather="trash"></i>
                                                        </button>

                                                    </div>

                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <div class="">
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

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        const myModal = new bootstrap.Modal(document.getElementById("modal-info"), {});
        // myModal.show()
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292571460/domains/indutivatecnologia.com/public_html/dsf/resources/views/pages/painel/exames/index.blade.php ENDPATH**/ ?>