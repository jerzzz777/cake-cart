<?php
/* SVN FILE: $Id: component.test.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * ComponentTest file
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 * @since         CakePHP(tm) v 1.2.0.5436
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 16:25:10 -0400 (Thu, 19 Mar 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
App::import('Core', array('Component', 'Controller'));

if (!class_exists('AppController')) {
/**
 * AppController class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
	class AppController extends Controller {
/**
 * name property
 *
 * @var string 'App'
 * @access public
 */
		var $name = 'App';
/**
 * uses property
 *
 * @var array
 * @access public
 */
		var $uses = array();
/**
 * helpers property
 *
 * @var array
 * @access public
 */
		var $helpers = array();
/**
 * components property
 *
 * @var array
 * @access public
 */
		var $components = array('Orange' => array('colour' => 'blood orange'));

	}
} else if (!defined('APP_CONTROLLER_EXISTS')){
	define('APP_CONTROLLER_EXISTS', true);
}
/**
 * ParamTestComponent
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class ParamTestComponent extends Object {
/**
 * name property
 *
 * @var string 'ParamTest'
 * @access public
 */
	var $name = 'ParamTest';
/**
 * components property
 *
 * @var array
 * @access public
 */
	var $components = array('Banana' => array('config' => 'value'));
/**
 * initialize method
 *
 * @param mixed $controller
 * @param mixed $settings
 * @access public
 * @return void
 */
	function initialize(&$controller, $settings) {
		foreach ($settings as $key => $value) {
			if (is_numeric($key)) {
				$this->{$value} = true;
			} else {
				$this->{$key} = $value;
			}
		}
	}
}
/**
 * ComponentTestController class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class ComponentTestController extends AppController {
/**
 * name property
 *
 * @var string 'ComponentTest'
 * @access public
 */
	var $name = 'ComponentTest';
/**
 * uses property
 *
 * @var array
 * @access public
 */
	var $uses = array();
}
/**
 * AppleComponent class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class AppleComponent extends Object {
/**
 * components property
 *
 * @var array
 * @access public
 */
	var $components = array('Orange');
/**
 * testName property
 *
 * @var mixed null
 * @access public
 */
	var $testName = null;
/**
 * startup method
 *
 * @param mixed $controller
 * @access public
 * @return void
 */
	function startup(&$controller) {
		$this->testName = $controller->name;
	}
}
/**
 * OrangeComponent class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class OrangeComponent extends Object {
/**
 * components property
 *
 * @var array
 * @access public
 */
	var $components = array('Banana');
/**
 * initialize method
 *
 * @param mixed $controller
 * @access public
 * @return void
 */
	function initialize(&$controller, $settings) {
		$this->Controller = $controller;
		$this->Banana->testField = 'OrangeField';
		$this->settings = $settings;
	}
/**
 * startup method
 *
 * @param Controller $controller
 * @return string
 * @access public
 */
	function startup(&$controller) {
		$controller->foo = 'pass';
	}
}
/**
 * BananaComponent class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class BananaComponent extends Object {
/**
 * testField property
 *
 * @var string 'BananaField'
 * @access public
 */
	var $testField = 'BananaField';
/**
 * startup method
 *
 * @param Controller $controller
 * @return string
 * @access public
 */
	function startup(&$controller) {
		$controller->bar = 'fail';
	}
}
/**
 * MutuallyReferencingOneComponent class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class MutuallyReferencingOneComponent extends Object {
/**
 * components property
 *
 * @var array
 * @access public
 */
	var $components = array('MutuallyReferencingTwo');
}
/**
 * MutuallyReferencingTwoComponent class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class MutuallyReferencingTwoComponent extends Object {
/**
 * components property
 *
 * @var array
 * @access public
 */
	var $components = array('MutuallyReferencingOne');
}
/**
 * SomethingWithEmailComponent class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class SomethingWithEmailComponent extends Object {
/**
 * components property
 *
 * @var array
 * @access public
 */
	var $components = array('Email');
}
/**
 * ComponentTest class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class ComponentTest extends CakeTestCase {
/**
 * setUp method
 *
 * @access public
 * @return void
 */
	function setUp() {
		Configure::write('pluginPaths', array(
			TEST_CAKE_CORE_INCLUDE_PATH . 'tests' . DS . 'test_app' . DS . 'plugins' . DS
		));
	}
