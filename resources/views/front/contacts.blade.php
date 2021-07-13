@extends('layouts.common')

@section('content')
<main class="cont">
    <section class="contact-section">
        <div class="container">
            <h1 class="title ta-left">Контакты</h1>
            <div class="contact-row">
                <div class="contact-coll">
                    <h2 class="contact-coll__title">Режим работы</h2>
                    <p class="contact__contain_icon contact__contain_icon--time">Пн-Пт: 09:00-18:00,
                        Сб-Вс: выходные дни
                    </p>
                    <p class="contact__contain_icon contact__contain_icon--time">Выдача посылок с 10:00 до 18:00</p>
                </div>

                <div class="contact-coll">
                    <h2 class="contact-coll__title">Телефоны</h2>
                    <a class="contact__contain_icon contact__contain_icon--phone" href="tel:+0444667446">044 466 74 46</a>
                    <a class="contact__contain_icon contact__contain_icon--kyivstar" href="tel:+0970580558">097-058-0-558</a>
                    <a class="contact__contain_icon contact__contain_icon--life" href="tel:+0639530227">063-953-0227</a>
                </div>
                <div class="contact-coll">
                    <h2 class="contact-coll__title">Электронная почта</h2>
                    <a class="contact__contain_icon contact__contain_icon--email" href="mailto:sales@big-basket.net">sales@big-basket.net</a>
                </div>
                <div class="contact-coll">
                    <h2 class="contact-coll__title">Адрес</h2>
                    <p class="contact__contain_icon contact__contain_icon--map"><b>Склад: </b> Киев, ул. В. Касияна 1</p>
                    <p class="contact__contain_icon contact__contain_icon--map"><span><b>Офис: </b> Встречи в офисе возможны только по заключению партнерских договоров</span></p>
                </div>

            </div>
        </div>
    </section>

    <section class="add-question-section">
        <div class="container">
            <div class="add-question-wrapper">
                <div class="contact-contain-photo">
                    <h2 class="add-question-title title ta-left">Обратная связь</h2>
                    <form action="#" class="simple-form for-xss">
                        <input class="simple-form__input" type="text" placeholder="Ваше имя">
                        <input class="simple-form__input" type="email" placeholder="Ваш e-mail">
                        <textarea class="simple-form__textarea" name="message" placeholder="Вопрос"></textarea>
                        <button class="simple-form__btn btn btn--blue-gradient" type="submit">Отправить</button>
                    </form>
                    <div class="contact-contain-photo__wrapper">
                        <img src="{{asset('myassets')}}/img/section/contact/photo1.webp" alt="">
                        <img src="{{asset('myassets')}}/img/section/contact/photo2.webp" alt="">
                    </div>
                </div>

                <form class="simple-form for-descs" action="{{route('sendMail')}}" method="GET" enctype="multipart/form-data">
                    <input class="simple-form__input" name="name" type="text" placeholder="Ваше имя">
                    <input class="simple-form__input" name="email" type="email" placeholder="Ваш e-mail">
                    <textarea class="simple-form__textarea" name="message" placeholder="Вопрос"></textarea>
                    <button class="simple-form__btn btn btn--blue-gradient" type="submit">Отправить</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
    </section>


    @include('layouts.request-link')
    
</main>

@endsection
