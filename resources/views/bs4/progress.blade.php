<div class="progress">
    <div
        class="progress-bar {{ $class or '' }}"
        role="progressbar"
        style="width: {{ $value }}%"
        aria-valuenow="{{ $value }}"
        aria-valuemin="{{ $min or 0 }}"
        aria-valuemax="{{ $max or 100 }}"
    ></div>

    {{ $slot }}
</div>