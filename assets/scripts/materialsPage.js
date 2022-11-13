const upholsteryButton = document.getElementById("upholstery--button");
const upholsteryListHidden = document.getElementById("upholsteryList--hidden");

const fillerButton = document.getElementById("filler--button");
const fillerListHidden = document.getElementById("fillerList--hidden");

upholsteryButton.addEventListener("click", () => {
    upholsteryButton.style.display = "none";
    upholsteryListHidden.style.display = "flex";
});

fillerButton.addEventListener("click", () => {
    fillerButton.style.display = "none";
    fillerListHidden.style.display = "flex";
});
