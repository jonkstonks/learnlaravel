<x-layout title="Ideas">
    <h1 class="mb-4 text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">{{ $greeting }}, {{ $person }}</h1>

    <form method="POST" action="/ideas">
        @csrf
        
        <div class="col-span-full mt-8">
            <label for="idea" class="block text-xl font-bold text-black">Have an idea you want to save for later?</label>
            <p class="mt-1 text-sm/6 text-neutral-700 mb-1.5">Write it down and save it.</p>
            <div class="mt-2">
                <textarea id="idea" name="idea" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-neutral-700 outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-pink-300 sm:text-sm/6"></textarea>
            </div>
        </div>

        <div class="mt-4 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-pink-400 px-8 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

    @if(count($ideas))
        <div class="mt-8">
            <label for="idea" class="block text-xl font-bold text-black">Your Ideas</label>

            <ul class="mt-2">
                @foreach($ideas as $idea)
                    <li class="text-sm">{{ $idea }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>