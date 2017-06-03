<?php include 'images/sprite.svg' ?>
<header class="header">
	<div class="container">
		<div class="header-top">
			<a href="index.php" class="brand-logo">
				<svg class="logo-i"><use id="logo-header" xlink:href="#logo-svg"></use></svg>
			</a>
			<a href="#" class="btn btn-wb btn-buy">Купить дизельное топливо</a>
			<div class="contact-b-wrap">
				<div class="contact-b">
					<div class="contact-b-title">Время работы</div>
					<div class="contact-desc">09:00 до 22:00<br/>Поставки круглосуточно</div>
				</div>
				<div class="contact-b">
					<div class="contact-b-title">Телефон</div>
					<div class="contact-desc">
						<a href="tel:+79990123456" class="tel">+7 (999) 012-34-56</a>
					</div>
					<button class="btn-modal" data-toggle="modal" data-target="#modal-callback">Заказать обратный звонок</button>
				</div>
			</div>
			<div class="mob-header">
				<button data-toggle="modal" data-target="#calculator" class="calculator-i"><svg><use xlink:href="#calculator-i"></use></svg></button>
				<a href="/callback-form.php" class="phone-i"><svg><use xlink:href="#phone-i"></use></svg></a>
			</div>
		</div>
	</div>
	<button type="button" class="navbar-toggle collapsed toggle-menu menu-left push-body" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
   	<div class="icon"></div>
   </button>
   <nav class="navbar">
   	<div class="container">
   		<div class="main-menu collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-top" id="navbar">
		   	<ul class="nav navbar-nav">
			   	<li class="nav-item"><a href="inner.php">Главная</a></li>
			   	<li class="nav-item dropdown">
			   		<a href="inner.php" aria-haspopup="true" aria-expanded="false">Нефтепродукты<span class="caret"></span><label class="drop-icon" for="mm-1"><svg class="chevron-right"><use xlink:href="#chevron-right"></use></svg></label>
			   		</a>
			   		<input type="checkbox" name="mm-1" id="mm-1">
			   		<ul class="dropdown-menu">
			   			<li class="nav-item"><a href="inner1.php">Бензин</a></li>
			   			<li class="nav-item"><a href="inner2.php">Масло</a></li>
			   			<li class="nav-item"><a href="inner3.php">Дизельное топливо</a></li>
			   			<li class="nav-item"><a href="inner4.php">Печное топливо</a></li>
			   			<li class="nav-item"><a href="inner2.php">Масло</a></li>
			   			<li class="nav-item"><a href="inner3.php">Дизельное топливо</a></li>
			   			<li class="nav-item"><a href="inner4.php">Печное топливо</a></li>
			   		</ul>
			   	</li>
			   	<li class="nav-item"><a href="inner.php">Компания</a></li>
			   	<li class="nav-item"><a href="inner.php">Документы</a></li>
			   	<li class="nav-item"><a href="inner.php">Доставка</a></li>
			   	<li class="nav-item"><a href="inner.php">Контакты</a></li>
			   	<li class="nav-item"><a href="inner.php">Статьи</a></li>
		   	</ul>
	   	</div>
   	</div>
   </nav>
</header>