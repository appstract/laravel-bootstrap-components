<ul class="list-group {{ $class or '' }}">
    @isset($items)
        @foreach($items as $item)
            <li class="list-group-item">{{ $item }}</li>
        @endforeach
    @endisset

    {{ $slot }}
</ul>