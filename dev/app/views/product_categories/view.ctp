<?php
$this->pageTitle = $productCategory['ProductCategory']['name'];

foreach($crumbPath as $crumb) {
	if($this->params['pass'][0] != $crumb['ProductCategory']['id'])
		$html->addCrumb($crumb['ProductCategory']['name'], array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($crumb['ProductCategory']['name']), 'id'=>$crumb['ProductCategory']['id']));
	else
		$html->addCrumb($crumb['ProductCategory']['name']);
}

if($productCategory['ProductCategory']['meta_description'] != NULL)
	$this->set('meta_description',$productCategory['ProductCategory']['meta_description']);
if($productCategory['ProductCategory']['meta_keywords'] != NULL)
	$this->set('meta_keywords',$productCategory['ProductCategory']['meta_keywords']);

$html->css('catalog-styles', null, array('media'=>'screen'), false);

//configure the pagination url's to match the custom router
$paginator->options(
	array(
		'url' => array(
			'controller'=>'product_categories',
			'action'=>'view',
			'name'=>$html->slugify($productCategory['ProductCategory']['name']),
			'id'=>$productCategory['ProductCategory']['id']
		)
	)
);

//debug($productCategory);
//debug($product);
//debug($crumbPath);
//debug($this->params);
?>
<h2><?php echo $productCategory['ProductCategory']['name']; ?></h2>
<p><?php echo $productCategory['ProductCategory']['description']; ?></p>
<?php if(isset($product[0])): ?>
<div class="box-alt2"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">
	<div class="left-50 small-text">
		Sort by: <?php echo $paginator->sort('Name', 'title', array('title'=>'Sort By Name')).', '.$paginator->sort('Price', 'price', array('title'=>'Sort By Price')); ?>
	</div>
	<div class="left-50 small-text align-right">
		Display: <?php echo $paginator->link('9', array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($productCategory['ProductCategory']['name']), 'id'=>$productCategory['ProductCategory']['id'], 'limit'=>9), array('title'=>'Display 9')) ?>, <?php echo $paginator->link('18', array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($productCategory['ProductCategory']['name']), 'id'=>$productCategory['ProductCategory']['id'], 'limit'=>18), array('title'=>'Display 18')) ?>, <?php echo $paginator->link('30', array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($productCategory['ProductCategory']['name']), 'id'=>$productCategory['ProductCategory']['id'], 'limit'=>30), array('title'=>'Display 30')) ?>, <?php echo $paginator->link('50', array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($productCategory['ProductCategory']['name']), 'id'=>$productCategory['ProductCategory']['id'], 'limit'=>50), array('title'=>'Display 50')) ?>
	</div>
	<div class="clear"></div>
