<x-layout title="Cats">
    <div class="mt-8 flex flex-col min-h-screen items-center">
        <p class="mb-6 text-xl font-semibold"><a href="/cats/random" class="font-semibold underline hover:text-pink-500"> > Click to summon a new cat < </a></p>
        <img
            class="h-120 w-120 object-contain object-center"
            src="{{ $cat->url }}"
            alt="Random cat"
            @if($cat->needs_no_referrer) referrerpolicy="no-referrer" @endif
        >
    </div>
</x-layout>