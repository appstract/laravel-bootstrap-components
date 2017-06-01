<div class="jumbotron {{ $class or '' }} @if(isset($fullwidth) && $fullwidth) jumbotron-fluid @endif">
    @if(isset($fullwidth) && $fullwidth)
        <div class="container">
    @endif

    @isset($heading)
        <h1 class="display-3">{{ $heading }}</h1>
    @endisset

        {{ $slot }}

    @if(isset($fullwidth) && $fullwidth)
        </div>
    @endif
</div>