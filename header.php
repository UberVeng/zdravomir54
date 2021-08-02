<!DOCTYPE html>
<html>
	<head>	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<?php wp_head();?>



<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	<div class="col-2 text-center" >
		<a class="navbar-brand" href="http://localhost/wordpress/"><img src="<?php $uploads = wp_upload_dir($time = '2020/03'); echo($uploads['url']); ?>/logo_lens.png"></a>
	</div>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="col-12 col-lg-9 p-0">
		<div class="collapse navbar-collapse" id="navbarMenu">
			<ul class="navbar-nav">
			<li class="nav-item d-block d-block d-sm-block d-md-block d-lg-none" >
					<a href="http://cl05943.tmweb.ru/login" class="nav-link">Войти</a>
				</li>
				<li class="nav-item">
					<a href="http://cl05943.tmweb.ru/" class="nav-link">Главная</a>
				</li>
				<li class="nav-item">
					<a href="http://cl05943.tmweb.ru/category/news/" class="nav-link">Новости</a>
				</li>
				<li class="nav-item">
					<a href="http://cl05943.tmweb.ru/shop/" class="nav-link">Продукция</a>
				</li>
				<li class="nav-item">
					<a href="http://cl05943.tmweb.ru/products/" class="nav-link">Отзывы</a>
				</li>
				<li class="nav-item">
					<a href="http://cl05943.tmweb.ru/products/" class="nav-link">Вопрос-ответ</a>
				</li>
				<li class="nav-item">
					<a href="http://cl05943.tmweb.ru/certificates/" class="nav-link">Сертификаты</a>
				</li>
				<li class="nav-item">
					<a href="http://cl05943.tmweb.ru/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/" class="nav-link">Контакты</a>
				</li>
			</ul>
					
			<!--
			<?php wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
					'menu_class' => 'navbar-nav'
				)
			);?>
			-->
		</div>	
	</div>
	<div class="d-none d-sm-none d-md-none d-lg-block col-1 p-0" style="text-align: right;">
		<a href="http://localhost/wordpress/login" >
			<button type="button" class="btn btn-sign-in" style="" href="http://localhost/wordpress/login">Войти</button>
		</a>
	</div>
</nav>
</head>
<body <?php body_class();?>>
