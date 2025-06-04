<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <p><strong>Salary:</strong> {{$job['salary']}} per year</p>
</x-layout>
