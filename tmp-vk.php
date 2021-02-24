<?php
/*
Template Name: VK
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
                <div style="background-image: url(&quot;assets/img/web-site-pages/vk/вконтакте.jpg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            ПРОДВИЖЕНИЕ В ВК
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <h2 class="title">ПРОДВИЖЕНИЕ БИЗНЕСА В VK</h2>
                    <div class="row flex-row-reverse">
                        <div class="col-sm-12">
                            <p class="text">
                                Продвижение бизнеса в социальных сетях – актуальный способ привлечения новых клиентов. Доступность и распространенность сервисов для общения и размещения контента делает сети популярными для раскрутки своего бренда. Если у вас уже есть личный сайт в интернете, но вы хотите увеличить клиентскую базу с помощью SMM, то вам необходимо завести сообщество в одной из популярных социальных сетей. Отличным решением станет ВКонтакте – самый популярный сервис в России и Беларуси.    
                            </p>
                            <p class="text">
                                SMM Раскрутка ВКонтакте имеет много преимуществ для развития бизнеса в РБ, так как большинство пользователей нашей страны зарегистрировано в данной социальной сети. Здесь можно создавать аккаунты и сообщества, настраивать таргетированную рекламу, постить развлекательный и информационный контент. Огромное преимущество – ведение группы в вк имеет низкую стоимость: настройка и размещение рекламы стоит недорого, а ведение сообщества абсолютно бесплатное. В зависимости от того, какой у вас бизнес, можно подобрать стратегию для продвижения группы вконтакте или личного аккаунта.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="advantages-table">
                <div class="advantages-table-wrapper">
                    <div class="container">
                        <h2 class="title">
                            ПРОДВИЖЕНИЕ СООБЩЕСТВА В ВК: ПРЕИМУЩЕСТВА
                        </h2>
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                    <img src="" alt="" class="cell-icon m-auto">
                                    <h3 class="title-text text-center">
                                        АКТУАЛЬНОСТЬ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text text-center">
                                        Несмотря на то, что данная социальная сеть существует уже около 15 лет, пользователи отдают предпочтения ей в качестве основной для общения, слежения за новостями и т.д. Поэтому можно смело рассчитывать на то, что раскрутка группы ВКонтакте принесет хорошие результаты и подписчиков.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                    <img src="" alt="" class="cell-icon m-auto">
                                    <h3 class="title-text text-center">	
                                        БОЛЬШАЯ АУДИТОРИЯ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text text-center">
                                        На данный момент ВК зарегистрировано более 250 миллионов человек, 40% которых посещают данную сеть ежедневно. За счет такого большого количества пользователей вы бесспорно сможете продвигать бизнес для своей целевой аудитории.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4"> 
                                <div class="cell-header flex-column">
                                    <img src="" alt="" class="cell-icon m-auto">
                                    <h3 class="title-text text-center">	
                                        ПРОСТОТА ИСПОЛЬЗОВАНИЯ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text text-center">
                                        За счет постоянных обновлений и инноваций ведение группы в вк легко совершать самостоятельно. Вы сможете без проблем сами редактировать и размещать необходимую информацию, настраивать рекламу, а также общаться со своими клиентами.    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                    <img src="" alt="" class="cell-icon m-auto">
                                    <h3 class="title-text text-center">	
                                        ФУНКЦИОНАЛЬНОСТЬ
                                    </h3>
                                </div>
                                <div class="cell-body flex-column">
                                    <p class="text text-center">
                                        Смм для группы вконтакте считается одним из лучших инструментов продвижения бизнеса в интернете за счет возможностей сети. Вы можете создавать рассылки, настраивать время для публикаций, менять оформление своего паблика.     
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                    <img src="" alt="" class="cell-icon m-auto">
                                    <h3 class="title-text text-center">
                                        СЕГМЕНТАЦИЯ РЕКЛАМЫ
                                    </h3>
                                </div>
                                <div class="cell-body flex-column">
                                    <p class="text text-center">
                                        Таргетированная реклама VKontakte формируется за счет основных интересов, возраста, географии ваших подписчиков. Поэтому продвижение группы ВКонтакте будет эффективным за счет привлечения максимально заинтересованных пользователей.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                    <img src="" alt="" class="cell-icon m-auto">
                                    <h3 class="title-text text-center">	
                                        АНАЛИТИКА И СТАТИСТИКА
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text text-center">
                                        Благодаря инструментам, доступным администраторам сообществ, можно провести анализ подписчиков и определить, какие посты выходят в топ. На основе этого легко составить статистику и план действий по раскрутке профиля или группы вк.
                                    </p>
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
                        <strong>ПАКЕТЫ SMM УСЛУГ</strong>
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
                                    Дизайн, индивидуальный стиль сообщества
                                </div>
                                <div class="pack-info">
                                    До <b>12</b> регулярных публикаций (через день, кроме выходных и праздничных дней)
                                </div>
                                <div class="pack-info">
                                    Составление контент-плана и рубрикатора каждые <b>3</b> месяца
                                </div>
                                <div class="pack-info">
                                    Запуск сториз
                                </div>
                                <div class="pack-info">
                                    Привлечение целевой аудитории
                                </div>
                                <div class="pack-info">
                                    Исследование конкурентов
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">150 У.Е</div>
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
                                    До <b>20</b> регулярных публикаций (каждый день, кроме выходных и праздничных дней)
                                </div>
                                <div class="pack-info">
                                    Проведение розыгрышей
                                </div>
                                <div class="pack-info">
                                    Настройка до <b>3</b> рекламных кампаний в неделю
                                </div>
                                <div class="pack-info">
                                    Инициирование акций, розыгрышей
                                </div>
                                <div class="pack-info">
                                    Размещение пикселя Facebook на сайте/подключение целей
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">250 У.Е</div>
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
                                    До <b>30</b> регулярных публикаций (каждый день, включая выходные и праздничные дни)
                                </div>
                                <div class="pack-info">
                                    Настройка до <b>6</b> рекламных кампаний в неделю
                                </div>
                                <div class="pack-info">
                                    Нивелирование негативных комментариев
                                </div>
                                <div class="pack-info">
                                    Отслеживание продаж
                                </div>
                            </div>
                        </div>
                        <div class="pack-footer">
                            <div class="pack-cost">350 У.Е</div>
                            <button class="button-pack-order">Заказать</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="text text-center">
                        Дополнительно продублируем контент в другие социальные сети за 50$
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            
            <div class="row">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <h2 class="title">
                                ЧЕМ МЫ МОЖЕМ ВАМ ПОМОЧЬ?
                            </h2>
                            <p class="text">
                                Мы предлагаем услуги по раскрутке группы вконтакте в Минске. Прежде чем начать рекламировать ваш бизнес, мы составляем рабочую стратегию, которая принесет вам не только новых подписчиков, но и потенциальных клиентов. План продвижения такой:    
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="title-text">
                                1. АНАЛИЗ КОНКУРЕНТОВ И ЦЕЛЕВОЙ АУДИТОРИИ
                            </h4>
                            <p class="text">
                                Прежде чем начинать создавать ваше сообщество, мы анализируем SMM-деятельность конкурентов и интересы потенциальных клиентов. Это необходимо для того, чтобы составить максимально эффективный план для раскрутки страницы VKontakte.    
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="title-text">
                                2. РАЗРАБОТКА СТРАТЕГИИ
                            </h4>
                            <p class="text">
                                На данном этапе мы предлагаем варианты ведения сообщества на основе анализа SMM-деятельности успешных конкурентов.    
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="title-text">
                                3. СОЗДАНИЕ КОНТЕНТА
                            </h4>
                            <p class="text">
                                Мы придумываем посты на основе интересов подписчиков и трендов социальной сети, затем размещаем их и следим за реакцией пользователей.    
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="title-text">
                                4. НАСТРОЙКА РЕКЛАМЫ
                            </h4>
                            <p class="text">
                                Креативные варианты рекламы, различные конкурсы и события помогут заинтересовать аудиторию и привлечь новых клиентов.
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="title-text">
                                5. АНАЛИЗ И SMM-ОПТИМИЗАЦИЯ
                            </h4>
                            <p class="text">
                                Нам необходимо некоторое время, чтобы проанализировать выполненную работу. Мы смотрим, какие методы продвижения «зашли» лучше, на их основе и планируем дальнейшие действия.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex col-md-6">
                        <img src="assets/img/web-site-pages/vk/Vk_Usl1-1.png" alt="" class="maxwidth m-auto" style="max-height: 800px;">
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Что такое SMM и зачем это нужно мне?</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">Ежедневно Ваши потенциальные клиенты проводят в социальных сетях более 4 часов, делают покупки, читают интересные статьи и просматривают смешные картинки и видео. Поэтому социальные сети отлично подходят для того, чтобы напомнить им о себе, рассказать о своем уникальном предложении и подтолкнуть к покупке.
                        Для всего этого существует Social Media Marketing – продвижение Вас и Вашего бизнеса в социальных сетях. Это Ваш имидж, имидж Вашей компании, узнаваемость бренда и, конечно же, приток новых продаж и клиентов.</div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Какие социальные сети мне нужны?</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">Facebook, Instagram, ВКонтакте или Одноклассники – выбор социальной площадки полностью зависит от специфики бизнеса и целевой аудитории бренда. Логично выбирать именно те социальные сети, где находится наибольшее число Ваших потенциальных потребителей. Puzzle Agency легко определит необходимую бизнесу социальную сеть для Вашего бизнеса.</div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Что такое рекламный бюджет и входит ли он в стоимость пакета?</a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">Рекламный бюджет – это непосредственно тот бюджет, который Вы платите социальной сети как рекламной площадке за показ таргетированной рекламы. Настройка таргетированной рекламы входит в стоимость пакета, рекламный бюджет – нет. Решение о наличии таргетированной рекламы остается сугубо за нашим клиентом, но мы, как правило, рекомендуем оптимальный рекламный бюджет, который при желании можно увеличить.</div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Через какое время ждать результата для нового аккаунта?</a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">Первые подписчики придут сразу же, однако первые продажи зависят от специфики бизнеса, стоимости товара или услуги, долговременности принятия решения потребителем. Поэтому не стоит ожидать продаж в первый же день создания профиля в социальной сети, но спустя некоторое время они обязательно будут.</div>
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Могу ли я сам заниматься продвижением своего аккаунта?</a>
                      </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                      <div class="panel-body">Нет ничего невозможного! Методом проб и ошибок возможно абсолютно все, но каких временных затрат и усилий будет это стоить?
                        Стоит чётко понимать, что продвижение в социальных сетях требует специальных знаний и навыков, не говоря уже конкретно о настройке таргетированной рекламы. Неправильно настроенная реклама может стоить больших затрат – “слитый” бюджет и нулевой результат, а профиль социальной сети, оформленный дилетантом, может оттолкнуть потенциального потребителя. Кроме того, создание и генерирование нового контента, как правило, отнимает колоссальную часть времени, поэтому наилучшим решением будет доверить свой бизнес в руки профессионалов.</div>
                    </div>
                  </div>
                </div> 
              </div>
            
        </div>

        <div class="container form__image-wrapper">
            <div class="row flex-column px-3">
                <div class="form__border-wrapper footer-form">
                    <div class="form__header">
                        <h3 class="title mb0 text-left">ЗАКАЗАТЬ SMM ПРОДВИЖЕНИЕ</h3>
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
            </div>
        </div>

        <div class="hint-wrapper">
            <div class="container">
                <div class="row">
                    <p class="hint pink-background">
                        Заказать SMM услуги по раскрутке группы вконтакте по оправданной цене можно прямо сейчас, оставив заявку на нашем сайте. Мы сделаем ваш бизнес популярным и узнаваемым!    
                    </p>
                </div>
            </div>
        </div>

    </div>


<?php get_footer() ?>