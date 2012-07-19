<?php
/*class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
   
    public function login() {
    if ($this->request->is('item')) {
        if ($this->Auth->login())
            $this->redirect($this->Auth->redirect());
        else
            $this->Session->setFlash(__('Invalid username or password, try again'));
    }

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}*/
class UsersController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login','logout');
	}

	public function index() {
	}

	public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

	public function login() {
		if ($this->request->is('post')) {
			if($this->Session->check('User') ) {
				$this->redirect(array('controller'=>'users','action'=>'index'));
			}
			else if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}
?>