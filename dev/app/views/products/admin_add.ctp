<?php echo $form->create('Product');?>
	<fieldset>
 		<legend><?php __('Add Product');?></legend>
	<?php
		echo $form->input('image_id');
		echo $form->input('tax_class_id', array('type'=>'select'));
		echo $form->input('title');
		echo $form->input('short_description');
		echo $form->input('description');
		echo $form->input('sku');
		echo $form->input('weight');
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