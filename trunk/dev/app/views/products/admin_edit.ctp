<div class="products form">
<?php echo $form->create('Product');?>
	<fieldset>
 		<legend><?php __('Edit Product');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('short_description');
		echo $form->input('description');
		echo $form->input('sku');
		echo $form->input('weight');
		echo $form->input('tax_class_id', array('type'=>'select'));
		echo $form->input('new_from');
		echo $form->input('new_to');
		echo $form->input('price');
		echo $form->input('special_price');
		echo $form->input('special_price_from');
		echo $form->input('special_price_to');
		echo $form->input('is_stocked');
		echo $form->input('quantity');
		echo $form->input('is_infinite_quanitity');
		echo $form->input('meta_keywords');
		echo $form->input('meta_description');
		echo $form->input('is_shippable');
		echo $form->input('is_active');
		echo $form->input('ProductAttribute');
		echo $form->input('ProductCategory');
		echo $form->input('ProductDownload');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Product.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Product.id'))); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Product Discounts', true), array('controller'=> 'product_discounts', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Discount', true), array('controller'=> 'product_discounts', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Images', true), array('controller'=> 'product_images', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Image', true), array('controller'=> 'product_images', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Options', true), array('controller'=> 'product_options', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Option', true), array('controller'=> 'product_options', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Reviews', true), array('controller'=> 'product_reviews', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Review', true), array('controller'=> 'product_reviews', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Attributes', true), array('controller'=> 'product_attributes', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Attribute', true), array('controller'=> 'product_attributes', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Categories', true), array('controller'=> 'product_categories', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Category', true), array('controller'=> 'product_categories', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Downloads', true), array('controller'=> 'product_downloads', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Download', true), array('controller'=> 'product_downloads', 'action'=>'add')); ?> </li>
	</ul>
</div>
