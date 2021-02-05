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
            $('#preloader').delay(100).queue(function () {
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





// external js: isotope.pkgd.js
// init Isotope
var $grid = $('.casegrid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'fitRows',
    filter: '.web-dev'
});
// filter functions
var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function () {
        var number = $(this).find('.number').text();
        return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function () {
        var name = $(this).find('.name').text();
        return name.match(/ium$/);
    }
};
// bind filter button click
$('.filters-button-group').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({
        filter: filterValue
    });
});
// change is-checked class on buttons
$('.button-group').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function () {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
    });
});


//WEBDEV GRID
let $activeWebDevButton = $(".innerFilterButton-active.webDevButton");
let $webDevGrid = $("#webDevGrid").isotope({
    itemSelector: '.webDevGrid-item',
    layoutMode: 'fitRows',
    filter: $activeWebDevButton.attr('data-filter'),
});

$(".webDevButton").on("click", function () {
    if ($(this).hasClass("webDevButton")) {
        $activeWebDevButton.removeClass("innerFilterButton-active");
        $(this).addClass("innerFilterButton-active");
        $activeWebDevButton = $(this);
    }

    let attrWebDevValue = $activeWebDevButton.attr('data-filter');

    $webDevGrid.isotope({
        filter: attrWebDevValue
    });

    $webDevGrid.isotope('layout');
    // $specsGrid.isotope('layout');
});











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