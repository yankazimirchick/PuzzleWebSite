<?php
/*
Template Name: Одноклассники
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
                <div style="background-image: url(&quot;assets/img/web-site-pages/o/одноклассники.jpg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            ПРОДВИЖЕНИЕ В ОДНОКЛАССНИКАХ
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="title">
                                ПРОДВИЖЕНИЕ БИЗНЕСА В ОДНОКЛАССНИКАХ
                            </h2>
                            <p class="text">
                                Существует мнение, что сегодня социальная сеть Одноклассники популярна только среди наших родителей и фанатов устаревших картинок. Но это совсем не так. Сегодня в Одноклассники зарегистрировано более 300 млн пользователей и это вторая по популярности социальная сеть в Рунете.
                            </p>
                            <p class="text">
                                Особенности специфической целевой аудитории позволят сделать продвижение в Одноклассниках более эффективным и быстрым. Ориентация на отдельный сегмент пользователей интернете, например, социальной сети Одноклассники, делает рекламу более действенной, ведь она направлено непосредственно на конкретных пользователей.
                            </p>
                        </div>
                        <div class="col-sm-6 right-side-block d-flex">
                            <img src="assets/img/web-site-pages/o/ok.ru_-425x350.png" class="m-auto img" style="width: auto; max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <h2 class="title">
                    ВАМ НУЖНО СОЗДАТЬ АККАУНТ В ОДНОКЛАССНИКИ, ЕСЛИ ВАШ БИЗНЕС СВЯЗАН С:
                </h2>
                <div class="row">
                    <div class="col-md-3 d-flex">
                        <img src="icon" alt="" class="m-auto">
                    </div>
                    <div class="col-md-9">
                        <h3 class="title-text">
                            РИТЕЙЛОМ
                        </h3>
                        <p class="text">
                            По статистике, 60 % всех пользователей «Одноклассники» – женщины. Это хороший повод воспользоваться возможностью и раскрутить бизнес по продаже одежды, товаров для дома, детей, косметику и т.д. Также, если вы владелец салона красоты или спа, то продвижение услуг в Одноклассниках – отличная реклама.
                        </p>
                    </div>
                    <div class="col-md-3 d-flex">
                        <img src="icon" alt="" class="m-auto">
                    </div>
                    <div class="col-md-9">
                        <h3 class="title-text">
                            ПРОДАЖЕЙ ЭЛЕКТРОННЫХ ТОВАРОВ И УСЛУГ
                        </h3>
                        <p class="text">
                            Если вы хотите заказать услугу раскрутка групп в Одноклассниках, то можете не сомневаться – эта социальная сеть отлично подойдет для рекламы. Пользователям доступна оплата товаров с помощью банковской карты, которую они могут привязать к своему аккаунту. Чтобы расплатиться, клиентам нужно будет просто авторизоваться на сайте через страничку в Одноклассники. Пэтому продвижение рекламы ваших товаров из интернет-магазина в Одноклассниках будет работать эффективно.
                        </p>
                    </div>
                    <div class="col-md-3 d-flex">
                        <img src="icon" alt="" class="m-auto">
                    </div>
                    <div class="col-md-9">
                        <h3 class="title-text">
                            РАЗРАБОТКОЙ ИГР И ПРИЛОЖЕНИЙ
                        </h3>
                        <p class="text">
                            Больше половины (почти 60% пользователей) этой социальной сети – игровая аудитория, которая интересуется различными стримами и видео на данную тематику, также принимает участие в кибертурнирах или просто играют онлайн. Если вы хотите раскрутить свою игру, то SMM в Одноклассниках станет хорошим вложением.    
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

        <div class="advantages-table">
            <div class="advantages-table-wrapper">
                <div class="container">
                    <h2 class="title">
                        ЧТО ВАМ ДАСТ SMM-ПРОДВИЖЕНИЕ В ОДНОКЛАССНИКИ?
                    </h2>
                    <div class="row">
                        <div class="col-md-3 p-md-0">  
                            <div class="cell-header flex-column">
                                <img src="" alt="" class="cell-icon m-auto">
                                <h5 class="title-text text-center">
                                    СПОСОБНОСТЬ ОПОВЕЩАТЬ ПОДПИСЧИКОВ
                                </h5>
                            </div>
                            <div class="cell-body">
                                <p class="text text-center">
                                    С помощью рассылки новостей вы можете уведомлять своих потенциальных и существующих клиентов о новых специальных предложениях, акциях и т.д. Благодаря такому SMM в Одноклассниках ваши подписчики быстро узнают, что у вас происходит что-то интересное.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 p-md-0">  
                            <div class="cell-header flex-column">
                                <img src="" alt="" class="cell-icon m-auto">
                                <h5 class="title-text text-center">	
                                    КОНТАКТИРОВАТЬ С ЦЕЛЕВОЙ АУДИТОРИЕЙ
                                </h5>
                            </div>
                            <div class="cell-body">
                                <p class="text text-center">
                                    Вам не требуется вкладываться в маркетинговые исследования, чтобы узнать предпочтения пользователей. С помощью опросов, комментариев и отзывов людей вы сможете узнать их мнение о том или ином продукте, компании, событии – о чем угодно. Это сделает раскрутку конкурсов, мероприятий или акций более действенной.    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 p-md-0"> 
                            <div class="cell-header flex-column">
                                <img src="" alt="" class="cell-icon m-auto">
                                <h5 class="title-text text-center">	
                                    ОРИЕНТАЦИЯ НА МОТИВИРОВАННЫХ КЛИЕНТОВ
                                </h5>
                            </div>
                            <div class="cell-body">
                                <p class="text text-center">
                                    С помощью таргетированной рекламы вы можете сделать раскрутку групп в Одноклассниках направленным на определенный сегмент пользователей, которым интересен ваш товар или услуга. Это сделает процент продаж выше и значительно увеличит лояльность клиентов.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 p-md-0">  
                            <div class="cell-header flex-column">
                                <img src="" alt="" class="cell-icon m-auto">
                                <h5 class="title-text text-center">	
                                    ИСПОЛЬЗОВАНИЕ УДОБНЫХ ВИДЖЕТОВ
                                </h5>
                            </div>
                            <div class="cell-body flex-column">
                                <p class="text text-center">
                                    Шанс продажи продукта гораздо выше, если пользователь может совершить покупки, не выходя из социальной сети Одноклассники. Функциональные виджеты позволят клиентам приобретать товар прямо через аккаунт вашего бизнеса.
                                </p>
                            </div>
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


        <div class="about-service-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h2 class="title text-left">
                            ПОЧЕМУ СТОИТ ЗАКАЗАТЬ SMM-ПРОДВИЖЕНИЕ У DIGITAL-АГЕНТСТВА PUZZLE?
                        </h2>
                        <p class="text">
                            Наша компания имеет последовательный подход к работе. Все этапы продвижения в сети Одноклассники оговариваются с клиентом, чтобы мы могли добиться наилучшего результата. Работа наших специалистов по раскрутке страницы Одноклассников включает следующие этапы:    
                        </p>
                        <ul class="tabs-info">
                            <li class="text">
                                Тщательный анализ ЦА: какие люди заинтересуется вашим бизнесом, что им нравится и что их раздражает, какая реклама будет для них более эффективной и т.д.;
                            </li>
                            <li class="text">
                                Проводим исследование рынка: какие позиции занимает ваша компания, кто ваши конкуренты, какие у них преимущества и недостатки;
                            </li>
                            <li class="text">
                                Определяем цели и задачи SMM-продвижения;
                            </li>
                            <li class="text">
                                Разрабатываем маркетинговую стратегию и настраиваем таргетированную рекламу, которая поможет эффективно раскрутить ваш бизнес и претворяем ее в жизнь;
                            </li>
                            <li class="text">
                                Оптимизируем и улучшаем стратегию, чтобы добиться наилучшего результата.
                            </li>   
                        </ul>
                    </div>
                    <div class="col-sm-4 right-side-block d-flex">
                        <img src="assets/img/web-site-pages/o/ok2.png" class="m-auto img" style="width: auto; max-width: 100%;">
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
                        Чтобы заказать продвижение в Одноклассниках по приемлемой цене, оставьте заявку на сайте агентства Puzzle, и мы свяжемся с вами.
                    </p>
                </div>
            </div>
        </div>

    </div>


<?php get_footer() ?>