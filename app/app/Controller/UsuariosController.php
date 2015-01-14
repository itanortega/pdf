<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 */
class UsuariosController extends AppController {
	public function beforeFilter() {
	    parent::beforeFilter();
	    // Allow users to register and logout.
	    $this->Auth->allow('logout');	    
	}

	public function obtenernom($id=null){
        $nom=$id;
        $this->Usuario->recursive = 0;
        $todos=$this->Usuario->find('all',array(
                'conditions'=>array(                   
                    'Usuario.id'=>$id)
                )
        );
        
        foreach ($todos as $uno):
            $nom=$uno['Usuario']['nombres']." ".$uno['Usuario']['apellidos'];
        endforeach;

        return $nom;
    }

    public function inicio() {
    	
    }

	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirect());
	        }
	        $this->Session->setFlash(__('Email o password incorrectos, por favor intente de nuevo'));
	    }else{
	    	/*if($this->Auth->Usuario('id')){
	    		return $this->redirect($this->Auth->redirect());
	    	}*/
	    }
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$usuarios=$this->Usuario->find('all',array(
                'conditions'=>array(                   
                		'or'=>array('Usuario.id <>'=>'1','Usuario.id <>'=>'2')
                    )
                )
        );
		$this->set('usuarios', $usuarios);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			$this->request->data['Usuario']['estado_id']='1';
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Usuario guardado'));
				$this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('El usuario NO fue guardado, por favor intente de nuevo'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Usuario modificado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario NO fue modificado, por favor intente de nuevo'));
			}
		} else {
			$this->request->data = $this->Usuario->read(null, $id);
		}
		$t1ipos = $this->Usuario->T1ipo->find('list');
		$estados = $this->Usuario->Estado->find('list');
		$this->set(compact('t1ipos', 'estados'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('Usuario eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El usuario NO fue eliminado, por favor intente de nuevo'));
		$this->redirect(array('action' => 'index'));
	}

	public function editpass() {    	 
    	   if($this->request->is('post')):
    	   		$persona=$this->Session->read('persona');
               $id= $persona['id'];
               $this->Usuario->id = $id;
               $old=AuthComponent::password($this->data["Usuario"]["passold"]);
               $usu = $this->Usuario->find(
                    'first',array(
                        'conditions' => array(
                            'Usuario.id'=>$id      
                         ),
                         'recursive' => -1
                    )
                );
               //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
               if(!empty($usu) && ($usu["Usuario"]["pass"] == $old)):
                    if ($this->Usuario->saveField('pass', $this->data["Usuario"]["pass"])) {
        				$this->Session->setFlash(__('Contrase&nacute;a actualizada!.'));
        			} else {
        				$this->Session->setFlash(__('La contrase&nacute;a no se actualiz&oacute;'));
        			}                                           
                    $this->redirect(array('controller'=>'Usuarios','action'=>'editpass'));
               else:
                    $this->Session->setFlash('La contrase&nacute;a antigua no es correcta');
                    $this->redirect(array('controller'=>'Usuarios','action'=>'editpass'));
               endif;         
            endif;
    }
}
