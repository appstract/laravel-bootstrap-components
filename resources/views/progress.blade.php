<?php
$min = $min ?? 0;
$max = $max ?? 100;
?>
<div class="progress">
    <div
        class="progress-bar {{ $class or '' }}"
        role="progressbar"
        style="width: {{ (($value - $min) * 100) / ($max - $min) }}%"
        aria-valuenow="{{ $value }}"
        aria-valuemin="{{ $min }}"
        aria-valuemax="{{ $max  }}"
    ></div>

    {{ $slot }}
</div>
