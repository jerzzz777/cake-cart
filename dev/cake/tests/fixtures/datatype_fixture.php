<?php
/* SVN FILE: $Id: datatype_fixture.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.7026
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 16:25:10 -0400 (Thu, 19 Mar 2009) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class DatatypeFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'Datatype'
 * @access public
 */
	var $name = 'Datatype';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'null'=> false, 'default'=> 0, 'key' => 'primary'),
		'float_field' => array('type' => 'float', 'length' => '5,2', 'null' => false, 'default' => null),
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('id' => 1, 'float_field' => 42.23),
	);
}

?>
