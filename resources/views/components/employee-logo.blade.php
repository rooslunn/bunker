@props(['width' => 100])

{{-- <img src="{{ Vite::asset("resources/images/sputnik-$width.png") }}" class="rounded-xl" alt=""> --}}

<img src="http://picsum.photos/seed/{{ rand(1, 1000000) }}/{{ $width }}" class="rounded-xl" alt="">