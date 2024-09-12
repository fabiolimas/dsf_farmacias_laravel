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
                                        <img src="<?php echo e(asset($farmacia->logo ?? 'assets/img/ilustracoes/profile.png')); ?>"
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

                                  <span style="text-align: center; font-weight:700; margin-left: 20%">Declaração de serviços farmaceuticos</span> <span style="margin-left:25%">  Nº <?php echo e($resultado->id); ?></span></p>
                                </div>
                                <div class="col-md-8">
                                   
                                </div>
                                <div class="col-md-1">
                                  
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="border-green-light p-3 rounded-3 mb-4 " style="border:1px solid #b2d2d2; border-radius:5px; padding:10px; ">
                                    <p style="font-size: 12px; text-align: center;">Este estabelecimento através de seu
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
                                      
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <span class="titleResult">Atenção Farmaceutica</span>
                                    <div class="border-green-light p-3 rounded-3 mb-4 " style="border:1px solid #b2d2d2; border-radius:5px; padding:7px; ">
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
                                       
                                            <td colspan="4">
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
                                    <h5 style="text-align:center">Este Procedimento não tem finalidade de diagnóstico e não substitui a cosulta medica ou a realização de exames laboratoriais.</h5>
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