<?php
	extract($data);
	if($ProductCategory['parent_id'] == NULL)
		echo $html->link($ProductCategory['name'], array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($ProductCategory['name']), 'id'=>$ProductCategory['id']), array('class'=>'main-link', 'title'=>'Category: '.$ProductCategory['name']));
	else
		echo $html->link($ProductCategory['name'], array('controller'=>'product_categories', 'action'=>'view', 'name'=>$html->slugify($ProductCategory['name']), 'id'=>$ProductCategory['id']), array('title'=>'Category: '.$ProductCategory['name']));
?>