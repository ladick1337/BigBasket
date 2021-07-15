@extends('layouts.common')

@section('content')
<main class="request">

    <div class="container inn">
  <h1 class="title ta-left">Заказ <span class="m-hidden">товара </span>по ссылке<span class="m-hidden sec-ti">Заполните форму и мы выставим вам счет в течении 1 рабочего часа</span></h1>
  <p class="d-hidden sec-ti">Заполните форму и мы выставим вам счет в течении 1 рабочего часа</p>

          <div class="tabs">
            <!-- <div class="tabs__nav">
                <a class="tabs__link tabs__link_active" href="#content-1">Быстро</a>
                <a class="tabs__link" href="#content-2">С расчетом</a>
            </div> -->
            <div class="tabs__content">
                <div class="tabs__pane tabs__pane_show" id="content-1">

                    <form id="request" action="{{route('makeRequest')}}">
                        <div id="my_field1">
                          <h2>Шаг 1. Добавьте ссылку на товар </h2>

                        @if(isset($link))
                        <div class="rows">
                          <div class="col-md-7">
                              <input name="link" type="text" class="req-i" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/" value="{{$link}}">
                          </div>
                          <div class="col-md-5">
                              <input name="data" type="text" class="req-i" placeholder="Укажите цвет, размер, кол-во, модель.">
                          </div>
                        </div>
                        @endif

                        <div class="rows">
                            <div class="col-md-7">
                                <input name="link" type="text" class="req-i" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/">
                            </div>
                            <div class="col-md-5">
                                <input name="data" type="text" class="req-i" placeholder="Укажите цвет, размер, кол-во, модель.">
                            </div>
                        </div>

                       </div>
                       <p class="addnew1">+ Добавить еще ссылку</p>
                       <h2>Шаг 2. Напишите уточнения или вопрос</h2>
                       <div class="texta">
                           <textarea name="comment" id="" placeholder="Комментарий к заказу"></textarea>
                       </div>

                      @if(!Auth::check())
                      <h2>Шаг 3. Укажите свои контакты</h2>
                       <div class="cols autoreg">
                           <input name="email" type="text" class="req-i2" placeholder="Ваш e-mail">
                           <input name="phone" type="text" class="req-i2" placeholder="Ваш номер телефона">
                       </div>
                       @endif
                       <input name="combined" type="text" id="combined" hidden>
                       <button id="submit" class="btn btn--blue-gradient" type="button">Отправить</button>
                    </form>


                </div>
                <!-- <div class="tabs__pane" id="content-2">
                    <form action="">
                        <div class="top-select">
                          <h2>Магазин</h2>
                          <div class="rows">
                            <div class="col-md-7">
                              <input type="text" name="" value="" placeholder="Укажите название магазина">
                            </div>
                            <div class="col-md-5">
                              <select class="choose-country" name="">
                                <option value="">США</option>
                                <option value="">Канада</option>
                                <option value="">Бразилия</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="items-req"  id="my_field2">
                            <h2>Товары</h2>
                          <div>
                            <div class="item-one">
                              <input type="text" class="href-i" name="" value="" placeholder="Вставьте ссылку на товар">
                              <label  for="">
                                <input class="price-l" type="text" name="" value="" placeholder="Цена на сайте">
                                <span>$</span>
                              </label>
                              <label class="count-l" for="">
                                <input type="text" name="" value="" placeholder="1">
                                <span>шт</span>
                              </label>
                              <input class="color-i" type="text" name="" value="" placeholder="Размер / Цвет">
                              <div class="flex-m"><button type="button" name="button"><img src="img/delete.svg" alt=""></button><span class="d-hidden"> Удалить</span></div>
                            </div>
                            
                          </div>
                           
                        </div>
