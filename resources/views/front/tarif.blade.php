@extends('layouts.common')

@section('content')
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

    @include('layouts.request-link')

@endsection