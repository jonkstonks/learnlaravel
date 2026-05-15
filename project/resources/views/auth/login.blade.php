<x-layout>
    <form action="/login" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">log in</legend>

            <label class="label" for="email">email</label>
            <input type="email" name="email" class="input" placeholder="email" required />
            <x-forms.error name="email"/>
            
            <label class="label" for="password">password</label>
            <input type="password" name="password" class="input" placeholder="password" required />
            <x-forms.error name="password"/>

            <button class="btn btn-neutral mt-4">log in</button>
        </fieldset>
    </form>
</x-layout>