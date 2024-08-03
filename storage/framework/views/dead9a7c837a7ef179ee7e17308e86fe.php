
<?php $__env->startSection('title', 'Editar cliente'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Editar cliente -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Editar cliente</h1>

                        <form action="<?php echo e(route('painel.farmacia.clientes.update', $cliente->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>

                            <!-- Nome  -->
                            <div class="mb-3 pb-2">
                                <label for="nome" class="form-label text-green fw-500 fs-18px">
                                    Nome
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="nome" id="nome"  value="<?php echo e($cliente->nome); ?>" />
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

                            <!-- cpf  -->
                            <div class="mb-3 pb-2">
                                <label for="cpf" class="form-label text-green fw-500 fs-18px">
                                    CPF
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['cpf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="cpf" id="cpf" placeholder="000.000.000-01"
                                   value="<?php echo e($cliente->cpf); ?>" />
                                <?php $__errorArgs = ['cpf'];
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
                            <!-- Data de nascimento  -->
                            <div class="mb-3 pb-2">
                                <label for="data_nascimento" class="form-label text-green fw-500 fs-18px">
                                    Data de nascimento
                                </label>
                                <input type="date"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['dt_nascimento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="data_nascimento" id="data_nascimento" placeholder=""
                                     value="<?php echo e(date('Y-m-d', strtotime($cliente->data_nascimento))); ?>" />
                                <?php $__errorArgs = ['dt_nascimento'];
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

                            <!-- sexo -->
                            <div class="mb-3 pb-2">
                                <label for="sexo" class="form-label text-green fw-500 fs-18px">sexo</label>
                                <select class="form-select form-control-custom fs-18px fw-500 <?php $__errorArgs = ['sexo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="sexo" id="sexo">
                                    <!-- tood: ver no figma se tem opcoes -->
                                    <?php switch($cliente->sexo):
                                        case ('Masculino'): ?>
                                        <option value="Masculino" class="fw-500" selected>Masculino</option>
                                        <option value="Feminino" class="fw-500">Feminino</option>
                                            <?php break; ?>
                                        <?php case ('Feminino'): ?>
                                        <option value="Masculino" class="fw-500" >Masculino</option>
                                        <option value="Feminino" class="fw-500" selected>Feminino</option>
                                            <?php break; ?>
                                        <?php default: ?>
                                            
                                    <?php endswitch; ?>
                                    
                                </select>
                                <?php $__errorArgs = ['sexo'];
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

                            <!-- E-mail para login -->
                            <div class="mb-3 pb-2">
                                <label for="email" class="form-label text-green fw-500 fs-18px">
                                    Email
                                </label>
                                <input type="email"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="email"id="email" placeholder="usuario@email.com" value="<?php echo e($cliente->email); ?>" />
                                <?php $__errorArgs = ['email'];
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

                            <!-- Telefone  -->
                            <div class="mb-3 pb-2">
                                <label for="telefone" class="form-label text-green fw-500 fs-18px">
                                    Telefone
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['telefone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="telefone" id="telefone" placeholder="(99) 99999-9999"
                                     value="<?php echo e($cliente->telefone); ?>" />
                                <?php $__errorArgs = ['telefone'];
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
                           

                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600">
                                    Salvar
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>



        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/clientes/edit.blade.php ENDPATH**/ ?>