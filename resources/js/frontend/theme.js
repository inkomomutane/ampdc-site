'use strict';
import {
    Dropdown,
    Modal,
    Offcanvas,
    Popover,
    Tooltip
} from 'bootstrap';
import Headhesive from "headhesive";
import './bootstrap';
import {
    tns
} from 'tiny-slider';
import Aos from 'aos';
import '@splidejs/splide/css';
import Splide from '@splidejs/splide';
//player
import Plyr from 'plyr';
// GlightBox
import GLightbox from 'glightbox';


import Rellax from 'rellax';
import imagesLoaded from 'images-loaded';
import iTooltip from 'itooltip';
import feather from 'feather-icons';
feather.replace();

var theme = {
    /**
     * Theme's components/functions list
     * Comment out or delete the unnecessary component.
     * Some components have dependencies (plugins).
     * Do not forget to remove dependency from src/js/vendor/ and recompile.
     */
    init: function () {
        theme.stickyHeader();
        theme.subMenu();
        theme.offCanvas();
        theme.onepageHeaderOffset();
        theme.anchorSmoothScroll();
        theme.backgroundImage();
        theme.backgroundImageMobile();
        theme.imageHoverOverlay();
        theme.rellax();
        theme.pageProgress();
        theme.tinnySlider();
        theme.aos();
        theme.splide();
        theme.plyr();
        theme.lightbox();
        theme.loader();
        theme.bsTooltips();
        theme.bsPopovers();
        theme.iTooltip();
        theme.bsModal();
        theme.imagesRender();
        theme.imagesRenderBackground();
        theme.renderAncoraLink();
    },
    /**
     * Sticky Header
     * Enables sticky behavior on navbar on page scroll
     * Requires assets/js/vendor/headhesive.min.js
     */
    stickyHeader: () => {
        var navbar = document.querySelector(".navbar");
        if (navbar == null) return;
        var options = {
            offset: 350,
            offsetSide: 'top',
            classes: {
                clone: 'navbar-clone fixed',
                stick: 'navbar-stick',
                unstick: 'navbar-unstick',
            },
            onStick: function () {
                var navbarClonedClass = this.clonedElem.classList;
                if (navbarClonedClass.contains('transparent') && navbarClonedClass.contains('navbar-dark')) {
                    this.clonedElem.className = this.clonedElem.className.replace("navbar-dark", "navbar-light");
                }
            }
        };
        var banner = new Headhesive('.navbar', options);
    },
    /**
     * Sub Menus
     * Enables multilevel dropdown
     */
    subMenu: function () {
        const CLASS_NAME = 'has-child-dropdown-show';
        Dropdown.prototype.toggle = function (_original) {
            return function () {
                document.querySelectorAll('.' + CLASS_NAME).forEach(function (e) {
                    e.classList.remove(CLASS_NAME);
                });
                let dd = this._element.closest('.dropdown').parentNode.closest('.dropdown');
                for (; dd && dd !== document; dd = dd.parentNode.closest('.dropdown')) {
                    dd.classList.add(CLASS_NAME);
                }
                return _original.call(this);
            }
        }(Dropdown.prototype.toggle);
        document.querySelectorAll('.dropdown').forEach(function (dd) {
            dd.addEventListener('hide.bs.dropdown', function (e) {
                if (this.classList.contains(CLASS_NAME)) {
                    this.classList.remove(CLASS_NAME);
                    e.preventDefault();
                }
                e.stopPropagation();
            });
        });
    },
    /**
     * Offcanvas
     * Enables offcanvas-nav, closes offcanvas on anchor clicks
     */
    offCanvas: function () {
        const navOffCanvasBtn = document.querySelectorAll(".offcanvas-nav-btn");
        const navOffCanvas = document.querySelector('.navbar:not(.navbar-clone) .offcanvas-nav');
        const bsOffCanvas = new Offcanvas(navOffCanvas, {
            scroll: true
        });
        const scrollLink = document.querySelectorAll('.onepage .navbar li a.scroll');
        navOffCanvasBtn.forEach(e => {
            e.addEventListener('click', event => {
                bsOffCanvas.show();
            })
        });
        scrollLink.forEach(e => {
            e.addEventListener('click', event => {
                bsOffCanvas.hide();
            })
        });
    },

    /**
     * Onepage Header Offset
     * Adds an offset value to anchor point equal to sticky header height on a onepage
     */
    onepageHeaderOffset: function () {
        const header_height = document.querySelector(".navbar").offsetHeight;
        const shrinked_header_height = 75;
        const sections = document.querySelectorAll(".onepage section");
        sections.forEach(section => {
            section.style.paddingTop = shrinked_header_height + 'px';
            section.style.marginTop = '-' + shrinked_header_height + 'px';
        });
        const first_section = document.querySelector(".onepage section:first-of-type");
        if (first_section != null) {
            first_section.style.paddingTop = header_height + 'px';
            first_section.style.marginTop = '-' + header_height + 'px';
        }
    },
    /**
     * Anchor Smooth Scroll
     * Adds smooth scroll animation to links with .scroll class
     * Requires assets/js/vendor/smoothscroll.js
     */
    anchorSmoothScroll: function () {
        const links = document.querySelectorAll(".scroll");
        for (const link of links) {
            link.addEventListener("click", clickHandler);
        }

        function clickHandler(e) {
            e.preventDefault();
            this.blur();
            const href = this.getAttribute("href");
            const offsetTop = document.querySelector(href).offsetTop;
            scroll({
                top: offsetTop,
                behavior: "smooth"
            });
        }
    },
    /**
     * Page Progress
     * Shows page progress on the bottom right corner of pages
     */
    pageProgress: function () {
        var progressWrap = document.querySelector('.progress-wrap');
        var progressPath = document.querySelector('.progress-wrap path');
        var pathLength = progressPath.getTotalLength();
        var offset = 50;
        if (progressWrap != null) {
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
            window.addEventListener("scroll", function (event) {
                var scroll = document.body.scrollTop || document.documentElement.scrollTop;
                var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var progress = pathLength - (scroll * pathLength / height);
                progressPath.style.strokeDashoffset = progress;
                var scrollElementPos = document.body.scrollTop || document.documentElement.scrollTop;
                if (scrollElementPos >= offset) {
                    progressWrap.classList.add("active-progress")
                } else {
                    progressWrap.classList.remove("active-progress")
                }
            });
            progressWrap.addEventListener('click', function (e) {
                e.preventDefault();
                window.scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
            });
        }
    },
    tinnySlider: function () {
        if (document.getElementsByClassName('tiny-single-item').length > 0) {
            var slider = tns({
                container: '.tiny-single-item',
                items: 1,
                controls: false,
                mouseDrag: true,
                loop: true,
                rewind: true,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 8000,
                navPosition: "bottom",
                speed: 800,
                gutter: 16,
            });
        };

        if (document.getElementsByClassName('tiny-two-item').length > 0) {
            var slider = tns({
                container: '.tiny-two-item',
                controls: false,
                mouseDrag: true,
                loop: true,
                rewind: true,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 8000,
                navPosition: "bottom",
                speed: 800,
                gutter: 12,
                responsive: {
                    992: {
                        items: 2
                    },

                    767: {
                        items: 2
                    },

                    320: {
                        items: 1
                    },
                },
            });
        };

        if (document.getElementsByClassName('tiny-three-item').length > 0) {
            var slider = tns({
                container: '.tiny-three-item',
                controls: false,
                mouseDrag: true,
                loop: true,
                rewind: true,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 8000,
                navPosition: "bottom",
                speed: 800,
                gutter: 12,
                responsive: {
                    992: {
                        items: 3
                    },

                    767: {
                        items: 2
                    },

                    320: {
                        items: 1
                    },
                },
            });
        };

        if (document.getElementsByClassName('tiny-four-item').length > 0) {
            var slider = tns({
                container: '.tiny-four-item',
                controls: false,
                mouseDrag: true,
                loop: true,
                rewind: true,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 8000,
                navPosition: "bottom",
                speed: 800,
                gutter: 12,
                responsive: {
                    992: {
                        items: 4
                    },

                    767: {
                        items: 2
                    },

                    320: {
                        items: 1
                    },
                },
            });
        };



        if (document.getElementsByClassName('roadmaps').length > 0) {
            var slider = tns({
                container: '.roadmaps',
                controls: false,
                mouseDrag: true,
                loop: true,
                rewind: true,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 8000,
                nav: false,
                speed: 800,
                gutter: 12,
                responsive: {
                    992: {
                        items: 4
                    },

                    767: {
                        items: 2
                    },

                    320: {
                        items: 1
                    },
                },
            });
        };

        if (document.getElementsByClassName('tiny-six-item').length > 0) {
            var slider = tns({
                container: '.tiny-six-item',
                controls: false,
                mouseDrag: true,
                loop: true,
                rewind: true,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 8000,
                navPosition: "bottom",
                speed: 800,
                gutter: 12,
                responsive: {
                    992: {
                        items: 6
                    },

                    767: {
                        items: 3
                    },

                    320: {
                        items: 1
                    },
                },
            });
        };



        if (document.getElementsByClassName('tiny-twelve-item').length > 0) {
            var slider = tns({
                container: '.tiny-twelve-item',
                controls: true,
                mouseDrag: true,
                loop: true,
                rewind: true,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 8000,
                navPosition: "bottom",
                controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
                nav: false,
                speed: 800,
                gutter: 0,
                responsive: {
                    1025: {
                        items: 10
                    },

                    992: {
                        items: 8
                    },

                    767: {
                        items: 6
                    },

                    320: {
                        items: 2
                    },
                },
            });
        };



        if (document.getElementsByClassName('tiny-five-item').length > 0) {
            var slider = tns({
                container: '.tiny-five-item',
                controls: true,
                mouseDrag: true,
                loop: true,
                rewind: true,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 8000,
                navPosition: "bottom",
                controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
                nav: false,
                speed: 800,
                gutter: 0,
                responsive: {
                    1025: {
                        items: 5
                    },

                    992: {
                        items: 4
                    },

                    767: {
                        items: 3
                    },

                    320: {
                        items: 2
                    },
                },
            });
        };

    },
    aos: function () {
        Aos.init();
    },
    splide: function () {
        if (document.getElementsByClassName('splide').length > 0) {
            document.addEventListener('DOMContentLoaded', function () {
                var slider = new Splide('.splide', {
                    autoplay: true,
                    type: 'loop',
                    pagination: true,
                    isNavigation: false,
                    lazyLoad: true,
                });
                slider.mount();
            });
        }
    },
    plyr: function () {
        var players = Plyr.setup('.player', {
            loadSprite: true,
        });
    },
    lightbox: function () {
        const lightbox = GLightbox({
            selector: '*[data-glightbox]',
            touchNavigation: true,
            loop: false,
            zoomable: false,
            autoplayVideos: true,
            moreLength: 0,
            slideExtraAttributes: {
                poster: ''
            },
            plyr: {
                css: '',
                js: '',
                config: {
                    ratio: '16:9',
                    fullscreen: {
                        enabled: false,
                        iosNative: false
                    },
                    youtube: {
                        noCookie: true,
                        rel: 0,
                        showinfo: 0,
                        iv_load_policy: 3
                    },
                    vimeo: {
                        byline: false,
                        portrait: false,
                        title: false,
                        transparent: false
                    }
                }
            },
        });
    },
    backgroundImage: function () {
        var bg = document.querySelectorAll(".bg-image");
        for (var i = 0; i < bg.length; i++) {
            var url = bg[i].getAttribute('data-image-src');
            bg[i].style.backgroundImage = "url('" + url + "')";
        }
    },
    /**
     * Background Image Mobile
     * Adds .mobile class to background images on mobile devices for styling purposes
     */
    backgroundImageMobile: function () {
        var isMobile = (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i)) ? true : false;
        if (isMobile) {
            document.querySelectorAll(".image-wrapper").forEach(e => {
                e.classList.add("mobile")
            })
        }
    },
    imageHoverOverlay: function () {
        var overlay = document.querySelectorAll('.overlay > a, .overlay > span');
        for (var i = 0; i < overlay.length; i++) {
            var overlay_bg = document.createElement('span');
            overlay_bg.className = "bg";
            overlay[i].appendChild(overlay_bg);
        }
    },
    /**
     * Rellax.js
     * Adds parallax animation to shapes and elements
     * Requires assets/js/vendor/rellax.min.js
     */
    rellax: function () {
        if (document.querySelector(".rellax") != null) {
            window.onload = function () {
                var rellax = new Rellax('.rellax', {
                    speed: 2,
                    center: true,
                    breakpoints: [576, 992, 1201]
                });
                var projects_overflow = document.querySelectorAll('.projects-overflow');
                imagesLoaded(projects_overflow, function () {
                    rellax.refresh();
                });
            }
        }
    },
    loader: function () {
        var preloader = document.querySelector('.page-loader');
        if(preloader != null) {
          document.body.onload = function(){
            setTimeout(function() {
              if( !preloader.classList.contains('done') )
              {
                preloader.classList.add('done');
              }
            }, 1000)
          }
        }
      },
        /**
   * Bootstrap Tooltips
   * Enables Bootstrap tooltips
   * Requires Poppers library
   */
  bsTooltips: function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new Tooltip(tooltipTriggerEl, {
        trigger: 'hover'
      })
    });
    var tooltipTriggerWhite = [].slice.call(document.querySelectorAll('[data-bs-toggle="white-tooltip"]'))
    var tooltipWhite = tooltipTriggerWhite.map(function(tooltipTriggerEl) {
      return new Tooltip(tooltipTriggerEl, {
        customClass: 'white-tooltip',
        trigger: 'hover',
        placement: 'left'
      })
    })
  },
  /**
   * Bootstrap Popovers
   * Enables Bootstrap popovers
   * Requires Poppers library
   */
  bsPopovers: function () {
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
      return new Popover(popoverTriggerEl)
    })
  },
    /**
   * Bootstrap Modal
   * Enables Bootstrap modal popup
   */
     bsModal: function () {
        if(document.querySelector(".modal-popup") != null) {
          var myModalPopup = new Modal(document.querySelector('.modal-popup'));
          setTimeout(function() {
            myModalPopup.show();
          }, 200);
        }
        // Fixes jumping of page progress caused by modal
        var innerWidth = window.innerWidth;
        var clientWidth = document.body.clientWidth;
        var scrollSize = innerWidth - clientWidth;
        var myModalEl = document.querySelectorAll('.modal');
        var navbarFixed = document.querySelector('.navbar.fixed');
        var pageProgress = document.querySelector('.progress-wrap');
        function setPadding() {
          if(navbarFixed != null) {
            navbarFixed.style.paddingRight = scrollSize + 'px';
          }
          if(pageProgress != null) {
            pageProgress.style.marginRight = scrollSize + 'px';
          }
        }
        function removePadding() {
          if(navbarFixed != null) {
            navbarFixed.style.paddingRight = '';
          }
          if(pageProgress != null) {
           pageProgress.style.marginRight = '';
          }
        }
        myModalEl.forEach(myModalEl => {
          myModalEl.addEventListener('show.bs.modal', function(e) {
            setPadding();
          })
          myModalEl.addEventListener('hidden.bs.modal', function(e) {
            removePadding();
          })
        });
      },
      /**
       * iTooltip
       * Enables custom tooltip style for image hover docs/elements/hover.html
       * Requires assets/js/vendor/itooltip.min.js
       */
      iTooltip: function () {
        var tooltip = new iTooltip('.itooltip')
        tooltip.init({
          className: 'itooltip-inner',
          indentX: 15,
          indentY: 15,
          positionX: 'right',
          positionY: 'bottom'
        })
      },

      imagesRender : function(){

            document.addEventListener('DOMContentLoaded', function () {
                const links = document.querySelectorAll('.media_data_image');
                links.forEach(element => {
                    let method = element.getAttribute('data-image');
                    element.src = new URL (`../../img/${method}`, import.meta.url).href;
                    console.log(element.src);
                });
            });
      },

      renderAncoraLink: function(){
        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('.inject_link_js');

            links.forEach(element => {
                let method = element.getAttribute('data-render-link');
                element.href = new URL (`../../${method}`, import.meta.url).href;
                console.log(element.href);
            });
        });
      },

      imagesRenderBackground : function(){
        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('.media_data_image_background');

            links.forEach(element => {
                let method = element.getAttribute('data-image');
                element.style.backgroundImage = `url(${ new URL (`../../img/${method}`, import.meta.url).href})`;
                console.log(element.src);
            });
        });
      }
}
theme.init();
