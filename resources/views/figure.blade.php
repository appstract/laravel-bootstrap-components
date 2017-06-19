<figure class="figure {{ $class or '' }}">
    {{ $slot }}

    @isset($caption)
        <figcaption class="figure-caption">{!! $caption !!}</figcaption>
    @endisset
</figure>