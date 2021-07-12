<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--     <link rel="stylesheet" href="css/fonts.css">
    <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
        <link rel="preload" href="fonts/ProximaNova-Black.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="fonts/ProximaNova-Light.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="fonts/ProximaNova-Regular.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="fonts/ProximaNova-Extrabld.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="css/jcar.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
       <link rel="stylesheet" href="css/app.css">
</head>

<body>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <a href="#"><img class="header-top__logo" src="img/logo_main.png" alt=""></a>
                <div class="header-top-links">
                    <a class="header-top-links__phone"  href="tel:+0444667446">044 466 74 46</a>
                    <div class="header-top-links__links">
                        <a href="#" id="myBtn">Вход</a>
                        <span>/</span>
                        <a href="#" id="myBtn2">Регистрация</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-mobile">
        <div class="container">
            <div class="header-mobile-container">
                <div class="header-mobile__toggle js-toggle">
                    <div class="toggle__1"></div>
                    <div class="toggle__2"></div>
                    <div class="toggle__3"></div>
                </div>
                <img class="header-mobile__logo" src="img/mobile_logo_main.webp" alt="">

                <a href="#" class="btn btn--orange">Заказать</a>
            </div>
        </div>
    </div>

    <div class="header-main js-nav-mobile">
        <div class="container">
            <div class="header-main-wrapper">
                <nav class="header-main-nav">
                    <ul>
                        <li><a class="header-main-nav__link" href="catalog.html">eBay</a></li>
                        <li><a class="header-main-nav__link" href="amazon.html">Amazon</a></li>
                        <li><a class="header-main-nav__link" href="tarif.html">Цены</a></li>
                        <li><a class="header-main-nav__link" href="mf.html">MF</a></li> <!-- header-main-nav__link--active -->
                        <li><a class="header-main-nav__link" href="shops.html">Магазины</a></li>
                        <li><a class="header-main-nav__link" href="contacts.html">Контакты</a></li>
                    </ul>
                </nav>
                <div class="header-main-panel">
                    <div class="header-main-panel__links">
                        <a href="calculate.html" class="link-calc">Расчет доставки</a>
                        <a href="faq.html" class="link-support">Помощь</a>
                    </div>
                    <a href="open-shop.html" class="btn btn--orange">Заказ по ссылке</a>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="my-adress">
    <section class="course">
        <div class="container">
            <div class="flex">
              <div class="for-m">
                <img src="img/i-icon.svg" alt="">
                <span class="m-title">Курсы валют:</span>
                  </div>
                <p>USD: <span>28.33</span> грн</p>
                <p>EUR: <span>33.44</span> грн</p>
                <p>GBR: <span>36.76</span> грн</p>
            </div>
        </div>
    </section>
    <section class="tabss container">
        <div class="top">
            <div class="tabs-1">
                <a href="" class="active">Заказы</a>
                <a href=""><span class="for-desc">Мой почтовый ящик</span><span class="for-mob">MF</span></a>
                <a href=""><span class="for-desc">Кошелек</span><span class="for-mob">Баланс</span></a>
                <a href="">Профиль</a>
            </div>
            <div class="my-money">
                <p class="count"><img src="img/carts.png">395.05 UAH<br>
                    <span>= 13.87 $ = 11.75 $ = 10.69 £ <span class="tooltip"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext zak">Указываются валютные эквиваленты вашего баланса по текущему курсу</span>
                            </span></span></p>
            </div>
        </div>
        <div class="hrefs">
            <a class="active" href="">Добавить новые посылки</a>
            <a href="">Статус отправленных</a>
            <a href="">Архив</a>
            <a href="">Мои адреса и тарифы</a>
            <a href="">Правила</a>
            <a href="">Запрещенные товары</a>
        </div>
        <h2 class="b-title bold img">Мои адреса и тарифы</h2>
        <!-- <p class="adr-p">Отправляйте свои заказы на эти адреса</p> -->
        <div class="tabs">
            <div class="tabs__nav">
                <a class="tabs__link tabs__link_active" href="#content-1"><img src="img/flag-usa.png" /> США</a>
                <a class="tabs__link" href="#content-2"><img src="img/flag-germ.png" /> Германия</a>
                <a class="tabs__link" href="#content-3"><img src="img/flag-gb.png" /> Великобритания</a>
                <a class="tabs__link" href="#content-4"><img src="img/flag-china.png" /> Китай</a>
                <a class="tabs__link" href="#content-5"><img src="img/flag-pol.png" /> Польша</a>
                <a class="tabs__link" href="#content-6"><img src="img/flag-it.png" /> Италия</a>
            </div>
            <div class="tabs__content">
                <div class="tabs__pane tabs__pane_show" id="content-1">
                    <div class="row">
                        <div class="col-6">
                            <p class="adress-title">Основной адрес <span class="tooltip"><img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext">Указывайте этот адрес в форме Shipping address. В качестве Billing address нужно указывать ваш платежный адрес в Украине</span>
                            </span></p>
                            <ul>
                                <li><span>Все товары кроме электроники свыше 200$</span></li>
                                <li><span>Name:</span> BIG-BASKET/Ваша фамилия</li>
                                <li><span>Address line 1:</span> 78 McCullough Dr</li>
                                <li><span>Address line 2:</span> UA7447 (авиа) или UA19817 (море до 100€)</li>
                                <li><span>City:</span> New Castle</li>
                                <li><span>Zip:</span> 19726-2079</li>
                                <li><span>State:</span>DE (Delaware)</li>
                            </ul>
                            <img src="img/clotnes.svg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="adress-title">Электроника свыше 200$ <span class="tooltip"><img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext">Указывайте этот адрес в форме Shipping address. В качестве Billing address нужно указывать ваш платежный адрес в Украине</span>
                            </span></p>
                            <ul>
                                <li><span>Name:</span> Serhii Kuveko</li>
                                <li><span>Address 1:</span> 609 Carson Dr</li>
                                <li><span>Address 2:</span> 01696UA</li>
                                <li><span>City:</span> Bear</li>
                                <li><span>State:</span> DE</li>
                                <li><span>ZIP:</span> 19701</li>
                                <li><span>На этот адрес ТОЛЬКО авиа</span></li>
                            </ul>
                            <img src="img/tv.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tabs__pane" id="content-2">
                    <div class="row">
                        <div class="col-6">
                            <p class="adress-title">2Основной адрес</p>
                            <ul>
                                <li><span>Все товары кроме электроники свыше 200$</span></li>
                                <li><span>Name:</span> BIG-BASKET/Ваша фамилия</li>
                                <li><span>Address line 1:</span> 78 McCullough Dr</li>
                                <li><span>Address line 2:</span> UA7447 (авиа) или UA19817 (море до 100€)</li>
                                <li><span>City:</span> New Castle</li>
                                <li><span>Zip:</span> 19726-2079</li>
                                <li><span>State:</span>DE (Delaware)</li>
                            </ul>
                            <img src="img/clotnes.svg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="adress-title">Электроника свыше 200$</p>
                            <ul>
                                <li><span>Name:</span> Serhii Kuveko</li>
                                <li><span>Address 1:</span> 609 Carson Dr</li>
                                <li><span>Address 2:</span> 01696UA</li>
                                <li><span>City:</span> Bear</li>
                                <li><span>State:</span> DE</li>
                                <li><span>ZIP:</span> 19701</li>
                                <li><span>На этот адрес ТОЛЬКО авиа</span></li>
                            </ul>
                            <img src="img/tv.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tabs__pane" id="content-3">
                    <div class="row">
                        <div class="col-6">
                            <p class="adress-title">3Основной адрес</p>
                            <ul>
                                <li><span>Все товары кроме электроники свыше 200$</span></li>
                                <li><span>Name:</span> BIG-BASKET/Ваша фамилия</li>
                                <li><span>Address line 1:</span> 78 McCullough Dr</li>
                                <li><span>Address line 2:</span> UA7447 (авиа) или UA19817 (море до 100€)</li>
                                <li><span>City:</span> New Castle</li>
                                <li><span>Zip:</span> 19726-2079</li>
                                <li><span>State:</span>DE (Delaware)</li>
                            </ul>
                            <img src="img/clotnes.svg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="adress-title">Электроника свыше 200$</p>
                            <ul>
                                <li><span>Name:</span> Serhii Kuveko</li>
                                <li><span>Address 1:</span> 609 Carson Dr</li>
                                <li><span>Address 2:</span> 01696UA</li>
                                <li><span>City:</span> Bear</li>
                                <li><span>State:</span> DE</li>
                                <li><span>ZIP:</span> 19701</li>
                                <li><span>На этот адрес ТОЛЬКО авиа</span></li>
                            </ul>
                            <img src="img/tv.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="usl">
      <div class="container">
        <h2 class="title ta-left">Условия и тарифы</h2>
        <div class="item-us">
          <img src="img/my-1.png" alt="">
          <div class="text">
            <p class="fwb">Доставка:</p>
            <ul>
	<li>авиа 9$/кг,</li>
	<li>морем 50 дней 4$/кг,</li>
	<li>морем 28 дней 6$/кг</li>
