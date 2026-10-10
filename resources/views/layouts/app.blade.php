<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portofolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">
    <header>
        @include('partials.header')
    </header>
    <main class="container flex-grow-1 py-4">
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>