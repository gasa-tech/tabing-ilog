<?php

namespace App\Http\Controllers;

use App\Models\{Product, Inventory};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
    
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->primary_unit = $request->primary_unit;
        $product->purchase_price = $request->purchase_price;
        $product->selling_price = $request->selling_price;    
        $product->barcode = $request->barcode;
        $product->save();

        $inventory = new Inventory;
        $inventory->product_id = $product->id;
        $inventory->reorder_level = $request->reorder_level;
        $inventory->current_quantity = $request->current_quantity;
        $inventory->save();

        return redirect('/products')->with('success','Record saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->primary_unit = $request->primary_unit;
        $product->purchase_price = $request->purchase_price;
        $product->selling_price = $request->selling_price;    
        $product->barcode = $request->barcode;
        $product->save();

        return redirect('/products')->with('success','Record saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        $del_inventory = Inventory::where('product_id', $product->id)->first();
        
        $del_inventory->delete();

        return redirect('/products')->with('success','Record successfully deleted');
    }

    public function import_get()
    {
        $columns = [
            'ID',
            'Name',
            'barcode',
            
        ];

        return view('products.import',compact('columns')); 
    }
}
