<?php
class ProductOption extends AppModel {

	var $name = 'ProductOption';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Product' => array('className' => 'Product',
								'foreignKey' => 'product_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasMany = array(
			'ProductOptionValue' => array('className' => 'ProductOptionValue',
								'foreignKey' => 'product_option_id',
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

}
?>