<aside>
    <div class="sidebar d-flex flex-column" id="sidebar">

        <button type="button"
            class="btn d-block d-lg-none btn-light bg-white close-sidebar fs-5 shadow p-0 d-flex align-items-center justify-content-center"
            title="Fechar" onclick="toggleMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                stroke="#133D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>


        <ul class="list-unstyled">
            <li class="">
                <a href="<?php echo e(route('home')); ?>"
                    class="sidebar-link d-flex align-items-center  gap-4 <?php if(Route::is('home')): ?> active <?php endif; ?>  sidebar-link-inicio">
                    <i data-feather="home"></i>
                    <div>
                        Início
                    </div>
                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('farmacia')): ?>
                <li class="">
                    <a href="<?php echo e(route('painel.farmacia.agenda.index')); ?>"
                        class="sidebar-link d-flex align-items-center <?php if(Route::is('painel.farmacia.agenda.*')): ?> active <?php endif; ?>  gap-4 ">
                        <i data-feather="calendar"></i>
                        <div>
                            Agenda
                        </div>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <li class="">
                    <a href="<?php echo e(route('painel.admin.clientes.index')); ?>"
                        class="sidebar-link d-flex align-items-center <?php if(Route::is('painel.admin.clientes.*')): ?> active <?php endif; ?>  gap-4 ">
                        <i data-feather="users"></i>
                        <div>
                            Clientes
                        </div>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('farmacia')): ?>
                <li class="">
                    <a href="<?php echo e(route('painel.farmacia.clientes.index')); ?>"
                        class="sidebar-link d-flex align-items-center <?php if(Route::is('painel.farmacia.clientes.*')): ?> active <?php endif; ?>  gap-4 ">
                        <i data-feather="users"></i>
                        <div>
                            Clientes
                        </div>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <li class="">
                    <a href="<?php echo e(route('painel.admin.exames.index')); ?>"
                        class="sidebar-link d-flex align-items-center <?php if(Route::is('painel.admin.exames.*')): ?> active <?php endif; ?> gap-4 ">
                        <i data-feather="file-text"></i>
                        <div>
                            Exames
                        </div>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('farmacia')): ?>
                <li class="">
                    <a href="<?php echo e(route('painel.farmacia.exames.index')); ?>"
                        class="sidebar-link d-flex align-items-center <?php if(Route::is('painel.farmacia.exames.*')): ?> active <?php endif; ?> gap-4 ">
                        <i data-feather="file-text"></i>
                        <div>
                            Exames
                        </div>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <li class="">
                    <a href="<?php echo e(route('painel.admin.graficos.index')); ?>"
                        class="sidebar-link d-flex align-items-center <?php if(Route::is('painel.admin.graficos.*')): ?> active <?php endif; ?>  gap-4 ">
                        <i data-feather="bar-chart-2"></i>
                        <div>
                            Gráficos
                        </div>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('farmacia')): ?>
                <li class="">
                    <a href="<?php echo e(route('painel.farmacia.graficos.index')); ?>"
                        class="sidebar-link d-flex align-items-center <?php if(Route::is('painel.farmacia.graficos.*')): ?> active <?php endif; ?>  gap-4 ">
                        <i data-feather="bar-chart-2"></i>
                        <div>
                            Gráficos
                        </div>
                    </a>
                </li>
            <?php endif; ?>


        </ul>

        <ul class="list-unstyled mt-auto mb-0">
            <li class="">
                <a href="<?php echo e(route('painel.config.index')); ?>"
                    class="sidebar-link d-flex align-items-center <?php if(Route::is('painel.config.*')): ?> active <?php endif; ?>  gap-4 ">
                    <i data-feather="settings"></i>
                    <div>
                        Ajustes
                    </div>
                </a>
            </li>
            <li class="">
                <a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"
                    class="sidebar-link d-flex align-items-center  gap-4 sidebar-link-sair ">
                    <i data-feather="log-out"></i>
                    <div>
                        Sair
                    </div>
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </li>

        </ul>
    </div>
</aside>
<?php /**PATH /home/u292571460/domains/indutivatecnologia.com/public_html/dsf/resources/views/layouts/painel/partials/sidebar.blade.php ENDPATH**/ ?>