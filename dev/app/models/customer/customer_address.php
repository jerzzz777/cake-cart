<?php
class CustomerAddress extends AppModel {

	var $name = 'CustomerAddress';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Customer' => array('className' => 'Customer',
								'foreignKey' => 'customer_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
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

}
?>