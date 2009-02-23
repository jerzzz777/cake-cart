<?php
class ProductDownloadsController extends AppController {

	var $name = 'ProductDownloads';
	var $helpers = array('Html', 'Form');

	function admin_index() {
		$this->ProductDownload->recursive = 0;
		$this->set('productDownloads', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductDownload.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('productDownload', $this->ProductDownload->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ProductDownload->create();
			if ($this->ProductDownload->save($this->data)) {
				$this->Session->setFlash(__('The ProductDownload has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductDownload could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductDownload->Product->find('list');
		$this->set(compact('products'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductDownload', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductDownload->save($this->data)) {
				$this->Session->setFlash(__('The ProductDownload has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductDownload could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductDownload->read(null, $id);
		}
		$products = $this->ProductDownload->Product->find('list');
		$this->set(compact('products'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductDownload', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductDownload->del($id)) {
			$this->Session->setFlash(__('ProductDownload deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>