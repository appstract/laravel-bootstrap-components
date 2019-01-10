<div
    class="modal {{ $animation ?? 'fade' }} {{ $class ?? '' }}"
    id="{{ $id ?? 'modal' }}"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @isset($title)
                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endisset

            <div class="modal-body">
                {{ $slot }}
            </div>

            @isset($footer)
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>
