@extends('layouts.common')

@section('content')
   <main class="main-content light-blue">
        <section>
            <div class="container">
                <div class="calculate-section">
                    <h1 class="calculate-section__title  title ta-left"><img src="{{asset('myassets')}}/img/calc-icon.svg" alt="">Расчет доставки</h1>
                    <div class="calculate-row">
                        <label class="calculate-row__label label" for="from">Местонахождение товара (ов): </label>
                            <select class="calculate-row__select js-select" name="neworder[order][country_from]">
                                <option value="USAAir" code="128" selected="selected">США авиа</option>
                                <option value="USASea50" code="128">США морем 50 дней</option>
                                <option value="USASea30" code="128">США морем 30 дней</option>
                                <option value="GER" code="12">Германия</option>
                                <option value="UK" code="10">Великобритания</option>
                                <option value="SPA" code="0">Испания</option>
                                <option value="ITA" code="0">Италия</option>
                                <option value="CHI" code="0">Китай</option>
                            </select>
                    </div>

                    <div class="calculate-row">
                        <label class="calculate-row__label label" for="price">Стоимость товара (ов): </label>
                        <input class="calculate-row__input input" id="price" name="price" type="text"  placeholder="0"><span class="cal_currency"></span>
                    </div>
                    <div class="calculate-row">
                        <label class="calculate-row__label label" for="from">Ориентировочный вес товара (ов) в килограммах: </label>
                        <input class="calculate-row__input input" id="from" name="massa" type="text"  placeholder="0"><span> кг</span>
                    </div>
                    <div class="calculate-row calculate-row--bottom">
                        <button class="calculate__btn btn btn--blue-gradient">Рассчитать</button>
                        <p class="calculate__label calculate__label--result" style="display: none;">Ориентировочная стоимость с доставкой в Украину: <span class="tooltip d-hidden"> <img src="{{asset('myassets')}}/img/q-icon.svg" alt="">
                                <span class="tooltiptext">Указанная сумма является ориентировочной, т.к. зависит от правильности заполнения формы. Чтобы получить точный рассчет стоимости заказа, оставьте заявку и мы сделаем вам рассчет стоимости.</span>
                            </span><span class="bold final_price"></span> <span class="tooltip m-hidden"> <img src="{{asset('myassets')}}/img/q-icon.svg" alt="">
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
    
    
    <script src="{{asset('myassets')}}/js/calculate.js"></script>

@endsection