<x-layout title="Cats">
    <div class="mt-8">
        <p class="mb-6 font-semibold"><a href="/cats/random" class="font-semibold underline hover:text-pink-500"> > Click to summon a new cat < </a></p>
        <img
            class="h-120 w-120 object-contain object-left"
            src="{{ $cat->url }}"
            alt="Random cat"
            @if($cat->needs_no_referrer) referrerpolicy="no-referrer" @endif
        >
    </div>
</x-layout>