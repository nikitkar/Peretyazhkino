const inviteDesignerButton = document.querySelectorAll(
    ".inviteDesignerClick"
);
const modal = document.getElementById("modal");
const modalWrapper = document.querySelector(".modalWrapper");
const modalClose = document.getElementById("modalClose");
const page = document.getElementById("page");


inviteDesignerButton.forEach((item) => {
    item.addEventListener("click", () => {
        openModal();

        modalWrapper.addEventListener("click", (event) => {
            event.stopPropagation();
        });
    });
});

modal.addEventListener("click", () => {
    closeModal();
});

modalClose.addEventListener("click", () => {
    closeModal();
});

function openModal() {
    document.body.style.overflow = "hidden";
    // page.style.display = "block";
    modal.classList.add("modalShow");
}

function closeModal() {
    modal.classList.remove("modalShow");
    // page.style.display = "none";
    document.body.style.overflow = "auto";
}
