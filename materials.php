<?php define("PATH_COMPONENT", $_SERVER['DOCUMENT_ROOT'] . "/assets/component"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Материалы</title>

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/reset.css" />

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/constant.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/header.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/footer.css" />
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/styles/materialsPage.css" />
</head>

<body>
    <?php include_once(PATH_COMPONENT . "/header.php") ?>
    <main class="main">
        <section class="mainTitle">
            <div class="container">
                <div class="mainTitleWrapper">
                    <div class="mainTitle__title">
                        <h1 class="mainTitle__title--title">
                            Лучшие материалы для обивки
                        </h1>
                        <p class="mainTitle__title--text">
                            У нас самый широкий выбор различных материалов и
                            цветов в стране! 100% экологические и
                            натруальные материалы.
                        </p>
                    </div>
                    <button class="mainTitle__title--button buttonContent">
                        Вызвать дизайнера
                        <span>
                            <svg width="31" height="15" viewBox="0 0 31 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 1L30 7.5L22 14" stroke="white" stroke-linecap="round" />
                                <line x1="0.5" y1="7.5" x2="15.5" y2="7.5" stroke="white" stroke-linecap="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </section>

        <section class="restoration">
            <div class="container1700">
                <div class="restorationWrapper">
                    <div class="breadCrumbs">
                        <div class="container">
                            <div class="breadCrumbsWrapper">
                                <a class="breadCrumbs--text" href="/">Главная</a>
                                <span class="breadCrumbs--text breadCrumbs--text--active">/</span>
                                <a class="breadCrumbs--text breadCrumbs--text--active" href="<?php $_SERVER['DOCUMENT_ROOT']?>/materials.php">Материалы</a>
                            </div>
                        </div>
                    </div>
                    <div class="restorationInfo">
                        <div class="container">
                            <div class="restorationInfoWrapper">
                                <div class="upholstery">
                                    <h2 class="upholstery--title">
                                        ОБИВОЧНЫЕ МАТЕРИАЛЫ
                                    </h2>
                                    <div class="upholsteryWrapper">
                                        <ul class="upholsteryList">
                                            <li class="upholsteryItem--img" style="
                                                        background: url(/assets/images/materials/filter/img1.png);
                                                    ">
                                                <div class="upholsteryItem--back"></div>
                                                <span class="upholsteryItem--imgContent">жаккард</span>
                                            </li>
                                            <li class="upholsteryItem--img" style="
                                                        background: url(/assets/images/materials/filter/img2.png);
                                                    ">
                                                <div class="upholsteryItem--back"></div>
                                                <span class="upholsteryItem--imgContent">велюр</span>
                                            </li>
                                            <li class="upholsteryItem--img" style="
                                                        background: url(/assets/images/materials/filter/img3.png);
                                                    ">
                                                <div class="upholsteryItem--back"></div>
                                                <span class="upholsteryItem--imgContent">шенилл</span>
                                            </li>
                                            <li class="upholsteryItem--img" style="
                                                        background: url(/assets/images/materials/filter/img4.png);
                                                    ">
                                                <div class="upholsteryItem--back"></div>
                                                <span class="upholsteryItem--imgContent">скотчгард</span>
                                            </li>
                                            <li class="upholsteryItem--img" style="
                                                        background: url(/assets/images/materials/filter/img5.png);
                                                    ">
                                                <div class="upholsteryItem--back"></div>
                                                <span class="upholsteryItem--imgContent">репс-велюр</span>
                                            </li>
                                            <li class="upholsteryItem--img" style="
                                                        background: url(/assets/images/materials/filter/img6.png);
                                                    ">
                                                <div class="upholsteryItem--back"></div>
                                                <span class="upholsteryItem--imgContent">тканый нубук</span>
                                            </li>

                                            <div class="upholsteryList--hidden" id="upholsteryList--hidden">
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img7.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">микрофибра</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img8.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">лен</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img9.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">натуральная кожа</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img10.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">искусственная кожа</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img11.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">Гобелен</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img12.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">Флок</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img13.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">флок на флоке</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img14.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">флис</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img15.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">Экокожа</span>
                                                </li>
                                                <li class="upholsteryItem--img" style="
                                                            background: url(/assets/images/materials/filter/img16.png);
                                                        ">
                                                    <div class="upholsteryItem--back"></div>
                                                    <span class="upholsteryItem--imgContent">Бархат</span>
                                                </li>
                                            </div>
                                        </ul>
                                        <button class="upholstery--button buttonContent" id="upholstery--button">
                                            Смотреть больше
                                        </button>
                                    </div>
                                </div>

                                <div class="filler">
                                    <h2 class="filler--title">
                                        НАПОЛНИТЕЛИ
                                    </h2>
                                    <div class="fillerWrapper">
                                        <div class="fillerList">
                                            <div class="fillerItem--img" style="
                                                        background: url(/assets/images/materials/upholstery/img1.png);
                                                    ">
                                                <div class="fillerItem--back"></div>
                                                <span class="fillerItem--imgContent">Пример</span>
                                            </div>
                                            <div class="fillerItem--img" style="
                                                        background: url(/assets/images/materials/upholstery/img2.png);
                                                    ">
                                                <div class="fillerItem--back"></div>
                                                <span class="fillerItem--imgContent">Пример</span>
                                            </div>
                                            <div class="fillerItem--img" style="
                                                        background: url(/assets/images/materials/upholstery/img3.png);
                                                    ">
                                                <div class="fillerItem--back"></div>
                                                <span class="fillerItem--imgContent">Пример</span>
                                            </div>
                                            <div class="fillerItem--img" style="
                                                        background: url(/assets/images/materials/upholstery/img4.png);
                                                    ">
                                                <div class="fillerItem--back"></div>
                                                <span class="fillerItem--imgContent">Пример</span>
                                            </div>
                                            <div class="fillerItem--img" style="
                                                        background: url(/assets/images/materials/upholstery/img5.png);
                                                    ">
                                                <div class="fillerItem--back"></div>
                                                <span class="fillerItem--imgContent">Пример</span>
                                            </div>
                                            <div class="fillerItem--img" style="
                                                        background: url(/assets/images/materials/upholstery/img6.png);
                                                    ">
                                                <div class="fillerItem--back"></div>
                                                <span class="fillerItem--imgContent">Пример</span>
                                            </div>

                                            <div class="fillerList--hidden" id="fillerList--hidden">
                                                <div class="fillerItem--img" style="
                                                            background: url(/assets/images/materials/upholstery/img7.png);
                                                        ">
                                                    <div class="fillerItem--back"></div>
                                                    <span class="fillerItem--imgContent">Поролон</span>
                                                </div>
                                                <div class="fillerItem--img" style="
                                                            background: url(/assets/images/materials/upholstery/img8.png);
                                                        ">
                                                    <div class="fillerItem--back"></div>
                                                    <span style="top: 45px; transform: translateX(-50%);" class="fillerItem--imgContent">ХоллоТек\ ПериоТек\ АэроПух\ СтруттоФайбер</span>
                                                </div>
                                                <div class="fillerItem--img" style="
                                                            background: url(/assets/images/materials/upholstery/img9.png);
                                                        ">
                                                    <div class="fillerItem--back"></div>
                                                    <span style="top: 40%" class="fillerItem--imgContent">конский волос\кокос</span>
                                                </div>
                                                <div class="fillerItem--img" style="
                                                            background: url(/assets/images/materials/upholstery/img10.png);
                                                        ">
                                                    <div class="fillerItem--back"></div>
                                                    <span class="fillerItem--imgContent">Холлофайбер</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="filler--button buttonContent" id="filler--button">
                                            Смотреть больше
                                        </button>
                                    </div>
                                </div>
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
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/materialsPage.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/scripts/modal.js"></script>
</body>

</html>