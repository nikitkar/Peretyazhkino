<?php define("PATH_COMPONENT", $_SERVER['DOCUMENT_ROOT'] . "/assets/component"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Реставрация диванов</title>
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/reset.css" />

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/constant.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/header.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/footer.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/servicesPage.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/lightbox.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script async src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <div class="page" id="page"></div>

    <?php include_once(PATH_COMPONENT . "/header.php") ?>

    <main class="main">
        <section class="mainTitle">
            <div class="container">
                <div class="mainTitleWrapper">
                    <div class="mainTitleInfo">
                        <h1 class="mainTitleInfo--title">
                            Реставрация диванов
                        </h1>
                        <ul class="mainTitleInfo--List">
                            <li class="mainTitleInfo--Item">
                                <p class="mainTitleInfo--ItemText">
                                    Рассрочка под 0% до 3 месяцев
                                </p>
                            </li>
                            <li class="mainTitleInfo--Item">
                                <p class="mainTitleInfo--ItemText">
                                    Бесплатный выезд мастера
                                </p>
                            </li>
                            <li class="mainTitleInfo--Item">
                                <p class="mainTitleInfo--ItemText">
                                    Дарим подарки каждому клиенту ( пуфик и
                                    подушку)
                                </p>
                            </li>
                            <li class="mainTitleInfo--Item">
                                <p class="mainTitleInfo--ItemText">
                                    100% гарантия качества с гарантией на 1
                                    год!
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mainTitleHRLeft" id="mainTitleHRLeft"></div>
            <div class="mainTitleHRRight" id="mainTitleHRRight"></div>
        </section>

        <section class="breadCrumbs">
            <div class="container">
                <div class="breadCrumbsWrapper">
                    <a class="breadCrumbs--text" href="/">Главная</a>
                    <span class="breadCrumbs--text breadCrumbs--text--active">/</span>
                    <a class="breadCrumbs--text breadCrumbs--text--active" href="
                    <?php $_SERVER['DOCUMENT_ROOT'] . "/assets/servicesPages/.php" ?>">Реставрация диванов</a>
                </div>
            </div>
        </section>

        <div class="mainHR"></div>

        <?php include_once(PATH_COMPONENT . "/feedBackComponent.php") ?>

        <section class="Info">
            <div class="container">
                <div class="InfoWrapper">
                    <div class="InfoLeft">
                        <p class="InfoLeft--text">
                            Компания «Перетяжкино» производит ремонт,
                            перетяжку и реставрацию мягкой мебели (Минск и
                            Минская область) с выездом мастера на территорию
                            заказчика. При этом работы, в зависимости от их
                            сложности и продолжительности, выполняются
                            непосредственно на дому или же мебель
                            транспортируется в наш цех.
                        </p>
                        <div class="InfoLeftInfo">
                            <div class="InfoLeftTitle">
                                <h2 class="InfoLeftTitle--title2">
                                    Заголовок Главный
                                </h2>
                                <h3 class="InfoLeftTitle--title3">
                                    Заголовок меньший
                                </h3>
                            </div>
                            <div class="InfoLeftLists">
                                <ul class="InfoLeftListNumber">
                                    <li class="InfoLeftItemNumber">
                                        <p class="InfoLeftItemNumber__Title">
                                            Полная или частичная замена
                                            обивочного материала. При этом
                                            возможны различные текстурные и
                                            цветовые комбинации.
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemNumber">
                                        <p class="InfoLeftItemNumber__Title">
                                            Полная или частичная замена
                                            обивочного материала. При этом
                                            возможны различные текстурные и
                                            цветовые комбинации.
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemNumber">
                                        <p class="InfoLeftItemNumber__Title">
                                            Полная или частичная замена
                                            обивочного материала. При этом
                                            возможны различные текстурные и
                                            цветовые комбинации.
                                        </p>
                                    </li>
                                </ul>

                                <ul class="InfoLeftListContent">
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            Полная или частичная замена
                                            обивочного материала. При этом
                                            возможны различные текстурные и
                                            цветовые комбинации.
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            Полная или частичная замена
                                            обивочного материала. При этом
                                            возможны различные текстурные и
                                            цветовые комбинации.
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            Полная или частичная замена
                                            обивочного материала. При этом
                                            возможны различные текстурные и
                                            цветовые комбинации.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="InfoRight">
                        <div class="InfoRightTable">
                            <table class="InfoRightTable--table">
                                <tr class="InfoRightTable--tr InfoRightTable--tr__Header">
                                    <td class="InfoRightTable--name InfoRightTable--name__first">
                                        Название
                                    </td>
                                    <td class="InfoRightTable--price InfoRightTable--price__first">
                                        Цена
                                    </td>
                                </tr>

                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Название
                                    </td>
                                    <td class="InfoRightTable--price">
                                        Цена
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Название
                                    </td>
                                    <td class="InfoRightTable--price">
                                        Цена
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Название
                                    </td>
                                    <td class="InfoRightTable--price">
                                        Цена
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <p class="InfoRight--text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Etiam eu turpis molestie,
                            dictum est a, mattis tellus. Sed dignissim,
                            metus nec fringilla accumsan, risus sem
                            sollicitudin lacus, ut interdum tellus elit sed
                            risus. Maecenas eget condimentum velit, sit amet
                            feugiat lectus. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos
                            himenaeos. Praesent auctor purus luctus enim
                            egestas, ac scelerisque ante pulvinar. Donec ut
                            rhoncus ex. Suspendisse ac rhoncus nisl, eu
                            tempor urna. Curabitur vel bibendum lorem. Morbi
                            convallis convallis diam sit amet lacinia.
                            Aliquam in elementum tellus.litora torquent per
                            conubia nostra, per inceptos himenaeos. Praesent
                            auctor purus luctus enim egestas, ac scelerisque
                            ante pulvinar. Donec ut rhoncus ex. Suspendisse
                            ac rhoncus nisl, eu tempor urna. Curabitur vel
                            bibendum lorem. Morbi convallis convallis diam
                            sit amet lacinia. Aliquam in elementum tellus.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once(PATH_COMPONENT . "/examplesWorkMainComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/reviewsMainComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/questionsComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/inviteDesignerComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/servicesNavComponent.php") ?>
    </main>

    <?php include_once(PATH_COMPONENT . "/footer.php") ?>
    <?php include_once(PATH_COMPONENT . "/modalComponent.php") ?>

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

            breakpoints: {
                320: {
                    slidesPerView: "auto",
                    spaceBetween: 40,

                    navigation: {
                        enabled: false,
                    },
                },
                1100: {
                    spaceBetween: 135,

                    navigation: {
                        enabled: true,
                    },
                },
            },
        });
    </script>

    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/servicesPage.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/modal.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/openFullScreen.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/sliderBeforeAfter.js"></script>
</body>

</html>