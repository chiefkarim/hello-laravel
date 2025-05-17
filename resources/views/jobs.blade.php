<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <h1>Jobs page</h1>
    <ul>
        @foreach ($jobs as $job)
            <li><a href="/jobs/{{ $job['id'] }}"> <strong>{{ $job['title'] }}</strong></a>: Pays {{ $job['salary'] }} per year.</li>
        @endforeach
    </ul>
</x-layout>
