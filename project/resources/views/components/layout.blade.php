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
    <style>
        a:hover {
            color: #ff90e3;
        }
    </style>
</head>

<body class="bg-neutral-200 p-6 max-w-xl mx-auto">
    
    <main>
        {{ $slot }}
    </main>

</body>

</html>