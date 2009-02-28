<?php
class ProductReviewsController extends AppController {

	var $name = 'ProductReviews';
	var $helpers = array('Html', 'Form', 'Products', 'Javascript', 'Ajax');

	var $paginate = array(
		'limit' => 5,
		'recursive' => -1,
		'fields'=>array(
			'ProductReview.created',
			'ProductReview.name',
			'ProductReview.rating',
			'ProductReview.review'
		),
		'order' => array(
			'ProductReview.created' => 'desc'
		)
	);

	function view($id = null, $catid = null) {
		if (!$id || !$catid) {
			$this->Session->setFlash(__('Invalid Product.', true));
			$this->redirect(array('action'=>'index'));
		}

		$this->set('crumbPath', $this->ProductReview->Product->ProductCategory->getpath($catid, array('id', 'name')));

		$this->set('product', $this->ProductReview->Product->find('first', array(
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
					'fields'=>array('filename'),
					'conditions'=>array('is_featured'=>1)
				)
			)
		), $id));

		$this->set('reviews', $this->paginate('ProductReview', array('ProductReview.product_id'=>$id, 'ProductReview.is_active'=>1)));
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->ProductReview->create();
			if ($this->ProductReview->save($this->data)) {
				$this->render('/elements/ajax_success', 'ajax');
			} else {
				$this->render('/elements/ajax_failure', 'ajax');
			}
		}
	}
}
?>