/**
 * testLoadComponents method
 *
 * @access public
 * @return void
 */
	function testLoadComponents() {
		$Controller =& new ComponentTestController();
		$Controller->components = array('RequestHandler');

		$Component =& new Component();
		$Component->init($Controller);

		$this->assertTrue(is_a($Controller->RequestHandler, 'RequestHandlerComponent'));

		$Controller =& new ComponentTestController();
		$Controller->plugin = 'test_plugin';
		$Controller->components = array('RequestHandler', 'TestPluginComponent');

		$Component =& new Component();
		$Component->init($Controller);

		$this->assertTrue(is_a($Controller->RequestHandler, 'RequestHandlerComponent'));
		$this->assertTrue(is_a($Controller->TestPluginComponent, 'TestPluginComponentComponent'));
		$this->assertTrue(is_a(
			$Controller->TestPluginComponent->TestPluginOtherComponent,
			'TestPluginOtherComponentComponent'
		));
		$this->assertFalse(isset($Controller->TestPluginOtherComponent));

		$Controller =& new ComponentTestController();
		$Controller->components = array('Security');

		$Component =& new Component();
		$Component->init($Controller);

		$this->assertTrue(is_a($Controller->Security, 'SecurityComponent'));
		$this->assertTrue(is_a($Controller->Security->Session, 'SessionComponent'));

		$Controller =& new ComponentTestController();
		$Controller->components = array('Security', 'Cookie', 'RequestHandler');

		$Component =& new Component();
		$Component->init($Controller);

		$this->assertTrue(is_a($Controller->Security, 'SecurityComponent'));
		$this->assertTrue(is_a($Controller->Security->RequestHandler, 'RequestHandlerComponent'));
		$this->assertTrue(is_a($Controller->RequestHandler, 'RequestHandlerComponent'));
		$this->assertTrue(is_a($Controller->Cookie, 'CookieComponent'));
	}
/**
 * test component loading
 *
 * @return void
 */
	function testNestedComponentLoading() {
		$Controller =& new ComponentTestController();
		$Controller->components = array('Apple');
		$Controller->constructClasses();
		$Controller->Component->initialize($Controller);

		$this->assertTrue(is_a($Controller->Apple, 'AppleComponent'));
		$this->assertTrue(is_a($Controller->Apple->Orange, 'OrangeComponent'));
		$this->assertTrue(is_a($Controller->Apple->Orange->Banana, 'BananaComponent'));
		$this->assertTrue(is_a($Controller->Apple->Orange->Controller, 'ComponentTestController'));
		$this->assertTrue(empty($Controller->Apple->Session));
		$this->assertTrue(empty($Controller->Apple->Orange->Session));
	}
/**
 * Tests Component::startup() and only running callbacks for components directly attached to
 * the controller.
 *
 * @return void
 */
	function testComponentStartup() {
		$Controller =& new ComponentTestController();
		$Controller->components = array('Apple');
		$Controller->constructClasses();
		$Controller->Component->initialize($Controller);
		$Controller->beforeFilter();
		$Controller->Component->startup($Controller);

		$this->assertTrue(is_a($Controller->Apple, 'AppleComponent'));
		$this->assertEqual($Controller->Apple->testName, 'ComponentTest');

		$expected = !(defined('APP_CONTROLLER_EXISTS') && APP_CONTROLLER_EXISTS);
		$this->assertEqual(isset($Controller->foo), $expected);
		$this->assertFalse(isset($Controller->bar));
	}
