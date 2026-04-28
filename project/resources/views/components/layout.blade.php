@props([
'title' => 'Laravel' // default title if not provided
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | {{ $title }}</title>
    <style>
        body {
            max-width: 800px;
            margin: 1rem;
        }

        nav>a {
            color: #505;
            text-transform: uppercase;
            text-decoration: none;
            padding-right: 0.5rem;
        }

        a:hover {
            color: #F00BA2;
        }

        .card {
            background: #DECADE;
            padding: 1rem;
            border-radius: 0.5rem;
            text-align: center;
        }

        .max-w-400 {
            max-width: 400px;
        }
    </style>
</head>

<body>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact</a>
    </nav>

    <main>
        {{ $slot }}
    </main>

</body>

</html>