<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product, Inventory};

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::with('product')->get();
        return view('inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        return $inventory;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        $inventory = Inventory::with('product')->find($inventory->id);
        return view('inventories.edit',compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $json = json_decode($inventory->adjustments, true);
        $collect = collect($json);
        $new_quantity = $inventory->current_quantity + $request->stock_adjustment;
        $adjustment = [
            'previous'  => $inventory->current_quantity,
            'after'     => $inventory->current_quantity + $request->stock_adjustment,
            'date'      => date('F d Y h:i a'),
            'remarks'   => $request->remarks,
            'user'      => auth()->user()->name,
        ];
        $collect->push($adjustment);
    
        $inventory->current_quantity = $new_quantity;
        $inventory->adjustments = json_encode($collect);
        $inventory->updated_at = now();
        $inventory->save();

        return redirect('/inventories')->with('success',$inventory->product->name . ' has been updated successfully!  ' . $inventory->current_quantity . '  is the new Stock of this Product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
