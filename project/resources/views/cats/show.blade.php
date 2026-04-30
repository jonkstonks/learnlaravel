<x-layout title="Cats">
    <div class="mt-8">
        <img
            class="h-120 w-120 object-contain object-left"
            src="{{ $cat->url }}"
            alt="Random cat"
            @if($cat->needs_no_referrer) referrerpolicy="no-referrer" @endif
        >
        <p class="mt-6 font-semibold"><a href="/cats/random" class="font-semibold underline hover:text-pink-500">Summon a new cat.</a></p>
    </div>
</x-layout>