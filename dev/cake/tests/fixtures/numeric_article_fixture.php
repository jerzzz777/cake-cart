<?php
/* SVN FILE: $Id: numeric_article_fixture.php 8120 2009-03-19 20:25:10Z gwoo $ */
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
class NumericArticleFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'NumericArticle'
 * @access public
 */
	var $name = 'NumericArticle';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false),
		'created' => 'datetime',
		'updated' => 'datetime'
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('title' => 'First Article', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('title' => '12345abcde', 'created' => '2007-03-18 10:41:23', 'updated' => '2007-03-18 10:43:31'),
	);
}

?>
