<div class="dropdown">
    <button
        class="btn btn-default dropdown-toggle"
        type="button"
        id="dropdownMenu1"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="true"
    >
        {{ $button }}
        @istrue($caret, '<span class="caret"></span>')
    </button>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        {{ $slot }}
    </ul>
</div>