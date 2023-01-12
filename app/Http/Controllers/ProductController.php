<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function addItem(){
        return view('adminAddItem');
    }

    public function addedItem(Request $request){
        $request->validate([
            'clothesName' => 'required|string|min:5|max:20|unique:products,name',
            'clothesPrice' => 'required|integer|gte:1000',
            'clothesDesc' => 'required|min:5',
            'clothesStock' => 'required|integer|gte:1',
            'clothesImage' => 'required|mimes:jpeg,jpg,png'
        ]);
        $images = $request->file('clothesImage');
        $addImages = $images->getClientOriginalName();

        Storage::putFileAs('/public/images/', $images, $addImages);
        $imageLink = 'images/' . $addImages;

        DB::table('products')->insert([
            'name' => $request->clothesName,
            'price' => $request->clothesPrice,
            'description' => $request->clothesDesc,
            'stock' => $request->clothesStock,
            'image' => $imageLink
        ]);
        return redirect('/admin')->with('addingItem', 'Successfully added item!');
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
