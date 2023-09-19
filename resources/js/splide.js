import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
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

    if (document.getElementById("histories")) {
        const histories = new Splide("#histories", {
            autoplay: true,
            type: "loop",
            pagination: true,
            arrows: false,
            perPage: 1,
            gap: 10,
        });
        histories.mount();
    }
    if (document.getElementById("partiners")) {
        const partiners = new Splide("#partiners", {
            type   : 'loop',
            drag   : 'free',
            focus  : 'center',
            arrows : false,
            perPage : 5,
            pagination:false,
            autoScroll: {
                speed: 1,
            },
            breakpoints: {
                640: {
                    perPage: 3,
                },
                768: {
                    perPage: 5,
                },
            },
        });
        partiners.mount({ AutoScroll });
    }
});
