<?php
/*
Template Name: Таргетировання реклама
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
                        <p class="text text-center mw950 m-auto">
                            <b class="color-black">Таргетированная реклама </b> — рекламный механизм, позволяющий выделить из всей имеющейся аудитории только ту часть, которая удовлетворяет заданным критериям (целевую аудиторию), и показать рекламу именно ей.
                        </p>
                    </div>
                </div>
            </div>

            <div class="info-table-vertical">
                <div class="container">
                    <h3 class="title-text text-center">ПРЕИМУЩЕСТВА ТАРГЕТИРОВАННОЙ РЕКЛАМЫ</h3>
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <div class="img-wrapper">
                            <span class="color-yellow icon-bubbles4"></span>
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Широкие возможности таргетинга
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="img-wrapper">
                            <span class="color-yellow icon-bubbles4"></span>
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Реклама только на целевую аудиторию товара или услуги    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="img-wrapper">
                            <span class="color-yellow icon-bubbles4"></span>
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Невысокая стоимость клика
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="img-wrapper">
                            <span class="color-yellow icon-bubbles4"></span>
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Удобные инструменты анализа эффективности рекламных кампаний
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-service-block">
               
                <div class="container">
                    <h3 class="title-text text-center">
                        ТАРГЕТИРОВАННАЯ РЕКЛАМА В ВКОНТАКТЕ
                    </h3>
                    <div class="row flex-row-reverse">
                        <div class="col-sm-6">
                            <p class="text">
                                Сегодня социальная сеть ВКонтакте насчитывает более 14 миллионов активных пользователей ежемесячно, что делает ее самой популярной в русскоязычном сегменте интернета.
                            </p>
                            <p class="text">
                                Рекламные объявления ВКонтакте показываются пользователям в левой части страниц и в новостной ленте. Таргетированное объявление, как правило, состоит из заголовка и изображения, а также может содержать короткое текстовое описание.
                            </p>
                            <p class="text">
                                ВКонтакте позволяет подобрать аудиторию по:
                            </p>
                            <ul class="tabs-info">
                                <li class="text mb-1">
                                    возрасту;
                                </li>
                                <li class="text mb-1">
                                    полу;
                                </li>
                                <li class="text mb-1">
                                    географическому расположению;
                                </li>
                                <li class="text mb-1">
                                    месту учебы (вплоть до номера группы), работы;
                                </li>
                                <li class="text mb-1">
                                    интересам.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-md-end">
                            <img src="/wp-content/uploads/2021/04/target.jpg" class="img" style="max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-service-block">
                <h3 class="title-text text-center">
                    ТАРГЕТИРОВАННАЯ РЕКЛАМА В INSTAGRAM
                </h3>
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-sm-6">
                            <p class="text">
                                Instagram – это социальная сеть, в которой люди делятся своими впечатлениями и событиями. Поэтому реклама в Instagram должна быть эмоциональной и красивой. Должны быть яркие и красочные креативы, иначе их пользователи просто не заметят.
                            </p>
                            <p class="text">
                                Реклама в Instagram отображается в ленте или в историях. Это может быть одно изображение, несколько изображений, видео и т. д. Отличие от обычных постов в том, что сверху есть надпись реклама и есть призыв к действию.
                            </p>
                            <p class="text">
                                Instagram позволяет подобрать аудиторию, учитывая:
                            </p>
                            <ul class="tabs-info">
                                <li class="text mb-1">
                                    Пол
                                </li>
                                <li class="text mb-1">
                                    Возраст
                                </li>
                                <li class="text mb-1">
                                    Место проживания
                                </li>
                                <li class="text mb-1">
                                    Демография (образование, семейное положение и тд)
                                </li>
                                <li class="text mb-1">
                                    Интересы (спорт, финансы, бизнес, мода, украшение и тд)
                                </li>
                                <li class="text mb-1">
                                    Поведение и т. д.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-md-end">
                            <img src="/wp-content/uploads/2021/04/target2.jpg" class="img" style="max-width: 100%;  height: auto; margin: 0 auto;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-service-block">
                <h3 class="title-text text-center">
                    ТАРГЕТИРОВАННАЯ РЕКЛАМА В FACEBOOK
                </h3>
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-sm-6">
                            <p class="text">
                                Фейсбук можно считать законодателем моды в таргетированной рекламе. Он первым внедряет новые возможности. Рекламный кабинет этой социальной сети умен и продвинут: новые фишки для маркетинга и рекламы вводятся практически каждый месяц. И это не единственное достоинство Фейсбука.
                            </p>
                            <p class="text">
                                Среди всех крупнейших социальных платформ мира Facebook предлагает наиболее широкие рекламные возможности. Владельцу бизнеса предлагается целый ряд рекламных решений, которые позволяют эффективно взаимодействовать с аудиторией.
                            </p>
                            <p class="text">
                                Facebook позволяет настроить следующие параметры для подбора аудитории:
                            </p>
                            <ul class="tabs-info">
                                <li class="text mb-1">
                                    Местонахождение
                                </li>
                                <li class="text mb-1">
                                    Возраст и пол
                                </li>
                                <li class="text mb-1">
                                    Точные интересы
                                </li>
                                <li class="text mb-1">
                                    Широкие категории
                                </li>
                                <li class="text mb-1">
                                    Предпочтения
                                </li>
                                <li class="text mb-1">
                                    Поведение и т. д.
                                </li>
                                <li class="text mb-1">
                                    Семейное положение
                                </li>
                                <li class="text mb-1">
                                    Язык
                                </li>
                                <li class="text mb-1">
                                    Образование и место работы
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-md-end">
                            <img src="/wp-content/uploads/2021/04/target3.jpg" class="img" style="max-width: 100%;  max-height: 300px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-table target-page__info-table">
                <div class="info-table-wrapper">
                    <div class="container">
                        <h3 class="title-text text-center">
                            ЭТАПЫ РАБОТЫ
                        </h3>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                    <span class="color-cyan icon-wb_incandescent"></span>
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Поиск и исследование целевой аудитории. В результате работы на данном этапе выявляется портрет и определяются интересы ЦА
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                    <span class="color-magenta icon-cog"></span>
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Привязка рекламной кампании к сайту
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                    <span class="color-yellow icon-bullhorn"></span>
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Создание рекламных объявлений. На этом этапе происходит настройка объявлений под интересы определившейся целевой аудитории
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                    <span class="color-magenta icon-signal"></span>
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Тестирование объявлений. В результате выявляются наиболее эффективные рекламные объявления
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                    <span class="color-yellow icon-group"></span>
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Корректировка целевой аудитории каждые 3 дня
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="info-table target-page__info-table">
                <div class="info-table-wrapper">
                    <div class="container">
                        <h3 class="title-text text-center">
                           БОНУСЫ
                        </h3>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                    <span class="color-cyan icon-pie-chart"></span>
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Анализ конкурентов
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                    <span class="color-magenta icon-bullhorn"></span>
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Инициирование акций
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="table-item d-flex flex-column">
                                    <div class="col-xs-12 left-side-block">
                                    <span class="color-yellow icon-cog"></span>
                                    </div>
                                    <div class="col-xs-3 right-side-block">
                                        <p class="text text-center">
                                            Подключение целей в Метрике
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="button-to-order-block">
                <h3 class="title-text text-center">
                    СТОИМОСТЬ НАСТРОЙКИ ТАРГЕТИРОВАННОЙ РЕКЛАМЫ:
                </h3>
                <h3 class="title-text text-center">
                    100 Y.E.
                </h3>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="d-flex flex-column align-items-center col-md-12">
                            <div class="button-wrapper">
                                <button class="cyan-button" data-toggle="modal" data-target="#form-modal-window">ОСТАВЬТЕ ЗАЯВКУ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>



<?php get_footer() ?>