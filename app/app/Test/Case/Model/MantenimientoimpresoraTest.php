<?php
App::uses('Mantenimientoimpresora', 'Model');

/**
 * Mantenimientoimpresora Test Case
 *
 */
class MantenimientoimpresoraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mantenimientoimpresora',
		'app.impresora',
		'app.grupo',
		'app.equipo',
		'app.cliente',
		'app.t2ipo',
		'app.estado',
		'app.usuario',
		'app.mantenimientoequipo',
		'app.t4ipo',
		'app.t3ipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mantenimientoimpresora = ClassRegistry::init('Mantenimientoimpresora');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mantenimientoimpresora);

		parent::tearDown();
	}

}
