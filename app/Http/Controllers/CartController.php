<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addToCart(Request $request){
        $id = $request->id;
        $product = Product::find($id);
        $stock = $product->stock;
        $request->validate(
            [
                'quantity' => "required|min:1|max:$stock|integer"
            ]
        );
        $qty = $request->quantity;
        $cart = session()->get('cart');
        if(!$cart){
            $cart = [];
        }
        if(isset($cart[$id])) {
            $cart[$id]['qty'] = $qty;
        } else {
            $cart[$id] = [
                'product' => $product,
                'qty' => $qty
            ];
        }
        session()->put('cart', $cart);
        return redirect('/member');
    }

    public function removeFromCart(Request $request){
        $id = $request->id;
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
