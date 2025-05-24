<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <p>Salary: {{$job['salary']}} per year</p>
</x-layout>
