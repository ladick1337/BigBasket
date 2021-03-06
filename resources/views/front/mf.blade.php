@extends('layouts.common')

@section('content')
<main class="mf">
 <section class="main-section">
        <div class="container">
            <div class="main-section-wrapper">
                <div class="main-description">
                    <h1 class="main-description__title" data-aos="fade-left" data-aos-delay="200">Получите бесплатно личный адрес <span>в США и Европе</span></h1>
                    <p class="main-description__sub-title" data-aos="fade-down" data-aos-delay="400">Используйте его для покупок, а мы доставим их в Украину по лучшим тарифам</p>
                    <a href="#" class="btn btn--orange main-section__btn getaddressUSA" data-aos="fade-down" data-aos-delay="800">Получить адрес в США</a>
                </div>
                <img class="main-section__front-photo" data-aos="fade-up" src="{{asset('myassets')}}/img/mf/main_section_front_img.webp" alt="">
            </div>
        </div>
    </section>
    <section class="advantage-section">
        <div class="container">
            <h2 class="title" data-aos="fade-down" data-aos-delay="1200">Экономьте на доставке из США и Европы</h2>
            <div class="advantage-section-wrapper">
                <div class="advantage-section__list">
                    <h3 class="ta-left">С нами дешевле!</h3>
                    <ol>
                        <li>У нас выгодная доставка (например, авиа из США всего 9$/кг)</li>
                        <li>Мы не округляем вес до целого числа, а считаем по 0,1 кг (=1$)</li>
                        <li>Можете заказывать у продавцов, которые не отправляют товары напрямую в Украину</li>
                        <li>Таможенное оформление без вашего участия</li>
                        <li>Комиссия Big-Basket за каждую вашу посылку всего 3$</li>
                        <li>Наш склад в США находится в безналоговом штате</li>
                    </ol>
                </div>
                <div class="advantage-section__example">
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
            <div class="section-bottom-container">
                <a href="#" class="advantage-section__btn btn btn--blue-gradient" data-aos="fade-down">Подробные тарифы Mail Forwarding</a>
            </div>
        </div>
    </section>
    <section class="howworks-section">
        <div class="container">
            <h2 class="title title--white" data-aos="fade-down">Как это работает?</h2>
            <div class="steps-list">
                <div class="steps-list-item">
                    <i class="steps-list-item__icon steps-list-item__icon--map-point"></i>
                    <h3 class="steps-list-item__title">Вы оформляете заказы на наш склад в США</h3>
                    <p class="steps-list-item__desc">Получите бесплатно свой личный адрес в США и Европе для самостоятельных покупок. Указывайте его при оформлении заказа в поле Shipping Address.</p>
                </div>
                <div class="steps-list-item">
                    <i class="steps-list-item__icon steps-list-item__icon--search"></i>
                    <h3 class="steps-list-item__title">Отправляете нам номер отслеживания посылки</h3>
                    <p class="steps-list-item__desc">После отправки заказа на наш склад, магазин предоставит вам номер отслеживания посылки (tracking number). Вы сообщаете его нам. </p>
                </div>
                <div class="steps-list-item">
                    <i class="steps-list-item__icon steps-list-item__icon--done"></i>
                    <h3 class="steps-list-item__title">Мы отправляем вашу посылку в Украину</h3>
                    <p class="steps-list-item__desc">Получив на складе в США ваш заказ, мы отправляем его в Украину. Взвешиваем его и выставляем вам счет за доставку. После оплаты, отправляем его вам на ближайшее отделение «Новой почты». </p>
                </div>
            </div>
            <div class="section-bottom-container">
                <a href="#" class="btn btn--orange" data-aos="fade-down">Получить адрес в США и Европе</a>
            </div>
        </div>
    </section>
    <section class="reviews-section">
        <div class="container">
            <h2 class="title" data-aos="fade-down">Десятки тысяч доставленных заказов с 2009 года</h2>
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
                <a href="#" class="big-link" data-aos="fade-down">Посмотреть все отзывы</a>
            </div>
        </div>
    </section>
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

    @include('layouts.request-link')
    
</main>


@endsection