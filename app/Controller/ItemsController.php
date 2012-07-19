<?php
class ItemsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

	public function beforeFilter() {
        $this->Auth->allow('index', 'view');
    }

    public function index() {
        $this->set('items', $this->Item->find('all'));
    }

	public function admin_index() {
        $this->set('items', $this->Item->find('all'));
    }

    public function view($id) {
        $this->Item->id = $id;
        $this->set('item', $this->Item->read());
    }

	public function add() {
        if ($this->request->is('post')) {
            if ($this->Item->save($this->request->data)) {
                $this->Session->setFlash('The book has been added.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your the book.');
            }
        }
    }
    
    public function edit($id = null) {
    $this->Item->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Item->read();
    } else {
        if ($this->Item->save($this->request->data)) {
            $this->Session->setFlash('Your item has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update your item.');
        }
    }
    }
    
    public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Item->delete($id)) {
        $this->Session->setFlash('The item with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
    }
}