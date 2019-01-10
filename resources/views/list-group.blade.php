<ul class="list-group {{ $class ?? '' }}">
    @isset($items)
        @foreach($items as $item)
            <li class="list-group-item">{{ $item }}</li>
        @endforeach
    @endisset

    {{ $slot }}
</ul>
