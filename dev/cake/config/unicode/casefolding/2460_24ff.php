<?php
/* SVN FILE: $Id: 2460_24ff.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Case Folding Properties.
 *
 * Provides case mapping of Unicode characters for code points U+2460 through U+24FF
 *
 * @see http://www.unicode.org/Public/UNIDATA/UCD.html
 * @see http://www.unicode.org/Public/UNIDATA/CaseFolding.txt
 * @see http://www.unicode.org/reports/tr21/tr21-5.html
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
 * @subpackage    cake.cake.config.unicode.casefolding
 * @since         CakePHP(tm) v 1.2.0.5691
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 21:16:01 -0500 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * The upper field is the decimal value of the upper case character
 *
 * The lower filed is an array of the decimal values that form the lower case version of a character.
 *
 *	The status field is:
 * C: common case folding, common mappings shared by both simple and full mappings.
 * F: full case folding, mappings that cause strings to grow in length. Multiple characters are separated by spaces.
 * S: simple case folding, mappings to single characters where different from F.
 * T: special case for uppercase I and dotted uppercase I
 *   - For non-Turkic languages, this mapping is normally not used.
 *   - For Turkic languages (tr, az), this mapping can be used instead of the normal mapping for these characters.
 *     Note that the Turkic mappings do not maintain canonical equivalence without additional processing.
 *     See the discussions of case mapping in the Unicode Standard for more information.
 */
$config['2460_24ff'][] = array('upper' => 9398, 'status' => 'C', 'lower' => array(9424)); /* CIRCLED LATIN CAPITAL LETTER A */
$config['2460_24ff'][] = array('upper' => 9399, 'status' => 'C', 'lower' => array(9425)); /* CIRCLED LATIN CAPITAL LETTER B */
$config['2460_24ff'][] = array('upper' => 9400, 'status' => 'C', 'lower' => array(9426)); /* CIRCLED LATIN CAPITAL LETTER C */
$config['2460_24ff'][] = array('upper' => 9401, 'status' => 'C', 'lower' => array(9427)); /* CIRCLED LATIN CAPITAL LETTER D */
$config['2460_24ff'][] = array('upper' => 9402, 'status' => 'C', 'lower' => array(9428)); /* CIRCLED LATIN CAPITAL LETTER E */
$config['2460_24ff'][] = array('upper' => 9403, 'status' => 'C', 'lower' => array(9429)); /* CIRCLED LATIN CAPITAL LETTER F */
$config['2460_24ff'][] = array('upper' => 9404, 'status' => 'C', 'lower' => array(9430)); /* CIRCLED LATIN CAPITAL LETTER G */
$config['2460_24ff'][] = array('upper' => 9405, 'status' => 'C', 'lower' => array(9431)); /* CIRCLED LATIN CAPITAL LETTER H */
$config['2460_24ff'][] = array('upper' => 9406, 'status' => 'C', 'lower' => array(9432)); /* CIRCLED LATIN CAPITAL LETTER I */
$config['2460_24ff'][] = array('upper' => 9407, 'status' => 'C', 'lower' => array(9433)); /* CIRCLED LATIN CAPITAL LETTER J */
$config['2460_24ff'][] = array('upper' => 9408, 'status' => 'C', 'lower' => array(9434)); /* CIRCLED LATIN CAPITAL LETTER K */
$config['2460_24ff'][] = array('upper' => 9409, 'status' => 'C', 'lower' => array(9435)); /* CIRCLED LATIN CAPITAL LETTER L */
$config['2460_24ff'][] = array('upper' => 9410, 'status' => 'C', 'lower' => array(9436)); /* CIRCLED LATIN CAPITAL LETTER M */
$config['2460_24ff'][] = array('upper' => 9411, 'status' => 'C', 'lower' => array(9437)); /* CIRCLED LATIN CAPITAL LETTER N */
$config['2460_24ff'][] = array('upper' => 9412, 'status' => 'C', 'lower' => array(9438)); /* CIRCLED LATIN CAPITAL LETTER O */
$config['2460_24ff'][] = array('upper' => 9413, 'status' => 'C', 'lower' => array(9439)); /* CIRCLED LATIN CAPITAL LETTER P */
$config['2460_24ff'][] = array('upper' => 9414, 'status' => 'C', 'lower' => array(9440)); /* CIRCLED LATIN CAPITAL LETTER Q */
$config['2460_24ff'][] = array('upper' => 9415, 'status' => 'C', 'lower' => array(9441)); /* CIRCLED LATIN CAPITAL LETTER R */
$config['2460_24ff'][] = array('upper' => 9416, 'status' => 'C', 'lower' => array(9442)); /* CIRCLED LATIN CAPITAL LETTER S */
$config['2460_24ff'][] = array('upper' => 9417, 'status' => 'C', 'lower' => array(9443)); /* CIRCLED LATIN CAPITAL LETTER T */
$config['2460_24ff'][] = array('upper' => 9418, 'status' => 'C', 'lower' => array(9444)); /* CIRCLED LATIN CAPITAL LETTER U */
$config['2460_24ff'][] = array('upper' => 9419, 'status' => 'C', 'lower' => array(9445)); /* CIRCLED LATIN CAPITAL LETTER V */
$config['2460_24ff'][] = array('upper' => 9420, 'status' => 'C', 'lower' => array(9446)); /* CIRCLED LATIN CAPITAL LETTER W */
$config['2460_24ff'][] = array('upper' => 9421, 'status' => 'C', 'lower' => array(9447)); /* CIRCLED LATIN CAPITAL LETTER X */
$config['2460_24ff'][] = array('upper' => 9422, 'status' => 'C', 'lower' => array(9448)); /* CIRCLED LATIN CAPITAL LETTER Y */
$config['2460_24ff'][] = array('upper' => 9423, 'status' => 'C', 'lower' => array(9449)); /* CIRCLED LATIN CAPITAL LETTER Z */
?>