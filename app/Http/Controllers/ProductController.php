<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(9);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        //Check if the user id is = 1
        if (Auth::user()->id == 1) {
            return view('products.create');
        }
        abort(403);
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        // 1- get image
        $image = $request->image;

        // 2- change it's current name
        $newImageName = time() . '-' . $image->getClientOriginalName();

        // 3- move image to my project
        $image->storeAs('products', $newImageName, 'public');

        // 4- save new name to database record
        $data['image'] = $newImageName;

        Product::create($data);

        return back()->with('ProductCreateStatus', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        //
    }
}
