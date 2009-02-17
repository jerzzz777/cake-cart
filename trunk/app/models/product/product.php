<?php
class Product extends AppModel {

	var $name = 'Product';
	var $validate = array(
		'image_id' => array('numeric'),
		'tax_class_id' => array('numeric'),
		'title' => array('notempty'),
		'short_description' => array('notempty'),
		'sku' => array('notempty'),
		'price' => array('decimal'),
		'quantity' => array('numeric'),
		'sort_order' => array('numeric'),
		'is_stocked' => array('numeric'),
		'is_active' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Image' => array('className' => 'Image',
								'foreignKey' => 'image_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'TaxClass' => array('className' => 'TaxClass',
								'foreignKey' => 'tax_class_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasAndBelongsToMany = array(
			'Image' => array('className' => 'Image',
						'joinTable' => 'images_products',
						'foreignKey' => 'product_id',
						'associationForeignKey' => 'image_id',
						'unique' => true,
						'conditions' => '',
						'fields' => '',
						'order' => '',
						'limit' => '',
						'offset' => '',
						'finderQuery' => '',
						'deleteQuery' => '',
						'insertQuery' => ''
			),
			'ProductCategory' => array('className' => 'ProductCategory',
						'joinTable' => 'products_product_categories',
						'foreignKey' => 'product_id',
						'associationForeignKey' => 'product_category_id',
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