<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>Productos</h2>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
			<?php $offset = $this->uri->segment(5, 0) + 1;?>
			<?php $product_count=count($products);?>
			<?php for ($i=0; $i < 2; $i++) : ?>
				<?php for ($j=0; $j < 3 && $product_count > 0; $j++) : ?>
					<div class="grid1_of_3">
						<a href="<?php echo site_url("tiendaOnline/catalogo/producto")."/".$products[(($i*3)+$j)]->product_id?>">
							<img src=<?php echo base_url().'public/'.$products[(($i*3)+$j)]->image;?> alt="Imagen Producto"/>
							<h3><?php echo $products[(($i*3)+$j)]->nombre; ?></h3>
							<div class="price">
								<h4><?php echo $products[(($i*3)+$j)]->price.'€'; ?><span>Ver</span></h4>
							</div>
							<span class="b_btm"></span>
						</a>
					</div>
					<?php $product_count--;?>
				<?php endfor;?>
					<div class="clear"></div></div>
					<div class="grids_of_3">
			<?php endfor;?>
			
		<!-- end grids_of_3 -->
		</div>
		<?php echo $page_links; ?>
	</div>
</div>
</div>