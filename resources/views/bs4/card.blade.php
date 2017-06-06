<div
    class="card {{ $class or '' }}"
>
    @istrue($image)
        <img
            class="card-img-top {{ $image['class'] or '' }}"
            src="{{ $image['src'] }}"
            alt="{{ $image['alt'] or '' }}"
        >
    @endistrue

    @istrue($heading)
        <div class="card-header">
            {{ $heading }}
        </div>
    @endistrue

    <div class="card-block">
        {{ $slot }}
    </div>
</div>