   <footer class="footer">
      <div class="container reveal-anim">
      	<div class="f-cols">
            <div class="f-col f-col-1 f-brand">
                  <a href="/" class="brand-logo f-logo">
                     <svg class="logo-i"><use id="logo-footer" xlink:href="#logo-svg"></use></svg>
                  </a>
               <div class="f-text copyright">
                  <div>© 2003–2017 ООО «НПТ»</div>
                  <a href="/">Контактная информация</a>
                  <br/>
                  <a href="/">Карта сайта</a>
               </div>
            </div>
            <div class="f-col f-col-2">
               <div class="f-title">Компания</div>
               <ul class="f-nav">
                  <li class="f-nav-item"><a href="#">О компании</a></li>
                  <li class="f-nav-item"><a href="#">Продукция</a></li>
                  <li class="f-nav-item"><a href="#">Доставка</a></li>
                  <li class="f-nav-item"><a href="#">Нефтепродукты</a></li>
                  <li class="f-nav-item"><a href="#">Калькулятор</a></li>
                  <li class="f-nav-item"><a href="#">Вакансии</a></li>
                  <li class="f-nav-item"><a href="#">Полезные статьи</a></li>
                  <li class="f-nav-item"><a href="#">Отзывы</a></li>
               </ul>
            </div>
            <div class="f-col f-col-3">
               <div class="f-title">Нефтепродукты</div>
               <ul class="f-nav">
                  <li class="f-nav-item"><a href="#">Летнее ДТ</a></li>
                  <li class="f-nav-item"><a href="#">Зимнее ДТ</a></li>
                  <li class="f-nav-item"><a href="#">Топливо</a></li>
                  <li class="f-nav-item"><a href="#">Судовое топливо</a></li>
               </ul>
            </div>
            <div class="f-col f-col-4">
               <div class="f-title">Доставка</div>
               <ul class="f-nav">
                  <li class="f-nav-item"><a href="#">Доставка</a></li>
                  <li class="f-nav-item"><a href="#">Способы оплаты</a></li>
                  <li class="f-nav-item"><a href="#">Транспорт</a></li>
                  <li class="f-nav-item"><a href="#">Документы</a></li>
               </ul>
            </div>
            <div class="f-col f-col-5">
               <div class="f-title">Контакты</div>
               <div class="contact-b">
                  <div class="contact-b-title">Телефон</div>
                  <div class="contact-desc">
                     <a href="tel:+79990123456" class="tel">+7 (999) 012-34-56</a>
                  </div>
                  <button type="button" class="btn-modal" data-modal="#callback">Заказать обратный звонок</button>
               </div>
               <div class="contact-b">
                  <div class="contact-b-title">Время работы</div>
                  <div class="contact-desc">09:00 до 22:00<br/>Поставки круглосуточно</div>
               </div>
               <div class="contact-b">
                  <div class="contact-b-title">Адрес</div>
                  <div class="contact-desc">Москва, Ломоновоская ул., дом 1, стр. 1, 30 этаж, индекc 123456</div>
               </div>
            </div>
         </div>
         <div class="developer text-right">
            <a href="#" class="dev-logo"><img src="images/palitra.png" width="305px" height="27px" alt="IT-ПАLИТРА — создание и продвижение сайтов"><div class="text-right">создание и продвижение сайтов</div></a>
         </div>
      </div>
   </footer>
</div>
<div class="calculator modal fade" id="calculator" role="dialog">
   <div class="container">
      <div class="calculator-head">Расчет стоимости топлива<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
      <div class="calculator-body">
         <form action="" class="calculator_form">
            <div class="form-group">
               <label for="gas_type">Выберите сорт:</label>
               <div class="st-select">
                  <select name="gas_type" id="gas_type">
                     <option value="39">ЕВРО 3 ГОСТ Зимнее 30</option>
                     <option value="40">ЕВРО 3 ГОСТ Зимнее 10</option>
                     <option value="30">ЕВРО 3 ГОСТ Летнее 25</option>
                     <option value="20">ЕВРО 3 ГОСТ Летнее 12</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <div class="range-slider-wrap">
                  <div class="range-slider order_capacity">
                     <div class="pull-left">
                        <span class="slider-label">Укажите объём:</span>
                        <div id="order_capacity" class="range-slider-field"></div>
                     </div>
                     <div class="pull-right">
                        <input type="text" class="range-slider__value" id="capacity_value" value="5000">
                        <i>Л</i>
                     </div>
                  </div>
                  <div class="range-slider order_distance">
                     <div class="pull-left">
                        <span class="slider-label">Доставка Москва:</span>
                        <div id="order_distance" class="range-slider-field"></div>
                     </div>
                     <div class="pull-right">
                     <input type="text" class="range-slider__value" id="distance_value" value="500">
                     <i>КМ<span>от МКАД</span></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="overall">
               <div class="pull-left">
                  <div class="price-wrap">Стоимость топлива с учетом доставки: <span class="overall-price">29 руб/л</span></div>
                  <div class="asterisk-text">*указана ориентировочная стоимость, подробности уточняйте у менеджера</div>
               </div>
               <div class="submit-wrap pull-right">
                  <input type="submit" class="btn btn-red" name="order" value="Оформить заказ">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<?php include "modal.php" ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/scrollreveal.js/3.1.1/scrollreveal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBs2is14Dc5GYSPxHRRUhFdWDMSlDQsMo&callback=initMap" async defer></script>
<script src="js/main.js"></script>
</body>
</html>