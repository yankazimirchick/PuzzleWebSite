<?php
/*
Template Name: Контакты
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




        <section id="contact_section" class="section_padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-xs-12">
                        <div class="contact-form">
                            <h3>
                                Оставьте заявку
                            </h3>
                            <div class="contact-form-label-main">
                                <p>
                                    и мы Вам перезвоним
                                </p>
                            </div>


                            <p class="contact-form-label">Номер телефона *</p>
                            <input type="tel" value="" autocomplete="tel" placeholder="+375(ХХ) ХХХ-ХХ-ХХ"
                                aria-invalid="false" required="">
                            <p class="contact-form-label">Ваше Имя</p>
                            <input type="tel" value="" autocomplete="tel" placeholder="+375(ХХ) ХХХ-ХХ-ХХ"
                                aria-invalid="false" required="">
                            <input type="button" value="отправить" class="contact-button" type="text">

                        </div>
                        <div class="contact-info">

                            <h3>
                                Контактная информация
                            </h3>
                            <br>
                            <div class="row">
                                <div class="col-xs-6  col-md-3 col-lg-3">
                                    <h6>
                                        Адрес:
                                    </h6>
                                </div>
                                <div class="col-xs-6  col-md-9 col-lg-9">
                                    <p>
                                        г. Минск, ул. Каховская 28а, офис 121
                                    </p>

                                </div>
                                <div class="col-xs-6  col-md-3 col-lg-3">
                                    <h6> Телефон: </h6>
                                </div>
                                <div class="col-xs-6  col-md-9 col-lg-9">
                                    <p>
                                        <a href="telto:+375298454599"> +375 (29) 845-45-99 </a> <i
                                            class="demo-icon icon-telegram">&#xf2c6;</i>
                                    </p>

                                </div>
                                <div class="col-xs-6  col-md-3 col-lg-3">
                                    <h6> E-mail:</h6>
                                </div>
                                <div class="col-xs-6  col-md-9 col-lg-9">
                                    <p><a href="mail:hello@puzzle-agency.by">hello@puzzle-agency.by</a></p>

                                </div>
                            </div>







                        </div>


                    </div>
                    <div class="col-sm-7 col-md-8 col-xs-12">
                        <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aad567063211651ed7702e780554c230d7f50a8cdf1acc5660fe5c62ea0b643f7&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false">
                        </script>
                    </div>
                </div>
            </div>

        </section>










<?php get_footer() ?>