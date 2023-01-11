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
                    'user_id' => $profile->id,
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
        return $this->get_transaction_history();
    }

    public function get_transaction_history(){
        $profile = DB::table('users')->where('id', Auth::user()->id)->first();
        $transactions = DB::table('transactions')
            ->where('user_id', '=', $profile->id)
            ->get();
        $arr_transactions = [];
        foreach($transactions as $transaction){
            $details = DB::table('transaction_details')
                ->where('transaction_id', '=', $transaction->id)
                ->get();
            $arr_details = [];
            $total_price = 0;
            foreach($details as $detail){
                $product = Product::find($detail->product_id);
                array_push(
                    $arr_details,
                    [
                        'product' => $product->name,
                        'quantity' => $detail->quantity,
                        'price' => $product->price
                    ]
                );
                $total_price += $product->price;
            }
            array_push(
                $arr_transactions,
                [
                    'date' => $transaction->date,
                    'details' => $arr_details,
                    'price' => $total_price
                ]
            );
        }
        return view('transaction_history', compact('arr_transactions'));
    }
}
