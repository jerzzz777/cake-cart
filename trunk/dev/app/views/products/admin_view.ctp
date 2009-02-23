<div class="products view">
<h2><?php  __('Product');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['image_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tax Class Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['tax_class_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['short_description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sku'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['sku']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Weight'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['weight']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('New From'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['new_from']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('New To'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['new_to']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Special Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['special_price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Special Price From'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['special_price_from']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Special Price To'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['special_price_to']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Stocked'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['is_stocked']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quantity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['quantity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Infinite Quanitity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['is_infinite_quanitity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Keywords'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['meta_keywords']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['meta_description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Shippable'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['is_shippable']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['is_active']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Product', true), array('action'=>'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Product', true), array('action'=>'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Products', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Product', true), array('action'=>'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Product Discounts');?></h3>
	<?php if (!empty($product['ProductDiscount'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Quantity'); ?></th>
		<th><?php __('Discount'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductDiscount'] as $productDiscount):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productDiscount['id'];?></td>
			<td><?php echo $productDiscount['product_id'];?></td>
			<td><?php echo $productDiscount['quantity'];?></td>
			<td><?php echo $productDiscount['discount'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'product_discounts', 'action'=>'view', $productDiscount['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'product_discounts', 'action'=>'edit', $productDiscount['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'product_discounts', 'action'=>'delete', $productDiscount['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productDiscount['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product Discount', true), array('controller'=> 'product_discounts', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Product Images');?></h3>
	<?php if (!empty($product['ProductImage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Filename'); ?></th>
		<th><?php __('Is Featured'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductImage'] as $productImage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productImage['id'];?></td>
			<td><?php echo $productImage['product_id'];?></td>
			<td><?php echo $productImage['title'];?></td>
			<td><?php echo $productImage['filename'];?></td>
			<td><?php echo $productImage['is_featured'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'product_images', 'action'=>'view', $productImage['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'product_images', 'action'=>'edit', $productImage['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'product_images', 'action'=>'delete', $productImage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product Image', true), array('controller'=> 'product_images', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Product Options');?></h3>
	<?php if (!empty($product['ProductOption'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductOption'] as $productOption):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productOption['id'];?></td>
			<td><?php echo $productOption['product_id'];?></td>
			<td><?php echo $productOption['title'];?></td>
			<td><?php echo $productOption['description'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'product_options', 'action'=>'view', $productOption['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'product_options', 'action'=>'edit', $productOption['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'product_options', 'action'=>'delete', $productOption['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productOption['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product Option', true), array('controller'=> 'product_options', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Product Reviews');?></h3>
	<?php if (!empty($product['ProductReview'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Rating'); ?></th>
		<th><?php __('Review'); ?></th>
		<th><?php __('Is Active'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductReview'] as $productReview):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productReview['id'];?></td>
			<td><?php echo $productReview['product_id'];?></td>
			<td><?php echo $productReview['customer_id'];?></td>
			<td><?php echo $productReview['created'];?></td>
			<td><?php echo $productReview['name'];?></td>
			<td><?php echo $productReview['rating'];?></td>
			<td><?php echo $productReview['review'];?></td>
			<td><?php echo $productReview['is_active'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'product_reviews', 'action'=>'view', $productReview['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'product_reviews', 'action'=>'edit', $productReview['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'product_reviews', 'action'=>'delete', $productReview['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productReview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product Review', true), array('controller'=> 'product_reviews', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Product Attributes');?></h3>
	<?php if (!empty($product['ProductAttribute'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Is Active'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductAttribute'] as $productAttribute):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productAttribute['id'];?></td>
			<td><?php echo $productAttribute['title'];?></td>
			<td><?php echo $productAttribute['is_active'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'product_attributes', 'action'=>'view', $productAttribute['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'product_attributes', 'action'=>'edit', $productAttribute['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'product_attributes', 'action'=>'delete', $productAttribute['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productAttribute['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product Attribute', true), array('controller'=> 'product_attributes', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Product Categories');?></h3>
	<?php if (!empty($product['ProductCategory'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Parent Id'); ?></th>
		<th><?php __('Lft'); ?></th>
		<th><?php __('Rght'); ?></th>
		<th><?php __('Image Filename'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Is Active'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductCategory'] as $productCategory):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productCategory['id'];?></td>
			<td><?php echo $productCategory['parent_id'];?></td>
			<td><?php echo $productCategory['lft'];?></td>
			<td><?php echo $productCategory['rght'];?></td>
			<td><?php echo $productCategory['image_filename'];?></td>
			<td><?php echo $productCategory['name'];?></td>
			<td><?php echo $productCategory['description'];?></td>
			<td><?php echo $productCategory['is_active'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'product_categories', 'action'=>'view', $productCategory['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'product_categories', 'action'=>'edit', $productCategory['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'product_categories', 'action'=>'delete', $productCategory['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product Category', true), array('controller'=> 'product_categories', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Product Downloads');?></h3>
	<?php if (!empty($product['ProductDownload'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Filename'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductDownload'] as $productDownload):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productDownload['id'];?></td>
			<td><?php echo $productDownload['title'];?></td>
			<td><?php echo $productDownload['filename'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'product_downloads', 'action'=>'view', $productDownload['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'product_downloads', 'action'=>'edit', $productDownload['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'product_downloads', 'action'=>'delete', $productDownload['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productDownload['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Product Download', true), array('controller'=> 'product_downloads', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
