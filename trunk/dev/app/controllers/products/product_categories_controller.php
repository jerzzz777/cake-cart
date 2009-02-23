<?php
class ProductCategoriesController extends AppController {

	var $name = 'ProductCategories';
	var $helpers = array('Html', 'Form');

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductCategory.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('productCategory', $this->ProductCategory->find('first', array(
			'recursion'=>2,
			'fields'=>array(
				'ProductCategory.image_filename',
				'ProductCategory.name',
				'ProductCategory.description'
			),
			'contain'=>array(
				'Product'=>array(
					'fields'=>array(
						'title',
						'price'
					),
					'ProductImage'=>array(
						'fields'=>array(
							'filename'
						),
						'conditions'=>array(
							'ProductImage.is_featured ='=>'1'
						)
					)
				)
			)
		)));
	}

	function admin_index() {
		$this->ProductCategory->recursive = 0;
		$this->set('productCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductCategory.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('productCategory', $this->ProductCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ProductCategory->create();
			if ($this->ProductCategory->save($this->data)) {
				$this->Session->setFlash(__('The ProductCategory has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductCategory could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductCategory->Product->find('list');
		$this->set(compact('products'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductCategory', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductCategory->save($this->data)) {
				$this->Session->setFlash(__('The ProductCategory has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductCategory could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductCategory->read(null, $id);
		}
		$products = $this->ProductCategory->Product->find('list');
		$this->set(compact('products'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductCategory', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductCategory->del($id)) {
			$this->Session->setFlash(__('ProductCategory deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>