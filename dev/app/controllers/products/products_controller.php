<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $helpers = array('Html', 'Form', 'Products');

	function view($id = null, $catid = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Product.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('product', $this->Product->find('first',
			array(
				'fields'=>array(
					"id",
					"title",
					"short_description",
					"description",
					"sku",
					"weight",
					"price",
					"is_stocked",
					"quantity",
					"is_infinite_quantity",
					"meta_keywords",
					"meta_description",
					"(SELECT AVG(rating) AS avg_rating FROM product_reviews WHERE product_id='$id' AND is_active='1') AS avg_rating",
					"(SELECT COUNT(*) AS cnt_review FROM product_reviews WHERE product_id='$id' AND is_active='1') AS cnt_review"
				),
				'contain'=>array(
					'ProductImage'=>array(
						'fields'=>array('filename', 'is_featured')
					),
					'ProductOption'=>array(
						'ProductOptionValue'
					),
					'ProductReview'=>array(
						'fields'=>array('created', 'name', 'rating', 'review'),
						'conditions'=>'is_active = 1',
						'order'=>'created DESC',
						'limit'=>3
					),
					'ProductAttribute'=>array(
						'fields'=>array('title'),
						'conditions'=>'is_active = 1'
					)
				)
			),
			$id
		));
		$this->set('crumbPath', $this->Product->ProductCategory->getpath($this->params['catid'], array('id', 'name')));
	}

	function admin_index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Product.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The Product has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Product could not be saved. Please, try again.', true));
			}
		}
		$productAttributes = $this->Product->ProductAttribute->find('list');
		$productCategories = $this->Product->ProductCategory->find('list');
		$productDownloads = $this->Product->ProductDownload->find('list');
		$this->set(compact('productAttributes', 'productCategories', 'productDownloads'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Product', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The Product has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		$productAttributes = $this->Product->ProductAttribute->find('list');
		$productCategories = $this->Product->ProductCategory->find('list');
		$productDownloads = $this->Product->ProductDownload->find('list');
		$this->set(compact('productAttributes','productCategories','productDownloads'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->del($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>