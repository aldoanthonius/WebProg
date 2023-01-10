<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function viewProductMember(){
        $products = Product::Paginate(8);
        return view('member')->with('products', $products);
    }
    public function viewProductAdmin(){

        $products = Product::Paginate(8);
        return view('admin')->with('products', $products);
    }
    public function viewSearchPageAdmin(Request $request){
        $products = Product::where('name',"LIKE", "%$request->search%")->simplePaginate(4);
        return view('adminSearch')->with('products', $products);
    }
    public function viewSearchPageMember(Request $request){
        $products = Product::where('name',"LIKE", "%$request->search%")->simplePaginate(4);
        return view('memberSearch')->with('products', $products);
    }
}
