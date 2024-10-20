<button id="scrollToTopBtn" class="z-40 fixed bottom-5 right-5 bg-primary-500 rounded-full
 text-white text-xl w-12 h-12 p-3 hidden font-black transition-all
 shadow-2xl  items-center justify-center
 ">
    <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.6568 8.96219L16.2393 10.3731L12.9843 7.10285L12.9706 20.7079L10.9706 20.7059L10.9843 7.13806L7.75404 10.3532L6.34314 8.93572L12.0132 3.29211L17.6568 8.96219Z" fill="currentColor"></path>
    </svg>
</button>

@push('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        // Function to toggle the visibility of the button and adjust the border radius
        const handleScroll = () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;

            // Show button after scrolling half the screen height
            if (scrollTop > windowHeight / 6) {
                scrollToTopBtn.classList.remove("hidden");
            } else {
                scrollToTopBtn.classList.add("hidden");
            }


        };

        // Scroll back to the top when the button is clicked
        scrollToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });

        // Attach scroll event listener
        window.addEventListener("scroll", handleScroll);
    });

</script>
@endpush
