<?php
App::uses('Grupo', 'Model');

/**
 * Grupo Test Case
 *
 */
class GrupoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupo',
		'app.equipo',
		'app.cliente',
		'app.t2ipo',
		'app.estado',
		'app.usuario',
		'app.mantenimientoequipo',
		'app.impresora'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grupo = ClassRegistry::init('Grupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupo);

		parent::tearDown();
	}

}
