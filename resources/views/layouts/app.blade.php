<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>IRIS</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>

<div class="d-flex">

    @include('layouts.sidebar')

    <div class="content flex-grow-1">

        @include('layouts.navbar')

        <main class="container-fluid p-4">

            @yield('content')

        </main>

        @include('layouts.footer')

    </div>

</div>

</body>

</html>