<x-layout title="Ideas">
    <form method="POST" action="/ideas">
        @csrf
        
        <div class="col-span-full mt-8">
            <label for="description" class="block text-xl font-bold text-black">Create New Idea</label>
            <p class="mt-1 text-sm/6 text-neutral-700 mb-1.5">Write it down and save it.</p>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-neutral-700 outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-pink-300 sm:text-sm/6"></textarea>
            
            <x-forms.error name="description" />
            </div>
        </div>

        <div class="mt-4 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-pink-400 px-8 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>
</x-layout>