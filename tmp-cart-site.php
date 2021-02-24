<?php
/*
Template Name: Сайт-визитка
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
                <div style="background-image: url(&quot;assets/img/web-site-pages/card-site/pexels-photo-346731.jpeg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            РАЗРАБОТКА САЙТА-ВИЗИТКИ
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 left-side-block">
                            <h2 class="title text-left">– САЙТ-ВИЗИТКА</h2>
                            <p class="simple-text text">
                                Продукт содержащий в себе от 7 до 12 страниц. Позволяющий рассказать о компании, сфере деятельности и контактные данные.    
                            </p>
                            <p class="simple-text text">
                                Сайты данной категории как правило носят информационно ознакомительный характер и дают возможность рассказать о не большом количестве услуг, товаров или продуктов.
                            </p>
                            <br>
                            <h3 class="title-text">
                                САЙТ-ВИЗИТКА ПОДОЙДЕТ К:
                            </h3>
                            <ul class="tabs-info">
                                <li class="text">Малому Бизнесу с небольшим перечнем услуг;</li>
                                <li  class="text">Индивидуальным предпринимателям;</li>
                                <li class="text">Молодым компаниям;</li>
                                <li class="text">Блогерам;</li>
                            </ul>
                            <br>
                            <p class="text">
                                При разработке сайта визитки у нас. Вы получите качественный современный WEB сайт. Который позволит правильно представлять вашу компанию в интернете и обеспечит возможность работы с клиентами и партнерами.
                            </p>
                            <h3 class="title-text">
                                ОПЦИИ САЙТА-ВИЗИТКИ
                            </h3>
                            <ul class="tabs-info">
                                <li class="text">Количество страниц: От 7 до 12</li>
                                <li class="text">Адаптивный дизайн: +</li>
                                <li class="text">Модуль новости: +</li>
                                <li class="text">Модуль SEO: +</li>
                                <li class="text">Формы обратной связи: 2 и более</li>
                            </ul>
                            <h3 class="title">ОТ 300 Y.E.</h3>
                        </div>
                        <div class="col-sm-6 right-side-block">
                            <img src="assets/img/web-site-pages/card-site/card.jpg" class="img" >
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