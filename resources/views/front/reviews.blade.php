@extends('layouts.common')

@section('content')
  <section class="reviews-section">
        <div class="container">
            <h1 class="title ta-left" data-aos="fade-down">Отзывы</h1>
            <p class="reviews__sub-title">Отзыв можно оставить только к существующему заказу</p>
            <div class="container-reviews">
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
                    <p class="review-item__desc">Купил механическую клавиатуру с сайта https://mechanicalkeyboards.com/. все супер, даже раньше пришла чем я ожидал)
                    </p>
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
            <ul class="pagination">
                <li><a class="pagination__item pagination__item--first" href="/reviews">На первую</a></li>
                <li><a class="pagination__item pagination__item--prev" href="/reviews">‹</a></li>
                <li><span class="pagination__item pagination__item--active">1</span></li>
                <li><a class="pagination__item" href="/reviews?p=50">2</a></li>
                <li><a class="pagination__item" href="/reviews?p=100">3</a></li>
                <li><a class="pagination__item pagination__item--next" href="/reviews">›</a></li>
                <li><a class="pagination__item pagination__item--last" href="/reviews?p=300">На последнюю</a></li>
            </ul>
        </div>
    </section>
    <section class="text-section">
        <div class="container">
            <div class="text-container">
                <p>Высокое качество продукции, низкая цена и новинки зарубежных магазинов всегда привлекали внимание нашего потребителя, при этом, устоять от соблазна и приобрести понравившийся товар, оказывается очень сложно. Особенно данное утверждение справедливо относительно Интернет – магазинов, отправляющих свою продукцию не только в пределах страны своей дислокации, но и далеко за ее пределы.</p>
                <p>Вместе с этим, справиться с заказом интересуемого лота простому обывателю оказывается достаточно сложно, особенно если ресурс не имеет русскоязычной версии и службы поддержки или отправки заказов в любые страны мира. В этом могут помочь посреднические фирмы, которые за умеренную плату берут на себя обязательства поставить тот или иной товар.</p>
                <p>Высокий уровень сервиса, ответственный подход к своей работе, гарантия на предоставляемые услуги встретите с сервисом Биг-Баскет, ориентированным на поставку всевозможных изделий из зарубежных магазинов, в частности eBay и Amazon. Все что потребуется от заказчика, сделать запрос на поиск и доставку интересующего продукта, либо найти конкретный продукт. Все остальное берет на себя компания Биг-Баскет, способная на высоком уровне организовать процесс приобретения и поставки заказанных изделий.</p>
                <p>Теперь ничто не мешает вам в любом магазине мира делать заказы, при этом осуществить это максимально безопасно, комфортно и быстро. Стоит отметить, что данным сервисом уже воспользовалось достаточно большое число людей, наших соотечественников, которые оставили только положительные отзывы о работе компании. Более того, многие из них повторно обращаются за услугами сервиса и положительно оценивают его деятельность.</p>
            </div>
        </div>
    </section>
 
@include('layouts.request-link')

@endsection