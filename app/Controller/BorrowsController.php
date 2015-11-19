<?php
App::uses('AppController', 'Controller');
/**
 * Borrows Controller
 *
 * @property Borrow $Borrow
 * @property PaginatorComponent $Paginator
 */
class BorrowsController extends AppController {

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
		$this->Borrow->recursive = 0;
		$this->set('borrows', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Borrow->exists($id)) {
			throw new NotFoundException(__('Invalid borrow'));
		}
		$options = array('conditions' => array('Borrow.' . $this->Borrow->primaryKey => $id));
		$this->set('borrow', $this->Borrow->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Borrow->create();
			if ($this->Borrow->save($this->request->data)) {
				$this->Session->setFlash(__('The borrow has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The borrow could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Borrow->Client->find('list');
		$films = $this->Borrow->Film->find('list',array(
                    'conditions'=>array(
                        'Film.status_id !='=>3
                    )
                ));
		$this->set(compact('clients', 'films'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Borrow->exists($id)) {
			throw new NotFoundException(__('Invalid borrow'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Borrow->save($this->request->data)) {
				$this->Session->setFlash(__('The borrow has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The borrow could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Borrow.' . $this->Borrow->primaryKey => $id));
			$this->request->data = $this->Borrow->find('first', $options);
		}
		$clients = $this->Borrow->Client->find('list');
		$films = $this->Borrow->Film->find('list');
		$this->set(compact('clients', 'films'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Borrow->id = $id;
		if (!$this->Borrow->exists()) {
			throw new NotFoundException(__('Invalid borrow'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Borrow->delete()) {
			$this->Session->setFlash(__('The borrow has been deleted.'));
		} else {
			$this->Session->setFlash(__('The borrow could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function findperdate(){
        $query = $this->request->data['Borrow']['find']; // recebe o parametro de pesquisa, com Modelo=Task e input-id=buscador
        $date=$query['year']."-".$query['month']."-".$query['day'];
        $conditions = array(
            'conditions' => array(
                'Borrow.retrievedate LIKE' => "%$date%"
            )
        );

        $this->Paginator->settings = $conditions;
        $borrows = $this->Paginator->paginate('Borrow');
        $this->set(compact('borrows'));
        }
}
