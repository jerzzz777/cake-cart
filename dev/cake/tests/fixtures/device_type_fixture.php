<?php
/* SVN FILE: $Id: device_type_fixture.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * Short description for file.
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
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.4667
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 16:25:10 -0400 (Thu, 19 Mar 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * Short description for class.
 *
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class DeviceTypeFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'DeviceType'
 * @access public
 */
	var $name = 'DeviceType';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'device_type_category_id' => array('type' => 'integer', 'null' => false),
		'feature_set_id' => array('type' => 'integer', 'null' => false),
		'exterior_type_category_id' => array('type' => 'integer', 'null' => false),
		'image_id' => array('type' => 'integer', 'null' => false),
		'extra1_id' => array('type' => 'integer', 'null' => false),
		'extra2_id' => array('type' => 'integer', 'null' => false),
		'name' => array('type' => 'string', 'null' => false),
		'order' => array('type' => 'integer', 'null' => false)
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('device_type_category_id' => 1, 'feature_set_id' => 1, 'exterior_type_category_id' => 1, 'image_id' => 1, 'extra1_id' => 1, 'extra2_id' => 1, 'name' => 'DeviceType 1', 'order' => 0)
	);
}
?>
