<?php

require_once JPATH_PLATFORM.'/joomla/environment/response.php';

/**
 * Test class for JResponse.
 * Generated by PHPUnit on 2011-03-25 at 00:12:25.
 */
class JResponseTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @var JResponse
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{

	}

	public function testAllowCache()
	{
		$this->assertThat(
			JResponse::allowCache(),
			$this->equalTo(FALSE)
		);

		JResponse::allowCache(TRUE);
		$this->assertThat(
			JResponse::allowCache(),
			$this->equalTo(TRUE)
		);

		$this->assertThat(
			JResponse::allowCache(FALSE),
			$this->equalTo(FALSE)
		);
	}

	public function testSetHeader()
	{
		JResponse::clearHeaders();
		JResponse::setHeader('somename', 'somevalue');

		$this->assertThat(
			count(JResponse::getHeaders()),
			$this->equalTo(1)
		);

		JResponse::clearHeaders();
	}

	public function testGetHeaders()
	{
		JResponse::clearHeaders();
		JResponse::setHeader('somename', 'somevalue');
		$headers = JResponse::getHeaders();

		$this->assertThat(
			$headers[0]['name'],
			$this->equalTo('somename')
		);

		$this->assertThat(
			$headers[0]['value'],
			$this->equalTo('somevalue')
		);

		JResponse::clearHeaders();
	}

	public function testClearHeaders()
	{
		JResponse::setHeader('somename', 'somevalue');
		JResponse::clearHeaders();

		$this->assertThat(
			count(JResponse::getHeaders()),
			$this->equalTo(0)
		);
	}

	/**
	 * @todo Implement testSendHeaders().
	 */
	public function testSendHeaders()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetBody().
	 */
	public function testSetBody()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testPrependBody().
	 */
	public function testPrependBody()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testAppendBody().
	 */
	public function testAppendBody()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetBody().
	 */
	public function testGetBody()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testToString().
	 */
	public function testToString()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}
