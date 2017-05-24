<?php include "head.php" ?>
<body class="home">
<div class="layout">
   <?php include "header.php" ?>
   <main class="main">
      <div class="promo-slider">
      	<ul class="owl-carousel owl-theme slider-wrap">
      		<li class="promo-slider-item">
      			<div class="slider-bg cover-image" style="background-image: url(pic/promo-slider/slide1.jpg)"></div>
               <div class="container">
         			<div class="slider-info">
                     <a href="#" class="btn btn-buy">Купить дизельное топливо</a>
      	   			<h2 class="slider-title">ПОСТАВКА ДИЗЕЛЬНОГО ТОПЛИВА В МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ <i>ОТ 1000 ЛИТРОВ</i></h2>
      	   			<div class="calculator">
                        <div class="calculator-head">Расчет стоимости топлива</div>
                        <div class="calculator-body">
                           <form action="#" class="calculator_form">
                              <div class="form-group">
                                 <label for="gas_type">Выберите сорт:</label>
                                 <div class="st-select">
                                    <select name="gas_type" id="gas_type">
                                       <option value="euro3winter20">ЕВРО 3 ГОСТ Зимнее 20</option>
                                       <option value="euro3winter10">ЕВРО 3 ГОСТ Зимнее 10</option>
                                       <option value="euro3summer20">ЕВРО 3 ГОСТ Летнее 20</option>
                                       <option value="euro3summer10">ЕВРО 3 ГОСТ Летнее 20</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="range-slider-wrap">
                                    <label for="order_capacity">Укажите объём:</label>
                                    <div class="range-slider range-slider-capacity">
                                       <input type="range" id="order_capacity" class="range-slider__range"  value="5000" min="0" max="100000">
                                       <span class="range-slider__value">5000</span><i>Л</i>
                                    </div>
                                    <label for="order_distance">Доставка Москва:</label>
                                    <div class="range-slider range-slider-distance">
                                       <input type="range" id="order_distance" class="range-slider__range"  value="700" min="0" max="10000">
                                       <span class="range-slider__value">5000</span><i>КМ<span>от МКАД</span></i>
                                    </div>
                                 </div>
                              </div>
                              <div class="overall">
                                 <div class="pull-left">
                                    <div class="price-wrap">Стоимость топлива с учетом доставки: <span class="overall-price">29 руб/л</span></div>
                                    <div class="asterisk-text">*указана ориентировочная стоимость, подробности уточняйте у менеджера</div>
                                 </div>
                                 <div class="submit-wrap pull-right">
                                    <input type="submit" class="btn btn-order" name="order" value="Оформить заказ">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
      				</div>
               </div>
      		</li>
      	</ul>
      </div>
      <section class="details">
         <div class="details-slide cover-image" style="background: transparent url(images/details/transport.jpg);">
            <div class="overlay">&nbsp;</div>
            <div class="details-info">
               <div class="details-sup">Мы поставляем топливо для:</div>
               <div class="details-title">Транспорт</div>
               <div class="details-sub">Быстрый документооборот<br/>Возможность отсрочки оплаты<br/>Доставка точно в установленные сроки. Гарантируем!</div>
            </div>
            <a href="#" class="details-btn"><svg class="arrow-i"><use xlink:href="#details-btn-i"></use></svg>Подробнее</a>
         </div>
         <div class="details-slide cover-image" style="background: transparent url(images/details/boiler.jpg);">
            <div class="overlay">&nbsp;</div>
            <div class="details-info">
               <div class="details-sup">Мы поставляем топливо для:</div>
               <div class="details-title">Для котельных</div>
               <div class="details-sub">Заправляем транспорт с топливными системами CommonRail</div>
            </div>
            <a href="#" class="details-btn"><svg class="arrow-i"><use xlink:href="#details-btn-i"></use></svg>Подробнее</a>
         </div>
         <div class="details-slide cover-image" style="background: transparent url(images/details/house.jpg);">
            <div class="overlay">&nbsp;</div>
            <div class="details-info">
               <div class="details-sup">Мы поставляем топливо для:</div>
               <div class="details-title">Для частных<br/>домов и коттеджей</div>
               <div class="details-sub">Аккуратная отгрузка на участке. Оплата наличными на объекте</div>
            </div>
            <a href="#" class="details-btn"><svg class="arrow-i"><use xlink:href="#details-btn-i"></use></svg>Подробнее</a>
         </div>
         <div class="details-slide cover-image" style="background: transparent url(images/details/building.jpg);">
            <div class="overlay">&nbsp;</div>
            <div class="details-info">
               <div class="details-sup">Мы поставляем топливо для:</div>
               <div class="details-title">Для строительства</div>
               <div class="details-sub">Заправляем транспорт с топливными системами CommonRail</div>
            </div>
            <a href="#" class="details-btn"><svg class="arrow-i"><use xlink:href="#details-btn-i"></use></svg>Подробнее</a>
         </div>
      </section>
      <section class="advantage">
         <div class="container">
            <header class="section-header reveal-anim">
               <h2 class="section-title">Индивидуальный подход</h2>
               <div class="section-sub">Только у нас</div>
            </header>
            <ul class="row advantage-list">
               <li class="col-md-3 col-sm-6 col-xs-12 advantage-item reveal-anim">
                  <div class="advantage-i canister-i"></div>
                  <div class="advantage-title">Топливо есть всегда</div>
                  <div class="advantage-text">Дизельное Топливо с доставкой или самовывоз с любой нефтебазы Москвыи Ленинградской области</div>
               </li>
               <li class="col-md-3 col-sm-6 col-xs-12 advantage-item reveal-anim">
                  <div class="advantage-i truck-i"></div>
                  <div class="advantage-title">Свой автотранспорт</div>
                  <div class="advantage-text">Осуществляем доставку Дизельного Топлива своим автотранспортом. От 100 до 25 000 л. Стоимость перевозки ДТ от 0.30 руб за литр</div>
               </li>
               <li class="col-md-3 col-sm-6 col-xs-12 advantage-item reveal-anim">
                  <div class="advantage-i rocket-i"></div>
                  <div class="advantage-title">Быстрая доставка</div>
                  <div class="advantage-text">Доставка в течении суток после согласования. Срочная доставка от 1 ч. Оставьте заявку. Мы Вам перезвоним</div>
               </li>
               <li class="col-md-3 col-sm-6 col-xs-12 advantage-item reveal-anim">
                  <div class="advantage-i hand-i"></div>
                  <div class="advantage-title">Удобная оплата</div>
                  <div class="advantage-text">Доставка в течении суток после согласования. Срочная доставка от 1 ч. Оставьте заявку. Мы Вам перезвоним</div>
               </li>
            </ul>
         </div>
      </section>
      <section class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-4 products-promo">
                  <div class="section-header">
                     <h2 class="section-title reveal-anim">Наша продукция</h2>
                  </div>
                  <div class="products-desc">
                     <ul class="products-list reveal-anim">
                        <li>Минимальные комиссии</li> 
                        <li>Любые нефтепродукты со всех<br/>нефтегазовых бирж</li> 
                        <li>Поставка в любую точку России и страны СНГ</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
          <div class="products-slider">
            <ul class="owl-carousel owl-theme">
               <li class="products-item">
                  <a href="#" class="slider-link">
                     <div class="slider-bg cover-image" style="background-image: url(pic/products-slider/gasoline.jpg);"></div>  
                     <div class="slider-title">Бензин</div>   
                  </a>
               </li>
               <li class="products-item">
                  <a href="#" class="slider-link">
                     <div class="slider-bg cover-image" style="background-image: url(pic/products-slider/oil.jpg);"></div>
                     <div class="slider-title">Масло</div>   
                  </a>
               </li>
               <li class="products-item">
                  <a href="#" class="slider-link">
                     <div class="slider-bg cover-image" style="background-image: url(pic/products-slider/disel.jpg);"></div>
                     <div class="slider-title">Дизельное топливо</div>   
                  </a>
               </li>
               <li class="products-item">
                  <a href="#" class="slider-link">
                     <div class="slider-bg cover-image" style="background-image: url(pic/products-slider/gasoline-2.jpg);"></div>
                     <div class="slider-title">Печное топливо</div>   
                  </a>
               </li>
               <li class="products-item">
                  <a href="#" class="slider-link">
                     <div class="slider-bg  cover-image" style="background-image: url(pic/products-slider/disel.jpg);"></div>
                     <div class="slider-title">Дизельное топливо</div>   
                  </a>
               </li>
               <li class="products-item">
                  <a href="#" class="slider-link">
                     <div class="slider-bg cover-image" style="background-image: url(pic/products-slider/oil.jpg);"></div>
                     <div class="slider-title">Масло</div>   
                  </a>
               </li>
            </ul>
            <div class="slider-navigation">
               <div class="slider-next"><svg class="arrow-i"><use xlink:href="#details-btn-i"></use></svg></div>
               <div class="slider-prev"><svg class="arrow-i"><use xlink:href="#details-btn-i"></use></svg></div>
            </div>
         </div>
      </section>
      <section class="partners">
         <div class="container reveal-anim">
            <header class="section-header">
               <h2 class="section-title">Наши партнеры</h2>
            </header>
            <div class="partners-slider">
               <ul class="owl-carousel owl-theme slider-wrap">
                  <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/traft.jpg" width="182" height="101" alt="Traft"></a>
                  </li>
                  <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/atom.jpg" width="182" height="101" alt="атомєнергопроект"></a>
                  </li>
                  <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/most.jpg" width="182" height="101" alt="МосТрансАренда"></a>
                  </li>
                  <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/cast.jpg" width="182" height="101" alt="ЦАСТ"></a>
                  </li>
                  <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/traft.jpg" width="182" height="101" alt="Traft"></a>
                  </li>
                  <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/atom.jpg" width="182" height="101" alt="атомєнергопроект"></a>
                  </li>
                   <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/most.jpg" width="182" height="101" alt="МосТрансАренда"></a>
                  </li>
                  <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/cast.jpg" width="182" height="101" alt="ЦАСТ"></a>
                  </li>
                  <li class="slider-item">
                     <a href="/" class="slider-link"><img src="images/partners/traft.jpg" width="182" height="101" alt="Traft"></a>
                  </li>
               </ul>
            </div>
         </div>
      </section>
   	<section class="contact-map">
         <img id="map" src="pic/map.jpg" width="1920" height="404">
      </section>
   </main>
   <?php include "footer.php" ?>