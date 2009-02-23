<div class="productDownloads form">
<?php echo $form->create('ProductDownload');?>
	<fieldset>
 		<legend><?php __('Add ProductDownload');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('filename');
		echo $form->input('Product');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List ProductDownloads', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
