<?php
class ItemsController extends AppController {

	var $name = 'Items';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Item->recursive = 0;
		$this->set('items', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('item', $this->Item->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Item->create();
			if ($this->Item->save($this->data)) {
				$this->Session->setFlash(__('The Item has been saved', true));
				$this->redirect(array('controller' => 'pages','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Item could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Item', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Item->save($this->data)) {
				$this->Session->setFlash(__('The Item has been saved', true));
				$this->redirect(array('controller' => 'pages','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Item->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Item', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		if ($this->Item->del($id)) {
			$this->Session->setFlash(__('Item deleted', true));
			$this->redirect(array('controller' => 'pages','action' => 'index'));
		}
		$this->Session->setFlash(__('The Item could not be deleted. Please, try again.', true));
		$this->redirect(array('controller' => 'pages','action' => 'index'));
	}

}
?>
