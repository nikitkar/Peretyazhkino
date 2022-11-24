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
    });
});
body.addEventListener("mouseup", () => (isActive = false));
body.addEventListener("mouseleave", () => (isActive = false));
body.addEventListener("mousemove", function(event) {
    if (!isActive) return;

    let x = event.pageX;

    x -= slider[indexItem].getBoundingClientRect().left;

    beforeAfterSlider(x);
    pauseEvents(event);
}, {passive:false});

change.forEach((item, index) => {
    item.addEventListener("touchstart", () => {
        isActive = true;
        indexItem = index;
    });
});
body.addEventListener("touchend", () => (isActive = false));
body.addEventListener("touchcancel", () => (isActive = false));
body.addEventListener("touchmove", function(event) {
    if (!isActive) return;

    let x;
    let i;

    for (i = 0; i < event.changedTouches.length; i++)
        x = event.changedTouches[i].pageX;

    x -= slider[indexItem].getBoundingClientRect().left;

    beforeAfterSlider(x);
    pauseEvents(event);
}, {passive:false});
