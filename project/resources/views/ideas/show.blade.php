<x-layout title="Ideas">
    <label for="idea" class="block text-xl font-bold text-black">Your Idea</label>

    <div class="mt-4">
        {{ $idea->description }}
    </div>

    <div class="mt-6">
        <a href="/ideas/{{ $idea->id }}/edit" class="rounded-md bg-pink-400 px-8 py-2 text-sm font-semibold text-white hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</a>
    </div>
</x-layout>