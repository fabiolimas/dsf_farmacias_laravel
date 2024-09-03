
<?php $__env->startSection('title', 'Cadastrar novo exame'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Cadastrar novo exame -->
            <div class="col-12 col-lg-5 col-xl-4">

                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">


                        <div class="px-3 d-flex justify-content-between align-items-center mb-4 pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 ">Pedido de Compra</h2>
                        </div>
                        <form action="#" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="px-3">



                                <!-- exame -->
                                <div class="mb-2 pb-3">
                                    <div class="mb-0 position-relative">
                                        <label for="pesquisa" class="form-label text-green fw-500 fs-18px w-100">
                                            <div class="d-flex justify-content-between gap-2 w-100 align-items-center">
                                                Exame
                                            </div>

                                        </label>
                                        <div class="position-relative">
                                            <select name="exame" id="exame" class="form-select form-control-custom">
                                                <option value="">Pesquisar</option>
                                                <?php $__currentLoopData = $exames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($exame->id); ?>" data-bs-toggle="modal"
                                                        data-bs-target="#detalhes-produto-<?php echo e($exame->id); ?>">
                                                        <?php echo e($exame->nome); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                            <div class="resultExame"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600">
                                    Salvar Pedido
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 col-xl-6 itensPedido">
                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">
                        <?php if($itensPedido->count() == 0): ?>
                        <?php else: ?>
                            <h3>Itens do pedido</h3>

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $itensPedido; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td> <?php echo e($loop->index + 1); ?></td>
                                            <td> <?php echo e($item->nome); ?></td>
                                            <td><?php echo e($item->quantidade); ?></td>
                                            <td>R$ <?php echo e(number_format($item->preco, 2, ',', '.')); ?></td>
                                            <td>R$ <?php echo e(number_format($item->quantidade * $item->preco, 2, ',', '.')); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                    </div>
                </div>
            </div>


            <?php endif; ?>
        </div>
        <?php $__currentLoopData = $exames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div class="modal modal-custom fade" id="detalhes-produto-<?php echo e($exame->id); ?>" tabindex="-1"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
                    <div class="modal-content bg-transparent ">
                        <div class="modal-body p-lg-5  border-0">

                            <div class="p-4 shadow rounded-3  bg-white border">


                                <div class="fs-5 text-center">
                                    Adicionar Exame
                                </div>


                                <form action="<?php echo e(route('painel.admin.compras.store.itemPedido')); ?>" method="post"
                                    id="form-remover">

                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="cliente_id" value="<?php echo e($pedido->cliente_id); ?>">
                                    <input type="hidden" name="pedido_id" value="<?php echo e($pedido->id); ?>">
                                    <input type="hidden" name="exame_id" value="<?php echo e($exame->id); ?>">
                                    <label for="lote_validade" class="form-label text-green fw-500 fs-18px">
                                        <?php echo e($exame->nome); ?>

                                    </label>
                                    <!-- Lote e validade -->
                                    <div class="mb-3 pb-3">
                                        <label for="lote_validade" class="form-label text-green fw-500 fs-18px">
                                            Lote
                                        </label>
                                        <input type="text"
                                            class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['lote_validade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="lote" id="lote" placeholder=""
                                            value="<?php echo e(old('lote_validade', 0)); ?>" required />
                                        <?php $__errorArgs = ['lote_validade'];
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
                                    <!-- Quantidade em estoque -->
                                    <div class="mb-2 pb-3">
                                        <div class="mb-0 position-relative">
                                            <label for="qtd_estoque" class="form-label text-green fw-500 fs-18px w-100">
                                                <div class="d-flex justify-content-between gap-2 w-100 align-items-center">
                                                    Quantidade em estoque
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
                                                    name="quantidade" id="qtd_estoque" value="<?php echo e(old('qtd_estoque')); ?>"
                                                    placeholder="0" />

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
                                            name="preco" id="valor" placeholder="R$ 0,00" value="" required />
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
                                    <div class="col-12 col-lg-12">
                                        <button type="submit" id="modal-link-ver-mais"
                                            class="btn btn-primary w-100 py-2 fs-16px">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>







        <script>
            $(document).ready(function() {
                $('#exame').select2();
            });


            $('document').ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let resultado = $('.resultExame');

                $('#exame').change(function() {

                    $.ajax({
                        url: "<?php echo e(route('busca-exame-entrada')); ?>", // Arquivo PHP que processará a busca
                        type: "post",
                        data: {
                            id: $('#exame').val(),


                        }, // Dados a serem enviados para o servidor
                        success: function(response) {

                            resultado.html(
                                '<button type="button" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#detalhes-produto-' +
                                response.id + '" >Adicionar</button>');

                        },
                        error: function(result) {
                            console.log(result);
                        }



                    });
                });

            });
        </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/admin/compras/create.blade.php ENDPATH**/ ?>