<!DOCTYPE html>
<html>
<head>
    @vite("resources/css/app.css")
    <title>My Laravel App</title>
</head>
<body>
    <div class="container">
        <!-- Content section -->
        @yield('content')
    </div>

    <footer>
        <div>
            <span class="footer-text"><a href="{{ config('app.repo') }}" target="_blank"> {{ config('app.version' )}} </a> - {{ config('app.author') }}</span>
        </div>
    </footer>
</body>
</html>
