<a {{ $attributes->merge(['class' => 'card bg-base-200 text-neutral-content w-85']) }}">
    <div class="card-body">
        <h2 class="card-title">{{ $slot }}</h2>
    </div>
</a>