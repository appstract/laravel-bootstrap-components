<div class="progress">
    <div
        class="progress-bar {{ $class ?? '' }}"
        role="progressbar"
        style="width: {{ $value }}%"
        aria-valuenow="{{ $value }}"
        aria-valuemin="{{ $min ?? 0 }}"
        aria-valuemax="{{ $max ?? 100 }}"
    ></div>

    {{ $slot }}
</div>
