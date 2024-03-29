<?php
/* SVN FILE: $Id: console.group.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * ConsoleGroupTest file
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
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.4206
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 16:25:10 -0400 (Thu, 19 Mar 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * AllConsoleGroupTest class
 *
 * This test group will run all console tests
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class AllConsoleGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'All core cache engines'
 * @access public
 */
	var $label = 'ShellDispatcher, Shell and all Tasks';
/**
 * AllConsoleGroupTest method
 *
 * @access public
 * @return void
 */
	function AllConsoleGroupTest() {
		TestManager::addTestCasesFromDirectory($this, CORE_TEST_CASES . DS . 'console');
	}
}
?>