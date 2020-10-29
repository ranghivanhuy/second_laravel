<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use File;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.list-product', compact('products'));
    }
    public function create()
    {
        return view('products.create-product');
    }
    public function store(Request $request)
    {
        $input = $request->only('name', 'image', 'description');

        if ($request->hasFile('image'))
        {
            $images[] = $request->file('image');
            $input_img = array();
            foreach ($images[0] as $image) {
                $filename = $image->getInode() . $image->getClientOriginalName();
                $resize = Image::make($image->getRealPath());
                $resize->fit(150, 150)->save(storage_path('app/public/images/thumbnail/'. $filename));
                $resize->fit(400, 400)->save(storage_path('app/public/images/medium/'. $filename));
                $resize->fit(600, 600)->save(storage_path('app/public/images/large/'. $filename));
                $input_img[] = $filename;
            }
            $input['image'] = serialize($input_img);
            Product::create($input);
        }
        
        return redirect()->route('products.list-product');
    }
}
