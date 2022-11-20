const numbersModile = document.querySelector(".numbersModile");
const burgerModile = document.querySelector(".burger");
const burgerModileSpan = document.querySelector(".burger > span");
const dropList = document.querySelector(".dropList");

const page = document.querySelector(".page");
const header = document.querySelector(".header");

numbersModile.addEventListener("click", () => {
    if (numbersModile.classList.contains("activeNumberList")) {
        closeListNumbers();
        closeBody();

        return;
    }

    openListNumbers();
    openBody();

    closeListNavModile();
});

burgerModileSpan.addEventListener("click", () => {
    if (burgerModile.classList.contains("activeBurger")) {
        closeBody();
        closeListNavModile();
        return;
    }

    openListNavModile();
    openBody();

    closeListNumbers();
});

dropList.addEventListener("click", () => {
    if (dropList.classList.contains("activeDropList")) {
        closeDropList();
        closeBody();
        return;
    }

    openDropList();
    openBody();
});

page.addEventListener("click", () => {
    closeListNumbers();
    closeListNavModile();
    closeDropList();

    closeBody();
});

const openListNumbers = () => numbersModile.classList.add("activeNumberList");
const closeListNumbers = () => numbersModile.classList.remove("activeNumberList");

const openListNavModile = () => burgerModile.classList.add("activeBurger");
const closeListNavModile = () => burgerModile.classList.remove("activeBurger");

const openDropList = () => dropList.classList.add("activeDropList");
const closeDropList = () => dropList.classList.remove("activeDropList");

function openBody() {
    page.classList.add("activePage");
    document.body.classList.add("overflowHidden");
}

function closeBody() {
    page.classList.remove("activePage");
    document.body.classList.remove("overflowHidden");
}
