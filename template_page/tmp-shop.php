<?php
/*
Template Name: РАЗРАБОТКА ИНТЕРНЕТ-МАГАЗИНА
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
            <?php if( get_field('b1-background_subtext') ): ?>
            <p class="text-paralax">
            <?php the_field('b1-background_subtext'); ?>
                        </p> 
            <?php endif; ?>
                            
        </div>
    </div>
</section>
<?}?>
<!-- Блок с паралаксом конец-->


<div class="smm">
          

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 left-side-block">
                            <p class="simple-text text">
                                «Если вашего бизнеса нет в Интернете, то вас нет в бизнесе…» – известная цитата, которая очень правдиво описывает нынешнее положение вещей в экономике. Электронная коммерция, интернет-банки, сервисы для заказов и доставки еды, а также другие привычные дела сейчас мы делаем онлайн. Покупки мы тоже совершаем в сети из-за существования интернет-магазинов. Чтобы купить вещь, нам нужно просто вбить в поиске нужный запрос, выбрать сайт и сделать заказ. Онлайн-магазин очень серьезно продвинет ваш бизнес и увеличит продажи, так как огромный трафик сегодня приходится на сайты онлайн-сторов.    
                            </p>
                            <p class="simple-text text">
                                Создание интернет-магазина важно для того, чтобы покупатели могли купить какие-то товары по сети. Он имеет каталог, каждый товар описывается с помощью карточки, а также специальные фильтры для более быстрого поиска нужного продукта или вещи. После того, как покупатель выберет то, что ему понравилось, то он заносит этот товар в корзину, чтобы дальше оформить заказ. После он оплачивает его благодаря онлайн-сервису или заполняет форму для самовывоза, доставки и т.д. То есть после этапа заказа начинается товарная логистика, и она уже зависит от того, насколько много внимания вы уделили разработке магазина и его функционала.
                            </p>
                        </div>
                        <div class="col-sm-6 right-side-block">
                            <img src="assets/img/store-474x510.jpg" class="img" style="max-width: 480px">
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