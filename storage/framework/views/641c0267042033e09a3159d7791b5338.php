<?php $__env->startSection('title', 'Editar exame'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- novo exame -->
            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Editar exame</h1>

                        <form action="#" method="post">

                            <!-- Nome do exame -->
                            <div class="mb-3 pb-2">
                                <label for="nome" class="form-label text-green fw-500 fs-18px">Nome do exame</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="nome" id="nome" placeholder="Ex: COVID-19" required />
                                <?php $__errorArgs = ['nome'];
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
                            <!-- Laboratório -->
                            <div class="mb-3 pb-2">
                                <label for="laboratorio" class="form-label text-green fw-500 fs-18px">Laboratório</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['laboratorio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="laboratorio" id="laboratorio" placeholder="Ex: Kovalent" required />
                                <?php $__errorArgs = ['laboratorio'];
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

                            <!-- Registro MS -->
                            <div class="mb-3 pb-2">
                                <label for="registro_ms" class="form-label text-green fw-500 fs-18px">
                                    Registro MS
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['registro_ms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="registro_ms" id="registro_ms" placeholder="00000" required />
                                <?php $__errorArgs = ['registro_ms'];
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

                            <div class="pt-3 mt-5">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600 mb-3">
                                    Salvar
                                </button>
                                <button type="button" class="btn btn-primary-light text-green  w-100 py-2 fw-600">
                                    Excluir exame
                                </button>


                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- novo exame -->
            <div class="col-12 col-lg-8 col-xl-8">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Perguntas do exame</h1>

                        <?php $__currentLoopData = [3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="border-green-light p-3 rounded-3 mb-4">
                                <div class="row">
                                    <!-- Pergunta -->
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-3 pb-2">
                                            <label for="pergunta"
                                                class="form-label text-green fw-500 fs-18px">Pergunta</label>
                                            <input type="text"
                                                class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['pergunta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="pergunta" id="pergunta" placeholder="Forma de aplicação do exame?"
                                                required />
                                            <?php $__errorArgs = ['pergunta'];
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
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <!-- Tipo -->
                                        <div class="mb-3 pb-2">
                                            <label for="tipo"
                                                class="form-label text-green fw-500 fs-18px opacity-0">Tipo</label>
                                            <select
                                                class="form-select form-control-custom fw-500 fs-18px <?php $__errorArgs = ['tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                style="background-color: #CCEFEE" name="tipo" id="tipo" required>
                                                <option value="Múltipla escolha">Múltipla escolha</option>

                                            </select>
                                            <?php $__errorArgs = ['tipo'];
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
                                    </div>


                                    <!-- Opções -->
                                    <!-- op -->
                                    <div class="col-12">
                                        <div class="row flex-column">
                                            <!--  -->
                                            <div class="col-12 col-lg-6">
                                                <div class="mb-3 pb-2 position-relative">
                                                    <label for="opcao1" class="form-label text-green fw-500 fs-18px">
                                                        Opção 1
                                                    </label>
                                                    <div class=" "
                                                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                                                        <button type="button"
                                                            class="btn btn-none border-0 p-1 text-green fs-18px">
                                                            <i class="" data-feather="x"></i>
                                                        </button>
                                                    </div>

                                                    <input type="text"
                                                        class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['opcao1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        name="opcao1" id="opcao1" placeholder="Braço" value=""
                                                        required />
                                                    <?php $__errorArgs = ['opcao1'];
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
                                            </div>
                                            <!--  -->
                                            <div class="col-12 col-lg-6">
                                                <div class="mb-3 pb-2 position-relative">
                                                    <label for="opcao2" class="form-label text-green fw-500 fs-18px">
                                                        Opção 2
                                                    </label>
                                                    <div class=" "
                                                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                                                        <button type="button"
                                                            class="btn btn-none border-0 p-1 text-green fs-18px">
                                                            <i class="" data-feather="plus-circle"></i>
                                                        </button>
                                                    </div>

                                                    <input type="text"
                                                        class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['opcao2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        name="opcao2" id="opcao2" placeholder="Nasal" value=""
                                                        required />
                                                    <?php $__errorArgs = ['opcao2'];
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
                                            </div>
                                        </div>
                                    </div>
                                    <!-- op -->
                                    <div class="col-12">
                                        <div class="form-control form-control-custom d-flex align-items-center justify-content-end gap-3  border-end-0 border-start-0 border-bottom-0"
                                            style="border-top-left-radius: 0;  border-top-right-radius: 0">

                                            <button type="button" class="btn btn-none border-0 p-0 text-green-3"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Copiar pergunta">
                                                <i class="" data-feather="copy"></i>
                                            </button>
                                            <button type="button" class="btn btn-none border-0 p-0 text-green-3"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Remover">
                                                <i class="" data-feather="trash"></i>
                                            </button>


                                            <div class="" style="height: 20px; border-left: 1px solid #B2D2D2">

                                            </div>
                                            <div class="fw-500 d-flex gap-1 align-items-center">

                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Obrigatória</label>

                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="flexSwitchCheckDefault">
                                                </div>


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>

            </div>

        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292571460/domains/indutivatecnologia.com/public_html/dsf/resources/views/pages/painel/exames/edit.blade.php ENDPATH**/ ?>