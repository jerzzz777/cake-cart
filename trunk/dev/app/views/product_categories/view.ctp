<?php
$this->pageTitle = $productCategory['ProductCategory']['name'];
if($productCategory['ProductCategory']['meta_description'] != NULL)
	$this->set('meta_description',$productCategory['ProductCategory']['meta_description']);
if($productCategory['ProductCategory']['meta_keywords'] != NULL)
	$this->set('meta_keywords',$productCategory['ProductCategory']['meta_keywords']);
$html->css('catalog-styles', null, array('screen'=>'media'), false);
?>

<h2><?php echo $productCategory['ProductCategory']['name']; ?></h2>
<p><?php echo $productCategory['ProductCategory']['description']; ?></p>
<table width="100%" cellpadding="0" cellspacing="0" class="cat-prods">
<?php
$i = 1;
foreach($productCategory['Product'] as $product) {
	$available = false;
	if((($product['quantity'] > 0) || ($product['is_infinite_quantity'] == 1)) && ($product['is_stocked'] == 1))
		$available = true;

	if(($i % 3) == 1)
		echo '
	<tr>';

	echo '
		<td align="center" valign="top" width="33%">
			'.$html->link($html->image('catalog/'.$product['ProductImage'][0]['filename']), array('controller'=>'products', 'action'=>'view', $product['id']), array('title'=>$product['title'],'escape'=>false)).'<br />
			'.$html->link($product['title'], array('controller'=>'products', 'action'=>'view', $product['id']), array('title'=>$product['title'], 'class'=>'title')).'<br />
			<img src="/img/star-full.png" alt="+" /><img src="/img/star-full.png" alt="+" /><img src="/img/star-full.png" alt="+" /><img src="/img/star-full.png" alt="+" /><img src="/img/star-full.png" alt="+" /><br />
			<b>',$available ? '<span class="prod-in-stock">$'.$product['price'].'</span>' : '<span class="prod-out-stock">Out Of Stock</span>','</b><br />
			',$available ? $form->button('Add To Cart') : '','
		</td>';

	if(($i % 3) == 0)
		echo '
	</tr>';

	$i++;
}
if(($i % 3) != 0)
	echo '
	</tr>';
?>

</table>