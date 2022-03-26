<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function  index(){
        return view('product');
    }

    function create(){
     return view('add_product');
    }

    function store(Request $request){

        $product = new Product();
        if ($request->hasFile('image')){
            $product->name = $request->name;
            $product->price = $request->price;
            $product->country = $request->country;
            $product->image = $request->file('image')->store('images');
        }else{
            $product->name = $request->name;
            $product->price = $request->price;
            $product->country = $request->country;
        }
        $product->save();
        return redirect('/product');
    }

    function edit(Request $request){
       $id = $request->id;
       $product = Product::where("id",$id)->get();

       $p = [];
       foreach ($product as $item){
           $p['id'] = $item->id;
           $p['name'] = $item->name;
           $p['price'] = $item->price;
           $p['country'] = $item->country;
           $p['image'] = $item->image;
       }

       return view('edit_product',['product'=>$p]);
    }

    function update(Request  $request){
        $id=$request->id;

        $product = Product::find($id);
        if ($request->hasFile('image')){
            $product->name = $request->name;
            $product->price = $request->price;
            $product->country = $request->country;
            $product->image = $request->file('image')->store('images');
        }else{
            $product->name = $request->name;
            $product->price = $request->price;
            $product->country = $request->country;
        }
        $product->save();

        return redirect('/product');
    }


    function destroy(Request  $request){
      $id  = $request->id;

      Product::destroy($id);

      return redirect('/product');
    }
}
