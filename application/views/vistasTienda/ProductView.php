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
			<?php $offset = $this->uri->segment(4, 0) + 1;?>
			<?php $category_count=count($categories);?>
			<?php for ($i=0; $i < 2; $i++) : ?>
				<?php for ($j=0; $j < 3 && $category_count > 0; $j++) : ?>
					<div class="grid1_of_3">
						<a href="details.php?productId=$product->productId">
							<img src=<?php echo base_url().'public/'.$categories[(($i*3)+$j)]->image;?> alt="Imagen Producto"/>
							<h3><?php echo $categories[(($i*3)+$j)]->name; ?></h3>
							<span class="b_btm"></span>
						</a>
					</div>
					<?php $category_count--;?>
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

