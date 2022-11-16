<?php define("PATH_COMPONENT", $_SERVER['DOCUMENT_ROOT'] . "/assets/component"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Реставрация мебели</title>
    
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
        <section class="mainTitle" style="background-image: url(../images/servicesPageBDMainScreen/FurnitureRestoration.jpg);">
            <div class="container">
                <div class="mainTitleWrapper">
                    <div class="mainTitleInfo">
                        <h1 class="mainTitleInfo--title">
                            Реставрация мебели
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
                    <a class="breadCrumbs--text breadCrumbs--text--active" href="<?php $_SERVER['DOCUMENT_ROOT'] . "/assets/servicesPages/FurnitureRestoration.php" ?>">Реставрация мебели</a>
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
                            Уже более 15 лет мы предоставляем профессиональные услуги реставрации мебели в Минске и Минском р-н. Без преувеличения можем заверить, - и это подтверждают благодарные отзывы наших клиентов, - что реставрация и восстановление мебели для нас - не просто работа, но любимое и доставляющее удовольствие занятие.
                            <br><br>
                            Реставрация мебели - это в первую очередь процесс, требующий творческого подхода в совокупности с многолетним опытом. Человек выполняющий реставрацию должен профессионально владеть столярным инструментом, иметь художественный вкус, хорошо разбираться в материалах и методах отделки, мебельных стилях и знать особенности разных сортов древесины.
                        </p>
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
                                        Детские стульчики, табуретка
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 6 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Стул обычный
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 10 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Стулья со спинками - офисные
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 15 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Пуфик
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 25 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Кресла офисные
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 35 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Кресло без мягких подлокотников
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 35 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Кресла руководителей мягкие
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 55 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Кресло с мягкими подлокотниками
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 60 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Трансформируемые кресла
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 60 BYN
                                    </td>
                                </tr>
                                <tr class="InfoRightTable--tr">
                                    <td class="InfoRightTable--name">
                                        Кресло-кровать раскладноеот
                                    </td>
                                    <td class="InfoRightTable--price">
                                        от 75 BYN
                                    </td>
                                </tr>
                            </table>
                        </div>
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


    <?php include_once(PATH_COMPONENT . "/swiperServicesComponent.php") ?>
    
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/modal.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/openFullScreen.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/sliderBeforeAfter.js"></script>
</body>

</html>