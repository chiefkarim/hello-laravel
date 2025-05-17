<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>
    <h2>
        {{ $job['title'] }}
    </h2>

    <p>This job Pays {{ $job['salary'] }} per year.</p>
</x-layout>
