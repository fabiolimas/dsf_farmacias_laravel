
<?php $__env->startSection('title', 'Dados do Exame'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- Lista -->
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card min-vh-100">
                    <div class="card-body px-2 py-4 ">
                        <h5>Dados do Exame</h5>
                        <!-- lista -->
                        <div class="border-green-light p-3 rounded-3 mb-4 ">

                            <form action="<?php echo e(route('painel.farmacia.exames.result-exame')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <span class="titleResult">Dados do cliente</span>
                                <div class="row mb-3">

                                    <div class="col-md-8 mt-3">
                                        <label for="nome_cliente">Nome:</label>
                                        <input type="text" class="form-control" name='nome_cliente'
                                            value="<?php echo e($cliente->nome); ?>" id="nome_cliente" disabled>
                                    </div>
                                    <input type="hidden" name="cliente_farmacia_id" value="<?php echo e($cliente->id); ?>">
                                    <input type="hidden" name="agendas_id" value="<?php echo e($agenda->id); ?>">
                                    <div class="col-md-4 mt-3">
                                        <label for="cpf_cliente">CPF:</label>
                                        <input type="text" class="form-control" name='cpf_cliente'
                                            value="<?php echo e($cliente->cpf); ?>" id="cpf_cliente" disabled>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="endereco">Endereço:</label>
                                        <input type="text" class="form-control" name='endereco'
                                            value="<?php echo e($cliente->endereco); ?>" id="endereco" disabled>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" class="form-control" name='telefone'
                                            value="<?php echo e($cliente->telefone); ?>" id="telefone" disabled>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" name='email'
                                            value="<?php echo e($cliente->email); ?>" id="email" disabled>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="idade">Idade:</label>
                                        <input type="text" class="form-control" name='idade'
                                            value=" <?php echo e(date('Y', strtotime('now')) - date('Y', strtotime($cliente->data_nascimento))); ?>"
                                            id="idade" disabled>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="sexo">Sexo:</label>
                                        <input type="text" class="form-control" name='sexo'
                                            value="<?php echo e($cliente->sexo); ?>" id="sexo" disabled>
                                    </div>


                                </div>
                        </div>
                        <div class="border-green-light p-3 rounded-3 mb-4 ">
                            <span class="titleResult">Informações sobre o exame</span>
                            <div class="row mt-3">
                                
<?php if($exame->perguntas != null): ?>
                                <?php $__currentLoopData = $exame->perguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pergunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3">


                                        <?php echo e($pergunta['pergunta']); ?>

                                        <input type="hidden" name="perguntas[]" value="<?php echo e($pergunta['pergunta']); ?>">
                                        <select class="form-select" name="respostas[]">
                                            <option value="">Selecione uma opção</option>
                                            <?php $__currentLoopData = $pergunta['opcoes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opcao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($opcao); ?>"><?php echo e($opcao); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </select>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php else: ?> 

                                <?php endif; ?>

                            </div>


                        </div>

                        <div class="border-green-light p-3 rounded-3 mb-4 ">
                            <span class="titleResult">Atenção Farmaceutica</span>
                            <div class="row mt-3">

                                <div class="col-md-4">
                                    <label for="braco_aferido">Aferição de Pressão arterial braço</label>
                                    <select class="form-select " name="braco_aferido" id="braco_aferido">
                                        <option value="">Selecione uma opção</option>
                                        <option value="direito">Direito</option>
                                        <option value="esquerdo">Esquerdo</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="sistolica">Resultado Sistólica</label>
                                    <input type="text" class="form-control " name="sistolica" id="sistolica">
                                </div>
                                <div class="col-md-4">
                                    <label for="diastolica">Resultado Diastólica</label>

                                    <input type="text" class="form-control " name="distolica" id="diastolica">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="glicemia">Aferição Glicemia Capilar</label>
                                    <select class="form-select " name="glicemia" id="glicemia">
                                        <option value="">Selecione uma opção</option>
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="result_glicemia">Resultado mg/dll</label>

                                    <input type="text" class="form-control " name="result_glicemia"
                                        id="result_glicemia">
                                </div>


                                <div class="col-md-3 mt-3">
                                    <label for="temperatura">Aferição de Temp. Corporal</label>
                                    <select class="form-select " name="temperatura" id="temperatura">
                                        <option value="">Selecione uma opção</option>
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="result_temperatura">Resultado Cº</label>

                                    <input type="text" class="form-control " name="result_temperatura"
                                        id="result_temperatura">
                                </div>
                                

                            </div>

                            <div class="row border-green-light p-3 rounded-3 mb-4 mt-4">
                                <div class="col-md-3 mt-3">
                                    <label for="injetaveis">Aplicação de Injetaveis</label>
                                    <select class="form-select " name="injetaveis" id="injetaveis">
                                        <option value="">Selecione uma opção</option>
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="medicamento">Medicamento</label>

                                    <input type="text" class="form-control " name="medicamento" id="medicamento">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="concentracao">Concentração</label>

                                    <input type="text" class="form-control " name="concentracao" id="concentracao">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="lote">Lote</label>

                                    <input type="text" class="form-control " name="lote" id="lote">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="validade">Validade</label>

                                    <input type="date" class="form-control " name="validade" id="validade">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="ms">MS</label>

                                    <input type="text" class="form-control " name="ms" id="ms">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="dcb">DCB</label>

                                    <input type="text" class="form-control " name="dcb" id="dcb">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="via_ministracao">Via de Ministração</label>
                                    <select class="form-select " name="via_ministracao" id="via_ministracao">
                                        <option value="">Selecione uma opção</option>
                                        <option value="Gluteo Direito">Gluteo Direito</option>
                                        <option value="Gluteo Esquerdo">Gluteo Esquerdo</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="medico_responsavel">Médico Responsavel</label>

                                    <input type="text" class="form-control " name="medico_responsavel"
                                        id="medico_responsavel">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="crm">CRM</label>

                                    <input type="text" class="form-control " name="crm" id="crm">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="endereco_medico">Endereço</label>

                                    <input type="text" class="form-control " name="endereco_medico"
                                        id="endereco_medico">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="telefone_medico">Telefone</label>

                                    <input type="text" class="form-control " name="telefone_medico"
                                        id="telefone_medico">
                                </div>
                            </div>


                        </div>

                        <div class="border-green-light p-3 rounded-3 mb-4 ">
                            <span class="titleResult">Perfuração de Lóbulo Auricular</span>
                            <div class="row mt-3">

                                <div class="col-md-8">
                                    <label for="nome_fabricante">Nome do fabricante</label>
                                    <input type="text" class="form-control " name="nome_fabricante"
                                        id="nome_fabricante">
                                </div>
                                <div class="col-md-4">
                                    <label for="cnpj_fabricante">CNPJ</label>

                                    <input type="text" class="form-control " name="cnpj_fabricante"
                                        id="cnpj_fabricante">
                                </div>


                                <div class="col-md-4 mt-3">
                                    <label for="lote_pistola">Número de lote da pistola</label>

                                    <input type="text" class="form-control " name="lote_pistola" id="lote_pistola">
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="lote_brinco">Número de lote do brinco</label>

                                    <input type="text" class="form-control " name="lote_brinco" id="lote_pistola">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="responsavel_atendimento">Responsavel pelo atendimento</label>

                                    <input type="text" class="form-control " name="responsavel_atendimento"
                                        id="responsavel_atendimento">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="observacao">Observações ao paciante</label>

                                    <textarea class="form-control" name="observacao" id="observacao"></textarea>
                                </div>



                            </div>
                            <div class="col-md-12 mt-3"
                                style="
    display: flex;
    justify-content: flex-end;
    align-content: flex-end;
">
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                            </form>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/exames/dados-exame.blade.php ENDPATH**/ ?>