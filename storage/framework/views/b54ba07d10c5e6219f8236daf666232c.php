<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <title> <?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="
https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js
"></script>
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/painel.css')); ?>">
    
    <?php echo $__env->yieldContent('head'); ?>
</head>

<body>

    <!-- Header -->
    <?php echo $__env->make('layouts.painel.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Sidebar -->
    <?php echo $__env->make('layouts.painel.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <main class="py-2" id="conteudo">
        <div class="container-fluid py-4 px-lg-5 ">
            <?php if (isset($component)) { $__componentOriginal9d684e94d8294933a712f81f8101e557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d684e94d8294933a712f81f8101e557 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert-success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d684e94d8294933a712f81f8101e557)): ?>
<?php $attributes = $__attributesOriginal9d684e94d8294933a712f81f8101e557; ?>
<?php unset($__attributesOriginal9d684e94d8294933a712f81f8101e557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d684e94d8294933a712f81f8101e557)): ?>
<?php $component = $__componentOriginal9d684e94d8294933a712f81f8101e557; ?>
<?php unset($__componentOriginal9d684e94d8294933a712f81f8101e557); ?>
<?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- Feather icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.1/feather.min.js"
        integrity="sha512-4lykFR6C2W55I60sYddEGjieC2fU79R7GUtaqr3DzmNbo0vSaO1MfUjMoTFYYuedjfEix6uV9jVTtRCSBU/Xiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        /* show tooltip bootstrap */
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

        /* activer feather icons */
        feather.replace();
    </script>

    <!-- scripts -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
  
    
    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/layouts/painel/app.blade.php ENDPATH**/ ?>