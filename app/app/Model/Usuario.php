<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * Usuario Model
 *
 * @property T1ipo $T1ipo
 * @property Estado $Estado
 * @property Mantenimientoequipo $Mantenimientoequipo
 * @property Mantenimientoimpresora $Mantenimientoimpresora
 */
class Usuario extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'email';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombres' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellidos' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'unique' => array(
                'rule' => 'isUnique',
                'required' => 'create',
                'message' => 'El correo ya se encuentra registrado',
            ),
		),
		'pass' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
                
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'minimo' => array(
                'rule'    => array('minLength', 6),
                'message' => 'La password debe tener minimo 6 caracteres'
            )
		),
        'confirmacion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
                
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'identicalFieldValues' => array(
                'rule' => array('valoresiguales', 'pass' ),
                'message' => 'Las password no coinciden'
            ),
            'minimo' => array(
                'rule'    => array('minLength', 6),
                'message' => 'La password debe tener minimo 6 caracteres'
            )
		), 
        'passold' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
                
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),       
		't1ipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		/*'T1ipo' => array(
			'className' => 'T1ipo',
			'foreignKey' => 't1ipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(/*
		'Mantenimientoequipo' => array(
			'className' => 'Mantenimientoequipo',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Mantenimientoimpresora' => array(
			'className' => 'Mantenimientoimpresora',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)*/
	);

	//public function beforeSave(){
	public function beforeSave($options = array ( )){
		$this->data['Usuario']['pass']=AuthComponent::password($this->data['Usuario']['pass']);
	}

	function valoresiguales( $field=array(), $compare_field=null ) 
    {
        foreach( $field as $key => $value ){
            $v1 = $value;
            $v2 = $this->data[$this->name][ $compare_field ];                 
            if($v1 !== $v2) {
                return false;
            } else {
                continue;
            }
        }
        return true;
    } 
}
