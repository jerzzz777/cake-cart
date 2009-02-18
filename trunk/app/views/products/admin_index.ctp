<div class="products index">
<h2><?php __('Products');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('image_id');?></th>
	<th><?php echo $paginator->sort('tax_class_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('short_description');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('sku');?></th>
	<th><?php echo $paginator->sort('new_from');?></th>
	<th><?php echo $paginator->sort('new_to');?></th>
	<th><?php echo $paginator->sort('price');?></th>
	<th><?php echo $paginator->sort('special_price');?></th>
	<th><?php echo $paginator->sort('special_price_from');?></th>
	<th><?php echo $paginator->sort('special_price_to');?></th>
	<th><?php echo $paginator->sort('quantity');?></th>
	<th><?php echo $paginator->sort('sort_order');?></th>
	<th><?php echo $paginator->sort('is_stocked');?></th>
	<th><?php echo $paginator->sort('is_active');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($products as $product):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $product['Product']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($product['Image']['title'], array('controller'=> 'images', 'action'=>'view', $product['Image']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($product['TaxClass']['title'], array('controller'=> 'tax_classes', 'action'=>'view', $product['TaxClass']['id'])); ?>
		</td>
		<td>
			<?php echo $product['Product']['created']; ?>
		</td>
		<td>
			<?php echo $product['Product']['modified']; ?>
		</td>
		<td>
			<?php echo $product['Product']['title']; ?>
		</td>
		<td>
			<?php echo $product['Product']['short_description']; ?>
		</td>
		<td>
			<?php echo $product['Product']['description']; ?>
		</td>
		<td>
			<?php echo $product['Product']['sku']; ?>
		</td>
		<td>
			<?php echo $product['Product']['new_from']; ?>
		</td>
		<td>
			<?php echo $product['Product']['new_to']; ?>
		</td>
		<td>
			<?php echo $product['Product']['price']; ?>
		</td>
		<td>
			<?php echo $product['Product']['special_price']; ?>
		</td>
		<td>
			<?php echo $product['Product']['special_price_from']; ?>
		</td>
		<td>
			<?php echo $product['Product']['special_price_to']; ?>
		</td>
		<td>
			<?php echo $product['Product']['quantity']; ?>
		</td>
		<td>
			<?php echo $product['Product']['sort_order']; ?>
		</td>
		<td>
			<?php echo $product['Product']['is_stocked']; ?>
		</td>
		<td>
			<?php echo $product['Product']['is_active']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $product['Product']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $product['Product']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Product', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Images', true), array('controller'=> 'images', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Image', true), array('controller'=> 'images', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Tax Classes', true), array('controller'=> 'tax_classes', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Tax Class', true), array('controller'=> 'tax_classes', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Categories', true), array('controller'=> 'product_categories', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Category', true), array('controller'=> 'product_categories', 'action'=>'add')); ?> </li>
	</ul>
</div>
