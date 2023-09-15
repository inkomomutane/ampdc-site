import Splide from "@splidejs/splide";
import "@splidejs/splide/css";
document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("news")) {
        const news = new Splide("#news", {
            autoplay: true,
            type: "loop",
            pagination: true,
            arrows: false,
            perPage: 3,
            gap: 10,
            breakpoints: {
                640: {
                    perPage: 1,
                },
                768: {
                    perPage: 2,
                },
            },
        });
        news.mount();
    }
    if (document.getElementById("interventionAreas")) {
        const interventionAreas = new Splide("#interventionAreas", {
            autoplay: true,
            type: "loop",
            pagination: true,
            arrows: false,
            perPage: 3,
            gap: 10,
            breakpoints: {
                640: {
                    perPage: 1,
                },
                768: {
                    perPage: 2,
                },
            },
        });
        interventionAreas.mount();
    }
});
