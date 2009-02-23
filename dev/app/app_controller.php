<?php
class AppController extends Controller {
	var $components = array('ProductCategoryMenu');
	var $helpers = array('Form', 'Tree');

	function beforeRender() {
		$this->set('productCategoryMenu', array('ProductCategoryMenu'=>$this->ProductCategoryMenu->fetchData(&$this)));
	}
}
?>