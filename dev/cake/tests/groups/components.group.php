<?php
/* SVN FILE: $Id: components.group.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * AllCoreComponentsGroupTest file
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
 * AllCoreComponentsGroupTest class
 *
 * This test group will run all tests in the cases/libs/controller/components directory.
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class AllCoreComponentsGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'All core components'
 * @access public
 */
	var $label = 'All Components';
/**
 * AllCoreComponentsGroupTest method
 *
 * @access public
 * @return void
 */
	function AllCoreComponentsGroupTest() {
		TestManager::addTestCasesFromDirectory($this, CORE_TEST_CASES . DS . 'libs' . DS . 'controller' . DS . 'components');
	}
}
?>