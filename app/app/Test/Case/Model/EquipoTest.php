<?php
App::uses('Equipo', 'Model');

/**
 * Equipo Test Case
 *
 */
class EquipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.equipo',
		'app.cliente',
		'app.grupo',
		'app.t2ipo',
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
		$this->Equipo = ClassRegistry::init('Equipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Equipo);

		parent::tearDown();
	}

}
