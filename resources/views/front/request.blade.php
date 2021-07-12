
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

<main class="request">

    <div class="container inn">
  <h1 class="title ta-left">Заказ <span class="m-hidden">товара </span>по ссылке<span class="m-hidden sec-ti">Заполните форму и мы выставим вам счет в течении 1 рабочего часа</span></h1>
  <p class="d-hidden sec-ti">Заполните форму и мы выставим вам счет в течении 1 рабочего часа</p>

          <div class="tabs">
            <div class="tabs__nav">
                <a class="tabs__link tabs__link_active" href="#content-1">Быстро</a>
                <a class="tabs__link" href="#content-2">С расчетом</a>
            </div>
            <div class="tabs__content">
                <div class="tabs__pane tabs__pane_show" id="content-1">

                    <form action="">
                        <div id="my_field1">
                          <h2>Шаг 1. Добавьте ссылку на товар </h2>
                        <div class="rows">
                            <div class="col-md-7">
                                <input type="text" class="req-i" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="req-i" placeholder="Укажите цвет, размер, кол-во, модель.">
                            </div>
                        </div>

                       </div>
                       <p class="addnew1">+ Добавить еще ссылку</p>
                       <h2>Шаг 2. Напишите уточнения или вопрос</h2>
                       <div class="texta">
                           <textarea name="comment" id="" placeholder="Комментарий к заказу"></textarea>
                       </div>

                      <h2>Шаг 3. Укажите свои контакты</h2>
                       <div class="cols">
                           <input type="text" class="req-i2" placeholder="Ваш e-mail">
                           <input type="text" class="req-i2" placeholder="Ваш номер телефона">
                       </div>
                       <button class="btn btn--blue-gradient" type="submit">Отправить</button>
                    </form>


                </div>
                <div class="tabs__pane" id="content-2">
                    <form action="">
                        <div class="top-select">
  <h2>Магазин</h2>
                          <div class="rows">
                            <div class="col-md-7">
                              <input type="text" name="" value="" placeholder="Укажите название магазина">
                            </div>
                            <div class="col-md-5">
                              <select class="choose-country" name="">
                                <option value="">США</option>
                                <option value="">Канада</option>
                                <option value="">Бразилия</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="items-req"  id="my_field2">
                            <h2>Товары</h2>
                          <div>
                            <div class="item-one">
                              <input type="text" class="href-i" name="" value="" placeholder="Вставьте ссылку на товар">
                              <label  for="">
                                <input class="price-l" type="text" name="" value="" placeholder="Цена на сайте">
                                <span>$</span>
                              </label>
                              <label class="count-l" for="">
                                <input type="text" name="" value="" placeholder="1">
                                <span>шт</span>
                              </label>
                              <input class="color-i" type="text" name="" value="" placeholder="Размер / Цвет">
                              <div class="flex-m"><button type="button" name="button"><img src="img/delete.svg" alt=""></button><span class="d-hidden"> Удалить</span></div>
                            </div>
                            
                          </div>
                           
                        </div>
<p class="addnew2">+ Добавить еще товар</p>
                        <div class="req-sum">

                          <div class="elem">
                            <p>Ориентировочный вес товара (ов):</p>
                            <span>(введите число)</span>
                            <label>
                              <input type="text" name="" value="" placeholder="1">
                              <span>кг</span>
                            </label>
                          </div>
                          <div class="elem">
                            <p>Стоимость доставки по стране магазина:</p>
                            <span>(если не уверены, оставьте поле пустым)</span>
                            <label>
                              <input type="text" name="" value="" placeholder="0">
                            </label>
                          </div>
                        </div>
                          <h2>Доставка</h2>
                        <table class="req-table">
                          <tbody>
                            <tr class="m-hidden">
                              <td>Способ доставки</td>
                              <td>Сроки с момента отправки с зарубежного склада</td>
                              <td>Сроки с момента оплаты </td>
                              <td>Тариф</td>
                            </tr>
                            <tr class="d-hidden blue-table">
                              <td colspan="4">Способ доставки</td>
                            </tr>
                            <tr>
                              <td>
                                <input class="custom-radio" type="radio" id="color-1" name="color" value="indigo">
                                <label for="color-1">Авиа<span class="d-hidden">, <span class="bold">9$/кг</span></span></label>
                              </td>
                              <td><span class="d-hidden">Сроки с момента отправки с зарубежного склада: </span>4-6 дней</td>
                              <td><span class="d-hidden">Сроки с момента оплаты: </span>1-3 недели</td>
                              <td class="m-hidden bold">9$/кг</td>
                            </tr>
                            <tr>
                              <td>
                                <input class="custom-radio" type="radio" id="color-2" name="color" value="indigo">
                                <label for="color-2">Морем<span class="d-hidden">, <span class="bold">4$/кг</span></span></label>
                              </td>
                              <td><span class="d-hidden">Сроки с момента отправки с зарубежного склада: </span>3-5 недель</td>
                              <td><span class="d-hidden">Сроки с момента оплаты: </span>≈ 4-6 недель</td>
                              <td class="m-hidden bold">4$/кг</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="checkboxes-req">
                        <div class="chckbx">
          <input type="checkbox" id="cb1"> <label for="cb1">Есть ли в этом заказе: электроника / часы / очки / украшения / более 2 единиц одинакового товара?<span class="tooltip"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext zak">Указываются валютные эквиваленты вашего баланса по текущему курсу</span>
                            </span></label>
        </div>
        <div class="chckbx">
          <input type="checkbox" id="cb2"> <label for="cb2">Проверить содержимое посылки на соответствие описанию (электронику на включение/выключение) + 5$. <span class="tooltip"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext zak">Указываются валютные эквиваленты вашего баланса по текущему курсу</span>
                            </span></label>
        </div>
        <div class="chckbx">
          <input type="checkbox" id="cb3"> <label for="cb3"><div>Дополнительная упаковка. В зависимости от габаритов + 5-10$<br><span class="grau-tra">(сумма будет уточнена по факту переупаковки)</span></div>
            <span class="tooltip"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext zak">Указываются валютные эквиваленты вашего баланса по текущему курсу</span>
                            </span>
            <br>
