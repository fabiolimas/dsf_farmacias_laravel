<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(asset('assets/img/logos/logo.svg')); ?>" alt="" width="90" class="logo">
            </a>


            <!-- mobile -->
            <ul class="list-unstyled d-flex d-lg-none gap-2 my-auto me-auto align-items-center ">
                <!-- voltar -->
                <li class="nav-item ps-lg-4">
                    <a class="nav-link" href="#" onclick="history.back()" data-bs-toggle="tooltip" data-bs-placement="top" title="Voltar">
                        <img src="<?php echo e(asset('assets/img/icons/voltar.svg')); ?>" alt="Voltar" width="37">
                    </a>
                </li>
                <!-- atualizar -->
                <li class="nav-item">
                    <a class="nav-link" href="#" onClick="window.location.reload()" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Atualizar">
                        <img src="<?php echo e(asset('assets/img/icons/atualizar.svg')); ?>" alt="Atualizar" width="37">
                    </a>
                </li>
            </ul>
            <!-- mobile -->
            <ul class="list-unstyled d-flex d-lg-none gap-2 my-auto ms-auto align-items-center">
                <!-- user -->
                <li class="nav-item">
                    <a href="#" class="d-flex align-items-center gap-2 nav-link-user">
                        <div class="bg-img-user-mobile"
                            style="background-image: url(<?php echo e(asset('assets/img/ilustracoes/user-adm.png')); ?>)">
                        </div>
                    </a>
                </li>
            </ul>

            <button class="navbar-toggler d-lg-none p-0 shadow-none ms-2 border-0" type="button"
                aria-expanded="false" aria-label="Toggle navigation" id="toggle-sidebar">
                
                <i class="" data-feather="menu" style="min-width: 30px; min-height: 30px"></i>
            </button>

            <!-- desktop -->
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 align-items-center">
                    <!-- voltar -->
                    <li class="nav-item ps-lg-4 d-none d-lg-block">
                        <a class="nav-link" href="#" onclick="history.back()" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Voltar">
                            <img src="<?php echo e(asset('assets/img/icons/voltar.svg')); ?>" alt="Voltar" width="37">
                        </a>
                    </li>
                    <!-- atualizar -->
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="#" onClick="window.location.reload()"data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Atualizar">
                            <img src="<?php echo e(asset('assets/img/icons/atualizar.svg')); ?>" alt="Atualizar" width="37">
                        </a>
                    </li>
                    <li class="nav-item ps-lg-5 ">
                        <span class="nav-link">

                            <?php echo e($dataAtual= date('H:i - d  M  Y')); ?>


                        </span>
                    </li>
                </ul>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['farmacia','adminFarmacia'])): ?>
                <div class="nomeFarmacia">  <?php echo e($farmacia->razao_social); ?></div>

                <?php endif; ?>
                <div class="d-none d-lg-block">
                    <a href="#" class="d-flex align-items-center gap-2 nav-link-user">
                        <?php echo e(auth()->user()->name); ?>

                        <div class="bg-img-user rounded-3 border border-secondary"
                            style="background-image: url(<?php echo e(asset(auth()->user()->img_perfil ?? 'assets/img/ilustracoes/profile.png')); ?>)">
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </nav>

</header>
<?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/layouts/painel/partials/header.blade.php ENDPATH**/ ?>