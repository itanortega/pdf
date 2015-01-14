<?php
App::uses('Mantenimientoequipo', 'Model');

/**
 * Mantenimientoequipo Test Case
 *
 */
class MantenimientoequipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mantenimientoequipo',
		'app.equipo',
		'app.cliente',
		'app.grupo',
		'app.impresora',
		'app.t3ipo',
		'app.mantenimientoimpresora',
		'app.t2ipo',
		'app.estado',
		'app.usuario',
		'app.t4ipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mantenimientoequipo = ClassRegistry::init('Mantenimientoequipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mantenimientoequipo);

		parent::tearDown();
	}

}
