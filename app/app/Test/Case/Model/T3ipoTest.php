<?php
App::uses('T3ipo', 'Model');

/**
 * T3ipo Test Case
 *
 */
class T3ipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.t3ipo',
		'app.impresora',
		'app.grupo',
		'app.equipo',
		'app.cliente',
		'app.t2ipo',
		'app.estado',
		'app.usuario',
		'app.mantenimientoequipo',
		'app.t4ipo',
		'app.mantenimientoimpresora'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->T3ipo = ClassRegistry::init('T3ipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->T3ipo);

		parent::tearDown();
	}

}
