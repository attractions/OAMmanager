<?php
class OrdersController extends AppController {

	var $name = 'Orders';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->paginate());
	}
	function lookup(){
		if(!empty($this->data)){
			$this->redirect(array('action' => 'view', $this->data['Order']['ID']));
		}
	}
	function unpaid() {
		if(!empty($this->data)){
			foreach($this->data['Orders'] as $key => $value) {
				if($value != 0){
					$this->Order->del($value);
				}
			}
			$this->Session->setFlash("Orders deleted");
		}	
		$this->set('orders', $this->paginate("Order", array('Order.paid LIKE' => '0')));
	}
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Order', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('order', $this->Order->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Order->create();
			if ($this->Order->save($this->data)) {
				$this->Session->setFlash(__('The Order has been saved', true));
				$this->redirect(array('controller' => 'pages','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Order could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Order', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Order->save($this->data)) {
				$this->Session->setFlash(__('The Order has been saved', true));
				$this->redirect(array('controller' => 'pages','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Order could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Order->read(null, $id);
		}
	}
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Order', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		if ($this->Order->del($id)) {
			$this->Session->setFlash(__('Order deleted', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		$this->Session->setFlash(__('The Order could not be deleted. Please, try again.', true));
		$this->redirect(array('controller' => 'pages','action' => 'index'));
	}

}
?>
