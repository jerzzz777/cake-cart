<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $html->charset(); ?>
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />

<title><?php echo $title_for_layout; ?> | CakeCart Demo Store</title>
<?php
if(!isset($meta_description))
	$meta_description = "Yourwebsite.com sells all kinds of cool gear.";
if(!isset($meta_keywords))
	$meta_keywords = "cake, shopping, cart, free, php, mysql, ecommerce, e-commerce";

echo '
<meta name="Description" content="'.$meta_description.'" />
<meta name="Keywords" content="'.$meta_keywords.'" />';
?>
<meta name="robots" content="index, follow" />

<link type="image/ico" rel="Shortcut Icon" href="/favicon.ico" />
<link type="text/css" rel="stylesheet" href="/css/cake-styles.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/navigation.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/styles.css" media="screen" />

<script type="text/javascript" language="javascript" src="/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/superfish-1.4.8.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$('ul.sf-menu').superfish({
			delay:		200,
			animation:	{opacity:'show',height:'show'},
			speed:		'fast'
		});
	});
</script>

<?php echo $scripts_for_layout; ?>
</head>

<body>
<a name="top"></a>
<div class="container">
	<div class="header">
		<div class="left-50">
			<h1>CakeCart Demo Store</h1>
		</div>
		<div class="left-50 align-right">
			<p class="welcome-message">Welcome to CakeCart Demo Store, Guest!</p>
			<div class="customer-links medium-text">
				<ul>
					<li><a href="#" title="My Account">My Account</a></li>
					<li><a href="#" title="My Cart">My Cart</a></li>
					<li><a href="#" title="Checkout">Checkout</a></li>
					<li><a href="#" title="Login">Log In</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="navigation">
		<?php echo $tree->generate($productCategoryMenu['ProductCategoryMenu'], array('model'=>'ProductCategory', 'class'=>'sf-menu', 'element'=>'product_category_menu_item')); ?>
	</div>
	<div class="content">
		<div class="breadcrumbs">
			<?php 
			if($html->getCrumbs())
				echo $html->getCrumbs('<span class="sep">&gt;</span>','Home');
			else
				echo 'Home';
			?>
		</div>
		<div class="column-1">
			<div class="box">
				<div class="box-top">
					<h2>Search</h2>
				</div>
				<div class="box-cont">
					<p>Please enter keywords below</p>
					<?php echo $form->input('Search', array('label' => false, 'class' => 'input-search', 'div' => false)); ?>
					<?php echo $form->button('Search', array('value' => 'Go', 'class' => 'btn-search')); ?>
				</div>
				<div class="box-bot"></div>
			</div>
			<div class="box">
				<div class="box-top">
					<h2>Information</h2>
				</div>
				<div class="box-cont">
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Site Map</a></li>
					</ul>
				</div>
				<div class="box-bot"></div>
			</div>
		</div>
		<div class="column-2">
<!-- ## START PAGE CONTENT ## -->
<?php
	//debug($this->params);
	$session->flash();
?>
<?php echo $content_for_layout; ?>
<!-- ## END PAGE CONTENT ## -->
		</div>
		<div class="column-3">
			<div class="box">
				<div class="box-top">
					<h2>Shopping Cart</h2>
				</div>
				<div class="box-cont">
					Your shopping cart is currently empty.
				</div>
				<div class="box-bot"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="push"></div>
</div>
<div class="footer">
	<div class="footer-container">
		<div class="footer-column-half">
			<p>&copy; Copyright 2009, CakeCart Demo Store.</p>
			<p>Powered by <a href="http://www.cakecart.org" target="_blank" title="Free eCommerce Shopping Cart">CakeCart 1.0</a>.</p>
		</div>
		<div class="footer-column">
			<h3>Sitemap</h3>
			<ul>
				<li>Page1</li>
				<li>Page2</li>
				<li>Page3</li>
				<li>Page4</li>
			</ul>
			<ul>
				<li>Page1</li>
				<li>Page2</li>
			</ul>
		</div>
		<div class="footer-column">
			<h3 style="visibility: hidden;">Sitemap Continued...</h3>
			<ul>
				<li>Page1</li>
				<li>Page2</li>
				<li>Page3</li>
				<li>Page4</li>
			</ul>
			<ul>
				<li>Page1</li>
				<li>Page2</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php echo $cakeDebug; ?>
</body>
</html>