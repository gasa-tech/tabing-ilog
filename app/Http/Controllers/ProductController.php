<?php

namespace App\Http\Controllers;

use App\Models\{Product, Inventory, Category, Supplier};
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
            'category',
            'supplier',
            'name',   
            'brand',
            'primary_unit',
            'purchase_price',   
            'selling_price',
            'barcode',
            'current_quantity',   
            'reorder_level',   
        ];

        return view('products.import',compact('columns')); 
    }

    public function import_post(Request $request)
    {
        // return $request;
        $success_count = 0;
        $fail_count = 0;
        // return $request;
        foreach($request->import as $item)
        {
            if($item['category'] != null) 
            {
                $new = new Product;
                $new->name = $item['name'];
                $new->brand = $item['brand'];
                $new->primary_unit = $item['primary_unit'];
                $new->purchase_price = $item['purchase_price'];
                $new->selling_price = $item['selling_price'];
                $new->barcode = $item['barcode'];

                $category_exist = Category::where('name', $item['category'])->first();

                if($category_exist)
                {
                    $new->category_id = $category_exist->id;
                }
                else {
                    $new_category = new Category;
                    $new_category->name = $item['category'];
                    $new_category->save();
                    $new->category_id = $new_category->id;
                }
                
                $supplier_exist = Supplier::where('name', $item['supplier'])->first();

                if($supplier_exist)
                {
                    $new->supplier_id = $supplier_exist->id;
                }
                else {
                    $new_supplier = new Supplier;
                    $new_supplier->name = $item['supplier'];
                    $new_supplier->save();
                    $new->supplier_id = $new_supplier->id;
                }
                $new->save();

                $new_inventory = new Inventory;
                $new_inventory->product_id = $new->id;
                $new_inventory->current_quantity = $item['current_quantity'];
                $new_inventory->reorder_level = $item['reorder_level'];

                $new_inventory->save();

                $success_count++;
            }
        }

        $message = $success_count.' items successfully imported! ';
        return redirect()->back()->with('status',$message);
    }
}
