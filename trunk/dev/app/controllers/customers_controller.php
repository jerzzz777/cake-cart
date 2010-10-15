<?php
class CustomersController extends AppController {

	var $name = 'Customers';

	function beforeFilter() {
		parent::beforeFilter();

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
            //this would be a login function
	}

	function logout() {
		$this->redirect($this->Auth->logout());
	}
}
?>