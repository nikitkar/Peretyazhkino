const navModileItem = document.querySelectorAll(".navModileItem");
const navModileItemList = document.querySelectorAll(".navModileItem--List");

const advantagesLeft = document.getElementById("advantages--Left");
const advantagesRight = document.getElementById("advantages--Right");

let indexItem = 0;

navModileItem.forEach((item, index) => {
    item.addEventListener("click", () => {
        console.log(indexItem);
        navModileItemList[indexItem].style.display = "none";
        navModileItem[indexItem].style = "";

        if (navModileItemList[index]) {
            navModileItem[index].style =
                "background-color: var(--Color__Decor);color: var(--Color__White);";
            navModileItemList[index].style.display = "flex";
            indexItem = index;
        }
    });
});

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

function onToggle(event) {
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

// Вешаем наблюдатель на все елементы <details> внутри акордиона
document
    .querySelectorAll(".questionsItem")
    .forEach((el) => el.addEventListener("toggle", onToggle));
