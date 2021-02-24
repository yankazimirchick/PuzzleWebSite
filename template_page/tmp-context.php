<?php
/*
Template Name: Контекстная реклама
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
                            <h2 class="title-text">
                                КОНТЕКСТНАЯ РЕКЛАМА
                            </h2>
                            <p class="text">
                                Один из самых эффективных видов рекламы –  контекстная реклама. Ее главное преимущество в том, что она попадается только тем пользователям, которые могут быть заинтересованы в покупке товара или заказе определенных услуг. Для этого система анализирует  активность и запросы пользователя.    
                            </p>
                            <p class="text">
                                Например, тот, кто часто интересуется строительными материалами, увидит предложения о покупке  цемента, красок, декоративного камня и т.д. Если посещаются сайты с автомобильной тематикой – будут показаны объявления, в которых  предлагаются услуги различных СТО или магазинов с запчастями.    
                            </p>
                            <p class="text">
                                В качестве площадок для размещения контекстной рекламы используются поисковики Yandex и Google.  Также стоит отметить, что стоимость контекстной рекламы ниже, чем другие виды реклам, но даже с минимальным бюджетом вы получите гарантированный результат. В digital-агентстве PUZZLE DIGITAL AGENCY вы сможете заказать контекстную рекламу, а наши специалисты гарантируют, что все услуги будут оказаны профессионально.
                            </p>
                        </div>
                        <div class="col-sm-6 right-side-block">
                            <img src="assets/img/context/paid-media-1-510x451.png" class="img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="advantages-table">
                <h2 class="title">
                    <strong>ПРЕИМУЩЕСТВА КОНТЕКСТНОЙ РЕКЛАМЫ</strong>
                </h2>
                <div class="advantages-table-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">
                                        БЫСТРЫЙ СТАРТ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Контекстная реклама не требует длительного времени на настройку и раскачку. Наша команда настроит Ваш рекламный кабинет в Google Adwords или Яндекс Директ в течении 2-5 дней и она начнет привлекать клиентов на сайт уже в первый час работы.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        ОПЛАТА ЗА РЕЗУЛЬТАТ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Вы всегда знаете на что расходуется Ваш рекламный бюджет. Используя контекстную рекламу, вам больше не придется платить за неэффективные показы, Вы платите только за переходы потенциальных клиентов на Ваш сайт.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">
                                        ЗАМЕТНЕЕ SEO
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Рекламные объявления в поиске будут всегда выше чем органическая SEO выдача. А хорошо разработанный рекламный баннер не останется без внимания при показах в контекстно-медийной сети Google или рекламной сети Яндекс.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        ОТСЛЕЖИВАНИЕ ЭФФЕКТИВНОСТИ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Благодаря сервисам Google и Яндекса Вы сможете отслеживать такие показатели как количество кликов, показов, среднюю позиции или CTR Вашего объявления.  Перед Вами открываются возможности аналитики всех целевых действиях клиентов на Вашем сайте.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">
                                        ТОЛЬКО ЦЕЛЕВАЯ АУДИТОРИЯ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        После правильной и качественной настройки контекстной рекламы в Яндекс Директ или Google Adwords ваши объявления увидят только заинтересованные в вашем товаре или услуге пользователи готовые купить здесь и сейчас.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        ВОЗВРАТ КЛИЕНТА
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Вы способны вернуть клиента на сайт использую преследующую рекламу(ремаркетинг/ретаргетинг). Даже если пользователь не совершил покупку сейчас, реклама напомнит ему о Вашем товаре или услуге.
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
                            <img src="assets/img/context/smm.jpg" class="full-form__image_left-side">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="full-form__content-block_right-side">
                            <div class="form__header">
                                <h3 class="title-text">
                                    АКЦИЯ! БОНУСЫ ПРИ ЗАКАЗЕ КОНТЕКСТНОЙ РЕКЛАМЫ</h3>
                                <p class="text">
                                    Контекстная реклама в поисковиках Google и Яндекс сегодня – это мощный инструмент для получения быстрого трафика и новых клиентов!Но все не так просто, как это может показаться на первый взгляд…
                                </p>
                            </div>
                            <div class="form__body">
                                <div class="form__image-wrapper">
                                    <div class="form__border-wrapper">
                                        <h3 class="title-text text-center">ПОЛУЧИТЬ БОНУСЫ</h3>
                                        <div class="row d-flex justify-content-around mt-4">
                                            <!-- <div class="col-sm-6">
                                                <input type="text" placeholder="+375(xx)xxx-xx-xx" id="fullwidth-form__number" class="form__input">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="submit" class="cyan-button weight-button" value="ПОЛУЧИТЬ" data-toggle="modal" data-target="#form-modal-window">
                                            </div> -->
                                            <?php echo do_shortcode( '[contact-form-7 id="234" title="Контактная форма -  smm"]' ) ?>
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
                        <strong>ПАКЕТЫ КОНТЕКСТНОЙ РЕКЛАМЫ</strong>
                    </h3>
                </div>
            </div>
            <div class="container">
                <div class="packages-wrapper">
                    <div class="pack-wrapper pack-min">
                        <div class="pack-header">
                            <h3 class="pack-title">
                                СТАРТ
                            </h3>
                        </div>
                        <div class="pack-body">
                            <div class="pack-info-wrapper">
                                <div class="pack-info">
                                    Исследование конкурентов.
                                </div>
                                <div class="pack-info">
                                    Подбор ключевых слов без лишних информационных запросов.
                                </div>
                                <div class="pack-info">
                                    До <b>150</b> ключевых запросов.
                                </div>
                                <div class="pack-info">
                                    Создание списка минус-слов.
                                </div>
                                <div class="pack-info">
                                    Создание 1 рекламного кабинета в Google Adwords или Яндекс Директ.
                                </div>
                                <div class="pack-info">
                                    Настройка параметров кампании: регион, время показа, ставки и т.д.
                                </div>
                                <div class="pack-info">
                                    Создание рекламных объявлений.
                                </div>
                                <div class="pack-info">
                                    Настройка расширений и уточнений.
                                </div>
                                <div class="pack-info">
                                    Подключение сервисов аналитики.
                                </div>
                                <div class="pack-info">
                                    <b>7</b> дней ведения рекламного кабинета.
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">200 BYN</div>
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
                                    Все пункты, включенные в пакет “Старт”.
                                </div>
                                <div class="pack-info">
                                    Создание рекламных кабинетов в Google Adwords и Яндекс Директ
                                </div>
                                <div class="pack-info">
                                    До <b>250</b> ключевых запросов.
                                </div>
                                <div class="pack-info">
                                    Бесплатный аудит юзабилити сайта.
                                </div>
                                <div class="pack-info">
                                    Настройка счетчиков конверсии на Вашем сайте.
                                </div>
                                <div class="pack-info">
                                    Создание и подключение UTM-меток.
                                </div>
                                <div class="pack-info">
                                    Отслеживание конверсий на Вашем сайте.
                                </div>
                                <div class="pack-info">
                                    Распределение бюджета на более конверсионные дни и часы.
                                </div>
                                <div class="pack-info">
                                    Создание группы пользователей для ремаркетинга/ретаргетинга.
                                </div>
                                <div class="pack-info">
                                    Настройка ремаркетинга/ретаргетинга.
                                </div>
                                <div class="pack-info">
                                    <b>15</b> дней ведения рекламного кабинета.
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">350 BYN</div>
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
                                    Все пункты, включенные в пакет “СТАНДАРТ”.
                                </div>
                                <div class="pack-info">
                                    От <b>250</b> до <b>500</b> ключевых запросов.
                                </div>
                                <div class="pack-info">
                                    Участие Web-разработчика до 5 часов.
                                </div>
                                <div class="pack-info">
                                    Отслеживание продаж на Вашем сайте. Полная аналитика.
                                </div>
                                <div class="pack-info">
                                    Анализ целевых действий пользователей на сайте.
                                </div>
                                <div class="pack-info">
                                    Создание видеороликов и настройка видеорекламы.
                                </div>
                                <div class="pack-info">
                                    Участие в проекте руководителя отдела.
                                </div>
                                <div class="pack-info">
                                    <b>30</b> дней ведения рекламного кабинета.
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">500 BYN</div>
                            <button class="button-pack-order">Заказать</button>
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
                            <button class="cyan-button">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</button>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center justify-content-md-start">
                        <div class="button-wrapper">
                            <button class="cyan-button" data-toggle="modal" data-target="#form-modal-window">ЗАКАЗАТЬ КОНТЕКСТНУЮ РЕКЛАМУ</button>
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            Как долго ожидать настройку контекстной рекламы?
                        </a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        В среднем настройка контекстной рекламы занимает от 3 до 7 дней и зависит от тематики вашего бизнеса.
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            От чего зависят звонки/заказы на сайте?
                        </a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body"><p>Внутренняя оптимизация сайта:<br></p>

                        Факторов большое множество, от дизайна и юзабилити, а так же конверсионные действия (оставить заявку, позвонить, проконсультироваться в чате) до скорости загрузки сайта. Поэтому, перед запуском контекстной рекламы специалисты Puzzle сделают Вам бесплатный аудит для достижения лучших результатов.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Почему нет звонков/заявок нет, если уже настроена контекстная реклама?
                        </a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                             К сожалению, в 87% случаях контекстная реклама в Минске настроена некорректно, существует ряд ошибок, которые пагубно влияют на слив Вашего рекламного бюджета. К примеру, настроен некорректно регион и время показа, метки UTM могут быть прописаны прямо в Вашем URL, но самое страшное – это информационные мусорные запросы и т.д., которые беспощадно режут бюджет в лучших традициях.
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            Зачем нужно ведение контекстной рекламы?    
                        </a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                        Ведение контекстной рекламы необходимо для актуализации Ваших товаров/предложений, а так же для исключения лишних запросов, теряющие свою актуальность, и , конечно, самое интересное, это процесс работы со ставками на клик.  
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            Сколько денег я буду тратить?
                        </a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            Считаем, что вопрос не самый корректный. Нужно исходить не из того, сколько слили бюджета, а из того, какой эффект от этого получили, выгодно или нет для решения поставленных задач использование Google Adwords и Яндекс Директ.
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                            Почему вы делаете аудит бесплатно?
                        </a>
                      </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            Мы это делаем для того, чтобы добиться лучших результатов среди всех инструментов рекламы Google Adword и Яндекс Директ. Логика проста, зарабатывайте Вы, зарабатываем мы. Этот результативный метод, проверено!
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                            Как будет построена отчётность?
                        </a>
                      </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">
                            Каждую неделю наш специалист предоставляет отчет, в котором указаны самые разные показатели эффективности рекламной кампании, такие как количество кликов и показов, CTR, средняя цена клика, процент показа на верхних позициях и так далее. Помимо сухих цифр наш специалист пишет вывод и рекомендации.    
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                            Сколько будет ключевых слов?
                        </a>
                      </h4>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body">
                            Количество ключевых слов зависит от специфики Вашего бизнеса, но исходя из практики и удаляя мусорные запросы можно сказать что в среднем количество ключевых слов находится в диапазоне от 100 до 200 запросов.    
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                            Дорого у вас!
                        </a>
                      </h4>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="panel-body">
                            Настроить рекламу сможет даже школьник, но качество этой настройки зачастую оставляет желать лучшего и почти всегда приводит к сливу рекламного бюджета. Реклама не может быть дорогой, она или эффективная или нет. Наши специалисты настроят вашу рекламу на высочайшем уровне, и 24/7 будет следить за эффективностью рекламного кабинета. Помимо штата директологов над Вашим проектом будут работать аналитики и веб-разработчики, что несомненно приведет к успеху Вашего бизнеса!
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
                        <h3 class="title text-left mb0">ЗАКАЗАТЬ КОНТЕКСТНУЮ РЕКЛАМУ</h3>
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

            <?php echo do_shortcode( '[contact-form-7 id="235" title="Контактная форма - Заказать smm продвижения"]' ) ?>
        </div>

    </div>


<?php get_footer() ?>