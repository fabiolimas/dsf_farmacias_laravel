
<?php $__env->startSection('title', 'Cadastrar novo exame'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Cadastrar novo exame -->
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">


                        <div class="px-3 d-flex justify-content-between align-items-center mb-4 pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 ">Cadastrar novo exame</h2>
                        </div>

                        <!--  -->



                        <form action="#" method="post">

                            <div class="px-3">

                                <!-- exame -->
                                <div class="mb-2 pb-3">
                                    <div class="mb-0 position-relative">
                                        <label for="pesquisa" class="form-label text-green fw-500 fs-18px w-100">
                                            <div class="d-flex justify-content-between gap-2 w-100 align-items-center">
                                                Exame
                                            </div>

                                        </label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control form-control-custom fs-18px fw-500"
                                                name="" id="pesquisa" placeholder="Digite o nome..." />

                                            <button type="submit" class="btn btn-none text-green p-1"
                                                style="position: absolute; top:7px; right: 12px">
                                                <i data-feather="search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Lote e validade -->
                                <div class="mb-3 pb-3">
                                    <label for="lote_validade" class="form-label text-green fw-500 fs-18px">
                                        Lote e validade
                                    </label>
                                    <input type="text"
                                        class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['lote_validade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="lote_validade" id="lote_validade" placeholder=""
                                        value="<?php echo e(old('lote_validade', 0)); ?>" required />
                                    <?php $__errorArgs = ['lote_validade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback fw-500"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Escolha uma cor -->
                                <div class="mb-3 pb-3">
                                    <label for="cor" class="form-label text-green fw-500 fs-18px">
                                        Escolha uma cor
                                    </label>
                                    <label for="cor"
                                        class="form-control form-control-custom fs-18px fw-500 d-flex justify-content-between align-items-center">
                                        <input type="color"
                                            class="rounded-pill input-color-custom p-0 border-0 bg-white <?php $__errorArgs = ['cor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="cor" id="cor" placeholder="" value="<?php echo e(old('cor', '#FFFFFF')); ?>"
                                            required />

                                        <div class="">
                                            <img src="<?php echo e(asset('assets/img/icons/chevron-down.svg')); ?>" alt=""
                                                width="25" class="ms-auto">
                                        </div>
                                    </label>
                                    <?php $__errorArgs = ['cor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback fw-500"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Quantidade em estoque -->
                                <div class="mb-2 pb-3">
                                    <div class="mb-0 position-relative">
                                        <label for="qtd_estoque" class="form-label text-green fw-500 fs-18px w-100">
                                            <div class="d-flex justify-content-between gap-2 w-100 align-items-center">
                                                Quantidade em estoque
                                            </div>

                                        </label>
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control form-control-custom <?php $__errorArgs = ['qtd_estoque'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invallid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> fs-18px fw-500"
                                                name="" id="qtd_estoque" value="<?php echo e(old('qtd_estoque')); ?>"
                                                placeholder="0" />

                                            <div class="text-green-2 fw-500"
                                                style="position: absolute; top:13px; right: 15px">
                                                Unidades
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Valor de venda -->
                                <div class="mb-3 pb-3">
                                    <label for="valor" class="form-label text-green fw-500 fs-18px">
                                        Valor de venda
                                    </label>
                                    <input type="text"
                                        class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['valor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="valor" id="valor" placeholder="R$ 0,00" value="<?php echo e(old('valor')); ?>"
                                        required />
                                    <?php $__errorArgs = ['valor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback fw-500"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Quantidade em estoque -->
                                <div class="mb-2 pb-3">
                                    <div class="mb-0 position-relative">
                                        <label for="tempo_medio" class="form-label text-green fw-500 fs-18px w-100">
                                            <div class="d-flex justify-content-between gap-2 w-100 align-items-center">
                                                Tempo médio de atendimento
                                            </div>

                                        </label>
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control form-control-custom   <?php $__errorArgs = ['tempo_medio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invallid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> fs-18px fw-500"
                                                name="" id="tempo_medio" value="<?php echo e(old('tempo_medio', 30)); ?>"
                                                placeholder="30"/>

                                            <div class="text-green-2 fw-500"
                                                style="position: absolute; top:7px; right: 15px">
                                                <select class="form-select border-green-light form-control-custom bg-white shadow-none text-green fw-500" name="" id="" style="height: auto; width: 83px">
                                                    <option selected>Min</option>
                                                    <option value="">H</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                                <div class="pt-3">
                                    <button type="button" class="btn btn-primary w-100 py-2 fw-600">
                                        Cadastrar exame
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/exames/create.blade.php ENDPATH**/ ?>