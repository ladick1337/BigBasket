@extends('layouts.common')

@section('content')
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

@endsection