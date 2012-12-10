<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2010-02-20 21:02:05 : 1266700985*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $customers = array(
		'customerid' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'first' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'last' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'city' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'state' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'zip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'country' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3),
		'phone' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 25),
		'payment' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'verified' => array('type' => 'text', 'null' => true, 'default' => '' . "\0" . '', 'length' => 1),
		'ipaddress' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'timestamp' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'newsletter' => array('type' => 'text', 'null' => true, 'default' => '' . "\0" . '' . "\0" . '', 'length' => 11),
		'referral' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'customerid', 'unique' => 1))
	);
	var $items = array(
		'itemid' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'purchaserid' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'recipientid' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'item' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'price' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'shipped' => array('type' => 'text', 'null' => true, 'default' => '' . "\0" . '', 'length' => 1),
		'indexes' => array('PRIMARY' => array('column' => 'itemid', 'unique' => 1))
	);
	var $orders = array(
		'orderid' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => 'orderid', 'unique' => 1))
	);
	var $subscriptions = array(
		'subid' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'customerid' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'subid', 'unique' => 1), 'customerid' => array('column' => 'customerid', 'unique' => 0))
	);
}
?>