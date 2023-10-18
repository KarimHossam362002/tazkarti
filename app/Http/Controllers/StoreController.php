<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::paginate(5);
        return view('admin.store.index' , compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store.create');
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
        return view ('admin.store.update' , compact('store'));
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
