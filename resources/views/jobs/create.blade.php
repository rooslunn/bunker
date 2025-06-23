<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="{{ route('jobs.store') }}">

        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="100,000$" />
        <x-forms.input label="Location" name="location" placeholder="Oslo, Lars Eriksen 12" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="part">Part-Time</option>
            <option value="full">Full-Time</option>
            <option value="remote">Remote</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="www.bunker.io" />

        <x-forms.checkbox label="Featured" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="part-time(50%), cleaning, urgent" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>