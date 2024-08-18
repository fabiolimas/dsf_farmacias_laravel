<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <title> <?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>

<body>
    <div id="app">

        <main class="">
    <div class="">
        <div class="row gy-4">

            <!-- Visualizar exame -->
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="card ">
                    <div class="card-body py-3 px-0 px-lg-2  py-lg-4">

                        

                        <div class="px-3 folhaResultado">
                            
                            <div class="row cabecalho">
                                <div class="col-md-3">
                                    <div class="logoResultado">
                                        <img src="<?php echo e(asset($farmacia->logo ?? 'assets/img/ilustracoes/profile.png')); ?>"
                                            class="w-100">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="dados text-center">
                                        <h4><?php echo e($farmacia->razao_social); ?></h4>
                                        <p>Fone: <?php echo e($farmacia->telefone); ?> CNPJ: <?php echo e($farmacia->cnpj); ?></p>
                                        <p><?php echo e($farmacia->logradouro); ?>, <?php echo e($farmacia->num_endereco); ?> -
                                            <?php echo e($farmacia->cidade); ?> - <?php echo e($farmacia->estado); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    Data:<?php echo e(date('d/m/Y')); ?>

                                </div>
                                <div class="col-md-8">
                                    <h5>Declaração de serviços farmaceuticos</h5>
                                </div>
                                <div class="col-md-1">
                                    Nº <?php echo e($resultado->id); ?>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="border-green-light p-3 rounded-3 mb-4 ">
                                    <p style="font-size: 13px;
    text-align: center;">Este estabelecimento através de seu
                                        responsável tecnico, prestou assistência farmacêutica conforme abaixo. O(a) Sr.
                                        (Sra.).</p>

                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            Nome: <?php echo e($clienteFarma->nome); ?>

                                        </div>
                                        <div class="col-md-4 mt-3">
                                            CPF: <?php echo e($clienteFarma->cpf); ?>

                                        </div>
                                        <div class="col-md-4 mt-3">
                                            Telefone: <?php echo e($clienteFarma->telefone); ?>

                                        </div>
                                        <div class="col-md-4 mt-3">
                                            E-mail: <?php echo e($clienteFarma->email); ?>

                                        </div>
                                        <div class="col-md-4 mt-3">
                                            Idade:
                                            <?php echo e(date('Y', strtotime('now')) - date('Y', strtotime($clienteFarma->data_nascimento))); ?>

                                        </div>
                                        <div class="col-md-4 mt-3">
                                            Sexo: <?php echo e($clienteFarma->sexo); ?>

                                        </div>
                                        <hr class='mt-2'>
                                        <?php if($array != null): ?>
                                        <?php $__currentLoopData = $array['perguntas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pergunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-4 mt-3">
                                                <?php echo e($pergunta); ?>: <?php echo e($array['respostas'][$index]); ?>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?> 
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <span class="titleResult">Atenção Farmaceutica</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 ">
                                        <div class="row">
                                            <div class="col-md-4 mt-3">
                                                Aferição de pressão arterial braço: <?php echo e($resultado->braco_aferido); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Resultado Sistólica: <?php echo e($resultado->resultado_sistolica); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Resultado Diastolica: <?php echo e($resultado->resultado_distolica); ?>mmHG
                                            </div>
                                            <hr>

                                            <div class="col-md-4 mt-3">
                                                Aferição Glicemia Capilar: <?php echo e($resultado->glicemia); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                 Resultado : <?php echo e($resultado->result_glicemia); ?>mg/dll
                                            </div>
                                            <div class="col-m-4 "></div>
                                            <hr>
                                            <div class="col-md-4 mt-3">
                                                Aferição de Temp. Corporal: <?php echo e($resultado->temperatura); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Resultado : <?php echo e($resultado->result_temperatura); ?>Cº
                                            </div>
                                            <div class="col-m-4 "></div>
                                            <hr>
                                            <div class="col-md-4 mt-3">
                                                Aplicação de injetaveis : <?php echo e($resultado->injetaveis); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Medicamento : <?php echo e($resultado->medicamento); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Concentração : <?php echo e($resultado->concentracao); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Lote : <?php echo e($resultado->lote); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Validade : <?php echo e(date('d/m/H', strtotime($resultado->validade))); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                MS : <?php echo e($resultado->ms); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                DCB : <?php echo e($resultado->dcb); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Via de Ministração : <?php echo e($resultado->via_ministracao); ?>

                                            </div>
                                            <div class="col-m-4 "></div>
                                            <hr>
                                            <div class="col-md-3 mt-3">
                                                Médico Responsavel : <?php echo e($resultado->medico_responsavel); ?>

                                            </div>
                                            <div class="col-md-2 mt-3">
                                                CRM : <?php echo e($resultado->crm); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Endereço : <?php echo e($resultado->endereco_medico); ?>

                                            </div>
                                            <div class="col-md-3 mt-3">
                                                Telefone : <?php echo e($resultado->telefone_medico); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <span class="titleResult">Perfuração de Lóbulo Auricular</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 ">
                                        <div class="row">
                                            <div class="col-md-4 mt-3">
                                                Nome do Fabricante : <?php echo e($resultado->nome_fab_auricular); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                CNPJ : <?php echo e($resultado->cnpj_fab_auricular); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Número lote pistola : <?php echo e($resultado->lote_pistola); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Número lote brinco : <?php echo e($resultado->lote_brinco); ?>

                                            </div>
                                            <div class="col-md-4 mt-3">
                                                Responsavel pelo atendimento : <?php echo e($resultado->responsavel_atendimento); ?>

                                            </div>
                                            <div class="col-md-12 mt-3">
                                                Observações ao paciente: <?php echo e($resultado->observacoes); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="text-center">Este Procedimento não tem finalidade de diagnóstico e não substitui a cosulta medica ou a realização de exames laboratoriais.</h5>
                                </div>
                            </div>
                        </div>

                        


                    </div>
                </div>

            </div>



        </div>

    </div>
</main>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
    integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/exames/resultado_pdf.blade.php ENDPATH**/ ?>