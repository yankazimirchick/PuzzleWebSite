<?php
/*
Template Name: Услуги
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


<div id="case_section" class="container-fluid service-wrapper tabs-wrapper">
    <div class="case_content" id="pills-tabContent">
        <div class="" id="web-dev" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="nav-item col-sm-3">
                        <button data-filter=".wedDev-filter"
                            class="serviceFilterButton innerFilterButton  webDevButton innerFilterButton-active service-filter-button"
                            id="webDevAll"> Веб-разработка
                        </button>
                    </div>
                    <div class="nav-item col-sm-3">
                        <button data-filter=".smm-filter"
                            class="serviceFilterButton innerFilterButton webDevButton service-filter-button">SMM
                        </button>
                    </div>
                    <div class="nav-item col-sm-3">
                        <button data-filter=".seo-filter"
                            class="serviceFilterButton innerFilterButton webDevButton service-filter-button">SEO
                        </button>
                    </div>
                    <div class="nav-item col-sm-3">
                        <button data-filter=".reclame-filter"
                            class="serviceFilterButton innerFilterButton webDevButton service-filter-button">КОНТЕКСТНАЯ
                            РЕКЛАМА
                        </button>
                    </div>
                </div>
            </div>
            <div id="webDevGrid" class="webDevGrid  container-fluid pl-0 pr-0">
                <div class="row">

                    <div class="webDevGrid-item wedDev-filter">
                        <div class="col-sm-9 service-part-header">
                            <h2 class="service-title">
                                РАЗРАБОТКА САЙТОВ
                            </h2>
                            <p class="service-subtitle">
                                Разработаем сайт под Ваши цели. Изначально сделаем правильную структуру, которая
                                будет высоко ранжироваться поисковыми системами, а также научим Вас легко
                                наполнять сайт товарами, менять фотографии, описание и т.д.
                                <a href="/development" class="service-link arrow-before-right">ПОДРОБНЕЕ</a>
                            </p>
                        </div>
                        <div class="info-table">
                            <div class="info-table-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-cyan icon-pagebreak"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/landing-page">РАЗРАБОТКА LANDING
                                                            PAGE</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Одностраничный сайт, который идеально подойдет, чтобы
                                                        донести четко обозначенную мысль до аудитории
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-magenta icon-office"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/corporate/">РАЗРАБОТКА
                                                            КОРПОРАТИВНОГО САЙТА</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Это полноценное представительство Вашей компании в
                                                        интернете. Создание положительного имиджа компании.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-yellow icon-user-check"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/card-site/">РАЗРАБОТКА
                                                            САЙТА-ВИЗИТКИ</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Это простой сайт, который содержит информацию о Вас и о
                                                        способах связаться с Вами.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-cyan icon-newspaper"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/portal/">РАЗРАБОТКА ПОРТАЛА</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Это сайт, имеющий функционал для добавления статей.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-magenta icon-embed2"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/front-end/">ВЕРСТКА</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Разработаем сайт на основе готовых дизайн макетов.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-yellow icon-cart"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/i-store/">РАЗРАБОТКА
                                                            ИНТЕРНЕТ-МАГАЗИНА</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Разработаем продающий интернет-магазин для Вашего
                                                        бизнеса.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="webDevGrid-item smm-filter">
                        <div class="col-sm-9 service-part-header">
                            <h2 class="service-title">
                                SMM-ПРОДВИЖЕНИЕ
                            </h2>
                            <p class="service-subtitle">
                                Разработаем сайт под Ваши цели. Изначально сделаем правильную структуру, которая
                                будет высоко ранжироваться поисковыми системами, а также научим Вас легко
                                наполнять сайт товарами, менять фотографии, описание и т.д.
                                <a href="/development" class="service-link arrow-before-right">ПОДРОБНЕЕ</a>
                            </p>
                        </div>
                        <div class="info-table">
                            <div class="info-table-wrapper">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                     <span class="color-cyan icon-instagram"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="assets/img/icon/unknow_icon.png">ПРОДВИЖЕНИЕ В
                                                            INSTAGRAM</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        В ярком мире цифровых фото сервиса INSTAGRAM можно
                                                        продуктивно рекламировать и продавать товар. Мы
                                                        разработаем для Вас стратегию и программу продвижения.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                    <span class="color-magenta icon-vk"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/corporate/">ПРОДВИЖЕНИЕ В VK</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Вконтакте одна из самых крупных социальных сетей на
                                                        территории СНГ. Развивая этот канал пользователей, Вы
                                                        получите хороший канал целевой аудитории для своего
                                                        бизнеса.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                 <span class="color-yellow icon-facebook"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/card-site/">ПРОДВИЖЕНИЕ В
                                                            FACEBOOK</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Facebook — крупнейшая социальная сеть в мире, которая
                                                        входит в пятерку самых посещаемых веб-сайтов мира.
                                                        Именно она считается самой эффективной для продвижения
                                                        Вашего бизнеса.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                    <span class="color-magenta icon-odnoklassniki"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/portal/">ПРОДВИЖЕНИЕ В
                                                            ОДНОКЛАССНИКАХ</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Сегодня в Одноклассники зарегистрировано более 300 млн
                                                        пользователей и это вторая по популярности социальная
                                                        сеть в Рунете.Со специфической целевой аудиторией.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="webDevGrid-item seo-filter">
                        <div class="col-sm-9 service-part-header">
                            <h2 class="service-title">
                                SEO-ПРОДВИЖЕНИЕ
                            </h2>
                            <p class="service-subtitle">
                                Разработаем сайт под Ваши цели. Изначально сделаем правильную структуру, которая
                                будет высоко ранжироваться поисковыми системами, а также научим Вас легко
                                наполнять сайт товарами, менять фотографии, описание и т.д.
                                <a href="/development" class="service-link arrow-before-right">ПОДРОБНЕЕ</a>
                            </p>
                        </div>
                        <div class="info-table">
                            <div class="info-table-wrapper">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-5">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-cyan icon-stats-bars2"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/landing-page">SEO ПРОДВИЖЕНИЕ</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        SEO — это поисковая оптимизация и стратегия продвижения
                                                        сайта в интернете с целью привлечения целевой аудитории
                                                        естественной поисковой выдачи. Проводим аудит, анализ
                                                        сферы клиента и разработку стратегии.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-yellow icon-pie-chart"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/corporate/">АУДИТ И АНАЛИЗ
                                                            САЙТА</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        SEO анализ и аудит позволяют выявить слабые места сайта.
                                                        Это дает возможность устранить их, что улучшит позиции
                                                        Вашего ресурса в интернете и привлечет больше клиентов!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="webDevGrid-item reclame-filter">
                        <div class="col-sm-9 service-part-header">
                            <h2 class="service-title">
                                КОНТЕКСТНАЯ РЕКЛАМА
                            </h2>
                            <p class="service-subtitle">
                                Разработаем сайт под Ваши цели. Изначально сделаем правильную структуру, которая
                                будет высоко ранжироваться поисковыми системами, а также научим Вас легко
                                наполнять сайт товарами, менять фотографии, описание и т.д.
                                <a href="/development" class="service-link arrow-before-right">ПОДРОБНЕЕ</a>
                            </p>
                        </div>
                        <div class="info-table">
                            <div class="info-table-wrapper">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-5">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                    <span class="color-cyan icon-google"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/landing-page">В GOOGLE ADWORDS</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Правильная настройка рекламной компании в сервисе в
                                                        Google AdWords позволяет добиться больших эффективности
                                                        по привлечению на сайт целевого трафика. Мы сделаем это
                                                        для Вас!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                 <span class="color-yellow icon-yandex"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/corporate/">В ЯНДЕКС.ДИРЕКТ</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        У нас вы можете заказать контекстную рекламу в сервисе
                                                        Яндекс Директ. Контекстная реклама мощный инструмент
                                                        привлечения клиентов для любого бизнеса.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                <span class="color-cyan icon-cubes"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/landing-page">РЕТАРГЕТИНГ И
                                                            РЕМАРКЕТИНГ</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Ретаргетинг и ремаркетинг – это услуга, которая
                                                        заключается в демонстрации рекламы тем, кто уже посещал
                                                        ваш веб-сайт, но не совершил покупку.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="table-item">
                                                <div class="col-xs-3 left-side-block">
                                                    <span class="color-yellow icon-flag"></span>
                                                </div>
                                                <div class="col-xs-3 right-side-block">
                                                    <h2 class="table-title">
                                                        <a href="/development/corporate/">РСЯ И КМС</a>
                                                    </h2>
                                                    <p class="table-text">
                                                        Контекстная реклама размещается на тематических сайтах.
                                                        Это позволяет рекламодателям расширить охват аудитории,
                                                        и повысить эффективность существующих рекламных
                                                        кампаний.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>





<section class="bg-section-light">

</section>








<div class="contact-form-section">
    <div class="contact-form-section-inner">
        <div style="max-width: 450px;" class="col-md-6 ">
            <h2>
                Определите стоимость разработки вашего сайта
            </h2>
            <p>
                Наш консультант свяжется с Вами в течение 10 минут!
            </p>
        </div>
        <div class="col-md-6">

            <style>
                .btn_submit {
                    position: absolute;
                    bottom: 0px;
                    right: 15px;
                    background-color: #000;
                    color: #fff;
                    font-family: "Bebas Neue";
                    border: unset;
                    padding: 5px 10px;
                    letter-spacing: 1px;
                }

                .phoneInput {
                    width: 100%;
                }

                .nameInput {
                    width: 100%;
                }

                .messageInput {
                    height: 100%;
                    width: 100%;

                }
            </style>
            <div class=" container">

                <?echo do_shortcode('[contact-form-7 id="85" title="Контактная форма на странице кейсов"]')?>


            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>