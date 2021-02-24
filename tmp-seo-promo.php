<?php
/*
Template Name: SEO Продвижение
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
                <div style="background-image: url(&quot;assets/img/seo-page/seo.jpg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            SEO ПРОДВИЖЕНИЕ САЙТОВ
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 left-side-block">
                            <h2 class="title-text">
                                SEO ПРОДВИЖЕНИЕ САЙТОВ
                            </h2>
                            <p class="text">
                                Ежедневно миллионы людей совершают покупки в интернете. Из них большая часть смотрят только первые две ссылки, которые выдает поисковик. Если сайта нет хотя бы в первой десятке у вас очень мало шансов, что потенциальные клиенты найдут ваш сайт и совершат покупки.                            </p>
                            <p class="text">
                                SEO-продвижение сайтов помогает улучшить его позиции, увеличить прибыль и привлечь новых клиентов. Первые строчки в поисковике можно сравнить с престижным районом Минска.  Первое впечатление о какой-то организации у человека складывается после того, как он узнает, где находится ее офис. Чем район престижнее, тем больше ей доверяет клиент, тем больше шансов, что он выберет именно ее и станет постоянным клиентом.                            </p>
                            <p class="text">
                                Примерно также работают и верхние строчки поисковиков: если сайт в ТОПе, значит, ему доверяют.  Раскрутка сайтов в поисковых системах для стопроцентного результата должна проводится профессионалами.                            </p>
                            <p class="text">
                                Компания Puzzle Digital Agency – современное digital-агенство в Минске, которое оказывает техническую поддержку , решает задачи по SEO, организует продвижение web-сайтов и т.д    
                            </p>
                        </div>
                        <div class="col-sm-6 right-side-block">
                            <img src="assets/img/seo-page/diagram-seo-a-x2-486x510.png" class="img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="result-graphic">
                    <div class="result-header">
                        <h2 class="title text-left">РЕЗУЛЬТАТЫ НАШЕЙ РАБОТЫ</h2>
                    </div>
                    <div class="result-slider-wrapper">
                        <div class="result-slider">
                            <div>
                                <img src="assets/img/seo-page/slider/d2.png" alt="" class="slider-img">
                            </div>
                            <div>
                                <img src="assets/img/seo-page/slider/d3.png" alt="" class="slider-img">
                            </div>
                            <div>
                                <img src="assets/img/seo-page/slider/d4.png" alt="" class="slider-img">
                            </div>
                            <div>
                                <img src="assets/img/seo-page/slider/diagram-seo-a-x2-486x510.png" alt="" class="slider-img">
                            </div>
                        </div>
                    </div>
                </div>  
            </div>


            <div class="advantages-table">
                <h2 class="title">
                    <strong>ПРЕИМУЩЕСТВА ПРОДВИЖЕНИЯ САЙТА</strong>
                </h2>
                <div class="advantages-table-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">
                                        ПОТОК КЛИЕНТОВ - БЕСПЛАТНО!
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Вам больше не надо платить за каждый клик пользователя и волноваться за эффективность рекламных компаний. Занимая топовые позиции в поисковой выдаче – Вы больше не платите за переходы клиентов.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        ДЛИТЕЛЬНЫЙ РЕЗУЛЬТАТ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        SEO продвижение – это вложение в долгосрочную перспективу. Добиться хороших результатов за 1-2 месяца крайне сложно, тем не менее если ваш сайт занимает топовые позиции, SEO будет генерировать новых клиентов не один год.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">
                                        ТОЛЬКО ГОРЯЧИЕ КЛИЕНТЫ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        SEO-продвижение привлекает на сайт только тех пользователей, которые заинтересованы в Вашем товаре/услуге и готовы купить ЗДЕСЬ И СЕЙЧАС. CTR поискового продвижения может достигать 99%    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        ОТСЛЕЖИВАНИЕ РЕЗУЛЬТАТОВ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Эффективность SEO-оптимизации можно оценить такими показателями, как “Количество органического трафика”, “Рост позиций в поисковой выдаче” ну и конечно же “Увеличение числа продаж”. Вы всегда знаете за что платите и ежемесячно снижаете затраты на рекламу.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        ЛОЯЛЬНОСТЬ КЛИЕНТОВ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        SEO имеет на 95% больше переход, чем рекламные компании Яндекс Директа и Google Adwords. Большинство пользователей доверяют органической выдаче в отличии от  рекламных объявлений.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">
                                        ЗАХВАТ РЫНКА
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Если вы в топе поисковой выдачи, пользователи не узнают о ваших конкурентах. Так как 75% пользователей никогда не переходят на вторую страницу результатов поиска. Команда Puzzle Agency поможем вам стать лидером рынка.    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container form-full-container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="d-flex justify-content-center full-form__image-block_left-side">
                            <img src="assets/img/seo-page/jens-kreuter-58481-900x506.jpg" class="full-form__image_left-side">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="full-form__content-block_right-side">
                            <div class="form__header">
                                <h3 class="title-text">
                                    АКЦИЯ! МЕСЯЦ БЕСПЛАТНОГО SEO ПРОДВИЖЕНИЯ</h3>
                                <p class="text">
                                    В современном мире поисковые системы – наше все. Ведь именно к ним мы обращаемся по любому вопросу и в поиске нужного товара. Тут-то и правит SEO. Ведь именно благодаря работе над продвижением сайтов…
                                </p>
                            </div>
                            <div class="form__body">
                                <div class="form__image-wrapper">
                                    <div class="form__border-wrapper">
                                        <h3 class="title-text text-center">ПОЛУЧИТЬ МЕСЯЦ БЕСПЛАТНОГО SEO</h3>
                                        <div class="row d-flex justify-content-around mt-4">
                                            <!-- <div class="col-sm-6">
                                                <input type="text" placeholder="+375(xx)xxx-xx-xx" id="fullwidth-form__number" class="form__input">
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="cyan-button weight-button" data-toggle="modal" data-target="#form-modal-window">ПОЛУЧИТЬ</button>
                                            </div> -->
                                            <?php [contact-form-7 id="211" title="Контактная форма в body"] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="service-packages">
            <div class="packages-header">
                <div class="container">
                    <h3 class="title">
                        <strong>ПАКЕТЫ SEO УСЛУГ</strong>
                    </h3>
                </div>
            </div>
            <div class="container">
                <div class="packages-wrapper">
                    <div class="pack-wrapper pack-min">
                        <div class="pack-header">
                            <h3 class="pack-title">
                                МИНИМАЛЬНЫЙ
                            </h3>
                        </div>
                        <div class="pack-body">
                            <div class="pack-info-wrapper">
                                <div class="pack-info">
                                    Анализ сферы клиента
                                </div>
                                <div class="pack-info">
                                    Подбор семантического ядра до <b>300</b> запросов
                                </div>
                                <div class="pack-info">
                                    Группировка СЯ по посадочным страницам
                                </div>
                                <div class="pack-info">
                                    Анализ конкурентов
                                </div>
                                <div class="pack-info">
                                    Внутренняя оптимизация сайта (теги, метатеги, description)
                                </div>
                                <div class="pack-info">
                                    Написание уникальных статей: от <b>2000</b> символов
                                </div>
                                <div class="pack-info">
                                    Увеличение ссылочной массы: от <b>2</b> статей по 2 ссылки
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">200 У.Е</div>
                            <button class="button-pack-order">Заказать</button>
                        </div>
                    </div>
                    <div class="pack-wrapper pack-standart">
                        <div class="pack-header">
                            <h3 class="pack-title ">
                                СТАНДАРТ
                            </h3>
                        </div>
                        <div class="pack-body">
                            <div class="pack-info-wrapper">
                                <div class="pack-info special-check-mark">
                                    Все пункты, включенные в пакет “МИНИМАЛЬНЫЙ”
                                </div>
                                <div class="pack-info">
                                    Подбор семантического ядра до <b>500</b> запросов
                                </div>
                                <div class="pack-info">
                                    Конкурентный анализ по структуре страниц и по текстовому контенту, внесение правок
                                </div>
                                <div class="pack-info">
                                    Установка счетчиков, настройка целей
                                </div>
                                <div class="pack-info">
                                    Анализ юзабилити, поиск ошибок
                                </div>
                                <div class="pack-info">
                                    Написание уникальных статей: от <b>4000</b> символов
                                </div>
                                <div class="pack-info">
                                    Увеличение ссылочной массы: от <b>4</b> статей по 2 ссылки
                                </div>
                                <div class="pack-info">
                                    Размещение в бесплатных каталогах
                                </div>
                                <div class="pack-info">
                                    Перелинковка страниц
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">300 У.Е</div>
                            <button class="button-pack-order">Заказать</button>
                        </div>
                    </div>
                    <div class="pack-wrapper pack-max">
                        <div class="pack-header">
                            <h3 class="pack-title">
                                МАКСИМУМ
                            </h3>
                        </div>
                        <div class="pack-body">
                            <div class="pack-info-wrapper">
                                <div class="pack-info special-check-mark">
                                    Все пункты, включенные в пакет “СТАНДАРТ”
                                </div>
                                <div class="pack-info">
                                    Подбор семантического ядра от <b>500</b> запросов и выше
                                </div>
                                <div class="pack-info">
                                    Написание уникальных статей: от <b>6000</b> символов
                                </div>
                                <div class="pack-info">
                                    Увеличение ссылочной массы: от <b>6</b> статей по 2 ссылки
                                </div>
                                <div class="pack-info">
                                    Участие web-разработчика, до <b>10</b> часов/месяц
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">400 У.Е</div>
                            <button class="button-pack-order">Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="received-bonuses">
            <div class="container">
                <div class="received-bonuses__header">
                    <h3 class="title">
                        ЧТО ВЫ ПОЛУЧИТЕ
                    </h3>
                </div>
                <div class="d-flex align-items-center received-bonuses__wrapper">
                    <div class="received-bonuses__body_left-side col-md-6">
                        <div class="received-bonuses__img-wrapper">
                            <img src="assets/img/seo-page/diagram-seo-b-x2-510x340.png" alt="">
                        </div>
                    </div>
                    <div class="received-bonuses__body_right-side col-md-6">
                        <div class="received-bonuses__bonus">
                            <img src="" alt="" class="received-bonuses_icon">
                            <h5>РОСТ ПОСЕТИТЕЛЕЙ</h5>
                        </div>
                        <div class="received-bonuses__bonus">
                            <img src="" alt="" class="received-bonuses_icon">
                            <h5>РОСТ ПРОДАЖ</h5>
                        </div>
                        <div class="received-bonuses__bonus">
                            <img src="" alt="" class="received-bonuses_icon">
                            <h5>УЗНАВАЕМОСТЬ ВАШЕГО БРЕНДА</h5>
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
                            <button class="cyan-button" data-toggle="modal" data-target="#form-modal-window">ЗАКАЗАТЬ SEO ПРОДВИЖЕНИЕ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="faq-block">
            
            <div class="container">
                <div class="faq-title">
                    <h3 class="title"><strong>ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</strong></h3>
                </div>
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Что такое SEO и зачем мне это нужно?</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        SEO – это процесс технической оптимизации сайта, наполнения полезным контентом и улучшения его юзабилити для привлечения новых пользователей и продвижения в ТОП поисковой выдачи Яндекса и Google.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Что включает в себя работа по SEO?</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body"><p>Внутренняя оптимизация сайта:<br></p>

                        <ul class="tabs-info">
                            <li>
                        Анализ конкурентов
                                
                            </li>
                            <li>
                                Разработка правильной структуры сайта

                            </li>
                            <li>
                                Подбор ключевых запросов и распределение их по страницам

                            </li>
                            <li>
                                Написание и создание полезного и уникального контента

                            </li>
                            <li>
                                Текстовая оптимизация страниц и разработка мета-тегов

                            </li>
                            <li>
                                Внутренняя перелинковка страниц

                            </li>
                            <li>
                                Настройка целей и работа с сервисами Яндекс.Вебмастер+Метрика, Google.Webmasters+Analytics

                            </li>
                            <li>
                                Оптимизация и сжатие изображений

                            </li>
                            <li>
                                Улучшение скорости загрузки сайта

                            </li>
                            <li>
                                Выявление и устранение технических ошибок сайта

                            </li>
                            <li>
                                Отслеживание целевых действий пользователей на сайте

                            </li>
                        </ul>

                        <p>Внешняя оптимизация сайта:<br></p>
                        <ul class="tabs-info">
                            <li>
                        Разработка ссылочной стратегии
                                
                            </li>
                            <li>
                                Размещение информации о сайте в бесплатных каталогах

                            </li>
                            <li>
                                Наращивание ссылочной массы сайта

                            </li>
                            <li>
                                Подбор площадок и закупка контент-ссылок

                            </li>
                            <li>
                        Размещение ссылок на бесплатных ресурсах

                            </li>
                        </ul>
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">В чем отличие разовой оптимизации от полноценного ежемесячного ведения?</a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">
                        Разовая SEO-оптимизация включает в себя только часть внутренней оптимизации и исключает работы по наращиванию ссылочного профиля сайта, созданию уникального контента, отслеживания целевых действий и других немаловажных работ. Разовая оптимизация малоэффективна и показывает слабые результаты, так как процесс SEO-продвижения – это длительная и спланированная стратегия по захвату рынка.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">У нас новый сайт, подскажите, как долго нужно работать над SEO, чтобы был результат?</a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">После создания сайта поисковые системы Яндекс и Google помещают новый ресурс в, так называемую, «песочницу», поэтому новый ресурс не заметен для пользователя. Но не стоит тратить до 6 месяцев на ожидание выхода из «песочницы», лучше это время потратить на SEO-оптимизацию сайта и наполнение его уникальным и полезным контентом.</div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Что такое Facebook Pixel и нужен ли он мне?</a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            Facebook Pixel в ряде случаев нужен, если у Вас есть сайт. Facebook Pixel представляет собой код, который помещается на страницы сайта и позволяет собрать информацию о том, откуда на Ваш сайт пришли посетители. Кроме того данный код может показать, что именно делал потенциальный клиент на Вашем сайте – поместил товар в “Корзину” или кликнул на “Контакты”.
Таким образом Facebook Pixel соберет нужную аудиторию, на которую можно будет в дальнейшем настраивать еще более эффективную рекламу.
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Какие шансы попасть в ТОП 10 в первый месяц работы?</a>
                      </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Попадание в ТОП-10 зависит от многих факторов:<br></p>

                        <ul class="tabs-info"> 
                            <li>
                        Техническое состояние сайта, а также наличие или отсутствие SEO-работ ранее
                                
                            </li>
                            <li>
                                Уровень конкурентности ниши

                            </li>
                            <li>
                                Бюджет на SEO-оптимизацию

                            </li>
                            <li>
                                Возраст веб-сайта

                            </li>
                        </ul>
                        Наша команда Puzzle Agency может гарантировать попадание небольшого числа запросов в ТОП-10 уже в первый месяц работы.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Можно ли продвигать по SEO Landing Page?</a>
                      </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            Продвижение Landing Page ограничивает SEO-специалиста в выборе инструментов продвижения и сокращает динамику занятия топовых позиций. Всем своим клиентам мы советуем создавать полноценный многостраничный сайт для того, чтобы максимально эффективно ворваться в топ Яндекса и Google, ведь каждая страница Web-сайта имеет огромный потенциал и будет привлекать трафик на Ваш ресурс.
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Работаете ли вы над SEO в русскоязычном сегменте или работаете, в том числе, и в иностранном сегменте?</a>
                      </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">
                            Команда Puzzle Agency имеет огромный опыт продвижения в РуНете, а также успешные кейсы продвижения в странах Западной Европы и на высоко конкурентном американском рынке.
                        </div>
                    </div>
                  </div>
                </div> 
              </div>
            
        </div>

        <div class="container form__image-wrapper">
            <!-- <div class="row flex-column px-3">
                <div class="form__border-wrapper footer-form">
                    <div class="form__header">
                        <h3 class="mb0 title text-left">ЗАКАЗАТЬ SEO ПРОДВИЖЕНИЕ</h3>
                        <p class="text">
                            Давайте обсудим Ваш проект лично и ответим на все вопросы
                        </p>
                    </div>
                    <div class="footer-form__body">
                        <div class="footer-form__field">
                            <div class="field">
                                <div><label for="footer-form__number" class="form-label">
                                    НОМЕР ТЕЛЕФОНА<span class="label__hint_red">*</span>
                                </label></div>
                                <input type="text" placeholder="+375(xx)xxx-xx-xx" id="footer-form__number" class="form__input">
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="form__button-wrapper">
                    <input type="submit" class="cyan-button weight-button">
                </div>
            </div> -->

            <?php [contact-form-7 id="212" title="Контактная форма footer"] ?>
        </div>

    </div>


<?php get_footer() ?>