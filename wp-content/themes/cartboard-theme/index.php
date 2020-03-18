<!DOCTYPE html>
<html lang="">

<head>

	<meta charset="utf-8">
	<title>OptimizedHTML 5</title>
	<meta name="description" content="Startup HTML template OptimizedHTML 5">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="img/favicon.png">
	<meta property="og:image" content="img/dest/preview.jpg">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function () {
				try {
					w.yaCounter60695842 = new Ya.Metrika({
						id: 60695842,
						clickmap: true,
						trackLinks: true,
						accurateTrackBounce: true,
						webvisor: true,
						trackHash: true
					});
				} catch (e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<!-- /Yandex.Metrika counter -->
</head>

<body>


	<div class="header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-3 col-md-4">
					<div class="header-logo">
					</div>
					<!-- /.header__logo -->
				</div>
				<!-- /.col-4 -->
				<div class="col-9 col-md-8">
				<div class="header-contacts">
						<div class="header-contacts__phones">
							<div class="header-contacts__phone">
								8 (347) 271-54-28
							</div>
							<div class="header-contacts__phone">
								8 (937) 363-30-00
							</div>
						</div>
						<button class="header-contacts__button button">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/icon-phone.png" alt="Телефон">
							<span class="hiden-mobile">Заказать звонок</span>
						</button>
					</div>
					<!-- /.header__contacts -->
				</div>
				<!-- /.col-8 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.header -->

	<section class="main dark-bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-5">
					<div class="main-img wow fadeInUp hiden-mobile">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/main-img.png" alt="Картон">
					</div>
				</div>
				<!-- /.col-5 -->
				<div class="col-12 col-md-7">
					<div class="main-text">
						<h1 class="main-text__title">
							<?php the_field('main_title') ?>
						</h1>
						<!-- /.main-text__title -->
						<div class="main-text__subtitle">
							с доставкой по всей России
						</div>
						<!-- /.main-text__subtitle -->
						<div class="main-text__form">

							<div class="form-title">
								Получите индивидуальное предложение
								на производство и поставку гофропродукции
								<span class="form-title__important">
									Образцы упаковки бесплатно!
								</span>
							</div>
							<form action="#" class="form">
								<input class="form__input" type="tel" placeholder="Введите номер телефона">
								<button class="button button_big" type="submit">
									Оставить заявку!
								</button>
							</form>
							<small class="form__small">
								*Минимальный заказ 500шт
							</small>
						</div>
						<!-- /.main-text__form -->
					</div>
					<!-- /.main-text -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.main -->

	<section class="features">
		<div class="container">
			<div class="numbers">
				<div class="numbers-block">
					<div class="numbers-block__title">
						5 лет
					</div>
					<!-- /.numbers-block__title -->
					<div class="number-block__text">
						На рынке изделий из гофрокартона
					</div>
					<!-- /.number-block__text -->
				</div>
				<!-- /.numbers-block -->

				<div class="numbers-block">
					<div class="numbers-block__title">
						до 5 000 000 м<sup>2</sup>
					</div>
					<!-- /.numbers-block__title -->
					<div class="number-block__text">
						Ежемесячный объем производства гофрокартона
					</div>
					<!-- /.number-block__text -->
				</div>
				<!-- /.numbers-block -->

				<div class="numbers-block">
					<div class="numbers-block__title">
						4 000 м<sup>2</sup>
					</div>
					<!-- /.numbers-block__title -->
					<div class="number-block__text">
						Площадь склада
					</div>
					<!-- /.number-block__text -->
				</div>
				<!-- /.numbers-block -->
			</div>
			<!-- /.numbers -->

			<div class="features-blocks">
				<div class="features-block wow fadeInUp" data-wow-delay="0.1s">
					<div class="features-block__img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/features/icon-1.png" alt="Производство">
					</div>
					<!-- /.features-block__img -->
					<div class="features-block__text">
						<div class="features-block__title">
							Производство
						</div>
						<!-- /.features-block__title -->
						<div class="features-block__descr">
							4 технологические линии способны
							выполнить любой заказ любой сложности
						</div>
						<!-- /.features-block__descr -->
					</div>
					<!-- /.features-block__text -->
				</div>
				<!-- /.features-block -->


				<div class="features-block wow fadeInUp" data-wow-delay="0.2s">
					<div class="features-block__img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/features/icon-2.png" alt="Производство">
					</div>
					<!-- /.features-block__img -->
					<div class="features-block__text">
						<div class="features-block__title">
							Бесплатные образцы
						</div>
						<!-- /.features-block__title -->
						<div class="features-block__descr">
							Бесплатно делаем образцы гофроупаковки -
							это помогает заранее увидеть упаковку
						</div>
						<!-- /.features-block__descr -->
					</div>
					<!-- /.features-block__text -->
				</div>
				<!-- /.features-block -->


				<div class="features-block wow fadeInUp" data-wow-delay="0.3s">
					<div class="features-block__img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/features/icon-3.png" alt="Производство">
					</div>
					<!-- /.features-block__img -->
					<div class="features-block__text">
						<div class="features-block__title">
							Стабильное качество
						</div>
						<!-- /.features-block__title -->
						<div class="features-block__descr">
							Собственная лаборатория контролирует
							качество на каждом этапе производства
						</div>
						<!-- /.features-block__descr -->
					</div>
					<!-- /.features-block__text -->
				</div>
				<!-- /.features-block -->


				<div class="features-block wow fadeInUp" data-wow-delay="0.4s">
					<div class="features-block__img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/features/icon-4.png" alt="Производство">
					</div>
					<!-- /.features-block__img -->
					<div class="features-block__text">
						<div class="features-block__title">
							Страховой запас
						</div>
						<!-- /.features-block__title -->
						<div class="features-block__descr">
							Можем хранить запас гофропродукции
							на своих складах и поставлять его партиями
						</div>
						<!-- /.features-block__descr -->
					</div>
					<!-- /.features-block__text -->
				</div>
				<!-- /.features-block -->


				<div class="features-block wow fadeInUp" data-wow-delay="0.5s">
					<div class="features-block__img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/features/icon-5.png" alt="Производство">
					</div>
					<!-- /.features-block__img -->
					<div class="features-block__text">
						<div class="features-block__title">
							Флексопечать
						</div>
						<!-- /.features-block__title -->
						<div class="features-block__descr">
							Возможно нанесение вашего логотипа,
							текста или манипуляционных знаков
						</div>
						<!-- /.features-block__descr -->
					</div>
					<!-- /.features-block__text -->
				</div>
				<!-- /.features-block -->


				<div class="features-block wow fadeInUp" data-wow-delay="0.6s">
					<div class="features-block__img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/features/icon-6.png" alt="Производство">
					</div>
					<!-- /.features-block__img -->
					<div class="features-block__text">
						<div class="features-block__title">
							Гидрофобные добавки
						</div>
						<!-- /.features-block__title -->
						<div class="features-block__descr">
							На производстве реализована технология,
							которая позволяет гофрокартону стать прочнее
						</div>
						<!-- /.features-block__descr -->
					</div>
					<!-- /.features-block__text -->
				</div>
				<!-- /.features-block -->
			</div>
			<!-- /.features-blocks -->

		</div>
		<!-- /.container -->
	</section>
	<!-- /.features -->

	<section class="products">
		<div class="container">
			<h2 class="section-title wow fadeInUp ">наша продукция</h2>
			<!-- /.section-title -->
			<div class="row align-items-start">


				<div class="col-12 col-md-6">
					<div class="products-block wow fadeInUp" data-wow-delay="0.2s">
						<img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/products/mg-1.png" alt="#">
						<div class="products-block__title">
							Гофрокороб 4-х клапанный
						</div>
						<!-- /.products-block__title -->
						<div class="products-block__buttons"><button
								class="button button-o products-block__buttons">Подробнее</button>
							<!-- /.button button-o --><button class="button">Получить расчет</button> <!-- /.button -->
						</div>
						<!-- /.products-block__buttons -->
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-6 -->


				<div class="col-12 col-md-6">
					<div class="products-block wow fadeInUp" data-wow-delay="0.2s">
						<img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/products/mg-2.png" alt="#">
						<div class="products-block__title">
							Гофролоток
						</div>
						<!-- /.products-block__title -->
						<div class="products-block__buttons"><button
								class="button button-o products-block__buttons">Подробнее</button>
							<!-- /.button button-o --><button class="button">Получить расчет</button> <!-- /.button -->
						</div>
						<!-- /.products-block__buttons -->
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-6 -->
			</div>
			<!-- /.row -->
			<div class="row align-items-end">


			<div class="col-12 col-md-6">
					<div class="products-block wow fadeInUp" data-wow-delay="0.4s">
						<img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/products/mg-3.png" alt="#">
						<div class="products-block__title">
							Гофрокороб самосборный (сложная высечка)
						</div>
						<!-- /.products-block__title -->
						<div class="products-block__buttons"><button
								class="button button-o products-block__buttons">Подробнее</button>
							<!-- /.button button-o --><button class="button">Получить расчет</button> <!-- /.button -->
						</div>
						<!-- /.products-block__buttons -->
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-6 -->


				<div class="col-12 col-md-6">
					<div class="products-block wow fadeInUp" data-wow-delay="0.4s">
						<img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/products/mg-4.png" alt="#">
						<div class="products-block__title">
							Листовой гофрокартон
						</div>
						<!-- /.products-block__title -->
						<div class="products-block__buttons"><button
								class="button button-o products-block__buttons">Подробнее</button>
							<!-- /.button button-o --><button class="button">Получить расчет</button> <!-- /.button -->
						</div>
						<!-- /.products-block__buttons -->
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.products -->

	<section class="offer dark-bg wow fadeInUp">
		<div class="container">
			<h2 class="offer-title">
				Получите индивидуальное предложение
				<span class="offer-title_small">на производство и поставку изделий</span>
			</h2>
			<!-- /.offer-title -->
			<div class="offer-form">
				<form action="#">
					<label class="offer-form__label" for="">Введите ваш номер телефона:</label>
					<input class="form__input offer-form__input" type="tel" placeholder="+7 (XXX) XXX-XX-XX"
						style="text-align: center">
					<button class="button offer-form__button" type="submit">Оставить заявку!</button>
				</form>
				<small class="form-small">*Минимальный заказ 500шт</small>
			</div>
			<!-- /.offer-form -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.offer -->

	<section class="production wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-5 order-last order-md-first">
					<div class="fotorama" data-nav="thumbshiden-mobile">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/photo-1.png" width="144" height="96" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/photo-1.png" width="144" height="96" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/src/photo-1.png" width="144" height="96" alt="">
					</div>
				</div>
				<!-- /.col-7 -->
				<div class="col-12 col-md-7 order-first order-md-last">
					<div class="production-text">
						<div class="production-text__title">
							Производство
						</div>
						<!-- /.production-text__title -->
						<div class="production-text__descr">
							Современное оборудование позволяет произ- водить до 5 миллионов квадратных метров
							гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.
							Досконально прорабатываем конструкции коро- бов и составы сырья, учитывая условия хранения,
							транспортировки и производства вашей продукции.
							Возможно нанесение цветной флексопечати на поверхность коробов.
						</div>
						<!-- /.production-text__descr -->
					</div>
					<!-- /.production-text -->
				</div>
				<!-- /.col-5 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.poduction -->

	<section class="clients wow fadeInUp">
		<div class="container">
			<h2 class="section-title">наши клиенты</h2>
			<!-- /.section-title -->
			<div class="row">

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-1.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-2.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-3.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-4.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-5.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-6.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-7.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-8.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-9.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-10.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-11.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

				<div class="col-6 col-md-3">
					<div class="clients-block">
						<img class="clients-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/clients/clients-12.png" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-3 -->

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.products -->


	<section class="comment wow fadeInUp">
		<div class="container">
			<h2 class="section-title">Отзывы о сотрудничестве</h2>
			<!-- /.section-title -->
			<div class="row align-items-center">

				<div class="col-12 col-md-4">
					<div class="comment-block">
						<img class="comment-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/comment/comment-1.jpg" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-4 -->

				<div class="col-12 col-md-4">
					<div class="comment-block">
						<img class="comment-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/comment/comment-2.jpg" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-4 -->

				<div class="col-12 col-md-4">
					<div class="comment-block">
						<img class="comment-block__img" src="<?php echo get_template_directory_uri(); ?>/images/src/comment/comment-3.jpg" alt="#">
					</div>
					<!-- /.products-block -->
				</div>
				<!-- /.col-4 -->

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.comment -->

	<section class="contacts wow fadeInUp">
		<script type="text/javascript" charset="utf-8" async
			src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8d57a04403b56f4d4bfb5b00a436eb9ef7a652daffb5b7ac223cc761c3c00962&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script>
		<div class="contacts-block">
			<div class="contacts-block__adress contacts-block__text">
				<span class="contacts-block__title">Адрес офиса</span>
				г. Уфа, Проспект октября, 46
				<span class="contacts-block__title">Адрес склада</span>
				г. Уфа, ул. Майкопская, 65/2
			</div>
			<div class="contacts-block__phone contacts-block__text">
				<span class="contacts-block__title">Тел. отдела продаж:</span>
				8 (347) 271-54-28 <br>
				8 (937) 363-30-00
			</div>
			<div class="contacts-block__cta contacts-block__text">
				<button class="button">Заказать звонок</button>
			</div>
			<div class="contacts-block__mail contacts-block__text">
				<span class="contacts-block__title">E-mail</span>
				urals.karton@gmail.com
			</div>
		</div>
	</section>

	<section class="footer">
		<p class="footer__text">© www.gofra-ural.ru 2016, все права защищены</p>
	</section>



	<div class="overlay">
		<div class="popup">
			<div class="popup-title">Форма обратной связи</div>
			<!-- /.popup-title -->
			<div class="popup-close"> &times;</div>
			<!-- /.popup-close -->
			<div class="popup-form">
				<form action="#" class="main-form">
					<div class="popup-form-header">
						Получите индивидуальное предложение
						<span>на производство и поставку изделий</span>
					</div>
					<label for="phone" class="popup-form__label">
						Введите ваш номер телефона:
					</label>
					<input type="tel" class="popup-form__input" name="phone" required>
					<button class="button popup-form__btn">
						Оставить заявку
					</button>
					<div class="popup-form__note">
						*Минимальный заказ 500шт
					</div>
				</form>
			</div>
			<!-- /.popup-form -->
		</div>
		<!-- /.popup -->
	</div>
	<!-- /.overlay -->


	<!-- <script src="js/app.min.js"></script> -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.js" 
	 integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script> 
	<script>
		$(document).ready(function () {
			$('.header-contacts__button').on('click', function () {
				$('.overlay').show();
			});
			$('.popup-close').on('click', function () {
				$('.overlay').hide();
			});


		});
	</script>
	<?php wp_footer() ?>
</body>

</html>