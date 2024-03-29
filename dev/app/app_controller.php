<?php
class AppController extends Controller {
	var $components = array('ProductCategoryMenu', 'Auth');
	var $helpers = array('Form', 'Tree');

	function beforeRender() {
		$this->set('productCategoryMenu', array('ProductCategoryMenu'=>$this->ProductCategoryMenu->fetchData(&$this)));
		$this->set('customer', $this->Auth->user()); // In the views $user['User']['username'] would display the logged in users username
	}

	function beforeFilter() {
		//Sitewide Configurations
		ClassRegistry::init('Configuration');
		$this->Configuration = new Configuration();
		$configs = $this->Configuration->find('all', array('fields'=>array('name', 'value')));
		foreach($configs as $config)
			Configure::write($config['Configuration']['name'], $config['Configuration']['value']);

		//Use MD5 hashing
		Security::setHash('md5');

		//Authenticate
		$this->Auth->allow('*');
		$this->Auth->loginAction = array('controller' => 'customers', 'action' => 'login');
		$this->Auth->loginRedirect = '/';
		$this->Auth->loginError = 'No username and password was found with that combination.';
		$this->Auth->logoutRedirect = '/';
		$this->Auth->userModel = 'Customer';
		$this->Auth->fields = array(
			'username' => 'email',
			'password' => 'password'
		);
	}

}
?>