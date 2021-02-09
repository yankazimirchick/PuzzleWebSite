window.onload = function () {
    let servicesFiltersList = [
        "webDev-filter",
        "smm-filter",
        "seo-filter",
        "contextAds-filter",
    ];

    let webDevFiltersList = [
        "landing-filter",
        "vizitka-filter",
        "shop-filter",
    ];

    let smmFiltersList = [
        "targetAds-filter",
        "profile-filter",
    ];


    let contextAdsFiltersList = [
        "googleAdWords-filter",
        "yandexDirect-filter",
    ];





    //WEBDEV GRID
    let $activeWebDevButton = $(".innerFilterButton-active.webDevButton");
    let $webDevGrid = $("#webDevGrid").isotope({
        itemSelector: '.webDevGrid-item',
        layoutMode: 'fitRows',
        filter: $activeWebDevButton.attr('data-filter'),
    });




    //SMM GRID
    let $activeSMMButton = $(".innerFilterButton-active.smmButton");
    let $smmGrid = $("#smmGrid").isotope({
        itemSelector: '.smmGrid-item',
        layoutMode: 'fitRows',
    });




    //CONTEXT ADS GRID
    let $activeContextAdsButton = $(".innerFilterButton-active.contextAdsButton");
    let $contextAdsGrid = $("#contextAdsGrid").isotope({
        itemSelector: '.contextAdsGrid-item',
        layoutMode: 'fitRows',
    });






    //GLOBAL GRID
    let $activeServiceButton = $(".serviceFilterButton.serviceFilterButton-active");
    let $specsGrid = $("#servicesGrid").isotope({
        itemSelector: '.servicesGrid-item',
        layoutMode: 'fitRows',
        filter: $activeServiceButton.attr('data-filter'),
        transitionDuration: '0.6s',
    });









    $(".webDevButton").on("click", function () {
        if ($(this).hasClass("webDevButton")) {
            $activeWebDevButton.removeClass("innerFilterButton-active");
            $(this).addClass("innerFilterButton-active");
            $activeWebDevButton = $(this);
        }

        let attrWebDevValue = $activeWebDevButton.attr('data-filter');

        $webDevGrid.isotope({
            filter: attrWebDevValue
        });

        $webDevGrid.isotope('layout');
        $specsGrid.isotope('layout');
    });







    $(".smmButton").on("click", function () {
        if ($(this).hasClass("smmButton")) {
            $activeSMMButton.removeClass("innerFilterButton-active");
            $(this).addClass("innerFilterButton-active");
            $activeSMMButton = $(this);
        }

        let attrSMMValue = $activeSMMButton.attr('data-filter');

        $smmGrid.isotope({
            filter: attrSMMValue,
        });

        $smmGrid.isotope('layout');
        $specsGrid.isotope('layout');
    });







    $(".contextAdsButton").on("click", function () {

        if ($(this).hasClass("contextAdsButton")) {
            $activeContextAdsButton.removeClass("innerFilterButton-active");
            $(this).addClass("innerFilterButton-active");
            $activeContextAdsButton = $(this);
        }

        let attrContextAdsValue = $activeContextAdsButton.attr('data-filter');

        $contextAdsGrid.isotope({
            filter: attrContextAdsValue,
        });

        $contextAdsGrid.isotope('layout');
        $specsGrid.isotope('layout');
    });









    $(".serviceFilterButton").on("click", function () {

        if ($(this).hasClass("specsButton")) {
            $activeServiceButton.removeClass("serviceFilterButton-active");
            $(this).addClass("serviceFilterButton-active");
            $activeServiceButton = $(this);
        }

        let attrServiceValue = $activeServiceButton.attr('data-filter');

        $specsGrid.isotope({
            filter: attrServiceValue,
            layoutMode: 'fitRows',
        });

        $webDevGrid.isotope('layout');
        $smmGrid.isotope('layout');
        $contextAdsGrid.isotope('layout');
        $specsGrid.isotope('layout');

    });
};