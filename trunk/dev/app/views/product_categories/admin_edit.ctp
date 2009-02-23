<div class="productCategories form">
<?php echo $form->create('ProductCategory');?>
	<fieldset>
 		<legend><?php __('Edit ProductCategory');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('parent_id');
		echo $form->input('lft');
		echo $form->input('rght');
		echo $form->input('image_filename');
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('is_active');
		echo $form->input('Product');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('ProductCategory.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ProductCategory.id'))); ?></li>
		<li><?php echo $html->link(__('List ProductCategories', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
