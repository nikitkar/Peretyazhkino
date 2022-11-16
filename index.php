<?php define("PATH_COMPONENT", $_SERVER['DOCUMENT_ROOT'] . "/assets/component"); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERETYAZHKINO</title>

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/reset.css" />

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/constant.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/header.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/footer.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/mainPage.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/lightbox.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script async src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include_once(PATH_COMPONENT . "/header.php") ?>
    <main class="main">
        <section class="mainBlock">
            <div class="container1700">
                <div class="mainBlockWrapper">
                    <div class="mainBlockContent">
                        <div class="container">
                            <div class="mainBlockContentWrapper">
                                <h1 class="mainBlockContent--Title">
                                    Ваша любимая мебель будет как новая
                                </h1>

                                <div class="mainBlockImageModile">
                                    <div class="mainBlockImage--img"></div>
                                </div>

                                <ul class="mainBlockContent--List">
                                    <li class="mainBlockContent--Item">
                                        <p class="mainBlockContent--ItemText">
                                            Рассрочка под 0% до 3 месяцев
                                        </p>
                                    </li>
                                    <li class="mainBlockContent--Item">
                                        <p class="mainBlockContent--ItemText">
                                            Бесплатный выезд мастера
                                        </p>
                                    </li>
                                    <li class="mainBlockContent--Item">
                                        <p class="mainBlockContent--ItemText">
                                            Дарим подарки каждому клиенту (
                                            пуфик и подушку)
                                        </p>
                                    </li>
                                    <li class="mainBlockContent--Item">
                                        <p class="mainBlockContent--ItemText">
                                            100% гарантия качества с
                                            гарантией на 1 год!
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainBlockHRLeftBefore" id="mainBlockHRLeftBefore"></div>
            <div class="mainBlockHRLeftAfter" id="mainBlockHRLeftAfter"></div>

            <div class="mainBlockHRRightBefore" id="mainBlockHRRightBefore"></div>
            <div class="mainBlockHRRightAfter" id="mainBlockHRRightAfter"></div>

            <div class="mainBlockImage">
                <div class="mainBlockImage--img"></div>
            </div>
        </section>

        <section class="mainFeedBack">
            <div class="container1700">
                <div class="mainFeedBackWrapper">
                    <div class="mainFeedBackAnchor">
                        <a class="mainFeedBackAnchor--Content" href="#examplesWork">Примеры работ</a>
                    </div>

                    <?php include_once(PATH_COMPONENT . "/feedBackComponent.php") ?>
                </div>
            </div>
        </section>

        <section class="infoBlock">
            <div class="container1700">
                <div class="infoBlockWrapper">
                    <div class="infoBlockContent">
                        <div class="container">
                            <div class="infoBlockContentWrapper">
                                <h2 class="infoBlockContent--Title">
                                    ЛИДЕР ПО ПЕРЕТЯЖКЕ МЯГКОЙ МЕБЕЛИ
                                </h2>
                                <p class="infoBlockContent--SubTitle">
                                    Перетяжкино - крупнейшая мастерская по в
                                    Беларуси по восстановлению мебели с 10
                                    летним опытом на рынке перетяжки мягкой
                                    мебели различной сложности, начиная с
                                    самых простых стульев и заканчивая
                                    нестандартными диванами от известных
                                    дизайнеров. В нашей работе мы применяем
                                    итальянские мебельные технологии.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="infoBlock--BlockBoldTitle">
                        <div class="infoBlock--BlockBoldTitle__Wrapper">
                            <h1 class="infoBlock--BlockBoldTitle__Title">
                                ПЕРЕТЯ
                            </h1>
                        </div>
                    </div>

                    <?php include_once(PATH_COMPONENT . "/examplesWorkMainComponent.php") ?>

                    <div class="infoBlock--BlockBoldTitle right1">
                        <div class="infoBlock--BlockBoldTitle__Wrapper">
                            <h1 class="infoBlock--BlockBoldTitle__Title right">
                                ЖКИНО
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="numbersBlock">
            <div class="container">
                <div class="numbersBlockWrapper">
                    <ul class="numbersBlockList">
                        <li class="numbersBlockItem">
                            <h2 class="numbersBlockItem--Title">10</h2>
                            <p class="numbersBlockItem--Content">
                                лет лидер рынка
                            </p>
                        </li>
                        <div class="numbersBlockItem--HR"></div>

                        <li class="numbersBlockItem">
                            <h2 class="numbersBlockItem--Title">2 531</h2>
                            <p class="numbersBlockItem--Content">
                                образцов материалов
                            </p>
                        </li>
                        <div class="numbersBlockItem--HR"></div>

                        <li class="numbersBlockItem">
                            <h2 class="numbersBlockItem--Title">3</h2>
                            <p class="numbersBlockItem--Content">
                                года гарантии
                            </p>
                        </li>
                        <div class="numbersBlockItem--HR"></div>

                        <li class="numbersBlockItem">
                            <h2 class="numbersBlockItem--Title">2 100</h2>
                            <p class="numbersBlockItem--Content">
                                мебели перетянули
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="infoMaterials">
            <div class="container1700">
                <div class="infoMaterialsWrapper">
                    <div class="infoMaterialsBlock">
                        <h2 class="infoMaterials--Title">
                            Широчайший выбор материалов
                        </h2>
                        <div class="infoMaterials--HR"></div>
                        <p class="infoMaterials--Content">
                            В каталоге из десятков тысяч обивок можно
                            заблудиться в материалах и текстурах. Закажите
                            бесплатный визит дизайнера и он предложит лучшие
                            варианты для вашей мебели.
                        </p>
                        <a class="infoMaterials--Button buttonContent" href="./materials.html">Посмотреть образцы</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="servicesBlock">
            <div class="container">
                <div class="servicesBlockWrapper">
                    <div class="servicesBlock--List">
                        <div class="div1 servicesBlock--Item">
                            <div class="servicesBlock--ItemBD"></div>

                            <div class="servicesBlock--ItemContent" style="bottom: 29px">
                                <h3 class="servicesBlock--ItemContent__Title">
                                    Реставрация мягкой мебели
                                </h3>
                            </div>
                        </div>
                        <div class="div2 servicesBlock--Item">
                            <div class="servicesBlock--ItemBD"></div>

                            <div class="servicesBlock--ItemContent" style="bottom: 44px">
                                <h3 class="servicesBlock--ItemContent__Title">
                                    Частичная перетяжка
                                </h3>
                            </div>
                        </div>
                        <div class="div3 servicesBlock--Item">
                            <div class="servicesBlock--ItemBD"></div>

                            <div class="servicesBlock--ItemContent" style="bottom: 29px">
                                <h3 class="servicesBlock--ItemContent__Title">
                                    Замена наполнителя, ремонт механизма
                                </h3>
                            </div>
                        </div>
                        <div class="div4 servicesBlock--Item">
                            <div class="servicesBlock--ItemBD"></div>

                            <div class="servicesBlock--ItemContent">
                                <h3 class="servicesBlock--ItemContent__Title">
                                    Перетяжка кресел
                                </h3>
                            </div>
                        </div>
                        <div class="div5 servicesBlock--Item">
                            <div class="servicesBlock--ItemBD"></div>

                            <div class="servicesBlock--ItemContent">
                                <h3 class="servicesBlock--ItemContent__Title">
                                    Перетяжка натуральной кожей
                                </h3>
                            </div>
                        </div>
                        <div class="div6 servicesBlock--Item">
                            <div class="servicesBlock--ItemBD"></div>

                            <div class="servicesBlock--ItemContent" style="bottom: 22px">
                                <h3 class="servicesBlock--ItemContent__Title">
                                    Замена обивки
                                </h3>
                            </div>
                        </div>
                        <div class="div7 servicesBlock--Item">
                            <h2 class="servicesBlock--Title">
                                восстанавливаем<span>.</span>
                                <br />РЕМОНТИРУЕМ<span>.</span>
                                <br />ОБНОВЛЯЕМ<span>.</span>
                            </h2>
                            <a href="allServices" class="servicesBlock--Button buttonContent">
                                Все услуги
                                <span>
                                    <svg width="31" height="15" viewBox="0 0 31 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 1L30 7.5L22 14" stroke="#259D8E" stroke-linecap="round" />
                                        <line x1="0.5" y1="7.5" x2="15.5" y2="7.5" stroke="#259D8E" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="servicesBlockModile">
                        <div class="servicesBlockModile--Content">
                            <h2 class="servicesBlock--Title">
                                восстанавливаем<span>.</span>
                                <br />РЕМОНТИРУЕМ<span>.</span>
                                <br />ОБНОВЛЯЕМ<span>.</span>
                            </h2>
                            <a href="allServices" class="servicesBlock--Button buttonContent">
                                Все услуги
                                <span>
                                    <svg width="31" height="15" viewBox="0 0 31 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 1L30 7.5L22 14" stroke="#259D8E" stroke-linecap="round" />
                                        <line x1="0.5" y1="7.5" x2="15.5" y2="7.5" stroke="#259D8E" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <div class="servicesBlockModile--Swiper swiper">
                            <ul class="servicesBlockModile--SwiperWrapper swiper-wrapper">
                                <li class="servicesBlockModile--Item swiper-slide">
                                    <div class="servicesBlockModile--ItemBD" style="
                                                background-image: url(./assets/images/servicesBlock/Images/img1.png);
                                            "></div>

                                    <div class="servicesBlockModile--ItemContent">
                                        <h3 class="servicesBlockModile--ItemContent__Title">
                                            Замена обивки
                                        </h3>
                                    </div>
                                </li>
                                <li class="servicesBlockModile--Item swiper-slide">
                                    <div class="servicesBlockModile--ItemBD" style="
                                                background-image: url(./assets/images/servicesBlock/Images/img2.png);
                                            "></div>

                                    <div class="servicesBlockModile--ItemContent">
                                        <h3 class="servicesBlockModile--ItemContent__Title">
                                            Частичная перетяжка
                                        </h3>
                                    </div>
                                </li>
                                <li class="servicesBlockModile--Item swiper-slide">
                                    <div class="servicesBlockModile--ItemBD" style="
                                                background-image: url(./assets/images/servicesBlock/Images/img3.png);
                                            "></div>

                                    <div class="servicesBlockModile--ItemContent">
                                        <h3 class="servicesBlockModile--ItemContent__Title">
                                            Замена наполнителя, ремонт
                                            механизма
                                        </h3>
                                    </div>
                                </li>
                                <li class="servicesBlockModile--Item swiper-slide">
                                    <div class="servicesBlockModile--ItemBD" style="
                                                background-image: url(./assets/images/servicesBlock/Images/img4.png);
                                            "></div>

                                    <div class="servicesBlockModile--ItemContent">
                                        <h3 class="servicesBlockModile--ItemContent__Title">
                                            Перетяжка кресел
                                        </h3>
                                    </div>
                                </li>
                                <li class="servicesBlockModile--Item swiper-slide">
                                    <div class="servicesBlockModile--ItemBD" style="
                                                background-image: url(./assets/images/servicesBlock/Images/img5.png);
                                            "></div>

                                    <div class="servicesBlockModile--ItemContent">
                                        <h3 class="servicesBlockModile--ItemContent__Title">
                                            Перетяжка натуральной кожей
                                        </h3>
                                    </div>
                                </li>
                                <li class="servicesBlockModile--Item swiper-slide">
                                    <div class="servicesBlockModile--ItemBD" style="
                                                background-image: url(./assets/images/servicesBlock/Images/img6.png);
                                            "></div>

                                    <div class="servicesBlockModile--ItemContent">
                                        <h3 class="servicesBlockModile--ItemContent__Title">
                                            Замена обивки
                                        </h3>
                                    </div>
                                </li>
                            </ul>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="servicesBlockHRTopBefore"></div>
            <div class="servicesBlockHRTopAfter" id="servicesBlockHRTopAfter"></div>
            <div class="servicesBlockHRCenterBefore"></div>
            <div class="servicesBlockHRCenterAfterDecor" id="servicesBlockHRCenterAfterDecor"></div>
        </section>

        <?php include_once(PATH_COMPONENT . "/reviewsMainComponent.php") ?>

        <section class="advantages">
            <div class="container1700">
                <div class="advantagesWrapper">
                    <div class="advantages--TitleWrapper">
                        <div class="container">
                            <div class="advantages--TitleInner">
                                <h2 class="advantages--Title">
                                    перетяжка <span>мягкой</span> мебели по
                                    итальянским технологиям
                                </h2>

                                <ul class="advantages--TitleList">
                                    <li class="advantages--TitleItem">
                                        <a class="advantages--TitleItem__Title" href="/">Перетяжка кожаной мебели</a>
                                    </li>
                                    <li class="advantages--TitleItem">
                                        <a class="advantages--TitleItem__Title" href="/">Обивка мебели</a>
                                    </li>
                                    <li class="advantages--TitleItem">
                                        <a class="advantages--TitleItem__Title" href="/">Перетяжка диванов</a>
                                    </li>
                                    <li class="advantages--TitleItem">
                                        <a class="advantages--TitleItem__Title" href="/">Обивка мягкой мебели</a>
                                    </li>
                                    <li class="advantages--TitleItem">
                                        <a class="advantages--TitleItem__Title" href="/">Реставрация мягкой мебели</a>
                                    </li>
                                    <li class="advantages--TitleItem">
                                        <a class="advantages--TitleItem__Title" href="/">Ремонт мягкой мебели</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="advantages--ContentWrapper">
                        <div class="advantages--ContentInner">
                            <div class="advantages--Left" id="advantages--Left">
                                <div class="container">
                                    <div class="advantages--LeftWrapper">
                                        <h4 class="advantages--Left__Title">
                                            Наш основной профиль – это
                                            обивка и перетяжка мягкой мебели
                                            в Минске и Минской области,
                                            которая сочетает в себе
                                            следующие виды работ:
                                        </h4>

                                        <div class="advantages--LeftLists">
                                            <ul class="advantages--LeftListNumber">
                                                <li class="advantages--LeftItemNumber">
                                                    <p class="advantages--LeftItemNumber__Title">
                                                        Полная или частичная
                                                        замена обивочного
                                                        материала. При этом
                                                        возможны различные
                                                        текстурные и
                                                        цветовые комбинации.
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemNumber">
                                                    <p class="advantages--LeftItemNumber__Title">
                                                        Полная или частичная
                                                        замена обивочного
                                                        материала. При этом
                                                        возможны различные
                                                        текстурные и
                                                        цветовые комбинации.
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemNumber">
                                                    <p class="advantages--LeftItemNumber__Title">
                                                        Полная или частичная
                                                        замена обивочного
                                                        материала. При этом
                                                        возможны различные
                                                        текстурные и
                                                        цветовые комбинации.
                                                    </p>
                                                </li>
                                            </ul>

                                            <ul class="advantages--LeftListContent">
                                                <li class="advantages--LeftItemContent">
                                                    <p class="advantages--LeftItemContent__Title">
                                                        Полная или частичная
                                                        замена обивочного
                                                        материала. При этом
                                                        возможны различные
                                                        текстурные и
                                                        цветовые комбинации.
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemContent">
                                                    <p class="advantages--LeftItemContent__Title">
                                                        Производство
                                                        покрывал и подушек
                                                        практически любой
                                                        формы.
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemContent">
                                                    <p class="advantages--LeftItemContent__Title">
                                                        Изменение объема и
                                                        формы мягких деталей
                                                        при обивке и
                                                        перетяжке диванов,
                                                        кресел и другой
                                                        мебели. Некоторые
                                                        модели после нашей
                                                        работы сохраняют от
                                                        производителя только
                                                        название и основные
                                                        элементы каркаса.
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemContent">
                                                    <p class="advantages--LeftItemContent__Title">
                                                        Декоративная
                                                        отделка: кант,
                                                        утяжки, пуговицы,
                                                        тесьма, гвоздики,
                                                        сборки и многое
                                                        другое.
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemContent">
                                                    <p class="advantages--LeftItemContent__Title">
                                                        Ремонт или замена
                                                        элементов каркаса и
                                                        механизмов
                                                        трансформации, а
                                                        также любой другой
                                                        столярный ремонт
                                                        мебели
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemContent">
                                                    <p class="advantages--LeftItemContent__Title">
                                                        Замена
                                                        "внутренностей"
                                                        мягкой мебели:
                                                        пенополиуретана,
                                                        пружинных блоков,
                                                        эластичных ремней,
                                                        реек, холлофайбера,
                                                        синтепона, ватина,
                                                        конского волоса и
                                                        т.д.
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemContent">
                                                    <p class="advantages--LeftItemContent__Title">
                                                        Замена и ремонт
                                                        ножек, ручек и
                                                        другой фурнитуры.
                                                    </p>
                                                </li>
                                                <li class="advantages--LeftItemContent">
                                                    <p class="advantages--LeftItemContent__Title">
                                                        Лакокрасочные работы
                                                        и реставрация
                                                        жестких деталей.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="advantages--Right" id="advantages--Right">
                                <div class="advantages--RightWrapper">
                                    <h3 class="advantages--Right__Title">
                                        Ремонт мягкой мебели может
                                        производиться как на территории
                                        заказчика<span>,</span> так и в
                                        нашем цехе
                                    </h3>
                                    <p class="advantages--Right__Text">
                                        Опыт, знание тенденций на мебельном
                                        рынке и уровень квалификации наших
                                        сотрудников позволяют нам придавать
                                        безнадежно устаревшим, на первый
                                        взгляд, или непригодным к
                                        эксплуатации моделям достойный,
                                        современный вид и соответствующее
                                        качество, а также осуществлять
                                        реставрацию антикварной мебели.
                                    </p>
                                    <a href="inviteDesigner" class="advantages--Right__Button buttonContent">
                                        Вызвать дизайнера
                                        <span>
                                            <svg width="31" height="15" viewBox="0 0 31 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 1L30 7.5L22 14" stroke="#259D8E" stroke-linecap="round" />
                                                <line x1="0.5" y1="7.5" x2="15.5" y2="7.5" stroke="#259D8E" stroke-linecap="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

        var swiperServicesBlock = new Swiper(
            ".servicesBlockModile--Swiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerGroup: 1,

                grabCursor: true,

                pagination: {
                    el: ".swiper-pagination",
                    type: "bullets",
                    clickable: true,
                },
            }
        );
    </script>

    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/main.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/modal.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/openFullScreen.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/sliderBeforeAfter.js"></script>
</body>

</html>