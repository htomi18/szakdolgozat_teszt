<x-layout>
    <x-slot:heading class="flex justify-center items-center text-center">
        Job listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job )

            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">  <!-- a href dinamikusan kezeli a job id-kat -->
              <div class="text-sm font-bold text-blue-500">
                {{ $job->employer->name }}
              </div>
              <div>
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }}  per year
              </div>
            </a>

        @endforeach
        </div>
</x-layout>
