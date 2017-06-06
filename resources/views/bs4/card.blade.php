<div
    class="card {{ $class or '' }}"
>
    @isset($image)
        {{ $image }}
    @endistrue

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