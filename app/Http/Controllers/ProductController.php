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
        $products = Product::where('name',"LIKE", "%$request->search%")->simplePaginate(8);
        return view('adminSearch')->with('products', $products);
    }
    public function viewSearchPageMember(Request $request){
        $products = Product::where('name',"LIKE", "%$request->search%")->simplePaginate(8);
        return view('memberSearch')->with('products', $products);
    }

    public function getDetails($id){
        $product = Product::find($id);
        return view('product_detail', compact('product'));
    }

    public function getDetailsAdmin($id){
        $product = Product::find($id);
        return view('admin_product_detail', compact('product'));
    }

    public function deleteItem(Request $request){
        Product::find($request->id)->delete();
        return redirect('/admin');
    }
}
