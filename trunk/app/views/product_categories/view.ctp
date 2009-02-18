<pre>
<?php print_r($productCategory); ?>
</pre>

<?php foreach ($productCategory['Product'] as $product): ?>
	<div><?php echo $product['title']; ?></div>
<?php endforeach; ?>