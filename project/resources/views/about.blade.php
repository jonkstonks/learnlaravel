<x-layout title="About Us">
    
    <h1>About Us</h1>
    
    <div>
        <p>
            We are a company that does things.</br>
            We have been doing things for a long time.</br>
            We will continue to do things in the future.
        </p>
    </div>
    
    <p>I have {{ count($tasks) }} tasks:</p>

    @forelse($tasks as $task)
        {{ $task }}</br>
    @empty
        <p>There are currently no tasks.</p>
    @endforelse

</x-layout>