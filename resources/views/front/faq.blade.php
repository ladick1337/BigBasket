
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--     <link rel="stylesheet" href="css/fonts.css">
    <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
        <link rel="preload" href="{{asset('myassets')}}/fonts/ProximaNova-Black.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{asset('myassets')}}/fonts/ProximaNova-Light.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{asset('myassets')}}/fonts/ProximaNova-Regular.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{asset('myassets')}}/fonts/ProximaNova-Extrabld.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{asset('myassets')}}/css/jcar.css">
     <link rel="stylesheet" href="{{asset('myassets')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('myassets')}}/css/owl.theme.default.min.css">
       <link rel="stylesheet" href="{{asset('myassets')}}/css/app.css">
</head>

<body>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <a href="/"><img class="header-top__logo" src="{{asset('myassets')}}/img/logo_main.png" alt=""></a>
                <div class="header-top-links">
                    <a class="header-top-links__phone"  href="tel:+0444667446">044 466 74 46</a>
                    <div class="header-top-links__links">
                        <a href="#" id="myBtn">Вход</a>
                        <span>/</span>
                        <a href="#" id="myBtn2">Регистрация</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-mobile">
        <div class="container">
            <div class="header-mobile-container">
                <div class="header-mobile__toggle js-toggle">
                    <div class="toggle__1"></div>
                    <div class="toggle__2"></div>
                    <div class="toggle__3"></div>
                </div>
                <img class="header-mobile__logo" src="{{asset('myassets')}}/img/mobile_logo_main.webp" alt="">

                <a href="#" class="btn btn--orange">Заказать</a>
            </div>
        </div>
    </div>

    <div class="header-main js-nav-mobile">
        <div class="container">
            <div class="header-main-wrapper">
                <nav class="header-main-nav">
                    <ul>
                        <li><a class="header-main-nav__link" href="{{route('ebay')}}">eBay</a></li>
                        <li><a class="header-main-nav__link" href="{{route('amazon')}}">Amazon</a></li>
                        <li><a class="header-main-nav__link" href="{{route('tarif')}}">Цены</a></li>
                        <li><a class="header-main-nav__link" href="{{route('mf')}}">MF</a></li> <!-- header-main-nav__link--active -->
                        <li><a class="header-main-nav__link" href="{{route('shops')}}">Магазины</a></li>
                        <li><a class="header-main-nav__link" href="{{route('contacts')}}">Контакты</a></li>
                    </ul>
                </nav>
                <div class="header-main-panel">
                    <div class="header-main-panel__links">
                        <a href="{{route('calculate')}}" class="link-calc">Расчет доставки</a>
                        <a href="{{route('faq')}}" class="link-support">Помощь</a>
                    </div>
                    <a href="{{route('openShop')}}" class="btn btn--orange">Заказ по ссылке</a>
                </div>
            </div>
        </div>
    </div>
