const advantagesLeft = document.getElementById("advantages--Left");
const advantagesRight = document.getElementById("advantages--Right");

const mainBlockHRLeftBefore = document.getElementById("mainBlockHRLeftBefore");
const mainBlockHRLeftAfter = document.getElementById("mainBlockHRLeftAfter");

const mainBlockHRRightBefore = document.getElementById(
    "mainBlockHRRightBefore"
);
const mainBlockHRRightAfter = document.getElementById("mainBlockHRRightAfter");

const reviewsHR = document.getElementById("reviewsHR");
const reviewsTitleWrapper = document.querySelector(".reviews--Title");
const reviewsTitleWrapperLeftMargin =
    (window.innerWidth - reviewsTitleWrapper.clientWidth) / 2 + 15;

const servicesBlockHRTopAfter = document.getElementById(
    "servicesBlockHRTopAfter"
);
const servicesBlockHRCenterAfterDecor = document.getElementById(
    "servicesBlockHRCenterAfterDecor"
);

let widthResizeLeft = 689;
let widthResizeRightBefore = 175;
let widthResizeRightAfter1385 = 591;

let widthRightMinus = 1450;

mainBlockHRRightBefore.style.width =
    window.innerWidth / 2 - widthResizeRightBefore + "px";

mainBlockHRRightAfter.style.width = window.innerWidth / 2 + 136 + "px";

reviewsHR.style.width =
    window.innerWidth - reviewsTitleWrapperLeftMargin - 185 + "px";

servicesBlockHRTopAfter.style.left = window.innerWidth / 2 + 234 + "px";
servicesBlockHRCenterAfterDecor.style.left = window.innerWidth / 2 + 77 + "px";

if (window.innerWidth < 1385) {
    mainBlockHRRightAfter.style.width =
        window.innerWidth - widthResizeRightAfter1385 + "px";
}

if (window.innerWidth < 1100) {
    reviewsHR.style.width =
        window.innerWidth - reviewsTitleWrapperLeftMargin - 85 + "px";
}

if (window.innerWidth > 1450) {
    mainBlockHRLeftBefore.style.width =
        window.innerWidth / 2 - widthResizeLeft + "px";

    mainBlockHRLeftAfter.style.width =
        window.innerWidth / 2 - widthResizeLeft + "px";
} else {
    mainBlockHRRightBefore.style.width =
        window.innerWidth / 2 -
        widthResizeRightBefore -
        (widthRightMinus - window.innerWidth) / 2 +
        "px";

    if (window.innerWidth < 1100) {
        mainBlockHRRightBefore.style.width = window.innerWidth - 290 + "px";
        mainBlockHRRightAfter.style.width = window.innerWidth - 197 + "px";
    }
}

window.addEventListener("resize", () => {
    if (this.innerWidth > 1450) {
        mainBlockHRLeftBefore.style.width =
            window.innerWidth / 2 - widthResizeLeft + "px";

        mainBlockHRLeftAfter.style.width =
            window.innerWidth / 2 - widthResizeLeft + "px";

        mainBlockHRRightBefore.style.width =
            window.innerWidth / 2 - widthResizeRightBefore + "px";
    }

    if (this.innerWidth > 1100) {
        let advantagesLeftHeight = advantagesLeft.clientHeight;

        if (advantagesLeftHeight > 1103)
            advantagesRight.style.height = advantagesLeftHeight + "px";
        else advantagesRight.style.height = "1103px";
    } else {
        advantagesRight.style.height = "auto";
        return;
    }
});

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
