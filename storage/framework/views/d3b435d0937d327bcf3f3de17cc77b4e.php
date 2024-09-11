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

            
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $exames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class=" table-tr-cliente fw-500 fs-18px" data-bs-toggle="modal"
                        data-bs-target="#detalhes-produto-<?php echo e($exame->id); ?>"
                style="cursor:pointer">
                <td>
                    <span class="text-green"><?php echo e($exame->nome); ?></span>
                </td>
                <td>
                    <span class="text-green"><?php echo e($exame->estoque); ?></span>
                </td>
                <td>
                    <span
                        class="text-green">R$ <?php echo e(number_format($exame->valor_de_compra,2,',','.')); ?></span>
                </td>
                <td>
                    <span
                        class="text-green">R$ <?php echo e(number_format($exame->valor,2,',','.')); ?></span>
                </td>
                
                
             
            </tr>

            <div class="modal modal-custom fade" id="detalhes-produto-<?php echo e($exame->id); ?>" tabindex="-1"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
                    <div class="modal-content bg-transparent ">
                        <div class="modal-body p-lg-5  border-0">

                            <div class="p-4 shadow rounded-3  bg-white border">


                                <div class="modal-header">
                                    <h5 class="modal-title"> Atualizar Preço de Venda</h5>
                                    
                                  </div>
                            


                                <form action="<?php echo e(route('painel.farmacia.estoque.update', $exame->id)); ?>" method="post"
                                    id="form-remover">

                                    <?php echo csrf_field(); ?>
                                  
                                   
                                    <input type="hidden" name="exame_id" value="<?php echo e($exame->id); ?>">
                                
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
</div><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/buscas/busca_exame_farma.blade.php ENDPATH**/ ?>