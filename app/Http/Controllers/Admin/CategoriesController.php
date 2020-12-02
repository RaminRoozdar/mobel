<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->orderBy('id','asc')->get();
        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string',
        ]);
        $category = new Category();
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->save();
        return redirect()->route('admin.categories.list')->with('success','گروه با موفقیت ایجاد گردید.');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request,$id )
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string',
        ]);
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->save();
        return redirect()->route('admin.categories.list')->with('success','اطلاعات با موفقیت به روزرسانی گردید.');
    }
}
