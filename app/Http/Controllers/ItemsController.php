<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\View\Components\listitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    //
    public function index(Item $items){
            $items = Auth::user()->items;
            
            return view('home', compact('items'));
    }
}
