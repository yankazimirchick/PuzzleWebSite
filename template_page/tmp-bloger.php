<?php
/*
Template Name: БЛОГЕР НАПРОКАТ
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
                    <div class="row flex-row-reverse">
                        <div class="col-sm-7">
                            <h3 class="title-text">
                                ВИДЫ РЕКЛАМЫ:
                            </h3>
                            <ul class="tabs-info">
                                <li class="text mb-2">
                                    <b>Реклама в Stories</b> – это видео-репортаж в реальном времени со сроком действия 24 часа хронометражем до 30 секунд со ссылкой на ваш аккаунт/сайт. Около 70% пользователей Instagram просматривают Stories со звуком – это прекрасная возможность донести нужную информацию до аудитории аккаунта необычным способом. P.S. : все вопросы цензуры оговариваются с заказчиком.
                                </li>
                                <li class="text mb-2">
                                    <b>Пост в ленте</b> – это мини-статья, которую размещает блогер о ваших товарах и услугах , со ссылкой на ваш Instagram/сайт. По сути, пишется отзыв, исходя из реального опыта, рассказывает, почему вы классные, предлагает и даёт возможность выбора. Это не прямая реклама, которая отталкивает громкими словами «закажите у нас» или «купите тут», а «нативная», которая работает на доверии аудитории к человеку.
                                </li>
                                <li class="text mb-2">
                                    <b>Giveaway</b> – популярный инструмент продвижения позволяет привлечь внимание к вашему продукту и получить новых уникальных клиентов. Это тот же конкурс, где призом будет ваш товар или услуга. Размещение его в Instagram блогера сокращает затраты на рекламу и исключает участие не целевой аудитории.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-5 d-flex justify-content-md-end">
                            <img src="assets/img/web-site-pages/bloger/story.jpg" class="img" style="height: 400px;  width: 100%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <h3 class="title-text">
                                ВАРИАНТЫ СОТРУДНИЧЕСТВА:
                            </h3>
                            <ul class="tabs-info">
                                <li class="text mb-2">
                                    <b>Бартер:<br></b>
Если ваши услуги (спа-салон, наращивание волос, ресниц, ногти, одежда и т.д.) интересны блогеру, то вы можете работать по бартеру. Например, вы ей маникюр по первому требованию, она вам – 1 пост в месяц. И на это соглашаются даже девушки миллинной аудиторией подписчиков, провереный факт, который работает. Плюсом такой схемы сотрудничества является то, что Вам не придется тратить кэш за пост или историю по определенному прайсу, а можно обойтись меньшими усилиями за ту же услугу от блогера.    
                                </li>
                                <li class="text mb-2">
                                    <b>Работа за кэш:<br></b>
Многие блогеры предпочитают работать за оплату/предоплату за 1 или нескольких постов, а так же stories в его аккаунте. Как и по бартеру, наш блогер согласно нашим обязательствам проводит работу с каждым комментарием об уточнении цен товара/услуги. Плюсом такой схемы сотрудничества может получится то, что сотрудничество с блогером может показать отличный «выхлоп» за четко оговоренную сумму.    
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-5 d-flex justify-content-md-end">
                            <img src="assets/img/web-site-pages/bloger/OzIHDKFh1Pid0dYh-510x510.jpg" class="img" style="height: 400px;  width: 100%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-table bloger-page__info-table">
                <div class="info-table-wrapper">
                    <div class="container">
                        <h3 class="title-text text-left">
                            КАК МЫ РАБОТАЕМ:
                        </h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                        <img src="assets/img/icon/unknow_icon.png"
                                            class="table-img">
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Обсуждаем с Вами цели и желаемый результат.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                        <img src="assets/img/icon/unknow_icon.png"
                                            class="table-img">
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Анализируем активность в аккаунте, сравниваем и выбираем блогера исходя не из своих личных пристрастий, а желанием заказчика и специфики его сферы деятельности.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                        <img src="assets/img/icon/unknow_icon.png"
                                            class="table-img">
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Формируем базу блоггеров, интересных вашей целевой аудитории, с указанием условий работы и примерных гонораров.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                        <img src="assets/img/icon/unknow_icon.png"
                                            class="table-img">
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Планируем вместе с Вами кампанию (сколько и каких товаров/услуг тестируют, сколько постов и с какой частотой публикуют, какие конкурсы и пр.).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                        <img src="assets/img/icon/unknow_icon.png"
                                            class="table-img">
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Проводим переговоры, готовим соответствующие документы.
                                            Готовим ТЗ для блоггеров, полностью сопровождаем кампанию и наш проект.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                        <img src="assets/img/icon/unknow_icon.png"
                                            class="table-img">
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Осуществляем контроль выходов публикаций и комментариев блоггеров.
Предоставляем отчёты о проделанной работе.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="button-to-order-block">
                <div class="container">
                    <div class="row">
                        <div class="d-flex flex-column align-items-center col-md-12">
                            <div class="button-wrapper">
                                <button class="cyan-button" data-toggle="modal" data-target="#form-modal-window">ОСТАВЬТЕ ЗАЯВКУ</button>
                            </div>
                            <div class="button-wrapper mt-3">
                                <button class="cyan-button bc-gray-light" data-toggle="modal" data-target="#bloger-form-modal">БЛОГЕР?</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>



<?php get_footer() ?>