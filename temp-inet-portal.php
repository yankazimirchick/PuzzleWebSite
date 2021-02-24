<?php
/*
Template Name: Интернет Портал
*/
?>


<!-- выбор хедера-->
<?php
// visibility chech
$headertransp = get_field('header_transparent');
if($headertransp=='true' ){
	get_header('transparent');
}else{
	get_header();
}?>
<!-- выбор хедера конец-->




<!-- Блок с паралаксом-->
<?php 
// visibility chech
$visibility = get_field('background_visibility');
if($visibility=='true' ){
?>
<section class="paralax-block">
    <div class="paralax-overlay" style="opacity: <?php the_field('b1-background_opacity'); ?>;background-color: <?php the_field('b1-background_overlay'); ?>;"></div>
    <div style="background-image:url(<?php the_field('b1-background_image'); ?>)"
        class="paralax-wrapper">
        <div class="paralax-inner">
            <h1 class="paralax-tittle">
                <?php the_field('b1-background_text'); ?>
            </h1>
        </div>
    </div>
</section>
<?}?>
<!-- Блок с паралаксом конец-->

<div class="smm">
            <section class="paralax-block">
                <div class="paralax-overlay"></div>
                <div style="background-image: url(&quot;assets/img/web-site-pages/corporate/мужик-в-офисе.jpg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            РАЗРАБОТКА ИНТЕРНЕТ-ПОРТАЛА
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 left-side-block">
                            <h2 class="title text-left">– ПОРТАЛ</h2>
                            <p class="simple-text text">
                                Сайт, который предоставляет пользователю различные интерактивные интернет-сервисы, которые работают в рамках этого сайта. Веб-портал может состоять из нескольких сайтов.
                            </p>
                            <p class="simple-text text">
                                Также порталы функционируют как точки доступа к информации в интернете или сайты, которые помогают пользователям в поиске нужной информации. 
                            </p>
                            <p class="simple-text text">
                                Иногда их называют навигационными сайтами.Как правило, порталы выполняют функции поиска, а также предоставляют доступ к различным интернет-сервисам, например электронной почте, ленте новостей и т. д.
                            </p>
                            <h3 class="title">ОТ 500 Y.E.</h3>
                        </div>
                        <div class="col-sm-6 right-side-block">
                            <img src="assets/img/web-site-pages/corporate/corporate.jpg" class="img" >
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="container">
                <h2 class="title">КАКИЕ МОЖНО РАЗРАБОТАТЬ САЙТЫ ДЛЯ ПРОДАЖИ?</h2>
                <p class="text">
                    Разработать магазин в сети можно по нескольким типам:
                </p>
            </div> -->

            <div class="info-table-vertical">
                <div class="container">
                    <h3 class="title">БОНУСЫ</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Первичная SEO-оптимизация
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Помощь с покупкой и настройкой хостинга и домена    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Консультационная поддержка
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-to-order-block">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center col-md-6 justify-content-md-end">
                            <div class="button-wrapper">
                                <button class="cyan-button" data-toggle="modal" data-target="#form-modal-window">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</button>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center justify-content-md-start">
                            <div class="button-wrapper">
                                <button class="cyan-button" data-toggle="modal" data-target="#form-modal-window">ЗАКАЗАТЬ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>



<?php get_footer() ?>