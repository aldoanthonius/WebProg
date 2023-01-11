<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{

    public function addToCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart');
        if(!$cart){
            $cart = [];
        }
        if(isset($cart[$id])) {
            $cart[$id]['qty'] += 1;
        } else {
            $cart[$id] = [
                'product' => $product,
                'qty' => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect('/member');
    }

    public function removeFromCart($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
        return $this->viewCart();
    }

    public function viewCart(){
        $cart = session()->get('cart');
        if(!$cart){
            $cart = [];
        }
        $total_price = 0;
        foreach($cart as $key => $entry) {
            $__price = $entry['product']->price;
            $__qty = $entry['qty'];
            $total_price += $__price * $__qty;
        }
        return view('cart', compact('cart', 'total_price'));
    }

}
