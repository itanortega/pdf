<?php
App::uses('T4ipo', 'Model');

/**
 * T4ipo Test Case
 *
 */
class T4ipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.t4ipo',
		'app.mantenimientoequipo',
		'app.equipo',
		'app.cliente',
		'app.grupo',
		'app.impresora',
		'app.t3ipo',
		'app.mantenimientoimpresora',
		'app.usuario',
		'app.t2ipo',
		'app.estado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->T4ipo = ClassRegistry::init('T4ipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->T4ipo);

		parent::tearDown();
	}

}
