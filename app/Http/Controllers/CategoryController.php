<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.category.index' , compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $request->validate(['image'=>'required']);
        $ext = $request->image->extension();
        $newName = 'Category'.time().rand(0,mt_getrandmax()). '.'.$ext;
        $request->image->move(public_path('assets/images/categories'),$newName);

        Category::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' => $newName,
            'status' => $request->status,
        ]);
        return back()->with('success' , "Data created successfully");
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
    public function edit(Category $category)
    {
        return view('admin.category.update' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $request->validate([
            'image' => 'sometimes',
        ]);

        if($request->hasFile('image')){

            $ext = $request->image->extension();
            $newName = "Category".time() . rand(0, mt_getrandmax()) . '.' . $ext;
            $request->image->move(public_path('assets/images/categories'), $newName);
        }
        $category->update([
            'id' => $request->id,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image'=> $newName ?? $request->image,
            'status' => $request->status,

        ]);
        return redirect()->route('category.index')->with('updated', "Data updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id',$id)->delete();
        return back()->with('success','Data deleted successfully');
    }
}
