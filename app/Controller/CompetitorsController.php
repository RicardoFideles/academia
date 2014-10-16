<?php
App::uses('AppController', 'Controller');
/**
 * Competitors Controller
 *
 * @property Competitor $Competitor
 * @property PaginatorComponent $Paginator
 */
class CompetitorsController extends AppController {

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
		$this->Competitor->recursive = 0;
		$this->set('competitors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Competitor->exists($id)) {
			throw new NotFoundException(__('Invalid competitor'));
		}
		$options = array('conditions' => array('Competitor.' . $this->Competitor->primaryKey => $id));
		$this->set('competitor', $this->Competitor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Competitor->create();
			if ($this->Competitor->save($this->request->data)) {
				$this->Session->setFlash(__('The competitor has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competitor could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$teams = $this->Competitor->Team->find('list');
		$pesocategorias = $this->Competitor->Pesocategoria->find('list');
		$idadecategorias = $this->Competitor->Idadecategoria->find('list');
		$faixas = $this->Competitor->Faixa->find('list');
		$teachers = $this->Competitor->Teacher->find('list');
		$championships = $this->Competitor->Championship->find('list');
		$this->set(compact('teams', 'pesocategorias', 'idadecategorias', 'faixas', 'teachers', 'championships'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Competitor->exists($id)) {
			throw new NotFoundException(__('Invalid competitor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Competitor->save($this->request->data)) {
				$this->Session->setFlash(__('The competitor has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competitor could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Competitor.' . $this->Competitor->primaryKey => $id));
			$this->request->data = $this->Competitor->find('first', $options);
		}
		$teams = $this->Competitor->Team->find('list');
		$pesocategorias = $this->Competitor->Pesocategoria->find('list');
		$idadecategorias = $this->Competitor->Idadecategoria->find('list');
		$faixas = $this->Competitor->Faixa->find('list');
		$teachers = $this->Competitor->Teacher->find('list');
		$championships = $this->Competitor->Championship->find('list');
		$this->set(compact('teams', 'pesocategorias', 'idadecategorias', 'faixas', 'teachers', 'championships'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Competitor->id = $id;
		if (!$this->Competitor->exists()) {
			throw new NotFoundException(__('Invalid competitor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Competitor->delete()) {
			$this->Session->setFlash(__('The competitor has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The competitor could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
