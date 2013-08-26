<?php
App::uses('AppController', 'Controller');
/**
 * Compras Controller
 *
 * @property Compra $Compra
 */
class ComprasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Compra->recursive = 0;
		$this->set('compras', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Compra->exists($id)) {
			throw new NotFoundException(__('Invalid compra'));
		}
		$options = array('conditions' => array('Compra.' . $this->Compra->primaryKey => $id));
		$this->set('compra', $this->Compra->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Compra->create();
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash(__('The compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compra could not be saved. Please, try again.'));
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
		if (!$this->Compra->exists($id)) {
			throw new NotFoundException(__('Invalid compra'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash(__('The compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compra could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Compra.' . $this->Compra->primaryKey => $id));
			$this->request->data = $this->Compra->find('first', $options);
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
		$this->Compra->id = $id;
		if (!$this->Compra->exists()) {
			throw new NotFoundException(__('Invalid compra'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Compra->delete()) {
			$this->Session->setFlash(__('Compra deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compra was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
