const mainTitleHRLeft = document.getElementById("mainTitleHRLeft");
const mainTitleHRRight = document.getElementById("mainTitleHRRight");

const mainTitleInfoTitle = document.querySelector(".mainTitleInfo--title");

const containerWidth = 1454;
const containerWidthDeviton = 727;
const differenceValue = containerWidth - mainTitleInfoTitle.clientWidth;
const value1 = mainTitleInfoTitle.clientWidth - differenceValue;
const value2 = mainTitleInfoTitle.clientWidth - containerWidthDeviton;

mainTitleHRLeft.style.width = window.innerWidth / 2 - 702 + "px";
mainTitleHRRight.style.width = window.innerWidth / 2 - value2 - 10 + "px";

if (mainTitleInfoTitle.clientHeight > 106) {
    const countElement = mainTitleInfoTitle.innerHTML.trim().split(" ");

    const div = document.createElement("div");
    div.classList.add("mainTitleInfo--title");
    mainTitleInfoTitle.append(div);
    div.innerHTML = countElement[countElement.length - 1];
    div.style.width = "fit-content";
    const divWidth = div.clientWidth;
    div.style.display = "none";

    mainTitleHRRight.style.top = "368px";
    mainTitleHRRight.style.width =
        window.innerWidth / 2 +
        (containerWidth - divWidth - containerWidthDeviton - 10) +
        "px";
}

if (window.innerWidth < 1445) {
    mainTitleHRLeft.style.width = "30px";
}

if (window.innerWidth < 1380) {
    mainTitleHRRight.style.width =
        window.innerWidth / 2 - 420 - (1380 - window.innerWidth) / 2 + "px";
    
        console.log(window.innerWidth / 2 - 420 - (1380 - window.innerWidth) / 2);
}

if (window.innerWidth < 1194) {
    mainTitleHRRight.style.width = window.innerWidth - 440 + "px";
}

if (window.innerWidth < 1100) {
    mainTitleHRRight.style.width = window.innerWidth - mainTitleInfoTitle.clientWidth - 10 + "px";
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
