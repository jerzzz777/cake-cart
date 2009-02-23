<div class="productDownloads index">
<h2><?php __('ProductDownloads');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('filename');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($productDownloads as $productDownload):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productDownload['ProductDownload']['id']; ?>
		</td>
		<td>
			<?php echo $productDownload['ProductDownload']['title']; ?>
		</td>
		<td>
			<?php echo $productDownload['ProductDownload']['filename']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $productDownload['ProductDownload']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $productDownload['ProductDownload']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $productDownload['ProductDownload']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productDownload['ProductDownload']['id'])); ?>
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
		<li><?php echo $html->link(__('New ProductDownload', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
