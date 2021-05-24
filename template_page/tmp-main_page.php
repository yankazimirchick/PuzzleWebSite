<?php
/*
Template Name: Главная
*/
?>
<?php get_header() ?>

<!-- Первый экран-->
<section class="first_section ">

    <div class="container-fluid tittle_wrapper">

        <div class="container">
            <h1>Студия веб-разработки и маркетинга</h1>
        </div>


    </div>

    <div class="banner_wrapper">
        <div class=" container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 col-12 banner_wrapper__item ">
                    <h3 class="">Разработка сайтов</h3>
                    <p class="">Лендингов, сайтов-визиток, корпоративных сайтов, порталов и
                        интернет-магазинов</p>
                    <a class="underline-anim banner_wrapper_link"
                        href="/development/">Подробнее</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-12 banner_wrapper__item">
                    <h3 class="">КОНТЕКСТНАЯ РЕКЛАМА</h3>
                    <p class="">Настройка и ведение рекламы в Google AdWords и Яндекс.Директ</p>
                    <a class="underline-anim banner_wrapper_link"
                        href="/context/">Подробнее</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-12 banner_wrapper__item">
                    <h3 class="">SMM ПРОДВИЖЕНИЕ</h3>
                    <p class="">Продвижение в социальных сетях: VK, Instagram, Facebook</p>
                    <a class="underline-anim banner_wrapper_link"
                        href="/smm/">Подробнее</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-12 banner_wrapper__item">
                    <h3 class="">SEO ПРОДВИЖЕНИЕ</h3>
                    <p class="">Профессиональное продвижение и оптимизация Вашего сайта для
                        поисковых систем</p>
                    <a class="underline-anim banner_wrapper_link"
                        href="/seo/">Подробнее</a>
                </div>

            </div>

        </div>
    </div>

</section>







<!-- ПРЕИМУЩЕСТВА -->
<section class="second_section bg-section-white">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12 section-tittle">
                <h2 class="tittle-bg-cyan ">ПРЕИМУЩЕСТВА...</h2>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-md-6 col-lg-4 col-12 content_wrapper">
                <div class="row">
                    <div class="col-2 content_wrappper_img">
                        <img src="<? echo get_template_directory_uri(); ?>/assets/img/icon/light-bulb.svg" alt="">
                    </div>
                    <div class="col-10">
                        <h3>
                            Продуманность
                        </h3>
                        <div class="description">
                            Задачи по проекту досконально прорабатываются, и составляется четкий план действий
                            для
                            достижения наилучших результатов с минимальными рисками.
                        </div>
                    </div>
                </div>
                <div class="border-cyan"></div>

            </div>
            <div class="col-md-6 col-lg-4 col-12 content_wrapper">
                <div class=" row ">
                    <div class="col-2 content_wrappper_img">
                        <img src="<? echo get_template_directory_uri(); ?>/assets/img/icon/rocket-launch.svg" alt="">
                    </div>
                    <div class="col-10">
                        <h3>
                            АКТИВНОСТЬ
                        </h3>
                        <div class="description">
                            Мы всегда заинтересованы в каждом заказчике и умеем слышать все пожелания. Наш
                            подход всегда персонализирован.
                        </div>
                    </div>
                </div>
                <div class="border-magenta"></div>
            </div>
            <div class="col-md-6 col-lg-4 col-12 content_wrapper">
                <div class=" row ">
                    <div class="col-2 content_wrappper_img">
                        <img src="<? echo get_template_directory_uri(); ?>/assets/img/icon/devices.svg" alt="">
                    </div>
                    <div class="col-10">
                        <h3>
                            РЕЗУЛЬТАТ
                        </h3>
                        <div class="description">
                            Мы не будем обещать золотых гор – мы проведем раскладку по рискам, оптимистичный и
                            пессимистичный сценарии по показателям, приведем примеры цифр по конкурентам.
                        </div>
                    </div>
                </div>
                <div class="border-yellow"></div>
            </div>
            <div class="col-md-6 col-lg-4 col-12 content_wrapper">
                <div class=" row ">
                    <div class="col-2 content_wrappper_img">
                        <img src="<? echo get_template_directory_uri(); ?>/assets/img/icon/target.svg" alt="">
                    </div>
                    <div class="col-10">
                        <h3>
                            КРЕАТИВНОСТЬ
                        </h3>
                        <div class="description">
                            У нас имеется множество нереализованных идей, и постоянно генерируются новые.
                        </div>
                    </div>
                </div>
                <div class="border-magenta"></div>

            </div>
            <div class="col-md-6 col-lg-4 col-12 content_wrapper">
                <div class=" row ">
                    <div class="col-2 content_wrappper_img">
                        <img src="<? echo get_template_directory_uri(); ?>/assets/img/icon/diamond_2.svg" alt="">
                    </div>
                    <div class="col-10">
                        <h3>
                            Миссия
                        </h3>
                        <div class="description">
                            Развиваем бизнес заказчика при помощи инструментов комплексного интернет-маркетинга,
                            взаимодействуя с ведущей командой экспертов на рынке.
                        </div>
                    </div>
                </div>
                <div class="border-yellow"></div>

            </div>
            <div class="col-md-6 col-lg-4 col-12 content_wrapper">
                <div class=" row ">
                    <div class="col-2 content_wrappper_img">
                        <img src="<? echo get_template_directory_uri(); ?>/assets/img/icon/diamond.png" alt="">
                    </div>
                    <div class="col-10">
                        <h3>
                            БИЗНЕС-АНАЛИТИКА
                        </h3>
                        <div class="description">
                            Внушительный опыт работы позволяет нам систематизировать маркетинг под ключ и
                            «прочувствовать» любую сферу бизнеса заказчика.
                        </div>
                    </div>
                </div>
                <div class="border-cyan"></div>

            </div>

        </div>
    </div>
