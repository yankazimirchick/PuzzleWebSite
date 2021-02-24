<?php
/*
Template Name: Корпоративный сайт
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
                            РАЗРАБОТКА КОРПОРАТИВНОГО САЙТА
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 left-side-block">
                            <h2 class="title text-left">– КОРПОРАТИВНЫЙ САЙТ</h2>
                            <p class="simple-text text">
                                Разработаем правильно спроектированный веб-ресурс который позволит с минимальными затратами осуществлять поиск новых партнеров, а ваше общение с потенциальными и реальными клиентами станет гораздо эффективнее.
                            </p>
                            <br>
                            <h3 class="title-text">
                                ДЛЯ ЧЕГО ОН НУЖЕН?
                            </h3>
                            <ul class="tabs-info">
                                <li class="text">Для продвижения предлагаемой вами продукции и повышения узнаваемости бренда;</li>
                                <li  class="text">Для максимально полного информирования пользователей о текущих акциях, появлении новых товаров, предоставлении новых видов услуг;</li>
                                <li class="text">Для размещения портфолио и каталога продукции;</li>
                                <li class="text">Для активного развития вашего бизнеса, расширения географии продаж в сети интернет, наработки клиентской базы;</li>
                                <li class="text">Для оформления онлайн-заказов и онлайн-продаж без помощи менеджера, снижения нагрузки на персонал, оптимизации деятельности.</li>
                            </ul>
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