<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('pages.category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(['name'=>'required|Unique:App\Category']);
        $category = Category::create($request->only('name'));

        return back();
    }

    public function show(Request $id)
    {
        $categories = Category::find($id);
        return view('pages.editcategory', compact('categories'));
    }

    public function edit(Request $request, $id)
    {
        $request->validate(['name'=>'required|Unique:App\Category']);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect('/category');
    }

    public function destroy(Request $request)
    {
        Category::destroy($request->get('id'));

        return redirect('/category');
    }
}
