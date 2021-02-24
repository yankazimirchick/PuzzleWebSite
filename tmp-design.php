<?php
/*
Template Name: Веб-дизайн
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
                <div style="background-image: url(&quot;assets/img/context/веб-дизайн.jpg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            РАЗРАБОТКА WEB-ДИЗАЙНА
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 left-side-block">
                            <p class="text simple-text">
                                Пользователям требуется 0,5 секунды, чтобы решить, оставаться на вашем сайте или нажать кнопку «назад». Оформление сайта играет здесь ключевую роль, однако это не означает, что «красивые» сайты являются эффективными. Создание веб дизайна – это нечто большее, чем просто привлекательная картинка.<br>
Web дизайн сайта не должен быть сложным. Команда агентства «Puzzle Agency» проектирует и разрабатывает удобные сайты, которые отражают ваш бренд и привлекают посетителей.<br>
Создание красивых страниц – это то, что мы любим и умеем делать. Специалисты нашей студии берут на себя всю разработку дизайна веб сайта, и вам не придется переживать об ошибках в коде или других технических моментах. Мы понимаем, что вам нужен веб-сайт, который будет приносить пользу как для ваших посетителей, так и для вашего бизнеса.     
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-table-vertical">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Понимание вашего целевого рынка. Мы анализируем маркетинговые каналы, анализируем показатели активности пользователей, чтобы лучше понять ваш бизнес и то, что движет вашими клиентами.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Проверенный процесс разработки веб дизайна сайта. Наше веб-агентство планирует и осуществляет ваш проект от начала до конца, уделяя особое внимание результатам, активности пользователей и, конечно же, внешнему виду.    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Получите больше пользователей, зарабатывайте больше денег. Предлагая привлекательный дизайн с правильно реализованной воронкой продаж, ваш web дизайн имеет шанс привлечь больше клиентов. Вы сможете достичь большего результата по более низкой цене, чем с помощью других инструментов продвижения.    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Отслеживаемая аналитика для оптимальных результатов. Благодаря нашим аналитическим инструментам, производительность вашего сайта будет легко отслеживать. Вы всегда будете знать, что действительно работает и почему, а это значит, что вы постоянно будете открывать новые способы привлечения клиентов.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="simple-block">
                <div class="container">
                    <h3 class="title">ВАЖНОСТЬ ХОРОШЕГО ВЕБ-ДИЗАЙНА</h3>
                    <p class="simple-text text">
                        Мы все знаем, что существует только один шанс произвести первое впечатление. Качественный дизайн сайта может многое рассказать о вашем бизнесе. Чтобы обеспечить удобство работы, успешный веб-сайт должен быть простым в использовании, информативным и визуально привлекательным, независимо от того, доступен ли он через компьютер, мобильный телефон или планшет. Какой бы сайт вы ни заказали, мы сможем создать его для вас! Мы управляем всем процессом – от проектирования и разработки, вплоть до регистрации домена и хостинга. Мы поможем наполнить его, оптимизировать для поисковых систем и предоставить услуги онлайн-маркетинга, чтобы увеличить трафик, приходящий на ваш сайт, что позволит вам сконцентрироваться на управлении вашим бизнесом.

<br><br>Если вы хотите привлечь больше клиентов и повысить активность на сайте вашего бизнеса, то студия web дизайна Puzzle Agency в Минске поможет вам в создании подходящей странички качественно и недорого.
                    </p>
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