</ul>
          </div>
        </div>
        <div class="item-us">
          <img src="img/my-2.png" alt="">
          <div class="text">
            <p class="fwb">Комиссия за отправку одной посылки: 8$.</p>
            <p>Каждой последующей 5$ (в одном рейсе).</p>
          </div>
        </div>
        <div class="item-us">
          <img src="img/my-3.png" alt="">
          <div class="text">
            <p class="fwb">Дополнительно оплачиваются брокерские услуги в размере 10% от инвойсовой стоимости в случаях: </p>
            <ul>
  <li>Если стоимость товаров в посылке превышает 100 евро </li>
  <li>Если стоимость товаров менее 100 евро, но внутри: электроника и комплектующие, часы, витамины, БАДы, косметика, духи, очки, медицинские препараты, стоматологические материалы, сантехника, спортивная экипировка, украшения или более 2 единиц одинакового товара (коммерческий груз)</li>
</ul>
          </div>
        </div>
      </div>

    </section>
    <section class="usl">
      <div class="container shadow">
        <h2 class="title ta-left">Примечания и условия</h2>
        <div class="item-us">
          <div class="text">
            <ol>
              <li><span>1. </span> При доставке морем таможня может задержать коммерческие, габаритные и дорогие грузы. Пошлины оплачиваются получателем согласно законодательству Украины. Предварительно оценить риски, можно скинув ссылку товара по адресу: sales@big-basket.net
