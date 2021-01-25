//Прелоадер
$(document).ready(preloderFunction());

function preloderFunction() {
    setTimeout(function () {

        // Force Main page to show from the Start(Top) even if user scroll down on preloader - Primary (Before showing content)

        // Model 1 - Fast            
        document.getElementById("page-top").scrollIntoView();

        // Model 2 - Smooth             
        // document.getElementById("page-top").scrollIntoView({behavior: 'smooth'});




        // Removing Preloader:
        $('#ctn-preloader').addClass('loaded');
        // Once the preloader has finished, the scroll appears 
        $('body').removeClass('no-scroll-y');

        if ($('#ctn-preloader').hasClass('loaded')) {
            // It is so that once the preloader is gone, the entire preloader section will removed
            $('#preloader').delay(1000).queue(function () {
                $(this).remove();

                // If you want to do something after removing preloader:
                afterLoad();

            });
        }
    }, 100);
}

function afterLoad() {
    // After Load function body!
}













//плавный скорлл
var linkNav = document.querySelectorAll('[href^="#"]'), //выбираем все ссылки к якорю на странице
    V = 1; // скорость, может иметь дробное значение через точку (чем меньше значение - тем больше скорость)
for (var i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function (e) { //по клику на ссылку
        e.preventDefault(); //отменяем стандартное поведение
        var w = window.pageYOffset, // производим прокрутка прокрутка
            hash = this.href.replace(/[^#]*(.*)/, '$1'); // к id элемента, к которому нужно перейти
        t = document.querySelector(hash).getBoundingClientRect().top, // отступ от окна браузера до id
            start = null;
        requestAnimationFrame(step); // подробнее про функцию анимации [developer.mozilla.org]
        function step(time) {
            if (start === null) start = time;
            var progress = time - start,
                r = (t < 0 ? Math.max(w - progress / V, w + t) : Math.min(w + progress / V, w + t));
            window.scrollTo(0, r);
            if (r != w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash // URL с хэшем
            }
        }
    }, false);
}