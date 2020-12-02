<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(15);
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories =Category::all();
        return view('admin.product.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|string',
            'amount' => 'required',
            'image' => 'nullable|max:2000|mimes:jpeg,jpg,png,gif',
        ]);
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->amount = $request->amount;
        $product->desc_short = $request->desc_short;
        $product->description = $request->description;
        if ($request->hasFile('image'))
        {
            $fileName = $request->file('image')->store('public/product');
            Image::make(storage_path('app/'.$fileName) )->resize(600, 400)->save(storage_path('app/'.$fileName));
            $product->image = $fileName;
        }
        $product->save();
        return redirect()->route('admin.products.list')->with('success','محصول جدید با موفقیت ثبت گردید.');
    }

    public function edit ($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit' , compact('product','categories'));
    }

    public function update($id , Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|string',
            'amount' => 'required',
            'image' => 'nullable|max:2000|mimes:jpeg,jpg,png,gif',
        ]);
        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->amount = $request->amount;
        $product->desc_short = $request->desc_short;
        $product->description = $request->description;
        if ($request->hasFile('image'))
        {
            Storage::delete($product->image);
            $fileName = $request->file('image')->store('public/shop');
            Image::make(storage_path('app/'.$fileName) )->resize(600, 400)->save(storage_path('app/'.$fileName));
            $product->image = $fileName;
        }
        $product->save();
        return redirect()->route('admin.products.list')->with('success','محصول با موفقیت ویرایش گردید.');

    }
}
