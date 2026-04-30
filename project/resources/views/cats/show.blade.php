<x-layout title="Cats">
    <div class="mt-8">
        <img class="h-100 w-100 object-contain object-left" src="{{ $cat->url }}" alt="Random cat" referrerpolicy="no-referrer">
        <p class="mt-6 font-semibold"><a href="/cats/random" class="font-semibold underline hover:text-pink-500">Summon a new cat.</a></p>
    </div>
</x-layout>