<?php
App::uses('AppController', 'Controller');
/**
 * UsuariosMenus Controller
 *
 * @property UsuariosMenu $UsuariosMenu
 */
class UsuariosMenusController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UsuariosMenu->recursive = 0;
		$this->set('usuariosMenus', $this->paginate());
	}

	public function menusid($id=null) {
		$um=$this->UsuariosMenu->find('all',array(
				'conditions'=>array(
					'usuario_id'=>$id
				)
			));
		$this->set('mu',$um);
		return $um;
	}

	public function menuslista($id=null) {
		$ml=$this->UsuariosMenu->query("SELECT Menu.id
from 
(usuarios_menus AS UsuariosMenu inner join
                (opcions AS Opcions inner join                
                         menus as Menu                         
                         on Menu.id=Opcions.menu_id
                )                
                on UsuariosMenu.opcion_id=Opcions.id
) 
WHERE UsuariosMenu.usuario_id='".$id."'
GROUP BY Menu.id
ORDER BY Menu.orden");
		$this->set('ml',$ml);
		return $ml;
	}

	public function menuslistaidopcion($idusu=null,$menu=null) {
		$mlo=$this->UsuariosMenu->find('all',array(
			'conditions'=>array(
				'UsuariosMenu.usuario_id'=>$idusu,
				'Opcion.menu_id'=>$menu
			),
			'order'=>'Opcion.nombre'
		));
		$this->set('mlo',$mlo);
		return $mlo;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UsuariosMenu->id = $id;
		if (!$this->UsuariosMenu->exists()) {
			throw new NotFoundException(__('Invalid usuarios menu'));
		}
		$this->set('usuariosMenu', $this->UsuariosMenu->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsuariosMenu->create();
			if ($this->UsuariosMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The usuarios menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuarios menu could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->UsuariosMenu->Usuario->find('list');
		$opcions = $this->UsuariosMenu->Opcion->find('list');
		$this->set(compact('usuarios', 'opcions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UsuariosMenu->id = $id;
		if (!$this->UsuariosMenu->exists()) {
			throw new NotFoundException(__('Invalid usuarios menu'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UsuariosMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The usuarios menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuarios menu could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UsuariosMenu->read(null, $id);
		}
		$usuarios = $this->UsuariosMenu->Usuario->find('list');
		$opcions = $this->UsuariosMenu->Opcion->find('list');
		$this->set(compact('usuarios', 'opcions'));
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
		$this->UsuariosMenu->id = $id;
		if (!$this->UsuariosMenu->exists()) {
			throw new NotFoundException(__('Invalid usuarios menu'));
		}
		if ($this->UsuariosMenu->delete()) {
			$this->Session->setFlash(__('Usuarios menu deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usuarios menu was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
