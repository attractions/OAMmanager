<?php
class Item extends AppModel {

	var $name = 'Item';
	var $primaryKey = 'ordereditemid';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
        var $hasOne = array(
		'Subscription' => array(
			'className' => 'Subscription',
	                'foreignKey' => 'subscriptionid',
			'dependent' => false,
		)
	);
	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'custid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'orderid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>
