<?php
class Customer extends AppModel {

	var $name = 'Customer';
	var $primaryKey = 'custid';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'custid',
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
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'custid',
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
