@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show fw-500 fs-18px" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session('success') }}
    </div>
@endif
