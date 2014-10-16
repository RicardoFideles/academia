<?php
App::uses('AppController', 'Controller');
/**
 * Idadecategorias Controller
 *
 * @property Idadecategoria $Idadecategoria
 * @property PaginatorComponent $Paginator
 */
class IdadecategoriasController extends AppController {

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
		$this->Idadecategoria->recursive = 0;
		$this->set('idadecategorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Idadecategoria->exists($id)) {
			throw new NotFoundException(__('Invalid idadecategoria'));
		}
		$options = array('conditions' => array('Idadecategoria.' . $this->Idadecategoria->primaryKey => $id));
		$this->set('idadecategoria', $this->Idadecategoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Idadecategoria->create();
			if ($this->Idadecategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The idadecategoria has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The idadecategoria could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Idadecategoria->exists($id)) {
			throw new NotFoundException(__('Invalid idadecategoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Idadecategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The idadecategoria has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The idadecategoria could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Idadecategoria.' . $this->Idadecategoria->primaryKey => $id));
			$this->request->data = $this->Idadecategoria->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Idadecategoria->id = $id;
		if (!$this->Idadecategoria->exists()) {
			throw new NotFoundException(__('Invalid idadecategoria'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Idadecategoria->delete()) {
			$this->Session->setFlash(__('The idadecategoria has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The idadecategoria could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
