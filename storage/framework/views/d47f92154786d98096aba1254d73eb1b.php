
<?php $__env->startSection('title', 'Gráficos'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4 graficos">

            <!-- Quantidade de exames gerados -->
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card ">
                    <div class="card-body px-3 px-md-4 py-4 resultFiltro">
                        <div class="d-sm-flex align-items-center  gap-4">
                            <h2 class="fs-24px fw-600 text-green-2 pt-1 ">Quantidade de exames</h2>
                            <div class="d-flex gap-3 ps-lg-3">
                                <div class="">
                                    <select name="filtro" id="filtro" class="form-select">
                                        <option value="todos">Todos</option>
                                        <option value="periodo">Periodo</option>
                                    </select>
                                    
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row periodos" style="display:none">
                                        <div class="col-md-6">

                                            <input type="date" name="data_ini" id="data_ini" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" name="data_fim" id="data_fim" class="form-control">
                                        </div>
                                    </div>

                                   
                                    
                                </div>
                            </div>
                        </div>
                     

                        <?php echo $qtdExames->container(); ?>

            

                        <div class="line-chart mt-4 pt-3 position-relative pb-3">
                            <div class="line-chart-vertical"></div>
                            <div class="position-absolute d-flex w-100 justify-content-between">
                                <div class="line-chart-dot line-chart-dot-1"></div>
                                <div class="line-chart-dot line-chart-dot-2"></div>
                                <div class="line-chart-dot line-chart-dot-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
     

            <!-- Exames mais pedidos -->
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body px-0 px-md-2 py-4">

                        <!-- head -->
                        <div class="d-sm-flex px-3 align-items-center  gap-4 justify-content-between">
                            <h2 class="fs-24px fw-600 text-green-2 pt-1 ">Exames mais pedidos</h2>
                            <!-- dropdown -->
                            <div class="d-flex gap-3 ps-lg-3 ">
                                <div class=" ">
                                    
                                </div>
                            </div>
                        </div>

                        <!-- conteúdo -->
                        <div class="pt-2"></div>
                        <div class="position-relative mt-4">
                            <!-- Lista -->
                            <div class="mt-2 lista-scroll p-3 pt-0 clientes-lista-assinantes pb-5 "
                                style="max-height: 500px">

                                <?php $__currentLoopData = $maisvendidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $exame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                    <div
                                        class="d-flex gap-2 mb-3text-green-2 fw-600 bg-green-light  p-2 rounded-3 mb-3 align-items-center ">
                                        <div class="">
                                            <div class="bg-white border-green-light px-2 py-2  text-center lh-1 rounded-3">
                                                <div class="fs-24px text-green-2 py-1 px-1">#<?php echo e($loop->index+1); ?></div>
                                            </div>
                                        </div>
                                        <div class="d-flex  align-items-center">
                                            <div class="">
                                                <div class="text-green-2 fs-18px"><?php echo e($exame->nome); ?></div>
                                                <div class="text-green fs-16px"><?php echo e($exame->total_vendas); ?> realizados</div>
                                            </div>
                                        </div>
                                        <div class="fs-18px text-green-2 ms-auto pe-3">
                                            <?php echo e($exame->estoque); ?> em estoque
                                        </div>

                                    </div>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="ver-mais-lista-scroll text-center">
                                <button type="button"
                                    class="btn btn-ligth shadow bg-white  py-1 text-green fs-20px fw-600">
                                    Ver mais
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Ticket médio -->
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body px-0 px-md-2 py-4">

                        <!-- head -->
                        <div class="d-sm-flex px-3 align-items-center  gap-4 justify-content-between">
                            <h2 class="fs-24px fw-600 text-green-2 pt-1 ">Ticket médio</h2>
                            <!-- dropdown -->
                            <div class="d-flex gap-3 ps-lg-3 ">
                                <div class="">
                                    
                                </div>
                            </div>
                        </div>

                        <!-- conteúdo -->
                        <div class="pt-2"></div>
                        <div class="position-relative mt-4">
                            <!-- Lista -->
                            <div class="mt-2 lista-scroll p-3 pt-0 clientes-lista-assinantes pb-5 "
                                style="max-height: 500px">

                                <?php $__currentLoopData = $ticketmedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div
                                        class="d-flex gap-2 mb-3text-green-2 fw-600 bg-green-light  p-2 rounded-3 mb-3 align-items-center ">
                                        <div class="d-flex  align-items-center">
                                            <div class="">
                                                <div class="text-green-2 fs-18px"><?php echo e($item->nome); ?></div>
                                                <div class="text-green fs-16px"><?php echo e($item->total_vendas); ?> realizados</div>
                                            </div>
                                        </div>
                                        <div class="fs-20px text-green-2 ms-auto pe-3">
                                            R$ <?php echo e(number_format($item->ticket_medio,2,',','.')); ?>

                                        </div>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="ver-mais-lista-scroll text-center">
                                <button type="button"
                                    class="btn btn-ligth shadow bg-white  py-1 text-green fs-20px fw-600">
                                    Ver mais
                                </button>
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
    $(document).ready(function(){
        $('#filtro').change(function(){

            if($('#filtro').val()=='periodo'){
                $('.periodos').css('display','flex');
            }else{
                $('.periodos').css('display','none');
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let resultado = $('.resultFiltro');

        $('#data_fim').change(function() {

            $.ajax({
                url: "<?php echo e(route('painel.farmacia.graficos.index')); ?>", // Arquivo PHP que processará a busca
                type: "get",
                data: {
                    data_ini: $('#data_ini').val(),
                    data_fim: $('#data_fim').val(),


                }, // Dados a serem enviados para o servidor
                success: function(response) {

                resultado.html(response);
                },
                error: function(result) {
                    console.log(result);
                }



            });
        });
    })

</script>

    <!-- scripts apexchart -->
    <script src="<?php echo e($qtdExames->cdn()); ?>"></script>
    <?php echo e($qtdExames->script()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/graficos/index.blade.php ENDPATH**/ ?>