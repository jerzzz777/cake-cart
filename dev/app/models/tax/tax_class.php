<?php
class TaxClass extends AppModel {

	var $name = 'TaxClass';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
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

	var $hasAndBelongsToMany = array(
			'TaxRate' => array('className' => 'TaxRate',
						'joinTable' => 'tax_classes_tax_rates',
						'foreignKey' => 'tax_class_id',
						'associationForeignKey' => 'tax_rate_id',
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