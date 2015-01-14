<?php
/**
 * MantenimientoequipoFixture
 *
 */
class MantenimientoequipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'observaciones' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'equipo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		't4ipo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
		'usuario_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'fecha' => '2014-05-23',
			'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'equipo_id' => 1,
			't4ipo_id' => 1,
			'usuario_id' => 'L',
			'created' => '2014-05-23 21:16:57',
			'modified' => '2014-05-23 21:16:57'
		),
	);

}
