
<?php $__env->startSection('title', 'Editar exame'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <form action="<?php echo e(route('painel.admin.exames.update', $exame->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row gy-4">


                <!--  exame -->
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card ">
                        <div class="card-body p-3 p-lg-4">

                            <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Editar exame</h1>



                            <!-- Nome do exame -->
                            <div class="mb-3 pb-2">
                                <label for="nome" class="form-label text-green fw-500 fs-18px">Nome do exame</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="nome" id="nome" value="<?php echo e(old('nome', $exame->nome)); ?>"
                                    placeholder="Ex: COVID-19" maxlength="255" required />
                                <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback fw-500"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!-- Laboratório -->
                            <div class="mb-3 pb-2">
                                <label for="laboratorio" class="form-label text-green fw-500 fs-18px">Laboratório</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['laboratorio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="laboratorio" id="laboratorio" maxlength="255"
                                    value="<?php echo e(old('laboratorio', $exame->laboratorio)); ?>" placeholder="Ex: Kovalent"
                                    required />
                                <?php $__errorArgs = ['laboratorio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback fw-500"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Registro MS -->
                            <div class="mb-3 pb-2">
                                <label for="registro_ms" class="form-label text-green fw-500 fs-18px">
                                    Registro MS
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['registro_ms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="registro_ms" id="registro_ms" maxlength="255"
                                    value="<?php echo e(old('registro_ms', $exame->registro_ms)); ?>" placeholder="00000" required />
                                <?php $__errorArgs = ['registro_ms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback fw-500"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 pb-2">
                                <label for="registro_ms" class="form-label text-green fw-500 fs-18px">
                                   Bibliografia
                                </label>
                            <textarea name="bibliografia" id="" cols="30" rows="10" class="form-control"><?php echo e($exame->bibliografia); ?></textarea>

                            </div>

                            <div class="pt-3 mt-5">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600">
                                    Salvar
                                </button>
                                <button type="button" class="mt-3 btn btn-primary-light text-green  w-100 py-2 fw-600"
                                    data-bs-toggle="modal" data-bs-target="#modal-remover">
                                    Excluir exame
                                </button>

                            </div>


                        </div>
                    </div>

                </div>

                <!-- perguntas -->
                <div class="col-12 col-lg-8 col-xl-8">
                    <div class="card ">
                        <div class="card-body p-3 p-lg-4">

                            <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Perguntas do exame</h1>

                            <!-- lista de parguntas -->
                            <div class="" id="lista-perguntas">
                                <?php $__currentLoopData = $exame->perguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pergunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <div class="border-green-light p-3 rounded-3 mb-4 pergunta-item"
                                            id="pergunta-item-<?php echo e($key); ?>">
                                            <div class="row">
                                                <!-- Pergunta -->
                                                <div class="col-12 col-lg-6">
                                                    <div class="mb-3 pb-2">
                                                        <label for="pergunta-<?php echo e($key); ?>"
                                                            class="form-label text-green fw-500 fs-18px">Pergunta</label>
                                                        <input type="text"
                                                            class="form-control form-control-custom fs-18px fw-500"
                                                            name="perguntas[<?php echo e($key); ?>][pergunta]"
                                                            value="<?php echo e($pergunta['pergunta']); ?>"
                                                            id="pergunta-<?php echo e($key); ?>"
                                                            placeholder="Forma de aplicação do exame?" required />
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-6">
                                                    <!-- Tipo -->
                                                    <div class="mb-3 pb-2">
                                                        <label for="tipo-<?php echo e($key); ?>"
                                                            class="form-label text-green fw-500 fs-18px opacity-0">Tipo</label>
                                                        <select class="form-select form-control-custom fw-500 fs-18px"
                                                            style="background-color: #CCEFEE"
                                                            name="perguntas[<?php echo e($key); ?>][tipo]"
                                                            id="tipo-<?php echo e($key); ?>" required>
                                                            
                                                            <option value="selecao"
                                                                <?php if($pergunta['tipo'] == 'selecao'): ?> selected <?php endif; ?>>Seleção
                                                            </option>
                                                            <option value="resposta-curta"
                                                                <?php if($pergunta['tipo'] == 'resposta-curta'): ?> selected <?php endif; ?>>Resposta
                                                                curta</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>


                                                <!-- Opções -->
                                                <!-- op -->
                                                <div class="col-12">
                                                    <div class="row flex-column" id="opcoes-resposta-<?php echo e($key); ?>">

                                                        <!--  -->
                                                        <?php $__currentLoopData = $pergunta['opcoes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyOp => $opcao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-12 col-lg-6 item-opcoes-<?php echo e($key); ?>">
                                                                <div class="mb-3 pb-2 position-relative">
                                                                    <label
                                                                        for="opcao-<?php echo e($key); ?>-<?php echo e($keyOp); ?>"
                                                                        class="form-label text-green fw-500 fs-18px">
                                                                        Opção <span
                                                                            class="numero-opcao-<?php echo e($key); ?>"><?php echo e($keyOp + 1); ?></span>
                                                                    </label>
                                                                    <div class=" "
                                                                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                                                                        <button type="button"
                                                                            onclick="this.parentNode.parentNode.remove(); setNumeroOpcao(<?php echo e($key); ?>)"
                                                                            class="btn btn-none border-0 p-1 text-green fs-18px">
                                                                            <i class="" data-feather="x"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class=" <?php if($keyOp != array_key_last($pergunta['opcoes'])): ?> d-none <?php endif; ?>  "
                                                                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                                                                        <button type="button"
                                                                            class="btn btn-none border-0 p-1 text-green fs-18px"
                                                                            onclick="this.parentNode.remove();setOpcao(<?php echo e($key); ?>)">
                                                                            <i class=""
                                                                                data-feather="plus-circle"></i>
                                                                        </button>
                                                                    </div>

                                                                    <input type="text"
                                                                        class="form-control form-control-custom fs-18px fw-500 opcoes-item-<?php echo e($key); ?>"
                                                                        name="perguntas[<?php echo e($key); ?>][opcoes][]"
                                                                        id="opcao-<?php echo e($key); ?>-<?php echo e($keyOp); ?>"
                                                                        placeholder="Nasal" value="<?php echo e($opcao); ?>"
                                                                        required />
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </div>
                                                </div>
                                                <!-- op -->
                                                <div class="col-12">
                                                    <div class="form-control form-control-custom d-flex align-items-center justify-content-end gap-3  border-end-0 border-start-0 border-bottom-0"
                                                        style="border-top-left-radius: 0;  border-top-right-radius: 0">

                                                        <button type="button"
                                                            class="btn btn-none border-0 p-0 text-green-3"
                                                            title="Copiar pergunta"
                                                            onclick="copiarPegunta(<?php echo e($key); ?>)">
                                                            <i class="" data-feather="copy"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-none border-0 p-0 text-green-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Remover"
                                                            onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.remove()">
                                                            <i class="" data-feather="trash"></i>
                                                        </button>


                                                        <div class=""
                                                            style="height: 20px; border-left: 1px solid #B2D2D2">

                                                        </div>
                                                        <div class="fw-500 d-flex gap-1 align-items-center">

                                                            <label class="form-check-label"
                                                                for="pergunta-obrigatoria-<?php echo e($key); ?>">Obrigatória</label>

                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="perguntas[<?php echo e($key); ?>][obrigatorio]"
                                                                    role="switch"
                                                                    id="pergunta-obrigatoria-<?php echo e($key); ?>"
                                                                    <?php if($pergunta['obrigatorio']): ?> checked <?php endif; ?>>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="mt-3 text-end">
                                <button type="button" class="btn btn-primary-light-3 px-4 fw-500"
                                    onclick="setPergunta()">
                                    <i class="" data-feather="plus-circle" width="20" height="20"></i>
                                    Adicionar mais
                                </button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>


    <!-- Modal remover -->
    <div class="modal modal-custom fade" id="modal-remover" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md border-0" role="document">
            <div class="modal-content bg-transparent ">
                <div class="modal-body p-lg-5  border-0">

                    <div class="p-4 shadow rounded-3  bg-white border">


                        <div class="fs-5 text-center">
                            Tem certeza que deseja remover este exame?
                        </div>


                        <form action="<?php echo e(route('painel.admin.exames.destroy', $exame->id)); ?>" method="post">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="row mt-4 pt-2 gy-2">
                                <div class="col-12 col-lg-6">
                                    <button type="button" data-bs-dismiss="modal"
                                        class="btn btn-danger w-100 py-2 fs-16px " id="modal-link-editar-user">
                                        Cancelar
                                    </button>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <button type="submit" id="modal-link-ver-mais"
                                        class="btn btn-primary w-100 py-2 fs-16px">Sim</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="fechar-modal text-center pt-2 pt-lg-4">
                        <button type="button" class="btn btn-ligth shadow bg-white text-green-2 py-1"
                            data-bs-dismiss="modal">
                            <i data-feather="x"></i>
                            Fechar
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        /**
         * Adicionar opção para pergunta
         * @param {number} key - identificador principal da pergunta
         */
        function setOpcao(key) {
            let elOpcoes = document.querySelector(`#opcoes-resposta-${key}`)

            let newDiv = document.createElement('div')
            newDiv.className = `col-12 col-lg-6 item-opcoes-${key}`
            newDiv.innerHTML += `
                <div class="mb-3 pb-2 position-relative">
                    <label for="opcao2" class="form-label text-green fw-500 fs-18px">
                        Opção <span class="numero-opcao-${key}"></span>
                    </label>
                    <div class=" "
                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                        <button type="button"
                            onclick="this.parentNode.parentNode.parentNode.remove(); setNumeroOpcao(${key})" title="Remover"
                            class="btn btn-none border-0 p-1 text-green fs-18px">
                            <i class="" data-feather="x"></i>
                        </button>
                    </div>
                    <div class=" "
                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                        <button type="button"
                            class="btn btn-none border-0 p-1 text-green fs-18px"
                            onclick="this.parentNode.remove();setOpcao(${key})" title="Adicionar">
                            <i class="" data-feather="plus-circle"></i>
                        </button>
                    </div>

                    <input type="text"
                        class="form-control form-control-custom fs-18px fw-500 opcoes-item-${key}"
                        name="perguntas[${key}][opcoes][]" id="opcao2"
                        placeholder="Resposta" value="" required />
                </div>
            `
            elOpcoes.appendChild(newDiv);
            setNumeroOpcao(key)

            /* activer feather icons */
            feather.replace();
        }

        /**
         * Organizar números de opções de perguntas
         * 
         * @param {number} key - identificador principal da pergunta
         */
        function setNumeroOpcao(key) {
            /* setar número opão em cada item */
            for (let i in document.querySelectorAll(`.numero-opcao-${key}`)) {
                document.querySelectorAll(`.numero-opcao-${key}`)[i].innerText = parseInt(i) + 1
            }
        }

        var contadorPerguntas = document.querySelectorAll('.pergunta-item').length + 2

        /*
         * Adicionar perguntas no html
         */
        function setPergunta() {

            contadorPerguntas += 1;

            let key = contadorPerguntas
            let divPerguntas = document.getElementById('lista-perguntas')

            console.log(key);

            let newDiv = document.createElement('div');

            newDiv.innerHTML = `
            <div class="border-green-light p-3 rounded-3 mb-4 pergunta-item" id="pergunta-item-${key}">
                <div class="row">
                    <!-- Pergunta -->
                    <div class="col-12 col-lg-6">
                        <div class="mb-3 pb-2">
                            <label for="pergunta-${key}"
                                class="form-label text-green fw-500 fs-18px">Pergunta</label>
                            <input type="text"
                                class="form-control form-control-custom fs-18px fw-500"
                                name="perguntas[${key}][pergunta]" id="pergunta-${key}"
                                placeholder="Forma de aplicação do exame?" required />
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <!-- Tipo -->
                        <div class="mb-3 pb-2">
                            <label for="tipo-${key}"
                                class="form-label text-green fw-500 fs-18px opacity-0">Tipo</label>
                            <select class="form-select form-control-custom fw-500 fs-18px"
                                style="background-color: #CCEFEE"
                                name="perguntas[${key}][tipo]" id="tipo-${key}" required>
                                <option value="multipla-escolha">Múltipla escolha</option>
                                <option value="selecao">Seleção</option>
                                <option value="resposta-curta">Resposta curta</option>
                                <option value="paragrafo">Parágrafo</option>
                            </select>
                        </div>
                    </div>


                    <!-- Opções -->
                    <!-- op -->
                    <div class="col-12">
                        <div class="row flex-column" id="opcoes-resposta-${key}">

                            <!--  -->
                            <div class="col-12 col-lg-6 item-opcoes-${key}">
                                <div class="mb-3 pb-2 position-relative">
                                    <label for="opcao-${key}"
                                        class="form-label text-green fw-500 fs-18px">
                                        Opção <span
                                            class="numero-opcao-${key}">${ key }</span>
                                    </label>
                                    <div class=" "
                                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                                        <button type="button"
                                            onclick="this.parentNode.parentNode.remove(); setNumeroOpcao(${key})"
                                            class="btn btn-none border-0 p-1 text-green fs-18px">
                                            <i class="" data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class=" "
                                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                                        <button type="button"
                                            class="btn btn-none border-0 p-1 text-green fs-18px"
                                            onclick="this.parentNode.remove();setOpcao(${key})">
                                            <i class="" data-feather="plus-circle"></i>
                                        </button>
                                    </div>

                                    <input type="text"
                                        class="form-control form-control-custom fs-18px fw-500 opcoes-item-${key}"
                                        name="perguntas[${key}][opcoes][]"
                                        id="opcao-${key}" placeholder="Nasal" value=""
                                        required />
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- op -->
                    <div class="col-12">
                        <div class="form-control form-control-custom d-flex align-items-center justify-content-end gap-3  border-end-0 border-start-0 border-bottom-0"
                            style="border-top-left-radius: 0;  border-top-right-radius: 0">

                            <button type="button" class="btn btn-none border-0 p-0 text-green-3"
                                title="Copiar pergunta" onclick="copiarPegunta(${key})">
                                <i class="" data-feather="copy"></i>
                            </button>
                            <button type="button" class="btn btn-none border-0 p-0 text-green-3"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Remover" onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.remove()">
                                <i class="" data-feather="trash"></i>
                            </button>


                            <div class=""
                                style="height: 20px; border-left: 1px solid #B2D2D2">

                            </div>
                            <div class="fw-500 d-flex gap-1 align-items-center">

                                <label class="form-check-label"
                                    for="pergunta-obrigatoria-${key}">Obrigatória</label>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"
                                        name="perguntas[${key}][obrigatorio]"
                                        role="switch" id="pergunta-obrigatoria-${key}">
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
            `

            divPerguntas.appendChild(newDiv);

            /* activer feather icons */
            feather.replace();

            setNumeroOpcao(key)
        }

        /**
         * Copiar pergunta
         * @param {number} key - identificador principal da pergunta
         */
        function copiarPegunta(keyOriginal) {
            // let htmlOriginal= document.getElementById(`pergunta-item-${key}`).innerHTML


            contadorPerguntas += 1;

            let key = contadorPerguntas
            let divPerguntas = document.getElementById('lista-perguntas')

            console.log(key);

            let newDiv = document.createElement('div');

            let textPegunta = document.querySelector(`#pergunta-${keyOriginal}`).value
            let tipo = document.querySelector(`#tipo-${keyOriginal}`).value
            let opcoes = document.querySelectorAll(`.opcoes-item-${keyOriginal}`)
            let obrigatorio = document.querySelector(`#pergunta-obrigatoria-${keyOriginal}`).checked

            console.log(textPegunta, tipo, opcoes, obrigatorio);

            let htmlOpcoes = ``
            let countInteration = 0;
            for (let item of opcoes) {

                countInteration++;

                htmlOpcoes += `
                <div class="mb-3 pb-2 position-relative">
                    <label for="opcao-${key}"
                        class="form-label text-green fw-500 fs-18px">
                        Opção <span
                            class="numero-opcao-${key}">${ key }</span>
                    </label>
                    <div class=" "
                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                        <button type="button"
                            onclick="this.parentNode.parentNode.remove(); setNumeroOpcao(${key})"
                            class="btn btn-none border-0 p-1 text-green fs-18px">
                            <i class="" data-feather="x"></i>
                        </button>
                    </div>
                    <div class=" "
                        style="position: absolute; top: 42px; right: 13px; background: #E6F2F1">
                        <button type="button"
                            class="btn btn-none border-0 p-1 text-green fs-18px ${countInteration < opcoes.length ? 'd-none' : ''}"
                            onclick="this.parentNode.remove();setOpcao(${key})">
                            <i class="" data-feather="plus-circle"></i>
                        </button>
                    </div>

                    <input type="text"
                        class="form-control form-control-custom fs-18px fw-500 opcoes-item-${key}"
                        name="perguntas[${key}][opcoes][]"
                        id="opcao-${key}" value="${item.value}" placeholder="Nasal" value=""
                        required />
                </div>
                `
            }

            newDiv.innerHTML = `
            <div class="border-green-light p-3 rounded-3 mb-4 pergunta-item" id="pergunta-item-${key}">
                <div class="row">
                    <!-- Pergunta -->
                    <div class="col-12 col-lg-6">
                        <div class="mb-3 pb-2">
                            <label for="pergunta-${key}"
                                class="form-label text-green fw-500 fs-18px">Pergunta</label>
                            <input type="text"
                                class="form-control form-control-custom fs-18px fw-500"
                                name="perguntas[${key}][pergunta]" value="${textPegunta}" id="pergunta-${key}"
                                placeholder="Forma de aplicação do exame?" required />
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <!-- Tipo -->
                        <div class="mb-3 pb-2">
                            <label for="tipo-${key}"
                                class="form-label text-green fw-500 fs-18px opacity-0">Tipo</label>
                            <select class="form-select form-control-custom fw-500 fs-18px"
                                style="background-color: #CCEFEE"
                                name="perguntas[${key}][tipo]" id="tipo-${key}" required>
                                <option value="multipla-escolha" ${ tipo == 'multipla-escolha' ? 'selected' : ''}>Múltipla escolha</option>
                                <option value="selecao" ${ tipo == 'selecao' ? 'selected' : ''}>Seleção</option>
                                <option value="resposta-curta" ${ tipo == 'resposta-curta' ? 'selected' : ''}>Resposta curta</option>
                                <option value="paragrafo" ${ tipo == 'paragrafo' ? 'selected' : ''}>Parágrafo</option>
                            </select>
                        </div>
                    </div>


                    <!-- Opções -->
                    <!-- op -->
                    <div class="col-12">
                        <div class="row flex-column" id="opcoes-resposta-${key}">

                            <!--  -->
                            <div class="col-12 col-lg-6 item-opcoes-${key}">
                                ${htmlOpcoes}
                            </div>

                        </div>
                    </div>
                    <!-- op -->
                    <div class="col-12">
                        <div class="form-control form-control-custom d-flex align-items-center justify-content-end gap-3  border-end-0 border-start-0 border-bottom-0"
                            style="border-top-left-radius: 0;  border-top-right-radius: 0">

                            <button type="button" class="btn btn-none border-0 p-0 text-green-3"
                                title="Copiar pergunta" onclick="copiarPegunta(${key})">
                                <i class="" data-feather="copy"></i>
                            </button>
                            <button type="button" class="btn btn-none border-0 p-0 text-green-3"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Remover" onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.remove()">
                                <i class="" data-feather="trash"></i>
                            </button>


                            <div class=""
                                style="height: 20px; border-left: 1px solid #B2D2D2">

                            </div>
                            <div class="fw-500 d-flex gap-1 align-items-center">

                                <label class="form-check-label"
                                    for="pergunta-obrigatoria-${key}">Obrigatória</label>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"
                                        name="perguntas[${key}][obrigatorio]"
                                        role="switch" id="pergunta-obrigatoria-${key}" ${obrigatorio ? 'checked' : ''}>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
            `

            divPerguntas.appendChild(newDiv);

            setNumeroOpcao(key)

            /* activer feather icons */
            feather.replace();

        }
    </script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('bibliografia');
        }); // convert text area with id area1 to rich text editor.

       // convert text area with id area2 to rich text editor with full panel.
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/admin/exames/edit.blade.php ENDPATH**/ ?>