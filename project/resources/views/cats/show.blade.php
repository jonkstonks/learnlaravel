<x-layout title="Cats">
    <div class="mt-8 flex flex-col min-h-screen items-center">
        <p class="m-2">
            <a id="summon-btn" href="/cats/random" class="btn">Summon a new cat</a>
        </p>
        <img
            id="cat-img"
            class="h-120 w-120 object-contain object-center mt-4"
            src="{{ $cat->url }}"
            alt="Random cat"
            @if($cat->needs_no_referrer) referrerpolicy="no-referrer" @endif
        >
    </div>

    @vite('resources/js/confetti.js')
</x-layout>

