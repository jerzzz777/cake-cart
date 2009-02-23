<?php
class ProductAttributesController extends AppController {

	var $name = 'ProductAttributes';
	var $helpers = array('Html', 'Form');

	function admin_index() {
		$this->ProductAttribute->recursive = 0;
		$this->set('productAttributes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductAttribute.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('productAttribute', $this->ProductAttribute->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ProductAttribute->create();
			if ($this->ProductAttribute->save($this->data)) {
				$this->Session->setFlash(__('The ProductAttribute has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductAttribute could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductAttribute->Product->find('list');
		$this->set(compact('products'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductAttribute', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductAttribute->save($this->data)) {
				$this->Session->setFlash(__('The ProductAttribute has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductAttribute could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductAttribute->read(null, $id);
		}
		$products = $this->ProductAttribute->Product->find('list');
		$this->set(compact('products'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductAttribute', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductAttribute->del($id)) {
			$this->Session->setFlash(__('ProductAttribute deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>