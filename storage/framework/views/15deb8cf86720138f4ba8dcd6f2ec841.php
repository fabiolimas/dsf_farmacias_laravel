
<?php $__env->startSection('title', 'Exames'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row exames gy-4">

            <!-- Próximos atendimentos -->
            <div class="col-12 col-lg-6 col-xl-4 coluna-exames-1">
                <div class="card ">
                    <div class="card-body py-3 px-0 px-md-2 px-lg-2  py-lg-4">


                        <!--  -->
                        <div class=" px-3">
                            <a class="btn btn-primary d-block d-md-inline-block mb-3 me-lg-3   "
                                href="<?php echo e(route('painel.farmacia.exames.confirmados')); ?>" role="button"
                                style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="file-plus"></i>
                                    Resultados 
                                </div>
                            </a>
                            <a name="" id="" class="btn btn-outline-primary d-block d-md-inline-block mb-3 "
                                href="<?php echo e(route('painel.farmacia.exames.lista')); ?>" role="button"
                                style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <i data-feather="archive"></i>
                                    Ver exames prontos
                                </div>
                            </a>
                        </div>

                        <div class="px-3 d-flex justify-content-between align-items-center mb-3  pt-2">
                            <h2 class="fs-4 fw-600 text-green-2 pt-2 ">Próximos atendimentos</h2>
                        </div>

                        <!--  -->
                        <!-- pesquisa -->
                        <div class="pt-2 px-3">
                            <div class="mb-0 position-relative">
                                <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                <input type="text" class="form-control input-pesquisar-cliente" name=""
                                    id="pesquisa" placeholder="Pesquisar" />

                                <button type="submit" class="btn btn-none text-green p-1"
                                    style="position: absolute; top:3px; right: 20px">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>




                        <div class="position-relative mt-4 resultBusca">
                            <!-- Lista -->
                            <div class=" lista-scroll p-3 pt-0 clientes-lista-assinantes " style="max-height: 550px">
                                <?php $__currentLoopData = $examesDia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataExame => $exame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class=" mb-2 pb-1">
                                        <div class="fs-20 text-green fw-600">
                                            <?php echo e(date('d  M  ', strtotime($dataExame))); ?>

                                        </div>
                                    </div>
                                    <?php $__currentLoopData = $exame; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                   
                                        <div class="px-0 pb-4">
                                            <!--  -->

                                            <div
                                                class="d-sm-flex gap-2 align-items-center mb-3 px-2 proximo-horarios  rounded-3">


                                                <a href="#"
                                                    class="px-2 py-2  text-decoration-none d-block text-start "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal-ver-agenda-<?php echo e($agenda->agendaId); ?>">
                                                    <div class="d-flex gap-4  pt-1 align-items-center">
                                                        <div class="text-green-2 fw-700 lh-1">
                                                            <div class="fs-3 mb-1">
                                                                <?php echo e($agenda->hora_exame); ?>

                                                            </div>
                                                            
                                                        </div>
                                                        <div class="divisor-horarios cor-roxo" style="max-height: 53px">
                                                        </div>
                                                        <div class="fs-18px text-green-2 fw-600">
                                                            <div class="text-green-2"><?php echo e($agenda->nome_exame); ?></div>
                                                            <div class="text-green">
                                                                <?php echo e($agenda->nome_cliente); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="#"
                                                    class="btn btn-primary-light-3 py-2 btn-lg fs-18px ms-auto fw-600 w-sm-100"
                                                    style="" data-bs-toggle="modal"
                                                    data-bs-target="#modal-presenca-<?php echo e($agenda->agendaId); ?>">
                                                    Confirmar
                                                </a>
                                            </div>



                                        </div>

                                        <!-- Modal ver agenda -->
                                        <div class="modal modal-custom fade" id="modal-ver-agenda-<?php echo e($agenda->agendaId); ?>"
                                            tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg border-0"
                                                role="document">
                                                <div class="modal-content bg-transparent ">
                                                    <div class="modal-body p-lg-5  border-0">

                                                        <div class="p-3  p-md-4 shadow rounded-3  bg-white border">

                                                            <div class="d-flex flex-column flex-lg-row flex-wrap gap-4">

                                                                <!--  -->
                                                                <div class="">
                                                                    <div class="d-flex  align-items-center p-3 rounded-3 px-4"
                                                                        style="border: 1px solid #B2D2D2">
                                                                        <div class="">
                                                                            <div
                                                                                class="bg-white position-relative bg-logo-farmacia">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="64" height="64"
                                                                                    viewBox="0 0 64 64" fill="none">
                                                                                    <path
                                                                                        d="M31.9999 58.6667C46.7275 58.6667 58.6666 46.7276 58.6666 32C58.6666 17.2724 46.7275 5.33337 31.9999 5.33337C17.2723 5.33337 5.33325 17.2724 5.33325 32C5.33325 46.7276 17.2723 58.6667 31.9999 58.6667Z"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M32 16V32L42.6667 37.3333"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <!-- nome -->
                                                                        <div class=" fs-20px ms-3">
                                                                            <a href="#"
                                                                                class="text-decoration-none d-block lh-1">
                                                                                <div
                                                                                    class="text-green-2 fw-700 fs-2 text-truncate mb-1">
                                                                                    <?php echo e($agenda->hora_exame); ?>

                                                                                </div>
                                                                                
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!--  -->
                                                                <div class="">
                                                                    <div class="d-flex align-items-center p-3 rounded-3 px-4"
                                                                        style="border: 1px solid #B2D2D2">
                                                                        <!-- foto -->
                                                                        <div class="">
                                                                            <div class="bg-white position-relative bg-logo-farmacia"
                                                                                style="background-image: url(<?php echo e(asset($agenda->img_perfil)); ?>); border: 1px solid #00B1AC">
                                                                            </div>
                                                                        </div>
                                                                        <!-- nome -->
                                                                        <div class=" fs-20px ms-3">
                                                                            <a href="#"
                                                                                class="text-decoration-none d-block">
                                                                                <div
                                                                                    class="text-green-2 fw-500 text-truncate">
                                                                                    Responsável: </div>
                                                                                <div class="text-green text-truncate">
                                                                                    <?php echo e($agenda->name); ?></div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!--  -->
                                                                <div class="">
                                                                    <div class="d-flex align-items-center p-3 rounded-3 px-4"
                                                                        style="border: 1px solid #B2D2D2">
                                                                        <!-- foto -->
                                                                        <div class="">
                                                                            <div
                                                                                class="bg-white position-relative bg-logo-farmacia">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="64" height="64"
                                                                                    viewBox="0 0 64 64" fill="none">
                                                                                    <path
                                                                                        d="M37.3334 5.33337H16.0001C14.5856 5.33337 13.229 5.89528 12.2288 6.89547C11.2287 7.89566 10.6667 9.25222 10.6667 10.6667V53.3334C10.6667 54.7479 11.2287 56.1044 12.2288 57.1046C13.229 58.1048 14.5856 58.6667 16.0001 58.6667H48.0001C49.4146 58.6667 50.7711 58.1048 51.7713 57.1046C52.7715 56.1044 53.3334 54.7479 53.3334 53.3334V21.3334L37.3334 5.33337Z"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M37.3333 5.33337V21.3334H53.3333"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M42.6666 34.6666H21.3333"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M42.6666 45.3334H21.3333"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M26.6666 24H23.9999H21.3333"
                                                                                        stroke="#00B1AC" stroke-width="4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <!-- nome -->
                                                                        <div class=" fs-20px ms-3">
                                                                            <a href="#"
                                                                                class="text-decoration-none d-block">
                                                                                <div
                                                                                    class="text-green-2 fw-500 text-truncate">
                                                                                    Exame: <?php echo e($agenda->nome_exame); ?>

                                                                                </div>
                                                                                <div class="text-green text-truncate"><?php echo e($agenda->estoque); ?> em
                                                                                    estoque</div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--  -->
                                                            <div class="mt-4">
                                                                <!--  -->
                                                                <div class="">
                                                                    <div class="d-flex flex-column flex-lg-row align-items-center p-3 px-4 rounded-3 gap-2 gap-lg-4"
                                                                        style="border: 1px solid #B2D2D2">
                                                                        <!--  -->
                                                                        <div class="d-flex align-items-center w-lg-100">
                                                                            <!-- foto -->
                                                                            <div class="">
                                                                                <div
                                                                                    class="bg-white position-relative bg-logo-farmacia">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="64" height="64"
                                                                                        viewBox="0 0 64 64"
                                                                                        fill="none">
                                                                                        <path
                                                                                            d="M53.3334 56V50.6667C53.3334 47.8377 52.2096 45.1246 50.2092 43.1242C48.2088 41.1238 45.4957 40 42.6667 40H21.3334C18.5044 40 15.7913 41.1238 13.7909 43.1242C11.7906 45.1246 10.6667 47.8377 10.6667 50.6667V56"
                                                                                            stroke="#00B1AC"
                                                                                            stroke-width="4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M31.9999 29.3333C37.891 29.3333 42.6666 24.5577 42.6666 18.6667C42.6666 12.7756 37.891 8 31.9999 8C26.1089 8 21.3333 12.7756 21.3333 18.6667C21.3333 24.5577 26.1089 29.3333 31.9999 29.3333Z"
                                                                                            stroke="#00B1AC"
                                                                                            stroke-width="4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <!-- nome -->
                                                                            <div class=" fs-20px ms-3">
                                                                                <a href="#"
                                                                                    class="text-decoration-none d-block">
                                                                                    <div
                                                                                        class="text-green-2 fw-500 text-truncate">
                                                                                        Cliente:
                                                                                        <?php echo e($agenda->nome_cliente); ?>

                                                                                    </div>
                                                                                    <div class="text-green text-truncate">
                                                                                        CPF:
                                                                                        <?php echo e($agenda->cpf); ?></div>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <!-- divisoar -->
                                                                        <div class="divisor-modal-ver-agenda-farmacia "
                                                                            style=""></div>

                                                                        <div class="d-flex align-items-center w-lg-100">
                                                                            <!-- nome -->
                                                                            <div class=" fs-20px ">
                                                                                <a href="#"
                                                                                    class="text-decoration-none d-block">
                                                                                    <div
                                                                                        class="text-green-2 fw-500 text-truncate">
                                                                                        Número: <?php echo e($agenda->telefone); ?>

                                                                                    </div>
                                                                                    <div
                                                                                        class="text-green text-truncate text-truncate">
                                                                                        Email: <?php echo e($agenda->emailCliente); ?>

                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-4 pt-2 gy-3">
                                                                <div class="col-12 col-lg-6">
                                                                    <a href="<?php echo e(route('painel.farmacia.agenda.edit', $agenda->agendaId)); ?>"
                                                                        class="btn btn-primary-light w-100 py-2 fs-20px text-green fw-400">
                                                                        Editar informações
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <button type="button"
                                                                        class="btn btn-primary w-100 py-2 fs-20px fw-400" data-bs-toggle="modal"
                                                                        data-bs-target="#modal-presenca-<?php echo e($agenda->agendaId); ?>">Confirmar Presença</button>
                                                                </div>
                                                            </div>

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
                                        
                                        <div class="modal modal-custom fade" id="modal-presenca-<?php echo e($agenda->agendaId); ?>" tabindex="-1"
                                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg border-0"
                                                role="document">
                                                <div class="modal-content bg-transparent ">
                                                    <div class="modal-body p-lg-5  border-0">

                                                        <div class="p-4 shadow rounded-3  bg-white border">

                                                            <div class="d-flex flex-column flex-lg-row flex-wrap gap-4">

                                                                <!--  -->
                                                               <h4>Confirma Presença?</h4>

                                                                <!--  -->
                                                                
                                                            </div>

                                                           

                                                            <div class="row mt-4 pt-2 gy-2">
                                                                <div class="col-12 col-lg-6">
                                                                    <a href="<?php echo e(route('painel.farmacia.exames.presenca', ['id'=>$agenda->agendaId, 'status'=>'confirmado'])); ?>" id="modal-link-editar-user"
                                                                        class="btn btn-primary-light w-100 py-2 fs-20px text-green">
                                                                        Cliente Compareceu
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <a href="<?php echo e(route('painel.farmacia.exames.presenca', ['id'=>$agenda->agendaId, 'status'=>'cancelado'])); ?>" id="modal-link-ver-mais"
                                                                        class="btn btn-danger w-100 py-2 fs-20px">Cliente Cancelou</a>
                                                                </div>
                                                            </div>

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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($examesDia->count() > 4): ?>
                            <div class="ver-mais-lista-scroll text-center">
                                <!-- todo: ver no figma, n tem esse ver mais -->
                                <button type="button"
                                    class="btn btn-ligth shadow bg-white  py-1 text-green fs-20px fw-600">
                                    Ver mais
                                </button>
                            </div>
                            <?php else: ?>

                            <?php endif; ?>
                        </div>


                    </div>
                </div>

            </div>

            <!-- Lista -->
            <div class="col-12 col-lg-6 col-xl-8 coluna-exames-2">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4">

                        <!-- lista -->
                        <div class=" ">
                            <div class="">

                                <div class="d-flex  flex-column flex-lg-row gap-2 align-items-center ">
                                    <h2 class="fs-4 fw-600 mb-4 text-green-2 px-0 ps-lg-4 text-center text-md-start   "
                                        style="min-width: 260px">
                                        Exames realizados
                                    </h2>

                                    <!-- pesquisa -->
                                    <div class="w-100 px-2 px-md-0 pe-lg-4">
                                        <div class="mb-3 position-relative">
                                            <label for="pesquisa" class="visually-hidden">Pesquisar</label>
                                            <input type="text" class="form-control input-pesquisar-cliente"
                                                name="" id="pesquisa_exames_prontos" placeholder="Pesquisar" />

                                            <button type="submit" class="btn btn-none text-green p-1"
                                                style="position: absolute; top:3px; right: 20px">
                                                <i data-feather="search"></i>
                                            </button>

                                        </div>

                                    </div>

                                </div>




                                <!-- lista -->
                                <div class="mt-4">
                                    <div class="px-2 px-lg-4 resultExames">
                                        <?php $__currentLoopData = $examesProntos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examePronto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="bloco-exames-realizados bg-green-light rounded-3 mb-3 p-3 p-md-4 ">

                                                <div class="d-xl-flex gap-3 px-0 px-md-2 align-items-center ">
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div class="">
                                                            <div
                                                                class="bg-white border-green-light px-2 py-2 fw-600  text-center lh-1 rounded-3">
                                                                <div class="fs-24px text-green-2 mb-1 px-2"><?php echo e(date('d',strtotime($examePronto->data_exame))); ?></div>
                                                                <div class="fs-16px text-green px-2 fw-500"><?php echo e(date('M', strtotime($examePronto->data_exame))); ?></div>
                                                            </div>
                                                        </div>

                                                        <div class="fs-20px fw-500 ">
                                                            <a href="<?php echo e(route('painel.farmacia.exames.show', ['id' => $examePronto->id])); ?>"
                                                                class="text-decoration-none d-block">
                                                                <div class="text-green-2"><?php echo e($examePronto->nome_exame); ?></div>
                                                                <div class="text-green"><?php echo e($examePronto->nome_cliente); ?></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- img -->
                                                    <div
                                                        class="flex-bloco-img d-xl-flex gap-3 mt-lg-3 mt-lg-0 justify-content-center justify-content-lg-start">
                                                        <div class="">
                                                            <a href="<?php echo e(route('painel.farmacia.exames.show', ['id' => $examePronto->id])); ?>"
                                                                class="text-decoration-none d-block">
                                                                <img src="<?php echo e(asset('assets/img/ilustracoes/exame.jpg')); ?>"
                                                                    alt=""
                                                                    class="w-100 rounded-3 border-green-light"
                                                                    style="filter: blur(0px)">
                                                            </a>
                                                        </div>

                                                        <!-- acoes -->


                                                        <a href="<?php echo e(route('painel.farmacia.exames.show', ['id' => $examePronto->id])); ?>"
                                                            class="btn btn-primary-light text-center  py-2  text-green d-flex align-items-center"
                                                            style="background: #B2D2D2" title="Visualizar">
                                                            <i class="mx-auto" data-feather="printer"
                                                                style="min-width: 70px; min-height: 45px; stroke-width: 1.6"></i>
                                                        </a>


                                                    </div>
                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </div>
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
                    url: "<?php echo e(route('painel.farmacia.agenda.busca')); ?>", // Arquivo PHP que processará a busca
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

<script>
    $('document').ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let resultado = $('.resultExames');

        $('#pesquisa_exames_prontos').keyup(function() {

            $.ajax({
                url: "<?php echo e(route('painel.farmacia.exame.busca')); ?>", // Arquivo PHP que processará a busca
                type: "post",
                data: {
                    pesquisa: $('#pesquisa_exames_prontos').val(),


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

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/exames/index.blade.php ENDPATH**/ ?>