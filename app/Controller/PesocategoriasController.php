<?php
App::uses('AppController', 'Controller');
/**
 * Pesocategorias Controller
 *
 * @property Pesocategoria $Pesocategoria
 * @property PaginatorComponent $Paginator
 */
class PesocategoriasController extends AppController {

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
		$this->Pesocategoria->recursive = 0;
		$this->set('pesocategorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pesocategoria->exists($id)) {
			throw new NotFoundException(__('Invalid pesocategoria'));
		}
		$options = array('conditions' => array('Pesocategoria.' . $this->Pesocategoria->primaryKey => $id));
		$this->set('pesocategoria', $this->Pesocategoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pesocategoria->create();
			if ($this->Pesocategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The pesocategoria has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pesocategoria could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Pesocategoria->exists($id)) {
			throw new NotFoundException(__('Invalid pesocategoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pesocategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The pesocategoria has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pesocategoria could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Pesocategoria.' . $this->Pesocategoria->primaryKey => $id));
			$this->request->data = $this->Pesocategoria->find('first', $options);
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
		$this->Pesocategoria->id = $id;
		if (!$this->Pesocategoria->exists()) {
			throw new NotFoundException(__('Invalid pesocategoria'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pesocategoria->delete()) {
			$this->Session->setFlash(__('The pesocategoria has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The pesocategoria could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
