<x-layout>
    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">register</legend>
            
            <label class="label" for="name">username</label>
            <input class="input" name="name" placeholder="username" required />

            <label class="label" for="email">email</label>
            <input type="email" name="email" class="input" placeholder="email" required />

            <label class="label" for="password">password</label>
            <input type="password" name="password" class="input" placeholder="password" required />

            <button class="btn btn-neutral mt-4">register</button>
        </fieldset>
    </form>
</x-layout>