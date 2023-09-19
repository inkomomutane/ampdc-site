<!doctype html>
<html lang="pt">

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
    @vite(['resources/js/splide.js', 'resources/css/gtranslator.css'])
</head>

<body class="text-gray-800">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0"
        nonce="k7U0J6Iw"></script>

    <x-preloader />

    @include('partials/nav')
    @yield('content')
    @include('partials/footer')
    <script>
        addEventListener('load', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
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
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'pt',
                includedLanguages: 'es,fr,en,pt,da,nl,nl-b',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                multilanguagePage: true,
                gaTrack: true,
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>





</body>

</html>
