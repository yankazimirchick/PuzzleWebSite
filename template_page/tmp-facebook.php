<?php
/*
Template Name: ПРОДВИЖЕНИЕ В ФЕЙСБУК
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
                    <h2 class="title">БИЗНЕС В ФЕЙСБУК</h2>
                    <div class="row flex-row-reverse">
                        <div class="col-sm-6 left-side-block">
                            <p class="text">
                                У вашего бизнеса уже есть сайт в Интернете, но нет страницы в социальных сетях? Эту ситуацию нужно исправлять. Ваш бизнес в Интернете будет обсуждаться, даже если у него есть только личный сайт, однако благодаря продвижению бизнеса в социальных сетях, например, в Facebook или ВКонтакте вы сможете значительно увеличить свою аудиторию. Социальные сети – отличный инструмент для общения с целевой аудиторией благодаря ведению группы с информационным контентом.
                            </p>
                            <p class="text">
                                Раскрутка в Фейсбук может принести значительную пользу для вашего бизнеса. Помимо основного сайта в Интернете, который содержит информацию только о вашем деле, создайте страницу в социальной сети. На ней вы сможете публиковать не только рекламу или новости о себе, но и развлекательный и информационный контент для привлечения аудитории.    
                            </p>
                            <p class="text">
                                Для услуги продвижения вашего бизнеса на иностранный и национальный рынок вы можете использовать такую социальную сеть, как Facebook. По состоянию на 2 квартал 2019 года её использовали более 2,41 миллиарда человек. Если исключить страны, которые не имеют доступа к Facebook, то это почти половина населения мира! Это подтверждает то, что любой небольшой бизнес может сделать эффективную раскрутку в Фейсбук.    
                            </p> 
                        </div>
                        <div class="col-sm-6 right-side-block d-flex">
                            <img src="/wp-content/uploads/2021/04/fb-icon-2.png" class="m-auto img" style="width: auto; max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12"><h3 class="title">РАСКРУТКА В ФЕЙСБУК</h3></div>
                    <div class="col-md-12"><p class="simple-text text">Раскрутка в Фейсбук предоставляет большие маркетинговые возможности для бизнеса всех размеров. Платформа имеет много инструментов для продвижения бизнеса. На примере множества сообществ и профилей доказано, что широкая аудитория приходит со страниц данной сети, так как её активные пользователи – бизнесмены, деловые люди возрастом от 22 до 35 лет. Кстати, создание страницы поможет сэкономить много денег на рекламе в Интернете, так как таргетированная реклама и smm Фейсбук стоит недорого или может быть вообще бесплатной. В общем, преимуществ очень много, далее мы разберем их подробнее. Вы можете использовать продвижение страницы в фейсбук, чтобы:</p></div>
                </div>
            </div>

            <div class="advantages-table">
                <div class="advantages-table-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                <span class="color-yellow icon-bubbles4"></span>
                                    <h3 class="title-text text-center">
                                        УЗНАВАТЬ МНЕНИЯ КЛИЕНТОВ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text text-center">
                                        Комментарии и отзывы на страницах Facebook могут рассказать о впечатлениях ваших клиентов от использования товаров или услуг. Благодаря этому вы узнаете напрямую, чем радует или разочаровывает ваш бизнес. Такой способ общения с аудиторией также позволит вам вывести свой бизнес в топ, ориентируясь на отзывах живых людей.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                <span class="color-cyan icon-wpforms"></span>
                                    <h3 class="title-text text-center">	
                                        ОБЩАТЬСЯ С ЦЕЛЕВОЙ АУДИТОРИЕЙ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text text-center">
                                        Благодаря удобному чату и возможностью вести переписку вы можете консультировать клиентов или оповещать их о новых специальных предложениях или скидках, а также просто вести диалоги. Если клиент чувствует внимание и заботу, ваш бизнес будет более привлекателен для него.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4"> 
                                    <img src="/wp-content/uploads/2021/04/likes.png" alt="" class="cell-icon" style="width: 100%;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                <span class="color-cyan icon-object-group"></span>
                                    <h3 class="title-text text-center">	
                                        ПРОДВИГАТЬ ИМЯ ВАШЕГО БРЕНДА
                                    </h3>
                                </div>
                                <div class="cell-body flex-column">
                                    <p class="text text-center">
                                        Благодаря ведению групп в фейсбук вы можете охватить наибольшее количество аудитории, тем самым повысив популярность вашего имени и дела    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                <span class="color-yellow icon-bubble2"></span>
                                    <h3 class="title-text text-center">	
                                        РАССКАЗЫВАТЬ О ТОВАРАХ ИЛИ УСЛУГАХ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text text-center">
                                        Благодаря размещению и продвижению поста в фейсбук вы сможете не только рассказать о том, что предлагаете, но и заставить пользователей подписаться на ваш аккаунт, чтобы узнать больше о вас.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header flex-column">
                                <span class="color-magenta icon-group"></span>
                                    <h3 class="title-text text-center">
                                        ПРИВЛЕКАТЬ НОВЫХ ПОЛЬЗОВАТЕЛЕЙ
                                    </h3>
                                </div>
                                <div class="cell-body flex-column">
                                    <p class="text text-center">
                                        Каждая страница в социальной сети принесет вам новых подписчиков, а это – потенциальные клиенты, которые могут принести вам дополнительный доход.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="simple-text text">
                            Для того, чтобы сделать грамотное продвижение бизнеса в социальных сетях, раскрутка в Facebook у нас тщательно прорабатывается и согласовывается с клиентом. Наше продвижение в фейсбук производятся в несколько этапов. С кейсами фейсбук-продвижения вы можете ознакомиться в нашем портфолио. В целях повышения лояльности клиентов и узнаваемости бренда мы осуществляем продвижение группы в Фейсбук по бюджетной цене. Сообщество наполняется развлекательным и информационным контентом, который привлекает клиентов и заставляет их подписаться на вашу страницу, чтобы следить за обновлениями, акциями и специальными предложениями. Затем мы следим за тем, чтобы вашим пользователям нравились те посты, которые мы публикуем на вашей странице, производим аналитику того, что больше «заходит», а затем на основе этого формируем дальнейшую стратегию продвижения.
                        </p>
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
                <div class="  row packages-wrapper">
                    <div class="p-0 col-12 col-md-12 col-lg-4 pack-wrapper pack-min">
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
                    <div class="p-0 col-12 col-md-12 col-lg-4 pack-wrapper pack-standart">
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
                    <div class="p-0 col-12 col-md-12 col-lg-4 pack-wrapper pack-max">
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
            <h2 class="title">ЭТАПЫ РАБОТ</h2>
            <div class="row">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="">
                        <div class="col-md-12">
                            <h4 class="title-text">
                                1. РАЗРАБОТКА СТРАТЕГИИ ПРОДВИЖЕНИЯ СТРАНИЦЫ НА ФЕЙСБУК
                            </h4>
                            <p class="text">
                                Для начала мы определяем основных конкурентов для анализа их действий и предпочтения целевой аудитории. Также на данном этапе обсуждается основной контент для наполнения сообщества и возможность сотрудничества с блогерами и другими сообществами. После сбора необходимой информации составляется план раскрутки группы в facebook.
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="title-text">
                                2. ДИЗАЙН И НАСТРОЙКА
                            </h4>
                            <p class="text">
                                Для группы нужно создать привлекательное оформление, так как визуальная составляющая продвигаемой страницы имеет большое значение. Мы подбираем дизайн относительно специфики вашего бизнеса и предпочтений целевой аудитории. Для продвижения мероприятия в фейсбук или, например, страницы салона красоты, мы ориентируемся на абсолютно разные элементы настроек и оформления.
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="title-text">
                                3. НАПОЛНЕНИЕ КОНТЕНТОМ
                            </h4>
                            <p class="text">
                                Информационные посты, картинки и видео – основные элементы сообщества, которые нужно регулярно публиковать на стене. Пользователи чаще подписываются на активные страницы, где постоянно происходят обновления, поэтому нужно следить не только за тем, что вы постите, но и за тем, насколько часто и регулярно вы это делаете. Однако не стоит забывать, что информация должна быть интересной, актуальной и качественной. Затем уже можно делать продвижение публикации в фейсбук.
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="title-text">
                                4. ПРОДВИЖЕНИЕ И РЕКЛАМА
                            </h4>
                            <p class="text">
                                Благодаря рекламе от лидеров мнений и более популярных сообществ мы сможем сделать раскрутку группы в фейсбук по низкой стоимости, тем самым сэкономив ваши затраты на smm-продвижение.
        
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img src="/wp-content/uploads/2021/04/Без-им2ени-12-342x510-1.png" alt="" class="maxwidth m-auto">
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class="title-text">
                        5. УВЕЛИЧЕНИЕ ПРОЦЕНТА ПРОДАЖ
                    </h4>
                    <p class="text">
                        Мы предлагаем свежие и оригинальные идеи, которые помогут увеличить продажи, например, промоакции и конкурсы, доступные только подписчикам страницы. И еще, если ваше сообщество станет популярным, то вы сможете заказать продвижение в Facebook других бизнесов, тем самым привлекая дополнительный доход.
                    </p>
                </div>
                <div class="col-md-12">
                    <h4 class="title-text">
                        6. СТАТИСТИКА И АНАЛИТИКА
                    </h4>
                    <p class="text">
                        Благодаря встроенным функциям социальной сети, страницы легко анализировать: можно отследить основных пользователей страницы, их возраст, геолокацию и предпочтения, а затем на основе полученных данных поменять или улучшить форму ведения сообщества.
                    </p>
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
            <!-- <div class="row flex-column px-3">
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
                    <input type="submit" class="cyan-button weight-button" data-toggle="modal" data-target="#form-modal-window">
                </div>
            </div> -->

            <div class="row flex-column px-3">
            <?php echo do_shortcode( '[contact-form-7 id="366" title="Заказать инстаграмм"]' ) ?>
            </div>
            
        </div>

        <div class="hint-wrapper">
            <div class="container">
                <div class="row">
                    <p class="hint pink-background">
                        Заказать продвижение в facebook в Минске очень просто – оставьте заявку на нашем сайте, а мы в скором времени свяжемся с вами, чтобы как можно быстрее сделать вас узнаваемыми в Интернете.
                    </p>
                </div>
            </div>
        </div>

    </div>



<?php get_footer() ?>