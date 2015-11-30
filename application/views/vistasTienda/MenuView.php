<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menu</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-submenu.min.css">

<script src="http://code.jquery.com/jquery-2.1.1.min.js" defer></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" defer></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap-submenu.min.js" defer></script>

</head>

<body>
	<div class="container">
	    <div class="jumbotron">
	        <h1>Codeigniter Multi Level menu</h1>
	        <h2>with Bootstrap 3.3 & Bootstrap Submenu Plugin Demos</h2>
	    </div>

	    <h3>Navbar</h3>
	    <nav class="navbar navbar-default">
			<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>

			<a class="navbar-brand">Menu Principal</a>
			</div>

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
</body>
</html>