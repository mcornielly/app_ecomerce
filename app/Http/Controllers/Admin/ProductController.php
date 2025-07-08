<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return Inertia::render('Admin/Product/Index', compact('products'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quatity = $request->quatity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        // check if product has images upload
        if ($request->hasFile('product_images')) {
            $productImages = $request->file('product_iamges');

            foreach ($productImages as $image) {
                // Generate a uique name for the image using timestttamp and random string
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                // Store the iamge in the public folder with the unique name
                $image->move('product_images', $uniqueName);
                // Create a new product iamge record with the product_id and unique name
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product_images/' . $uniqueName,
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }
}
