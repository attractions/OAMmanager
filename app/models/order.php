<?php
class Order extends AppModel {

	var $name = 'Order';
	var $primaryKey = 'orderid';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'custid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasOne = array(
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'orderid',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>
