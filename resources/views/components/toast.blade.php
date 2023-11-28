@props(['type' => 'success', 'message' => ''])
<div id="toastAction" class="toast align-items-center text-white bg-{{ $type }} border-0" role="alert" aria-live="assertive"
     aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">
            {{ $message }}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
    </div>
</div>
