<?php

class BasicTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testIndex()
	{
		$response = $this->call('GET', '/');
		$this->assertEquals(302, $response->getStatusCode());
	}

	public function testError()
	{
		$this->assertTrue(false);
	}

}
