<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\View\Components\listitem;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    //
    public function show(Items $items){
        return view('home', 
        [
            "items" => $items::all()
        ]);
    }
}
