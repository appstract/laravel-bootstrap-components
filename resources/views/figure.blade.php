<figure class="figure {{ $class ?? '' }}">
    {{ $slot }}

    @isset($caption)
        <figcaption class="figure-caption">{!! $caption !!}</figcaption>
    @endisset
</figure>
