<?php $__env->startSection('title', 'Cadastrar novo exame'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">


            <div class="col-12 col-lg-12 col-xl-12 itensPedido">
                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">
                        <?php if($itensPedido->count() == 0): ?>
                        <?php else: ?>
                        <h2 class="fs-4 fw-600 text-green-2 ">Itens do pedido - #<?php echo e($pedido->id); ?></h2>
                        <?php if($pedido->status != 'aberto'): ?>
                        <p >Status do pedido: <span class="pedidoRecebido"><?php echo e($pedido->status); ?></span></p>
                        <?php else: ?>

                        <p >Status do pedido: <span class="tag"><?php echo e($pedido->status); ?></span></p>

                        <?php endif; ?>

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Valor Unit.</th>
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


                                        <?php
                                                    $totalPedido+=$item->quantidade * $item->preco;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <input type="hidden" id="totalPedido" value="<?php echo e($totalPedido); ?>">
                            </table>

                            <div class="row">

                                <div class="col-md-12 " style="display:flex; justify-content:flex-end">
                                   <h5>R$ <?php echo e(number_format($totalPedido,2,',','.')); ?></h5>
                                </div>
                            </div>
                    </div>
                    <?php if($pedido->status != 'aberto'): ?>

                    <?php else: ?>
                    <div class="row">
                        <div class="col-md-12 " style="display:flex; justify-content:flex-end; margin:5px">
                            <div class="pt-3 m-3">
                                <a href="<?php if($pedido->status != 'aberto'): ?> #  <?php else: ?> <?php echo e(route('painel.admin.compras.confirmar-pedido', $pedido->id)); ?> <?php endif; ?> " >
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600" id="btnSalvarPedido" <?php if($pedido->status != 'aberto'): ?> disabled <?php else: ?> <?php endif; ?> >
                                    Confirmar
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>


            <?php endif; ?>
        </div>


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

                // salvar Pedido


                $('#btnSalvarPedido').click(function() {

$.ajax({
    url: "<?php echo e(route('painel.admin.compras.salvar-pedido', $pedido->id)); ?>", // Arquivo PHP que processará a busca
    type: "post",
    data: {
        id: <?php echo e($pedido->id); ?>,
        total_pedido:$('#totalPedido').val(),


    }, // Dados a serem enviados para o servidor
    success: function(response) {

    window.location.href="<?php echo e(route('painel.admin.compras.index')); ?>";

    },
    error: function(result) {
        console.log(result);
    }



});
});

            });
        </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/admin/compras/visualizar.blade.php ENDPATH**/ ?>