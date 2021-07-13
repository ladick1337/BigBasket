@extends('layouts.common')

@section('content')
<main class="index">
    <section class="main-section">
        <div class="container">
            <div class="main-section-wrapper">
                <div class="main-description main-description--full-desc">
                    <h1 class="main-description__title"  data-aos="fade-left" data-aos-delay="200"><span>Доставка товаров</span> из<br>США, Европы и Китая<br><span>в Украину!</span></h1>
                    <div class="link-form-tab">
    <label class="link-form-tab__item link-form-tab__item--active" for="link"> Заказать по ссылке</label>
    <a class="link-form-tab__item" href="#">Каталог еВау</a>
    <a class="link-form-tab__item" href="#">Получить адрес в США</a>
</div>
<form class="link-form" action="#">
    <input  class="link-form__input" type="text" name="link" id="link1" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/">
    <button class="link-form__btn btn btn--orange" type="submit">Заказать этот товар</button>
</form>
                </div>
                <img class="main-section__front-photo main-section__front-photo--full-desc" data-aos="fade-up" src="{{asset('myassets')}}/img/p_index/men.webp" alt="" >
            </div>
        </div>
    </section>

    <section class="sale-section">
        <div class="container">
            <div class="sale-wrapper">
                <div class="sale-desc">
                    <h2 class="sale-desc__title">Акция</h2>
                    <p class="sale-desc__info">Оставьте заявку до <b class="nextWebinar">27 августа</b> и получите  <b>5$ в подарок</b></p>
                </div>
                <img class="sale-image" src="{{asset('myassets')}}/img/section/sale/present.webp" alt="">
                <p class="sale-arrow">До конца<br>
                    акции осталось</p>
                <div class="sale-timer timer js-timer-sale" style="width: 700px"></div>
            </div>
        </div>
    </section>

    <section class="plan-section">
        <div class="container">
            <h2 class="title"  data-aos="fade-down">Как мы работаем?</h2>
            <div class="plan-list">
                <div class="plan-coll">
                    <p class="plan-coll__title">Вариант 1</p>
                    <div class="plan-item">
                        <h3 class="plan-item__title">Заказ товара по ссылке</h3>
                        <img class="plan-item__img" src="{{asset('myassets')}}/img/section/plans/varialbe1.png" alt="">
                        <h4 class="plan-item__sub-title" >С вас только ссылка</h4>
                        <p class="plan-item__desc">Скиньте нам ссылку на товар из любого зарубежного интернет-магазина и мы все сделаем за вас. Рассчитаем конечную стоимость, выкупим и доставим товар по лучшим тарифам. (гиперссылка)</p>
                        <h4 class="plan-item__sub-title" >Преимущесва заказа по ссылке:</h4>
                        <ul class="plan-item__desc">
                            <li>Услуга «под ключ». С вас ссылка, с нас посылка;</li>
                            <li>Вам не нужно общаться с продавцом на иностранном языке;</li>
                            <li>Не нужно контролировать выполнение им заказа;</li>
                            <li>Мы выкупим товар, даже если продавец не принимает украинские карты и не осуществляет прямую доставку в Украину</li>
                        </ul>
                        <a href="#" class="plan-item__btn btn btn--orange">Сделать заказ по ссылке</a>
                    </div>
                </div>
                <div class="plan-coll plan-coll--separate">
                    или
                </div>
                <div class="plan-coll">
                    <p class="plan-coll__title">Вариант 2</p>
                    <div class="plan-item">
                        <h3 class="plan-item__title">Mail Forwarding</h3>
                        <img class="plan-item__img" src="{{asset('myassets')}}/img/section/plans/varialbe2.webp" alt="">
                        <h4 class="plan-item__sub-title" >С вас трек - номер</h4>
                        <p class="plan-item__desc">Вы получаете от нас адрес склада в США и Европе и оформляете на них свои заказы.</p>
                        <p class="plan-item__desc">Мы принимаем их и отправляем в Украину по лучшим тарифам. (гиперссылка)</p>
                        <h4 class="plan-item__sub-title" >Преимущества Mail Forwarding:</h4>
                        <ul class="plan-item__desc">
                            <li>У вас будет свой бесплатный адрес в США и Европе!</li>
                            <li>Сэкономите на нашей комиссии, если вы умеете совершать покупки за рубежом;</li>
                            <li>Экономия до 12% за счет склада в безналоговом штате;</li>
                            <li>Сможете делать заказы даже у продавцов, которые не отправляют товары в Украину</li>
                        </ul>
                        <a href="#" class="plan-item__btn btn btn--orange">Получить адрес в США</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="advantage-section">
      <div class="gray-bg">
    <div class="container">
        <h2 class="title"  data-aos="fade-down" data-aos-delay="1200">Экономьте на доставке из США и Европы</h2>
        <div class="advantage-section-wrapper">
            <div class="advantage-section__list">
                <h3 class="ta-left">С нами дешевле!</h3>
                <ol>
                    <li>У нас выгодная доставка (например, авиа из США всего 9$/кг)</li>
                    <li>Мы не округляем вес до целого числа, а считаем по 0,1 кг (=1$)</li>
                    <li>Заказываем у продавцов, которые не отправляют товары напрямую в Украину</li>
                    <li>Таможенное оформление без вашего участия</li>
                    <li>Предоставляем личный адрес в США для самостоятельных покупок</li>
                    <li>Гарантируем доставку товара или возврат средств</li>
                    <li>Наш склад в США находится в безналоговом штате</li>
                </ol>
            </div>

            <div class="advantage-section__example mtmb20">
                <h3>Пример</h3>
                <p>Кросовки из США весом 1,5 кг.</p>
                <img src="{{asset('myassets')}}/img/section/advatage_example.png" alt="">
                <div class="price-list">
                    <div class="price-item">
                        <p class="price-item__top">Доставка USPS из США</p>
                        <p class="price-item__price price-item__price--red">38.60 $</p>
                    </div>

                    <div class="price-item">
                        <p class="price-item__top">Мы доставим <br> за:</p>
                        <p class="price-item__price price-item__price--green">14 $</p>
                        <p class="price-item__desc">+ 3$ комиссия</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
