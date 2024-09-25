
<?php $__env->startSection('title', 'Visualizar Exame'); ?>
<?php $__env->startSection('content'); ?>
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
                                <span class="titleResult">Dados do Paciente</span>
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

                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <span class="titleResult">Atenção Farmaceutica</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 ">
                                        <div class="row">
                                            <div class="col-md-3 mt-3">
                                                <label for="peso">Peso: <?php echo e($resultado->peso); ?></label>
                                             
                                            </div>
            
                                            <div class="col-md-3 mt-3">
                                                <label for="gestante">Gestante: <?php echo e($resultado->gestante); ?></label>
                                              
                                                
                                            </div>
                                            <div class="col-md-3 mt-3">
                                                <label for="fumante">Fumante: <?php echo e($resultado->fumante); ?></label>
                                              
                                            </div>
            
                                            <div class="col-md-3 mt-3">
                                                <label for="usa_insulina">Usa Insulina: <?php echo e($resultado->usa_insulina); ?></label>
                                               
                                            </div>
            
                                            <div class="col-md-3 mt-3">
                                                <label for="uso_de_medicamentos">Faz uso de medicamentos? quais: <?php echo e($resultado->uso_de_medicamentos); ?></label>
                                               
                                            </div>
                                        </div>
                                        

                                        
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <span class="titleResult"><?php echo e($agenda->nome_exame); ?></span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 ">
                                        <div class="row">

                                            <?php if($array != null): ?>

                                            <?php $__currentLoopData = $array['perguntas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pergunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                                <div class="col-md-4 mt-3 mb-3">
                                                    <?php echo e($pergunta); ?>: <?php echo e($array['respostas'][$index]); ?>

                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                            <?php endif; ?>
                                            
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
                                        <div class="col-md-4 mt-3">
                                            Responsavel pelo atendimento : <?php echo e($resultado->responsavel_atendimento); ?>

                                        </div>
                                        <div class="col-md-12 mt-3">
                                            Observações ao paciente: <?php echo e($resultado->observacoes); ?>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <h5 class="text-center">HOSPITAL 24H MAIS PRÓXIMO EM CASO DE EMERGÊNCIA</h5>
                                        <p class="text-center"><?php echo e($farmacia->hospital_proximo); ?> - <?php echo e($farmacia->end_hospital); ?></p>
                                    </div>
                                <div class="row">
                                    <h5 class="text-center">Este Procedimento não tem finalidade de diagnóstico e não substitui a cosulta medica ou a realização de exames laboratoriais.</h5>
                                </div>
                                <div class="row">
                                    <?php echo $exame->bibliografia; ?>

                                </div>
                            </div>
                        </div>

                        <div class=" px-3 mt-4 d-lg-flex">
                            <?php if($clienteFarma->email == null): ?>
                          

                            <a class="w-100  btn btn-danger d-block d-md-inline-block mb-3 me-lg-3   disabled"
                                href="#" role="button"
                                style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center justify-content-center" disabled>
                                    <i data-feather="x"></i>
                                  Paciente não possui e-mail
                                </div>
                            </a>
                            <?php else: ?>
                            <a class="w-100  btn btn-primary d-block d-md-inline-block mb-3 me-lg-3   "
                            href="<?php echo e(route('enviar.pdf',$resultado->agendas_id )); ?>" role="button"
                            style="padding: 16px 24px;">
                            <div class="d-flex gap-2 align-items-center justify-content-center">
                                <i data-feather="send"></i>
                                Enviar por email
                            </div>
                        </a>
                            <?php endif; ?>
                            
                            <a name="" id=""
                                class="w-100  btn btn-outline-primary d-block d-md-inline-block mb-3 " href="<?php echo e(route('gerar.pdf',$resultado->agendas_id)); ?>"
                                role="button" style="padding: 16px 24px;">
                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                    <i data-feather="download"></i>
                                    Baixar
                                </div>

                            </a>
                        </div>


                    </div>
                </div>

            </div>



        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/exames/show.blade.php ENDPATH**/ ?>