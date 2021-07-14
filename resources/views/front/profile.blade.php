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
                <a href="{{route('zakaz')}}" >Заказы</a>
                <a href=""><span class="for-desc">Мой почтовый ящик</span><span class="for-mob">MF</span></a>
                <a href=""><span class="for-desc">Кошелек</span><span class="for-mob">Баланс</span></a>
                <a href="{{route('profile')}}" class="active">Профиль</a>
            </div>
            <div class="my-money">
                <p class="count"><img src="{{asset('myassets')}}/img/carts.png">395.05 UAH<br>
                    <span>= 13.87 $ = 11.75 $ = 10.69 £ <span class="tooltip"> <img src="{{asset('myassets')}}/img/q-icon.svg" alt="">
                                <span class="tooltiptext zak">Указываются валютные эквиваленты вашего баланса по текущему курсу</span>
                            </span></span></p>
            </div>
        </div>
        <h2 class="b-title bold img">Профиль</h2>
        <div class="profile__warning">
            <img class="profile__warning_sign" src="{{asset('myassets')}}/img/note.png">
            <span class="profile__warning_text">
                Убедительно просим Вас заполнить персональные данные и адрес! В противном случае, доставка Ваших заказов может сильно задержаться. 
                Также учтите, что доставка по Украине оплачивается отдельно при получении посылки.
            </span>
        </div>
        <form class="profile__form" action="" method="">
            <div class="profile__form_block">
                <p class="adr-p">Личные данные</p>
                <input class="req-i2" name="name" placeholder="Имя">
                <input class="req-i2" name="surname" placeholder="Фамилия">
                <input class="req-i2" name="paronim" placeholder="Отчество">
                <input class="req-i2" name="email" placeholder="Почта">
                <input class="req-i2" name="phone" placeholder="Номер телефона">
                <input type="checkbox" name="sms-info" id="cb1">
                <lable for="cb1">Подключить SMS-информирование</lable>
            </div>
            <div class="profile__form_block">
                <p class="adr-p">Адрес</p>
                <input class="req-i2" name="name" placeholder="Город">
                <input class="req-i2" name="surname" placeholder="Улица">
                <select class="calculate-row__select js-select" name="delivery-type">
                    <option value="courier" code="128" selected="selected">Курьером по Киеву</option>
                    <option value="nova-post" code="128">Новая почта</option>
                    <option value="self" code="128">Самовывоз со склада в Киеве</option>
                </select>
                <input type="checkbox" name="sms-info" id="cb1">
                <lable for="cb1">Подключить SMS-информирование</lable>
            </div>
            <div class="profile__form_block">
                <p class="adr-p">Сменить пароль</p>
                <input class="req-i2" name="name" placeholder="Старый пароль">
                <input class="req-i2" name="surname" placeholder="Новый пароль">
                <input class="req-i2" name="paronim" placeholder="Подтвердите пароль">

                <input class="btn btn--blue-gradient" type="submit" value="Редактировать">
            </div>

        </form>
    </section>
</main>



@endsection