<?php
App::uses('AppController', 'Controller');
/**
 * Faixas Controller
 *
 * @property Faixa $Faixa
 * @property PaginatorComponent $Paginator
 */
class FaixasController extends AppController {

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
		$this->Faixa->recursive = 0;
		$this->set('faixas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Faixa->exists($id)) {
			throw new NotFoundException(__('Invalid faixa'));
		}
		$options = array('conditions' => array('Faixa.' . $this->Faixa->primaryKey => $id));
		$this->set('faixa', $this->Faixa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Faixa->create();
			if ($this->Faixa->save($this->request->data)) {
				$this->Session->setFlash(__('The faixa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faixa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Faixa->exists($id)) {
			throw new NotFoundException(__('Invalid faixa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Faixa->save($this->request->data)) {
				$this->Session->setFlash(__('The faixa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faixa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Faixa.' . $this->Faixa->primaryKey => $id));
			$this->request->data = $this->Faixa->find('first', $options);
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
		$this->Faixa->id = $id;
		if (!$this->Faixa->exists()) {
			throw new NotFoundException(__('Invalid faixa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Faixa->delete()) {
			$this->Session->setFlash(__('The faixa has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The faixa could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
