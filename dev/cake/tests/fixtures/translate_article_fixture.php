<?php
/* SVN FILE: $Id: translate_article_fixture.php 8120 2009-03-19 20:25:10Z gwoo $ */
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
 * @since         CakePHP(tm) v 1.2.0.5669
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
class TranslateArticleFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'Translate'
 * @access public
 */
	var $name = 'TranslateArticle';
/**
 * table property
 *
 * @var string 'i18n'
 * @access public
 */
	var $table = 'article_i18n';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'locale' => array('type' => 'string', 'length' => 6, 'null' => false),
		'model' => array('type' => 'string', 'null' => false),
		'foreign_key' => array('type' => 'integer', 'null' => false),
		'field' => array('type' => 'string', 'null' => false),
		'content' => array('type' => 'text')
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('id' => 1, 'locale' => 'eng', 'model' => 'TranslatedArticle', 'foreign_key' => 1, 'field' => 'title', 'content' => 'Title (eng) #1'),
		array('id' => 2, 'locale' => 'eng', 'model' => 'TranslatedArticle', 'foreign_key' => 1, 'field' => 'body', 'content' => 'Body (eng) #1'),
		array('id' => 3, 'locale' => 'deu', 'model' => 'TranslatedArticle', 'foreign_key' => 1, 'field' => 'title', 'content' => 'Title (deu) #1'),
		array('id' => 4, 'locale' => 'deu', 'model' => 'TranslatedArticle', 'foreign_key' => 1, 'field' => 'body', 'content' => 'Body (deu) #1'),
		array('id' => 5, 'locale' => 'cze', 'model' => 'TranslatedArticle', 'foreign_key' => 1, 'field' => 'title', 'content' => 'Title (cze) #1'),
		array('id' => 6, 'locale' => 'cze', 'model' => 'TranslatedArticle', 'foreign_key' => 1, 'field' => 'body', 'content' => 'Body (cze) #1'),
		array('id' => 7, 'locale' => 'eng', 'model' => 'TranslatedArticle', 'foreign_key' => 2, 'field' => 'title', 'content' => 'Title (eng) #2'),
		array('id' => 8, 'locale' => 'eng', 'model' => 'TranslatedArticle', 'foreign_key' => 2, 'field' => 'body', 'content' => 'Body (eng) #2'),
		array('id' => 9, 'locale' => 'deu', 'model' => 'TranslatedArticle', 'foreign_key' => 2, 'field' => 'title', 'content' => 'Title (deu) #2'),
		array('id' => 10, 'locale' => 'deu', 'model' => 'TranslatedArticle', 'foreign_key' => 2, 'field' => 'body', 'content' => 'Body (deu) #2'),
		array('id' => 11, 'locale' => 'cze', 'model' => 'TranslatedArticle', 'foreign_key' => 2, 'field' => 'title', 'content' => 'Title (cze) #2'),
		array('id' => 12, 'locale' => 'cze', 'model' => 'TranslatedArticle', 'foreign_key' => 2, 'field' => 'body', 'content' => 'Body (cze) #2'),
		array('id' => 13, 'locale' => 'eng', 'model' => 'TranslatedArticle', 'foreign_key' => 3, 'field' => 'title', 'content' => 'Title (eng) #3'),
		array('id' => 14, 'locale' => 'eng', 'model' => 'TranslatedArticle', 'foreign_key' => 3, 'field' => 'body', 'content' => 'Body (eng) #3'),
		array('id' => 15, 'locale' => 'deu', 'model' => 'TranslatedArticle', 'foreign_key' => 3, 'field' => 'title', 'content' => 'Title (deu) #3'),
		array('id' => 16, 'locale' => 'deu', 'model' => 'TranslatedArticle', 'foreign_key' => 3, 'field' => 'body', 'content' => 'Body (deu) #3'),
		array('id' => 17, 'locale' => 'cze', 'model' => 'TranslatedArticle', 'foreign_key' => 3, 'field' => 'title', 'content' => 'Title (cze) #3'),
		array('id' => 18, 'locale' => 'cze', 'model' => 'TranslatedArticle', 'foreign_key' => 3, 'field' => 'body', 'content' => 'Body (cze) #3')
	);
}

?>
