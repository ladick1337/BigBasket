@extends('layouts.common')

@section('content')
    <section class="steps-desc-section">
        <div class="container">
            <div class="flex-amazon">
             <h1 class="title ta-left steps-desc-section__title"  data-aos="fade-down">Как доставить с Amazon в Украину?</h1>
             <a href="https://www.amazon.com" target="_blank"><img src="{{asset('myassets')}}/img/amazon-logo.png" class="for-desc" alt=""><img src="{{asset('myassets')}}/img/amazon-white.svg" class="for-xs" alt=""></a>
            </div>
            
            <div class="steps-desc-content-wrapper">
                <div class="steps-desc-list">
                    <div class="steps-desc-list-item">
                        <i class="steps-desc-list-item__icon steps-desc-list-item__icon--comp"></i>
                        <p class="steps-desc-list-item__desc">Выбираете товар на сайте&#32;<a href="https://www.amazon.com" target="_blank">&#x20;Amazon</a>.</p>
                    </div>
                    <div class="steps-desc-list-item">
                        <i class="steps-desc-list-item__icon steps-desc-list-item__icon--comp-mail"></i>
                        <p class="steps-desc-list-item__desc">Отправляете нам ссылку через форму ниже</p>
                    </div>
                    <div class="steps-desc-list-item">
                        <i class="steps-desc-list-item__icon steps-desc-list-item__icon--calc"></i>
                        <p class="steps-desc-list-item__desc">В течении пары рабочих часов получаете полный расчет стоимости доставки в Украину</p>
                    </div>
                    <div class="steps-desc-list-item">
                        <i class="steps-desc-list-item__icon steps-desc-list-item__icon--many"></i>
                        <p class="steps-desc-list-item__desc">Оплачиваете счет</p>
                    </div>
                    <div class="steps-desc-list-item">
                        <i class="steps-desc-list-item__icon steps-desc-list-item__icon--map-point"></i>
                        <p class="steps-desc-list-item__desc">Мы выкупаем товары на Amazon с доставкой на наш склад в США, а затем отправляем его в Украину</p>
                    </div>
                    <div class="steps-desc-list-item">
                        <i class="steps-desc-list-item__icon steps-desc-list-item__icon--done"></i>
                        <p class="steps-desc-list-item__desc">Через 2-4 недели получаете заказ на ближайшем отделении «Новой почты»</p>
                    </div>
                </div>
                <form class="link-form link-form--without_tab" action="#">
                    <input  class="link-form__input" type="text" name="link" id="link1" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/">
                    <button class="link-form__btn btn btn--orange" type="submit">Заказать этот товар</button>
                </form>
            </div>
        </div>
    </section>

<section class="category-section">
    <div class="container">
        <h2 class="title"  data-aos="fade-down">Популярные категории товаров на Amazon</h2>
        <ul class="category-list">
             <?php 
$asset = asset('myassets');
?>

            <li><a class="category-list__link" href="https://www.amazon.com/s?k=women+clothing" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/1.svg") no-repeat center / contain;'></i></span> Женская одежда</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=men+clothing" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/2.svg") no-repeat center / contain;'></i></span> Мужская одежда</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=women+shoes" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/3.svg") no-repeat center / contain;'></i></span> Женская обувь</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=men+shoes" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/4.svg") no-repeat center / contain;'></i></span> Мужская обувь</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=phone" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/5.svg") no-repeat center / contain;'></i></span> Смартфоны и аксессуары</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=computer" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/6.svg") no-repeat center / contain;'></i></span> ПК, ноутбуки и планшенты</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=watches" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/7.svg") no-repeat center / contain;'></i></span> Часы</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=handbags" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/8.svg") no-repeat center / contain;'></i></span> Женские сумки</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=girl+clothing" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/9.svg") no-repeat center / contain;'></i></span> Одежда для девочек</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=boy+clothing" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/10.svg") no-repeat center / contain;'></i></span> Одежда для мальчиков</a>
            </li>
            <li><a class="category-list__link" href="https://www.amazon.com/s?k=car+accessories" target="_blank"><span><i style='background: url("{{$asset}}/img/section/amazon_category_icon/11.svg") no-repeat center / contain;'></i></span> Электроника и аксессуары для автомобилей</a>
            </li>
        </ul>
        <div class="section-bottom-container">
            <a href="#" class="big-link"  data-aos="fade-down">Все категории</a>
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

            <a class="text-container__height-toggle js-text-height" href="#">Развернуть</a>        </div>
    </div>
</section>
@include('layouts.request-link')

@endsection