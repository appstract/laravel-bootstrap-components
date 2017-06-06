<div
    class="card {{ $class or '' }}"
>
    @isset($heading)
        <div class="card-header">
            {{ $heading }}
        </div>
    @endistrue

    {{ $slot }}

    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endistrue
</div>