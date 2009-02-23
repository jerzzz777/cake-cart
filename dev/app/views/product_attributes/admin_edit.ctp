<div class="productAttributes form">
<?php echo $form->create('ProductAttribute');?>
	<fieldset>
 		<legend><?php __('Edit ProductAttribute');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('is_active');
		echo $form->input('Product');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('ProductAttribute.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ProductAttribute.id'))); ?></li>
		<li><?php echo $html->link(__('List ProductAttributes', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
