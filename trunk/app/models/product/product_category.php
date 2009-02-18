<?php
class ProductCategory extends AppModel {

	var $name = 'ProductCategory';
	var $actsAs = array('Tree');
	var $order = 'ProductCategory.lft ASC';
	
	var $validate = array(
		'image_id' => array('numeric'),
		'name' => array('notempty'),
		'sort_order' => array('numeric'),
		'is_active' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Image' => array('className' => 'Image',
								'foreignKey' => 'image_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasAndBelongsToMany = array(
			'Product' => array('className' => 'Product',
						'joinTable' => 'products_product_categories',
						'foreignKey' => 'product_category_id',
						'associationForeignKey' => 'product_id',
						'unique' => true,
						'conditions' => '',
						'fields' => '',
						'order' => '',
						'limit' => '',
						'offset' => '',
						'finderQuery' => '',
						'deleteQuery' => '',
						'insertQuery' => ''
			)
	);

}
?>