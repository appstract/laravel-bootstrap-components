<div
    class="card {{ $class or '' }}"
>
    @isset($heading)
        <div class="card-header">
            {{ $heading }}
        </div>
    @endisset

    {{ $slot }}

    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endisset
</div>