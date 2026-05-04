<x-layout title="Ideas">
    @if($ideas->count())
        <div class="mt-8">
            <label for="idea" class="block text-xl font-bold text-black">Your Ideas</label>

            <ul class="mt-2">
                @foreach($ideas as $idea)
                    <a href="/ideas/{{ $idea->id }}" class="text-sm hover:text-pink-500">{{ $idea->description }}</a> <span class="text-sm">({{ $idea->status }})</span></br> 
                @endforeach
            </ul>
            <p class="mt-2 font-semibold"><a href="/ideas/create" class="underline hover:text-pink-500">Create a new one --></a></p>
        </div>
    @else
        <p>No ideas yet. <a href="/ideas/create" class=" mt-2 font-semibold underline hover:text-pink-500">Create a new one --></a></p>
    @endif
</x-layout>