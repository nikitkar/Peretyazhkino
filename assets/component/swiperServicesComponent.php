<script type="module">
    import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";

    var swiperReviews = new Swiper(".swiperReviews", {
        slidesPerView: "auto",
        spaceBetween: 20,

        grabCursor: false,

        scrollbar: {
            el: ".swiper-scrollbar",
            draggable: true,
        },

        breakpoints: {
            320: {
                slidesPerView: "auto",
                spaceBetween: 20,
            },
            1100: {
                spaceBetween: 20,
            },
        },
    });

    var swiperExamplesWork = new Swiper(".swiperExamplesWork", {
        // slidesPerView: "auto",
        spaceBetween: 150,
        slidesPerGroup: 1,

        allowTouchMove: false,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        pagination: {
            el: ".examplesWorkPagination",
            type: "bullets",
            clickable: true,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 40,

                navigation: {
                    enabled: false,
                },

                pagination: {
                    enabled: true,
                },
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 40,

                navigation: {
                    enabled: false,
                },

                pagination: {
                    enabled: true,
                },
            },
            1100: {
                slidesPerView: 2,
                spaceBetween: 150,

                navigation: {
                    enabled: true,
                },

                pagination: {
                    enabled: false,
                },
            },
        },
    });
</script>