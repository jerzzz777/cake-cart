<?php
/* SVN FILE: $Id: content.php 7945 2008-12-19 02:16:01Z gwoo $ */
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
 * @subpackage    cake.cake.tests.lib
 * @since         CakePHP(tm) v 1.2.0.4433
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 21:16:01 -0500 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
?>
<div class="test-menu">
<ul>
	<li>
		<span  style="font-size: 18px">App</span>
		<ul>
			<li><a href='<?php echo $groups;?>&amp;app=true'>Test Groups</a></li>
			<li><a href='<?php echo $cases;?>&amp;app=true'>Test Cases</a></li>
		</ul>
	</li>
<?php
if (!empty($plugins)):
?>
	<li style="padding-top: 10px">
		<span  style="font-size: 18px">Plugins</span>
	<?php foreach($plugins as $plugin):
			$pluginPath = Inflector::underscore($plugin);
	?>
			<ul>
				<li style="padding-top: 10px">
					<span  style="font-size: 18px"><?php echo $plugin;?></span>
					<ul>
						<li><a href='<?php echo $groups;?>&amp;plugin=<?php echo $pluginPath; ?>'>Test Groups</a></li>
						<li><a href='<?php echo $cases;?>&amp;plugin=<?php echo $pluginPath; ?>'>Test Cases</a></li>
					</ul>
				</li>
			</ul>
	<?php endforeach; ?>
<?php endif;?>
	<li style="padding-top: 10px">
		<span style="font-size: 18px">Core</span>
		<ul>
			<li><a href='<?php echo $groups;?>'>Test Groups</a></li>
			<li><a href='<?php echo $cases;?>'>Test Cases</a></li>
		</ul>
	</li>
</ul>
</div>
<div  class="test-results">
