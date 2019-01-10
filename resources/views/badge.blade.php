<span
    class="
        badge
        badge-{{ $type }}
        {{ $class ?? '' }}
        @istrue($pill, 'badge-pill')
    "
>
    {{ $slot }}
</span>