</label>
        </div>
      </div>
      <div class="req-math">
        <h2 class="mini-title">Расчет стоимости заказа</h2>
        <table>
          <tbody>
            <tr>
              <td>Общая стоимость всех товаров:</td>
              <td>0 $</td>
            </tr>
            <tr>
              <td>Стоимость доставки по стране магазина:</td>
              <td>0 $</td>
            </tr>
            <tr>
              <td>Стоимость доставки в Украину:</td>
              <td>8 $</td>
            </tr>
            <tr>
              <td>Брокерские услуги (10%):</td>
              <td>0 $</td>
            </tr>
            <tr>
              <td>Комиссия Big-Basket:</td>
              <td>10 $</td>
            </tr>
            <tr>
              <td>Скидка:</td>
              <td>0 $</td>
            </tr>
            <tr>
              <td>Предварительная стоимость заказа:</td>
              <td>18 $</td>
            </tr>
          </tbody>
        </table>
      </div>
      <h2>Контактная информация</h2>
                             <div class="texta">
                           <textarea name="comment" id="" placeholder="Комментарий к заказу"></textarea>
                       </div>

                      <br>
                       <div class="cols">
                           <input type="text" class="req-i2" placeholder="Ваш e-mail">
                           <input type="text" class="req-i2" placeholder="Ваш номер телефона">
                       </div>
                       <button class="btn btn--blue-gradient" type="submit">Отправить на проверку</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
</main>
<!-- <script>
document.getElementById("addnew").onclick = function (){
document.getElementById("my_field").innerHTML += "<div class=\"my_block\"><label>Значение:</label><input type=\"text\" class=\"val\" name=\"val\" value=\"1,0\" /></div>";
}
</script> -->
<script>
   let field1 = document.getElementById("my_field1");
 document.addEventListener("click", function(e) {
       if (e.target.className=="addnew1") {
      let label1 = document.createElement('div');
        label1.innerHTML = '<div class="rows"><div class="col-md-7"><input type="text" class="req-i" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/"></div><div class="col-md-5"><input type="text" class="req-i" placeholder="Укажите цвет, размер, кол-во, модель."></div></div>';
        field1.append(label1);
   }
 });
</script>
<script>
   let field2 = document.getElementById("my_field2");
 document.addEventListener("click", function(e) {
       if (e.target.className=="addnew2") {
      let label2 = document.createElement('div');
        label2.innerHTML = '<div class="item-one"><input type="text" class="href-i" name="" value="" placeholder="Вставьте ссылку на товар"><label  for=""><input class="price-l" type="text" name="" value="" placeholder="Цена на сайте"><span>$</span></label><label class="count-l" for=""><input type="text" name="" value="1" placeholder="1"><span>шт</span></label><input class="color-i" type="text" name="" value="" placeholder="Размер / Цвет"><button type="button" name="button"><img src="img/delete.svg" alt=""></button></div>';
        field2.append(label2);
   }
 });
</script>

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




<script src="js/jquery-3.4.1.smin.js"></script>

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
