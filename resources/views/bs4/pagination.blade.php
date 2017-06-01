<nav aria-label="Page navigation">
    <ul class="pagination {{ $class or '' }}">
        @isset($pagination)
            @foreach($pagination as $label => $link)
                <li class="page-item"><a class="page-link" href="{{ $link }}">{!! $label !!}</a></li>
            @endforeach
        @else
            {{ $slot }}
        @endisset
    </ul>
</nav>