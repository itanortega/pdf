<?php
App::uses('AppController', 'Controller');
/**
 * Menus Controller
 *
 * @property Menu $Menu
 */
class MenusController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Menu->recursive = 0;
		$this->set('menus', $this->paginate());
	}

	public function menusid($id=null) {
		$m=$this->Menu->find('all',array(
				'conditions'=>array(
					'usuario_id'=>$id
				)
			));
		$this->set('m',$m);
		return $m;
	}

	public function obtenernombremenu($id=null) {
		$menus=$this->Menu->id=$id;
		$nombre=$this->Menu->field('nombre');
		$this->set('nombre', $nombre);
		return $nombre;
	}

	public function obtenericonomenu($id=null) {
		$menus=$this->Menu->id=$id;
		$nombre=$this->Menu->field('icono');
		$this->set('nombre', $nombre);
		return $nombre;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$this->set('menu', $this->Menu->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Menu->create();
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Menu->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Menu->read(null, $id);
		}
		$usuarios = $this->Menu->Usuario->find('list');
		$this->set(compact('usuarios'));
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
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->Menu->delete()) {
			$this->Session->setFlash(__('Menu deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Menu was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