</section>

    <section class="howworks-section">
        <div class="container">
            <h2 class="title title--white"  data-aos="fade-down">Как заказать товары из США через наш сервис?</h2>
            <div class="steps-list">
                <div class="steps-list-item">
                    <i class="steps-list-item__icon steps-list-item__icon--comp"></i>
                    <h3 class="steps-list-item__title">Выбираете товар</h3>
                    <p class="steps-list-item__desc">Находите товар на eBay, Amazon или любом другом зарубежном интернет-магазине. </p>
                </div>
                <div class="steps-list-item">
                    <i class="steps-list-item__icon steps-list-item__icon--consultaion"></i>
                    <h3 class="steps-list-item__title">Оставляете заявку</h3>
                    <p class="steps-list-item__desc">Отправляете нам ссылку или добавляете товар в корзину через наш каталог <a href="#">eBay</a>. Если пользуетесь услугой <a href="#">Mail Forwarding</a>, то просто скидываете нам трек-номер посылки.</p>
                </div>
                <div class="steps-list-item">
                    <i class="steps-list-item__icon steps-list-item__icon--many"></i>
                    <h3 class="steps-list-item__title">Оплачиваете счет</h3>
                    <p class="steps-list-item__desc">Оплачиваете выставленный вам счет с учетом доставки в Украину.</p>
                </div>
                <div class="steps-list-item">
                    <i class="steps-list-item__icon steps-list-item__icon--map-point"></i>
                    <h3 class="steps-list-item__title">Мы выкупаем товар на наш склад в США</h3>
                    <p class="steps-list-item__desc">Мы сразу выкупаем товар у продавца с доставкой на наш склад в США или Европе. После его поступления, мы сразу же отправляем его в Украину.</p>
                </div>
                <div class="steps-list-item">
                    <i class="steps-list-item__icon steps-list-item__icon--done"></i>
                    <h3 class="steps-list-item__title">Доставляем его вам</h3>
                    <p class="steps-list-item__desc">Примерно через 2-4 недели забираете свой заказ на ближайшем отделении «Новой почты» или курьером.</p>
                </div>
            </div>
            <!-- <div class="section-bottom-container">
                <a href="#" class="btn btn--orange"  data-aos="fade-down">Получить адрес в США и Европе</a>
            </div> -->
        </div>
    </section>

    <section class="category-section">
        <div class="container">
            <h2 class="title"  data-aos="fade-down">Товары с Ebay</h2>
            <ul class="category-list">
                <?php 
