<?php
class Product extends AppModel {

	var $name = 'Product';
	var $actsAs = array('Containable');

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'ProductDiscount' => array('className' => 'ProductDiscount',
								'foreignKey' => 'product_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			),
			'ProductImage' => array('className' => 'ProductImage',
								'foreignKey' => 'product_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => 'is_featured DESC',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			),
			'ProductOption' => array('className' => 'ProductOption',
								'foreignKey' => 'product_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			),
			'ProductReview' => array('className' => 'ProductReview',
								'foreignKey' => 'product_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			)
	);

	var $hasAndBelongsToMany = array(
			'ProductAttribute' => array('className' => 'ProductAttribute',
						'joinTable' => 'product_attributes_products',
						'foreignKey' => 'product_id',
						'associationForeignKey' => 'product_attribute_id',
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
						'joinTable' => 'product_categories_products',
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
			),
			'ProductDownload' => array('className' => 'ProductDownload',
						'joinTable' => 'product_downloads_products',
						'foreignKey' => 'product_id',
						'associationForeignKey' => 'product_download_id',
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