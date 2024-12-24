<x-layout>
<x-slot name="title">Available Jobs</x-slot>
    <h1>Available Jobs</h1>
    @if (!empty($jobs))
        <ul>
            @foreach ($jobs as $job)
                <li>
                    {{ $job }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No jobs available</p>
    @endif
</x-layout>