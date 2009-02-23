<?php
class ProductOptionValue extends AppModel {

	var $name = 'ProductOptionValue';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'ProductOption' => array('className' => 'ProductOption',
								'foreignKey' => 'product_option_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

}
?>