</li>
              <li><span>2. </span> Вы можете заказать экспресс-доставку морем по тарифу 6$/кг. Если срок доставки с момента отправки контейнера до прибытия в Украину превысит 28 дней, то будет произведен перерасчет по стандартному морскому тарифу 4$/кг. Для выбора этого способа доставки, уведомите нас сразу после совершения заказа в магазине.
</li>
              <li><span>3. </span> Мы не пересылаем товары, запрещенные к авиа-перевозкам, а также запрещенные к ввозу на территорию Украины. Более подробно, читайте здесь. </li>
              <li><span>4. </span> Доставка литиевых батарей считается по 14$ / кг из-за необходимости дополнительной упаковки по правилам авиа-перевозок. Доставка БАДов весом менее 20 кг не производится.
</li>
              <li><span>5. </span> Минимальная доставка морем 16$ (включено 4 кг)
</li>
              <li><span>6. </span> Заказы свыше 50 кг заранее согласовывайте с нами;
</li>
              <li><span>7. </span> На габаритные посылки может насчитываться пеня за объемный вес.</li>
            </ol>
          </div>

        </div>
      </div>
    </section>
</main>


<footer class="footer-section">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-coll footer-coll--logo-coll">
                <img  class="footer-coll__logo" src="img/logo_footer.png" alt="">
                <!-- <p class="footer-coll__copyright">Дизайн сайта: FRONTMEN</p> -->
                <p class="footer-coll__copyright">© 2009-2021 Big-Basket Все права защищены</p>
            </div>
            <div class="footer-coll">
                <p class="footer-coll__title js-toggle-footer-menu">Навигация</p>
                <ul>
                    <li><a class="footer-coll__link" href="#">Схема работы</a></li>
                    <li><a class="footer-coll__link" href="#">Тарифы</a></li>
                    <li><a class="footer-coll__link" href="#">eBay</a></li>
                    <li><a class="footer-coll__link" href="#">Amazon</a></li>
                </ul>
            </div>

            <div class="footer-coll">
                <p class="footer-coll__title js-toggle-footer-menu">Блог</p>
                <ul>
                    <li><a class="footer-coll__link" href="#">Покупаем выгодно с 6pm</a></li>
                    <li><a class="footer-coll__link" href="#">Как сделать заказ в каталоге Ebay и Amazon</a></li>
                    <li><a class="footer-coll__link" href="#">Как купить товары на Ebay в Германии</a></li>
                </ul>
            </div>

            <div class="footer-coll">
                <p class="footer-coll__title js-toggle-footer-menu">Контакты</p>
                <div class="footer-coll__content">
                    <p><b>Офис: </b> <a href="tel:+380444667446">044 466 74 46</a></p>
                    <p><b>Моб: </b> <a href="tel:+380639530227">063-953-0227</a>,  <a href="tel:+38097-058-0-558">097-058-0-558</a></p>
                    <p><b>Email: </b> <a href="mailto:sales@big-basket.net">sales@big-basket.net</a></p>
                    <p><b>Режим работы: </b> <span>пн-пт 09:00-18:00</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="myModal" class="modal">


  <div class="modal-content">
    <div class="modal-inner">
      <span class="close close1">&times;</span>
      <h2>Авторизация</h2>
      <form action="">
        <input type="email" required placeholder="Ваш e-mail:">
        <input type="password" required placeholder=Пароль">
        <a href="">Забыли пароль?</a>
        <a href=""> Регистрация</a>
        <button type="submit">Войти</button>
      </form>
  </div>
