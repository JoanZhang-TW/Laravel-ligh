<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;
use App\Product;

class ProductController extends Controller
{
    public function lightUpload()
    {
        return view('product');
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->price = $request->input('price');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/product/',$filename);
            $product->image = $filename;
        } else {
            return $request;
            $product->image = "";
        }
        $product->save();

        return view('product')->with('product',$product);
    }

    public function display()
    {
        $product = Product::all();
        $product = DB::table('products')->paginate(2);
        return view('productform')->with('product',$product);
        return view('productupdateform', ['product' => $product]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('productupdateform')->with('product',$product);
    }

    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        
        $product->name = $request->input('name');
        $product->price = $request->input('price');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/product/',$filename);
            $product->image = $filename;
        } 
        $product->save();

        return redirect('/productpage')->with('product',$product);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/productpage')->with('product',$product);
    }

    public function productdetail($id)
    {
        $product = Product::find($id);
        return view('/productdetail')->with('product',$product);
    }

}
