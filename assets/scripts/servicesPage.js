const mainTitleHRLeft = document.getElementById("mainTitleHRLeft");
const mainTitleHRRight = document.getElementById("mainTitleHRRight");

mainTitleHRLeft.style.width = window.innerWidth / 2 - 702 + "px";
mainTitleHRRight.style.width = window.innerWidth / 2 - 420 + "px";

if (window.innerWidth < 1445) {
    mainTitleHRLeft.style.width = "30px";
}

if (window.innerWidth < 1380) {
    mainTitleHRRight.style.width =
        window.innerWidth / 2 - 420 - (1380 - window.innerWidth) / 2 + "px";
}

if (window.innerWidth < 1194) {
    mainTitleHRRight.style.width = window.innerWidth - 440 + "px";
}

if (window.innerWidth < 1100) {
    mainTitleHRRight.style.width = window.innerWidth - 160 + "px";
}

const reviewsHR = document.getElementById("reviewsHR");
const reviewsTitleWrapper = document.querySelector(".reviews--Title");
const reviewsTitleWrapperLeftMargin =
    (window.innerWidth - reviewsTitleWrapper.clientWidth) / 2 + 15;

reviewsHR.style.width =
    window.innerWidth - reviewsTitleWrapperLeftMargin - 185 + "px";

if (window.innerWidth < 1100) {
    reviewsHR.style.width =
        window.innerWidth - reviewsTitleWrapperLeftMargin - 85 + "px";
}

function onToggleHeader(event) {
    if (event.target.open) {
        document
            .querySelectorAll(".navModile > details[open]")
            .forEach((el) => {
                // Исключаем из перебора елемент который мы только что открыли
                if (el === event.target) return;
                // Закрываем все остальные елементы <details>
                el.open = false;
            });
    }
}

function onToggleQuestions(event) {
    if (event.target.open) {
        document
            .querySelectorAll(".questionsList > details[open]")
            .forEach((el) => {
                // Исключаем из перебора елемент который мы только что открыли
                if (el === event.target) return;
                // Закрываем все остальные елементы <details>
                el.open = false;
            });
    }
}

function onTogglesServices(event) {
    if (event.target.open) {
        document
            .querySelectorAll(".servicesNav--ModileList > details[open]")
            .forEach((el) => {
                // Исключаем из перебора елемент который мы только что открыли
                if (el === event.target) return;
                // Закрываем все остальные елементы <details>
                el.open = false;
            });
    }
}

// Вешаем наблюдатель на все елементы <details> внутри акордиона
document
    .querySelectorAll(".navModileItem")
    .forEach((el) => el.addEventListener("toggle", onToggleHeader));

document
    .querySelectorAll(".questionsItem")
    .forEach((el) => el.addEventListener("toggle", onToggleQuestions));

document
    .querySelectorAll(".servicesNav--ModileItem")
    .forEach((el) => el.addEventListener("toggle", onTogglesServices));
