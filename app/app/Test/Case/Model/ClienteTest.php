<?php
App::uses('Cliente', 'Model');

/**
 * Cliente Test Case
 *
 */
class ClienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente',
		'app.equipo',
		'app.grupo',
		'app.impresora',
		'app.t3ipo',
		'app.mantenimientoimpresora',
		'app.t4ipo',
		'app.mantenimientoequipo',
		'app.usuario',
		'app.t1ipo',
		'app.estado',
		'app.t2ipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cliente = ClassRegistry::init('Cliente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cliente);

		parent::tearDown();
	}

}
