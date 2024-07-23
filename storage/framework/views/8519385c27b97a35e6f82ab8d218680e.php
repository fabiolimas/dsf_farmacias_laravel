<?php $__env->startSection('title', 'Iniciar Atendimento'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Iniciar atendimento -->
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Iniciar atendimento</h1>

                        <form action="#" method="post">


                            <!-- Responsável -->
                            <div class="mb-3 pb-2">
                                <label for="responsavel" class="form-label text-green fw-500 fs-18px">Responsável</label>
                                <select
                                    class="form-select form-control-custom fs-18px fw-500 <?php $__errorArgs = ['responsavel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="responsavel" id="responsavel" required>
                                    <!-- tood: ver no figma se tem opcoes -->
                                    <option value="" class="fw-500">João Almeida</option>
                                    <option value="" class="fw-500">João Almeida</option>
                                </select>
                                <?php $__errorArgs = ['responsavel'];
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

                            <!-- cliente  -->
                            <div class="mb-3 pb-2">
                                <label for="cliente" class="form-label text-green fw-500 fs-18px">
                                    Cliente
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['cliente'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="cliente" id="cliente" value="<?php echo e(old('cliente')); ?>"
                                    placeholder="ex: Pedro Henrique" required />
                                <?php $__errorArgs = ['cliente'];
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

                            <!-- exame  -->
                            <div class="mb-3 pb-2">
                                <label for="exame" class="form-label text-green fw-500 fs-18px">
                                    Exame
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['exame'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="exame" id="exame" placeholder="ex: COVID-19" value="<?php echo e(old('exame')); ?>"
                                    required />
                                <?php $__errorArgs = ['exame'];
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
                            <!-- Data do exame  -->
                            <div class="mb-3 pb-2">
                                <label for="dt_exame" class="form-label text-green fw-500 fs-18px">
                                    Data do exame
                                </label>
                                <input type="date"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['dt_exame'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="dt_exame" id="dt_exame" placeholder=""
                                    value="<?php echo e(old('dt_exame', date('Y-m-d'))); ?>" required />
                                <?php $__errorArgs = ['dt_exame'];
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
                            <!-- Horário de início  -->
                            <div class="mb-3 pb-2">
                                <label for="hora_inicio" class="form-label text-green fw-500 fs-18px">
                                    Horário de início
                                </label>
                                <input type="time"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['hora_inicio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="hora_inicio" id="hora_inicio" placeholder=""
                                    value="<?php echo e(old('hora_inicio', date('H:i'))); ?>" required />
                                <?php $__errorArgs = ['hora_inicio'];
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




                            <div class="pt-5">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600">
                                    Iniciar
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- Folha de exame -->
            <div class="col-12 col-lg-7 col-xl-8">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Folha de exame</h2>



                    </div>
                </div>

            </div>



        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/exames/atendimento.blade.php ENDPATH**/ ?>