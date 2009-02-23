<?php
/* SVN FILE: $Id: test_suite.group.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Test Suite Test Group
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2007, Cake Software Foundation, Inc.
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2007, Cake Software Foundation, Inc.
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake.tests
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.4206
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 21:16:01 -0500 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/** Test Suite Test Group
 *
 * This test group will run the test cases for the test suite classes.
 *
 * @package       cake.tests
 * @subpackage    cake.tests.groups
 */
/**
 * TestSuiteGroupTest class
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class TestSuiteGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'Socket and HttpSocket tests'
 * @access public
 */
	var $label = 'Test Suite Tests';
/**
 * TestSuiteGroupTest method
 *
 * @access public
 * @return void
 */
	function TestSuiteGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'test_manager');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'code_coverage_manager');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'cake_test_case');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'cake_test_fixture');

	}
}
?>
