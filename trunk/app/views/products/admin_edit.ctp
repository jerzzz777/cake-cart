<div class="products form">
<?php echo $form->create('Product');?>
	<fieldset>
 		<legend><?php __('Edit Product');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('image_id');
		echo $form->input('tax_class_id');
		echo $form->input('title');
		echo $form->input('short_description');
		echo $form->input('description');
		echo $form->input('sku');
		echo $form->input('new_from');
		echo $form->input('new_to');
		echo $form->input('price');
		echo $form->input('special_price');
		echo $form->input('special_price_from');
		echo $form->input('special_price_to');
		echo $form->input('quantity');
		echo $form->input('sort_order');
		echo $form->input('is_stocked');
		echo $form->input('is_active');
		echo $form->input('Image');
		echo $form->input('ProductCategory');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Product.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Product.id'))); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Images', true), array('controller'=> 'images', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Image', true), array('controller'=> 'images', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Tax Classes', true), array('controller'=> 'tax_classes', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Tax Class', true), array('controller'=> 'tax_classes', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Categories', true), array('controller'=> 'product_categories', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Category', true), array('controller'=> 'product_categories', 'action'=>'add')); ?> </li>
	</ul>
</div>
