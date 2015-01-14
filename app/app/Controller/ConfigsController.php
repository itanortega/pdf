<?php
App::uses('AppController', 'Controller');
/**
 * Configs Controller
 *
 * @property Config $Config
 */
class ConfigsController extends AppController {

	public function obtenernombreconfig($id=null) {
		$config=$this->Config->id=$id;
		$nombre=$this->Config->field('nombre');
		$this->set('nombre', $nombre);
		return $nombre;
	}

	public function cambiar($id = null) {
		$this->set('idconfig',$id);
		$this->Config->id = $id;
		if (!$this->Config->exists()) {
			throw new NotFoundException(__('Invalid config'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Config->save($this->request->data)) {
				$this->Session->setFlash(__('El valor ha sido modificado'));
			} else {
				$this->Session->setFlash(__('El valor no pudo ser modificado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Config->read(null, $id);
		}
	}

	public function obtenerval($nom=null){
        $val="";
        $this->Config->recursive = 0;
        $todos=$this->Config->find('all',array(
                'conditions'=>array(                   
                    'nombre'=>$nom)
                )
        );
        
        foreach ($todos as $uno):
            $val=$uno['Config']['valor'];
        endforeach;
        return $val;
    }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Config->recursive = 0;
		$this->set('configs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Config->id = $id;
		if (!$this->Config->exists()) {
			throw new NotFoundException(__('Invalid config'));
		}
		$this->set('config', $this->Config->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Config->create();
			if ($this->Config->save($this->request->data)) {
				$this->Session->setFlash(__('The config has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config could not be saved. Please, try again.'));
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
		$this->Config->id = $id;
		if (!$this->Config->exists()) {
			throw new NotFoundException(__('Invalid config'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Config->save($this->request->data)) {
				$this->Session->setFlash(__('The config has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Config->read(null, $id);
		}
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
		$this->Config->id = $id;
		if (!$this->Config->exists()) {
			throw new NotFoundException(__('Invalid config'));
		}
		if ($this->Config->delete()) {
			$this->Session->setFlash(__('Config deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Config was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
