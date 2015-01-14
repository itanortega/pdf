<?php
App::uses('T2ipo', 'Model');

/**
 * T2ipo Test Case
 *
 */
class T2ipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.t2ipo',
		'app.equipo',
		'app.cliente',
		'app.grupo',
		'app.impresora',
		'app.t3ipo',
		'app.mantenimientoimpresora',
		'app.t4ipo',
		'app.usuario',
		'app.estado',
		'app.mantenimientoequipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->T2ipo = ClassRegistry::init('T2ipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->T2ipo);

		parent::tearDown();
	}

}
