<?php
class CartController extends AppController {
    public $components = array('Session');
   
    public function beforeFilter() {
        $this->Auth->allow('index','add','remove','update','clear','checkout');
    }

	public function index()
    {
        $cart = $this->Session->read('cart');
        $coupon = $this->Session->read('coupon');

        if(!(isset($cart))) {
            $this->Session->setFlash('Your shopping cart is empty!');
        }

        $this->set('cart', $cart);
        $this->set('coupon', $coupon);
   }

    public function add($id) {
        $cart = $this->Session->read('cart');
        $cart[$id]++;
        $this->Session->write('cart', $cart);
        $this->redirect('/cart');
    }

    public function remove($id) {
        $cart = $this->Session->read('cart');
        unset($cart[$id]);
        $this->Session->write('cart', $cart);
        $this->redirect('/cart');
    }

    public function update($id) {
        $cart = $this->Session->read('cart');
        $coupon = $this->Session->read('coupon');
                
        foreach ($cart as $id => $quantity): 
            if (isset($_POST["quantity".$id])) {
                $cart[$id] = $_POST["quantity".$id];
            }
        endforeach;

        if (isset($_POST["coupon"])) {
            $coupon = $_POST["coupon"];
        }
            
        if ($coupon == "macrules") {
			$coupon = 20;
            $this->Session->setFlash("$20 off Mac student discount!");
        }
        else if ($coupon == "homayoun") {
			$coupon = 100000;
            $this->Session->setFlash("FREE books for profs! =)");
        }
		else {
			$coupon = 0;
		}

        $this->Session->write('cart', $cart);
        $this->Session->write('coupon', $coupon);
        $this->redirect('/cart');
    }

    public function clear() {
        $this->Session->destroy;
        $this->Session->delete('cart');
        $this->Session->delete('coupon');
        $this->redirect('/cart');
    }

	public function checkout() {
    }
}
?>