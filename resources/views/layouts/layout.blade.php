<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/favicon.ico')}}">

    <title>@yield('title')</title>

    @vite('resources/js/app.js')

</head>

<body data-bs-theme="dark">


    @include( 'partials.header' )




    <main >

        @yield('content')

    </main>


    @include( 'partials.footer' )

</body>

</html>
