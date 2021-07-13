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
        <link rel="preload" href="{{asset('myassets')}}/fonts/ProximaNova-Black.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{asset('myassets')}}/fonts/ProximaNova-Light.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{asset('myassets')}}/fonts/ProximaNova-Regular.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{asset('myassets')}}/fonts/ProximaNova-Extrabld.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{asset('myassets')}}/css/jcar.css">
     <link rel="stylesheet" href="{{asset('myassets')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('myassets')}}/css/owl.theme.default.min.css">
       <link rel="stylesheet" href="{{asset('myassets')}}/css/app.css">
</head>



<body>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <a href="/"><img class="header-top__logo" src="{{asset('myassets')}}/img/logo_main.png" alt=""></a>
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
                <img class="header-mobile__logo" src="{{asset('myassets')}}/img/mobile_logo_main.webp" alt="">

                <a href="#" class="btn btn--orange">Заказать</a>
            </div>
        </div>
    </div>

    <div class="header-main js-nav-mobile">
        <div class="container">
            <div class="header-main-wrapper">
                <nav class="header-main-nav">
                    <ul>





                        <li><a class="header-main-nav__link" href="{{route('ebay')}}">eBay</a></li>
                        <li><a class="header-main-nav__link" href="{{route('amazon')}}">Amazon</a></li>
                        <li><a class="header-main-nav__link header-main-nav__link--active" href="{{route('tarif')}}">Цены</a></li>
                        <li><a class="header-main-nav__link" href="{{route('mf')}}">MF</a></li> <!-- header-main-nav__link--active -->
                        <li><a class="header-main-nav__link" href="{{route('shops')}}">Магазины</a></li>
                        <li><a class="header-main-nav__link" href="{{route('contacts')}}">Контакты</a></li>
                    </ul>
                </nav>
                <div class="header-main-panel">
                    <div class="header-main-panel__links">
                        <a href="{{route('calculate')}}" class="link-calc">Расчет доставки</a>
                        <a href="{{route('faq')}}" class="link-support">Помощь</a>
                    </div>
                    <a href="{{route('openShop')}}" class="btn btn--orange">Заказ по ссылке</a>
                </div>
            </div>
        </div>
    </div>
