<x-layout title="Ideas">
    <label for="idea" class="block text-xl font-bold text-black">Your Idea</label>

    <div class="mt-2">
        {{ $idea->description }}
    </div>

    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH') {{-- <-- method spoofing (ytleb laravelile POST asemel kasuta PATCH) --}}
        
        <div class="col-span-full mt-8">
            <label for="description" class="block text-xl font-bold text-black">Changed your mind?</label>
            <p class="mt-1 text-sm/6 text-neutral-700 mb-1.5">You can update your idea here.</p>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-neutral-700 outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-pink-300 sm:text-sm/6">{{ $idea->description }}</textarea>
            </div>
        </div>

        <div class="mt-4 flex items-center gap-x-3">
            <button type="submit"
                    class="rounded-md bg-pink-400 px-8 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Update
            </button>

            <button type="submit"
                    form="delete-idea-form"
                    class="rounded-md bg-red-400 px-8 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Delete
            </button>
        </div>
    </form>
    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id}}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>