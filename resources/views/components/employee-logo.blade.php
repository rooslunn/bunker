@props(['employer', 'width' => 100])

{{-- todo: arty storage:link --}}
<img src="{{ asset($employer->logo) }}" class="rounded-xl" alt="" width="{{ $width }}"/>
{{-- <img src="http://picsum.photos/seed/{{ rand(1, 1000000) }}/{{ $width }}" class="rounded-xl" alt=""> --}}