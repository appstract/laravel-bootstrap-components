<div class="alert alert-{{ $severity }}
    @if(isset($dismissible) && $dismissible) alert-dismissible @endif
    @if(isset($animate) && $animate) fade show @endif"
    role="alert">

    @if(isset($dismissible) && $dismissible)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif

    {{ $slot }}
</div>