<?php $__env->startSection('title', 'Início'); ?>
<?php $__env->startSection('content'); ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['farmacia','adminFarmacia'])): ?>
        <div class="row gy-4 graficos">

            <div class="col-12 col-xl-8">

                <div class="row gy-4">

                    <div class="col-12">
                        <!-- Relatórios (resumo) -->
                        <div class="card">
                            <div class="card-body px-2 px-lg-4 py-4">

                                <div
                                    class="text-center text-md-start d-md-flex justify-content-between gap-3 align-items-center">
                                    <h2 class="fs-24px fw-600 text-green-2 ">Relatórios <span class="fw-400">(resumo)</span></h2>
                                    <div class="">
                                        <div class="">
                                            <a class="btn btn-light bg-white shadow-sm border text-green fw-600 text-green "
                                                href="<?php echo e(route('painel.farmacia.graficos.index')); ?>">
                                                Ver mais
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="overflow-hidden">
                                    <div class="d-lg-flex align-items-center pb-4" style="margin-top: -35px">
                                        <div class="grafico-w35" style="">
                                            <?php echo $mapaClientes->container(); ?>

                                        </div>
                                        <div class="grafico-w65" style="">
                                            <?php echo $faturamento->container(); ?>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <!-- Clientes cadastrados -->
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-body px-0 px-md-2 py-4">

                                <div class="text-center px-3">
                                    <h2 class="fs-24px fw-600 text-green-2 ">Clientes cadastrados</h2>
                                </div>

                                <!-- pesquisa -->
                                <div class="mt-4 px-3">
                                    <div class="mb-3 position-relative">
                                        <label for="pesquisa-ass" class="visually-hidden">Pesquisar</label>
                                        <input type="text" class="form-control input-pesquisar-cliente" name=""
                                            id="pesquisa" placeholder="Pesquisar" />

                                        <button type="submit" class="btn btn-none text-green p-1"
                                            style="position: absolute; top:3px; right: 20px">
                                            <i data-feather="search"></i>
                                        </button>

                                    </div>

                                </div>

                                <div class="position-relative">
                                    <!-- Lista -->
                                    <div class="mt-2 lista-scroll p-3 clientes-lista-assinantes resultBusca">

                                        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="d-flex gap-2 justify-content-between mb-3 fs-18px text-green-2 fw-600">
                                                <div class="">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-ver-cliente-<?php echo e($cliente->id); ?>"
                                                        class="text-green-2 text-decoration-none">
                                                        <?php echo e($cliente->nome); ?>

                                                    </a>
                                                </div>
                                                <div class=""><?php echo e($cliente->telefone); ?></div>
                                            </div>

                                            <div class="modal  modal-custom fade" id="modal-ver-cliente-<?php echo e($cliente->id); ?>" tabindex="-1"
                                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal border-0"
                                                        role="document" style="width: 480px !important">
                                                        <div class="modal-content bg-transparent ">
                                                            <div class="modal-body p-lg-5 pb-lg-3  border-0">

                                                                <div class=" p-4 shadow rounded-3  bg-white border">

                                                                    <!-- dados -->
                                                                    <div class="mb-3">
                                                                        <div class="d-flex align-items-center p-3 rounded-3 px-4 w-100"
                                                                            style="border: 1px solid #B2D2D2">
                                                                            <!-- icon -->
                                                                            <div class="">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="66" height="66"
                                                                                    viewBox="0 0 66 66" fill="none">
                                                                                    <path
                                                                                        d="M33 65C50.6731 65 65 50.6731 65 33C65 15.3269 50.6731 1 33 1C15.3269 1 1 15.3269 1 33C1 50.6731 15.3269 65 33 65Z"
                                                                                        fill="#D9D9D9" />
                                                                                    <path
                                                                                        d="M33 65C50.6731 65 65 50.6731 65 33C65 15.3269 50.6731 1 33 1C15.3269 1 1 15.3269 1 33C1 50.6731 15.3269 65 33 65Z"
                                                                                        fill="url(#pattern0)" />
                                                                                    <path
                                                                                        d="M33 65C50.6731 65 65 50.6731 65 33C65 15.3269 50.6731 1 33 1C15.3269 1 1 15.3269 1 33C1 50.6731 15.3269 65 33 65Z"
                                                                                        stroke="#00B1AC" stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <defs>
                                                                                        <pattern id="pattern0"
                                                                                            patternContentUnits="objectBoundingBox"
                                                                                            width="1" height="1">
                                                                                            <use xlink:href="#image0_81_1486"
                                                                                                transform="translate(-0.532531 -0.1875) scale(0.00170807)" />
                                                                                        </pattern>
                                                                                        <image id="image0_81_1486" width="1209"
                                                                                            height="805"
                                                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABLkAAAMlCAIAAAAQWrYsAAAgAElEQVR4AezdW5Bd1Zkf8HNOdwtikNQC+yUzIC6Th4lBEpCkKhl0wU6lkgxCHpykKjOABJPJiwMYO6lKPAJJOC+JzW0y8zRGEiLJQ2IQJk8ZowuepJIZgxBMpZIYkMCTSsVjXXE8Qd3nkrI+z+fF6tbR6VYLdff59UN7rX322Xuv31qU+6+19t6Nnh8CBAgQIECAAAECBAgQIPBRgcZHq2oECBAgQIAAAQIECBAgQKAnKxoEBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAAAECBAgQIECAQC0gK9Yi6gQIECBAgAABAgQIECAgKxoDBAgQIECAAAECBAgQIFALyIq1iDoBAgQIECBAgAABAgQIyIrGAAECBAgQIECAAAECBAjUArJiLaJOgAABAgQIECBAgAABArKiMUCAAAECBAgQIECAAAECtYCsWIuoEyBAgAABAgQIECBAgICsaAwQIECAwAIQ6J796XQ6vV6v3W7HFU9OTkYhtsTvbrfb6/Vi//gd1V6v1+l0jh49euDAgZdeemn79u2PPvrotm3bNm7c+NnPfnbdunXrP/rz2GOPbTv789xzz+3bt+/gwYN53tIrT1duzDPGxtgnLr76qPqWKgECBAgQmD8CsuL86QtXQoAAAQLTCEQgjKDV7XY7nU6Z2bJcxsiJiYk40OHDh3ft2vXoo4+uX7/+53/+55csWdIofi677LJGozEyMlJs+1kxdm42m41Go9VqxZ6f+MQn7rjjjgcffPDJJ588ePBgXNuHH34Yp8s0mNUqrPZ6vcy30zTVJgIECBAgMJ8EZMX51BuuhQABAgTOIVBN30U19m2325Eho7pv375//s//+fr165cuXRoxL/Le2NhYVCP4NRqN2J7psNVqVVsySbbO/pShMQ6yZMmSm2666ctf/vKLL7548uTJmPPMcFtGx7JsavEcnWwzAQIECMwvAVlxfvWHqyFAgACBSiBzYKfTiYiYa01zUvHUqVN79uzZtGnT8uXLM+A1Go3R0dGMglHIoBiF2KHZbE4bFGPiMVNl+ZXcmAGy0WisXr36ySef/B//43/ExGbkw4y13W63irVVS1UJECBAgMC8EpAV51V3uBgCBAgQOKdAGb2ifPLkyeeff37VqlWR4iLvZRrMxaWjo6ORBsvcWE4hVuXm2Z8yDZaBsJqcLCNonnrlypUPPvjg66+/no0p02PcOZkfKRAgQIAAgfkpICvOz35xVQQIECDwM4GcmouJxHa7vXfv3s997nNlRMzMFsEvg2KZA2Of/CijXWbITIlTt+TO5QGbzebY2Fh8FNtzt5jV/It/8S8+88wzx44dy8Z0zv5kVYEAAQIECMxbAVlx3naNCyNAgACBnwhEUIybAE+fPr1t27brrrsuItnIyEhms5GzPzEZGLEtQ13cqVjmwJGRkfy0nD/Mo5XHyR3yK61WKwNnZtT8bvlRPCDnk5/85D333PPaa69Vdy3qYAIECBAgMJ8FZMX53DuujQABAgR+KnD06NHNmzfH7YiRyqpslkGu/+RhGeQyBJaziJn9yuOUB8/z5rfKYJnHj4BanqLVat1+++0HDhyQGA1rAgQIEFgQArLigugmF0mAAIFFJZBvkog1pWV2qj7q9XpHjx697777IoNFTiuTWxnY5m25uuDPfvazBw4cyCnT6NpseFZzh1yCu6gGgcYQIECAwLwXkBXnfRe5QAIECCw6gXz/YbYsb0Qsc9GxY8c2b94cCbBcQVqW520+zAuLq424ODo6mgtib7/99t///d+P12ykQxYiP+ejX0uW3EeBAAECBAhcVAFZ8aLyOjgBAgQI1AIZC+ODMjdGIoodtm7devXVV0fiymWfeVNiJrGFUsi1qXnB0ahNmzYdOXKkMgqHzIflvGu1pyoBAgQIELh4ArLixbN1ZAIECBDoJxCPq4kXSEQ+jPJLL710/fXXR6aK111UE4lTX4CRAWweFqIJcWHNZrMKjTHNuG3btnyNZJC12+3wabfbsmK/YeQzAgQIELhoArLiRaN1YAIECBA4h0DemxcRMd89+H//7/+98847Y8Kt1Wrlcs0MWvFuwypuzcN8WF1SGW7LexejpdGcX/iFX/i93/u9aklqRuicYzyHqM0ECBAgQGDuBWTFuTd1RAIECBAYUKBcgPriiy+Oj49XKat8jmiZuKbuNm+35ALaLETijdBYbXzkkUdOnz5dJcZ8yM2AqnYjQIAAAQJzIiArzgmjgxAgQIDADATK9ZbtdvvkyZOf+9znRkdHI0TFW+wj+2WgikKs4VyIobHKhGXryjzcaDRWrlx5+PDhWI6bpuYVk0KBAAECBD42AVnxY6N2IgIECBD4qUD57JYDBw6sXLmynBXMWFhuXNDlaFE5nZhxNz/KnBxbHnvssYiLUqL/bAgQIEDgUgnIipdK3nkJECAwRAJT3/0Qd+I99dRT5SzijAJhztTFk2/Kahwnn4gTH8XvWd/rWE57Tj1IdfaszqhFedlR2LBhww9/+MNIjPl4m6mFIRpGmkqAAAECH6+ArPjxejsbAQIEhkZgaqqJR9p8+OGHvV7v9OnTmzZtyihVTq/lxvMWRkZGIpXl1yPFVekxk1vuVhbi04x/rVYry5ljc//ykkZGRsrtrbM/uSVnDsuvDFjOV4PceOONr732WgyZ9DTfODT/DWkoAQIELrGArHiJO8DpCRAgsLgFYgllPs8zGvvuu++uXr06Vl1WUW3ANFXulvEsNrZarXJLlON3frR69eq1a9c+8sgj27Zte/TRR7dv375v375XX3113759Bw4c+PrXv75jx47HHnts27Ztt99++4YNG+KhO5khc8YyD1teTzy+NS+m/GiQcobMOPjSpUtfeOGFHCT5opF44E0ZIHMfBQIECBAgMCcCsuKcMDoIAQIECNQCkRIzzOR7Al9//fWlS5eWKSuWdw6So8p9qsCW9/vFPhkLR0dHr7jiil/5lV/Zvn37K6+88s477+SFTk5O5ts7YmPeHBiXXTbh5MmT+/bte/rppzdv3rxy5co4fr7VI5pTXt7Y2FjOZ5bbz1vOQ5VzpDt37oyLKX+nbbZIgQABAgQIzKGArDiHmA5FgAABAj8TyCQTk4rx+9vf/vayZctygq7RaJTl8+aoaof8bhYyIo6MjGzcuPHJJ5984403qim4TqdTzXNmRIyrb7fbuWXaPTudzp/8yZ/823/7b//+3//7V199dVxVpt+IiBn5qmsepJrNKVP0fffdF5eXsD+zViJAgAABAhdBQFa8CKgOSYAAAQJnBWLBZOaunTt35j1+mayiMItklbN2mayicNdddz333HN/8id/kq8lzAsorydmFOOjKGcsjDCWqz3LajkPeebMmejn7373u4888kisU83mZGGQcFjuE62oQGISdfPmzXHGbrcblyc3+k+NAAECBC6egKx48WwdmQABAkMtEDEmn4D6jW98IxNRBKELv1OxfA7NbbfdtmvXruPHjwd6+QrHvIZMVmVQnNpJGQgnJyfzu+VkYzVRmUd48cUX77zzziVLlkRLL7/88mzyjApjY2NTo2ZsybiYJ1UgQIAAAQIXSUBWvEiwDkuAAAECvZyp+8Y3vpEzivHq+TIu5p2HMwpUOa+4cePG73znO3muajoxJxWjEHFxYmIiuqf6NBNmbo/dqkm8DJDlbll+++23v/rVry5fvry6hXJGrcvvRjPjd0Ddd999mcMNMgIECBAgcPEEZMWLZ+vIBAgQGDqBnLiLQkzQ7dmzJ2NSRMSsVoWMf7lbVcjgFIVf//Vff/vttzMc5qrRS+KeWTEKP/jBD7761a8uW7Ys2xhtyRZlY3MN7Xkzc96NGbOLecZobzY/e+GSODgpAQIECCwaAVlx0XSlhhAgQODSCMSEXuSWMqXElhdeeCHCUjmvmPGpLGSIKiNTlPOjmJNsNBpr1679/ve//6d/+qfR5vkZk7rd7okTJ7Zv356JMRuSqS+3ZKE0KcuZkyNbbtmyZdqlsHEXZdkRl2ZYOCsBAgQILHwBWXHh96EWECBA4FILRFSLhZ1RjqD45ptvLlu27LwpKBJR7JaRspxty8eltlqt1atXv/LKK/E++pxRnFr9+Ely/WpcVa6J7XQ677333ubNm7MVCZJvYsw5xiyUKTF90iS++Nhjj2UzY1lszjRmIXdQIECAAAECMxWQFWcqZn8CBAgQ+IhAzullYItJrffff//KK69sNBqjo6ORjjIjTQ1COWGYH0Uuiq/EqyM+9alPbd26Nc8SF5GRLG9B/MjFXYpKmdMCJ97S8eqrr1533XXZwNSIfNhsNjMK5j5TCxkv4+vPPvtsCRKnTpNL0XrnJECAAIHFIyArLp6+1BICBAhcQoHypYXdbvfUqVM33XRTFWymBsIqC8WK0/xW7B8Jat26dUeOHOl0OpEJM4/Nn8WWeUnRC3lhmdwmJyd/8IMf/ON//I8jP+fvROgzqZj7RCGCYuz/5ptv9no/fYxQ5vbqYi7hwHBqAgQIEFi4ArLiwu07V06AAIH5IpDLL/MBoXfddVc1bzZ4EIo9czay0WjEYsvMPxHDsporUfNdF5fWJS+sfDNHJMb46ODBgytXrszU1zr7k9UqFpbVeBtH+OQdjytWrDh16lQiVO/2uLQUzk6AAAECC1pAVlzQ3efiCRAgMF8EMiD1er3t27dHnslFlbGINH6X4acsZ7ZsNpsZLP/CX/gLf/RHf5Svns80WBYyoF5ai5w/zGsrV5C+OR8AACAASURBVIdOnXf93Oc+lz6NRqOcTS1Zspwm4RNc8Xv16tWRFXMys+yOS8vi7AQIECCwcAVkxYXbd66cAAEC80IgM1JEo+985zvlWtNMgBEUy3SUKehchTvuuOPEiRMZezIIRbNje35aXsalcimvsCyXFxzb47IfffTRALn88sunLkmdliU982mxcYQvfvGLcZap571UGs5LgAABAgtdQFZc6D3o+gkQIDAvBCL8nDhxYpAHn0bOydyY+SdXY7ZarQceeGBxx55o3b/7d//uU5/6VBULAyRXmVafVtXYeWRk5KWXXsrAnBF6XgwOF0GAAAECC1NAVlyY/eaqCRAgMC8FfvmXf7mcVKxSTVmNoBiTjZkVc4c9e/bEewIXd+aJR9H84R/+4dKlS/NlIYGQJrH0NKtJVBYCc8WKFT/60Y/yxsV5OUBcFAECBAgsJAFZcSH1lmslQIDAPBTIOPfEE0+MjIzkbXVlmCnLEXty0iyqY2NjEZZarVa8B6K82W8etvrCLynnAHu93uHDh6+99tpqojUkqwxZSkY5Y2Sr1Vq3bl152Au/SEcgQIAAgWEWkBWHufe1nQABAnMm8D//5/+8+uqrI71kDpwabMp4E9Go2nn37t3l0tPFnXzyKTidTufUqVOrVq1qNBoREcvInbcmnsuzvNfx6aefXvQxe85GrQMRIECAQF8BWbEvjw8JECBAYDCBX/mVXykTS59Uk/OK5WrVSIx79uyJZZmLOyJOFY1HuWZczLnEZrMZz0fNycNpYePTeMvI0qVLT548OfUUthAgQIAAgZkKyIozFbM/AQIECHxEoNPpvPjii/nKh8gtg2Sb2Ccm0JrNZiw9zRWt8Z7ArH7klIulEq2LYBxzjG+99dby5curQNgfM3ZOzJGRkU2bNpVzs4tFSzsIECBA4OMWkBU/bnHnI0CAwCITOHXq1LXXXpvxJkNLbpm2kPfmxarLnTt35srJmFqMtLOIM0/ZtJxH7XQ6b7zxxvj4eL5xMRaglktSK89cs1pGyoMHDy6yYaY5BAgQIPDxC8iKH7+5MxIgQGBRCWzdujXXTFYxZtpqvEo+F6C2Wq177703RPL+vZhwW9yTivHA0mxjxsVer/fKK69kApzWsNwYEbH83Wq1Vq5cuagGmcYQIECAwKUQkBUvhbpzEiBAYGEKxIxfGW+OHj0a73so00v/cr5EMULj7bffvjAxLuJVT05OPvfcc/lIm3IOtr9t+emuXbvyEjOIZt/lRwoECBAgQOBcArLiuWRsJ0CAAIFpBMqVk71eb/PmzZlkMttkoYwuU8utVuvP//k//8EHH1THnOasw7Qp4ly327333ntz9jWRpzKea8v4+PjJkydzqrbX601MTAwTpLYSIECAwIUKyIoXKuj7BAgQGBKBTqeTT2GJ53YePXq0DCrl/XLl9qpcrq78oz/6ozimuFiOooiLp0+fXrNmTd64WDEOUt26dWuudCVcCisTIECAwCACsuIgSvYhQIAAgZ8IRK6L6alut7tly5ZILANOJMbO+ULFJ554IlgtjJw6vCKNv/7661ddddUgsXDqPq1W64orrjh16lR5cImx1FAmQIAAgf4CsmJ/H58SIECAwE8FclIx6keOHMkVkuWMYuTGcsvUGNNoNDZs2NDr9SYnJyO9iIvlOAvq2PK1r32t0WjMYg1qPGB227Zt8YDZcjFqeS5lAgQIECBwLgFZ8VwythMgQIDANAIR6trt9q//+q9PfZHDgBOMy5YtO3r0aCyPjOlKWTGtO2d/IkgHy4YNG6bN2/03RlxfunRpPJEotM0rprMCAQIECJxXQFY8L5EdCBAgQOCnApno3n333Zi2iriSs4hZ6B9jnnrqqThiTHZlmAFdCUS0O3LkSLxxsb9q9Wn0RavV2r17d8by6viqBAgQIECgj4Cs2AfHRwQIECAwjUCn09mxY0dEkfJ3Lkntv2ZyzZo1EYHK1aflqstpTjlMm3KxaCbzbre7ffv2KgqetxrLVpvN5jXXXBPLUIdJUVsJECBAYA4EZMU5QHQIAgQIDIlApJdut3v11VdHVukzkZgrVHOCK76yb9++qVlxSAAvpJkrV66MNN7HvAyQuVur1dq/f/+FnNp3CRAgQGA4BWTF4ex3rSZAgMCMBXK+a/fu3ZFJMg2WEaUqj5z9iY3NZnPLli0RFNvtds6bzfhShvILO3fuvOyyy3LyNqNgBV5W8/bRX/u1XxtKM40mQIAAgQsSkBUviM+XCRAgMIQCf+tv/a0lS5acN6s0m83y6Z3NZrPVar377rv57g0LI2c6eG6//fZgD9hBsnrsf8UVV/yf//N/Zno6+xMgQIDAkAvIikM+ADSfAAECMxDodrvvvvvukiVLcp5wwMQYqea+++7L9zeUj+Vst9sx2TiDSxnKXQ8ePFg+UmhsbKyPf04qxj6//du/nTPDQ4mn0QQIECAwYwFZccZkvkCAAIHhFOh0Ou12+5lnnomgODIy0n9eq/y01WqNjo4eOXIk153mmyGGE3N2re52u5/5zGfCf3R0NNejlutOy3I5r7t69epOp5P+s7sA3yJAgACBoRKQFYequzWWAAECFypw880352NO+0xqRWIpd9i8eXOcu4orExMT3ugwSK+E265du0I1pg1L4TIlRjmzYuz2/e9/f5AT2YcAAQIECISArGgkECBAgMBAAp1O5+jRoxFCYs4wpramRpTcUt6y+Oabb1Yvxiir1qAO1Ae93uTk5HXXXZfC/QuZJKPwxBNPDHgWuxEgQIAAgV6vJysaBgQIECAwqMBTTz3VaDQiIpZLTKdNLBlUWq3W6tWrp04eRj7sdruC4iAdkHcbPvHEE4F/3i4ob25sNptr1qwZ5ET2IUCAAAECISArGgkECBAgML1AzPtlROn1enfeeWckwMGzSuy/e/fuyclJDz6dHnomWzudzunTp/O5NdOm9NhY9lH0wsjIyIkTJyK0l92qX2bSA/YlQIDAEAnIikPU2ZpKgACBQQRioi/vKszZv4mJiXi/X9wFN8izVSKuXH311ceOHStflTHIZdinEsjZ18nJyU2bNjUajXwgbZ/EGM+/yRsXn3/++TxsxEUPvEkQBQIECBCoBGTFCkSVAAECBH4iEMkk80mv13v55Zczk0QIzFWmub0qxA5btmxhOrcCe/fuDeroiIo9q9WnrVbrnnvumbZz5/byHI0AAQIEFoeArLg4+lErCBAgMGcCufQ07zCMLY8++ujI2Z98DmrOVmU4qQqRVV5++eXe2Yey5AHn7FqH70CZ3pcvX37eZwtVkb7Vaq1cubKaMR4+Qi0mQIAAgUEFZMVBpexHgACBYRPIUHHmzJler3fHHXeUL/Q77y1zkSSXLVvW7XbjxRiZc4ZNcq7am4Ddbvfee++tknlVrWZ9s3r06NHs2VwYXG6Zq6t1HAIECBBY6AKy4kLvQddPgACBuRfo/NlPHrrT6ZQP1axiSZ/q3XffHQdpt9sZdfKwCoMLRJzrdrsh+W/+zb/pw56dlRExCs1mc+/eveUEb3SKrhm8I+xJgACB4RGQFYenr7WUAAECgwqUs0zxBJSDBw9GMmk2m+XKxuqOuDK9xEe7d++OecU4ZkwwDnod9isEytdR9nq9H/7wh61WK6NgKV+WW2d/yi1bt26No8ZTbcq+Ls6mSIAAAQIEvF/RGCBAgACBcwvkdNOTTz553lhSBpIoj4yMHDlyJA7vPYrnZh70k5wDjIB38803TzXPLblIOGcUY8sdd9xRxs6YqBz0CuxHgAABAsMkYF5xmHpbWwkQIDCAQE40RTKJLPGlL30pQ8jghWuuuSZjSR52gEuwy/QCVVZ8+OGHZxHgly1bVq5BbbfbumZ6blsJECAw9AKy4tAPAQAECBD4qECZHCYnJ6P6V//qXx08IsaezWYz3pYR604zNH70bGozEGif/ckvfPOb35xppzQajdHR0XjdZdnROYGcB1cgQIAAAQKyojFAgAABArVAlRwmJibGx8dnEUuefPLJfNJmvNavzCf1WdX7CpR07XZ7cnLyf//v/z2LTmk0Gv/5P//nycnJPFt55NyoQIAAAQIEZEVjgAABAgQ+IpALHTudTkwGdjqdPs+wOVdcGRkZeeWVV+Jo0shHiGdVScNM8p1OZ/ny5efy77N9165dmRXdrzir3vAlAgQIDIWArDgU3ayRBAgQmIVAZJKJiYnf//3f7xM8+nx06tSpPK81qEkx60LExeiXeHPGhg0b+vhP+1Gz2dyxY0dcQ3ZKBtFZX5svEiBAgMDiE5AVF1+fahEBAgQuSCBjQz65dN++fSMjI9MGjz4bx8fH4zpyHqx8pMoFXeJQfjn7pWz9Qw891KcLzvXRvffeGweZ9pjl8ZUJECBAYJgFZMVh7n1tJ0CAwPQCke4ySDzxxBPnSh19tq9fvz6PU8bF6U9p62AC8brL6JozZ848/vjjfbrgXB995jOfyTWo8ZbFwU5uLwIECBAYLgFZcbj6W2sJECAwoECZ7rZv336u1NFn+6ZNm+J5NnHGWO6Y+XPAy7BbKRABL+JibN+3b1+fLpj2o2azuXbt2mqOt+zu8ozKBAgQIDDMArLiMPe+thMgQOCcAhEe4vfWrVunTR39N27bti2OXh7qnOfzwUwEInK32+1XX321fy+c69OZnM2+BAgQIDCkArLikHa8ZhMgQKCPQESRzHh/9+/+3XNFjj7bt27dWj46JdY6mlfsw97/o6SLQvw+evRony7o81H/c/mUAAECBAj0ej1Z0TAgQIAAgVogckhkxXa7vXbt2maz2Sd4TPvR7/zO77Tb7fL+uvo06jMRqLJi9M7k5OS0+OfdOJMz25cAAQIEhlRAVhzSjtdsAgQIDCjQ7XY3bNgwi6z47W9/O2+Ky/CZgWfAs9utFEjGhP3JP/rO6qc8rDIBAgQIEJhWQFaclsVGAgQIDLtAxJJYRPqZz3xmFnnk4MGD+RQWEXFOxlOZFfO5QbPomkbD//vPSYc4CAECBBa5gP+3WOQdrHkECBCYhUBGuyjcfvvtswgkBw4cyFPHgslyNiw/UhhQoAzepecsukZWHNDcbgQIEBhyAVlxyAeA5hMgQGAagYiImRhvv/32Vqs100yyf//+OEIGm2nOZNPAAtkdVeSeab/E/gOf1o4ECBAgMLwCsuLw9r2WEyBAYFqBzCRRiPsVZxFI9u/fXx4/p8XKjcozFcjeycQ4i64xrzhTdvsTIEBgOAVkxeHsd60mQIDADATWr18/i0Cyf//+nFHM2FlGnRlcgV17vcBM0k6nE3eTzrRrYoo4O6Jz9gcwAQIECBCYKiArTjWxhQABAsMukDkkChs2bJhpIGk0Gi+//HKv1ytfsTjsrHPR/vSMg3U6nVl0Tc4rZmLMwlxco2MQIECAwCIRkBUXSUdqBgECBOZcIGPJ2rVrZxFItm/fPjk5mVcVaaTckh8pDCiQet1ud2JiotfrnTp1ahZdMzo62u12Y4pSShwQ324ECBAYQgFZcQg7XZMJECDQTyDCQwTFiBNf+MIXRkdHZ5pJHnvssbynriz0O7fPBhDodDrZRwcPHpxpv8T+cZ7o34idA5zZLgQIECAwXAKy4nD1t9YSIEDgvAKZQ3q9Xkxk7dixYxaB5KGHHsqImHfZnffsdjiXQM4Exg5Bum/fvll0zfXXX59dUxbOdWrbCRAgQGA4BWTF4ex3rSZAgEA/gTIu9nq9xx9/fBaBZMOGDbmKNQrdbje39Du9z/oKRO/0zj7t5sknn5xp1zSbzbVr12ZHxD8H5DH7ntmHBAgQIDBcArLicPW31hIgQGAQgfbZn9iz2+3u3bt3ZGRkppnk5ptvjjyTZzS7mBSzLmSoC8zHHntspv3SaDTuuOOOuIBcfaprZt0jvkiAAIFFLCArLuLO1TQCBAhcqEAkk/37988ikDSbzfh6xpsLvZrh/n7JmLCbNm2aade0Wq2tW7f2er0zZ87EAtTyyMNtrPUECBAg8BEBWfEjHCoECBAg0D37k1OC3W73f/2v/xWBZKazi4cOHcrjgL1AgUx0MQcYa0dXr14906zYaDR27NhRPlI1j3yBV+jrBAgQILDIBGTFRdahmkOAAIE5EMjwELHkzJkzY2NjzWazjCXNZvO80XHXrl1xNXHAPOwcXOKwHqIybLVaZacMUm42mwcOHMgHF1l9OqxDSbsJECBwfgFZ8fxG9iBAgMAwC0Q4+cVf/MXMIZlPqvSYO2Th4YcfznnFnK4cZswLafvUUHfgwIGknlHh0KFD0a05uzj14Bdyqb5LgAABAotDQFZcHP2oFQQIEJgzgUgROX8Vd7V9/vOfn1EaiZ1/6Zd+KV/JkA/enLMLHbIDlf0S0e7rX/965vbBe6fVapWH6vV6+YSbIRPVXAIECBA4j4CseB4gHxMgQGAIBXKWKRPj1q1bm81mJpOy3CelXHbZZRE1c/4qDziEqhfe5Erv7rvv7oN/ro9uuummnOzNAF8d+cIv1REIECBAYBEIyIqLoBM1gQABAnMsEMmhzA/5zvfzrjutIsqrr77a6/Uyk8zxhQ7Z4SLDR7+02+2lS5dmeq/Y+1Tvv//+ycnJsovNKw7ZONJcAgQIDCogKw4qZT8CBAgMiUCkiM7Zn1hBOjk5+aMf/Wh0dDQSSJlP+j/eZnR09MEHH4yEIy5e4Pgp0123233zzTfHxsb6ZMJzffTEE0/klXQ6Hf2SGgoECBAgUAnIihWIKgECBIZdIDJJKOTa0U6nc80110RczKnFLEwbS+LTW2+9VRqZqyGVa4N7vd6jjz7a33/aTmk0Gm+88Ub+Q0BcWNnjc3WpjkOAAAECi0BAVlwEnagJBAgQ+DgE7r///ogfrVYrUkrONJ4rlsT29957r9vtZuz8OK51MZ6jSnS33HJLo9HoExfjo5j4Lad/F6ONNhEgQIDARRGQFS8Kq4MSIEBg8Qn87u/+7ujoaC5AjcIgWeVf/It/kRrlzFhuVBhQIOLi5OTk+++/32g0ygR4rrie/dVsNkdHR9evXz/guexGgAABAgRkRWOAAAECBAYSOHLkSE5kRQLJHHKuoBJJ8vrrr4+XK1qMOhD0uXfqdDoRFx999NFzmU/dXnbTk08+ee7D+4QAAQIECHxEQFb8CIcKAQIECPQRuPHGG3M6K3JgmUOmppS8v/HQoUN9DuujGQl0u91rr712yZIljUajv3/0SDn3++abb87oXHYmQIAAgWEWkBWHufe1nQABAjMT+Ef/6B9F/IiIMkhQianI++67L85kanFm4sXeMaPYbrdfffXVshemRvTckikxemrlypXWABeiigQIECBwHgFZ8TxAPiZAgACBFHjppZcidcTNb5lJpi3kI3AajcaVV1558uTJPI7CLAQyZt95550RAjMKTusfKT37q9Fo3HvvvbM4r68QIECAwNAKyIpD2/UaToAAgZkJxD2Hy5YtKx9/2v/xKiMjI5lnfuu3fsuk1szEp9v7e9/7XqPRyMW9/f3LRaqtVus//If/4Gm006HaRoAAAQLTC8iK07vYSoAAAQKVQKyBvOeeeyKfNJvN/kElV6jGBOPP/dzPVQdUnanA5OTkP/gH/yAmDDOEn2tSseydZrO5fPlyWX2m4PYnQIDAkAvIikM+ADSfAAECMxBot9svv/xyhJOMgufKKvkUnMyWO3fujJPlux96vV673Y7qDK5jUe+aDzsNlvL3sWPHygR43i5oNpu5z+bNm3u9HupFPXY0jgABAnMsICvOMajDESBAYBELRNK4/vrrM4GU0WXa0Bg7xP433nhjNbWVQajavogNB2laaFTrRbvd7he/+MVEPu+8Yu4Z+K+99togp7YPAQIECBBIAVkxKRQIECBAoJ9APlslX+7XPyhGRIlIk9lyz549cY4IQiLiVPG4LzS2Z7nT6bzzzjuXX3553ILYarUCv38X5NTu9ddfb1JxKrUtBAgQINBfQFbs7+NTAgQIEPiZQEwDvvvuu/Fyv/LRKTmLVRYiKI6NjUVWbLVay5cvP3HixM+OeHYNqhhTguQy0ZxX/NM//dNer/fAAw/EU20GnFHMG0qXLFnyxBNPZNQvz6VMgAABAgT6CMiKfXB8RIAAAQK1QCSZjRs35pxVGQ77lPPpqY8++miv14sgVP6uzzTc9XJGsdfr/cf/+B/LZF7N1k7L3jz7E/n82LFjw82p9QQIECAwGwFZcTZqvkOAAIHhFIi5qU6ns3///vL1iefKKq2zP/FprJYcHR0dGRn5wz/8wwTM2bPcolAFxV6vd+utt5YPqsngPa18tTFfq5iHJUyAAAECBAYRkBUHUbIPAQIECPx0JjDXi15//fVVJplajamtnBAbGxuLfT772c/2er2JiYlgdddiObxyDWr6PPPMM/GejHyz4iCvzYi5x9HR0bfffjueN5t9V55OmQABAgQInEtAVjyXjO0ECBAgUAt0Op2YWux2u7t27coQODUlllumff7KE088EdElD1ifbFjrmRUD4MiRI+Pj41XqTvnz3rt41113ZVCUFYd1TGk3AQIEZikgK84SztcIECAwtAKZ7q699trIKpFkIhOeN73EDuPj44cPH07DfKlgHDy2V6kpd140hWhg+TumWLPh3W531apVZfCethz++bDZWKEa1e985zumbRfNgNEQAgQIfMwCsuLHDO50BAgQWKgC3W633W5H8Dhz5ky3233++edzbWRZmDbPlBsjzNxyyy3tdjtzUcx6ZbApE9RCJet73dHAztmfcsYv42K32/3qV79auk1bLiN63scYG9evXx9Hy2P2vSIfEiBAgACBjwjIih/hUCFAgACBcwmUeSNm/9rt9g033JDTWZFkYtqw2liGnFxO2Wg0HnjggXwmaobGycnJRR8UAzlIUyATY/AeOHAg15qWgFPL8dibMC/ndQ8cOBAnGhLPcw1d2wkQIEBgdgKy4uzcfIsAAQLDK5ATYr1e75vf/Ga8PKNaBjk1z0zdEpNgO3fuTMrMTpma8qPFV+h2u9neII1HwkZQPHLkyIoVKxKtf/bO3eLhN7Fz5PDyLMOguvjGiRYRIEDgEgrIipcQ36kJECCwwAQyJZbzVHfccUdmlVj6uGTJktwybSFSYsyANZvNN998s9vtfvjhh8FRBqcFBjTzy41J1Ghyr9c7c+ZMr9c7ceLEzTffnJOKoTqtZGysgnrAvvvuu3E5udA3o+nML9M3CBAgQGAYBWTFYex1bSZAgMAsBKqgGEdot9vf/e53IxyWqx/7BJvyfQ8xA7ZixYp33nknZr3K1y3mY1dncbXz/yvV2w7b7Xa2fePGjeVdiBkaz6XabDYzT0YvPPbYYyEQCbx8YtD8l3GFBAgQIDBPBGTFedIRLoMAAQILQyBf+peFXq93zz33xErURqMRL1EcMDfGbs1mc/Xq1SdPnsxFkjEDlrNtC4NmtlcZETGD4pYtWzIcZgjsswY1UmL+bjabK1euPHnyZKmX5bLXZnu9vkeAAAECwyIgKw5LT2snAQIE5kqg0+lEsInZqsnJyQ8++GDZsmWZcM41/ZXbI/lEUMwJtJtvvjniYkyFRbzJkDNXFz9/jlPm4Vh62uv1Nm/enE+UzXx43uAdO+Ts7osvvhjNjFPkpKKgOH9635UQIEBgQQjIiguim1wkAQIE5rvAv//3/z7uQizvRcxwOEih2Wzeeuutx44dK5saaaf8Xb5ZvtxznpczsOXcaa/Xi3ZF8J6YmIgZxUGsqn3KVLlp06Zqdes8l3F5BAgQIDBvBWTFeds1LowAAQILQyACT6/X27hxYwTFKskMWI3Jsdtuu+306dOTk5P54sFQiKyV51pY842ZdaMV8btMdN1u9x/+w3+YM4oDipW7xWszrrjiilOnTpVxdGGMIVdJgAABAvNSQFacl93ioggQILDQBLrd7unTp5cuXVq+tqEMM4OUIy7edNNNP/7xj6v5w4X+7odp13/Gw3u63W7OKJ53uelUxpGRkfzWyy+/nE89XWgjyPUSIECAwLwTkBXnXZe4IAIECCwsgbyxsNvtvvjii4PftTg19sSWsbGxK6644vXXX49VmtXqzbxbcqEo5VxoXHCExmzUqVOnNm3aFA3PpaTnkumzvdls3nvvvXGKTqezsOZdF0pXuk4CBAgMm4CsOGw9rr0ECBCYe4FcVNnr9R555JHZxcUyKY2MjCxduvSll16Ka62eFJp3+s19Sy7OEcs4nWfodrvvvffepz/96XyE7OzcYuXqDTfcEGt38/gKBAgQIEDgAgVkxQsE9HUCBAgMu0A5bxblv/JX/kqfGbA+H+UzUXOfeE9gZK2ci5t2Ped87oZgyUQdzTlw4MD4+Hg0Odubq0lzy3kLkbEPHz6ctylahjqfB4NrI0CAwAISkBUXUGe5VAIECMxfgXxSS7fbfffdd1esWHHekDN1h0hK8TtD1Nq1az/44INYV5m5NHPj/BX5syvL5aB58b1eb+vWrRkLm2d/Zv1gm2azuXPnzjx4zMHmSf/sKvwvAQIECBCYsYCsOGMyXyBAgACBSiCTSSSWTqdz4MCBqVFwkC3xJNWYK8vouGzZsm9961txlur5qNWVzMNqmORc6JEjR9auXZszqJkYIyuWC3EH4Wo0GnmbYrY9c2NuUSBAgAABArMQkBVngeYrBAgQIHB+gWeffbYMQrNIQWVYajabd9999/Hjx/PEER2nxtRcilntkF+8wEJ1xuosUc1pz6hmeHvqqafiUbGz05j6rfXr119gc3ydAAECBAicS0BWPJeM7QQIECBwoQKbN29uNBqXXXZZLrCcxQsYy8B51VVX7d69O9NavEgjq3lDYFx39ZqNC21M8f3MfvGUnbiAWIWbH1U3Db7xxhurV6+Op9dMjXxlKu5TLvVGR0fXrFlz8uTJ4roUCRAgQIDAXArIinOp6VgECBAgkAKRoB544IEISHlXXp8sdK6PIiPlus1b24QwzgAAIABJREFUbrll3759GRHjjBnSyvwWc4x5L2Ve25wUqgvIY5ZX0uv1jhw5Epm52WzmTZhlAD5Xq6vt8d0I3vGc2HKWNc+uQIAAAQIE5kpAVpwrScchQIAAgWkEJicn169fH7GnnBarglCfaszClVEzyuvXrz948GCcMtNgOZcY04yR3M6V66a54vNt6vP2wjhLXEOn0zl9+vSjjz46Pj4+tXWzyIrlQZYuXRoPPj3fxfqcAAECBAjMXkBWnL2dbxIgQIBAH4FchHns2LG/9Jf+UkSd2S2/zBnFMi9Fed26dfv376/euNjtdvPscYXVXF+fyx7ko3a7nQfM6BgPII1n2Lz//vtbt24dHx9vNpvR5MjJ8TvmBqe2pf+WnJa86qqr3nrrrYzHg1ywfQgQIECAwCwEZMVZoPkKAQIECMxAoNvtHj9+/JZbbpldUMx7HSNK5TRjWf30pz/9/PPPl6+LiCwXW+L3DK54sF2nzmG22+3vfOc7seI0l5tWCTBmFM/1abXz1OonP/nJQ4cOXaQWDdZuexEgQIDAsAjIisPS09pJgACBj18g57663e6pU6duuummWay9LCcVM21WifHyyy9vNBrj4+Nbtmz5b//tv/34xz/Op6HmLYtz1fxyOWsk0v/3//7fH//xHz/99NM/93M/V17YyMjI1PZmE6bmwPNuWbFixeuvvx4NibnTuWqU4xAgQIAAgakCsuJUE1sIECBAYA4E8ua9OFa32z19+vR999133kQ0dYdIXHnLYhm3ynJO1l1//fUPP/zw3r17q7Wpc9Cqs4fIpr311lv/8l/+y7/8l/9yXHMmw7KQ5bJd024sd5haXr58+RtvvFFl4LlqkeMQIECAAIGpArLiVBNbCBAgQOAiCmzZsqXRaMSde5n08r6+nEWMNDWLTFXGtrGxsb/9t//2jh07Dhw4EE2KmcD4Xc4QTm1wviMxPsp8+MYbb+zZs+eee+5ZuXJlXv/UaDfIlmxdHicL8fDYOEir1Vq1atXp06erS5p6zbYQIECAAIE5FJAV5xDToQgQIEDg/ALdbvfxxx/PLBR5KTNSxqfqNsVBolfuEzOQcaglS5bk9jVr1nz+85//yle+8q//9b/et2/f4cOH+8fF733vewcPHnzhhRd27NixZcuWdevWxXWWF9k6+5OnmGkhD5VpuTxCNGTt2rWnTp3KoFiu7D0/tz0IECBAgMBsBWTF2cr5HgECBAjMVqDb7e7cuXP58uWRi/JdGpnEqlnHMj4NUs7kOe3O5acZ1c61Zxnh8vKqfFjuM+1xpt2YK2bztsbyOLngdsuWLVWgjUnR2dr7HgECBAgQGFRAVhxUyn4ECBAgMLcChw4dWrlyZeSoXHpaxqr+Qa7csyxn4sqXTMTB8xRjY2Ox/3mPnyF2dHS0TJh5uvMeIfectlB+Pctxorja3bt3R1DMR7zmKzrmti8cjQABAgQITBWQFaea2EKAAAECF1GgfNXE8ePHP//5z8dy0whLVWSaNmL131iGupwJLE8RXy8/mvaAeSX5aXnk6oBTd85v9Sk0m83R0dHyuyMjI3GWlStXvvbaa/FsnpxXzNWn+XDX/OgidphDEyBAgMCwCsiKw9rz2k2AAIFLJ1DGxcnJyX/1r/7VlVdeGRmp1WrlBGCflNXno4heOSUYe2YeGxkZqT7qc6gMhK1WK44Qk5Z5tP7f7f9pdRll9e/9vb937NixXq83MTExbS+VoXHaHWwkQIAAAQIXLiArXrihIxAgQIDAzATijrt2u5233r3xxhs333zzZZdd1mg0Rs7+RB6rpvL6p6/q08h10644zbsBq6+U1Yis5ZapETHXu5a7zagcDcwjL1++fO/evd1uNxadBmv5VJvYYjpxZgPO3gQIECAwKwFZcVZsvkSAAAECFyaQKTEOE+HnN3/zN//cn/tzMZs3o8RV7VzOTEYMyzBWPpZm8CCa2TKPlgesTj14NY+Ql3H33XcfOXKkeoNiQFXhMKsZIy+sN3ybAAECBAhMIyArToNiEwECBAhcDIEMNuUa1DhRLqo8evTo+vXrIz6VyzIHz2ALbs9Wq7Vs2bIXXnghE2AZF9MneyTTY5W3cwcFAgQIECAwJwKy4pwwOggBAgQITCPQbrfL/JMRqAo5mSFz+65du37+538+38G44OLfIBcceXhkZOQLX/jC8ePHgy8pptH8s03lPin2Zx/6XwIECBAgMGcCsuKcUToQAQIECFQCGRTLSBNRJycS46PYMze+9tprDz300JVXXjlI6Fq4+1x++eWf//znn3vuuR//+McTExMhU/6O56CGamJGNR57U22s/FUJECBAgMCFCMiKF6LnuwQIECAwG4FIOGWA7PV67Xb79ddf//KXv3zttddG/Msb+RZuGuxz5dWzc+6///69e/dWr0/Mas4lds7+zAbddwgQIECAwAwFZMUZgtmdAAECBGYikGmnfFVg3q8Yn544ceKpp5669dZb8wbFLOQDYPqEroX7Ub6KI5rQarVWrFjxpS996Q/+4A/COEJ1BMWUTL3yQbIz6RP7EiBAgACBgQRkxYGY7ESAAAECFyhQrpaM8sTExH/5L/9l48aNZSDMcj56dOFGwf5XHi3NZsYkamwcGRlZvXr17t27T506Ne3LM6op2QvsGl8nQIAAAQLTCsiK07LYSIAAAQIXKpDLJsub7iL5nDhx4rd/+7evueaaSFMjIyPNZjPXZGbhwl+e0T+tzZ9Po8m55jYD89KlS3/jN34jXqQR+XDq44IutJ98nwABAgQInENAVjwHjM0ECBAgcMECOZcYhcnJye9///sPP/zw8uXLI6ed6132EZYyO82fUHfxrqScV2w0GpEeYy1uq9XatGnTvn37Ii7G77S94F5yAAIECBAgML2ArDi9i60ECBAgMFOBMsmUj2CJVPPuu+8+8MADFy9rlUeuQmas8yw3ZjDLGbzy61Ge9qNcMhqfTrvP1EPNyZZms7l27drnnnsu+qXMilHOLdERM+0++xMgQIAAgUpAVqxAVAkQIEBgZgIRUaqgGIeIZahHjhy577775iQvDXiQSHQZ5LLQaDRipm7ApDc6OpqpMhbKxgWUsfNcWwa81MF3yznYlStX7tmzJ2zL3/EWjVJ+Zh1pbwIECBAg8FEBWfGjHmoECBAgMCuBbrcbuSWf0tntdv/4j/94y5YtEYdGRkamRqzBk9Lge1Y5MCNWmRgHuZIqcJYXMDY21mg0MkaWH13scpy60WjccMMNL7zwQr6RMvCj68ryrDrTlwgQIECAwE8EZEXjgAABAgQuVCDDSUaXI0eO3HvvvRGclixZEk+pGSShXXjWygjXOvtTRsfYkqeoXlmR26cWcs8ycMZuU7dM/fqcbCn1LrvssiDdsGHDq6++Wqb0coL3QvvV9wkQIEBguAVkxeHuf60nQIDABQtkUIxHdJ48eXLbtm3j4+N5a18+qSXn4uYkOw1ykAxyEbQyRg7y3QhjIyMjOZUXz5uJ37nx42xUpO6yLdGQDRs2vP3229mTeeNiblEgQIAAAQKzEJAVZ4HmKwQIECAwjUC32925c+eNN95YJrF8G0SEqwxv5T5zXo6bEvOwedIqK+by1NyzLLRarbj42BjfzWSY7fo4X+yR1xDxO9qVjfrCF75w+vRpQXGaoWkTAQIECMxKQFacFZsvESBAgMBHBf7rf/2vn/3sZyNWZVSLpZuZcHIlZxnJ5ryc85mZ9KIQyWp8fPz222//G3/jb2zYsOFXf/VXH3/88W3n+Nm+ffs//af/9G/+zb/5S7/0S+vWrbvhhhsyFuarLPLis425Zc4LcYpsVBw/zxtR/Kqrrnr++ec/2jNqBAgQIEBglgKy4izhfI0AAQIEQuD48eNf/OIXI7RkSoxglpNvGWlyim/Oo1R1wBUrVqxfv37z5s3btm3bu3fvwYMHT548mXNuuW72vK+XmJyc7PV6cR9mfP3AgQOvvPLK448//tBDD23YsGHlypVVfquu5GJUK8YKf926dUePHjU+CRAgQIDABQrIihcI6OsECBBYzAIZriIvRVMjPkXKOnjw4DXXXBMRMQNMFmYakzJSlrc45rLPnNbLw2ZIa7Va11577aZNm7Zv337w4MEf/vCHZa+cNxCWOw9YDpl8kMy+ffueeOKJ3/iN3/jFX/zFaEUgZIuykE3Li883eeQ+CZiFcudsfv/Ctm3bqrbkI3B6vV6m5bIh1f6qBAgQIDDkArLikA8AzSdAgMA0AhEk2md/qo/zJX4ffPDBww8/nDmnTHQZh/qHmWk/LR9Vmkkp9swolcFp1apVDz300EsvvfT+++9nEMpkGJk2rj83Vs25wGq+KSSO/+GHH/Z6vcnJyYMHD27fvn39+vWlT6PRyCfiRNPiWTWlQ2zPhmeh3Gfw8qpVqw4dOpTzohER41LLV5uU/yJwgSC+ToAAAQKLSUBWXEy9qS0ECBCYM4HMhOWM4pkzZ+IE3/72t1euXFlmwgtMNeWhyvnDuMWxfNXhVVdd9au/+qvPPfdcPsclY09ear66Y844pjtQ5s+co4u94uydsz/dbnffvn0PP/zwqlWrIuI2m80oxO/MxtM++yfvvRw8H07dc/v27ZFgsxGZq2NLNiR3UCBAgAABAt6vaAwQIECAwDQCOfVUfpYbH3nkkQw8ketyxq//k0Wnxphqy+WXX15tiero6Og111zz4IMPHj58OCbB2u12OW0Y15nzY1MLcxiHOp1OZK1OpxMnirCa5Tx76sX+R48effrpp1evXl2F4ZySzWf/lMG7zMnT4vTZODIyEodatWpVNfWaV1sF3bxmBQIECBAgYF7RGCBAgACBjwjEaxJjU0asiBavv/76qlWrMtvkiso+cWXwjzIgxWHjHsiVK1d++ctf/u53vzvt9ZSrK6fOJebFf6R5c1qJycM8ZJ6x3W5HucyNmcrefvvtp59+OiQjN1bzh1V1cMNyzwjwodpqta688so9e/aUl1peW25XIECAAAECKSArJoUCAQIECPxEoJpxioTT7Xb37Nlz5ZVXjo6O5iximUwyQJaTZtUO/auRamJl5tjY2L333vvCCy+UT2Hp9XqdTmdycjKvMDos5vcy+WRgy0+nzkBeSE/Hico1uolWZtc8RQLGlvhiXOSRI0e+9KUvXXPNNYGW04ABleG5v1ufT+MI5e977703H/xTpuu5Jcq2KxAgQIDAghaQFRd097l4AgQIXCyBcnbx1KlTW7ZsyTQYs145bVVFmnJ5ap8YM/WjOM511133zDPPlHkmAliVAKPZEdtyvi7vyisj5ZwDlVdSnjqibEbWOG/skF/pdruRymK3XMX6rW99a926dWESaTnnG8vCVLQ+W8KzPFo8aOfWW2+NedrySuZcyQEJECBAYBEIyIqLoBM1gQABAnMskIFncnLy+9///k033ZSzheWkYuaQLPSJLuf9aP369Xv37o3EVc7URdDKSbC4tqm/M7blxU89yFwxZcbLEFieK6+t/DTbFdeQzclqr9c7cuTI/fffv3Tp0jnxzGwfRysj/Sc/+clvfvObGa1LsbkichwCBAgQWAQCsuIi6ERNIECAwCwFMsxkvIkD5TrP/fv3L1++vMyH5418uUNOPFZfz9AShWazed9997333nuzbMOi+9qpU6e2b9++dOnS8EnGjOv5zNjZ3daY/vF81PDL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CMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFcTEAXkAAAomSURBVBMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCMiKAZBmAgQIECBAgAABAgQIJBSQFRMWXZcJECBAgAABAgQIECAQCPwfUCLu9wCwHC4AAAAASUVORK5CYII=" />
                                                                                    </defs>
                                                                                </svg>
                                                                            </div>
                                                                            <!-- nome -->
                                                                            <div class=" fs-20px ms-3">
                                                                                <a href="#"
                                                                                    class="text-decoration-none d-block">
                                                                                    <div class="text-green-2 fw-500 text-truncate">
                                                                                        <?php echo e($cliente->nome); ?></div>
                                                                                    <div class="text-green"><?php echo e($cliente->sexo); ?>, <?php echo e(date('Y', strtotime('now')) - date('Y', strtotime($cliente->data_nascimento))); ?> anos
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- cpf -->
                                                                    <div class="mb-3">
                                                                        <div class="d-flex align-items-center p-3 rounded-3 px-4 w-100"
                                                                            style="border: 1px solid #B2D2D2">
                                                                            <div class=" fs-20px">
                                                                                <a href="#"
                                                                                    class="text-decoration-none d-block">
                                                                                    <div class="text-green-2 fw-500 text-truncate">
                                                                                        CPF</div>
                                                                                    <div class="text-green"><?php echo e($cliente->cpf); ?></div>
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Telefone -->
                                                                    <div class="mb-3">
                                                                        <div class="d-flex align-items-center p-3 rounded-3 px-4 w-100"
                                                                            style="border: 1px solid #B2D2D2">
                                                                            <div class=" fs-20px">
                                                                                <a href="#"
                                                                                    class="text-decoration-none d-block">
                                                                                    <div class="text-green-2 fw-500 text-truncate">
                                                                                        Telefone</div>
                                                                                    <div class="text-green"><?php echo e($cliente->telefone); ?></div>
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Email -->
                                                                    <div class="mb-3">
                                                                        <div class="d-flex align-items-center p-3 rounded-3 px-4 w-100"
                                                                            style="border: 1px solid #B2D2D2">
                                                                            <div class=" fs-20px">
                                                                                <a href="#"
                                                                                    class="text-decoration-none d-block">
                                                                                    <div class="text-green-2 fw-500 text-truncate">
                                                                                        Email</div>
                                                                                    <div class="text-green"><?php echo e($cliente->email); ?>

                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="">


                                                                        <a href="<?php echo e(route('painel.farmacia.clientes.edit', ['id' => $cliente->id])); ?>"
                                                                            class="btn btn-primary-light w-100  py-2 fs-20px text-green fw-500">
                                                                            Editar informações
                                                                        </a>
                                                                    </div>

                                                                </div>

                                                                <div class="fechar-modal text-center pt-4">
                                                                    <button type="button"
                                                                        class="btn btn-ligth shadow bg-white text-green-2 py-1"
                                                                        class="btn-close" data-bs-toggle="modal" >
                                                                        <i data-feather="x"></i>
                                                                        Fechar
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <?php if($clientes->count() >5): ?>
                                    <div class="ver-mais-lista-scroll text-center">
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

                    <!-- Exames finalizados -->
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-body px-0 px-md-2 py-4">

                                <div class="text-center px-3">
                                    <h2 class="fs-24px fw-600 text-green-2 ">Exames finalizados</h2>
                                </div>


                                <div class="position-relative">
                                    <!-- Lista -->
                                    <div class="mt-2 lista-scroll p-3 clientes-lista-assinantes " style="max-height: 400px">

                                        <?php $__currentLoopData = $examesProntos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div
                                                class="d-sm-flex gap-2 mb-3 text-green-2 fw-600 bg-green-light  p-3 p-md-4 mb-3 align-items-center ">
                                                <div class="d-flex gap-2 mb-2 mb-sm-0">
                                                    <div class="">
                                                        <div
                                                            class="bg-white border-green-light px-2 py-2  text-center lh-1 rounded-3">
                                                            <div class="fs-24px text-green-2 mb-1 px-2">
                                                                <?php echo e(date('d', strtotime($exame->data_exame))); ?></div>
                                                            <div class="fs-16px text-green px-2">
                                                                <?php echo e(date('M', strtotime($exame->data_exame))); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex  align-items-center">
                                                        <div class="">
                                                            <div class="text-green-2 fs-18px"><?php echo e($exame->nome_exame); ?></div>
                                                            <div class="text-green fs-16px"><?php echo e($exame->nome_cliente); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="<?php echo e(route('painel.farmacia.exames.show', ['id' => $exame->id])); ?>"
                                                    class="btn w-sm-100 btn-primary-light-2 ms-auto py-3" title="Visualizar">
                                                    <i class="" data-feather="printer"
                                                        style="min-width: 60px; min-height: 40px; stroke-width: 1.5"></i>
                                                </a>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <?php if($examesProntos->count()>=4): ?>
                                    <div class="ver-mais-lista-scroll text-center">
                                        <a href="<?php echo e(route('painel.farmacia.exames.lista')); ?>">
                                        <button type="button"
                                            class="btn btn-ligth shadow bg-white  py-1 text-green fs-20px fw-600">
                                            Ver mais
                                        </button>
                                        </a>
                                    </div>
                                    <?php else: ?>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-12 col-xl-4">

                <div class="row gy-4">
                    <!-- Próximos horários -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body px-0 px-md-2 py-4">

                                <div class="text-center px-3">
                                    <h2 class="fs-24px fw-600 text-green-2 ">Próximos horários</h2>
                                </div>

                                <div class="position-relative">
                                    <!-- Lista -->
                                    <div class="mt-2 lista-scroll p-3 px-2 clientes-lista-assinantes ">

                                        <!--  -->
                                        <?php $__currentLoopData = $examesPendentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exameP): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="#"
                                                class="px-2 py-2 proximo-horarios mb-3 rounded-3 text-decoration-none d-block"
                                                data-bs-toggle="modal" data-bs-target="#modal-ver-agenda-<?php echo e($exameP->agendaId); ?>">
                                                <div class="d-flex gap-4 align-items-center ">
                                                    <div class="text-green-2 fw-700 lh-1">
                                                        <div class="fs-2 mb-1">
                                                            <?php echo e($exameP->hora_exame); ?>

                                                        </div>
                                                        
                                                    </div>
                                                    <div class="divisor-horarios cor-roxo"></div>
                                                    <div class="fs-18px text-green-2 fw-600">
                                                        <div class=""><?php echo e($exameP->nome_exame); ?></div>
                                                        <div class="text-green">
                                                            <?php echo e($exameP->nome_cliente); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('farmacia')): ?>
                                                <!-- Modal ver agenda -->
                                                <div class="modal modal-custom fade" id="modal-ver-agenda-<?php echo e($exameP->agendaId); ?>"
                                                    tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                                                    role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg border-0"
                                                        role="document">
                                                        <div class="modal-content bg-transparent ">
                                                            <div class="modal-body p-lg-5  border-0">

                                                                <div class="p-4 shadow rounded-3  bg-white border">

                                                                    <div class="d-flex flex-wrap gap-4">

                                                                        <!--  -->
                                                                        <div class="">
                                                                            <div class="d-flex align-items-center p-3 rounded-3 px-4"
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
                                                                                            <?php echo e($exameP->hora_exame); ?>

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
                                                                                        style="background-image: url(<?php echo e(asset('assets/img/ilustracoes/user-3.png')); ?>); border: 1px solid #00B1AC">
                                                                                    </div>
                                                                                </div>
                                                                                <!-- nome -->
                                                                                <div class=" fs-20px ms-3">
                                                                                    <a href="#"
                                                                                        class="text-decoration-none d-block">
                                                                                        <div
                                                                                            class="text-green-2 fw-500 text-truncate">
                                                                                            Responsável: </div>
                                                                                        <div class="text-green"><?php echo e($exameP->name); ?></div>
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
                                                                                            Exame: <?php echo e($exameP->nome_exame); ?>

                                                                                        </div>
                                                                                        <div class="text-green text-truncate"><?php echo e($exameP->estoque); ?> em
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
                                                                            <div class="d-flex align-items-center p-3 px-4 rounded-3 gap-4"
                                                                                style="border: 1px solid #B2D2D2">
                                                                                <!--  -->
                                                                                <div class="d-flex align-items-center">
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
                                                                                                Cliente: <?php echo e($exameP->cliente_nome); ?>

                                                                                            </div>
                                                                                            <div class="text-green text-truncate">
                                                                                                CPF: <?php echo e($exameP->cpf); ?></div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- divisoar -->
                                                                                <div class="divisor-modal-ver-agenda-farmacia"
                                                                                    style=""></div>

                                                                                <div class="d-flex align-items-center ">
                                                                                    <!-- nome -->
                                                                                    <div class=" fs-20px ">
                                                                                        <a href="#"
                                                                                            class="text-decoration-none d-block">
                                                                                            <div
                                                                                                class="text-green-2 fw-500 text-truncate">
                                                                                                Número: <?php echo e($exameP->telefone); ?>

                                                                                            </div>
                                                                                            <div class="text-green text-truncate">
                                                                                                Email: <?php echo e($exameP->email); ?></div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>



                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-4 pt-2">
                                                                        <div class="col-12 col-lg-6">
                                                                            <a href="<?php echo e(route('painel.farmacia.agenda.edit', $exameP->agendaId)); ?>"
                                                                                class="btn btn-primary-light w-100 py-2 fs-20px text-green fw-400">
                                                                                Editar informações
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-12 col-lg-6">
                                                                            <button type="button"
                                                                                class="btn btn-primary w-100 py-2 fs-20px fw-400" data-bs-toggle="modal"
                                                                                data-bs-target="#modal-presenca-<?php echo e($exameP->agendaId); ?>">Confirmar</button>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="fechar-modal text-center pt-4">
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

                                                <!-- modal ver cliente -->

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                                    </div>
                                    <?php if($examesPendentes->count()>=5): ?>
                                    <div class="ver-mais-lista-scroll text-center">
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

                    <!-- Quase acabando -->
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body px-2 py-4">

                                <div class="text-center px-3">
                                    <h2 class="fs-24px fw-600 text-green-2 ">Estoque Atual</h2>
                                </div>


                                <div class="position-relative">
                                    <!-- Lista -->
                                    <div class="mt-2 lista-scroll p-3 clientes-lista-assinantes " style="max-height: 320px">

                                        <?php $__currentLoopData = $examesAcabando; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exameFim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div
                                                class="d-flex gap-2 mb-3text-green-2 fw-600 bg-green-light  p-4 mb-3 align-items-center ">
                                                <div class="text-green me-3">
                                                    <i class="" data-feather="alert-triangle" style="font-size: 90px"
                                                        height="27" width="27"></i>
                                                </div>
                                                <div class="d-flex  align-items-center">
                                                    <div class="text-green-2 fs-20px"><?php echo e($exameFim->nome); ?></div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div
                                                        class="bg-white border-green-light px-1 py-1  text-center lh-1 rounded-3">
                                                        <div class="fs-16px text-green px-1 fs-20px"><?php echo e($exameFim->estoque); ?></div>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <?php if($examesAcabando->count()>=5): ?>
                                    <div class="ver-mais-lista-scroll text-center">
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
                </div>

            </div>

        </div>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
        <div class="">
            <div class="row ">
                <div class="col-12 col-md-5">
                    <div class="card min-vh-100">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-5">
                    <div class="card min-vh-100">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    <?php endif; ?>





<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['farmacia','adminFarmacia'])): ?>
        <!-- scripts apexchart -->
        <script src="<?php echo e($faturamento->cdn()); ?>"></script>
        <?php echo e($faturamento->script()); ?>

        <?php echo e($mapaClientes->script()); ?>



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
                        url: "<?php echo e(route('busca-exame-entrada')); ?>", // Arquivo PHP que processará a busca
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
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/pages/painel/home.blade.php ENDPATH**/ ?>