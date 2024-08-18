<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado - DSF</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>
<style>
    td {
    padding: 9px;
}
.row.mt-2, .row.mt-3, .row.mt-4 {
    margin-top:10px;
    font-size: 13px;
}
    </style>
<body style="font-family:sans-serif">
    <div class="">
        <div class="row gy-4">

            <!-- Visualizar exame -->
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="card ">
                    <div class="card-body py-3 px-0 px-lg-2  py-lg-4">

                        

                        <div class="px-3 folhaResultado">
                            
                            <div class="row cabecalho">
                                <div class="col-md-3 " style="position:absolute; left:20px; top:4%">
                                    <div class="logoResultado">
                                        <img src="<?php echo e(asset($farmacia->logo)); ?>"
                                            class="w-100" style="width:100%">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="dados text-center" style="text-align: center; margin-left:20%">
                                        <h4><?php echo e($farmacia->razao_social); ?></h4>
                                        <p>Fone: <?php echo e($farmacia->telefone); ?> CNPJ: <?php echo e($farmacia->cnpj); ?></p>
                                        <p><?php echo e($farmacia->logradouro); ?>, <?php echo e($farmacia->num_endereco); ?> -
                                            <?php echo e($farmacia->cidade); ?> - <?php echo e($farmacia->estado); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                   <p> Data:<?php echo e(date('d/m/Y')); ?>

                                  <span style="text-align: center; font-weight:700; margin-left: 10%">Declaração de serviços farmaceuticos</span> <span style="margin-left:20%">  Nº <?php echo e($resultado->id); ?></span></p>
                                </div>
                                <div class="col-md-8">
                                   
                                </div>
                                <div class="col-md-1">
                                  
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="border-green-light p-3 rounded-3 mb-4 " style="border:1px solid #b2d2d2; border-radius:5px; padding:10px; ">
                                    <p style="font-size: 12px;
    text-align: center;">Este estabelecimento através de seu
                                        responsável tecnico, prestou assistência farmacêutica conforme abaixo. O(a) Sr.
                                        (Sra.).</p>
                                    <table>
                                    <tr>
                                        
                                        <td>
                                            Nome: <?php echo e($clienteFarma->nome); ?>

                                        </td>
                                        <td>
                                            CPF: <?php echo e($clienteFarma->cpf); ?>

                                        </td>
                                        <td class="col-md-4 mt-3">
                                            Telefone: <?php echo e($clienteFarma->telefone); ?>

                                        </td>
                                    </tr>
                                        <tr>
                                        <td class="col-md-4 mt-3">
                                            E-mail: <?php echo e($clienteFarma->email); ?>

                                        </td>
                                        <td class="col-md-4 mt-3">
                                            Idade:
                                            <?php echo e(date('Y', strtotime('now')) - date('Y', strtotime($clienteFarma->data_nascimento))); ?>

                                        </td>
                                        <td class="col-md-4 mt-3">
                                            Sexo: <?php echo e($clienteFarma->sexo); ?>

                                        </td>
                                    </tr>
                                    </table>
                                        <hr class='mt-2'>
                                        <table>
                                            <tr>
                                        <?php if($array != null): ?>
                                        <?php $__currentLoopData = $array['perguntas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pergunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                            <td class="col-md-4 mt-3">
                                                <?php echo e($pergunta); ?>: <?php echo e($array['respostas'][$index]); ?>

                                            </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?> 
                                        <?php endif; ?>
                                    </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <span class="titleResult">Atenção Farmaceutica</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 " style="border:1px solid #b2d2d2; border-radius:5px; padding:7px; ">
                                       
                                       <table>


                                       
                                        <tr class="row">
                                            <td colspan="2">
                                                Aferição de pressão arterial braço: <?php echo e($resultado->braco_aferido); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Resultado Sistólica: <?php echo e($resultado->resultado_sistolica); ?>

                                            </td>
                                            <td colspan="2">
                                                Resultado Diastolica: <?php echo e($resultado->resultado_distolica); ?>mmHG
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Aferição Glicemia Capilar: <?php echo e($resultado->glicemia); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                 Resultado : <?php echo e($resultado->result_glicemia); ?>mg/dll
                                            </td>
                                            <td class="col-m-4 "></td>
                                        </tr>
                                       
                                            <tr>
                                            <td colspan="2">
                                                Aferição de Temp. Corporal: <?php echo e($resultado->temperatura); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Resultado : <?php echo e($resultado->result_temperatura); ?>Cº
                                            </td>
                                            <td class="col-m-4 "></td>
                                            </tr>
                                    
                                            <tr>
                                            <td colspan="2">
                                                Aplicação de injetaveis : <?php echo e($resultado->injetaveis); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Medicamento : <?php echo e($resultado->medicamento); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Concentração : <?php echo e($resultado->concentracao); ?>

                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="col-md-4 mt-3">
                                                Lote : <?php echo e($resultado->lote); ?>

                                            </td>
                                            <td colspan="2">
                                                Validade : <?php echo e(date('d/m/H', strtotime($resultado->validade))); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                MS : <?php echo e($resultado->ms); ?>

                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="col-md-4 mt-3">
                                                DCB : <?php echo e($resultado->dcb); ?>

                                            </td>
                                            <td colspan="2">
                                                Via de Ministração : <?php echo e($resultado->via_ministracao); ?>

                                            </td>
                                            <td class="col-m-4 "></td>
                                            </tr>
                                           
                                            <tr>
                                            <td colspan="3">
                                                Médico Responsavel : <?php echo e($resultado->medico_responsavel); ?>

                                            </td>
                                            </tr>
                                            <tr>
                                            <td class="col-md-2 mt-3">
                                                CRM : <?php echo e($resultado->crm); ?>

                                            </td>
                                            <td colspan="2">
                                                Endereço : <?php echo e($resultado->endereco_medico); ?>

                                            </td>
                                            <td class="col-md-3 mt-3">
                                                Telefone : <?php echo e($resultado->telefone_medico); ?>

                                            </td>
                                            </tr>
                                       </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <span class="titleResult">Perfuração de Lóbulo Auricular</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 " style="border:1px solid #b2d2d2; border-radius:5px; padding:10px; ">
                                        <table>
                                        <tr class="row">
                                            <td class="col-md-4 mt-3">
                                                Nome do Fabricante : <?php echo e($resultado->nome_fab_auricular); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                CNPJ : <?php echo e($resultado->cnpj_fab_auricular); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Número lote pistola : <?php echo e($resultado->lote_pistola); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4 mt-3">
                                                Número lote brinco : <?php echo e($resultado->lote_brinco); ?>

                                            </td>
                                            <td class="col-md-4 mt-3">
                                                Responsavel pelo atendimento : <?php echo e($resultado->responsavel_atendimento); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                Observações ao paciente: <?php echo e($resultado->observacoes); ?>

                                            </td>
                                        </tr>
                                        
                                        </div>
                                    </table>
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
</body>
</html>
    
<?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/farmacia/exames/exame_pdf.blade.php ENDPATH**/ ?>