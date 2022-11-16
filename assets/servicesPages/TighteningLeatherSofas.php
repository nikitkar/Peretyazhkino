<?php define("PATH_COMPONENT", $_SERVER['DOCUMENT_ROOT'] . "/assets/component"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Перетяжка кожаных диванов</title>
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
        <section class="mainTitle" style="background-image: url(../images/servicesPageBDMainScreen/TighteningLeatherSofas.jpg);">
            <div class="container">
                <div class="mainTitleWrapper">
                    <div class="mainTitleInfo">
                        <h1 class="mainTitleInfo--title">
                            Перетяжка кожаных диванов
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
                    <a class="breadCrumbs--text breadCrumbs--text--active" href="<?php $_SERVER['DOCUMENT_ROOT'] . "/assets/servicesPages/TighteningLeatherSofas.php" ?>">Перетяжка кожаных диванов</a>
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
                            Компания «Перетяжкино» осуществляется перетяжка диванов кожей в мастерской по низким ценам. Мы оказываем услуги по замене обивки кожаных диванов с гарантией 1 год. Вся мебель страхуется на период работ.
                        </p>
                        <div class="InfoLeftInfo">
                            <div class="InfoLeftTitle">
                                <h2 class="InfoLeftTitle--title2">
                                    Перетяжка кожаных диванов
                                </h2>
                                <h3 class="InfoLeftTitle--title3">
                                    Наши преимущества:
                                </h3>
                            </div>
                            <div class="InfoLeftLists">
                                <ul class="InfoLeftListContent">
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            низкие цены, краткие сроки выполнения работ;
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            наличие большого выбора кожи, согласно каталогам;
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            гарантийные обязательства на произведенные работы;
                                        </p>
                                    </li>
                                    <li class="InfoLeftItemContent">
                                        <p class="InfoLeftItemContent__Title">
                                            заказать перетяжку дивана кожей в Минске или реставрацию;
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
                                        Кухонные уголки и диван
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 55 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Диван-книга
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 65 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Евро-тахта (Евро-книга)
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 85 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Диваны-двойки, большие кресла
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 85 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Диван-аккордеон
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 115 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Диваны трехместные
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 125 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Мягкий уголок (отечественный)
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 125 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Мягкий уголок (импортный)
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 200 BYN
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once(PATH_COMPONENT . "/examplesWorkSofasComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/reviewsSofasComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/questionsComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/inviteDesignerComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/servicesNavComponent.php") ?>
    </main>

    <?php include_once(PATH_COMPONENT . "/footer.php") ?>
    <?php include_once(PATH_COMPONENT . "/modalComponent.php") ?>


    <?php include_once(PATH_COMPONENT . "/swiperServicesComponent.php") ?>

    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/servicesPage.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/modal.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/openFullScreen.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/sliderBeforeAfter.js"></script>
</body>

</html>