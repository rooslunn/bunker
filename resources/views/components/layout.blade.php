<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/bunker-16.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-11">
    <div class="px-11">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/bunker-128.png') }}" alt="">
                </a>
            </div>

            <div class="space-x-5 font-bold">
                <a href="{{ route('jobs.index') }}">Jobs</a>
                <a href="#">Career</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div>
                    <a href="{{ route('jobs.create') }}">Post a Job</a>
                </div>
            @endauth

            @guest
                <div class="space-x-5 font-bold">
                    <a href="{{ route('register') }}">Sign Up</a>
                    <a href="{{ route('login') }}">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="mt-11 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
