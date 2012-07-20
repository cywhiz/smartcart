<?php
class CartController extends AppController
{
    public function beforeFilter() {
        $this->Auth->allow('add','index');
    }

	 public function index() {
		$this->Session->read('cart');
    }

	public function add($id) {
		$cart = $this->Session->read('cart');
		$this->Session->write('cart',[$id]);
    }
	
	public function clear() {
		$cart = $this->Session->destroy();
    }
}
?>