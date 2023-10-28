<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        if($user->type == 'admin'){
            
            $stores = Store::paginate(5);
            return view('admin.store.index' , compact('stores'));
        }
        else{
            return view('404.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        if($user->type == 'admin')
        return view('admin.store.create');
        else 
        return view('404.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

      
        Store::create([
            'outlet_name' => $request->outlet_name,
            'city' => $request->city,
            'district' => $request->district,
            'address' => $request->address,
            'status' => $request->status,
            'dedicated_to' => $request->dedicated_to,
        ]);
        return back()->with('success' , 'Data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        $user = Auth::user();
        if($user->type == 'admin')
        return view ('admin.store.update' , compact('store'));
        else
        return view('404.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Store $store)
    {
      

            $store->update([
            'outlet_name' => $request->outlet_name,
            'city' => $request->city,
            'district' => $request->district,
            'address' => $request->address,
            'status' => $request->status,
            'dedicated_to' => $request->dedicated_to,

            ]);
            return redirect()->route('store.index')->with('updated' , 'Data updated successfully');
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Store::where('id', $id)->delete();
        return back()->with('success' , "Data deleted successfully");
    }
}
