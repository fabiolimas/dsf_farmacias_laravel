 <!-- Feather icons -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.1/feather.min.js"
 integrity="sha512-4lykFR6C2W55I60sYddEGjieC2fU79R7GUtaqr3DzmNbo0vSaO1MfUjMoTFYYuedjfEix6uV9jVTtRCSBU/Xiw=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
 /* show tooltip bootstrap */
 const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
 const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

 const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
 const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

 /* activer feather icons */
 feather.replace();
</script>

<div class="position-relative resultBusca" id="lista-exames">

    <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-green-light rounded-3  p-3 mt-3 ">

            <div class="row">
                <div class="d-flex gap-3 align-items-center col-md-6">
                    <span
                        class="<?php if($pedido->status == 'recebido'): ?> pedidoRecebido <?php elseif($pedido->status=='novo'): ?> pedidoNovo <?php else: ?> tag <?php endif; ?>"></span>
                    <div class="fs-20px fw-500 ">
                        <a href="<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admmin')): ?><?php if($pedido->status != 'aberto'): ?> <?php echo e(route('painel.admin.compras.visualizar', $pedido->id)); ?> <?php else: ?> <?php echo e(route('painel.admin.compras.edit', $pedido->id)); ?> <?php endif; ?> <?php endif; ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('farmacia')): ?><?php echo e(route('painel.admin.compras.visualizar', $pedido->id)); ?><?php endif; ?>"
                            class="text-decoration-none d-block">
                            <div class="text-green-2">

                                <?php echo e(Str::limit($pedido->razao_social, 15, '...')); ?> - #Pedido <?php echo e($pedido->id); ?></div>
                            
                        </a>
                    </div>
                </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>

                <div class="col-md-6 acts"  >
                    <div class="col-md-3 ms-2">
                        <div class="mt-2 mt-sm-0">
                            <div class="" >

                                    <button type="button"
                                    class="btn btn-ligth bg-white text-green px-2 w-100 "
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Imprimir">
                                    <a href="<?php echo e(route('painel.admin.compras.printPedido', $pedido->id)); ?>" class="text-green"><i class="" data-feather="printer"></i></a>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 ms-2 <?php if($pedido->status =='recebido'): ?> d-none <?php else: ?>  <?php endif; ?>">
                        <div class="mt-2 mt-sm-0">
                            <div class="" >

                                    <button type="button"
                                    class="btn btn-ligth bg-white text-green px-2 w-100 "
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Editar">
                                    <a href="<?php echo e(route('painel.admin.compras.edit', $pedido->id)); ?>" class="text-green"><i class="" data-feather="edit"></i></a>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 ms-2 <?php if($pedido->status =='recebido'): ?> d-none <?php else: ?>  <?php endif; ?>">
                        <div class="mt-2 mt-sm-0">
                            <div class="" data-bs-toggle="modal"
                                onclick="setRotaRemover(`<?php echo e(route('painel.admin.compras.excluir-pedido', $pedido->id)); ?>`)"
                                data-bs-target="#modal-remover">
                                <button type="button"
                                    class="btn btn-ligth bg-white text-green px-2 w-100 "
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Excluir">
                                    <i class="" data-feather="trash"></i>
                                </button>
                            </div>
                        </div>

                    </div>


                </div>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('farmacia')): ?>
                <div class="col-md-6 acts">
                    <div class="col-md-3 ms-2">
                        <div class="mt-2 mt-sm-0">
                            <div class="" >

                                    <button type="button"
                                    class="btn btn-ligth bg-white text-green px-2 w-100 "
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Imprimir">
                                    <a href="<?php echo e(route('painel.admin.compras.printPedido', $pedido->id)); ?>" class="text-green"><i class="" data-feather="printer"></i></a>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 ms-2">
                        <div class="mt-2 mt-sm-0">
                            <div class="" >

                                    <button type="button"
                                    class="btn btn-ligth bg-white text-green px-2 w-100 "
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Visualizar">
                                    <a href="<?php echo e(route('painel.admin.compras.visualizar', $pedido->id)); ?>" class="text-green"><i class="" data-feather="eye"></i></a>
                                </button>
                            </div>
                        </div>

                    </div>
                    <?php if($pedido->status != 'aberto'): ?>

                    <?php else: ?>
                    <div class="col-md-3 ms-2">
                        <div class="mt-2 mt-sm-0">
                            <div class="" >
                                <a href="<?php echo e(route('painel.admin.compras.confirmar-pedido', $pedido->id)); ?> " >
                                <button type="button"
                                    class="btn btn-ligth bg-white text-green px-2 w-100 "
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Confirmar">
                                    <i class="" data-feather="check"></i>
                                </button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>


                </div>
                <?php endif; ?>
            </div>
            <div class="row detalhesp">
                <div class="col-md-3">
                    <span class="dtls">R$ <?php echo e(number_format($pedido->total_pedido,2,',','.')); ?></span>
                </div>
                
                <div class="col-md-4">
                    <span class="dtls" style="margin-left:-20px"><i class="" data-feather="clock"></i><?php echo e(date('d-m-Y H:i', strtotime($pedido->created_at))); ?></span>
                </div>

            </div>



        </div>

        <!-- Modal remover -->
        <div class="modal modal-custom fade" id="modal-remover" tabindex="-1"
            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
            aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0"
                role="document">
                <div class="modal-content bg-transparent ">
                    <div class="modal-body p-lg-5  border-0">

                        <div class="p-4 shadow rounded-3  bg-white border">


                            <div class="fs-5 text-center">
                                Tem certeza que deseja remover este Pedido?
                            </div>


                            <form
                                action="<?php echo e(route('painel.admin.compras.excluir-pedido', $pedido->id)); ?>"
                                method="post" id="form-remover">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="row mt-4 pt-2 gy-2">
                                    <div class="col-12 col-lg-6">
                                        <button type="button"
                                            data-bs-dismiss="modal"
                                            class="btn btn-danger w-100 py-2 fs-16px "
                                            id="modal-link-editar-user">
                                            Cancelar
                                        </button>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <button type="submit"
                                            id="modal-link-ver-mais"
                                            class="btn btn-primary w-100 py-2 fs-16px">Sim</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="fechar-modal text-center pt-2 pt-lg-4">
                            <button type="button"
                                class="btn btn-ligth shadow bg-white text-green-2 py-1"
                                data-bs-dismiss="modal">
                                <i data-feather="x"></i>
                                Fechar
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/admin/buscas/busca_clientes.blade.php ENDPATH**/ ?>