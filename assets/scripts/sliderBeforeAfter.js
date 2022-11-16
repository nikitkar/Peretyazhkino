const slider = document.querySelectorAll(
    ".examplesWorkItem--ImageBlock__imgWrapper"
);
const before = document.querySelectorAll(
    ".examplesWorkItem--ImageBlock__before"
);
const beforeImage = document.querySelector(
    ".examplesWorkItem--ImageBlock__img"
);
const change = document.querySelectorAll(
    ".examplesWorkItem--ImageBlock__change"
);

let isActive = false;
let indexItem = -1;

const beforeAfterSlider = (x) => {
    let shift = Math.max(0, Math.min(x, slider[indexItem].offsetWidth));

    before[indexItem].style.width = `${shift}px`;
    change[indexItem].style.left = `${shift}px`;
};

const pauseEvents = (e) => {
    e.stopPropagation();
    e.preventDefault();

    return false;
};

change.forEach((item, index) => {
    item.addEventListener("mousedown", () => {
        isActive = true;
        indexItem = index;
        console.log("change");
    });
});
body.addEventListener("mouseup", () => (isActive = false));
body.addEventListener("mouseleave", () => (isActive = false));
body.addEventListener("mousemove", (e) => {
    if (!isActive) return;

    let x = e.pageX;

    x -= slider[indexItem].getBoundingClientRect().left;

    beforeAfterSlider(x);
    pauseEvents(e);
});

change.forEach((item) => {
    item.addEventListener("touchstart", () => {
        isActive = true;
        indexItem = index;
        console.log("change");
    });
});
body.addEventListener("touchend", () => (isActive = false));
body.addEventListener("touchcancel", () => (isActive = false));
body.addEventListener("touchmove", (e) => {
    if (!isActive) return;

    let x;
    let i;

    for (i = 0; i < e.changedTouches.length; i++) x = e.changedTouches[i].pageX;

    x -= slider[indexItem].getBoundingClientRect().left;

    beforeAfterSlider(x);
    pauseEvents(e);
});
