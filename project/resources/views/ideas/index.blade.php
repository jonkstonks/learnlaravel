<x-layout title="Ideas">
    @if($ideas->count())
    <div class="mt-8 card-body rounded-box bg-base-300 grid grow place-items-stretch">
        <label for="idea" class="block text-xl font-bold">Your Ideas</label>
        <ul class="mt-2 grid grid-cols-2 gap-x-7 gap-y-4">
            @foreach($ideas as $idea)
            <x-idea-card href="/ideas/{{ $idea->id }}">
                {{ $idea->description }}
            </x-idea-card>
            @endforeach
        </ul>
        @else
            <h2 class="card-title">No ideas yet.</h2>
        @endif
        
        <p><a role="button" class="btn btn-soft btn-primary mt-4" href="/ideas/create">new idea</a></p>
    </div>
</x-layout>