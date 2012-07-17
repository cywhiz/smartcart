<?php
class CartController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
		$cart = $this->Session->read('Shop.Cart');
		$this->set('items', $cart['Items']);
		$this->set('cartTotal', $cart['Property']['cartTotal']);
    }

    public function view($id) {
        $this->Item->id = $id;
        $this->set('item', $this->Item->read());

    }

	public function add() {
		/*if ($this->request->is('post')) {
			$id = $this->request->data['Item']['id'];
			$item = $this->Cart->add($id, 1);
		}
		if(!empty($item)) {
			$this->Session->setFlash($item['Item']['title'] . ' was added to your shopping cart.');
		}
		$this->redirect($this->referer());*/

$this->Session->setFlash($item['Item']['title'] . ' was added to your shopping cart.');
$this->redirect($this->referer());
    }
    
    public function edit($id = null) {
		$this->Cart->update($this->request->data['Item']['id'], 1);
    }
    
    public function delete($id) {
		$product = $this->Cart->remove($id);
		if(!empty($product)) {
			$this->Session->setFlash($product['Item']['title'] . ' was removed from your shopping cart');
		}
		$this->redirect(array('action' => 'cart'));
    }
}