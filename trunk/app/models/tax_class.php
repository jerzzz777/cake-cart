<?php
class TaxClass extends AppModel {

	var $name = 'TaxClass';
	var $validate = array(
		'title' => array('notempty'),
		'description' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
			'Product' => array('className' => 'Product',
								'foreignKey' => 'tax_class_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasMany = array(
			'Product' => array('className' => 'Product',
								'foreignKey' => 'tax_class_id',
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