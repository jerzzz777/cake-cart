<div class="productCategories view">
<h2><?php  __('ProductCategory');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['parent_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lft'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['lft']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rght'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['rght']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image Filename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['image_filename']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['is_active']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ProductCategory', true), array('action'=>'edit', $productCategory['ProductCategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ProductCategory', true), array('action'=>'delete', $productCategory['ProductCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productCategory['ProductCategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ProductCategories', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New ProductCategory', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('controller'=> 'products', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Products');?></h3>
	<?php if (!empty($productCategory['Product'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Image Id'); ?></th>
		<th><?php __('Tax Class Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Short Description'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Sku'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('New From'); ?></th>
		<th><?php __('New To'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Special Price'); ?></th>
		<th><?php __('Special Price From'); ?></th>
		<th><?php __('Special Price To'); ?></th>
		<th><?php __('Is Stocked'); ?></th>
		<th><?php __('Quantity'); ?></th>
		<th><?php __('Is Infinite Quanitity'); ?></th>
		<th><?php __('Meta Keywords'); ?></th>
		<th><?php __('Meta Description'); ?></th>
		<th><?php __('Is Shippable'); ?></th>
		<th><?php __('Is Active'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($productCategory['Product'] as $product):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $product['id'];?></td>
			<td><?php echo $product['image_id'];?></td>
			<td><?php echo $product['tax_class_id'];?></td>
			<td><?php echo $product['created'];?></td>
			<td><?php echo $product['modified'];?></td>
			<td><?php echo $product['title'];?></td>
			<td><?php echo $product['short_description'];?></td>
			<td><?php echo $product['description'];?></td>
			<td><?php echo $product['sku'];?></td>
			<td><?php echo $product['weight'];?></td>
			<td><?php echo $product['new_from'];?></td>
			<td><?php echo $product['new_to'];?></td>
			<td><?php echo $product['price'];?></td>
			<td><?php echo $product['special_price'];?></td>
			<td><?php echo $product['special_price_from'];?></td>
			<td><?php echo $product['special_price_to'];?></td>
			<td><?php echo $product['is_stocked'];?></td>
			<td><?php echo $product['quantity'];?></td>
			<td><?php echo $product['is_infinite_quanitity'];?></td>
			<td><?php echo $product['meta_keywords'];?></td>
			<td><?php echo $product['meta_description'];?></td>
			<td><?php echo $product['is_shippable'];?></td>
			<td><?php echo $product['is_active'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'products', 'action'=>'view', $product['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'products', 'action'=>'edit', $product['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'products', 'action'=>'delete', $product['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product', true), array('controller'=> 'products', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
