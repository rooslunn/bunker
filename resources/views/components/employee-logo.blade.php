@props(['employer', 'width' => 100])

@php
    $logo = sprintf("http://picsum.photos/seed/%d/%d", rand(1, 1000000), $width);
    if ($employer->logo) {
        $logo = asset($employer->logo);
    }
@endphp

{{-- todo: arty storage:link --}}
<img src="{{ $logo }}" class="rounded-xl" alt="" width="{{ $width }}"/>