<?php
class CustomersController extends AppController {

	var $name = 'Customers';

	function beforeFilter() {
		parent::beforeFilter();

		// Does not require being logged in
		$this->Auth->allow('register');

		// If logged in, these pages require logout
		if ($this->Auth->user() && in_array($this->params['action'], array('register', 'login'))) {
			$this->redirect('/');
		}
	}
	
	function beforeRender() {
		parent::beforeRender();
	}

	function register() {
		if ($this->data) {
			if ($this->data['Customer']['password'] == $this->Auth->password($this->data['Customer']['password_confirm'])) {
				$this->Customer->create();
				$this->Customer->save($this->data);
			}
		}
	}

	function login() {
	}

	function logout() {
		$this->redirect($this->Auth->logout());
	}
}
?>