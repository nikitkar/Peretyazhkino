<?php define("PATH_COMPONENT", $_SERVER['DOCUMENT_ROOT'] . "/assets/component"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>О нас</title>

    <link rel="icon" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/icon/favicon.svg" type="image/svg" sizes="16x16">

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/reset.css" />

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/constant.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/header.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/footer.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/aboutPage.css" />
</head>

<body>
    <?php include_once(PATH_COMPONENT . "/header.php") ?>
    <main class="main">
        <section class="mainTitle">
            <div class="container">
                <div class="mainTitleWrapper">
                    <div class="mainTitleInfo">
                        <h1 class="mainTitleInfo--title">О нас</h1>
                        <p class="mainTitleInfo--text">
                            Компания Перетяжкино — лидирующая белорусская
                            фабрика <br />
                            по ремонту, перетяжке и восстановлению мебели.
                            Мы работаем с 2012 года для того, чтобы ваша
                            мягкая мебель служила вам долго и была лучше
                            новой.
                        </p>
                    </div>

                    <section class="numbersBlock">
                        <div class="container">
                            <div class="numbersBlockWrapper">
                                <ul class="numbersBlockList">
                                    <li class="numbersBlockItem">
                                        <h2 class="numbersBlockItem--Title">
                                            10
                                        </h2>
                                        <p class="numbersBlockItem--Content">
                                            лет лидер рынка
                                        </p>
                                    </li>
                                    <div class="numbersBlockItem--HR"></div>

                                    <li class="numbersBlockItem">
                                        <h2 class="numbersBlockItem--Title">
                                            2 531
                                        </h2>
                                        <p class="numbersBlockItem--Content">
                                            образцов материалов
                                        </p>
                                    </li>
                                    <div class="numbersBlockItem--HR"></div>

                                    <li class="numbersBlockItem">
                                        <h2 class="numbersBlockItem--Title">
                                            3
                                        </h2>
                                        <p class="numbersBlockItem--Content">
                                            года гарантии
                                        </p>
                                    </li>
                                    <div class="numbersBlockItem--HR"></div>

                                    <li class="numbersBlockItem">
                                        <h2 class="numbersBlockItem--Title">
                                            2 100
                                        </h2>
                                        <p class="numbersBlockItem--Content">
                                            мебели перетянули
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="breadCrumbs">
            <div class="container">
                <div class="breadCrumbsWrapper">
                    <a class="breadCrumbs--text" href="/">Главная</a>
                    <span class="breadCrumbs--text breadCrumbs--text--active">/</span>
                    <a class="breadCrumbs--text breadCrumbs--text--active" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/about.php">О нас</a>
                </div>
            </div>
        </section>

        <section class="italy">
            <div class="container1700">
                <div class="italyWrapper">
                    <div class="italyMain">
                        <div class="italyInfo">
                            <div class="italyInfoWrapper">
                                <div class="italyTitle">
                                    <h2 class="italyTitle--title">
                                        перетяжка мягкой мебели по
                                        итальянским технологиям
                                    </h2>
                                    <div class="italyTitle--hr"></div>
                                </div>
                                <div class="italyText">
                                    <p class="italyText--text">
                                        Наш основной профиль – это обивка и
                                        перетяжка мягкой мебели в Минске и
                                        Минской, которая сочетает в себе
                                        следующие виды работ:
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="italyList">
                            <div class="italyLists">
                                <div class="container">
                                    <div class="italyListWrapper">
                                        <ul class="italyListContent">
                                            <li class="italyItemContent">
                                                <p class="italyItemContent--text">
                                                    Полная или частичная
                                                    замена обивочного
                                                    материала. При этом
                                                    возможны различные
                                                    текстурные и цветовые
                                                    комбинации.
                                                </p>
                                            </li>
                                            <li class="italyItemContent">
                                                <p class="italyItemContent--text">
                                                    Производство покрывал и
                                                    подушек практически
                                                    любой формы.
                                                </p>
                                            </li>
                                            <li class="italyItemContent">
                                                <p class="italyItemContent--text">
                                                    Изменение объема и формы
                                                    мягких деталей при
                                                    обивке и перетяжке
                                                    диванов, кресел и другой
                                                    мебели. Некоторые модели
                                                    после нашей работы
                                                    сохраняют от
                                                    производителя только
                                                    название и основные
                                                    элементы каркаса.
                                                </p>
                                            </li>
                                            <li class="italyItemContent">
                                                <p class="italyItemContent--text">
                                                    Декоративная отделка:
                                                    кант, утяжки, пуговицы,
                                                    тесьма, гвоздики, сборки
                                                    и многое другое.
                                                </p>
                                            </li>
                                            <li class="italyItemContent">
                                                <p class="italyItemContent--text">
                                                    Ремонт или замена
                                                    элементов каркаса и
                                                    механизмов
                                                    трансформации, а также
                                                    любой другой столярный
                                                    ремонт мебели
                                                </p>
                                            </li>
                                            <li class="italyItemContent">
                                                <p class="italyItemContent--text">
                                                    Замена "внутренностей"
                                                    мягкой мебели:
                                                    пенополиуретана,
                                                    пружинных блоков,
                                                    эластичных ремней, реек,
                                                    холлофайбера, синтепона,
                                                    ватина, конского волоса
                                                    и т.д.
                                                </p>
                                            </li>
                                            <li class="italyItemContent">
                                                <p class="italyItemContent--text">
                                                    Замена и ремонт ножек,
                                                    ручек и другой
                                                    фурнитуры.
                                                </p>
                                            </li>
                                            <li class="italyItemContent">
                                                <p class="italyItemContent--text">
                                                    Лакокрасочные работы и
                                                    реставрация жестких
                                                    деталей.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="italyListImg">
                                <img src="./assets/images/about/backList.png" alt="" class="italyListImg--img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once(PATH_COMPONENT . "/inviteDesignerComponent.php") ?>
        <?php include_once(PATH_COMPONENT . "/servicesNavComponent.php") ?>
    </main>

    <?php include_once(PATH_COMPONENT . "/footer.php") ?>
    <?php include_once(PATH_COMPONENT . "/modalComponent.php") ?>

    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/main.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/modal.js"></script>
</body>

</html>