</header>

  <main class="price-section light-blue tarif">
        <section class="container price-container">
            <h1 class="title ta-left">Тарифы на выкуп и доставку</h1>
            <div class="price-list-container price-list-container--with-icon">
                <h2 class="price-list-container__title price-list-container__title--icon price-list-container__title--auto-icon">Доставка в Украину <span>1</span></h2>
                <div class="price-list first-price">
                    <div class="price-item price-item--with-icon">
                        <p class="price-item__wrap-icon"><img class="price-item__icon" src="{{asset('myassets')}}/img/flag/usa.webp" alt=""> <span class="price-item__desc">из США авиа:</span></p> <span class="price-item__price">9$/кг <i>(или 1$ за каждые 100 грамм)</i></span>
                    </div>
                    <div class="price-item price-item--with-icon">
                        <p class="price-item__wrap-icon"><img class="price-item__icon" src="{{asset('myassets')}}/img/flag/usa.webp" alt=""> <span class="price-item__desc">из США морем 50 дней:</span></p> <span class="price-item__price">4$/кг</span>
                    </div>
                    <div class="price-item price-item--with-icon">
                        <p class="price-item__wrap-icon"><img class="price-item__icon" src="{{asset('myassets')}}/img/flag/usa.webp" alt=""> <span class="price-item__desc">из США морем 30 дней:</span></p> <span class="price-item__price">6$/кг</span>
                    </div>
                    <div class="price-item price-item--with-icon">
                        <p class="price-item__wrap-icon"><img class="price-item__icon" src="{{asset('myassets')}}/img/flag/germany.webp" alt=""> <span class="price-item__desc">из Германии:</span></p> <span class="price-item__price">3€/кг <i>(минимум 6€)</i></span>
                    </div>
                    <div class="price-item price-item--with-icon">
                        <p class="price-item__wrap-icon"><img class="price-item__icon" src="{{asset('myassets')}}/img/flag/uk.webp" alt=""> <span class="price-item__desc">из Британии:</span></p> <span class="price-item__price">4£/кг <i>(минимум 7£)</i></span>
                    </div>
                    <div class="price-item price-item--with-icon">
                        <p class="price-item__wrap-icon"><img class="price-item__icon" src="{{asset('myassets')}}/img/flag/spanish.webp" alt=""> <span class="price-item__desc">из Испании:</span></p> <span class="price-item__price">3€/кг <i>(минимум 5€)</i></span>
                    </div>
                    <div class="price-item price-item--with-icon">
                        <p class="price-item__wrap-icon"><img class="price-item__icon" src="{{asset('myassets')}}/img/flag/italy.webp" alt=""> <span class="price-item__desc">из Италии:</span></p> <span class="price-item__price">3€/кг <i>(минимум 5€)</i></span>
                    </div>
                    <div class="price-item price-item--with-icon">
                        <p class="price-item__wrap-icon"><img class="price-item__icon" src="{{asset('myassets')}}/img/flag/chinese.webp" alt=""> <span class="price-item__desc">из Китая:</span></p> <span class="price-item__price">12$/кг</span>
                    </div>
                </div>
            </div>
            <div class="price-list-container">
                <h2 class="price-list-container__title price-list-container__title--icon price-list-container__title--price-icon">Комиссия Big-Basket за выкуп товаров <span class="second-span">2</span></h2>
                <div class="price-list">
                    <p class="price-item"><span class="price-item__desc">Стандартная комиссия:</span><span class="price-item__price">10% <i>от стоимости товара с доставкой на наш склад за рубежом</i></span></p>
                    <p class="price-item"><span class="price-item__desc">Минимальная комиссия:</span><span class="price-item__price">5$/ 5€/ 5£</span></p>
                    <p class="price-item"><span class="price-item__desc">Максимальная комиссия (при стоимости до 4 000$ / 3 000 €):</span><span class="price-item__price">200$ / 150€/£</span></p>
                    <p class="price-item"><span class="price-item__desc">Льготная комиссия на дорогие заказы (свыше 4 000$ / 3 000€):</span><span class="price-item__price">5%</span></p>
                </div>
            </div>
            <div class="price-list-container">
                <h2 class="price-list-container__title price-list-container__title--icon price-list-container__title--mail-icon">Mail Forwarding <span class="tooltip"> <img src="{{asset('myassets')}}/img/q-icon.svg" alt="">
                                <span class="tooltiptext">Если вы умеете совершать покупки самостоятельно, то мы предоставим вам адреса наших складов за рубежом</span>
                            </span></h2>
                <div class="price-list">
                    <p class="price-item"><span class="price-item__desc">Прием одной вашей посылки на наш склад:</span><span class="price-item__price">3$</span></p>
                    <a class="price-list__link" href="{{route('mf')}}"> Подробнее об услуге</a>
                </div>
            </div>
            <div class="price-list-container">
                <h2 class="price-list-container__title price-list-container__title--icon price-list-container__title--protect-icon">Дополнительные услуги</h2>
                <div class="price-list">
                    <p class="price-item"><span class="price-item__desc">Ваш личный адрес для покупок за рубежом:</span><span class="price-item__price">Бесплатно</span></p>
                    <p class="price-item"><span class="price-item__desc">Объединение посылок:</span><span class="price-item__price">Бесплатно</span></p>
                    <p class="price-item"><span class="price-item__desc">Проверка содержимого посылки на соответствие описанию:</span><span class="price-item__price">5$</span></p>
                    <p class="price-item"><span class="price-item__desc">Проверка электроники на включение/выключение:</span><span class="price-item__price">5$</span></p>
                    <p class="price-item"><span class="price-item__desc">Дополнительная упаковка:</span><span class="price-item__price"> 5-10$ <i>(в зависимости от габаритов)</i></span></p>
                </div>
            </div>
        </section>
    </main>
    <section class="example-price-section">
        <div class="container example-price-container">
            <img class="example-price-section__img for-desc" src="{{asset('myassets')}}/img/section/e_price/pant.webp" alt="">
            <div class="e-price-wrap">
                <h2 class="title ta-left e-price__title">Пример</h2>
                <p class="e-price__desc">Вы хотите купить джинсы в США, стоимостью 100$ и весом 0,5 кг. Расчет будет следующий:</p>
                <img class="example-price-section__img for-xs" src="{{asset('myassets')}}/img/section/e_price/pant.webp" alt="">
                <div class="e-price-list">
                    <p class="e-price-list__item"><span>100$</span></p>
                    <p class="e-price-list__item e-price-list__item--separate-plus"><span>5$</span> <i>Доставка в Украину (1$ за 100 гр, но не более 8$ за 1 кг)</i></p>
                    <p class="e-price-list__item e-price-list__item--separate-plus"><span>10$</span> <i>Наша комиссия (10%)</i></p>
                    <p class="e-price-list__item e-price-list__item--separate-is"><span>115$</span> <i>Итого, с доставкой в Украину</i></p>
                </div>
                <a href="#" class="advantage-section__btn tarif-btn btn btn--blue-gradient" data-aos="fade-down">Получить рассчет стоимости заказа</a>
            </div>
        </div>
    </section>
    <section class="text-section">
        <div class="container text-container">
            <ol>
                <li>Комиссия взымается со стоимости товара, стоимости его доставки на наш склад (если необходимо) и налога на продажу (если он предусмотрен). Комиссия взымается один раз за любое количество товаров от одного продавца/магазина. Если товары покупаются у разных продавцов на eBay, Amazon или разных магазинах, то комиссия взымается отдельно за покупку от каждого продавца.</li>
                <li>Тарифы указаны для фактического веса. Они могут быть выше, если объемный вес посылки превышает фактический (негабаритные товары). Помимо доставки к заказу могут начисляться расходы на брокерские услуги. Если таможенная стоимость товара превышает установленный законодательством лимит в 100€, то к заказу прибавляются расходы на брокерские услуги. Таможенная стоимость может определяться без учета скидок от магазина. Для доставки из США, Великобритании и Германии электроники, часов, очков, витаминов, украшений, косметики и средств гигиены, спортивной экипировки, музыкальных инструментов, продуктов питания, медицинских товаров, сантехники и коммерческих партий стоимостью до 100€ также начисляются брокерские услуги. Доставка по Украине оплачивается отдельно при получении (Новая почта, курьер). Возможен самовывоз со склада в Киеве (бесплатно). Доставка продуктов питания, БАДов и витаминов тарифицируется по 10$/кг </li>
            </ol>
        </div>
    </section>
    <section class="link-form-section">
        <div class="container">
            <div class="link-form-section-wrapper">
                <div class="link-form-tab">
                    <label class="link-form-tab__item link-form-tab__item--active" for="link"> Заказать по ссылке</label>
                    <a class="link-form-tab__item" href="#">Каталог еВау</a>
                    <a class="link-form-tab__item" href="#">Получить адрес в США</a>
                </div>
                <form class="link-form" action="#">
                    <input class="link-form__input" type="text" name="link" id="link" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/">
                    <button class="link-form__btn btn btn--orange" type="submit">Заказать этот товар</button>
                </form>
            </div>
        </div>
    </section>




<footer class="footer-section">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-coll footer-coll--logo-coll">
                <img  class="footer-coll__logo" src="{{asset('myassets')}}/img/logo_footer.png" alt="">
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
        <input type="password" required placeholder="Пароль">
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
        <input type="password" required placeholder="Пароль">
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

    <script src="{{asset('myassets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('myassets')}}/js/jquery.knob.min.js"></script>
    <script src="{{asset('myassets')}}/js/jquery.redcountdown.js"></script>
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
<script src="{{asset('myassets')}}/js/main.js"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
<script src="{{asset('myassets')}}/js/jquery.flexslider.js"></script>
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
