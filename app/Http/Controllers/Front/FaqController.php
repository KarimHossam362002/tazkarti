<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    function index(){
        $faqs = Faq::where('status',1)->get();
        return view('faq.index' , compact('faqs'));
    }
}
