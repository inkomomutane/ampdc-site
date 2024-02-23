<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')

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
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="k7U0J6Iw"></script>

    <x-preloader />

    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <!-- Back to top button -->
    <button type="button" data-te-ripple-init data-te-ripple-color="light" class="rounded-full !fixed bottom-5 right-5 hidden rounded-full bg-red-600 p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " id="btn-back-to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="h-4 w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
        </svg>
    </button>


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

    <script type="text/javascript">
    
        const mybutton = document.getElementById("btn-back-to-top");


        const scrollFunction = () => {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.classList.remove("hidden");
            } else {
                mybutton.classList.add("hidden");
            }
        };
        const backToTop = () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        };

        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        window.addEventListener("scroll", scrollFunction);
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>





</body>

</html>