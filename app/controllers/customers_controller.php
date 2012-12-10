<?php
class CustomersController extends AppController {
	var $name = 'Customers';
	var $helpers = array('Html', 'Form');
	var $components = array('Filter');

	function index() {
		if(!empty($this->data)) {
			        $search = $this->data['Customer']['billingemail'];
		}		
		$this->Customer->recursive = 0;
		$filters = array();
		if(isset($search)){
			$search = low($search);
			$search = addslashes($search);
			$filters = array("lower(Customer.billingemail) like '%$search%'	OR lower(Customer.billinglastname) like '%$search%'");
		}
		$this->set('customers', $this->paginate('Customer', $filters));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Customer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customer', $this->Customer->read(null, $id));
	}

	function lookup() {
	}
	function add() {
		if (!empty($this->data)) {
			$this->Customer->create();
			if ($this->Customer->save($this->data)) {
				$this->Session->setFlash(__('The Customer has been saved', true));
				$this->redirect(array('controller' => 'pages','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Customer could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Customer', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Customer->save($this->data)) {
				$this->Session->setFlash(__('The Customer has been saved', true));
				$this->redirect(array('controller' => 'pages','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Customer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Customer->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Customer', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		if ($this->Customer->del($id)) {
			$this->Session->setFlash(__('Customer deleted', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		$this->Session->setFlash(__('The Customer could not be deleted. Please, try again.', true));
		$this->redirect(array('controller' => 'pages','action' => 'index'));
	}

}
?>
