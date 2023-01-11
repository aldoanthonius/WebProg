<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function checkout(Request $request){
        $cart = session()->get('cart');
        if(count($cart) > 0){
            $profile = DB::table('users')->where('id', Auth::user()->id)->first();
            date_default_timezone_set('Asia/Jakarta');
            $transaction_id = DB::table('transactions')->insertGetId(
                [
                    'date' => date('Y-m-d')
                ]
            );
            foreach($cart as $key => $entry){
                DB::table('transaction_details')->insert(
                    [
                        'transaction_id' => $transaction_id,
                        'product_id' => $entry['product']->id,
                        'quantity' => $entry['qty']
                    ]
                );
                $stock = Product::find($entry['product']->id)->stock;
                DB::table('products')
                ->where('id', '=', $entry['product']->id)
                ->update(
                    [
                        'stock' => $stock - $entry['qty']
                    ]
                );
            }
        }
        session()->put('cart', []);
        return redirect('/member');
    }
}