</div></div></div></div></div></div></div></div></div></div>
<?php if(isset($this->params['named']['mode']) && $this->params['named']['mode'] == 'list') : ?>
<div class="cat-list list-type-list">
<?php
//list mode
$i = 1;
foreach($product as $product) {
	echo '
	<div class="item',($i == 1) ? ' item-first' : '','">
		<div class="item-picture">
			'.$html->link($html->image('catalog/'.$product['ProductImage'][0]['filename']), array('controller'=>'products', 'action'=>'view', 'catname'=>$html->slugify($productCategory['ProductCategory']['name']), 'catid'=>$productCategory['ProductCategory']['id'], 'title'=>$html->slugify($product['Product']['title']), 'id'=>$product['Product']['id']), array('title'=>$product['Product']['title'],'escape'=>false)).'
		</div>
		<div class="item-info">
			'.$html->link($product['Product']['title'], array('controller'=>'products', 'action'=>'view', 'catname'=>$html->slugify($productCategory['ProductCategory']['name']), 'catid'=>$productCategory['ProductCategory']['id'], 'title'=>$html->slugify($product['Product']['title']), 'id'=>$product['Product']['id']), array('title'=>$product['Product']['title'], 'class'=>'title')).'
			',isset($product[0]['avg_rating']) ? '<div class="rating"><img src="/img/stars-'.round($product[0]['avg_rating']).'.png" alt="'.round($product[0]['avg_rating']).'" /> '.$html->link($product[0]['cnt_review'].' Review(s)', array('controller'=>'product_reviews', 'action'=>'view', $product['Product']['id'], $productCategory['ProductCategory']['id']), array('title'=>'Read All reviews')).'</div>' : '','
			<p class="list-price"><span class="prod-in-stock">'.$products->currencyFormat($product['Product']['price']).'</span></p>
			<p>'.$product['Product']['short_description'].'</p>
			<p>',(($product['Product']['quantity'] > 0) || ($product['Product']['is_infinite_quantity'] == 1)) && ($product['Product']['is_stocked'] == 1) ? $form->button('Add To Cart') : '<b><span class="prod-out-stock">Out Of Stock</span></b>','</p>
		</div>
		<div class="clear"></div>
	</div>';

	$i++;
}
?>
</div>
<?php else : ?>
<div class="cat-list list-type-grid">
<?php
//grid mode
$i = 1;
foreach($product as $product) {
	if(($i % 3) == 1)
		echo '
	<ol class="row',($i == 1) ? ' first' : '','">';

	echo '
		<li class="item',($i % 3) == 0 ? ' last' : '','">
			<div class="align-center">'.$html->link($html->image('catalog/'.$product['ProductImage'][0]['filename']), array('controller'=>'products', 'action'=>'view', 'catname'=>$html->slugify($productCategory['ProductCategory']['name']), 'catid'=>$productCategory['ProductCategory']['id'], 'title'=>$html->slugify($product['Product']['title']), 'id'=>$product['Product']['id']), array('title'=>$product['Product']['title'],'escape'=>false)).'</div>
			'.$html->link($product['Product']['title'], array('controller'=>'products', 'action'=>'view', 'catname'=>$html->slugify($productCategory['ProductCategory']['name']), 'catid'=>$productCategory['ProductCategory']['id'], 'title'=>$html->slugify($product['Product']['title']), 'id'=>$product['Product']['id']), array('title'=>$product['Product']['title'], 'class'=>'title')).'
			',isset($product[0]['avg_rating']) ? '<div class="rating"><img src="/img/stars-'.round($product[0]['avg_rating']).'.png" alt="'.round($product[0]['avg_rating']).'" /> ('.$html->link($product[0]['cnt_review'], array('controller'=>'product_reviews', 'action'=>'view', $product['Product']['id'], $productCategory['ProductCategory']['id']), array('title'=>'Read All reviews')).')</div>' : '','
			<p class="list-price"><span class="prod-in-stock">'.$products->currencyFormat($product['Product']['price']).'</span></p>
			<p>'.$product['Product']['short_description'].'</p>
			<p>',(($product['Product']['quantity'] > 0) || ($product['Product']['is_infinite_quantity'] == 1)) && ($product['Product']['is_stocked'] == 1) ? $form->button('Add To Cart') : '<b><span class="prod-out-stock">Out Of Stock</span></b>','</p>
		</li>';

	$i++;

	if(($i % 3) == 1)
		echo '
	</ol>
	<div class="clear"></div>';
}
if(($i % 3) != 1)
	echo '
	</ol>
	<div class="clear"></div>';
?>
</div>
<?php endif; ?>
<div class="pagination small-text box-alt2"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">
	<div class="left-50" style="width: 20%;">
		Page: <?php echo $paginator->counter(); ?>
	</div>
	<div class="left-50 align-right" style="width: 80%;">
		<?php echo $paginator->prev('&laquo; Prev', array('escape'=>false), null, array('class' => 'disabled')).$paginator->numbers(array('separator'=>null)).$paginator->next('Next &raquo;', array('escape'=>false), null, array('class' => 'disabled')); ?>
	</div>
	<div class="clear"></div>
</div></div></div></div></div></div></div></div></div></div>
<?php else: ?>
<p>No products to display.</p>
<?php endif; ?>