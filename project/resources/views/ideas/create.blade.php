<x-layout title="Ideas">
    <form method="POST" action="/ideas">
        @csrf
        
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">create a new idea</legend>

            <label class="label" for="description">description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="3"
                    placeholder="your idea"
                    class="textarea w-full @error('description') textarea-error @enderror"
                ></textarea>
            <x-forms.error name="description"/>
            <button type="submit" class="btn btn-soft btn-primary mt-4">create</button>
        </fieldset>
        
    </form>
</x-layout>