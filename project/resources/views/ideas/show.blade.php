<x-layout title="Ideas">
    <div class="card bg-neutral-200 p-6">
        <label for="idea" class="block text-xl font-bold text-black">Your Idea</label>

        <div class="mt-4">
            {{ $idea->description }}
        </div>

        <div class="mt-4">
            <a href="/ideas/{{ $idea->id }}/edit" role="button" class="btn">Edit</a>
        </div>
    </div>
</x-layout>