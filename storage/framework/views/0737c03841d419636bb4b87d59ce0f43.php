<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado - DSF</title>
   
</head>
<style>
    td {
    padding: 9px;
}
.row.mt-2, .row.mt-3, .row.mt-4 {
    margin-top:20px;
    margin-bottom:5px;
    font-size: 13px;
}
.logoResultado {
    width: 104px;
   
    position:absolute; 
    left:20px;
 
}
.titleResult{
    margin-bottom:5px;
    margin-left:5px;
}
table, th, td {
    border-collapse: collapse;
    border-bottom: 1px solid #b2d2d2;
        width: 100%;
}
    </style>
<body style="font-family:sans-serif">
    <div class="">
        <div class="row gy-4" style="padding:5px">

            <!-- Visualizar exame -->
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="card ">
                    <div class="card-body py-3 px-0 px-lg-2  py-lg-4">

                        

                        <div class="px-3 folhaResultado">
                            
                            <div class="row cabecalho">
                                <div class="col-md-3 ">
                                    <div class="logoResultado">
                                        <img src="<?php echo e(asset($cliente->logo ?? 'assets/img/ilustracoes/profile.png')); ?>"
                                            class="w-100" style="width:100%">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="dados text-center" style="text-align: center; margin-left:20%">
                                        <h4><?php echo e($cliente->razao_social); ?></h4>
                                        <p>Fone: <?php echo e($cliente->telefone); ?> CNPJ: <?php echo e($cliente->cnpj); ?></p>
                                        <p><?php echo e($cliente->logradouro); ?>, <?php echo e($cliente->num_endereco); ?> -
                                            <?php echo e($cliente->cidade); ?> - <?php echo e($cliente->estado); ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
    <div class="">
        <div class="row gy-4">


            <div class="col-12 col-lg-12 col-xl-12 itensPedido" style="margin-top:30px">
                <div class="card ">
                    <div class="card-body py-3 px-2 px-lg-2  py-lg-4">
                        <?php if($itensPedido->count() == 0): ?>
                        <?php else: ?>
                        <h2 class="fs-4 fw-600 text-green-2 ">Pedido - #<?php echo e($pedido->id); ?></h2>
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

                            <div class="row" style="position:relative">

                                <div class="col-md-12 " style="position:absolute; right:29px;">
                                   <h5>R$ <?php echo e(number_format($totalPedido,2,',','.')); ?></h5>
                                </div>
                            </div>
                    </div>
                    <?php if($pedido->status != 'aberto'): ?>

                    <?php else: ?>
                    
                    <?php endif; ?>

                </div>
            </div>


            <?php endif; ?>
        </div>


        


<?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/admin/compras/visualizar_pdf.blade.php ENDPATH**/ ?>