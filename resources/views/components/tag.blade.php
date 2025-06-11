{{-- todo: set font size text-3xs --}}

@props(['size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl text-bold transition-colors duration-300";

    if ($size === 'base') {
        $classes .=  " px-5 pt-1 pb-2 text-sm ";
    }

    if ($size === 'small') {
        $classes .=  " px-3 pt-1 pb-2 text-xs ";
    }
@endphp

<a href="#" {{ $attributes(['class' => $classes])  }} >
    {{ $slot  }} 
</a>
