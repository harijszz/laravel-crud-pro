<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="holy-grail-grid">
    <header class="header">
Header
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <section class="left-sidebar">Left sidebar</section>
    <aside class="right-sidebar">Right sidebar</aside>
    <footer class="footer">&copy; 2025 Mans Veikals</footer>
</div>
</body>
</html>
