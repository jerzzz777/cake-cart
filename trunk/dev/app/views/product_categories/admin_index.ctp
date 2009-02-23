<div class="productCategories index">
<h2><?php __('ProductCategories');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('parent_id');?></th>
	<th><?php echo $paginator->sort('lft');?></th>
	<th><?php echo $paginator->sort('rght');?></th>
	<th><?php echo $paginator->sort('image_filename');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('is_active');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($productCategories as $productCategory):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productCategory['ProductCategory']['id']; ?>
		</td>
		<td>
			<?php echo $productCategory['ProductCategory']['parent_id']; ?>
		</td>
		<td>
			<?php echo $productCategory['ProductCategory']['lft']; ?>
		</td>
		<td>
			<?php echo $productCategory['ProductCategory']['rght']; ?>
		</td>
		<td>
			<?php echo $productCategory['ProductCategory']['image_filename']; ?>
		</td>
		<td>
			<?php echo $productCategory['ProductCategory']['name']; ?>
		</td>
		<td>
			<?php echo $productCategory['ProductCategory']['description']; ?>
		</td>
		<td>
			<?php echo $productCategory['ProductCategory']['is_active']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $productCategory['ProductCategory']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $productCategory['ProductCategory']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $productCategory['ProductCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productCategory['ProductCategory']['id'])); ?>
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
		<li><?php echo $html->link(__('New ProductCategory', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
