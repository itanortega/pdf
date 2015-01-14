<?php
App::uses('Impresora', 'Model');

/**
 * Impresora Test Case
 *
 */
class ImpresoraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.impresora',
		'app.grupo',
		'app.equipo',
		'app.cliente',
		'app.t2ipo',
		'app.estado',
		'app.usuario',
		'app.mantenimientoequipo',
		'app.t3ipo',
		'app.mantenimientoimpresora'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Impresora = ClassRegistry::init('Impresora');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Impresora);

		parent::tearDown();
	}

}
