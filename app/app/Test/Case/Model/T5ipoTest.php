<?php
App::uses('T5ipo', 'Model');

/**
 * T5ipo Test Case
 *
 */
class T5ipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.t5ipo',
		'app.mantenimientoequipo',
		'app.equipo',
		'app.grupo',
		'app.impresora',
		'app.t4ipo',
		'app.mantenimientoimpresora',
		'app.usuario',
		'app.t2ipo',
		'app.t3ipo',
		'app.estado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->T5ipo = ClassRegistry::init('T5ipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->T5ipo);

		parent::tearDown();
	}

}
