<?php
App::uses('AppController', 'Controller');
/**
 * Opcions Controller
 *
 * @property Opcion $Opcion
 */
class OpcionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Opcion->recursive = 0;
		$this->set('opcions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Opcion->id = $id;
		if (!$this->Opcion->exists()) {
			throw new NotFoundException(__('Invalid opcion'));
		}
		$this->set('opcion', $this->Opcion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Opcion->create();
			if ($this->Opcion->save($this->request->data)) {
				$this->Session->setFlash(__('The opcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The opcion could not be saved. Please, try again.'));
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
		$this->Opcion->id = $id;
		if (!$this->Opcion->exists()) {
			throw new NotFoundException(__('Invalid opcion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Opcion->save($this->request->data)) {
				$this->Session->setFlash(__('The opcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The opcion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Opcion->read(null, $id);
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
		$this->Opcion->id = $id;
		if (!$this->Opcion->exists()) {
			throw new NotFoundException(__('Invalid opcion'));
		}
		if ($this->Opcion->delete()) {
			$this->Session->setFlash(__('Opcion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Opcion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