</header>

  <section class="faq-section">
        <div class="container">
            <h1 class="title ta-left">Часто задаваемые вопросы</h1>
            <div class="faq-tabs">
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как сделать заказ в интернет-магазине?</h2>
                    <div class="text-container question__answer">
                        

                        <ol>
                            <li>Авторизуйтесь на сайте (введите свой логин и пароль)</li>
                            <li>Нажмите на кнопку «Создать новый заказ». На появившейся странице заполните необходимые поля:

                                <ul>
                                    <li>Название магазина (например amazon.com). Учтите, что вы не можете объединить в один заказ товары из разных сайтов. Один заказ = один магазин!</li>
                                    <li>Комментарий ко всему заказу (если есть какие-то пожелания или уточнения, напишите о них тут)</li>
                                    <li>Ссылка на товар (из своего браузера скопируйте полный адрес станицы, на которой размещен нужный вам товар, например <a href="https://www.amazon.com/Kindle-Paperwhite-Touch-light/dp/B007OZNZG0/ref=sr_tr_sr_1?ie=UTF8&qid=1355290756">https://www.amazon.com/Kindle-Paperwhite-Touch-light/dp/B007OZNZG0/ref=sr_tr_sr_1?ie=UTF8&qid=1355290756</a>) Если товаров несколько, то нужно указать все ссылки (для каждого товара отдельно)</li>
                                    <li>Комментарий (уточнения по товару, например конкретный цвет, размер или модель)</li>
                                    <li>Количество (сколько единиц этого товара вы хотите заказать)</li>
                                    <li>Стоимость (укажите стоимость этого товара, указанную на сайте)</li>
                                    <li>Если вы хотите заказать более трех позиций с этого магазина, воспользуйтесь кнопкой «Добавить еще 10 позиций из этого магазина». Система откроет больше полей для заполнения.</li>
                                    <li>Далее нужно выбрать страну, в которой находится магазин. Если вы не уверены, то выбирайте страну, соответствующую валюте в которой показаны цены на сайте.</li>
                                    <li>Укажите Стоимость доставки внутри страны продавца (магазина). Эта информация размещена на странице с товаром или на отдельной соответствующей странице сайта, или на странице подтверждения заказа (для этого попробуйте добавить нужные товары в корзину магазина, нажать Checkout и следовать дальнейшим инструкциям). Если вы не уверены в правильности этой информации, оставьте поле пустым. Мы с радостью сделаем это за вас</li>
                                    <li>Введите ориентировочный вес товаров. Прикиньте сколько полных килограмм весят все товары из этого заказа и введите эту сумму. Не волнуйтесь, если вес будет не совпадать, мы обязательно сделаем перерасчет по факту взвешивания вашей посылки на складе.</li>
                                    <li>Введите адрес доставки для этого заказа</li>
                                    <li>Укажите способ доставки, при необходимости выберете галочкой дополнительные услуги</li>

                                </ul>
                            </li>
                            <li>Далее вы увидите расчет, который система сделала автоматически на основании введенных вами данных и наших тарифов. Если введенные вами данные, окажутся не точными, мы сделаем перерасчет</li>
                            <li>Прочитайте Условия пользования сервисом и подтвердите свое согласие установкой галочки. Подтверждая этот заказ, вы автоматически соглашаетесь со всеми перечисленными Условиями.</li>
                            <li>Воспользуйтесь кнопкой «Отправить менеджерам на проверку», чтобы отправить нам свой заказ. После того, как мы проверим наличие товаров и правильность введенных данных, вам будет выставлен счет с указанием окончательной суммы заказа. Вы сможете увидеть его во вкладке Мои заказы/Активные заказы/Неоплаченные. О выставленном счете вы также получите уведомление на email со всеми деталями заказа. Для того, чтобы оплатить заказ, нажмите кнопку «Оплатить» возле появившегося заказа в личном кабинете (Мои заказы/Активные заказы/Неоплаченные). Необходимая сумма будет списана с вашего баланса и заказ перейдет к нашим специалистам для выкупа товаров. Только с этого момента ваш заказ будет подтвержденным. Если суммы на балансе недостаточно, система предложит вам пополнить баланс</li>
                            <li>Если суммы на вашем балансе достаточно для оплаты данного заказа, вы также увидите кнопку «Подтвердить заказ». Ее можете использовать, если вы уверены в правильности заполнения полей, либо не хотите ждать пока менеджеры обработают ваш заказ. В случае Подтверждения заказа, он напрямую попадает к специалисту для выкупа товаров, поэтому вы сэкономите много времени. После нажатия этой кнопки, сумма с вашего баланса спишется мгновенно. Если при создании заказа были допущены какие-то ошибки, то специалист исправит их и вам будет сделан перерасчет по факту произведенных затрат. Выбирая этот способ подтверждения заказа, вы соглашаетесь с тем, что ваш баланс может быть изменен без вашего уведомления! (но только в рамках фактических расходов на заказ и согласно тарифам Big-Basket</li>
                            <li>С момента оплаты вашего заказа, он будет отображаться в Оплаченных (Мои заказы/Активные заказы). Там же вы можете видеть текущий статус вашего заказа. Обо всех изменениях статуса, вы будете получать уведомление на email.</li>
                        </ol>
                    </div>
                </div>
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как сделать заказ с сайта eBay?</h2>
                    <div class="text-container question__answer">
                        <p>Нижеприведенная инструкция относится только для товаров eBay по фиксированной цене (Buy it now, Купить сейчас). О том как участвовать в торгах на аукционе читайте отдельную инструкцию.Вы можете сделать заказ с eBay точно также как и заказ с обычного интернет-магазина.Помимо этого, вы можете воспользоваться нашим руссифицированным каталогом eBay и сделать заказ с его помощью.</p>
                        <ol>
                            <li>Для этого откройте каталог на главной странице сайта и выберете нужный вам товар. При необходимости используйте поиск каталога, введя нужный поисковой запрос (например «iPad 4»).</li>
                            <li>Добавляйте нужные товары в корзину, которая будет отображаться в правом верхнем углу экрана.</li>
                            <li>Нажмите на корзину с товарами. Вы окажитесь на странице с добавленными товарами. Для создания заказа заполните необходимые поля. Дальнейшие шаги точно такие-же как и при создании заказа в интернет-магазине.</li>
                        </ol>
                    </div>
                </div>
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как участвовать в торгах на аукционе eBay?</h2>
                    <div class="text-container question__answer">
                        <ol>
                            <li>Выберете лот через наш каталог eBay (для участия в торгах подходят все товары с пометкой “Аукцион” или кнопкой “Участвовать в торгах”) либо введите ссылку на товар с сайта eBay.com (для этого нажмите на кнопку «Новый аукцион» во вкладке Мои заказы/Аукционы).</li>
                            <li>Укажите размер ставки для этого лота. Учтите, что помимо этой суммы, в случае выигрыша, вам нужно будет оплатить все расходы связанные с покупкой и доставкой данного товара (согласно тарифам Big-Basket). Учтите, что размер ставки не может превышать остаток на вашем балансе. Если средств на балансе недостаточно, его необходимо пополнить.</li>
                            <li>После нажатия кнопки «Принять участие в аукционе» ваша заявка подтверждена.</li>
                            <li>Если вы хотите изменить размер ставки или отказаться от участия в торгах, вы можете сделать это во вкладке Мои заказы/Аукционы/Текущие аукционы.</li>
                            <li>В случае победы или проигрыша на аукционе, вам придет соответствующее уведомление на email.</li>
                            <li>В случае выигрыша лота, с вашего баланса будет списана сумма за весь заказ (включая все расходы на его доставку).</li>
                            <li>С момента оплаты вашего заказа, он будет отображаться в Оплаченных (Мои заказы/Активные заказы). Там же вы можете видеть текущий статус вашего заказа. Обо всех изменениях статуса, вы будете получать уведомление на email.</li>
                            
                        </ol>
                    </div>
                </div>
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как оплачивать (подтверждать) заказы?</h2>
                    <div class="text-container question__answer">
                        <p>Учтите, что простого пополнения баланса недостаточно для оплаты и подтверждения заказа! Мы не можем знать с какой целью вы пополнили баланс. Заказ считается оплаченным только тогда, когда вы его подтвердили и с вашего баланса списана соответствующая сумма.</p>
                        <p>Ваш заказ считается оплаченным и подтвержденным в одном из следующих случаев:</p>
                        <ol>
                            <li>Если при создании заказа вы нажали на кнопку «Отправить менеджерам на проверку», то ваш заказ будет считаться подтвержденным и оплаченным, только в случае нажатия на кнопку «Оплатить» (которая появится во вкладке Мои заказы/Активные заказы/Неоплаченные после выставления вам счета). До тех пор, пока вы не оплатите заказ с помощью этой кнопки, он будет не подтвержден!</li>
                            <li>2Если при создании заказа вы нажали на кнопку «Подтвердить заказ», то оплата происходит мгновенно (сумма сразу списывается с вашего баланса).</li>
                            <li>При участии в торгах на аукционе eBay, оплата за заказ происходит только в случае выигрыша вами лота (ничего делать не нужно, мы сами спишем необходимую сумму со счета)</li>
                        </ol>
                    </div>
                </div>
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как пополнить свой баланс?</h2>
                    <div class="text-container question__answer">
                        <ol>
                            <li>Для того чтобы пополнить свой баланс, откройте вкладку Кошелек и выберете наиболее подходящую форму оплаты. Следуйте дальнейшим инструкциям.</li>
                            <li>При заполнении поля «Сумма оплаты» введите сумму в той валюте, которой хотите пополнить свой баланс. Если сам платеж осуществлялся в гривнах, то отметьте галочкой соответствующую опцию и введите также сумму пополнения в гривнах (для идентификации вашего платежа). По желанию, вы можете прикрепить квитанцию платежа.</li>
                            <li>Далее ваш платеж отправляется нашим сотрудникам для авторизации. После подтверждения, ваш баланс будет пополнен. В случае пополнения баланса on-line с помощью карт Visa и MasterCard, средства на счет зачисляются мгновенно.</li>
                            <li>Учтите, что простого пополнения баланса недостаточно для оплаты и подтверждения заказа! Мы не можем знать с какой целью вы пополнили баланс. Заказ считается оплаченным только тогда, когда вы его подтвердили и с вашего баланса списана соответствующая сумма (см. пункт выше)</li>
                        </ol>
                    </div>
                </div>
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как отслеживать статус своего заказа?</h2>
                    <div class="text-container question__answer">
                        <ol>
                            <li>С момента оплаты вашего заказа, он будет отображаться в Оплаченных (Мои заказы/Активные заказы). Там же вы можете видеть текущий статус вашего заказа. Обо всех изменениях статуса, вы будете получать уведомление на email</li>
                        </ol>
                    </div>
                </div>
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как пользоваться услугой «Мой почтовый ящик»?</h2>
                    <div class="text-container question__answer">
                        <ol>
                            <li>Для пользования услугой вам необходимо ее активировать. Во вкладке «Мой почтовый ящик» система попросит вас выслать скан-копию вашего паспорта. Это необходимо во избежание мошенничества по использованию чужих кредитных карт. Компания Big-Basket обязуется сохранять конфиденциальность полученной информации и не использовать эти данные в других целях.</li>
                            <li>После того, как наши сотрудники рассмотрят вашу заявку, вы получите доступ к функционалу «Моего почтового ящика». Для начала советуем ознакомиться с информацией «Мои адреса и тарифы».</li>
                            <li>Теперь, получив свой собственный адрес за рубежом, вы можете отправлять туда свои заказы. Для их отправки в Украину, не требуется делать дополнительных запросов. Все пришедшие на склады посылки отправляются автоматически каждую неделю</li>
                            <li>Для того, чтобы отслеживать статус своих посылок и получать другую необходимую информацию, вам нужно добавлять отправленные посылки в систему. Для этого перейдите на страницу «Добавить новые посылки» и заполните необходимые поля.</li>
                            <li>Теперь вы можете отслеживать статус ваших посылок. Обо всех изменениях статуса, вы будете получать уведомление на email. Когда посылки прибудут на склад в Киев, они будут взвешаны и с вашего баланса спишется соответствующая сумма (согласно тарифам). Если суммы на балансе будет недостаточно, то он “уйдет в минус” и доставка ваших посылок будет приостановлена до момента оплаты. Поэтому, рекомендуем вам заранее пополнять свой баланс.</li>
                        </ol>
                    </div>
                </div>
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как восстановить пароль?</h2>
                    <div class="text-container question__answer">
                        <ol>
                            <li>Если вы забыли свой пароль, воспользуйтесь механизмом его восстановления. Для этого нажмите на кнопку "Вход" в правом верхнем углу сайта. В появившемся окнке нажмите "Забыли пароль". Далее вам нужно ввести адрес электронной почты, который использовался при регистрации аккаунта. Нажмите "Восстановить". На указанный адрес прийдет ссылка для восстановления пароля.</li>
                            <li>Если пароль восстановить не удалось, попробуйте очистить кэш в браузере или попробовать операцию с другого браузера/компютера. Если и это не поможет, оставьте запрос на восстановление пароля нашим менеджерам через страницу сайта "Контакты".</li>
                        </ol>
                    </div>
                </div>
                <div class="question">
                    <h2 class="question__title js-question-toggle">Как снять (вывести) деньги с баланса Big-Basket?</h2>
                    <div class="text-container question__answer">
                        <ol>
                            <li>Для того, чтобы вывести средства со своего баланса, вам необходимо авторизоваться в системе (войти в личный кабинет). Откройте вкладку "Кошелек" и выберите "Вывод средств". Подвтердите на счет какого банка вы хотите вывести средства (Приват-банк, любой другой украинский банк, денежные переводы Privat Money). Далее вам нужно указать реквизиты своего счета, а также сумму вывода. Подвтердив заявку, ожидайте возврата средств в течении одного рабочего дня.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="add-question-section faq-quest">
    <div class="container">
        <div class="add-question-wrapper">
            <h2 class="add-question-title title ta-left">Остались вопросы? Задайте их нам</h2>
            <form action="{{route('sendMail')}}" class="simple-form">
                <input class="simple-form__input" type="text" placeholder="Ваше имя">
                <input class="simple-form__input" type="email" placeholder="Ваш e-mail">
                <textarea class="simple-form__textarea" name="message" placeholder="Вопрос"></textarea>
                <button class="simple-form__btn btn btn--blue-gradient" type="submit">Отправить</button>
            </form>
        </div>
    </div>
</section>
    <section class="link-form-section">
    <div class="container">
        <div class="link-form-section-wrapper">
            <div class="link-form-tab">
    <label class="link-form-tab__item link-form-tab__item--active" for="link"> Заказать по ссылке</label>
    <a class="link-form-tab__item" href="#">Каталог еВау</a>
    <a class="link-form-tab__item" href="#">Получить адрес в США</a>
</div>
<form class="link-form" action="#">
    <input  class="link-form__input" type="text" name="link" id="link" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/">
    <button class="link-form__btn btn btn--orange" type="submit">Заказать этот товар</button>
</form>
        </div>
    </div>
</section>





<footer class="footer-section">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-coll footer-coll--logo-coll">
                <img  class="footer-coll__logo" src="{{asset('myassets')}}/img/logo_footer.png" alt="">
                <!-- <p class="footer-coll__copyright">Дизайн сайта: FRONTMEN</p> -->
                <p class="footer-coll__copyright">© 2009-2021 Big-Basket Все права защищены</p>
            </div>
            <div class="footer-coll">
                <p class="footer-coll__title js-toggle-footer-menu">Навигация</p>
                <ul>
                    <li><a class="footer-coll__link" href="#">Схема работы</a></li>
                    <li><a class="footer-coll__link" href="#">Тарифы</a></li>
                    <li><a class="footer-coll__link" href="#">eBay</a></li>
                    <li><a class="footer-coll__link" href="#">Amazon</a></li>
                </ul>
            </div>

            <div class="footer-coll">
                <p class="footer-coll__title js-toggle-footer-menu">Блог</p>
                <ul>
                    <li><a class="footer-coll__link" href="#">Покупаем выгодно с 6pm</a></li>
                    <li><a class="footer-coll__link" href="#">Как сделать заказ в каталоге Ebay и Amazon</a></li>
                    <li><a class="footer-coll__link" href="#">Как купить товары на Ebay в Германии</a></li>
                </ul>
            </div>

            <div class="footer-coll">
                <p class="footer-coll__title js-toggle-footer-menu">Контакты</p>
                <div class="footer-coll__content">
                    <p><b>Офис: </b> <a href="tel:+380444667446">044 466 74 46</a></p>
                    <p><b>Моб: </b> <a href="tel:+380639530227">063-953-0227</a>,  <a href="tel:+38097-058-0-558">097-058-0-558</a></p>
                    <p><b>Email: </b> <a href="mailto:sales@big-basket.net">sales@big-basket.net</a></p>
                    <p><b>Режим работы: </b> <span>пн-пт 09:00-18:00</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="myModal" class="modal">


  <div class="modal-content">
    <div class="modal-inner">
      <span class="close close1">&times;</span>
      <h2>Авторизация</h2>
      <form action="">
        <input type="email" required placeholder="Ваш e-mail:">
        <input type="password" required placeholder="Пароль">
        <a href="">Забыли пароль?</a>
        <a href=""> Регистрация</a>
        <button type="submit">Войти</button>
      </form>
  </div>
</div>

</div>

<div id="myModal2" class="modal">


  <div class="modal-content">
    <div class="modal-inner">
      <span class="close close2">&times;</span>
      <h2>Регистрация</h2>
      <form action="" class="reg">
        <input type="email" required placeholder="ФИО:">
        <input type="email" required placeholder="Ваш телефон:">
        <input type="email" required placeholder="Ваш e-mail:">
        <input type="password" required placeholder="Пароль">
        <div>
          <input type="checkbox" id="cb1"> <label for="cb1">Я согласен с <a href="#">Условиями пользованием сорвиса</a></label>
        </div>
        <div>
          <input type="checkbox" id="cb2"> <label for="cb2">Подписаться на новости и акции</label>
        </div>
        <button type="submit">Зарегистрироваться</button>
      </form>
  </div>
</div>

</div>




<!-- <script src="js/jquery-3.4.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{asset('myassets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('myassets')}}/js/jquery.knob.min.js"></script>
    <script src="{{asset('myassets')}}/js/jquery.redcountdown.js"></script>
    <script>
        $(document).ready(function() {
            var nowDate = new Date();
            var endDate = new Date(nowDate.getTime()+60*40*20);
            $('.js-timer-sale').redCountdown({preset: "custom", end:  endDate.getTime(), now:  nowDate.getTime()});


            $('.js-owl-carousel').owlCarousel({
                loop:true,
                nav:true,
                navText : ["", ""],
                dots: false,
                autoHeight: true,
                margin:20,
                smartSpeed: 3000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                }
            });

        });
    </script>
    <script>
 var d = new Date(Date.now());
 month = ['января', 'февраля', 'марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'];

d.setDate(d.getDate() + 1);

str = d.getDate()+' '+month[d.getMonth()];
document.querySelector('.nextWebinar').textContent = str;
</script>
<!--  <script src="js/jquery.nselect.min.js"></script>
    <script>
        $('.js-select').nSelect();
    </script>
    <script src="js/jq-car.js"></script> -->
<script src="{{asset('myassets')}}/js/main.js"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
<script src="{{asset('myassets')}}/js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</body>
</html>
