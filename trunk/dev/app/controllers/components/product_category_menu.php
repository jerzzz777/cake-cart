<?php
//Get the menu from the database
class ProductCategoryMenuComponent extends Object {
    function fetchData(&$controller){
        ClassRegistry::init('ProductCategory');
		$this->ProductCategory = new ProductCategory();
		$this->ProductCategory->recursive = -1;
		return $this->ProductCategory->find('all', array('fields' => array('id', 'parent_id', 'name', 'lft', 'rght'), 'order' => 'lft ASC'));
    }
}
?>