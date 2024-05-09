<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white font-hanken-grotesk">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="">
                    <img src="{{Vite::asset('resources/images/logo.svg') }}" alt="logo"/>
                </a>
            </div>
            <div class="space-x-6">
                <x-nav-link href="">Jobs</x-nav-link>
                <x-nav-link href="">Careers</x-nav-link>
                <x-nav-link href="">Salaries</x-nav-link>
                <x-nav-link href="">Companies</x-nav-link>
            </div>
            <div>
                @guest
                <x-nav-link href="/login">Post a Job</x-nav-link>
                @endguest

                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <x-form-button>Log Out</x-form-button>
                    </form>
                @endauth
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
