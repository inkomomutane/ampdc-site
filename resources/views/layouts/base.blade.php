<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script>
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.preloader');
            preloader?.classList.add('hidden');
        });
    </script>
    @vite('resources/js/splide.js')
</head>

<body class="text-gray-800">
    <x-preloader />
    @include('partials/nav')
    @yield('content')
    @include('partials/footer')
    <script>
        addEventListener('load', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    // e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
