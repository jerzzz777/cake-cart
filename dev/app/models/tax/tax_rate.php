<?php
class TaxRate extends AppModel {

	var $name = 'TaxRate';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Country' => array('className' => 'Country',
								'foreignKey' => 'country_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'Region' => array('className' => 'Region',
								'foreignKey' => 'region_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasAndBelongsToMany = array(
			'TaxClass' => array('className' => 'TaxClass',
						'joinTable' => 'tax_classes_tax_rates',
						'foreignKey' => 'tax_rate_id',
						'associationForeignKey' => 'tax_class_id',
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