@extends('layouts.common')

@section('content')
<main class="shops-section cat">
    <div class="container shops-container">
        <p class="shops-mobile_title  title ta-left">eBay на Русском с доставкой в Украину</p>
                    <div class="search-input for-mobile">
                <form method="get" action="">
                    <input type="text" name="q" class="search-input__input" placeholder="Поиск по ключевым словам" required="required">
                    <button class="search-input__btn"></button>
                </form>
            </div>
        <aside class="aside-wrap-filter">
            <div class="second-filter">
                <h2 class="aside-filter__title sub_filter_title xss bb-cats" id="">Подкатегории</h2>
                <ul class="aside-filter-nav js-nav-aside filter-inner" id="xxss1">
                    <li><a href="#" class="aside-filter__item">Авто</a></li>
                    <li><a href="#" class="aside-filter__item">Антиквариат</a></li>
                    <li><a href="#" class="aside-filter__item">Бизнес и Промышленность</a></li>
                    <li><a href="#" class="aside-filter__item">Билеты</a></li>
                    <li><a href="#" class="aside-filter__item">Бытовая электроника</a></li>
                    <li><a href="#" class="aside-filter__item">Видеоигры и Игровые приставки</a></li>
                    <li><a href="#" class="aside-filter__item">Все для дома и сада</a></li>
                    <li><a href="#" class="aside-filter__item">Музыкальное оборудование</a></li>
                    <li><a href="#" class="aside-filter__item">Автолюбителям</a></li>
                    <li><a href="#" class="aside-filter__item">Разное</a></li>
                    <li><a href="#" class="aside-filter__item">Британские и европейские магазины</a></li>
                    <li><a href="#" class="aside-filter__item">Косметика</a></li>
                    <li><a href="#" class="aside-filter__item">Обувь</a></li>
                    <li><a href="#" class="aside-filter__item">Детские товары</a></li>
                    <li><a href="#" class="aside-filter__item">Другое</a></li>
                    <li><a href="#" class="aside-filter__item">Авто</a></li>
                    <li><a href="#" class="aside-filter__item">Антиквариат</a></li>
                    <li><a href="#" class="aside-filter__item">Бизнес и Промышленность</a></li>
                    <li><a href="#" class="aside-filter__item">Билеты</a></li>
                    <li><a href="#" class="aside-filter__item">Бытовая электроника</a></li>
                    <li><a href="#" class="aside-filter__item">Видеоигры и Игровые приставки</a></li>
                    <li><a href="#" class="aside-filter__item">Все для дома и сада</a></li>
                    <li><a href="#" class="aside-filter__item">Музыкальное оборудование</a></li>
                    <li><a href="#" class="aside-filter__item">Автолюбителям</a></li>
                    <li><a href="#" class="aside-filter__item">Разное</a></li>
                    <li><a href="#" class="aside-filter__item">Британские и европейские магазины</a></li>
                    <li><a href="#" class="aside-filter__item">Косметика</a></li>
                    <li><a href="#" class="aside-filter__item">Обувь</a></li>
                    <li><a href="#" class="aside-filter__item">Детские товары</a></li>
                    <li><a href="#" class="aside-filter__item">Другое</a></li>
                </ul>
            </div>
            <div class="second-filter">
                <h2 class="aside-filter__title xss for-xs">Фильтр</h2>
                <div class="filter-inner">
                <div class="aside-filter">
                    <h2 class="aside-filter__title js-toggle-aside-filter">Состояние</h2>
                    <ul class="aside-filter-nav js-nav-aside">
                        <li class="aside-filter__item">
                            <input type="radio" name="state" value="1" id="radio_1" tabindex="1" checked="checked">
                            <label for="radio_2">Любое</label>
                        </li>
                        <li class="aside-filter__item">
                            <input type="radio" name="state" value="2" id="radio_2" tabindex="2">
                            <label for="radio_2">Новое</label>
                        </li>
                    </ul>
                </div>
                <h2 class="aside-filter__title js-toggle-aside-filter">Цена</h2>
                <div class="nubmer">
                    <input type="number" id="output1" class="aside-filter__input input" placeholder="От">
                    <input type="number" id="output2" class="aside-filter__input input " placeholder="До">
                </div>
                <div slider id="slider-distance">
                    <div>
                        <div inverse-left style="width:70%;"></div>
                        <div inverse-right style="width:70%;"></div>
                        <div range style="left:0%;right:0%;"></div>
                        <span thumb style="left:0%;"></span>
                        <span thumb style="left:100%;"></span>
                        <!--     <div sign style="left:0%;">
      <span id="value">0</span>
    </div>
    <div sign style="left:100%;">
      <span id="value">100</span>
    </div> -->
                    </div>
                    <input type="range" id="range1" value="0" max="500000" min="0" step="1" oninput="
  this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
  let value = (this.value/parseInt(this.max))*100
  var children = this.parentNode.childNodes[1].childNodes;
  children[1].style.width=value+'%';
  children[5].style.left=value+'%';
  children[7].style.left=value+'%';children[11].style.left=value+'%';
  children[11].childNodes[1].innerHTML=this.value;" />
                    <input type="range" id="range2" value="500000" max="500000" min="0" step="1" oninput="
  this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
  let value = (this.value/parseInt(this.max))*100
  var children = this.parentNode.childNodes[1].childNodes;
  children[3].style.width=(100-value)+'%';
  children[5].style.right=(100-value)+'%';
  children[9].style.left=value+'%';children[13].style.left=value+'%';
  children[13].childNodes[1].innerHTML=this.value;" />
                </div>
                <button class="aside-filter__btn btn btn--blue-gradient" type="submit">Фильтровать</button>
            </div>

            </div>
         
            
        </aside>
        <section class="shops-list">
            <h1 class="shops__title  title ta-left" data-aos="fade-down">eBay на Русском с доставкой в Украину</h1>
            <div class="search-input for-desktop">
                <form method="get" action="">
                    <input type="text" name="q" class="search-input__input" placeholder="Поиск по ключевым словам" required="required">
                    <button class="search-input__btn"></button>
                </form>
            </div>
            <div class="catalog-panel">
                <div class="top">
                    <div class="tabs-1">
                        <a href="" class="active">Все товары</a>
                        <a href="">Аукционы</a>
                        <a href="" class="for-desc">Купить сейчас</a>
                    </div>
                    <div class="text-drop-down-sort for-desc">
                        <p>Сортировать по:</p>
                        <a href="#">Лучшее совпадение</a>
                    </div>
                </div>
                <div class="text-drop-down-sort for-xs">
                    <p>Сортировать по:</p>
                    <a href="#">Лучшее совпадение</a>
                </div>
            </div>
            <div class="cart-list">
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product1.webp" alt=""></a>
                        <a class="cart-links__title" href="">Swarovski Crystal Large Annual Edition Christmas Ornamet 2020 Snowflake 5511 041</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>14.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">15 lb. Rotary Brass and Rock Tumbler - Ballistic Bill</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>78.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>13.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product3.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>5.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product1.webp" alt=""></a>
                        <a class="cart-links__title" href="">Swarovski Crystal Large Annual Edition Christmas Ornamet 2020 Snowflake 5511 041</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>14.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">15 lb. Rotary Brass and Rock Tumbler - Ballistic Bill</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>78.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>13.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product3.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>5.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product1.webp" alt=""></a>
                        <a class="cart-links__title" href="">Swarovski Crystal Large Annual Edition Christmas Ornamet 2020 Snowflake 5511 041</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>14.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">15 lb. Rotary Brass and Rock Tumbler - Ballistic Bill</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>78.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>13.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product3.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>5.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product1.webp" alt=""></a>
                        <a class="cart-links__title" href="">Swarovski Crystal Large Annual Edition Christmas Ornamet 2020 Snowflake 5511 041</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>14.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">15 lb. Rotary Brass and Rock Tumbler - Ballistic Bill</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>78.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>13.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product3.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>5.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product1.webp" alt=""></a>
                        <a class="cart-links__title" href="">Swarovski Crystal Large Annual Edition Christmas Ornamet 2020 Snowflake 5511 041</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>14.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">15 lb. Rotary Brass and Rock Tumbler - Ballistic Bill</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>78.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product2.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>13.0 $</b> </p>
                </div>
                <div class="cart">
                    <div class="cart-links">
                        <a class="cart-links__wrap-img" href=""> <img src="https://clai.kz/img/product/product3.webp" alt=""></a>
                        <a class="cart-links__title" href="">White Sage Cali Smudge Stick SET OF 5 Certified Organic Made in USE</a>
                    </div>
                    <p class="cart__price">Текущая ставка: <b>5.0 $</b> </p>
                </div>
            </div>
            <ul class="pagination">







                <li><a class="pagination__item pagination__item--first" href="/shops">На первую</a></li>
                <li><a class="pagination__item pagination__item--prev" href="/shops">‹</a></li>
                <li><span class="pagination__item pagination__item--active">1</span></li>
                <li><a class="pagination__item" href="/shops?p=50">2</a></li>
                <li><a class="pagination__item" href="/shops?p=100">3</a></li>
                <li><a class="pagination__item pagination__item--next" href="/shops">›</a></li>
                <li><a class="pagination__item pagination__item--last" href="/shops?p=300">На последнюю</a></li>
            </ul>
        </section>
    </div>
</main>
<section class="text-section">
    <div class="container">
        <div class="text-container">
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

@include('layouts.request-link')

<script type="text/javascript">
            $(document).ready(function() {
                $('#output1').val($('#range1').val());
                $('#range1').mousemove(function() {
                    $('#output1').val($('#range1').val());
                });
                $('#range1').change(function() {
                    $('#output1').val($('#range1').val());
                });
                $('#output1').change(function() {
                    $('#range1').val($('#output1').val());
                });
            })


            $(document).ready(function() {
                $('#output2').val($('#range2').val());
                $('#range2').mousemove(function() {
                    $('#output2').val($('#range2').val());
                });
                $('#range2').change(function() {
                    $('#output2').val($('#range2').val());
                });

                $('#output').change(function() {
                    $('#range2').val($('#output2').val());
                });
            })
</script>

@endsection