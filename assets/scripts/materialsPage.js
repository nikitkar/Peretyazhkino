const upholsteryButton = document.getElementById("upholstery--button");
const upholsteryListHidden = document.getElementById("upholsteryList--hidden");

const fillerButton = document.getElementById("filler--button");
const fillerListHidden = document.getElementById("fillerList--hidden");

const upholsteryItemImgContent = document.querySelectorAll(
    ".upholsteryItem--imgContent"
);
const fillerItemImgContent = document.querySelectorAll(
    ".fillerItem--imgContent"
);

upholsteryButton.addEventListener("click", () => {
    upholsteryButton.style.display = "none";
    upholsteryListHidden.style.display = "flex";
});

fillerButton.addEventListener("click", () => {
    fillerButton.style.display = "none";
    fillerListHidden.style.display = "flex";
});

upholsteryItemImgContent.forEach((item) => {
    item.style.top = `calc(50% - ${item.clientHeight / 2}px)`;
});
fillerItemImgContent.forEach((item) => {
    item.style.top = `calc(50% - ${item.clientHeight / 2}px)`;
});
