<x-layout title="Ideas">
    @if($ideas->count())
    <div class="mt-8">
        <label for="idea" class="block text-xl font-bold">Your Ideas</label>

        <ul class="mt-2 grid grid-cols-2 gap-x-7 gap-y-4">
            @foreach($ideas as $idea)
            <x-idea-card href="/ideas/{{ $idea->id }}">
                {{ $idea->description }}
            </x-idea-card>
            @endforeach
        </ul>

        <a role="button" class="mt-4 btn btn-soft btn-primary" href="/ideas/create">new idea</a>
    </div>
    @else
    <p class="mt-8">No ideas yet.</p>
    <a role="button" class="btn btn-soft btn-primary" href="/ideas/create">new idea</a>
    @endif
</x-layout>