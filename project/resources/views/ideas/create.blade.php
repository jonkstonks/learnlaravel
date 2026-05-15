<x-layout title="Ideas">
    <form method="POST" action="/ideas">
        @csrf
        
        <div class="col-span-full mt-8">
            <label for="description" class="block text-xl font-bold">Create New Idea</label>
            <p class="mt-1 text-sm/6 mb-1.5">Write it down and save it.</p>
            <div class="mt-2">
                <textarea
                    id="description"
                    name="description"
                    rows="3"
                    class="textarea w-full @error('description') textarea-error @enderror"
                ></textarea>
            
            <x-forms.error name="description" />
            </div>
        </div>

        <div class="mt-4 flex items-center gap-x-6">
            <button type="submit" class="btn btn-soft btn-primary">Save</button>
        </div>
    </form>
</x-layout>