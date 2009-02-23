<?php
class Customer extends AppModel {

	var $name = 'Customer';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'CustomerAddress' => array('className' => 'CustomerAddress',
								'foreignKey' => 'customer_id',
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