$asset = asset('myassets');
?>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/1.svg") no-repeat center / contain;'></i></span> Одежда</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/2.svg") no-repeat center / contain;'></i></span> Обувь</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/3.svg") no-repeat center / contain;'></i></span> Автозапчасти</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/4.svg") no-repeat center / contain;'></i></span> Смартфоны и аксессуары</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/5.svg") no-repeat center / contain;'></i></span> ПК, ноутбуки и планшеты</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/6.svg") no-repeat center / contain;'></i></span> Часы</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/7.svg") no-repeat center / contain;'></i></span> Женские сумки</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/8.svg") no-repeat center / contain;'></i></span> Спортивые товары</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/9.svg") no-repeat center / contain;'></i></span> Детская одежда</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/10.svg") no-repeat center / contain;'></i></span> Игрушки</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/11.svg") no-repeat center / contain;'></i></span> Музыкальное оборудование и инструменты</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/12.svg") no-repeat center / contain;'></i></span> Овелирные товары</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/13.svg") no-repeat center / contain;'></i></span> Антикавариат</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/14.svg") no-repeat center / contain;'></i></span> Товары для путешесвий</a>
                </li>
                <li><a class="category-list__link" href="#"><span><i style='background: url("{{$asset}}/img/section/category_icon/15.svg") no-repeat center / contain;'></i></span> Здоровье и красота</a>
                </li>
            </ul>
            <div class="section-bottom-container">
                <a href="#" class="big-link"  data-aos="fade-down">Все категории</a>
            </div>
        </div>
    </section>

    <section class="shop-cart-section">
        <div class="container">
            <h2 class="title"  data-aos="fade-down">Популярные магазины США и Европы</h2>
            <div class="shop-cart-list">
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo1.webp" alt=""></a>
                <p class="shop-cart-item__desc">Крупнейший в мире интернет-магазин различных категорий товаров. Огромный
                    выбор и отличные цены</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo2.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Скидки и распродажи популярных брендов одежды и обуви</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo3.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Популярный интернет-магазин обуви и одежды</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo4.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Джины и другая одежда популярного бренда</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo5.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Джины и другая одежда популярного бренда</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo6.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Популярные испанский бренд одежды, новые коллекции</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo7.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Качественная детская одежда</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo8.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Качественная спортивная и не только одежда</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo9.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Огромный выбор автозапчастей</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo10.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Крупнейший в мире интернет-магазин различных категорий товаров. Огромный
                        выбор и отличные цены</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
                <div class="shop-cart-item">
                    <a class="shop-cart-item__logo-link" href="#"><img src="{{asset('myassets')}}/img/section/shops/logo11.webp" alt=""></a>
                    <p class="shop-cart-item__desc">Крупнейший в мире интернет-магазин различных категорий товаров. Огромный
                        выбор и отличные цены</p>
                    <a href="#" class="shop-cart-item__btn">Заказать здесь товар</a>
                </div>
            </div>
            <div class="section-bottom-container">
                <a href="#" class="big-link"  data-aos="fade-down">Остальные магазины</a>
            </div>
        </div>
    </section>
    <section class="reviews-section">
    <div class="container">
        <h2 class="title"  data-aos="fade-down">Десятки тысяч доставленных заказов с 2009 года</h2>

        <div class="container-reviews js-owl-carousel owl-carousel owl-theme">
            <div class="review-item">
                <p class="review-item__head"> Олег | 23 июля 2020</p>
                <p class="review-item__title">Заказ № 036626</p>
                <p class="review-item__desc">Товар в идеальном состоянии, работает отлично.</p>
            </div>

            <div class="review-item">
                <p class="review-item__head"> Коля | 23 июля 2020</p>
                <p class="review-item__title">Заказ № 036665</p>
                <p class="review-item__desc">Товар в идеальном состоянии, работает отлично.</p>
            </div>


            <div class="review-item">
                <p class="review-item__head"> Олег | 23 июля 2020</p>
                <p class="review-item__title">Заказ № 036665</p>
                <p class="review-item__desc">Товар в идеальном состоянии, работает отлично.</p>
            </div>


            <div class="review-item">
                <p class="review-item__head"> Олег | 23 июля 2020</p>
                <p class="review-item__title">Заказ № 036654</p>
                <p class="review-item__desc">Спасибо, товар получен! Все хорошо.</p>
            </div>

            <div class="review-item">
                <p class="review-item__head"> Олег | 23 июля 2020</p>
                <p class="review-item__title">Заказ № 0366656</p>
                <p class="review-item__desc">Здравствуйте, товар получен. Упаковка и товар в идеальном состоянии, спасибо большое! </p>
            </div>

            <div class="review-item">
                <p class="review-item__head"> Олег | 23 июля 2020</p>
                <p class="review-item__title">Заказ № 0366326</p>
                <p class="review-item__desc">Товар в идеальном состоянии, работает отлично.</p>
            </div>

            <div class="review-item">
                <p class="review-item__head"> Дима | 23 июля 2020</p>
                <p class="review-item__title">Заказ № 0366232</p>
                <p class="review-item__desc">Товар в идеальном состоянии, работает отлично.</p>
            </div>
        </div>
        <div class="section-bottom-container">
            <a href="#" class="big-link"  data-aos="fade-down">Посмотреть все отзывы</a>
        </div>
    </div>
</section>
    <section class="text-section">
    <div class="container">
        <div class="text-container ">
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

                    </div>
    </div>
</section>

    @include('layouts.request-link')

</main>

@endsection