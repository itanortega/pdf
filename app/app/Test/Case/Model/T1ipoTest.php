<?php
App::uses('T1ipo', 'Model');

/**
 * T1ipo Test Case
 *
 */
class T1ipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.t1ipo',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->T1ipo = ClassRegistry::init('T1ipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->T1ipo);

		parent::tearDown();
	}

}
