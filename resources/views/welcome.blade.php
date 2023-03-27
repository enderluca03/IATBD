<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ asset('/css/welcome-page.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <main>
            <section class="login">
                <a href='{{ route('login') }}'>Login</a>
            </section>
            <section class="register">
                <a href='{{ route('register') }}'>Register</a>
            </section>
        </main>
    </body>
</html>
