<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/sputnik-16.png')  }}"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <div class="px-11">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/sputnik-32.png')  }}" alt="">
                </a>
            </div>

            <div class="space-x-5 font-bold">
                <a href="#">My Origins</a>
                <a href="#">Search</a>
                <a href="#">Logs</a>
                <a href="#">Profile</a>
            </div>

            <div>
                <a href="#">Add Origin</a>
            </div>
        </nav>

        <main class="mt-11 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
