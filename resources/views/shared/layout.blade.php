<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
    <header>
        @include('shared.header')
    </header>

    <main>
        <div class="d-flex flex-column justify-content-center align-items-center">
            @yield('content')
        </div>
    </main>
    
    <footer>
        @include('shared.footer')
    </footer>
</body>
</html>