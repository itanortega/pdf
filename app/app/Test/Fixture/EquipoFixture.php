<?php
/**
 * EquipoFixture
 *
 */
class EquipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'fechaadquisicion' => array('type' => 'date', 'null' => false, 'default' => null),
		'codinventario' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ip' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mac' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mac2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ubicacion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cliente_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'nombreequipo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'usuario' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pass' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'grupo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		't2ipo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2),
		'estado_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
		'torre' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'board' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'procesador' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ram' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hdd' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'monitor' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'teclado' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mouse' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dvd' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'otros' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fechaadquisicion' => '2014-05-23',
			'codinventario' => 'Lorem ipsum dolor ',
			'ip' => 'Lorem ipsum dolor ',
			'mac' => 'Lorem ipsum dolor ',
			'mac2' => 'Lorem ipsum dolor ',
			'ubicacion' => 'Lorem ipsum dolor sit amet',
			'cliente_id' => 1,
			'nombreequipo' => 'Lorem ipsum dolor sit amet',
			'usuario' => 'Lorem ipsum dolor sit amet',
			'pass' => 'Lorem ipsum dolor sit amet',
			'grupo_id' => 1,
			't2ipo_id' => 1,
			'estado_id' => 1,
			'torre' => 'Lorem ipsum dolor sit amet',
			'board' => 'Lorem ipsum dolor sit amet',
			'procesador' => 'Lorem ipsum dolor sit amet',
			'ram' => 'Lorem ipsum dolor sit amet',
			'hdd' => 'Lorem ipsum dolor sit amet',
			'monitor' => 'Lorem ipsum dolor sit amet',
			'teclado' => 'Lorem ipsum dolor sit amet',
			'mouse' => 'Lorem ipsum dolor sit amet',
			'dvd' => 'Lorem ipsum dolor sit amet',
			'otros' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-05-23 21:16:56',
			'modified' => '2014-05-23 21:16:56'
		),
	);

}
