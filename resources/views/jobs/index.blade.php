<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-5">
            <h1 class="font-bold text-4xl">Let's find your next job</h1>

            <form action="" class="mt-7">
                <input type="text" placeholder="Web Developer..."
                    class="rounded-xl bg-white/11 border-white/17 px-5 py-5 w-full max-w-xl">
            </form>
        </section>

        <section class="pt-13">
            <x-section-heading>Featured</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-7 mt-5">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-7 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag /> 
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recents</x-section-heading>
            <div class="mt-7 space-y-5">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>

    </div>
</x-layout>
