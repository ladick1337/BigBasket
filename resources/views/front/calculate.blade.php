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

   <main class="main-content light-blue">
        <section>
            <div class="container">
                <div class="calculate-section">
                    <h1 class="calculate-section__title  title ta-left"><img src="img/calc-icon.svg" alt="">Расчет доставки</h1>
                    <div class="calculate-row">
                        <label class="calculate-row__label label" for="from">Местонахождение товара (ов): </label>
                            <select class="calculate-row__select js-select" name="neworder[order][country_from]">
                                <option value="usa" code="128" selected="selected">США</option>
                                <option value="ger" code="12">Германия</option>
                                <option value="gbr" code="10">Великобритания</option>
                                <option value="0" code="0">Другая страна</option>
                            </select>
                    </div>

                    <div class="calculate-row">
                        <label class="calculate-row__label label" for="price">Стоимость товара (ов): </label>
                        <input class="calculate-row__input input" id="price" name="price" type="text"  placeholder="500 грн."><span> грн</span>
                    </div>
                    <div class="calculate-row">
                        <label class="calculate-row__label label" for="from">Ориентировочный вес товара (ов) в килограммах: </label>
                        <input class="calculate-row__input input" id="from" name="massa" type="text"  placeholder="5 кг"><span> кг</span>
                    </div>
                    <div class="calculate-row calculate-row--bottom">
                        <button class="calculate__btn btn btn--blue-gradient">Рассчитать</button>
                        <p class="calculate__label calculate__label--result">Ориентировочная стоимость с доставкой в Украину: <span class="tooltip d-hidden"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext">Указанная сумма является ориентировочной, т.к. зависит от правильности заполнения формы. Чтобы получить точный рассчет стоимости заказа, оставьте заявку и мы сделаем вам рассчет стоимости.</span>
                            </span><span class="bold">500 грн</span> <span class="tooltip m-hidden"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext">Указанная сумма является ориентировочной, т.к. зависит от правильности заполнения формы. Чтобы получить точный рассчет стоимости заказа, оставьте заявку и мы сделаем вам рассчет стоимости.</span>
                            </span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

        <section class="link-form-section light-gray">
        <div class="container">
            <h2 class="link-form-title title">Скиньте нам ссылку и мы выставим счет</h2>
            <div class="link-form-section-wrapper">
                <form class="link-form" action="#">
                    <input  class="link-form__input" type="text" name="link" id="link" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/">
                    <button class="link-form__btn btn btn--orange" type="submit">Заказать этот товар</button>
                </form>
            </div>
        </div>
    </section>





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
 <script src="js/jquery.nselect.min.js"></script>
    <script>
        $('.js-select').nSelect();
    </script>
    <!-- <script src="js/jq-car.js"></script> -->
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
