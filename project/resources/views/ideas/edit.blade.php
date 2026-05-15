<x-layout title="Ideas">
    <label for="idea" class="block text-xl font-bold">Your Idea</label>

    <div class="mt-2">
        {{ $idea->description }}
    </div>

    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')

        <div class="col-span-full mt-8">
            <label for="description" class="block text-xl font-bold">Changed your mind?</label>
            <p class="mt-1 text-sm/6 mb-1.5">You can update your idea here.</p>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                    class="textarea w-full">{{ $idea->description }}</textarea>
                <x-forms.error name="description" />
            </div>
        </div>

        <div class="mt-4 flex items-center gap-x-3">
            <button type="submit" class="btn btn-soft btn-primary">
                Update
            </button>

            <button type="submit" form="delete-idea-form" class="btn btn-soft btn-warning">
                Delete
            </button>
        </div>
    </form>
    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id}}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>