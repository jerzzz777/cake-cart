<?php
/* SVN FILE: $Id: uuiditems_uuidportfolio_numericid_fixture.php 8120 2009-03-19 20:25:10Z gwoo $ */
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
class UuiditemsUuidportfolioNumericidFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'UuiditemsUuidportfolioNumericid'
 * @access public
 */
	var $name = 'UuiditemsUuidportfolioNumericid';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'length' => 10, 'key' => 'primary'),
		'uuiditem_id' => array('type' => 'string', 'length' => 36, 'null' => false),
		'uuidportfolio_id' => array('type' => 'string', 'length' => 36, 'null' => false)
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('id' => 1, 'uuiditem_id' => '481fc6d0-b920-43e0-a40d-6d1740cf8569', 'uuidportfolio_id' => '4806e091-6940-4d2b-b227-303740cf8569'),
		array('id' => 2, 'uuiditem_id' => '48298a29-81c0-4c26-a7fb-413140cf8569', 'uuidportfolio_id' => '480af662-eb8c-47d3-886b-230540cf8569'),
		array('id' => 3, 'uuiditem_id' => '482b7756-8da0-419a-b21f-27da40cf8569', 'uuidportfolio_id' => '4806e091-6940-4d2b-b227-303740cf8569'),
		array('id' => 4, 'uuiditem_id' => '482cfd4b-0e7c-4ea3-9582-4cec40cf8569', 'uuidportfolio_id' => '4806e091-6940-4d2b-b227-303740cf8569')
	);
}
?>