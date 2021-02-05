//parallax
//крч надо добавить проверку есть ли паралакс либо включать на страницах где он нужен
document.addEventListener("scroll", (e) => {
    let scroll_pos2 = window.scrollY;
    const paralaxWrapper = document.querySelector(".paralax-wrapper");
    const paralaxTittle = document.querySelector(".paralax-tittle");
    scroll_pos = scroll_pos2 * -1 * 0.5;
    var intViewportHeight = window.innerHeight * 0.6;

    var opacitySetting = ((-intViewportHeight * 0.6) / (-scroll_pos2 - 60) / 2);
    if (opacitySetting >= 1) {
        opacitySetting = 1;
    }
    if (opacitySetting <= 0) {
        opacitySetting = 0;
    }
    opacitySetting.toFixed(2);

    // paralaxWrapper.style.backgroundPosition = "0px " + scroll_pos + "px";
    paralaxWrapper.style.backgroundPosition = "0px " + scroll_pos + "px";
    paralaxTittle.style.paddingTop = -scroll_pos * 1.5 + "px";
    paralaxTittle.style.opacity = opacitySetting;
});