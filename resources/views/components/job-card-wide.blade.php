@props(['job'])

<x-panel class="flex gap-x-7">
    <div>
        <x-employee-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="transition-colors duration-700 self-start text-sm text-gray-500">
            {{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-500">
            {{ $job->title }}</h3>
        <p class="text-sm text-gray-500 mt-auto">
            {{ $job->salary  }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
