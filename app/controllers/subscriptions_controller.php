<?php
class SubscriptionsController extends AppController {
	var $name = 'Subscriptions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Subscription->recursive = 0;
		$this->set('subscriptions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Subscription', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subscription', $this->Subscription->read(null, $id));
	}
        function lookup() {
		if (!empty($this->data)){
			$this->set('subscriptions', $this->paginate('Subscription', array('Subscription.sublastname LIKE' => $this->data['Subscription']['Name'])));
		}
	}
	function duplicates() {
		$stuff = $this->Subscription->query("SELECT subfirstname, sublastname FROM subscriptions GROUP BY sublastname, subfirstname HAVING(COUNT(subfirstname) > 1 AND COUNT(sublastname) > 1)");
		foreach($stuff as $item){
			$names[] = $item['subscriptions']['sublastname'];
			$fnames[] = $item['subscriptions']['subfirstname'];
		}
		$fnames = implode("','",$fnames);
		$names = implode("','",$names);
		$data = $this->paginate('Subscription', array('Subscription.subfirstname IN (\''.$fnames.'\') AND Subscription.sublastname IN (\''.$names.'\') ORDER BY sublastname, subfirstname'));
		$this->set('subscriptions', $data);
	}
	function needrenew() {
		$this->set('subscriptions', $this->paginate('Subscription', array('Subscription.numissues' => '0')));
	}
	function paperrenew(){
		$customers[] = $this->Subscription->query("SELECT DISTINCT customers.billingaddress, customers.billingcity, customers.billingstate, customers.billingzip, customers.billingfirstname, customers.billinglastname FROM subscriptions, customers, items, orders WHERE subscriptions.numissues = 0 AND items.subid = subscriptions.subscriptionid AND subscriptions.lastsent = '".$GLOBALS['previousIssue']."' AND items.custid = customers.custid AND items.custid = orders.custid AND orders.paid = 1 AND customers.billingemail LIKE 'info@attractionsmagazine.com' ORDER BY orders.date DESC");
		$address = array();
		foreach($customers[0] as $customer){
			$address[] = array('first' => $customer['customers']['billingfirstname'], 'last' => $customer['customers']['billinglastname'], 'address' => $customer['customers']['billingaddress'], 'city' => $customer['customers']['billingcity'], 'state' => $customer['customers']['billingstate'], 'zip' => $customer['customers']['billingzip']);
		}	
		$this->set('customers',$address);
	}
	function dead() {
		if(!empty($this->data)){
			$emails = array();
			if($this->data['Subscription']['OneIssue']){
				$emails[] = $this->Subscription->query("SELECT DISTINCT customers.billingemail FROM subscriptions, customers, items, orders WHERE subscriptions.numissues = 1 AND items.subid = subscriptions.subscriptionid AND items.custid = customers.custid AND items.custid = orders.custid AND orders.paid = 1 ORDER BY orders.date DESC");
			}if($this->data['Subscription']['Out']){
				$emails[] = $this->Subscription->query("SELECT DISTINCT customers.billingemail FROM subscriptions, customers, items, orders WHERE subscriptions.numissues = 0 AND items.subid = subscriptions.subscriptionid AND subscriptions.lastsent = '".$GLOBALS['previousIssue']."' AND items.custid = customers.custid AND items.custid = orders.custid AND orders.paid = 1 ORDER BY orders.date DESC");
			} if($this->data['Subscription']['Dead']){
				$emails[] = $this->Subscription->query("SELECT DISTINCT customers.billingemail FROM subscriptions, customers, items, orders WHERE subscriptions.numissues = 0 AND items.subid = subscriptions.subscriptionid AND subscriptions.lastsent != '".$GLOBALS['previousIssue']."' AND items.custid = customers.custid AND items.custid = orders.custid AND orders.paid = 1 ORDER BY orders.date DESC");
			}
			$this->set('emails', $emails);
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subscription->create();
			if ($this->Subscription->save($this->data)) {
				$this->Session->setFlash(__('The Subscription has been saved', true));
				$this->redirect(array('controller' => 'pages', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Subscription could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Subscription', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subscription->save($this->data)) {
				$this->Session->setFlash(__('The Subscription has been saved', true));
				$this->redirect(array('controller' => 'pages', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Subscription could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subscription->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Subscription', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		if ($this->Subscription->del($id)) {
			$this->Session->setFlash(__('Subscription deleted', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		$this->Session->setFlash(__('The Subscription could not be deleted. Please, try again.', true));
		$this->redirect(array('controller' => 'pages','action' => 'index'));
	}

}
?>
