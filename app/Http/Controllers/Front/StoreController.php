<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    function index(){
        $stores = Store::where('status',1)->get();
        return view('store.index' , compact('stores'));
    }
}
