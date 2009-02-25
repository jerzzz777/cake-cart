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

$html->css('catalog-styles', null, array('screen'=>'media'), false);

//debug($productCategory);
//debug($product);
//debug($crumbPath);
?>
<h2><?php echo $productCategory['ProductCategory']['name']; ?></h2>
<p><?php echo $productCategory['ProductCategory']['description']; ?></p>
<div class="cat-list list-type-grid">
<?php
$i = 1;
foreach($product as $product) {
	$available = false;
	if((($product['Product']['quantity'] > 0) || ($product['Product']['is_infinite_quantity'] == 1)) && ($product['Product']['is_stocked'] == 1))
		$available = true;

	if(($i % 3) == 1)
		echo '
	<ol class="row',($i == 1) ? ' first' : '','">';

	echo '
		<li class="item',($i % 3) == 0 ? ' last' : '','">
			<div class="align-center">'.$html->link($html->image('catalog/'.$product['ProductImage'][0]['filename']), array('controller'=>'products', 'action'=>'view', 'catname'=>$html->slugify($productCategory['ProductCategory']['name']), 'catid'=>$productCategory['ProductCategory']['id'], 'title'=>$html->slugify($product['Product']['title']), 'id'=>$product['Product']['id']), array('title'=>$product['Product']['title'],'escape'=>false)).'</div>
			'.$html->link($product['Product']['title'], array('controller'=>'products', 'action'=>'view', 'catname'=>$html->slugify($productCategory['ProductCategory']['name']), 'catid'=>$productCategory['ProductCategory']['id'], 'title'=>$html->slugify($product['Product']['title']), 'id'=>$product['Product']['id']), array('title'=>$product['Product']['title'], 'class'=>'title')).'<br />
			<img src="/img/star-full.png" alt="+" /><img src="/img/star-full.png" alt="+" /><img src="/img/star-full.png" alt="+" /><img src="/img/star-full.png" alt="+" /><img src="/img/star-full.png" alt="+" /><br />
			<b>',$available ? '<span class="prod-in-stock">$'.$product['Product']['price'].'</span>' : '<span class="prod-out-stock">Out Of Stock</span>','</b><br />
			',$available ? $form->button('Add To Cart') : '','
		</li>';

	$i++;

	if(($i % 3) == 1)
		echo '
		<div class="clear"></div>
	</ol>';
}
if(($i % 3) != 1)
	echo '
		<div class="clear"></div>
	</ol>';
?>
</div>
<?php
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
if($paginator->hasPage())
{
	echo "
<div class=\"pagination\">
<p>Page: ".$paginator->counter()."</p>
".$paginator->prev('<< Previous', null, null, array('class' => 'disabled')).
$paginator->numbers(array('separator'=>null)).
$paginator->next('Next >>', null, null, array('class' => 'disabled'))."
</div>";
}
?>