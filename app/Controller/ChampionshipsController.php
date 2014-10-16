<?php
App::uses('AppController', 'Controller');
/**
 * Championships Controller
 *
 * @property Championship $Championship
 * @property PaginatorComponent $Paginator
 */
class ChampionshipsController extends AppController {

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
		$this->Championship->recursive = 0;
		$this->set('championships', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Championship->exists($id)) {
			throw new NotFoundException(__('Invalid championship'));
		}
		$options = array('conditions' => array('Championship.' . $this->Championship->primaryKey => $id));
		$this->set('championship', $this->Championship->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Championship->create();
			if ($this->Championship->save($this->request->data)) {
				$this->Session->setFlash(__('The championship has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The championship could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Championship->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Championship->exists($id)) {
			throw new NotFoundException(__('Invalid championship'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Championship->save($this->request->data)) {
				$this->Session->setFlash(__('The championship has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The championship could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Championship.' . $this->Championship->primaryKey => $id));
			$this->request->data = $this->Championship->find('first', $options);
		}
		$users = $this->Championship->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Championship->id = $id;
		if (!$this->Championship->exists()) {
			throw new NotFoundException(__('Invalid championship'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Championship->delete()) {
			$this->Session->setFlash(__('The championship has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The championship could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
