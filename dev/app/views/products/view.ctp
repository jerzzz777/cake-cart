<?php
$this->pageTitle = $product['Product']['title'];

foreach($crumbPath as $crumb) {
	$html->addCrumb($crumb['ProductCategory']['name'], array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($crumb['ProductCategory']['name']), 'id'=>$crumb['ProductCategory']['id']));
}
$html->addCrumb($product['Product']['title']);

if($product['Product']['meta_description'] != NULL)
	$this->set('meta_description',$product['Product']['meta_description']);
if($product['Product']['meta_keywords'] != NULL)
	$this->set('meta_keywords',$product['Product']['meta_keywords']);

$html->css('catalog-styles', null, array('media'=>'screen'), false);

//debug($product);
?>
<h2><?php echo $product['Product']['title']; ?></h2>
<div class="prod-image">
	<p><a href="#" title="View Fullsize Image"><?php echo $html->image('catalog/'.$product['ProductImage'][0]['filename']); ?></a></p>
</div>
<div class="prod-quick-info">
	<div class="box-alt1"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">
		<table width="100%" cellpadding="0" cellspacing="0" class="pad-bot">
			<tr>
				<td width="40%"><b>Availability:</b></td>
				<td width="60%"><?php echo (($product['Product']['quantity'] > 0) || ($product['Product']['is_infinite_quantity'] == 1)) && ($product['Product']['is_stocked'] == 1) ? '<span class="prod-in-stock">In Stock</span>' : '<span class="prod-out-stock">Out Of Stock</span>'; ?></td>
			</tr>
			<tr>
				<td><b>Price:</b></td>
				<td><?php echo $products->currencyFormat($product['Product']['price']); ?></td>
			</tr>
			<tr>
				<td><b>Rating:</b></td>
				<td>
					<?php
						if(isset($product['ProductReview'][0]))
							echo '<img src="/img/stars-'.round($product[0]['avg_rating']).'.png" alt="'.round($product[0]['avg_rating']).'" />';
						else
							echo 'No reviews yet.';
					?>
				</td>
			</tr>
		</table>
		<p><?php echo $html->link($product[0]['cnt_review'].' Review(s)', array('controller'=>'product_reviews', 'action'=>'view', $product['Product']['id'], $crumb['ProductCategory']['id']), array('title'=>'Read All Reviews')); ?> | <?php echo $html->link('Add your review', array('controller'=>'product_reviews', 'action'=>'view', $product['Product']['id'], $crumb['ProductCategory']['id'], '#write'), array('title'=>'Add Your Review For This Product')); ?></p>
		<div class="hr"></div>
		<?php if(isset($product['ProductOption'][0])) : ?>
		<table width="100%" cellpadding="0" cellspacing="0" class="pad-bot prod-options">
			<?php foreach ($product['ProductOption'] as $option) : ?>
			<tr>
				<td width="40%"><b><?php echo $option['title'] ?>:</b></td>
				<td width="60%"><?php echo $form->input('ProductOptionValues.id', array('options'=>$products->buildProductOptionValues($option['ProductOptionValue']), 'div'=>false, 'label'=>false, 'id'=>'ProductOption'.$option['id'])); ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<? endif; ?>
		<b>Qty:</b> <?php echo $form->input('Cart.Qty', array('label'=>false, 'class'=>'prod-cart-input medium-text', 'value'=>'1', 'div'=>false)); ?>
		<?php echo $form->button('Cart.Add', array('value'=>'Add To Cart')); ?>
	</div></div></div></div></div></div></div></div></div></div>
	<p><?php echo $product['Product']['short_description']; ?></p>
</div>
<div class="clear"></div>
<?php
if(isset($product['ProductImage'][1]))
{
	echo '
<a name="images"></a>
<h2>Additional Images</h2>';

	$i = 0;
	foreach ($product['ProductImage'] as $image) {
		if($image['is_featured'] != 1)
			echo '
<div class="prod-add-image" title="View Fullsize Image"><a href="#">'.$html->image('catalog/'.$image['filename']).'</a></div>';

		if(($i % 3) == 0)
			echo '
<div class="clear"></div>';
	
		$i++;
	}
}
?>
<div class="clear"></div>
<a name="description"></a>
<h2>Product Description</h2>
<?php echo $product['Product']['description']; ?>
<a name="info"></a>
<h2>Additional Information</h2>
<div class="tborder margin-bot">
<table width="100%" cellpadding="0" cellspacing="1" class="pad-all alt-table">
	<tr class="alt-row-2">
		<td width="40%"><b>SKU:</b></td>
		<td width="60%"><?php echo $product['Product']['sku']; ?></td>
	</tr>
	<tr class="alt-row-1">
		<td width="40%"><b>Weight:</b></td>
		<td width="60%"><?php echo $product['Product']['weight']; ?></td>
	</tr>
<?php
$i = 0;
foreach ($product['ProductAttribute'] as $attribute):
?>
	<tr class="<?php echo (($i % 2) == 0) ? 'alt-row-2' : 'alt-row-1'; ?>">
		<td width="40%"><b><?php echo $attribute['title']; ?>:</b></td>
		<td width="60%"><?php echo $attribute['ProductAttributesProduct']['value']; ?></td>
	</tr>
<?
$i++;
endforeach;
?>
</table>
</div>
<a name="reviews"></a>
<h2>Customer Reviews</h2>
<?php
if(isset($product['ProductReview'][0]))
{
		echo '
<div class="box-alt2 align-right small-text"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">
	'.$html->link('Read All Reviews ('.$product[0]['cnt_review'].') &raquo;', array('controller'=>'product_reviews', 'action'=>'view', $product['Product']['id'], $crumb['ProductCategory']['id']), array('title'=>'Read All Reviews', 'escape'=>false)).'
</div></div></div></div></div></div></div></div></div></div>';

	$i = 0;
	foreach ($product['ProductReview'] as $review):
		if(($i % 2) == 0)
			echo '
<div class="box-alt3"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">';
		else
			echo '
<div class="box-alt1"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">';
?>
<p>
	<img src="/img/stars-<?php echo $review['rating']; ?>.png" alt="<?php echo $review['rating']; ?>" style="float: right;" />
	<b><?php echo $review['name']; ?></b><br />
	<?php echo $review['created']; ?>
</p>
<?php
		echo $review['review'].'
</div></div></div></div></div></div></div></div></div></div>';
		$i++;
	endforeach;

		echo '
<div class="box-alt2 align-right small-text"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">
	'.$html->link('Read All Reviews ('.$product[0]['cnt_review'].') &raquo;', array('controller'=>'product_reviews', 'action'=>'view', $product['Product']['id'], $crumb['ProductCategory']['id']), array('title'=>'Read All Reviews', 'escape'=>false)).'
</div></div></div></div></div></div></div></div></div></div>';
}
else
{
	echo '
<p>No reviews yet. Be the first to '.$html->link('leave a review', array('controller'=>'product_reviews', 'action'=>'view', $product['Product']['id'], $crumb['ProductCategory']['id'], '#write'), array('title'=>'Leave Your Review')).'.</p>';
}
?>