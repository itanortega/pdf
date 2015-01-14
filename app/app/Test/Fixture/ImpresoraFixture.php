<?php
/**
 * ImpresoraFixture
 *
 */
class ImpresoraFixture extends CakeTestFixture {

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
		'ubicacion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'clienteid' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'marca' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'referencia' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'grupo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		't3ipo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2),
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
			'ubicacion' => 'Lorem ipsum dolor sit amet',
			'clienteid' => 1,
			'marca' => 'Lorem ipsum dolor sit amet',
			'referencia' => 'Lorem ipsum dolor sit amet',
			'grupo_id' => 1,
			't3ipo_id' => 1,
			'otros' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-05-23 21:16:57',
			'modified' => '2014-05-23 21:16:57'
		),
	);

}
