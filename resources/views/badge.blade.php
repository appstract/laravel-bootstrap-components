<span
    class="
        badge
        badge-{{ $type }}
        {{ $class or '' }}
        @istrue($pill, 'badge-pill')
    "
>
    {{ $slot }}
</span>