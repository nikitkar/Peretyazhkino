<script type="module">
    import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";

    var swiperreviews = new Swiper(".swiperReviews", {
        slidesPerView: "auto",
        spaceBetween: 20,

        grabCursor: true,

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
        slidesPerView: "auto",
        spaceBetween: 135,
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
                slidesPerView: "auto",
                spaceBetween: 40,

                navigation: {
                    enabled: false,
                },

                pagination: {
                    enabled: true,
                },
            },
            1100: {
                spaceBetween: 135,

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