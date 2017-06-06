<span
    class="badge badge-{{ $severity }}
        {{ $class or '' }}
        @istrue($pill, 'badge-pill')
    "
>
    {{ $slot }}
</span>