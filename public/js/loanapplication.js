
const slidePage = document.querySelector(".page-slide");
const loancontainer = document.querySelector(".loanapplication");
const next1btn = document.querySelector(".next1");
const next2btn = document.querySelector(".next2");
const next3btn = document.querySelector(".next3");

const prev1btn = document.querySelector(".prev1");
const prev2btn = document.querySelector(".prev2");
const prev3btn = document.querySelector(".prev3");
const submitbtn = document.querySelector(".submit1");


next1btn.addEventListener("click", function() {
    slideanimation(-100, 600);
});

next2btn.addEventListener("click", function() {
    slideanimation(-200, 550);

});
next3btn.addEventListener("click", function() {
    slideanimation(-300, 470);
});

prev1btn.addEventListener("click", function() {
    slideanimation(0, 750);

});
prev2btn.addEventListener("click", function() {
    slideanimation(-100, 600);
});

prev3btn.addEventListener("click", function() {
    slideanimation(-200, 550);

});


function slideanimation(m, h) {
    slidePage.style.marginLeft = m + "%";
    loancontainer.style.height = h + "px";
}