</div>

</div>

<div id="myModal2" class="modal">


  <div class="modal-content">
    <div class="modal-inner">
      <span class="close close2">&times;</span>
      <h2>Регистрация</h2>
      <form action="" class="reg">
        <input type="email" required placeholder="ФИО:">
        <input type="email" required placeholder="Ваш телефон:">
        <input type="email" required placeholder="Ваш e-mail:">
        <input type="password" required placeholder=Пароль">
        <div>
          <input type="checkbox" id="cb1"> <label for="cb1">Я согласен с <a href="#">Условиями пользованием сорвиса</a></label>
        </div>
        <div>
          <input type="checkbox" id="cb2"> <label for="cb2">Подписаться на новости и акции</label>
        </div>
        <button type="submit">Зарегистрироваться</button>
      </form>
  </div>
</div>

</div>




<!-- <script src="js/jquery-3.4.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.knob.min.js"></script>
    <script src="js/jquery.redcountdown.js"></script>
    <script>
        $(document).ready(function() {
            var nowDate = new Date();
            var endDate = new Date(nowDate.getTime()+60*40*20);
            $('.js-timer-sale').redCountdown({preset: "custom", end:  endDate.getTime(), now:  nowDate.getTime()});


            $('.js-owl-carousel').owlCarousel({
                loop:true,
                nav:true,
                navText : ["", ""],
                dots: false,
                autoHeight: true,
                margin:20,
                smartSpeed: 3000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                }
            });

        });
    </script>
    <script>
 var d = new Date(Date.now());
 month = ['января', 'февраля', 'марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'];

d.setDate(d.getDate() + 1);

str = d.getDate()+' '+month[d.getMonth()];
document.querySelector('.nextWebinar').textContent = str;
</script>
<!--  <script src="js/jquery.nselect.min.js"></script>
    <script>
        $('.js-select').nSelect();
    </script>
    <script src="js/jq-car.js"></script> -->
<script src="js/main.js"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
<script src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</body>
</html>

