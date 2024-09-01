<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <strong><h2> {{ $job->title }} </h2></strong>

    <p> This job pays {{ $job->salary }} per year. </p>

    @can('edit-job', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    @endcan

</x-layout>