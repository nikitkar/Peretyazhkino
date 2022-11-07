const navModileItem = document.querySelectorAll(".navModileItem");
const navModileItemList = document.querySelectorAll(".navModileItem--List");
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

