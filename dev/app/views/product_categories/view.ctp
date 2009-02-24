<?php
$this->pageTitle = $productCategory['ProductCategory']['name'];
if($productCategory['ProductCategory']['meta_description'] != NULL)
	$this->set('meta_description',$productCategory['ProductCategory']['meta_description']);
if($productCategory['ProductCategory']['meta_keywords'] != NULL)
	$this->set('meta_keywords',$productCategory['ProductCategory']['meta_keywords']);
$html->css('catalog-styles', null, array('screen'=>'media'), false);
//debug($productCategory);
//debug($product);
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
			<div class="align-center">'.$html->link($html->image('catalog/'.$product['ProductImage'][0]['filename']), array('controller'=>'products', 'action'=>'view', $product['Product']['id']), array('title'=>$product['Product']['title'],'escape'=>false)).'</div>
			'.$html->link($product['Product']['title'], array('controller'=>'products', 'action'=>'view', $product['Product']['id']), array('title'=>$product['Product']['title'], 'class'=>'title')).'<br />
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

<div class="pagination">
<?php
$paginator->options(array('url' => $this->passedArgs));
echo '<p>Page: '.$paginator->counter().'</p>';
echo $paginator->prev('« Previous ', null, null, array('class' => 'disabled'));
echo $paginator->numbers(array('separator'=>''));
echo $paginator->next(' Next »', null, null, array('class' => 'disabled'));
?>
</div>