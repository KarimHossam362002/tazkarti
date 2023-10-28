<?php

namespace App\Http\Controllers\language;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLang($locale){
        App::setLocale($locale);
        Session::put("locale", $locale);
        // dd(Session::get("locale"));
        return redirect()->back();
    }
}
