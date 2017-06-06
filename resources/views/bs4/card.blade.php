<div
    class="
        card {{ $class or '' }}
    "
>

    @istrue($image)
        <img
            class="
                card-img-top {{ $image['class'] or '' }}
            "
            src="
                {{ $image['src'] }}
            "
            alt="
                {{ $image['alt'] or '' }}
            "
        >
    @endif

    @istrue($heading)
        <div class="card-header">
            {{ $heading }}
        </div>
    @endif

    <div class="card-block">
        {{ $slot }}
    </div>

</div>