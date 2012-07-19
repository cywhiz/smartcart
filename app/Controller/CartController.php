<?php
class CartController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

	public function beforeFilter() {
        $this->Auth->allow('index');
    }

    public function index() {
		$this->Session->read('cart');
    }

	public function add() {
		$cart = $this->Session->read('Shop.Cart');
		$this->set('items', $cart['Items']);
    }
	
	public function clear() {
		$cart = $this->Session->read('Shop.Cart');
		$this->set('items', $cart['Items']);
    }
}
?>