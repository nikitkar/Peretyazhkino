<?php define("PATH_COMPONENT", $_SERVER['DOCUMENT_ROOT'] . "/assets/component"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Изготовление кресел</title>
    
    <link rel="icon" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/icon/favicon.svg" type="image/svg" sizes="16x16">
    
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/reset.css" />

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/constant.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/header.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/footer.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/servicesPage.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/lightbox.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script async src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script defer src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/servicesPage.js"></script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script defer src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/sendEmail.js"></script>
</head>

<body>
    <button class="buttonScroll" id="goTop" onclick="scrollTopBtn()">
        <div class="buttonScroll--Img">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0607 0.93934C12.4749 0.353553 11.5251 0.353553 10.9393 0.93934L1.3934 10.4853C0.807611 11.0711 0.807611 12.0208 1.3934 12.6066C1.97918 13.1924 2.92893 13.1924 3.51472 12.6066L12 4.12132L20.4853 12.6066C21.0711 13.1924 22.0208 13.1924 22.6066 12.6066C23.1924 12.0208 23.1924 11.0711 22.6066 10.4853L13.0607 0.93934ZM13.5 24L13.5 2L10.5 2L10.5 24L13.5 24Z" fill="white" />
            </svg>
        </div>
    </button>

    <div class="page" id="page"></div>

    <?php include_once(PATH_COMPONENT . "/header.php") ?>
    <main class="main">
        <section class="mainTitle" style="background-image: url(../images/servicesPageBDMainScreen/ManufactureChairs.jpg);">
            <div class="container">
                <div class="mainTitleWrapper">
                    <div class="mainTitleInfo">
                        <h1 class="mainTitleInfo--title">
                            Изготовление кресел
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
                    <a class="breadCrumbs--text breadCrumbs--text--active" href="<?php $_SERVER['DOCUMENT_ROOT'] . "/assets/servicesPages/ManufactureChairs.php" ?>">Изготовление кресел</a>
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
                            Изготовление кресел на заказ по индивидуальным размерам в Минске от мебельной мастерской «Перетяжкино». Мы производим офисные, домашние, кресла руководителей как из доступных, так и из премиальных материалов с гарантией 1 год.
                            <br><br>
                            Изготовление кресел производится опытными специалистами с учётом пожеланий заказчика, по шаблону или индивидуальному эскизу. При заказе кресла моделируются с использованием компьютерных технологий, подбираются материалы и цвета, демонстрируются возможные варианты, подбирается цветовая гамма внешних элементов кресел.
                        </p>
                        <div class="InfoLeftInfo">
                            <div class="InfoLeftTitle">
                                <h2 class="InfoLeftTitle--title2">
                                    Изготовление кресел
                                </h2>
                                <h3 class="InfoLeftTitle--title3">
                                    В нашей мастерской можно заказать кресла:
                                </h3>
                            </div>
                            <div class="InfoLeftLists">
                                <ul class="InfoLeftListContent">
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            для дома (кресла-качалки, кресла-мешки, кресла-кровати, стулья и т. д.);
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            для офиса (кресла для руководителей, конференц-залов, компьютерных кресел);
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            специальные (для парикмахерских, ресторанов, кафе, массажных кабинетов, для автомобилей).
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <?php include_once(PATH_COMPONENT . "/priceListChairs.php") ?>
                </div>
            </div>
        </section>

        <?php include_once(PATH_COMPONENT . "/examplesWorkChairComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/reviewsChairComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/questionsComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/inviteDesignerComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/servicesNavComponent.php") ?>
    </main>

    <?php include_once(PATH_COMPONENT . "/footer.php") ?>
    <?php include_once(PATH_COMPONENT . "/modalComponent.php") ?>


    <?php include_once(PATH_COMPONENT . "/swiperServicesComponent.php") ?>
    
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/modal.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/openFullScreen.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/sliderBeforeAfter.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/goTopButton.js"></script>
</body>

</html>