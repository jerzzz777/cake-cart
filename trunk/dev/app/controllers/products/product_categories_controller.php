<?php
class ProductCategoriesController extends AppController {

	var $name = 'ProductCategories';
	var $helpers = array('Html', 'Form', 'Products');
	
	//paginate HABTM association
	//http://cakebaker.42dh.com/2007/10/17/pagination-of-data-from-a-habtm-relationship/
	public $paginate = array('Product' => array(
		'limit' => 9,
		'recursive' => 1,
		'joins' => array(
			array(
				'table' => 'product_categories_products',
				'alias' => 'ProductCategoriesProduct',
				'type' => 'inner',
				'conditions'=> array('ProductCategoriesProduct.product_id = Product.id')
			),
			array(
				'table' => 'product_categories',
				'alias' => 'ProductCategory',
				'type' => 'inner',
				'conditions'=> array(
					'ProductCategory.id = ProductCategoriesProduct.product_category_id'
				)
			)
		),
		'fields'=>array(
			'Product.id',
			'Product.title',
			'Product.short_description',
			'Product.price',
			'Product.quantity',
			'Product.is_infinite_quantity',
			'Product.is_stocked',
			'(SELECT AVG(`ProductReview`.`rating`) FROM `product_reviews` AS `ProductReview` WHERE `ProductReview`.`product_id` = `Product`.`id` AND `ProductReview`.`is_active` = 1) AS avg_rating',
			'(SELECT COUNT(*) FROM `product_reviews` AS `ProductReview` WHERE `ProductReview`.`product_id` = `Product`.`id` AND `ProductReview`.`is_active` = 1) AS cnt_review'
		),
		'contain'=>array(
			'ProductImage'=>array(
				'fields'=>array(
					'filename'
				),
				'conditions'=>array(
					'is_featured ='=>'1'
				)
			)
		),
		'order'=>array(
			'Product.id ASC'
		)
	));


	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductCategory.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->ProductCategory->recursive = -1;
		
		$this->set('productCategory', $this->ProductCategory->read(array(
			'ProductCategory.id',
			'ProductCategory.image_filename',
			'ProductCategory.name',
			'ProductCategory.description',
			'ProductCategory.meta_keywords',
			'ProductCategory.meta_description'
		), $id));
		
		$this->set('crumbPath', $this->ProductCategory->getpath($id, array('id', 'name')));

		$this->set('product', $this->paginate('Product', array("ProductCategory.id = $id")));
	}

	function admin_index() {
		$this->layout = 'admin';
		$this->ProductCategory->recursive = 0;
		$this->set('productCategories', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductCategory.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('productCategory', $this->ProductCategory->read(null, $id));
	}

	function admin_add() {
		$this->layout = 'admin';
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
		$this->layout = 'admin';
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
		$this->layout = 'admin';
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