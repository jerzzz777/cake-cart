<?php
	extract($data);
	echo $html->link($ProductCategory['name'], array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($ProductCategory['name']), 'id'=>$ProductCategory['id']));
?>