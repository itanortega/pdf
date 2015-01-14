<?php
App::uses('AppController', 'Controller');
/**
 * Pdfs Controller
 *
 * @property Pdf $Pdf
 * @property PaginatorComponent $Paginator
 */
class PdfsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pdf->recursive = 0;
		$this->set('pdfs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pdf->exists($id)) {
			throw new NotFoundException(__('Invalid pdf'));
		}
		$options = array('conditions' => array('Pdf.' . $this->Pdf->primaryKey => $id));
		$this->set('pdf', $this->Pdf->find('first', $options));
	}

	public function viewpdf($id = null) {
		$persona=$this->Session->read('persona');
        $id= $persona['id'];
        $this->set('id',$id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pdf->create();
			if ($this->Pdf->save($this->request->data)) {
				$this->Session->setFlash(__('The pdf has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pdf could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Pdf->Usuario->find('list');
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
		if (!$this->Pdf->exists($id)) {
			throw new NotFoundException(__('Invalid pdf'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pdf->save($this->request->data)) {
				$this->Session->setFlash(__('The pdf has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pdf could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pdf.' . $this->Pdf->primaryKey => $id));
			$this->request->data = $this->Pdf->find('first', $options);
		}
		$usuarios = $this->Pdf->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pdf->id = $id;
		if (!$this->Pdf->exists()) {
			throw new NotFoundException(__('Invalid pdf'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pdf->delete()) {
			$this->Session->setFlash(__('The pdf has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pdf could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
