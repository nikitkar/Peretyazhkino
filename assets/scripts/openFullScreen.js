const body = document.body;
const reviewsItemImgList = document.querySelectorAll(".reviewsItem--Img");
const reviewsItemImgBlockAfter = document.querySelectorAll(
    ".reviewsItem--ImgBlockAfter"
);
const lightbox = document.querySelector(".lightbox");
const lightboxImg = document.querySelector(".lightbox_img");
const lightboxCloseBtn = document.querySelector(".lightbox_close");

reviewsItemImgBlockAfter.forEach((reviewsItemImgItem, index) => {
    reviewsItemImgItem.addEventListener("click", () => {
        let imgSrc = reviewsItemImgList[index].currentSrc;

        lightboxImg.setAttribute("src", imgSrc);
        lightbox.classList.add("open");

        body.style.overflow = "hidden";
    });
});

const lightboxClose = () => {
    lightbox.classList.remove("open");
    body.style.overflow = "";
};

lightboxCloseBtn.addEventListener("click", lightboxClose);

window.addEventListener("click", (e) => {
    if (e.target.className === "lightbox_wrapper") lightboxClose();
});

window.addEventListener("keydown", (e) => {
    if (e.key === "Escape") lightboxClose();
});
