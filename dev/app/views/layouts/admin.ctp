<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $html->charset(); ?>
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />

<title><?php echo $title_for_layout; ?> | CakeCart Admin</title>
<meta name="Description" content="CakeCart Administration Area." />
<meta name="Keywords" content="cake, cart, admin" />
<meta name="robots" content="index, follow" />

<link type="image/ico" rel="Shortcut Icon" href="/favicon.ico" />

<link type="text/css" rel="stylesheet" href="/css/cake-styles.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/dropdown/dropdown.css" media="all" />
<link type="text/css" rel="stylesheet" href="/css/dropdown/themes/cake-cart/default.css" media="all" />
<link type="text/css" rel="stylesheet" href="/css/admin-styles.css" media="screen" />

<script type="text/javascript" src="/js/jquery/jquery-1.3.2.min.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="/js/jquery/plugins/jquery.dropdown.js"></script>
<![endif]-->

<?php echo $scripts_for_layout; ?>
</head>

<body>
<div class="container">
	<div class="header">
	</div>
	<div class="navigation">
	</div>
	<div class="content">
		<div class="column1">
			hello
		</div>
		<div class="column2">
			<?php $session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div class="clear"></div>
	</div>
	<div class="footer">
		&copy; CakeCart.org.
	</div>
<?php echo $cakeDebug; ?>
</div>
</body>
</html>