
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
                        <li><a class="header-main-nav__link header-main-nav__link--active" href="shops.html">Магазины</a></li>
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


<div class="light-blue-fon">
  <div class="container">
    <div class="breadcrumbs">
      <a href="#" class="crumb">
        <span class="text">Главная </span>
      </a>
      <a href="#" class="crumb">
        <span class="text">Блог</span>
      </a>
      <span class="crumb">6pm доставка в Украину</span>
    </div>
  </div>
  <main class="container shop-content">
    <section class="shop-first">
      <div class="h1-block">
        <h1 class="title title-open-shop ta-left">www.romwe.com доставка в Украину<img src="img/shop-logo.png" alt=""></h1>
        <img src="" alt="" class="shop-logo">
      </div>
      <h2 class=".price-list-container__title"></h2>
      <p class="mini-title bold">Как купить?</p>
      <ol>
        <li>1. Выбрать товар на сайте — <a href="www.romwe.com">www.romwe.com</a></li>
        <li>2. Скопировать на нем ссылку на нужный товар(ы) и вставить в форму ниже:</li>
      </ol>
      <div class="row">
        <img src="img/shop-link-arrow.png" class="for-desc" alt="">
        <img src="img/mob-arrr.png" class="for-xs" alt="">
        <div class="inner">
          <form action="">
            <input type="text" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JK.....">
            <button>Заказать этот товар</button>
          </form>
          <div class="in">
            <p>Отправьте нам ссылку на товар и мы выставим вам счет с учетом доставки в Украину и всеми расходами. После оплаты заказа, мы выкупим товары в этом магазине с доставкой на наш зарубежный склад, а оттуда в Украину. </p>
            <div class="flex">
              <div class="item">
                <div class="white-round"><img src="img/icon-it1.svg" alt=""></div>
                <span>Доставка в Украину 2-4 недели</span>
              </div>
              <div class="item">
                <div class="white-round"><img src="img/icon-it2.svg" alt=""></div>
                <span>Доставка 4-9 $/кг</span>
              </div>
              <div class="item">
                <div class="white-round"><img src="img/icon-it3.svg" alt=""></div>
                <span>100% гарантия доставки или возврата средств</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="shop-calc">
      <h2 class="title ta-left">Стоимость доставки</h2>
      <label>
        <span>Куда везем: </span>
        <input type="select" placeholder="Украина">
        <input type="select" placeholder="Киев">
      </label>
      <label>
        <span>Вес товара</span>
        <div><input type="number" name="persons" id="output3" required="required" value="0.1" /><span> кг</span></div>
        <input type="range" name="persons2" id="range3" class="e-range"  min="0.1" max="50" step="0.1" value="0.1" />
      </label>
             
      <p class="res">Стоимость доставки в Украину: <span class="bold">500 грн</span></p>
    </section>
    <section class="weight-example">
      <p>Примерный вес некоторых вещей <span>без упаковки</span></p>
      <div class="flex-cols">
        <div class="col">
          <div class="img-tit">
            <div><img src="img/weight1.svg" alt=""><span>Одежда</span></div>
            <table>
              <tr>
                <td>Джинсы </td>
                <td>≈ 0,6 кг</td>
              </tr>
              <tr>
                <td>Футболка</td>
                <td>≈ 0,2 кг</td>
              </tr>
              <tr>
                <td>Платье</td>
                <td>≈ 0,3 кг</td>
              </tr>
              <tr>
                <td>Свитер</td>
                <td>≈ 0,4 кг</td>
              </tr>
              <tr>
                <td>Куртка осенняя</td>
                <td>≈ 0,7 кг</td>
              </tr>
              <tr>
                <td>Куртка зимняя</td>
                <td>≈ 0.9 кг</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="img-tit">
            <div><img src="img/weight2.svg" alt=""><span>Обувь</span></div>
            <table>
              <tr>
                <td>Тапки</td>
                <td>≈ 0,6 кг</td>
              </tr>
              <tr>
                <td>Босоножки</td>
                <td>≈ 0,4 кг</td>
              </tr>
              <tr>
                <td>Кросовки</td>
                <td>≈ 0,7 кг</td>
              </tr>
              <tr>
                <td>Туфли</td>
                <td>≈ 0,6 кг</td>
              </tr>
              <tr>
                <td>Ботинки</td>
                <td>≈ 0,8 кг</td>
              </tr>
              <tr>
                <td>Сапоги</td>
                <td>≈ 0,9 кг</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="img-tit">
            <div><img src="img/weight3.svg" alt=""><span>Смартфоны и<br>планшеты </span></div>
            <table>
              <tr>
                <td>Смартфон</td>
                <td>≈ 0,2 кг</td>
              </tr>
              <tr>
                <td>iPad</td>
                <td>≈ 0,5 кг</td>
              </tr>
              <tr>
                <td>Электронная книга </td>
                <td>≈ 0,3 кг</td>
              </tr>
              <tr>
                <td>Airpods</td>
                <td>≈ 0,1 кг</td>
              </tr>
              <tr>
                <td>Зарядка, кабель</td>
                <td>≈ 0,2 кг</td>
              </tr>
              <tr>
                <td>Чехол</td>
                <td>≈ 0,1 кг</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="img-tit">
            <div><img src="img/weight4.svg" alt=""><span>Электроника</span></div>
            <table>
              <tr>
                <td>Ноутбук 13”</td>
                <td>≈ 2 кг</td>
              </tr>
              <tr>
                <td>Ноутбук 15”</td>
                <td>≈ 2,5 кг</td>
              </tr>
              <tr>
                <td>Ноутбук 17”</td>
                <td> ≈ 3 кг</td>
              </tr>
              <tr>
                <td>Фотоаппарат</td>
                <td>≈ 0,3 кг</td>
              </tr>
              <tr>
                <td>Зеркалка</td>
                <td>≈ 0,9 кг</td>
              </tr>
              <tr>
                <td>Жесткий диск</td>
                <td>≈ 0,2 кг</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>

  </main>
  </div>
  <section class="text-section">
    <div class="container">
        <div class="text-container text-container--mob-collapse ">
            <p>Предпочитаете online-магазины бутикам в торговых центрах? Тогда вы должны попробовать шоппинг в американских интернет-магазинах. На нашем сайте вы найдете миллионы различных и эксклюзивных товаров, продукцию от мировых брендов. Приобретая изделия на рынке США вы можете быть уверены в его идеальном качестве, поскольку все товары перед выпуском проходят контроль. К сожалению, распродажи в США и Украине очень сильно различаются. Во время американских сейлов вы сможете купить одежду по скидкам до 80%. Совершите свою первую покупку уже сейчас.</p>
            <h2>В чем плюсы доставки товаров из США через посредника</h2>
            <ol>
                <li>Вы можете заказать товары из нескольких магазинов и когда они все придут на наш склад в Америке, мы объединим их в одну посылку. Это уменьшит налоговый сбор в процессе доставки и сумма которую вы заплатите, будет гораздо меньше, чем если бы вы самостоятельно занимались выбором товаров.</li>
                <li>Если вы не знаете английского языка, мы свяжемся с продавцом и обговорим все условия и стоимость. Если репутация онлайн-магазина покажется нам подозрительной, мы обязательно проинформируем вас. Наша компания — это гарантия безопасности ваших финансовых средств.</li>
                <li>Наши специалисты могут участвовать в международных аукционах, а вы сможете купить товары из США в Киеве и любом другом городе Украины по самым низким ценам.</li>
                <li>Для уменьшения веса мы можем убрать фирменную упаковку. Делаем все, чтобы стоимость доставки посылок из США была минимальной.</li>
                <li>Вы получите консультацию от эксперта по вопросам приобретения товара за рубежом, правилам таможенных услуг и срокам доставки. Звоните или оформляйте заявку на обратный звонок.</li>
                <li>Мы дорожим репутацией и бережно относимся к доставке. Все товары из США приходят к владельцам в сохранности.</li>
                <li>У нас нет никаких скрытых платежей. Перед осуществлением покупки вы сможете рассчитать стоимость доставки, выбрав вариант «авиа» или «морем».</li>
                <li>Вы сможете отслеживать местонахождение, используя специальный код и заказать доставку в ваш город любым оператором.</li>
                <li>Вы сводите к минимуму риски, связанные с приобретением подделки. Будьте уверены, что товар будет брендовым, а техника — соответствует всем необходимым сертификатам.</li>
                <li>Мы поможем вернуть товар, в случае несоответствия размеров или по другим причинам, которые предусмотрены договором. Обратите внимание, что пересылка в США оплачивается покупателем.</li>
            </ol>
            Делайте свои покупки еще более выгодными, сотрудничая с нашей компанией. Мы предоставляем возможность быстрой доставки любых грузов из США. Любая посылка: обувь, музыкальные товары или бытовая техника — все это мы доставляем легко и просто. Каждому жителю Украины доступна возможность пересылки груза из дальнего зарубежья.
            Как известно, популярные торговые площадки, такие как eBay, не принимают платежные карты, которые выданы в Украине. Другие же не выполняют доставку в нашу страну. Мы решили эту проблему. Вам не нужно регистрироваться в PayPal. Все проплаты совершаются в украинской валюте, после чего мы переводим их американским коллегам. Все, что вам необходимо — лишь выбрать понравившийся товар и доверить доставку посылок нашим специалистам.
            Находите уникальные вещи, которые никогда не появятся на витринах украинских магазинов. Хватит мечтать о новом гаджете или джинсах. Закажите доставку посылки из США прямо сейчас!
            <h2>Особенности заказа товаров из США на нашем сервисе</h2>
            <p>Зачем для осуществления заказа товара из США стоит прибегать к услугам фирм-посредников? А все потому, что на самом деле приобрести товар за рубежом самостоятельно не так уж и просто. Поскольку здесь есть своя специфика.</p>
            <p><b>Во-первых,</b> необходимо, чтобы у покупателя была карта или счет в местной валюте.</p>
            <p><b>Во-вторых</b> как уже упоминалось выше, не каждый интернет-магазин осуществляет доставку из Америки в Украину. Да и гарантии, что в итоге придет неповрежденный товар, именно тот, который заказан изначально, нет никакой. А вот профессиональный сервис доставки избавит Вас от такой головной боли.</p>
            <p><b>Приобретение товаров в Штатах</b> - это гарантия покупки действительно фирменных и качественных вещей, техники, косметики и прочих товаров. Именно поэтому, выбирая американские магазины, мы учитывали некоторые важные для нас критерии:</p>
            <ul>
                <li>бренд,</li>
                <li>разнообразие ассортимента,</li>
                <li>качественный сервис,</li>
                <li>низкие цены и оперативность оформления заказа.</li>
            </ul>
            <h2>Отмеченные на нашем сайте интернет-гипермаркеты и стоковые магазины Америки, на фоне других выгодно выделяются следующим:</h2>
            <ul>
                <li>высокой репутацией,</li>
                <li>мгновенной реакцией на заказ,</li>
                <li>хорошим уровнем защищенности платежей,</li>
                <li>отличной круглосуточной технической поддержкой,</li>
                <li>большим выбором и ежедневным обновлением ассортимента.</li>
            </ul>
            <p>Вы можете воспользоваться нашим списком интернет-магазинов США на сайте или самостоятельно заказать на на любой другой платформе, а мы с радостью поможем вам осуществить адресную доставку товара из Штатов.</p>
            <h2>Как найти товары из Америки на нашем сайте</h2>
            <p>Мы разделили весь существующий товар по категориям. Здесь вы сможете отыскать антиквариат, товары для взрослых и детей, мобильные гаджеты, товары для офиса и дома, косметика, детские игрушки, текстиль и многое другое. Выбирайте подходящий раздел и переходите в необходимый магазин. Каждый интернет-магазин имеет краткое описание особенностей и его функционала. Эта характеристика позволяет подобрать площадку, которая больше всего соответствует вашим параметрам, не переходя на ее сайт.</p>
            <h3>Дальнейшие действия предельно просты:</h3>
            <ol>
                <li>Выбирайте на сайте подходящий товар.</li>
                <li>Оформляйте заказ на сайте с помощью встроенных опций.</li>
                <li>Получайте чек.</li>
                <li>Оплачивайте его удобным способом.</li>
                <li>Получайте всю информацию о перемещении товара.</li>
                <li>Получите свою посылку.</li>
            </ol>
            <p>Звоните в любое время. Мы оказываем бесплатные консультации и с удовольствием проведем для вас экскурсию в мир интернет шоппинга. Мир, где качественные товары можно купить гораздо дешевле, чем в Украине, не боясь попасть на мошенников и подделку. Заказ курьерской доставки избавит вас от необходимости стоять в очереди в отделении.</p>
            <a class="text-container__height-toggle js-text-height" href="#">Развернуть</a>
        </div>
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
<!--Скрипт для цен (передача из range в input) -->

  <script type="text/javascript">
            $(document).ready(function() {
                $('#output3').val($('#range3').val());
                $('#range3').mousemove(function() {
                    $('#output3').val($('#range3').val());
                });
                 $('#range3').change(function() {
                    $('#output3').val($('#range3').val());
                });
                $('#output3').change(function() {
                    $('#range3').val($('#output3').val());
                });
            })
</script>
<!--Скрипт для цен конец -->

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
