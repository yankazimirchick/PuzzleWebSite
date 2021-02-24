<?php
/*
Template Name: Instagram
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
                <div style="background-image: url(&quot;assets/img/web-site-pages/instagram/инстаграм.jpg&quot;); background-position: 0 405%;" class="paralax-wrapper">
                    <div class="paralax-inner">
                        <h1 class="paralax-tittle" style="padding-top: 0px; opacity: 1;">
                            ПРОДВИЖЕНИЕ INSTAGRAM
                        </h1>
                    </div>
                </div>
            </section>

            <div class="about-service-block">
                <div class="container">
                    <h2 class="title">INSTAGRAM КАК SMM-ПЛАТФОРМА</h2>
                    <div class="row">
                        <div class="col-sm-6 left-side-block">
                            <p class="text">
                                Instagram является одной из ведущих SMM-платформ, построенной на визуальном контенте. Ежедневно приложение посещает 500-600 млн пользователей во всем мире. Однако люди, особенно владельцы бизнеса, не всегда задумываются о том, что раскрутка аккаунта Инстаграма может быть элементом их маркетинговой стратегии.
                            </p>
                            <p class="text">
                                Инстаграм стал второй по величине социальной сетью после Facebook и его охват во всем мире увеличивается ежедневно.    
                            </p>
                            <p class="text">
                                Instagram и другие социальные сети, построенные на визуальном контенте, такие как Pinterest, набирают популярность не просто так. Мы слышали фразу «лучше один раз увидеть, чем сто раз услышать» бесчисленное множество раз с маленького возраста. Как владельцу бизнеса и создателю контента, почему бы вам не воспользоваться преимуществами визуала как частью вашей стратегии маркетинга? Только подумайте, насколько меньше текста вам придется напечатать!
                            </p> 
                            <p class="text">
                                «<b>Визуальный маркетинг</b>» – один из последних модных трендов, и не зря. Потребители хотят «видеть», а маркетологи должны им предоставить такую возможность. Подумайте о своей ленте в Facebook или ВКонтакте, вы читаете каждый пост? Скорее всего, нет. А как насчет фотографий? Вы можете не просматривать каждую из них, но вы точно обращаете больше внимания на изображения, чем на текст. Инстаграм – это целый поток визуального контента, который можно использовать для продвижения блога.
                            </p> 
                        </div>
                        <div class="col-sm-6 right-side-block d-flex">
                            <img src="assets/img/web-site-pages/instagram/main_inst-1.png" class="m-auto img" style="width: auto; max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-service-block">
                <div class="container">
                    <h2 class="title">ЗАЧЕМ ВАМ КАК ВЛАДЕЛЬЦУ БИЗНЕСА НУЖЕН АККАУНТ В INSTAGRAM?</h2>
                    <div class="row flex-row-reverse">
                        <div class="col-sm-6 left-side-block">
                            <p class="text">
                                Инстаграм представил возможность создавать бизнес-аккаунты в 2016 году. С тех пор многие компании решили переключить свои аккаунты с личного на бизнес-профиль, чтобы эффективно работала раскрутка Инстаграм. Здесь вы сможете отслеживать, сколько стоит ваша реклама, какое количество пользователей перешло по ссылке и т.д.    
                            </p>
                            <p class="text">
                                Инстаграм стал принадлежать Facebook, и перемены казались неизбежными. Инстаграм во многом является перенял черты Facebook, даже внешний вид, но больше это относится к бизнес-аккаунтам и рекламе.    
                            </p>
                            <p class="text">
                                Наличие бизнес-профиля дает вам доступ к различным инструментам и функциям для продвижения, включая аналитику ваших показателей (охват пользователей на постах и Stories), дополнительные calls-to-action и кнопки, которые вы можете разместить в своем профиле, а также сторонние интеграции с сервисами.    
                            </p> 
                            <p class="text">
                                Цели для создания бизнес и личного аккаунта в Инстаграм очень отличаются. Вы используете свой личный аккаунт в Инстаграм, чтобы показать моменты своей жизни своим друзьям и семье. Бизнес запускает свой аккаунт в Инстаграм, чтобы привлечь аудиторию и новых клиентов.
                            </p>
                        </div>
                        <div class="col-sm-6 right-side-block d-flex">
                            <img src="assets/img/web-site-pages/instagram/main_inst2-1.png" class="m-auto img" style="width: auto; max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>

        <div class="container">
            <h2 class="title">ПРЕИМУЩЕСТВА ПРОДВИЖЕНИЯ БИЗНЕСА В INSTAGRAM</h2>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h4 class="title-text">
                        ВИЗУАЛЬНЫЙ МАРКЕТИНГ
                    </h4>
                    <p class="text">
                        В отличие от большинства других социальных медиа-платформ, которые фокусируются на тексте и ссылках, Инстаграм используется демонстрации для фото и видеозаписей. Учитывая, что визуальный контент более привлекателен, чем текст, это огромная возможность для продвижения Instagram. Вместо того, чтобы пытаться привлечь пользователей на ваш основной сайт, чтобы увеличить продажи или объяснить преимущества работы с вами, вы можете использовать фотографии, чтобы создать более убедительное сообщение. Визуальный контент дают вашему бизнесу возможность выделить продукты, а видео – отличный способ показать их в действии. Кроме того, вы можете использовать платформу для демонстрации корпоративной культуры и других закулисных аспектов вашего бизнеса.    
                    </p>
                </div>
                <div class="col-md-12 mb-3">
                    <h4 class="title-text">
                        ВЫСОКИЕ ПОКАЗАТЕЛИ ОХВАТА
                    </h4>
                    <p class="text">
                        Пользователи Инстаграм в 2016 году нажимали кнопку «Мне нравится» под 4,2 млрд постов в день. Подписи под фото с хотя бы одним хэштегом в среднем на 12,6% активнее, чем без них. Уже этого достаточно для многих SMM-маркетологов, чтобы использовать платформу для эффективного продвижения услуг в Инстаграм. Когда вы публикуете что-то в Instagram, большинство ваших подписчиков, скорее всего, увидят это. Это огромное преимущество, особенно если учесть, что многие маркетологи используют платные рекламные функции на Facebook просто для того, чтобы их посты появились у их подписчиков в ленте.
                    </p>
                </div>
                <div class="col-md-12 mb-3">
                    <h4 class="title-text">
                        СВЯЗЬ С ЦЕЛЕВОЙ АУДИТОРИЕЙ
                    </h4>
                    <p class="text">
                        Даже если пока вы не занимаетесь СММ в Instagram, ваши клиенты точно являются его пользователями. Их количество может быть небольшим, и потребуется некоторое время, чтобы ваша аудитория выросла до значительного уровня. Но воспользуйтесь преимуществами того небольшого круга клиентов для продвижения профиля сейчас, чтобы сделать из них настоящих защитников бренда и лояльных клиентов. Пользователи Инстаграм увлечены и активны – они хотят взаимодействовать с вами и узнавать вас.    
                    </p>
                </div>
                <div class="col-md-12 mb-3">
                    <h4 class="title-text">
                        СОЗДАНИЕ ФИРМЕННОГО БРЕНДА
                    </h4>
                    <p class="text">
                        Даже при активном ведении страницы в инстаграм вы не можете рассчитывать на то, что каждый пользователь, посетивший ваш аккаунт, будет переходить на ваш сайт. Вы не можете добавлять ссылки в текст под фотографиями, единственный вариант – ставить ссылку в шапке профиля. Однако это также означает, что пользователи с большей вероятностью будут следить за вашей компанией и взаимодействовать с ней, потому что они знают, что вы не пытаетесь напрямую продать им что-либо. Вместо этого вы можете использовать платформу для создания своего бренда и продвижения в Инстаграм с нуля
                    </p>
                </div>
                <div class="col-md-12 mb-3">
                    <h4 class="title-text">
                        ТАРГЕТИРОВАННАЯ РЕКЛАМА
                    </h4>
                    <p class="text">
                        Как и на других популярных SMM-платформах, раскрутка инсты может происходить с помощью платной рекламы для бизнеса. И хотя продвижение поста может проходить успешно без вложений, эти рекламные функции могут быть эффективным способом раскрутки.    
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

        <div class="smm-table-advantage">
            <div class="container">
                <h2 class="title">
                    ПРЕИМУЩЕСТВА SMM-ПРОДВИЖЕНИЯ БИЗНЕСА У PUZZLE AGENCY
                </h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-4 d-flex justify-content-center">
                            <img src="" alt="" class="advantage-icon">
                        </div>
                        <h4 class="title-text text-center">
                            ПОСЛЕДНЕЕ СЛОВО ЗА ВАМИ.
                        </h4>
                        <p class="text text-center">
                            Наши специалисты разработают для вас стратегию маркетинга, учитывая все ваши рекомендации и пожелания. Мы дадим советы по поводу ведения бизнеса в Инстаграм, но будем основываться на вашем решении.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-4 d-flex justify-content-center">
                            <img src="" alt="" class="advantage-icon">
                        </div>
                        <h4 class="title-text text-center">
                            УВАЖАЕМ РЕПУТАЦИЮ.
                        </h4>
                        <p class="text text-center">
                            О каждой компании на рынке клиенты сформировывают свое впечатление. Мы продумаем каждый элемент вашего стиля в социальной сети Инстаграм, чтобы внешний вид аккаунта соответствовал вашим пожеланиям и ожиданиям вашей аудитории. Наши клиенты оставляют только положительные отзывы о продвижении их бизнеса в Instagram.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-4 d-flex justify-content-center">
                            <img src="" alt="" class="advantage-icon">
                        </div>
                        <h4 class="title-text text-center">
                            «БЕЛЫЕ» МЕТОДЫ ПРОДВИЖЕНИЯ СТРАНИЦЫ.
                        </h4>
                        <p class="text text-center">
                            Мы не используем программы для накрутки подписчиков или лайков. Для продвижения бизнеса в Инстаграм мы применяем встроенные функции социальной сети, которые позволят вам рекламировать ваш бренд без удара по репутации.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-4 d-flex justify-content-center">
                            <img src="" alt="" class="advantage-icon">
                        </div>
                        <h4 class="title-text text-center">
                            КОМФОРТ И ДОСТУПНОСТЬ.
                        </h4>
                        <p class="text text-center">
                            Цена на продвижение в Инстаграм приемлема для каждого владельца бизнеса. Мы не будем терять с вами контакт на протяжении всего периода продвижения, поэтому вы всегда сможете внести свои корректировки в маркетинговую стратегию и получить отклик.
                        </p>
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
                    <input type="submit" class="cyan-button weight-button" >
                </div>
            </div>
        </div>

        <div class="hint-wrapper">
            <div class="container">
                <div class="row">
                    <p class="hint pink-background text-center">
                        Вы можете заказать продвижение Инстаграм в Минске на сайте нашего агентства, чтобы начать привлекать новых клиентов и стать популярными в интернете!
                    </p>
                </div>
            </div>
        </div>

    </div>


<?php get_footer() ?>