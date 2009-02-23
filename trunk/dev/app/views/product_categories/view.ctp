<?php
$this->pageTitle = $productCategory['ProductCategory']['name'];
$html->css('catalog-styles', null, array('screen'=>'media'), false);
?>

<h2><?php echo $productCategory['ProductCategory']['name']; ?></h2>
<p><?php echo $productCategory['ProductCategory']['description']; ?></p>
<?php foreach($productCategory['Product'] as $product): ?>
<?php echo $html->link($product['title'], array('controller'=>'products', 'action'=>'view', $product['id'])); ?>
<?php endforeach; ?>

<?php debug($productCategory); ?>