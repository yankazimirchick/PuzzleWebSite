<?php
/*
Template Name: Кейсы
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



<div id="case_section" class="servicesContainer container-fluid bg-section-white ">
    <div class="container-fluid servicesTabsContainer">
        <div class="row">
            <div class="col-sm-6 col-md-3 servicesTabsContainer__tab">
                <button data-filter=".webDev-filter"
                    class="service-filter-button serviceFilterButton specsButton serviceFilterButton-active"
                    id="webDevButton">
                    Веб-разработка
                </button>
            </div>
            <div class="col-sm-6 col-md-3 servicesTabsContainer__tab">
                <button data-filter=".smm-filter" class="service-filter-button serviceFilterButton specsButton"
                    id="smmButton">SMM</button>
            </div>
            <div class="col-sm-6 col-md-3 servicesTabsContainer__tab">
                <button data-filter=".seo-filter" class="service-filter-button serviceFilterButton specsButton"
                    id="seoButton">SEO</button>
            </div>
            <div class="col-sm-6 col-md-3 servicesTabsContainer__tab">
                <button data-filter=".contextAds-filter" class="service-filter-button serviceFilterButton specsButton"
                    id="contextAdsButton">
                    Контекстная реклама
                </button>
            </div>
        </div>
    </div>

    <div class="servicesGrid" id="servicesGrid">


        <!--webdev -->
        <div class="container-fluid servicesContentContainer webDev-filter servicesGrid-item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="tittle-filter">
                            <h3> Наши работы</h3>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 case_content_buttons">
                        <div class="buttons-container">
                            <button data-filter=""
                                class="innerFilterButton service-filter-button-item webDevButton innerFilterButton-active"
                                id="webDevAll">Все
                            </button>
                            <button data-filter=".landing-filter"
                                class="innerFilterButton webDevButton service-filter-button-item   ">Landing
                                page
                            </button>
                            <button data-filter=".vizitka-filter"
                                class="innerFilterButton webDevButton service-filter-button-item">Сайт-визитка
                            </button>
                            <button data-filter=".shop-filter"
                                class="innerFilterButton webDevButton service-filter-button-item">Интернет-магазин
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <div id="webDevGrid" class="webDevGrid innerGrid  container-fluid pl-0 pr-0">
                <div class="row">
                    <div class="webDevGrid-item landing-filter col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2020/06/k-3-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">knife-collection.com</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="webDevGrid-item vizitka-filter col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2020/06/k-3-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">knife-collection.com</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="webDevGrid-item shop-filter  col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2020/06/k-3-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">knife-collection.com</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="webDevGrid-item col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2020/06/k-3-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">knife-collection.com</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="webDevGrid-item col-md-4 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2020/06/k-3-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">knife-collection.com</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--webdev end-->


        <!--smm -->
        <div class="container-fluid servicesContentContainer smm-filter servicesGrid-item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="tittle-filter">
                            <h3> Наши работы</h3>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 case_content_buttons">
                        <div class="buttons-container">
                            <button data-filter="*"
                                class="service-filter-button-item innerFilterButton smmButton innerFilterButton-active"
                                id="webDevAll">Все
                            </button>
                            <button data-filter=".profile-filter"
                                class="service-filter-button-item innerFilterButton smmButton  ">Таргетированная
                                реклама
                            </button>
                            <button data-filter=".targetAds-filter"
                                class="service-filter-button-item innerFilterButton smmButton ">Ведение
                                профиля
                            </button>


                        </div>
                    </div>
                </div>
            </div>
            <div id="smmGrid" class="  smmGrid innerGrid container-fluid pl-0 pr-0">
                <div class="row">
                    <div
                        class="smmGrid-item innerGrid-item  profile-filter targetAds-filter col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="position:relative; background-image:url('https://puzzle-agency.by/wp-content/uploads/2021/01/4742454-510x397.jpg');display: flex;justify-content: center;align-items: center;"
                                class="case-item">
                                <h3 class="inner-text">Rancho.store.ru</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="smmGrid-item innerGrid-item  profile-filter targetAds-filter col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2021/01/4742454-510x397.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Rancho.store.ru</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="smmGrid-item innerGrid-item  profile-filter targetAds-filter  col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2021/01/4742454-510x397.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Rancho.store.ru</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="smmGrid-item innerGrid-item   targetAds-filter col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2021/01/4742454-510x397.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Rancho.store.ru</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="smmGrid-item innerGrid-item   targetAds-filter col-md-4 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2021/01/4742454-510x397.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Rancho.store.ru</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--smm end-->


        <!--seo-->
        <div class="container-fluid servicesContentContainer seo-filter servicesGrid-item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tittle-filter">
                            <h3> Наши работы</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div id="seoGrid" class="seoGrid innerGrid pl-0 pr-0">
                <div class="row">
                    <div class="seoGridItem innerGridItem  col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="position:relative; background-image:url('https://puzzle-agency.by/wp-content/uploads/2019/11/belysad-510x341.jpg');display: flex;justify-content: center;align-items: center;"
                                class="case-item">
                                <h3 class="inner-text">Belysad.by</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="seoGridItem innerGridItem  col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2019/11/belysad-510x341.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Belysad.by</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="seoGridItem innerGridItem   col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2019/11/belysad-510x341.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Belysad.by</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="seoGridItem innerGridItem   col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2019/11/belysad-510x341.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Belysad.by</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="seoGridItem innerGridItem   col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2019/11/belysad-510x341.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Belysad.by</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="seoGridItem innerGridItem   col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2019/11/belysad-510x341.jpg');"
                                class="case-item">
                                <h3 class="inner-text">Belysad.by</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--seo end-->


        <!--kontekst-->
        <div class="container-fluid servicesContentContainer contextAds-filter servicesGrid-item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="tittle-filter">
                            <h3> Наши работы</h3>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 case_content_buttons">
                        <div class="buttons-container">
                            <button data-filter=""
                                class=" service-filter-button-item  innerFilterButton contextAdsButton"
                                id="webDevAll">Все
                            </button>
                            <button data-filter=".googleAdWords-filter"
                                class="service-filter-button-item innerFilterButton contextAdsButton   ">Landing
                                page
                            </button>
                            <button data-filter=".yandexDirect-filter"
                                class="service-filter-button-item innerFilterButton contextAdsButton ">Сайт-визитка
                            </button>


                        </div>
                    </div>
                </div>
            </div>
            <div id="contextAdsGrid " class="contextAdsGrid innerGrid  container-fluid pl-0 pr-0">
                <div class="row">
                    <div
                        class="contextAdsGrid-item innerGrid-item  googleAdWords-filter yandexDirect-filter   col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="position:relative; background-image:url('https://puzzle-agency.by/wp-content/uploads/2018/07/gotovimsya-k-otopitelnomu-sezonu-1-510x340.jpg');display: flex;justify-content: center;align-items: center;"
                                class="case-item">
                                <h3 class="inner-text">TradingHouse</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="contextAdsGrid-item innerGrid-item  googleAdWords-filter yandexDirect-filter   col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2018/07/gotovimsya-k-otopitelnomu-sezonu-1-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">TradingHouse</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="contextAdsGrid-item innerGrid-item  googleAdWords-filter yandexDirect-filter    col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2018/07/gotovimsya-k-otopitelnomu-sezonu-1-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">TradingHouse</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="contextAdsGrid-item innerGrid-item  googleAdWords-filter yandexDirect-filter   col-md-3 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2018/07/gotovimsya-k-otopitelnomu-sezonu-1-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">TradingHouse</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="contextAdsGrid-item innerGrid-item  googleAdWords-filter yandexDirect-filter   col-md-4 col-xs-6 col-lg-3 mb-4">
                        <div class="innerGridItem">
                            <div style="background-image:url('https://puzzle-agency.by/wp-content/uploads/2018/07/gotovimsya-k-otopitelnomu-sezonu-1-510x340.jpg');"
                                class="case-item">
                                <h3 class="inner-text">TradingHouse</h3>
                                <a class="inner-link" href="project.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--kontekst end-->
    </div>
</div>



<div class="contact-form-section">
    <div class="contact-form-section-inner">
        <div style="max-width: 450px;" class="col-md-6 ">
            <h2>
                Определите стоимость разработки вашего сайта
            </h2>
            <p>
                Наш консультант свяжется с Вами в течение 10 минут!
            </p>
        </div>
        <div class="col-md-6">


            <div class=" container">
                <?=do_shortcode('[contact-form-7 id="86" title="Стоимость веб разработки - кейсы"]')?>

                <style>
                    .btn_submit {
                        position: absolute;
                        bottom: 0px;
                        right: 15px;
                        background-color: #000;
                        color: #fff;
                        font-family: "Bebas Neue";
                        border: unset;
                        padding: 5px 10px;
                        letter-spacing: 1px;
                    }

                    .phoneInput {
                        width: 100%;
                    }

                    .nameInput {
                        width: 100%;
                    }

                    .messageInput {
                        height: 100%;
                        width: 100%;

                    }
                </style>
            </div>
        </div>
    </div>
</div>


<?php get_footer() ?>