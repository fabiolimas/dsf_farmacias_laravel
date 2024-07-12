<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show fw-500 fs-18px" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\indutiva\dsf_farmacias_laravel\resources\views/components/alert-success.blade.php ENDPATH**/ ?>