<p class="addnew2">+ Добавить еще товар</p>
                        <div class="req-sum">

                          <div class="elem">
                            <p>Ориентировочный вес товара (ов):</p>
                            <span>(введите число)</span>
                            <label>
                              <input type="text" name="" value="" placeholder="1">
                              <span>кг</span>
                            </label>
                          </div>
                          <div class="elem">
                            <p>Стоимость доставки по стране магазина:</p>
                            <span>(если не уверены, оставьте поле пустым)</span>
                            <label>
                              <input type="text" name="" value="" placeholder="0">
                            </label>
                          </div>
                        </div>
                          <h2>Доставка</h2>
                        <table class="req-table">
                          <tbody>
                            <tr class="m-hidden">
                              <td>Способ доставки</td>
                              <td>Сроки с момента отправки с зарубежного склада</td>
                              <td>Сроки с момента оплаты </td>
                              <td>Тариф</td>
                            </tr>
                            <tr class="d-hidden blue-table">
                              <td colspan="4">Способ доставки</td>
                            </tr>
                            <tr>
                              <td>
                                <input class="custom-radio" type="radio" id="color-1" name="color" value="indigo">
                                <label for="color-1">Авиа<span class="d-hidden">, <span class="bold">9$/кг</span></span></label>
                              </td>
                              <td><span class="d-hidden">Сроки с момента отправки с зарубежного склада: </span>4-6 дней</td>
                              <td><span class="d-hidden">Сроки с момента оплаты: </span>1-3 недели</td>
                              <td class="m-hidden bold">9$/кг</td>
                            </tr>
                            <tr>
                              <td>
                                <input class="custom-radio" type="radio" id="color-2" name="color" value="indigo">
                                <label for="color-2">Морем<span class="d-hidden">, <span class="bold">4$/кг</span></span></label>
                              </td>
                              <td><span class="d-hidden">Сроки с момента отправки с зарубежного склада: </span>3-5 недель</td>
                              <td><span class="d-hidden">Сроки с момента оплаты: </span>≈ 4-6 недель</td>
                              <td class="m-hidden bold">4$/кг</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="checkboxes-req">
                        <div class="chckbx">
          <input type="checkbox" id="cb1"> <label for="cb1">Есть ли в этом заказе: электроника / часы / очки / украшения / более 2 единиц одинакового товара?<span class="tooltip"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext zak">Указываются валютные эквиваленты вашего баланса по текущему курсу</span>
                            </span></label>
        </div>
        <div class="chckbx">
          <input type="checkbox" id="cb2"> <label for="cb2">Проверить содержимое посылки на соответствие описанию (электронику на включение/выключение) + 5$. <span class="tooltip"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext zak">Указываются валютные эквиваленты вашего баланса по текущему курсу</span>
                            </span></label>
        </div>
        <div class="chckbx">
          <input type="checkbox" id="cb3"> <label for="cb3"><div>Дополнительная упаковка. В зависимости от габаритов + 5-10$<br><span class="grau-tra">(сумма будет уточнена по факту переупаковки)</span></div>
            <span class="tooltip"> <img src="img/q-icon.svg" alt="">
                                <span class="tooltiptext zak">Указываются валютные эквиваленты вашего баланса по текущему курсу</span>
                            </span>
            <br>
</label>
        </div>
      </div>
      <div class="req-math">
        <h2 class="mini-title">Расчет стоимости заказа</h2>
        <table>
          <tbody>
            <tr>
              <td>Общая стоимость всех товаров:</td>
              <td>0 $</td>
            </tr>
            <tr>
              <td>Стоимость доставки по стране магазина:</td>
              <td>0 $</td>
            </tr>
            <tr>
              <td>Стоимость доставки в Украину:</td>
              <td>8 $</td>
            </tr>
            <tr>
              <td>Брокерские услуги (10%):</td>
              <td>0 $</td>
            </tr>
            <tr>
              <td>Комиссия Big-Basket:</td>
              <td>10 $</td>
            </tr>
            <tr>
              <td>Скидка:</td>
              <td>0 $</td>
            </tr>
            <tr>
              <td>Предварительная стоимость заказа:</td>
              <td>18 $</td>
            </tr>
          </tbody>
        </table>
      </div>
      <h2>Контактная информация</h2>
                             <div class="texta">
                           <textarea name="comment" id="" placeholder="Комментарий к заказу"></textarea>
                       </div>

                      <br>
                       <div class="cols">
                           <input type="text" class="req-i2" placeholder="Ваш e-mail">
                           <input type="text" class="req-i2" placeholder="Ваш номер телефона">
                       </div>
                       <button class="btn btn--blue-gradient" type="submit">Отправить на проверку</button>
                    </form>
                </div>
            </div> -->
        </div>
        </div>
</main>
<!-- <script>
document.getElementById("addnew").onclick = function (){
document.getElementById("my_field").innerHTML += "<div class=\"my_block\"><label>Значение:</label><input type=\"text\" class=\"val\" name=\"val\" value=\"1,0\" /></div>";
}
</script> -->
<
<script>
  $(submit).click(function () {
   
   
    let arr = [];
    $(".rows").each(function () {
      arr.push({
        link: $(this).find('[name="link"]').val(),
        data: $(this).find('[name="data"]').val()
      });
    });

    $("#combined").val(JSON.stringify(arr));

    $("request").submit();

  });

/////////////////////////////////////////////////////////
   let field1 = document.getElementById("my_field1");
 document.addEventListener("click", function(e) {
       if (e.target.className=="addnew1") {
      let label1 = document.createElement('div');
        label1.innerHTML = '<div class="rows"><div class="col-md-7"><input name="link" type="text" class="req-i" placeholder="Вставьте ссылку, например https://www.amazon.com/dp/B0844JKGSK/"></div><div class="col-md-5"><input name="data" type="text" class="req-i" placeholder="Укажите цвет, размер, кол-во, модель."></div></div>';
        field1.append(label1);
   }
 });
</script>
<!-- <script>
   let field2 = document.getElementById("my_field2");
 document.addEventListener("click", function(e) {
       if (e.target.className=="addnew2") {
      let label2 = document.createElement('div');
        label2.innerHTML = '<div class="item-one"><input type="text" class="href-i" name="" value="" placeholder="Вставьте ссылку на товар"><label  for=""><input class="price-l" type="text" name="" value="" placeholder="Цена на сайте"><span>$</span></label><label class="count-l" for=""><input type="text" name="" value="1" placeholder="1"><span>шт</span></label><input class="color-i" type="text" name="" value="" placeholder="Размер / Цвет"><button type="button" name="button"><img src="img/delete.svg" alt=""></button></div>';
        field2.append(label2);
   }
 });
</script> -->

@endsection