</section>

<!-- О КОМПАНИИ-->
<section class="bg-section-light">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-lg-4 img-center">
                <img loading="lazy" class="img-fluid"
                    src="<? echo get_template_directory_uri(); ?>/assets/img/allStaff.jpg" alt="">
            </div>
            <div class=" col-xs-12 col-sm-12 col-lg-8">
                <div>
                    <h2 class="tittle-bg-magenta ">О КОМПАНИИ...</h2>
                </div>
                <p>

                    Шел 2016 год, когда я работал менеджером по рекламе в автошколе «Дорожная азбука». Ещё тогда
                    мы столкнулись с проблемами, когда состояние сайта оставляло желать лучшего: низкая скорость
                    загрузки, отсутствие уникального дизайна, о юзабилити даже и говорить не стоит,
                    соответственно, было принято решение разработать новый сайт с учётом потребностей рынка.<br>
                    Стоит упомянуть и о том, что реализация сео-продвижения была вовсе не положительной, а
                    социальные сети не набирали обороты. Следить за качеством исполнения работ 3 разных
                    подрядчиков было крайне неудобно, сложно оптимизировать процессы, возникали вопросы
                    коммуникации, в итоге желаемый результат достигнут не был.<br>
                    В ходе работы у меня постепенно зарождалась мысль об открытии своей веб-студии, где будет
                    команда профессионалов, которая выполнит весь комплекс услуг и будет руководствоваться
                    интересами заказчика. Конечно, сайт мы сделали при помощи других коллег, но не раз его
                    приходилось дорабатывать, сео ведется по сей день и мы успешно справляемся со своими
                    обязанностями, ведь сайт автошколы в топе!
                    Что мы имеем сегодня в Puzzle: команду специалистов, которые горят одной идеей и беспощадно
                    грызут гранит науки в своей области, всегда в курсе новых тенденций на рынке и готовы
                    двигать Ваш бизнес к новым вершинам.<br>
                    К чему я это все? - Если Вы решили стать заметными в интернете (если Вас там нет — Вас нет
                    нигде), то доверьтесь нам. Агентство Puzzle — та часть пазла продаж, которой не хватает
                    Вашему бизнесу.<br> <b>Алексей Кузьмин</b>
                </p>

            </div>
        </div>
    </div>


</section>
<!-- Команда -->
<section class="section_3 bg-section-white">

    <div class="container">
        <!-- сбор данных для слайдера -->
        <?php $teams=[];?>
        <?php if( have_rows('teams') ): ?>
        <?php while( have_rows('teams') ): the_row(); ?>
        <?php
            $teamItem=get_row();
            array_push($teams,$teamItem);
        ?>
        <?php endwhile; ?>
        <?php endif; ?>


         <!-- сбор данных для слайдера -->
         <?php $brands=[];?>
        <?php if( have_rows('brands') ): ?>
        <?php while( have_rows('brands') ): the_row(); ?>
        <?php
            $brandItem=get_row();
            array_push($brands,$brandItem);
        ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <!-- сбор данных для слайдера конец -->
        
        

        <button class="big-arrow prev-big-button slick-prev-big slick-arrow"></button>
        <h3 class="tittle-bg-yellow tittle-bg-mobile ">Команда</h3>
        <div class="slider-wrap row ">
            <div class="col-md-6">
                <div class="slider-for">
                <!-- старт вывод -->
                <?php 
                    foreach ($teams as $key => $value) {   ?>             
                        <div class="slider-for_image">
                        <img loading="lazy" class="img-fluid"
                        src="<?=wp_get_attachment_url(array_values($value)[1])?>"> </img>
                        </div>
        
                        <? }?>
                       <!-- конец вывод -->

                </div>
            </div>
            <div class="col-md-6">
                <h3 class="tittle-bg-yellow tittle-bg-bigscreen">Команда</h3>
                <div class="slider-nav">
                        <!-- старт вывод -->
                    <?php  foreach ($teams as $key => $value) {   ?>                        
                        <div>
                            <img loading="lazy" class="img-fluid"
                            src="<?=wp_get_attachment_url(array_values($value)[2])?>"> </img>
                         </div>
                        <? } ?>
                        <!-- конец вывод -->

                </div>
                <div class="slider-for-text">

                
                <!-- старт вывод -->
                        <?php  foreach ($teams as $key => $value) {   ?>                        
                            <div class=" ">
                        <h3><? echo array_values($value)[0] ?></h3>
                        <p><? echo array_values($value)[3] ?></p>
                        <hr>
                        <p><? echo array_values($value)[4] ?></p>

                        <h5>Последние статьи в блоге</h5>
                        <div>

                        

                            <div class="d-flex">
                                
                            <? if (array_values($value)[5]!=""){

                                global $post; // не обязательно

                                // 5 записей из рубрики 9
                                $myposts = get_posts( array(
                                    'post_type'   => 'post',
                                    'tag'=>array_values($value)[5],
                                ) );
                                
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    echo('<div class="slider-for-text-blog">');
                                    print_r($post->post_title);
                                    echo(' </div>');
                                    // стандартный вывод записей
                                }

                                wp_reset_postdata(); // сбрасываем переменную $post

                            }
                            
                            
                            ?>


                          
                                
                                 
                            </div>
                        </div>
                        <a href="blog-archive.html">Перейти в блог</a>
                    </div>
                        <? } ?>
                        <!-- конец вывод -->

                   
                   
                
                    </div>
            </div>
        </div>
        <button onclick="" class="big-arrow next-big-button slick-next-big slick-arrow"></button>
    </div>

