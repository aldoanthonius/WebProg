<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function viewCart(){
        $cart = session()->get('cart');
        if(!$cart){
            $cart = [];
        }
        $n_cart = count($cart);
        $total_price = 0;
        for($i = 0; $i < $n_cart; $i++){
            $__price = $cart[$i][0]->price;
            $__qty = $cart[$i][1];
            $total_price += $__price * $__qty;
        }
        return view('cart', compact('cart', 'total_price'));
    }
}
