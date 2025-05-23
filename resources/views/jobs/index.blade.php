<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <h1>Jobs page</h1>
    <div class='space-y-3'>
        @foreach ($jobs as $job)
            <div class="p-2 space-y-2 rounded-md outline-1">
                <div class="text-2xl font-semibold">
                    {{ $job->employer->name }}
                </div>
                <a href="/jobs/{{ $job['id'] }}"> <strong>{{ $job['title'] }}</strong></a>: Pays {{ $job['salary'] }} per year.
            </div>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>

</x-layout>