</section>
<!-- НАШИ КЛИЕНТЫ-->
<section class="bg-section-white">
    <div class="container ">
        <div class="col-md-12">
            <h2 class="tittle-bg-cyan ">Наши клиенты...</h2>
        </div>
        <div class="slider-brands">

             <!-- старт вывод -->
             <?php 
                    foreach ($brands as $key => $value2) {   ?>             
                       
                        <div class="slider-brand-item">
                <img loading="lazy" class="img-fluid"
                    src="<?=wp_get_attachment_url(array_values($value2)[1])?>"> </img>
                    </div>
                        <? }?>
                       <!-- конец вывод -->

           


        </div>
    </div>
</section>
<!-- КАРТА-->
<section class="map-section" style="position: relative;">
    <div class="map-inner-contact">
        <h5 class="tittle-bg-yellow">Адрес</h5>
        <p> г. Минск, ул. Каховская 28А, офис 121</p>

        <h5 class="tittle-bg-magenta">Телефон</h5>
        <p> +375 (29) 845-45-99 <a href="tel:+375298454599" style="color: #0a2053;" target="_blank"
                class="inline-module__link">
                <i class="demo-icon icon-telegram">&#xf2c6;</i>
            </a></p>

        <h5 class="tittle-bg-cyan">Email</h5>
        <p>hello@puzzle-agency.by</p>

    </div>
    <div class="map">

        <div class="ymap-container">
            <div class="loader loader-default"></div>
            <div id="map-yandex"></div>
        </div><!-- .ymap-containr -->



    </div>

    <div class="map-inner-contact-form">
        <h5>Закажите обратный звонок</h5>
        <p>Наш консультант свяжется с Вами в течение 10 минут!</p>
        <div class="p-0 container">
            
               <? echo do_shortcode('[contact-form-7 id="84" title="Закажите обратный звонок"]') ?>
               <style>
                   .input_zakaz{
                    width: 100%;
                    padding: 12px 20px;
                    border-radius: 6px;
                    border: 0;
                   }
                   .btn_submit{
                            padding: 12px;
                            font-family: 'Bebas Neue';
                             letter-spacing: .1em
                        }     
                       
                    </style>
           
        </div>
    </div>
</section>


<script>
    $(document).ready(function () {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav,.slider-for-text',
            nextArrow: '<button class="slick-next-big slick-arrow"></button>',
            prevArrow: '<button class="slick-prev-small slick-arrow"></button>'
        });
        $('.slider-for-text').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav,.slider-for'
        });

        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for,.slider-for-text',
            dots: false,
            focusOnSelect: true,
            nextArrow: '<button class="slick-next-small slick-arrow"></button>',
            prevArrow: ''
        });
        $('.slider-brands').slick({
            slidesToShow: 6,
            slidesToScroll: 6,
            arrows: true,
            dots: false,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }
            ],
            nextArrow: '<button class="slick-next-small slick-arrow"></button>',
            prevArrow: '<button class="slick-prev-small slick-arrow"></button>'
        });

        $('slider-for').slick('slickNext');
        $(".next-big-button").click(function () {
            $('.slider-for').slick('slickNext');

        });
        $(".prev-big-button").click(function () {
            $('.slider-for').slick('slickPrev');
        });

    });
</script>




<?php get_footer() ?>