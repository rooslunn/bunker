<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <div>
        <nav>
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/sputnik-logo.png')  }}" alt="">
                </a>
            </div>

            <div>
                links
            </div>

            <div>
                add origin
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
