<?php
class NewslettersController extends AppController {

	var $name = 'Newsletters';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Newsletter->recursive = 0;
		$this->set('newsletters', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Newsletter', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('newsletter', $this->Newsletter->read(null, $id));
	}

        function lookup() {
	        if (!empty($this->data)){
		        $recipient = $this->Newsletter->find('first', array('conditions' => array('Newsletter.email' => $this->data['Newsletter']['Email'])));
		        $this->redirect(array('action' => 'view', $recipient['Newsletter']['id']));
		}
	}


	function add() {
		if (!empty($this->data)) {
			$this->Newsletter->create();
			if ($this->Newsletter->save($this->data)) {
				$this->Session->setFlash(__('The Newsletter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Newsletter could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Newsletter', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Newsletter->save($this->data)) {
				$this->Session->setFlash(__('The Newsletter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Newsletter could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Newsletter->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Newsletter', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Newsletter->del($id)) {
			$this->Session->setFlash(__('Newsletter deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Newsletter could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>
