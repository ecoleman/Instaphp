<?php

namespace Instaphp;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-22 at 22:16:22.
 * @ignore
 */
class InstaphpTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var Instaphp
	 */
	protected $object;
	
	protected $config = [
		'client_id' => TEST_CLIENT_ID,
		'client_secret' => TEST_CLIENT_SECRET,
		'redirect_uri' => 'http://localhost:3001/auth'
	];

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Instaphp($this->config);
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		
	}
	
	/**
	 * @covers Instaphp\Instaphp::__construct
	 */
	public function testConstructor()
	{
		$config = $this->config;
		$config['access_token'] = TEST_ACCESS_TOKEN;
		$obj = new \Instaphp\Instaphp($config);
		$this->assertEquals(TEST_ACCESS_TOKEN, $obj->getAccessToken());
		$this->assertTrue($obj->isAuthorized());
	}

	/**
	 * @covers Instaphp\Instaphp::__get
	 */
	public function test__get()
	{
		$users = $this->object->users;
		$this->assertNotNull($users);
		$this->assertInstanceOf('\Instaphp\Instagram\Users', $users);
	}

	/**
	 * @covers Instaphp\Instaphp::__isset
	 * @todo   Implement test__isset().
	 */
	public function test__isset()
	{
		$media = $this->object->media;
		$this->assertTrue(isset($this->object->media));
	}

	/**
	 * @covers Instaphp\Instaphp::__unset
	 * @todo   Implement test__unset().
	 */
	public function test__unset()
	{
		$media = $this->object->media;
		$this->assertTrue(isset($this->object->media));
		unset($this->object->Media);
		$this->assertTrue(!isset($this->object->Media));
	}
	
	/**
	 * @covers Instaphp\Instaphp::setAccessToken
	 * @covers Instaphp\Instaphp::getAccessToken
	 */
	public function testSetAccessToken()
	{
		$this->object->setAccessToken(TEST_ACCESS_TOKEN);
		$this->assertEquals(TEST_ACCESS_TOKEN, $this->object->getAccessToken());
	}
	
	/**
	 * @covers Instagram\Instagram::isAuthorized
	 * @covers Instaphp\Instaphp::isAuthorized
	 */
	public function testIsAuthorized()
	{
		$this->object->setAccessToken(TEST_ACCESS_TOKEN);
		$this->assertTrue($this->object->isAuthorized());
	}

}
