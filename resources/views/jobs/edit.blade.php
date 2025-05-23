<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 mt-10 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block font-medium text-gray-900 text-sm/6">title</label>
                        <div class="mt-2">
                            <div class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" value="{{ $job->title }}" name="title" id="title" required class="block py-1.5 px-2 pr-3 pl-1 min-w-0 text-base text-gray-900 focus:outline-none grow placeholder:text-gray-400 sm:text-sm/6" placeholder="teacher">
                            </div>
                            @error('title')
                                <p class='mt-1 text-xs font-semibold text-red-500'>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="salary" class="block font-medium text-gray-900 text-sm/6">salary</label>
                        <div class="mt-2">
                            <div class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" value="{{ $job->salary }}" name="salary" id="salary" required class="block py-1.5 px-2 pr-3 pl-1 min-w-0 text-base text-gray-900 focus:outline-none grow placeholder:text-gray-400 sm:text-sm/6" placeholder="50,000k">
                            </div>
                            @error('salary')
                                <p class='mt-1 text-xs font-semibold text-red-500'>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="flex gap-x-6 justify-end items-center mt-6">
            <a href="/jobs/{{ $job->id }}" class="font-semibold text-gray-900 text-sm/6">Cancel</a>
            <button type="submit" class="py-2 px-3 text-sm font-semibold text-white bg-indigo-600 rounded-md hover:bg-indigo-500 shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>

        </div>
    </form>
</x-layout>
