<?php
class CartController extends AppController {
 public $components = array('Session');

   
    public function beforeFilter() {
        $this->Auth->allow('add', 'remove','clear', 'index');
    }


   public function add($id) {
	   /*
      $cart = $this->Session->read('cart');
      $product_id = $this->data['Items']['id'];

     // $id = $this->_check($cart, $product_id);
	 $id = 1;
      if($id > 0)
         $this->data['CartItem']['id'] = $id;
      $product = $this->Product->find(array('Product.id' => $product_id));
      $this->data['CartItem']['quantity'] += $this->_quantity($cart, $product_id);
      $this->data['CartItem']['price'] = $product['Product']['price'];
      $this->data['CartItem']['cart_id'] = $cart['Cart']['id'];
      if($this->CartItem->save($this->data))
         $this->redirect('/carts');
		 */

$cart = $this->Session->read('cart');
$cart[$id]++;
$this->Session->write('cart', $cart);
$this->redirect('/cart');

	  
//echo $this->Session->read('Cart.id');
   }

public function remove() {
	$cart = $this->Session->read('cart');
$cart[$id]--;
$this->Session->write('cart', $cart);
$this->redirect('/cart');
}


   public function clear() {

    $this->Session->delete('cart');
 $this->redirect('/cart');
   }
   

   /*function remove() {
      $this->CartItem->del($this->data['CartItem']['id']);
      $this->redirect('/carts');
   }

 
   
   function change() {
      if($this->data['CartItem']['quantity'] < 1) {
         $this->CartItem->del($this->data['CartItem']['id']);
         $this->redirect('/carts');
      } else {
         if($this->CartItem->save($this->data))
            $this->redirect('/carts');
      }
   }
   
   function _check($cart, $product_id) {
      $id = -1;
      foreach($cart['CartItems'] as $item) {
         if($item['product_id'] == $product_id)
            $id = $item['id'];
      }
      return $id;
   }
   
   function _quantity($cart, $product_id) {
      $quantity = 0;
      foreach($cart['CartItems'] as $item) {
         if($item['product_id'] == $product_id)
            $quantity = $item['quantity'];
      }
      return $quantity;
   }
*/
   public function index()
   {
      $cart = $this->Session->read('cart');
      if( !$cart) {
		  $this->Session->setFlash('The shopping cart is empty!');

      }
      $this->set('cart', $cart);
      //$this->set('total', $this->_total($cart));
   }
   
   /*function _total($cart) {
      $total = 0;
      if(!isset($cart['CartItems'])) return 0;
      foreach($cart['CartItems'] as $item)
         $total += $item['price'] * $item['quantity'];
      return $total;
   }*/
   /*
   
   function getCart() {
      $cart = $this->Cartf->get();
      $total = $this->_total($cart);
      if(isset($this->params['requested']))
         return array($cart, $total);
      else {
         $this->set('cart', $cart);
         $this->set('total', $this->_total($cart));
         $this->render('index');
      }
   }
   */
}
?>