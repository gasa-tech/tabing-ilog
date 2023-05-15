<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class PosController extends Controller
{
   
    public function index()
    {
        return view('pos.index');
    }
}
