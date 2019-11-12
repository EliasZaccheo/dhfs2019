<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<?php include("php/styles.php");?>
			<?php include("./php/articles-manager.php")?>
		<title>Craftsy | Home</title>
	</head>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<?php include("./php/header.php")?>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->

					<?php article_num_large_offer(1); ?>
					<?php article_num_large_offer(2); ?>
					<?php article_num_large_offer(3); ?>
					<?php article_num_large_offer(4); ?>
					<?php article_num_large_offer(5); ?>
					<?php article_num_large_offer(6); ?>

<!--
					<?php article_num_large(1); ?>
					<?php article_num_large(2); ?>
					<?php article_num_large(3); ?>
					<?php article_num_large(4); ?>
					<?php article_num_large(5); ?>
					<?php article_num_large(6); ?>

					<?php article_num(1); ?>
					<?php article_num(2); ?>
					<?php article_num(3); ?>
					<?php article_num(4); ?>
					<?php article_num(5); ?>
					<?php article_num(6); ?>

					<?php article($articulos["image_1"],$articulos["tittle_1"],$articulos["body_1"],$articulos["footer_1"]); ?>
					<?php article($articulos["image_2"],$articulos["tittle_2"],$articulos["body_2"],$articulos["footer_2"]); ?>
					<?php article($articulos["image_3"],$articulos["tittle_3"],$articulos["body_3"],$articulos["footer_3"]); ?>
					<?php article($articulos["image_4"],$articulos["tittle_4"],$articulos["body_4"],$articulos["footer_4"]); ?>
					<?php article($articulos["image_5"],$articulos["tittle_5"],$articulos["body_5"],$articulos["footer_5"]); ?>
					<?php article($articulos["image_6"],$articulos["tittle_6"],$articulos["body_6"],$articulos["footer_6"]); ?>

					<article class="producto">
						<img class="main-photo" src="img/img-phone-01.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-02.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-03.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-01.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-02.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-03.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
-->
				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
