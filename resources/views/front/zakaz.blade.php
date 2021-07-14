@extends('layouts.common')

@section('content')
<main class="my-adress">
    <section class="course">
        <div class="container">
            <div class="flex">
                <div class="for-m">

                    <img src="{{asset('myassets')}}/img/i-icon.svg" alt="">
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
                <a href="{{route('profile')}}">Профиль</a>
            </div>
            <div class="my-money">
                <p class="count"><img src="{{asset('myassets')}}/img/carts.png">395.05 UAH<br>
                    <span>= 13.87 $ = 11.75 $ = 10.69 £ <span class="tooltip"> <img src="{{asset('myassets')}}/img/q-icon.svg" alt="">
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
        <h2 class="b-title bold img">Активные заказы</h2>
        <p class="adr-p">Неоплаченные заказы</p>
        <table class="action-it">
            <tr>
                <td><span>№ заказа</span></td>
                <td><span>Магазин</span></td>
                <td><span>Дата заказа</span></td>
                <td><span>Статус</span></td>
                <td><span>К оплате</span></td>
                <td><span class="btns">Действие</span></td>
                <td><span>Узнать</span></td>
            </tr>
            <tr>
                <td class="mobile"><span class="blue"><a href="#">036812</a></span> | <span>Магазин: </span><span class="blue"><a href="#" class="shop-link">tr.com</a></span></td>
                <td class="d-none"><span class="d-hidden">№ заказа: </span><a href="#" class="gray">036812</a></td>
                <td class="d-none"><span class="d-hidden">Магазин: </span>-</td>
                <td><span class="d-hidden">Дата </span>26.10.2018</td>
                <td><span class="d-hidden">Статус: </span><span class="bold-m">Ожидается оплата</span></td>
                <td><span class="d-hidden">К оплате: </span><span class="bold-m">8$</span><a class="gray">(Посмотреть расчет)</a></td>
                <td><span class="d-hidden d-none">Действие: </span><span class="btns"><a href="">Оплатить</a><a href="">Отказаться</a></span></td>
                <td><span class="d-hidden">Переписка по заказу: </span><img src="{{asset('myassets')}}/img/quest.svg"></td>
            </tr>
            <tr>
                <td class="mobile"><span class="blue"><a href="#">036812</a></span> | <span>Магазин: </span><span class="blue"><a href="#" class="shop-link">tr.com</a></span></td>
                <td class="d-none"><span class="d-hidden">№ заказа: </span><a href="#" class="gray">036812</a></td>
                <td class="d-none"><span class="d-hidden">Магазин: </span><a href="#">hj.ru</a></td>
                <td><span class="d-hidden">Дата </span>26.10.2018</td>
                <td><span class="d-hidden">Статус: </span><span class="bold-m">Ожидается оплата</span></td>
                <td><span class="d-hidden">К оплате: </span><span class="bold-m">25$</span><a class="gray">(Посмотреть расчет)</a></td>
                <td><span class="d-hidden d-none">Действие: </span><span class="btns"><a href="">Оплатить</a><a href="">Отказаться</a></span></td>
                <td><span class="d-hidden">Переписка по заказу: </span><img src="{{asset('myassets')}}/img/quest.svg"></td>
            </tr>
        </table>
        <p class="adr-p">Оплаченные заказы</p>
        <table class="action-it">
            <tr>
                <td><span>Дата</span></td>
                <td><span>№ заказа</span></td>
                <td><span>Магазин</span></td>
                <td><span>Оплачено</span></td>
                <td><span>Статус</span></td>
                <td><span>Ожидается</span></td>
                <td><span>Узнать</span></td>
            </tr>
            <tr>
                <td class="mobile"><a href="#" class="blue">036812</a> | <span>Магазин: </span><span class="blue"><a href="#" class="shop-link">tr.com</a></span></td>
                <td><span class="d-hidden">Дата </span>26.10.2018</td>
                <td class="blue d-none"><span class="d-hidden">№ заказа: </span><a href="#">036812</a></td>
                <td class="d-none"><span class="d-hidden">Магазин: </span>-</td>
                <td><span class="d-hidden">Оплачено: </span><span class="bold-m">25$</span><a class="gray">(Посмотреть расчет)</a></td>
                <td><span class="d-hidden">Статус: </span><span class="bold-m">Отправлен в <br>Украину</span></td>
                <td><span class="d-hidden">Ожидается примерно: </span><span class="bold-m">26.10.2018</span></td>
                <td><span class="d-hidden">Переписка по заказу: </span><img src="{{asset('myassets')}}/img/quest.svg"></td>
                <td class="d-hid"><a class="green-btn" href="">Заказ получен</a></td>
            </tr>
            <tr>
                <td class="mobile"><a href="#" class="blue">036812</a> | <span>Магазин: </span><span class="blue"><a href="#" class="shop-link">tr.com</a></span></td>
                <td><span class="d-hidden">Дата </span>26.10.2018</td>
                <td class="blue d-none"><span class="d-hidden">№ заказа: </span><a href="#">036812</a></td>
                <td class="d-none"><span class="d-hidden">Магазин: </span>-</td>
                <td><span class="d-hidden">Оплачено: </span><span class="bold-m">25$</span><a class="gray">(Посмотреть расчет)</a></td>
                <td><span class="d-hidden">Статус: </span><span class="bold-m">Отправлен в <br>Украину</span></td>
                <td><span class="d-hidden">Ожидается примерно: </span><span class="bold-m">26.10.2018</span></td>
                <td><span class="d-hidden">Переписка по заказу: </span><img src="{{asset('myassets')}}/img/quest.svg"></td>
                <td class="d-hid"><a class="green-btn" href="">Заказ получен</a></td>
            </tr>
            <tr>
                <td class="mobile"><a href="#" class="blue">036812</a> | <span>Магазин: </span><span class="blue"><a href="#" class="shop-link">tr.com</a></span></td>
                <td><span class="d-hidden">Дата </span>26.10.2018</td>
                <td class="blue d-none"><span class="d-hidden">№ заказа: </span><a href="#">036812</a></td>
                <td class="d-none"><span class="d-hidden">Магазин: </span>-</td>
                <td><span class="d-hidden">Оплачено: </span><span class="bold-m">25$</span><a class="gray">(Посмотреть расчет)</a></td>
                <td><span class="d-hidden">Статус: </span><span class="bold-m">Отправлен в <br>Украину</span></td>
                <td><span class="d-hidden">Ожидается примерно: </span><span class="bold-m">26.10.2018</span></td>
                <td><span class="d-hidden">Переписка по заказу: </span><img src="{{asset('myassets')}}/img/quest.svg"></td>
                <td class="d-hid"><a class="green-btn" href="">Заказ получен</a></td>
            </tr>
            <tr>
                <td class="mobile"><a href="#" class="blue">036812</a> | <span>Магазин: </span><span class="blue"><a href="#" class="shop-link">tr.com</a></span></td>
                <td><span class="d-hidden">Дата </span>26.10.2018</td>
                <td class="blue d-none"><span class="d-hidden">№ заказа: </span><a href="#">036812</a></td>
                <td class="d-none"><span class="d-hidden">Магазин: </span>-</td>
                <td><span class="d-hidden">Оплачено: </span><span class="bold-m">25$</span><a class="gray">(Посмотреть расчет)</a></td>
                <td><span class="d-hidden">Статус: </span><span class="bold-m">Отправлен в <br>Украину</span></td>
                <td><span class="d-hidden">Ожидается примерно: </span><span class="bold-m">26.10.2018</span></td>
                <td><span class="d-hidden">Переписка по заказу: </span><img src="{{asset('myassets')}}/img/quest.svg"></td>
                <td class="d-hid"><a class="green-btn" href="">Заказ получен</a></td>
            </tr>
            <tr>
                <td class="mobile"><a href="#" class="blue">036812</a> | <span>Магазин: </span><span class="blue"><a href="#" class="shop-link">tr.com</a></span></td>
                <td><span class="d-hidden">Дата </span>26.10.2018</td>
                <td class="blue d-none"><span class="d-hidden">№ заказа: </span><a href="#">036812</a></td>
                <td class="d-none"><span class="d-hidden">Магазин: </span>-</td>
                <td><span class="d-hidden">Оплачено: </span><span class="bold-m">25$</span><a class="gray">(Посмотреть расчет)</a></td>
                <td><span class="d-hidden">Статус: </span><span class="bold-m">Отправлен в <br>Украину</span></td>
                <td><span class="d-hidden">Ожидается примерно: </span><span class="bold-m">26.10.2018</span></td>
                <td><span class="d-hidden">Переписка по заказу: </span><img src="{{asset('myassets')}}/img/quest.svg"></td>
                <td class="d-hid"><a class="green-btn" href="">Заказ получен</a></td>
            </tr>
            <tr>
                <td class="mobile"><a href="#" class="blue">036812</a> | <span>Магазин: </span><span class="blue"><a href="#" class="shop-link">tr.com</a></span></td>
                <td><span class="d-hidden">Дата </span>26.10.2018</td>
                <td class="blue d-none"><span class="d-hidden">№ заказа: </span><a href="#">036812</a></td>
                <td class="d-none"><span class="d-hidden">Магазин: </span>-</td>
                <td><span class="d-hidden">Оплачено: </span><span class="bold-m">25$</span><a class="gray">(Посмотреть расчет)</a></td>
                <td><span class="d-hidden">Статус: </span><span class="bold-m">Отгружено <br>клиенту</span></td>
                <td><span class="d-hidden">Ожидается: </span><span class="blue">Доставлен</span></td>
                <td><span class="d-hidden">Переписка по заказу: </span><img src="{{asset('myassets')}}/img/quest.svg"></td>
                <td class="d-hid"><a class="green-btn" href="">Заказ получен</a></td>
            </tr></span>
        </table>
    </section>
</main>

@include('layouts.request-link')

@endsection