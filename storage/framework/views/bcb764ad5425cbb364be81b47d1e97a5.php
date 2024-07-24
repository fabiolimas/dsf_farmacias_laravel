
<?php $__env->startSection('title', 'Entrar'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container auth">
        <div class="row justify-content-center min-vh-100 align-items-center py-5">
            <div class="col-12 col-md-6 col-lg-5 col-xl-4 ">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <img src="<?php echo e(asset('assets/img/logos/logo.svg')); ?>" alt="DSF" width="150">
                        </div>



                        <div class="alert alert-warning" role="alert">
                            email: adm@email.com<br>
                            email: farmacia@email.com<br>
                            senha: password
                        </div>



                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class=" mb-3">
                                <label for="email" class=" col-form-label text-md-end">Login</label>

                                <div class="">
                                    <input id="email" type="email"
                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                        value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                        placeholder="Digite seu email de login" autofocus>

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback fw-500" role="alert">
                                            <?php echo e($message); ?>

                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class=" mb-3">
                                <label for="password" class=" col-form-label text-md-end"><?php echo e(__('Password')); ?></label>

                                <div class="position-relative">
                                    <input id="password" type="password"
                                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                                        required autocomplete="current-password" placeholder="Digite sua senha">

                                    <div class="position-absolute" style="top: 5px; right: 12px;">
                                        <button type="button" class="btn btn-none p-1 border-0" onclick="showPassword()">
                                            <img src="<?php echo e(asset('assets/img/icons/eye.svg')); ?>" alt="" width="18"
                                                id="senha-on" style="display: none">
                                            <img src="<?php echo e(asset('assets/img/icons/eye-off.svg')); ?>" alt=""
                                                width="18" id="senha-off">
                                        </button>

                                    </div>

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                            </div>

                            <div class="visually-hidden">
                                <div class=" ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            checked>

                                        <label class="form-check-label" for="remember">
                                            <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=" mb-0">
                                <div class="mt-4 pt-4 ">
                                    <button type="submit" class="btn btn-green w-100">
                                        <?php echo e(__('Login')); ?>

                                    </button>

                                    <?php if(Route::has('password.request')): ?>
                                        <div class="text-center mt-4 pt-2">
                                            <a class="btn btn-link text-green fw-500 text-decoration-none"
                                                href="<?php echo e(route('password.request')); ?>">
                                                Esqueci a senha
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showPassword() {
            let pass = document.getElementById('password');
            if (pass.type == 'password') {
                pass.type = 'text'
                document.getElementById('senha-off').style.display = 'none'
                document.getElementById('senha-on').style.display = 'inline-block'
            } else {

                pass.type = 'password'
                document.getElementById('senha-off').style.display = 'inline-block'
                document.getElementById('senha-on').style.display = 'none'
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>