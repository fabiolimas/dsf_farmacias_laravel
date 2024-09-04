<?php $__env->startSection('title', 'Exames'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-7 col-xl-7">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('farmacia')): ?>
                        <h1 class="fs-4 fw-600 mb-4 text-green-2 px-0 ps-lg-4  " style="min-width: 260px">
                            Pedidos de Compras <span class="badge rounded-pill text-bg-primary fs-16px fw-500 px-2" id="total-assinaturas-hoje"><?php echo e($pedidoNovo); ?></span>
                        </h1>


                        <?php endif; ?>
                        <!--  -->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                        <?php if($pedidoNovo >=1): ?>

                        <div class=" px-4 ">
                            <a class="btn btn-primary d-block d-md-inline-block mb-3  " style="background:#db8502; border-color:#db8502" href="<?php echo e(route('painel.admin.compras.create')); ?>"  role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center ">
                                    <i data-feather="folder-plus"></i>
                                    Finalizar pedido em aberto
                                </div>
                            </a>

                        </div>

                        <?php else: ?>
                        <div class=" px-4">
                            <a class="btn btn-primary d-block d-md-inline-block mb-3   " href="#" data-bs-toggle="modal"
                                data-bs-target="#modal-novo-pedido" role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="folder-plus"></i>
                                    Novo pedido de compra
                                </div>
                            </a>

                        </div>
                        <?php endif; ?>

                        <!-- lista -->
                        <div class="mt-2 pt-1 ">
                            <div class="mt-3">

                                <div class="d-flex  flex-column flex-lg-row gap-2 align-items-center ">
                                    <h1 class="fs-4 fw-600 mb-4 text-green-2 px-0 ps-lg-4  " style="min-width: 260px">
                                        Farmacias
                                    </h1>

                                    <!-- pesquisa -->
                                    <div class="w-100 pe-lg-4">
                                        <div class="mb-3 position-relative">
                                            <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                            
                                            <select name="cliente_farmacia_id" id="cliente"
                                                class="form-select form-control-custom">
                                                <option value="">Pesquisar</option>
                                                <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->razao_social); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <button type="submit" class="btn btn-none text-green p-1"
                                                style="position: absolute; top:3px; right: 20px">
                                                <i data-feather="search"></i>
                                            </button>

                                        </div>

                                    </div>

                                </div>

                                <?php endif; ?>


                                <!-- lista -->
                                <div class="mt-4 pt-2">
                                    <div class="px-lg-4">

                                        <div id="load-pesquisa" style="display:none">
                                            <div class="spinner-border spinner-border-sm text-secondary mx-auto mb-3"
                                                role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>

                                        <div class="position-relative" id="lista-exames">

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
                                                                        <?php echo e($pedido->razao_social); ?> - #Pedido <?php echo e($pedido->id); ?></div>
                                                                    
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                                                        <div class="col-md-6 <?php if($pedido->status =='recebido'): ?> d-none <?php else: ?> acts <?php endif; ?>"  >
                                                            <div class="col-md-3 ms-2">
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

                                                            <div class="col-md-3 ms-2">
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

                                        <div class="">
                                            <?php echo e($pedidos->links()); ?>

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
    
    <div class="modal modal-custom fade" id="modal-novo-pedido" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
            <div class="modal-content bg-transparent ">
                <div class="modal-body p-lg-5  border-0">

                    <div class="p-4 shadow rounded-3  bg-white border">


                        <div class="fs-5 text-center">
                            Selecione a Farmácia
                        </div>


                        <form action="<?php echo e(route('painel.admin.compras.store')); ?>" method="post" id="form-remover">

                            <?php echo csrf_field(); ?>


                            <!-- pesquisa -->

                            <div class="mb-3 position-relative">
                                <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                
                                <select name="cliente_farmacia_id" id="cliente"
                                    class="form-select form-control-custom">
                                    <option value="">Pesquisar</option>
                                    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->razao_social); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>


                            </div>
                            <div class="col-12 col-lg-12">
                                <button type="submit" id="modal-link-ver-mais"
                                    class="btn btn-primary w-100 py-2 fs-16px">Confirmar</button>
                            </div>
                    </div>
                    </form>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cliente').select2();


        });
    </script>
    <script>
        function setRotaRemover(rota) {
            document.getElementById('form-remover').action = rota
        }


        function pesquisar() {
            let str = document.querySelector('#pesquisa').value

            document.getElementById('lista-exames').innerHTML = ''
            let docLoad = document.getElementById('load-pesquisa')
            docLoad.className = 'd-flex'


            // getClientesJson


            axios
                .get(`<?php echo e(route('painel.admin.clientes.pesquisar')); ?>?nome=${str}`)
                .then(res => {
                    console.log(res.data);

                    document.getElementById('lista-exames').innerHTML = ''
                    let html = ''

                    for (let i in res.data) {


                        html += `
                        <div class="bg-green-light rounded-3 mb-3 p-3 p-md-4 ">
                            <div class="d-xl-flex gap-3 px-md-2 align-items-center">
                                <div class="d-flex gap-3 align-items-center">

                                    <div class="fs-20px fw-500 ">
                                        <a href="{ route('painel.farmacia.exames.show', ['id' => 1]) }"
                                            class="text-decoration-none d-block">
                                            <div class="text-green-2">{ $exame->nome }</div>
                                            <div class="text-green">Carla Silva</div>
                                        </a>
                                    </div>
                                </div>
                                <!-- img -->
                                <div class=" d-sm-flex gap-3 mt-2 mt-xl-0">
                                    <div class="">
                                        <a href="{ route('painel.farmacia.exames.show', ['id' => 1]) }"
                                            class="text-decoration-none d-block">
                                            <img src="{ asset('assets/img/ilustracoes/exame.jpg') }"
                                                alt=""
                                                class="w-100 rounded-3 border-green-light"
                                                style="filter: blur(0px)">
                                        </a>
                                    </div>

                                    <!-- acoes -->


                                    <a href="{ route('painel.admin.exames.edit', $exame->id) }"
                                        class="btn btn-primary-light text-center mt-2 mt-sm-0  py-2  text-green d-flex align-items-center"
                                        style="background: #B2D2D2" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="">
                                        <i class="mx-auto" data-feather="edit-3"
                                            style="min-width: 70px; min-height: 45px; stroke-width: 1.6"></i>
                                    </a>

                                    <div class="mt-2 mt-sm-0">
                                        <div class="" data-bs-toggle="modal"
                                            onclick="setRotaRemover(` {
                            route('painel.admin.exames.destroy', $exame - > id)
                        }
                        `)"
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
                        </div>
                        `
                    }

                    docLoad.className = 'd-none'
                    document.getElementById('lista-exames').innerHTML = html
                    if (html == '') {
                        document.getElementById('lista-exames').innerHTML = `
                            <div class="alert alert-warning text-center fs-4 fw-300" role="alert">
                                Sem registros.
                            </div>
                        `
                    }

                })
        }
        document.querySelector('#pesquisa').onkeyup = function() {
            pesquisar()
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/admin/compras/index.blade.php ENDPATH**/ ?>