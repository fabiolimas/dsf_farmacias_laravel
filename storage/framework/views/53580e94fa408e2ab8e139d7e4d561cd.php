<?php $__env->startSection('title', 'Cadastrar novo usuário'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row gy-4">

            <!-- novo usuário -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card ">
                    <div class="card-body p-3 p-lg-4">

                        <h1 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Cadastrar farmácia</h1>

                        <form action="#" method="post">
                            <?php echo csrf_field(); ?>
                            <!-- Nome fantasia -->
                            <div class="mb-3 pb-2">
                                <label for="name" class="form-label text-green fw-500 fs-18px">Nome fantasia</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="name" id="name" value="<?php echo e(old('name', $user->name)); ?>"
                                    placeholder="Ex: João Almeida" required readonly />
                                <?php $__errorArgs = ['name'];
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
                            <!-- CNPJ -->
                            <div class="mb-3 pb-2">
                                <label for="cnpj" class="form-label text-green fw-500 fs-18px">CNPJ</label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['cnpj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="cnpj" id="cnpj" value="<?php echo e(old('cnpj', $user->cliente->cnpj)); ?>"
                                    placeholder="00.000.000/0000-00" readonly required />
                                <?php $__errorArgs = ['cnpj'];
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
                            <!-- Classe -->
                            
                            <div class="mb-3 pb-2 position-relative">
                                <div class="" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%">
                                </div>
                                <label for="classe" class="form-label text-green fw-500 fs-18px">Classe</label>
                                <select
                                    class="form-select form-control-custom fs-18px <?php $__errorArgs = ['classe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="classe" id="classe" readonly="readonly" required>
                                    <option value="ME" <?php if(old('classe', $user->cliente->classe) == 'ME'): ?> selected <?php endif; ?>>ME</option>
                                    <option value="ME" <?php if(old('classe', $user->cliente->classe) == 'ME'): ?> selected <?php endif; ?>>ME</option>
                                    <option value="ME" <?php if(old('classe', $user->cliente->classe) == 'ME'): ?> selected <?php endif; ?>>ME</option>
                                </select>
                                <?php $__errorArgs = ['classe'];
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
                            <!-- Telefone comercial -->
                            <div class="mb-3 pb-2">
                                <label for="telefone_comercial" class="form-label text-green fw-500 fs-18px">
                                    Telefone comercial
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['telefone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="telefone" value="<?php echo e(old('telefone', $user->cliente->telefone)); ?>"
                                    id="telefone_comercial" readonly placeholder="(99) 99999-9999" required />
                                <?php $__errorArgs = ['telefone'];
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
                            <!-- E-mail para login -->
                            <div class="mb-3 pb-2">
                                <label for="email" class="form-label text-green fw-500 fs-18px">
                                    E-mail para login
                                </label>
                                <input type="email"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="email" id="email" value="<?php echo e(old('email', $user->email)); ?>"
                                    placeholder="usuario@email.com" readonly required />
                                <?php $__errorArgs = ['email'];
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
                            <!-- Senha para login -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="password" class="form-label text-green fw-500 fs-18px">
                                    Senha para login
                                </label>
                                <button type="button" class="btn btn-none border-0 text-green p-1 disabled "
                                    style="position: absolute; top: 43px; right: 13px">
                                    <i data-feather="refresh-cw" width="20"></i>
                                </button>

                                <input type="password"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="password" id="password" placeholder="" value="Senha Preenchida" readonly
                                    required />
                                <?php $__errorArgs = ['password'];
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

                            <div class="pt-3">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600 disabled"
                                    style="background: #386160; border-color: #386160; opacity: 1">
                                    Confirmado
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- endereço -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card <?php if(false): ?> card-form-desabled <?php endif; ?>">
                    <div class="card-body p-3 p-lg-4">


                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Endereço</h2>

                        <form action="<?php echo e(route('painel.admin.clientes.store-endereco', ['user' => $user->id])); ?>"
                            method="post">
                            <?php echo csrf_field(); ?>
                            <!-- CEP -->
                            <div class="mb-3 pb-2">
                                <label for="cep" class="form-label text-green fw-500 fs-18px">
                                    CEP
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['cep'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="cep" id="cep" value="<?php echo e(old('cep', $user->cliente->cep)); ?>"
                                    placeholder="12345.678" required />
                                <?php $__errorArgs = ['cep'];
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

                            <!-- estado -->
                            <div class="mb-3 pb-2">
                                <label for="estado" class="form-label text-green fw-500 fs-18px">Estado</label>
                                <select
                                    class="form-select form-control-custom fs-18px <?php $__errorArgs = ['estado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="estado" id="estado" required>
                                    <option value="AC" <?php if(old('estado', $user->cliente->estado) == 'AC'): ?> selected <?php endif; ?>>Acre</option>
                                    <option value="AL" <?php if(old('estado', $user->cliente->estado) == 'AL'): ?> selected <?php endif; ?>>Alagoas
                                    </option>
                                    <option value="AP" <?php if(old('estado', $user->cliente->estado) == 'AP'): ?> selected <?php endif; ?>>Amapá
                                    </option>
                                    <option value="AM" <?php if(old('estado', $user->cliente->estado) == 'AM'): ?> selected <?php endif; ?>>Amazonas
                                    </option>
                                    <option value="BA" <?php if(old('estado', $user->cliente->estado) == 'BA'): ?> selected <?php endif; ?>>Bahia
                                    </option>
                                    <option value="CE" <?php if(old('estado', $user->cliente->estado) == 'CE'): ?> selected <?php endif; ?>>Ceará
                                    </option>
                                    <option value="DF" <?php if(old('estado', $user->cliente->estado) == 'DF'): ?> selected <?php endif; ?>>Distrito
                                        Federal</option>
                                    <option value="ES" <?php if(old('estado', $user->cliente->estado) == 'ES'): ?> selected <?php endif; ?>>Espírito
                                        Santo</option>
                                    <option value="GO" <?php if(old('estado', $user->cliente->estado) == 'GO'): ?> selected <?php endif; ?>>Goiás
                                    </option>
                                    <option value="MA" <?php if(old('estado', $user->cliente->estado) == 'MA'): ?> selected <?php endif; ?>>Maranhão
                                    </option>
                                    <option value="MT" <?php if(old('estado', $user->cliente->estado) == 'MT'): ?> selected <?php endif; ?>>Mato Grosso
                                    </option>
                                    <option value="MS" <?php if(old('estado', $user->cliente->estado) == 'MS'): ?> selected <?php endif; ?>>Mato Grosso
                                        do Sul</option>
                                    <option value="MG" <?php if(old('estado', $user->cliente->estado) == 'MG'): ?> selected <?php endif; ?>>Minas Gerais
                                    </option>
                                    <option value="PA" <?php if(old('estado', $user->cliente->estado) == 'PA'): ?> selected <?php endif; ?>>Pará
                                    </option>
                                    <option value="PB" <?php if(old('estado', $user->cliente->estado) == 'PB'): ?> selected <?php endif; ?>>Paraíba
                                    </option>
                                    <option value="PR" <?php if(old('estado', $user->cliente->estado) == 'PR'): ?> selected <?php endif; ?>>Paraná
                                    </option>
                                    <option value="PE" <?php if(old('estado', $user->cliente->estado) == 'PE'): ?> selected <?php endif; ?>>Pernambuco
                                    </option>
                                    <option value="PI" <?php if(old('estado', $user->cliente->estado) == 'PI'): ?> selected <?php endif; ?>>Piauí
                                    </option>
                                    <option value="RJ" <?php if(old('estado', $user->cliente->estado) == 'RJ'): ?> selected <?php endif; ?>>Rio de
                                        Janeiro</option>
                                    <option value="RN" <?php if(old('estado', $user->cliente->estado) == 'RN'): ?> selected <?php endif; ?>>Rio Grande
                                        do Norte</option>
                                    <option value="RS" <?php if(old('estado', $user->cliente->estado) == 'RS'): ?> selected <?php endif; ?>>Rio Grande
                                        do Sul</option>
                                    <option value="RO" <?php if(old('estado', $user->cliente->estado) == 'RO'): ?> selected <?php endif; ?>>Rondônia
                                    </option>
                                    <option value="RR" <?php if(old('estado', $user->cliente->estado) == 'RR'): ?> selected <?php endif; ?>>Roraima
                                    </option>
                                    <option value="SC" <?php if(old('estado', $user->cliente->estado) == 'SC'): ?> selected <?php endif; ?>>Santa
                                        Catarina</option>
                                    <option value="SP" <?php if(old('estado', $user->cliente->estado) == 'SP'): ?> selected <?php endif; ?>>São Paulo
                                    </option>
                                    <option value="SE" <?php if(old('estado', $user->cliente->estado) == 'SE'): ?> selected <?php endif; ?>>Sergipe
                                    </option>
                                    <option value="TO" <?php if(old('estado', $user->cliente->estado) == 'TO'): ?> selected <?php endif; ?>>Tocantins
                                    </option>
                                    <option value="EX" <?php if(old('estado', $user->cliente->estado) == 'EX'): ?> selected <?php endif; ?>>Estrangeiro
                                    </option>
                                </select>
                                <?php $__errorArgs = ['estado'];
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
                            <!-- Logradouro -->
                            <div class="mb-3 pb-2">
                                <label for="cidade" class="form-label text-green fw-500 fs-18px">
                                    Cidade
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['cidade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="cidade" value="<?php echo e(old('cidade', $user->cliente->cidade)); ?>" id="cidade"
                                    placeholder="Guarulhos" required />
                                <?php $__errorArgs = ['cidade'];
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
                            <!-- Logradouro -->
                            <div class="mb-3 pb-2">
                                <label for="logradouro" class="form-label text-green fw-500 fs-18px">
                                    Logradouro
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['logradouro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="logradouro" value="<?php echo e(old('logradouro', $user->cliente->logradouro)); ?>"
                                    id="logradouro" placeholder="Rua Brasil" required />
                                <?php $__errorArgs = ['logradouro'];
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
                            <!-- Número -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="num_endereco" class="form-label text-green fw-500 fs-18px">
                                    Número
                                </label>
                                <div class="text-green p-1 fs-18px "
                                    style="position: absolute; top: 43px; right: 13px; background: #E6F2F1">
                                    <input class="form-check-input checkbox-custom-circle" type="checkbox"
                                        name="sem_numero_end" value="1" id="sem-numero"
                                        <?php if(old('sem_numero_end', $user->cliente->sem_numero_end)): ?> checked <?php endif; ?> />
                                    <label class="form-check-label" for="sem-numero"> Sem número </label>
                                </div>

                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['num_endereco'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="num_endereco" id="num_endereco" placeholder="10"
                                    value="<?php echo e(old('num_endereco', $user->cliente->num_endereco)); ?>" required />
                                <?php $__errorArgs = ['num_endereco'];
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
                            <!-- complemento -->
                            <div class="mb-3 pb-2">
                                <label for="hospital_proximo" class="form-label text-green fw-500 fs-18px">
                                    Hospital mais próximo
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['hospital_proximo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="hospital_proximo" id="hospital_proximo" placeholder="" maxlength="255" value="<?php echo e(old('hospital_proximo', $user->cliente->hospital_proximo)); ?>" required />
                                <?php $__errorArgs = ['hospital_proximo'];
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
                                <label for="end_hospital" class="form-label text-green fw-500 fs-18px">
                                    Endereço hospital
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['end_hospital'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="end_hospital" id="end_hospital" placeholder="" maxlength="255" value="<?php echo e(old('end_hospital', $user->cliente->end_hospital)); ?>" required/>
                                <?php $__errorArgs = ['end_hospital'];
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


                            <div class="mt-3 pt-3">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-600 btn-submit">
                                    Próximo
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- Pagamento -->
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card <?php if('card desabilitado'): ?> card-form-desabled <?php endif; ?>">
                    <div class="card-body p-3 p-lg-4">


                        <h2 class="fs-4 fw-600 mb-4 text-green-2 pt-2">Pagamento</h2>

                        <form action="#" method="post">

                            <!-- Nome no cartão -->
                            <div class="mb-3 pb-2">
                                <label for="nome_no_cartao" class="form-label text-green fw-500 fs-18px">
                                    Nome no cartão
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['nome_no_cartao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="nome_no_cartao" id="nome_no_cartao"
                                    placeholder="Digite o nome que está no cartão" required />
                                <?php $__errorArgs = ['nome_no_cartao'];
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

                            <!-- Número do cartão -->
                            <div class="mb-3 pb-2 position-relative">
                                <label for="numero_cartao" class="form-label text-green fw-500 fs-18px">
                                    Número do cartão
                                </label>


                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['numero_cartao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="numero_cartao" id="numero_cartao" placeholder="10" value="" required />
                                <?php $__errorArgs = ['numero_cartao'];
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

                            <!-- Validade -->
                            <div class="mb-3 pb-2">
                                <label for="validade" class="form-label text-green fw-500 fs-18px">
                                    Validade
                                </label>
                                <input type="month"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['validade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="validade" id="validade" placeholder="" min="<?php echo e(date('Y-m')); ?>" required />
                                <?php $__errorArgs = ['validade'];
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
                            <!-- cvv -->
                            <div class="mb-3 pb-2">
                                <label for="cvv" class="form-label text-green fw-500 fs-18px">
                                    CVV
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['cvv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="cvv" id="cvv" placeholder="123" required />
                                <?php $__errorArgs = ['cvv'];
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
                            <!-- CNPJ ou CPF -->
                            <div class="mb-3 pb-2">
                                <label for="cnpj_cpf_cartao" class="form-label text-green fw-500 fs-18px">
                                    CPF ou CNPJ
                                </label>
                                <input type="text"
                                    class="form-control form-control-custom fs-18px fw-500 <?php $__errorArgs = ['cnpj_cpf_cartao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="cnpj_cpf_cartao" value="" id="cnpj_cpf_cartao"
                                    placeholder="000.000.000-00" required />
                                <?php $__errorArgs = ['cnpj_cpf_cartao'];
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

                            <div class="pt-4 pb-1"></div>

                            <div class="pt-5 mt-5">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-600 btn-submit">
                                    Cadastrar
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    <!-- imask -->
    <script src="https://unpkg.com/imask"></script>
    <script>
        function alternarNumeroEndRequerido() {
            if (document.getElementById('sem-numero').checked) {
                document.getElementById('num_endereco').required = false
                document.getElementById('num_endereco').value = ''
                document.getElementById('num_endereco').setAttribute('readonly', 'readonly')
            } else {
                document.getElementById('num_endereco').required = true
                document.getElementById('num_endereco').removeAttribute('readonly')
            }
        }

        document.getElementById('sem-numero').onchange = function() {
            alternarNumeroEndRequerido()
        }
        alternarNumeroEndRequerido()

        /* imask */
        var cnpj = IMask(
            document.getElementById('cnpj'), {
                mask: '00.000.000/0000-00'
            }
        );
        var num_endereco = IMask(
            document.getElementById('num_endereco'), {
                mask: '0000000000'
            }
        );
        var telefone_comercial = IMask(
            document.getElementById('telefone_comercial'), {
                mask: [{
                        mask: '(00) 00000-0000'
                    },
                    {
                        mask: '0000000000000000000'
                    }
                ]
            }
        );

        var cep = IMask(document.getElementById('cep'), {
            mask: [{
                    mask: '00000-000'
                },
                {
                    mask: '00.000-000'
                }
            ]
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/admin/clientes/create_endereco.blade.php ENDPATH**/ ?>