const advantagesLeft = document.getElementById("advantages--Left");
const advantagesRight = document.getElementById("advantages--Right");

let indexItem = 0;

window.addEventListener("resize", () => {
    if (this.innerWidth > 1130) {
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
