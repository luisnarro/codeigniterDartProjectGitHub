<link href="public/css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="public/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="public/js/jquery.cslider.js"></script>
<script type="text/javascript">
	$(function() {
		$("#da-slider").cslider();
	});
</script>
<!-- Owl Carousel Assets -->
<link href="public/css/owl.carousel.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<!-- Prettify -->
<script src="public/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 4,
			lazyLoad : true,
			autoPlay : true,
			navigation : true,
			navigationText : ["",""],
			rewindNav : false,
			scrollPerPage : false,
			pagination : false,
			paginationNumbers: false,
		});
	});
</script>
<!-- //Owl Carousel Assets -->
<!-- start slider -->
<div id="da-slider" class="da-slider">
	<div class="da-slide">
		<h2>Bienvenido a Best Darts</h2>
		<p style="font-size:17px">Te damos la bienvenida a la tienda de dartdos Best Darts. Aquí podrás encontrar todo lo necesario para jugar a tu deporte favorito. Con nuestros productos podras personalizar tus dardos y mejorar en tus lanzamientos.</p>
		<a href="details.html" class="da-link">Productos</a>
		<div class="da-img"><img src="public/images/darts_slider_02.jpg" alt="image01" /></div>
	</div>
	<div class="da-slide">
		<h2>Descuentos para equipos</h2>
		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
		<a href="details.html" class="da-link">Infórmate</a>
		<div class="da-img"><img src="public/images/darts_slider_01.jpg" alt="image01" /></div>
	</div>
	<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
	</nav>
</div>

<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel">
		<?php 
	/*	try {
			$todosFabricantes = $manager->getAllManufacturer();
			foreach ($todosFabricantes as $brand){
				echo <<<_END
					<div class="item" onclick="location.href='index.php';">
						<div class="cau_left">
							<img class="lazyOwl" data-src="$brand->image" alt="Lazy Owl Image">
						</div>
						<div class="cau_left">
							<h4><a href="index.php">$brand->name</a></h4>
						</div>
					</div>
_END;
			}
		}catch (Exception $ex){
			echo ("Exception message: ".$ex->getMessage());
		}
		*/
		?>
	</div>
	<!----//End-img-cursual---->
</div>
