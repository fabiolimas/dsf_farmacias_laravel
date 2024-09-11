<?php $__env->startSection('title', 'Estoque'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12">
                <div class="card min-vh-100">
                    <div class="card-body px-2 px-md-4 py-4">



                        <!-- lista -->
                        <div class="mt-2 pt-1 ">
                            <div class="">
                                <div
                                    class="d-sm-flex text-center text-md-start justify-content-between gap-2 align-items-center">
                                    <h1 class="fs-4 fw-600 mb-4 text-green-2">
                                        Estoque
                                    </h1>
                                    
                                    <?php if($exameSemPreco >=1): ?>
                                    <span class="produtoSemPreco text-danger bg-warning"><i data-feather="alert-triangle" title="Configurar preço de venda"></i>Existem exames sem preço de venda!</span>
                                    <?php else: ?>

                                    <?php endif; ?>
                                </div>
                                <!-- pesquisa -->
                                <div class="pt-3">
                                    <div class="mb-3 position-relative">
                                        <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                        <input type="text" class="form-control input-pesquisar-cliente" name="pesquisa"
                                            id="pesquisa" placeholder="Pesquisar" />

                                        <button type="submit" class="btn btn-none text-green p-1"
                                            style="position: absolute; top:3px; right: 20px">
                                            <i data-feather="search"></i>
                                        </button>

                                    </div>

                                </div>


                                <div class="table-responsive mt-5">
                                    <table class="table text-green-2 resultBusca">
                                        <thead>
                                            <tr class="fs-18px ">
                                                <th scope="col"><span
                                                        class="text-green-2 d-inline-block pb-3">Descrição</span></th>
                                                <th scope="col"><span class="text-green-2 d-inline-block pb-3">Quantidade</span>
                                                </th>
                                                <th scope="col"><span class="text-green-2 d-inline-block pb-3">Valor de Compra</span></th>
                                                <th scope="col"><span
                                                        class="text-green-2 d-inline-block pb-3">Valor de Venda</span></th>
                                                        <th scope="col"><span
                                                            class="text-green-2 d-inline-block pb-3">Opção</span></th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $exames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class=" table-tr-cliente fw-500 fs-18px " data-bs-toggle="modal"
                                                    data-bs-target="#detalhes-produto-<?php echo e($exame->exame_farma_id); ?>"
                                                    style="cursor:pointer">
                                                    <td class="<?php if($exame->valor == null || $exame->valor < 1): ?> text-danger <?php else: ?> <?php endif; ?>">
                                                        <span  class="<?php if($exame->valor == null || $exame->valor < 1): ?> text-danger <?php else: ?> text-green <?php endif; ?> "> <?php if($exame->valor == null || $exame->valor < 1): ?>

                                                        <?php else: ?>  <?php endif; ?> <?php echo e($exame->nome); ?></span>
                                                    </td>
                                                    <td>
                                                        <span class="<?php if($exame->valor == null || $exame->valor < 1): ?> text-danger <?php else: ?> text-green <?php endif; ?>"><?php echo e($exame->estoque); ?></span>
                                                    </td>
                                                    <td>
                                                        <span
                                                        class="<?php if($exame->valor == null || $exame->valor < 1): ?> text-danger <?php else: ?> text-green <?php endif; ?>">R$ <?php echo e(number_format($exame->valor_de_compra,2,',','.')); ?></span>
                                                    </td>
                                                    <td>
                                                        <span
                                                        class="<?php if($exame->valor == null || $exame->valor < 1): ?> text-danger <?php else: ?> text-green <?php endif; ?>">R$ <?php echo e(number_format($exame->valor,2,',','.')); ?></span>
                                                    </td>
                                                    <td>
                                                        <span
                                                        class="text-green"><i data-feather="edit"></i></span>
                                                    </td>



                                                </tr>

                                                <div class="modal modal-custom fade" id="detalhes-produto-<?php echo e($exame->exame_farma_id); ?>" tabindex="-1"
                                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
                                                        <div class="modal-content bg-transparent ">
                                                            <div class="modal-body p-lg-5  border-0">

                                                                <div class="p-4 shadow rounded-3  bg-white border">


                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"> Atualizar Preço de Venda</h5>

                                                                      </div>

                                                                    <form action="<?php echo e(route('painel.farmacia.estoque.update', $exame->exame_farma_id)); ?>" method="post"
                                                                        id="form-remover">

                                                                        <?php echo csrf_field(); ?>


                                                                        <input type="hidden" name="exame_id" value="<?php echo e($exame->exame_farma_id); ?>">

                                                                        <!-- Quantidade em estoque -->
                                                                        <div class="mb-2 pb-3">
                                                                            <div class="mb-0 position-relative">
                                                                                <label for="qtd_estoque" class="form-label text-green fw-500 fs-18px w-100">
                                                                                    <div class="d-flex justify-content-between gap-2 w-100 align-items-center">
                                                                                        Quantidade
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
                                                                                        name="quantidade" id="qtd_estoque" value="<?php echo e($exame->estoque); ?>"
                                                                                        placeholder="0" disabled/>

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
                                                                                name="valor" id="valor" placeholder="R$ 0,00" value="<?php echo e($exame->valor); ?>" required />
                                                                            <?php $__errorArgs = ['valor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                <div class="invalid-feedback fw-500"><?php echo e($message); ?>

                                                                                </div>
                                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                        </div>
                                                                        <div class="row">

                                                                            <div class="col-md-6">
                                                                                <button type="button" class=" btn btn-secondary " data-bs-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">Cancelar</span>
                                                                                  </button>
                                                                            </div>
                                                                            <div class="col-md-6">

                                                                                <button type="submit" id="modal-link-ver-mais"
                                                                                    class="btn btn-primary w-100 py-2 fs-16px">Salvar</button>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>




<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

    <script>
        $('document').ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let resultado = $('.resultBusca');

            $('#pesquisa').keyup(function() {

                $.ajax({
                    url: "<?php echo e(route('painel.farmacia.estoque.busca-exame')); ?>", // Arquivo PHP que processará a busca
                    type: "post",
                    data: {
                        pesquisa: $('#pesquisa').val(),


                    }, // Dados a serem enviados para o servidor
                    success: function(response) {

                        resultado.html(response);
                        resultado.html(response.status);
                    },
                    error: function(result) {
                        console.log(result);
                    }



                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/estoque/index.blade.php ENDPATH**/ ?>