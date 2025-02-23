<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>happy ending360</title>

    {{-- this working fine --}}
    {{-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

{{-- {{ HTML::style('css/app.css', array('media' => 'print')) }} --}}
</head>
<body>
    <header>
        <h1 class="heading">this is heading</h1>
        <nav>
            <a href="/test">users</a>
            <a href="/test/create">create users</a>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
</body>
</html>