/**
 * test a component being used more than once.
 *
 * @return void
 */
	function testMultipleComponentInitialize() {
		$Controller =& new ComponentTestController();
		$Controller->components = array('Orange', 'Banana');
		$Controller->constructClasses();
		$Controller->Component->initialize($Controller);

		$this->assertEqual($Controller->Banana->testField, 'OrangeField');
		$this->assertEqual($Controller->Orange->Banana->testField, 'OrangeField');
	}
/**
 * Test Component declarations with Parameters
 * tests merging of component parameters and merging / construction of components.
 *
 * @return void
 */
	function testComponentsWithParams() {
		$this->skipIf(defined('APP_CONTROLLER_EXISTS'), 'Components with Params test will be skipped as it needs a non-existent AppController. As the an AppController class exists, this cannot be run.');

		$Controller =& new ComponentTestController();
		$Controller->components = array('ParamTest' => array('test' => 'value', 'flag'), 'Apple');

		$Controller->constructClasses();
		$Controller->Component->initialize($Controller);

		$this->assertTrue(is_a($Controller->ParamTest, 'ParamTestComponent'));
		$this->assertTrue(is_a($Controller->ParamTest->Banana, 'BananaComponent'));
		$this->assertTrue(is_a($Controller->Orange, 'OrangeComponent'));
		$this->assertTrue(is_a($Controller->Session, 'SessionComponent'));
		$this->assertEqual($Controller->Orange->settings, array('colour' => 'blood orange'));
		$this->assertEqual($Controller->ParamTest->test, 'value');
		$this->assertEqual($Controller->ParamTest->flag, true);

		//Settings are merged from app controller and current controller.
		$Controller =& new ComponentTestController();
		$Controller->components = array(
			'ParamTest' => array('test' => 'value'),
			'Orange' => array('ripeness' => 'perfect')
		);
		$Controller->constructClasses();
		$Controller->Component->initialize($Controller);

		$expected = array('colour' => 'blood orange', 'ripeness' => 'perfect');
		$this->assertEqual($Controller->Orange->settings, $expected);
		$this->assertEqual($Controller->ParamTest->test, 'value');
	}
/**
 * Test mutually referencing components.
 *
 * @return void
 */
	function testMutuallyReferencingComponents() {
		$Controller =& new ComponentTestController();
		$Controller->components = array('MutuallyReferencingOne');
		$Controller->constructClasses();
		$Controller->Component->initialize($Controller);

		$this->assertTrue(is_a(
			$Controller->MutuallyReferencingOne,
			'MutuallyReferencingOneComponent'
		));
		$this->assertTrue(is_a(
			$Controller->MutuallyReferencingOne->MutuallyReferencingTwo,
			'MutuallyReferencingTwoComponent'
		));
		$this->assertTrue(is_a(
			$Controller->MutuallyReferencingOne->MutuallyReferencingTwo->MutuallyReferencingOne,
			'MutuallyReferencingOneComponent'
		));
	}
/**
 * Test mutually referencing components.
 *
 * @return void
 */
	function testSomethingReferencingEmailComponent() {
		$Controller =& new ComponentTestController();
		$Controller->components = array('SomethingWithEmail');
		$Controller->constructClasses();
		$Controller->Component->initialize($Controller);
		$Controller->beforeFilter();
		$Controller->Component->startup($Controller);

		$this->assertTrue(is_a(
			$Controller->SomethingWithEmail,
			'SomethingWithEmailComponent'
		));
		$this->assertTrue(is_a(
			$Controller->SomethingWithEmail->Email,
			'EmailComponent'
		));
		$this->assertTrue(is_a(
			$Controller->SomethingWithEmail->Email->Controller,
			'ComponentTestController'
		));
	}
/**
 * test that SessionComponent doesn't get added if its already in the components array.
 *
 * @return void
 **/
	function testDoubleLoadingOfSessionComponent() {
		$Controller =& new ComponentTestController();
		$Controller->uses = array();
		$Controller->components = array('Session');
		$Controller->constructClasses();

		$this->assertEqual($Controller->components, array('Session' => '', 'Orange' => array('colour' => 'blood orange')));
	}
}
?>