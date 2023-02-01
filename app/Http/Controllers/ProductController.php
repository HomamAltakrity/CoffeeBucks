<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public $timestamps = false;

    public function index(){
        return view('products.index', [
            'heading' => 'All Products',
            'products' => Product::paginate(4)
        ]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        
        $formData = $request->validate([
            'name'=>'required',
            'origin'=>'required',
            'price'=>'required'
        ]);

        if($request->hasFile('photo')){
            $formData['photo'] = $request->file('photo')->store('logos', 'public');
        }
        Product::create($formData);
        return redirect('/coffeebucks/public/')->with('message', 'Product Created Successfully..');
    }

    public function edit(Product $product){
        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product){
        
        $formData = $request->validate([
            'name'=>'required',
            'origin'=>'required',
            'price'=>'required'
        ]);

        if($request->hasFile('photo')){
            $formData['photo'] = $request->file('photo')->store('logos', 'public');
        }
       $product->update($formData);
        return back()->with('message', 'Product Has Been Edited Successfully..');
    }

    public function delete(Product $product){
        $product->delete();
        return redirect('/coffeebucks/public/')->with('message', 'Product Deleted Successfully..');
    }

    public function show(Product $product){
        return view('products.show', [
            'product' => $product
        ]);
    }
}
