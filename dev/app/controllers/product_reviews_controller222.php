<?php
class ProductReviewsController extends AppController {

	var $name = 'ProductReviews';
	var $helpers = array('Html', 'Form', 'Products');

	function index() {
		$this->ProductReview->recursive = 0;
		$this->set('productReviews', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductReview.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('productReview', $this->ProductReview->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProductReview->create();
			if ($this->ProductReview->save($this->data)) {
				$this->Session->setFlash(__('The ProductReview has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductReview could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductReview->Product->find('list');
		$this->set(compact('products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductReview', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductReview->save($this->data)) {
				$this->Session->setFlash(__('The ProductReview has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductReview could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductReview->read(null, $id);
		}
		$products = $this->ProductReview->Product->find('list');
		$this->set(compact('products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductReview', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductReview->del($id)) {
			$this->Session->setFlash(__('ProductReview deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>