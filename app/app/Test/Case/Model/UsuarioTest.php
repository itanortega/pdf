<?php
App::uses('Usuario', 'Model');

/**
 * Usuario Test Case
 *
 */
class UsuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usuario',
		'app.t1ipo',
		'app.estado',
		'app.equipo',
		'app.cliente',
		'app.grupo',
		'app.impresora',
		'app.t3ipo',
		'app.mantenimientoimpresora',
		'app.t4ipo',
		'app.mantenimientoequipo',
		'app.t2ipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usuario = ClassRegistry::init('Usuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usuario);

		parent::tearDown();
	}

}
