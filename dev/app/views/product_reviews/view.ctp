<?php
$this->pageTitle = 'Reviews For '.$product['Product']['title'];

foreach($crumbPath as $crumb) {
	$html->addCrumb($crumb['ProductCategory']['name'], array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($crumb['ProductCategory']['name']), 'id'=>$crumb['ProductCategory']['id']));
}
$html->addCrumb($product['Product']['title'], array('controller'=>'products', 'action'=>'view', 'catname'=>$html->slugify($crumb['ProductCategory']['name']), 'catid'=>$crumb['ProductCategory']['id'], 'title'=>$html->slugify($product['Product']['title']), 'id'=>$product['Product']['id']));
$html->addCrumb('Reviews');

$html->css('catalog-styles', null, array('media'=>'screen'), false);

$paginator->options(
	array(
		'url' => $this->passedArgs
	)
);

//debug($crumbPath);
//debug($product);
//debug($reviews);
?>
<h2>Reviews for "<?php echo $product['Product']['title']; ?>"</h2>
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
						if(isset($product[0]['avg_rating']))
							echo '<img src="/img/stars-'.round($product[0]['avg_rating']).'.png" alt="'.round($product[0]['avg_rating']).'" />';
						else
							echo 'No reviews yet.';
					?>
				</td>
			</tr>
		</table>
		<p><a href="#reviews" title="Read All Reviews"><?php echo $product[0]['cnt_review'] ?> Review(s)</a> | <a href="#write" title="Add Your Review For This Product">Add your review</a></p>
		<div class="hr"></div>
		<b>Qty:</b> <?php echo $form->input('Cart.Qty', array('label'=>false, 'class'=>'prod-cart-input medium-text', 'value'=>'1', 'div'=>false)); ?>
		<?php echo $form->button('Cart.Add', array('value'=>'Add To Cart')); ?>
	</div></div></div></div></div></div></div></div></div></div>
	<p><?php echo $html->link('&laquo; Return to product page', array('controller'=>'products', 'action'=>'view', 'catname'=>$html->slugify($crumb['ProductCategory']['name']), 'catid'=>$crumb['ProductCategory']['id'], 'title'=>$html->slugify($product['Product']['title']), 'id'=>$product['Product']['id']), array('title'=>$product['Product']['title'], 'escape'=>false)) ?></p>
</div>
<div class="clear"></div>
<a name="reviews"></a>
<h2>Customer Reviews</h2>
<?php if($paginator->hasPage()) : ?>
<div class="box-alt2"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">
	<div class="left-50 small-text">
		Sort by: <?php echo $paginator->sort('Date', 'created', array('title'=>'Sort By Date')).', '.$paginator->sort('Rating', 'rating', array('title'=>'Sort By Rating')); ?>
	</div>
	<div class="left-50 small-text align-right">
		Display: <?php echo $paginator->link('5', array('limit'=>5), array('title'=>'Display 5')); ?>, <?php echo $paginator->link('10', array('limit'=>10), array('title'=>'Display 10')); ?>, <?php echo $paginator->link('25', array('limit'=>25), array('title'=>'Display 25')); ?>, <?php echo $paginator->link('50', array('limit'=>50), array('title'=>'Display 50')); ?>
	</div>
	<div class="clear"></div>
</div></div></div></div></div></div></div></div></div></div>
<?php
	$i = 0;
	foreach ($reviews as $review):
		if(($i % 2) == 0)
			echo '
<div class="box-alt3"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">';
		else
			echo '
<div class="box-alt1"><div class="box-border-t"><div class="box-border-b"><div class="box-border-l"><div class="box-border-r"><div class="box-corner-tl"><div class="box-corner-tr"><div class="box-corner-bl"><div class="box-corner-br"><div class="box-mid">';
?>
<p>
	<img src="/img/stars-<?php echo $review['ProductReview']['rating']; ?>.png" alt="<?php echo $review['ProductReview']['rating']; ?>" style="float: right;" />
	<b><?php echo $review['ProductReview']['name']; ?></b><br />
	<?php echo $review['ProductReview']['created']; ?>
</p>
<?php
		echo $review['ProductReview']['review'].'
</div></div></div></div></div></div></div></div></div></div>';
		$i++;
	endforeach;
?>
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
<p>No reviews yet. Be the first to <a href="#write" title="Leave Your Review">leave a review</a>.</p>
<?php endif; ?>
<a name="write"></a>
<h2>Write Your Review</h2>
<div id="write-review">
<div id="ajax-loading" style="display: none;">Submitting your review. Please wait...</div>
<?php echo $ajax->form('add','post',array('model'=>'ProductReview', 'update'=>'write-review', 'indicator'=>'ajax-loading')); ?>
<?php  echo $form->input('product_id', array('type'=>'hidden', 'value'=>$product['Product']['id'])); ?>
<?php  echo $form->input('name'); ?>
How do you rate this product?
<div class="radio"><?php  echo $form->radio('rating', array('1'=>'<img src="/img/stars-1.png" alt="1 Star" />', '2'=>'<img src="/img/stars-2.png" alt="2 Stars" />', '3'=>'<img src="/img/stars-3.png" alt="3 Stars" />', '4'=>'<img src="/img/stars-4.png" alt="4 Stars" />', '5'=>'<img src="/img/stars-5.png" alt="5 Stars" />'), array('legend'=>false)); ?></div>
<?php  echo $form->input('review'); ?>
<?php echo $form->end('Submit Your Review'); ?>
</div>