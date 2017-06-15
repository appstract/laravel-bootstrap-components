<div
    class="
        jumbotron
        {{ $class or '' }}
        @istrue($fullwidth, 'jumbotron-fluid')
    "
>
    @istrue($fullwidth, '<div class="container">')

    @isset($heading)
        <h1 class="display-3">{!! $heading !!}</h1>
    @endisset

    {{ $slot }}

    @istrue($fullwidth, '</div>')
</div>