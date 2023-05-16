<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\View\Components\listitem;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    //
    public function index(Item $items){
        return view('home', 
        [
            "items" => $items::all()
        ]);
    }
}
