<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<title>Menu</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-submenu.min.css">
<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="http://code.jquery.com/jquery-2.1.1.min.js" defer></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" defer></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap-submenu.min.js" defer></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
	<!-- start top_js_button -->
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/easing.js"></script>
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>

</head>

<body>
	<div class="container">
		<div class="header_bg">
			<div class="wrap">
				<div class="header">
					<div class="logo">
						<a href="#"><img src="<?php echo base_url(); ?>public/images/logotipo.png" alt="logo"/> </a>
					</div>
					<div class="h_icon">
						<ul class="icon1 sub-icon1">
							<li><a href="#">Carro de compra</a>
								<ul class="sub-icon1 list">
									<li><h3>El carro de compra está vacío</h3><a href="#"></a></li>
									<li><p><a href="#">Inicia sesión </a>o<a href="#"> explora nuestros productos</a></p></li>
								</ul>
							</li>
							<li><a id="iniciaSesion" href="login.php">Inicia sesión</a></li>
						</ul>
					</div>
					<div class="h_search">
			    		<form>
			    			<input type="text" value="">
			    			<input type="submit" value="">
			    		</form>
					</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

<div class="header_btm">
	<div class="wrap">
		<div class="header_sub">
			<div id="mainMenu" class="h_menu">
			    <nav class="navbar navbar-default">
					<div class="collapse navbar-collapse">
						<?php echo $this->multi_menu->render(array(
						    'nav_tag_open'        => '<ul class="nav navbar-nav">',            
						    'parentl1_tag_open'   => '<li class="dropdown">',
						    'parentl1_anchor'     => '<a tabindex="0" data-toggle="dropdown" href="%s">%s<span class="caret"></span></a>',
						    'parent_tag_open'     => '<li class="dropdown-submenu">',
						    'parent_anchor'       => '<a href="%s" data-toggle="dropdown">%s</a>',
						    'children_tag_open'   => '<ul class="dropdown-menu">'
						)); ?>
					</div>
			    </nav>
			</div>
		</div>
	</div>
</div>

</body>
</html>