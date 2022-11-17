const btnScroll = document.getElementById("goTop");
const mainBlock = document.querySelector(".main > section").clientHeight;

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
    if (
        document.body.scrollTop > mainBlock ||
        document.documentElement.scrollTop > mainBlock
    )
        btnScroll.style.display = "flex";
    else btnScroll.style.display = "none";
}

function scrollTopBtn() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
