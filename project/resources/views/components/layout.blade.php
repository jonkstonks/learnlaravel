@props([
'title' => 'Laravel' // default title if not provided
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | {{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-neutral-100 p-6 max-w-xl mx-auto text-black">
    <nav class="bg-neutral-primary fixed w-full z-20 top-0 inset-s-0 border-b border-default">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">
            @if ($title == 'Ideas')
                <a href="/ideas" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-xl text-heading uppercase font-semibold whitespace-nowrap">{{ $title }}</span>
                </a>
            @else
                <a href="/cats" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-xl text-heading uppercase font-semibold whitespace-nowrap">{{ $title }}</span>
                </a>
            @endif

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
                <li>
                <a href="/ideas" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Ideas</a>
                </li>
                <li>
                <a href="/cats" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Cats</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <main>
        <h1 class="my-8 pt-6 text-4xl hover:text-pink-400 font-bold uppercase tracking-tight text-heading md:text-5xl lg:text-6xl cursor-default">{{ $title }}</h1>
        {{ $slot }}
    </main>

</body>

</html>