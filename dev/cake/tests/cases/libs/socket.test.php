<?php
/* SVN FILE: $Id: socket.test.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * SocketTest file
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
 * @subpackage    cake.tests.cases.libs
 * @since         CakePHP(tm) v 1.2.0.4206
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 16:25:10 -0400 (Thu, 19 Mar 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
App::import('Core', 'Socket');
/**
 * SocketTest class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs
 */
class SocketTest extends CakeTestCase {
/**
 * setUp method
 *
 * @access public
 * @return void
 */
	function setUp() {
		$this->Socket = new CakeSocket();
	}
/**
 * tearDown method
 *
 * @access public
 * @return void
 */
	function tearDown() {
		unset($this->Socket);
	}
/**
 * testConstruct method
 *
 * @access public
 * @return void
 */
	function testConstruct() {
		$this->Socket->__construct();
		$baseConfig = $this->Socket->_baseConfig;
		$this->assertIdentical($baseConfig, array(
			'persistent'	=> false,
			'host'			=> 'localhost',
			'protocol'		=> 'tcp',
			'port'			=> 80,
			'timeout'		=> 30
		));

		$this->Socket->reset();
		$this->Socket->__construct(array('host' => 'foo-bar'));
		$baseConfig['host'] = 'foo-bar';
		$baseConfig['protocol'] = getprotobyname($baseConfig['protocol']);
		$this->assertIdentical($this->Socket->config, $baseConfig);

		$this->Socket = new CakeSocket(array('host' => 'www.cakephp.org', 'port' => 23, 'protocol' => 'udp'));
		$baseConfig = $this->Socket->_baseConfig;

		$baseConfig['host'] = 'www.cakephp.org';
		$baseConfig['port'] = 23;
		$baseConfig['protocol'] = 17;

		$this->assertIdentical($this->Socket->config, $baseConfig);
	}
/**
 * testSocketConnection method
 *
 * @access public
 * @return void
 */
	function testSocketConnection() {
		$this->assertFalse($this->Socket->connected);
		$this->Socket->disconnect();
		$this->assertFalse($this->Socket->connected);
		$this->Socket->connect();
		$this->assertTrue($this->Socket->connected);
		$this->Socket->connect();
		$this->assertTrue($this->Socket->connected);

		$this->Socket->disconnect();
		$config = array('persistent' => true);
		$this->Socket = new CakeSocket($config);
		$this->Socket->connect();
		$this->assertTrue($this->Socket->connected);
	}
/**
 * testSocketHost method
 *
 * @access public
 * @return void
 */
	function testSocketHost() {
		$this->Socket = new CakeSocket();
		$this->Socket->connect();
		$this->assertEqual($this->Socket->address(), '127.0.0.1');
		$this->assertEqual(gethostbyaddr('127.0.0.1'), $this->Socket->host());
		$this->assertEqual($this->Socket->lastError(), null);
		$this->assertTrue(in_array('127.0.0.1', $this->Socket->addresses()));

		$this->Socket = new CakeSocket(array('host' => '127.0.0.1'));
		$this->Socket->connect();
		$this->assertEqual($this->Socket->address(), '127.0.0.1');
		$this->assertEqual(gethostbyaddr('127.0.0.1'), $this->Socket->host());
		$this->assertEqual($this->Socket->lastError(), null);
		$this->assertTrue(in_array('127.0.0.1', $this->Socket->addresses()));
	}
/**
 * testSocketWriting method
 *
 * @access public
 * @return void
 */
	function testSocketWriting() {
		$request = "GET / HTTP/1.1\r\nConnection: close\r\n\r\n";
		$this->assertTrue($this->Socket->write($request));
	}
/**
 * testSocketReading method
 *
 * @access public
 * @return void
 */
	function testSocketReading() {
		$this->Socket = new CakeSocket(array('timeout' => 5));
		$this->Socket->connect();
		$this->assertEqual($this->Socket->read(26), null);
	}
/**
 * testLastError method
 *
 * @access public
 * @return void
 */
	function testLastError() {
		$this->Socket = new CakeSocket();
		$this->Socket->setLastError(4, 'some error here');
		$this->assertEqual($this->Socket->lastError(), '4: some error here');
	}
/**
 * testReset method
 *
 * @access public
 * @return void
 */
	function testReset() {
		$config = array(
			'persistent'	=> true,
			'host'			=> '127.0.0.1',
			'protocol'		=> 'udp',
			'port'			=> 80,
			'timeout'		=> 20
		);
		$anotherSocket = new CakeSocket($config);
		$anotherSocket->reset();
		$this->assertEqual(array(), $anotherSocket->config);
	}
}
?>