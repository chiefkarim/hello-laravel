<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>
    <h2>
        {{ $job->title }}
    </h2>

    <p>This job Pays {{ $job->salary }} per year.</p>
    <div class="flex gap-2 mt-6">
        <p>
            <x-button href="/jobs/{{ $job->id }}">Edit</x-button>
        </p>
        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="py-2 px-3 text-sm font-semibold text-white bg-red-400 rounded-md hover:bg-indigo-500 shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
        </form>
    </div>
</x-layout>
