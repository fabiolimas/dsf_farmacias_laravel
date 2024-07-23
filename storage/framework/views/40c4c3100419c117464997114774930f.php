<?php $__env->startSection('title', 'Adicionar colaborador'); ?>
<?php $__env->startSection('head'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Adicionar colaborador -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2 pb-3">Adicionar colaborador</h1>

                        <form action="<?php echo e(route('painel.config.colaboradores.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>


                            <!-- Nome fantasia -->
                            <div class="mb-3 pb-2">


                                <!-- img perfil usuario base64 -->
                                <textarea id="img_profile" class="visually-hidden" name="img_profile" cols="30" rows="10"></textarea>
                                <!--  -->
                                <div class="d-flex gap-3 align-items-center">
                                    <label for="inputImage" id="label-img-perfil" class=" rounded-circle foto-perfil-config"
                                        style="background-image: url(<?php echo e(asset('assets/img/icons/upload-2.png')); ?>)">

                                    </label>
                                    <div class="">
                                        <label for="inputImage" class="form-label text-green fw-500 fs-18px lh-sm">
                                            Selecionar imagem
                                            <div class=" fw-400 fs-12px mt-1">
                                                Indicado: jpeg 500x500
                                            </div>
                                        </label>
                                    </div>

                                    <input type="file" id="inputImage" accept="image/png, image/jpeg, image/jpg"
                                        class="visually-hidden">
                                </div>

                            </div>


                            <!-- Nome fantasia -->
                            <div class="mb-3 pb-2">
                                <label for="name" class="form-label text-green fw-500 fs-18px">
                                    Nome
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="name" id="name" value="<?php echo e(old('name')); ?>"
                                    placeholder="Ex: Pedro Henrique" required />
                                <?php $__errorArgs = ['name'];
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
                                    Login
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
                                    name="email" id="email" value="<?php echo e(old('email')); ?>"
                                    placeholder="usuario@email.com" required />
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
                            <!-- Senha  -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="password" class="form-label text-green fw-500 fs-18px">
                                    Senha
                                </label>

                                <input type="password"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="password" id="password" placeholder="" value="" required />
                                <?php $__errorArgs = ['password'];
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

                            <!-- cargo -->
                            <div class="mb-3 pb-2">
                                <label for="cargo" class="form-label text-green fw-500 fs-18px">Cargo</label>
                                <select class="form-select form-control-custom fs-18px <?php $__errorArgs = ['cargo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="cargo" id="cargo" required>
                                    <option value="" selected>Selecione um cargo</option>
                                    <?php $__currentLoopData = $rolesAdmin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->name); ?>"
                                            <?php if(old('cargo') == $item->name): ?> selected <?php endif; ?>><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['cargo'];
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
                                    Adicionar
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>



        </div>

    </div>



    <!-- Modal recortar img -->
    <div class="modal modal-custom fade" id="modal-foto-perfil" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg border-0" role="document"
            style="max-width: 600px">
            <div class="modal-content bg-transparent ">
                <div class="modal-body p-lg-5  border-0">

                    <div class="p-3  p-md-4 shadow rounded-3  bg-white border">


                        <div class="pt-3">

                            <div class="">
                                <!-- Wrap the image or canvas element with a block element (container) -->
                                <div>
                                    <img id="image" src="" alt="Imagem">
                                </div>
                            </div>

                            <div class=" d-flex align-items-center gap-3">

                                <label for="inputImage" type="button" class="btn btn-primary-light-3 rounded-2">
                                    <i class="" data-feather="upload"></i>
                                    Selecionar imagem
                                </label>
                                <button type="button" class="btn btn-primary rounded-2 py-2 px-4 ms-auto" onclick="crop()">
                                    Recortar
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="fechar-modal text-center pt-2 pt-lg-4">
                        <button type="button" class="btn btn-ligth shadow bg-white text-green-2 py-1"
                            data-bs-dismiss="modal">
                            <i data-feather="x"></i>
                            Fechar
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        const myModal = new bootstrap.Modal(document.getElementById("modal-foto-perfil"), {});
    </script>


    <script>
        /* Exibir modal recortar img ao selecionar input img */
        document.getElementById('inputImage').onchange = () => {
            myModal.show()
        }

        var inputImage = document.getElementById('inputImage');
        var image = document.getElementById('image');
        var cropper;
        document.addEventListener('DOMContentLoaded', function() {
            inputImage = document.getElementById('inputImage');
            image = document.getElementById('image');
            cropper;

            inputImage.addEventListener('change', function() {
                var files = this.files;
                var file;

                if (files && files.length > 0) {
                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        var reader = new FileReader();

                        reader.onload = function() {
                            image.src = reader.result;

                            if (cropper) {
                                cropper.destroy();
                            }

                            setTimeout(() => {
                                cropper = new Cropper(image, {
                                    aspectRatio: 16 / 16,
                                    maxWidth: 150,
                                    maxHeight: 150,
                                    crop(event) {
                                        // console.log(event.detail.x);
                                        // console.log(event.detail.y);
                                        // console.log(event.detail.width);
                                        // console.log(event.detail.height);
                                        // console.log(event.detail.rotate);
                                        // console.log(event.detail.scaleX);
                                        // console.log(event.detail.scaleY);
                                    },
                                });
                            }, 200);
                        };
                        reader.readAsDataURL(file);
                    } else {
                        alert('Por favor, selecione um arquivo de imagem válido.');
                    }
                }
            });

        });


        /* Recortar img */
        function crop() {
            if (cropper) {
                // Obter o canvas recortado com as dimensões desejadas
                var croppedCanvas = cropper.getCroppedCanvas({
                    width: 150,
                    height: 150
                });

                // Criar um novo canvas com as dimensões desejadas
                var finalCanvas = document.createElement('canvas');
                finalCanvas.width = 150;
                finalCanvas.height = 150;

                // Desenhar a imagem recortada no novo canvas
                finalCanvas.getContext('2d').drawImage(croppedCanvas, 0, 0, 150, 150);

                // Obter a representação base64 da imagem no novo canvas
                var finalDataURL = finalCanvas.toDataURL('image/jpeg');

                document.getElementById('img_profile').value = finalDataURL
                document.getElementById('label-img-perfil').style.backgroundImage = `url(${finalDataURL})`

                myModal.hide()
                document.getElementById('inputImage').value = '';
            }
        };
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/config/colaboradores/create.blade.php ENDPATH**/ ?>