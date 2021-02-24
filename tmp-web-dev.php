<?php
/*
Template Name: Web Разработка
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
                <div style="background-image: url(&quot;assets/img/webdev.jpg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            РАЗРАБОТКА WEB-САЙТОВ
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 left-side-block">
                            <h3 class="title">
                                РАЗРАБОТАЕМ САЙТ ПОД ВАШИ ЦЕЛИ
                            </h3>
                            <p class="text">
                                Ни для кого не секрет, что практически все сферы нашей жизни давно ушли в интернет. Через него мы покупаем одежду, заказываем еду, ищем информацию о медицинских центрах, клининговых компаниях, юристах и т.д.  
                            
                            </p>
                            <p class="text">
                                Создание сайта для своей компании – важный этап в ее развитии. Ведь именно он будет ее продающим лицом, визиткой,  а его удобство и информативность будет качественно отличать вашу компанию от конкурентов. Если по какой-то причине  вы до сих пор не заявили о себе в интернете, то потеряли как минимум 60 % потенциальных клиентов, заказчиков или партнеров.
                            </p>
                            <p class="text">
                                Компания Puzzle Digital Agency зарекомендовала себя как профессионал, поэтому, если вам нужна разработка сайтов в Минске, вам точно к нам!
                            </p>
                            <p class="text">
                                <b>Почему для разработки сайтов следует выбрать именно нашу компанию?</b>
                            </p>
                            <p class="text">
                                Разработка сайта эксклюзивна и происходит с учетом всех пожеланий заказчика. Мы создадим для вас запоминающийся образ в интернете, с помощью которого о вас узнают будущие партнеры и покупатели.
                            </p>
                            <p class="text">
                                Наши специалисты знают, как вывести ваш сайт в топовые места в поисковых системах. Это позволит большему числу людей узнать о вас и о предоставляемых вами услугах.
                            </p>
                            <p class="text">
                                Разработка сайта происходит с адаптивной версткой: его будет удобно просматривать не только с компьютера, но и с телефона и других гаджетов.
                            </p>
                            <p class="text">
                                Мы ориентируемся на основные задачи вашей компании, поэтому можем создать сайт под ключ. Мы создаем логичные и удобные сайты не только для клиентов, но и для администраторов.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="webDevGrid-item wedDev-filter">
                <div class="info-table">
                    <div class="info-table-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="table-item">
                                        <div class="col-xs-3 left-side-block">
                                            <img src="assets/img/icon/unknow_icon.png"
                                                class="table-img">
                                        </div>
                                        <div class="col-xs-3 right-side-block">
                                            <h2 class="table-title">
                                                <a href="/development/landing-page">
                                                    Landing Page
                                                </a>
                                            </h2>
                                            <p class="text">
                                                Продающие страницы  являются своеобразным трамплином для вашего бизнеса. Специалисты Puzzle Digital Agency разработают лендинг пейдж, который сможет лаконично и емко описать товар и разжечь интерес к нему у потенциальных покупателей.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="table-item">
                                        <div class="col-xs-3 left-side-block">
                                            <img src="assets/img/icon/unknow_icon.png"
                                                class="table-img">
                                        </div>
                                        <div class="col-xs-3 right-side-block">
                                            <h2 class="table-title">
                                                <a href="/development/corporate/">
                                                    Корпоративный сайт  
                                                </a>
                                            </h2>
                                            <p class="text">
                                                Чтобы ваша компания представлялась клиентам только в выгодном свете, а обратная связь с партнерами и клиентами стала оперативной, вам необходим  корпоративный сайт. Но так как при разработке сайта нужно предусмотреть много нюансов, правил и особенностей, его разработку лучше доверить профессионалам.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="table-item">
                                        <div class="col-xs-3 left-side-block">
                                            <img src="assets/img/icon/unknow_icon.png"
                                                class="table-img">
                                        </div>
                                        <div class="col-xs-3 right-side-block">
                                            <h2 class="table-title">
                                                <a href="/development/card-site/">
                                                    Сайт-визитка
                                                </a>
                                            </h2>
                                            <p class="text">
                                                Основная задача сайта-визитки –  коротко и без перегруза лишней информации рассказать клиенту о вас, вашей компании или о предлагаемом товаре.  Нужно понимать, что разработку своей виртуальной визитной карточки стоит доверить профессионалам. Наша компания предлагает качественную работу с прицелом на перспективу.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="table-item">
                                        <div class="col-xs-3 left-side-block">
                                            <img src="assets/img/icon/unknow_icon.png"
                                                class="table-img">
                                        </div>
                                        <div class="col-xs-3 right-side-block">
                                            <h2 class="table-title">
                                                <a href="/development/portal/">
                                                    Портал
                                                </a>
                                            </h2>
                                            <p class="text">
                                                Интернет-портал является своего рода путеводителем по интернету.  Он объединяет в себе и новостной сайт с различными статьями, поисковую систему и различные интернет-ресурсы. Специалисты Puzzle Digital Agency создадут портал, который поможет сориентироваться посетителям в многообразии информации, и сделают этот процесс удобным и комфортным.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="table-item">
                                        <div class="col-xs-3 left-side-block">
                                            <img src="assets/img/icon/unknow_icon.png"
                                                class="table-img">
                                        </div>
                                        <div class="col-xs-3 right-side-block">
                                            <h2 class="table-title">
                                                <a href="/development/front-end/">Верстка сайта</a>
                                            </h2>
                                            <p class="text">
                                                Разработчики Puzzle Digital Agency создадут для вас сайт с использованием уже имеющихся макетов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="table-item">
                                        <div class="col-xs-3 left-side-block">
                                            <img src="assets/img/icon/unknow_icon.png"
                                                class="table-img">
                                        </div>
                                        <div class="col-xs-3 right-side-block">
                                            <h2 class="table-title">
                                                <a href="/development/i-store/">
                                                    Интернет-магазин
                                                </a>
                                            </h2>
                                            <p class="text">
                                                Для того, чтобы организовать торговлю в интернете как в реальном магазине, вам необходим интернет-магазин. Плюсы очевидны: в интернете потенциальных клиентов больше, есть возможность сэкономить на аренде торговых площадок и складов. Доверяя разработку сайта нам, вы делаете правильное вложение в собственный бизнес.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="info-table-vertical">
                <div class="container">
                    <h3 class="title">БОНУСЫ</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Первичная SEO-оптимизация
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Помощь с покупкой и настройкой хостинга и домена    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img-wrapper">
                                <img src="" alt="" class="img">
                            </div>
                            <div class="text-wrapper">
                                <p class="text">
                                    Консультационная поддержка
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-to-order-block">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center col-md-12">
                            <div class="button-wrapper">
                                <button class="cyan-button" data-toggle="modal" data-target="#form-modal-window">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


<?php get_footer() ?>