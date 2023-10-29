<?php

namespace App\Http\Controllers;

use App\Models\Entertainment;
use App\Models\Faq;
use App\Models\Matche;
use App\Models\Stadium;
use App\Models\Store;
use App\Models\Tazkara;
use App\Models\Team;
use App\Models\Tournment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $users_count = User::count();
        $tazkaras_count = Tazkara::count();
        $entertainments_count = Entertainment::count();
        $stadiums_count = Stadium::count();
        $matches_count = Matche::count();
        $tournments_count = Tournment::count();
        $teams_count = Team::count();
        $stores_count = Store::count();
        $faqs_count = Faq::count();
        $user = Auth::user();
        if ($user->type == 'admin'){
        return view('admin.layout' , compact(
            'users_count',
            'tazkaras_count',
            'entertainments_count',
            'stadiums_count',
            'matches_count',
            'tournments_count',
            'teams_count',
            'stores_count',
            'faqs_count',
        ));
    }
    else{
        return view('404.index');
    }
    }
}
