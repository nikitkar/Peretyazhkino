<?php define("PATH_COMPONENT", $_SERVER['DOCUMENT_ROOT'] . "/assets/component"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Замена поролона</title>
    
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
</head>

<body>
    <div class="page" id="page"></div>

    <?php include_once(PATH_COMPONENT . "/header.php") ?>

    <main class="main">
        <section class="mainTitle" style="background-image: url(../images/servicesPageBDMainScreen/ReplacementRubber.jpg);">
            <div class="container">
                <div class="mainTitleWrapper">
                    <div class="mainTitleInfo">
                        <h1 class="mainTitleInfo--title">
                            Замена поролона
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
                    <a class="breadCrumbs--text breadCrumbs--text--active" href="<?php $_SERVER['DOCUMENT_ROOT'] . "/assets/servicesPages/ReplacementFoamRubber.php" ?>">Замена поролона</a>
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
                            Ремонт наполнителя дивана, особенно дорогого – более экономичное решение, чем покупка нового. Специалисты нашей компании быстро и качественно устранят любые поломки дивана.
                        </p>
                        <div class="InfoLeftInfo">
                            <div class="InfoLeftTitle">
                                <h2 class="InfoLeftTitle--title2">
                                    Замена поролона
                                </h2>
                                <h3 class="InfoLeftTitle--title3">
                                    Частые поломки и дефекты:
                                </h3>
                            </div>
                            <div class="InfoLeftLists">
                                <ul class="InfoLeftListContent">
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            прогиб и поломка деталей каркаса;
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            проседание пружинного блока;
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            износ обивки дивана;
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            проминание наполнителя.
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

        <?php include_once(PATH_COMPONENT . "/examplesWorkMainComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/reviewsMainComponent.php") ?>
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
</body>

</html>