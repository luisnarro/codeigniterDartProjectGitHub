<link href="<?php echo base_url(); ?>public/css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.cslider.js"></script>
<script type="text/javascript">
	$(function() {
		$("#da-slider").cslider();
	});
</script>
<!-- Owl Carousel Assets -->
<link href="<?php echo base_url(); ?>public/css/owl.carousel.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<!-- Prettify -->
<script src="<?php echo base_url(); ?>public/js/owl.carousel.js"></script>
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
		<a href="<?php echo site_url("tiendaOnline/catalogo"); ?>" class="da-link">Productos</a>
		<div class="da-img"><img src="<?php echo base_url(); ?>public/images/darts_slider_02.jpg" alt="image01" /></div>
	</div>
	<div class="da-slide">
		<h2>Descuentos para equipos</h2>
		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
		<a href="details.html" class="da-link">Infórmate</a>
		<div class="da-img"><img src="<?php echo base_url(); ?>public/images/darts_slider_01.jpg" alt="image01" /></div>
	</div>
	<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
	</nav>
</div>

<!--start-cursual-->
<div class="wrap">
<!--start-img-cursual-->
	<div id="owl-demo" class="owl-carousel">
		<?php foreach ($manufacturers as $item):?>
			<div class="item" onclick="location.href='index.php';">
				<div class="cau_left">
					<img class="lazyOwl" data-src=<?php echo base_url().'public/'.$item['image'];?> alt="Imagen Fabricante">
				</div>
				<div class="cau_left">
					<h4><a href="index.php"><?php echo $item['name'];?></a></h4>
				</div>
			</div>
		<?php endforeach;?>
	</div>
	<!--//End-img-cursual-->
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>Productos destacados</h2>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
			<?php $i=0;?>
			<?php foreach ($products as $product):?>
				<div class="grid1_of_3">
					<a href="<?php echo site_url("tiendaOnline/catalogo/producto")."/".$product->product_id?>">
						<img src=<?php echo base_url().'public/'.$product->image;?> alt="Imagen Producto"/>
						<h3><?php echo $product->nombre; ?></h3>
						<div class="price">
							<h4><?php echo $product->price.'€'; ?><span>Ver</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>
				<?php if ($i == 2) : ?>
					<div class="clear"></div></div>
					<div class="grids_of_3">
				<?php elseif ($i == 5) : ?>
					<div class="clear"></div>
				<?php endif;?>
				<?php $i++;?>
			<?php endforeach;?>
		</div>
	</div>
</div>
</div>	