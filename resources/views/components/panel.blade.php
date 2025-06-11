@php
    $classes = "p-5 bg-white/10 rounded-xl border border-transparent hover:border-blue-700 group transition-colors duration-700";
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot  }}
</div>