<?php
/*
Template Name: SMM Продвижение
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
                <div style="background-image: url(&quot;assets/img/smm-page/rawpixel-603653-unsplash.jpg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            SMM ПРОДВИЖЕНИЕ
                        </h1>
                        <p class="text-paralax">
                            Продвижение в социальных сетях — эффективный способ привлечения новых клиентов, повышения узнаваемости Вашего бренда, а также взаимодействия с целевой аудиторией.
                        </p>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 left-side-block">
                            <h2 class="title-text">
                                ПРОДВИЖЕНИЕ В СОЦИАЛЬНЫХ СЕТЯХ
                            </h2>
                            <p class="text">
                                В среднем человек тратит около 2-х часов в день на социальные сети. Миллион терабайтов информации проходит сквозь мониторы и экраны смартфонов в наш мозг.
                            </p>
                            <p class="text">
                                Социальные сети сегодня – это обязательный имиджевый ресурс. Если Вашего бренда нет хотя бы в одной социальной сети – его не существует для миллионов потребителей.
                            </p>
                            <p class="text">
                                SMM-продвижение – необходимый инструмент, позволяющий целевой аудитории найти Ваш бизнес, а Вам – заявить о себе. Социальный аккаунт бренда – это Ваше лицо перед огромным количеством людей. От оформления и наполнения профиля зависит первое впечатление, которое сложится у потенциального потребителя
                            </p>
                            <p class="text">
                                Именно с помощью SMM-продвижения совершаются онлайн-продажи, происходит “подогрев” потенциальных клиентов, повышается узнаваемость бренда и лояльность аудитории к нему.
                            </p>
                            <p class="text">
                                SMM – это не про мемы и лайки, SMM – это про Ваши продажи.
                                Именно поэтому маркетинг в социальных сетях стоит доверять профессионалам.
                            </p>
                            <p class="text">
                                Компания Puzzle Digital Agency – современное digital-агенство в Минске, которое эффективно выстроит стратегию продвижения бренда в социальных сетях, решит необходимые задачи для конечной цели – новых клиентов и новых продаж для Вашего бизнеса.
                            </p>
                        </div>
                        <div class="col-sm-6 right-side-block">
                            <img src="assets/img/smm-page/diagram-paid-media-b-x2-501x510.png" class="img">
                        </div>
                    </div>
                </div>
            </div>



            <div class="advantages-table">
                <h2 class="title">
                    <strong>ПРЕИМУЩЕСТВА SMM ПРОДВИЖЕНИЯ</strong>
                </h2>
                <div class="advantages-table-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">
                                        НИКАКИХ ЗАТРАТ НА СТАРТЕ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Вы не платите за создание страницы в социальных сетях, в отличии от разработки сайта! Благодаря грамотной контент и smm стратегии Вы способны популизировать Ваш бренд, а также осуществить продажи через продвижение инстаграм, ВК, FB, и другие соц. сети.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        ЦЕЛЕВАЯ АУДИТОРИЯ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        СММ продвижение позволяет найти потенциального покупателя/клиента, который реально заинтересован, или раздумывает, а также готовится к тому, чтобы купить или заказать подобный товар/услугу.
Ваше продвижение в социальных сетях — мастхев, Вы показываете потребителю, насколько Вы о нем заботитесь, рассказываете как лучше использовать Ваш товар, нативно продвигая его.
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
                                        Как известно, лояльный потребитель — потенциальный покупатель. Принятие решения о покупке — долгий процесс, а постепенно раскрывая преимущества Вашего бизнеса, можно подогревать интерес клиента. А значит, каждый новый пост — маленький шаг навстречу сделке.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        ИМИДЖ КОМПАНИИ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Однажды подумав о Вас хорошо, пользователь будет думать так постоянно, особенно если в любом удобном случае напоминать об этом. Социальные сети — отличное место для трансляции уникальности своего предложения и имиджа компании в глазах потребителя.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">	
                                        САМАЯ ДЕШЕВАЯ РЕКЛАМА
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Реклама в социальных сетях — возможность предложить пользователю то, чего он действительно хочет или интересуется. Таргетинг в Instagam Facebook позволяет подобрать нам будущего клиента по его собственным интересам. За клик Вашего лида Вы можете платить всего 0,01 цент.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="cell-header">
                                    <img src="" alt="" class="cell-icon">
                                    <h3 class="title-text">
                                        БЫСТРАЯ КОММУНИКАЦИЯ
                                    </h3>
                                </div>
                                <div class="cell-body">
                                    <p class="text">
                                        Благодаря возможностям социальных сетей, Вы можете мгновенно ответить на интересующие вопросы клиента и рассказать о всех преимуществах Вашего товара или услуги, используя при этом мессенджеры и чаты.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="container">
            <div class="result-graphic">
                <div class="result-header">
                    <h2 class="title">РЕЗУЛЬТАТЫ НАШЕЙ РАБОТЫ</h2>
                </div>
                <div class="result-slider-wrapper">
                    <div class="result-slider">
                        <div>
                            <img src="assets/img/smm-page/slider/химчистка-подписчики.png" alt="" class="slider-img">
                        </div>
                        <div>
                            <img src="assets/img/smm-page/slider/модный-магазин-подписчики.png" alt="" class="slider-img">
                        </div>
                        <div>
                            <img src="assets/img/smm-page/slider/Ия-подписчики.png" alt="" class="slider-img">
                        </div>
                        <div>
                            <img src="assets/img/smm-page/slider/ер-модный-магазин.png" alt="" class="slider-img">
                        </div>
                        <div>
                            <img src="assets/img/smm-page/slider/ер-химчистка.png" alt="" class="slider-img">
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
            </div>
        </div>

        <div class="container form-full-container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="d-flex justify-content-center full-form__image-block_left-side">
                        <img src="assets/img/smm-page/ig1-1.jpg" class="full-form__image_left-side">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="full-form__content-block_right-side">
                        <div class="form__header">
                            <h3 class="title-text">АКЦИЯ!</h3>
                            <p class="text">
                                Запуская свой бизнес в просторе социальных сетей, всегда страшно делать первый шаг.Успейте получить 50$ скидки на все пакеты SMM услуг!
                            </p>
                        </div>
                        <div class="form__body">
                            <div class="form__image-wrapper">
                                <div class="form__border-wrapper">
                                    <h3 class="title-text">ПОЛУЧИТЬ БЕСПЛАТНОЕ СТИЛИСТИЧЕСКОЕ ОФОРМЛЕНИЕ</h3>
                                    <div class="row d-flex justify-content-around mt-4">
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="+375(xx)xxx-xx-xx" id="fullwidth-form__number" class="form__input">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="submit" class="cyan-button weight-button" value="ПОЛУЧИТЬ">
                                        </div>
                                    </div>
                                </div>
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Могу ли я сам заним</a>
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

    </div>


<?php get_footer() ?>