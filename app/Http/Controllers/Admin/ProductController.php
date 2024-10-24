<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Predefined categories for T-shirt brands
    protected $categories = [
        'ICEberg',
        'Christian Dior',
        'Givenchy',
        'Gucci',
        'Fendi',
        'Hanes',
        'Gildan',
        'Hack Clothing',
        'American Apparel',
        'Bella+Canvas',
        'Next Level Apparel',
        'Champion',
        'Fruit of the Loom',
        'Comfort Colors',
        'Prada',
        'Valentino',
        'Balenciaga',
        'Kenzo',
        'Others'
    ];

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get(); // Order products by created_at
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        return view('admin.products.create', ['categories' => $this->categories]);
    }

    /**
     * Shop page with filtering logic by category and price.
     */
    public function shop()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(12); // Order products by created_at
        return view('shop', [
            'products' => $products,
            'categories' => $this->categories,
        ]);
    }

    // AJAX-based filtering logic for category and price
    public function filterProducts(Request $request)
    {
        $query = Product::query();

        // Apply category filter if selected
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        // Apply price filter if selected
        if ($request->has('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Get the filtered products
        $products = $query->orderBy('created_at', 'desc')->get();

        // Return a JSON response with the rendered HTML of the products
        return response()->json([
            'products' => view('profile.partials.product_list', compact('products'))->render(),
        ]);
    }

    public function show(Product $product)
    {
        // Get 5 recent products excluding the current product
        $recentProducts = Product::where('id', '!=', $product->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('shop_details', compact('product', 'recentProducts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'required',
            'color' => 'required',
            'sizes' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'images.*' => 'nullable|image'
        ]);

        // Auto-generate SKU
        $sku = $this->generateSku();

        $image = $request->file('image')->store('products', 'public');
        $images = [];
        if ($request->has('images')) {
            foreach ($request->file('images') as $file) {
                $images[] = $file->store('products', 'public');
            }
        }

        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'discounted_price' => $request->discounted_price,
            'stock' => $request->stock,
            'category' => $request->category,
            'color' => $request->color,
            'sizes' => $request->sizes,
            'tags' => $request->tags,
            'sku' => $sku,
            'description' => $request->description,
            'image' => $image,
            'images' => $images
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    // Method to generate SKU
    private function generateSku()
    {
        $latestProduct = Product::orderBy('id', 'desc')->first();
        $nextSku = $latestProduct ? intval(substr($latestProduct->sku, 1)) + 1 : 2065; // Assuming SKU is in format "PXXXX"

        return 'P' . str_pad($nextSku, 4, '0', STR_PAD_LEFT); // Generate SKU as PXXXX
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $this->categories
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'required',
            'color' => 'required',
            'sizes' => 'required',
            'sku' => 'required|unique:products,sku,' . $product->id,
            'description' => 'required',
            'image' => 'nullable|image',
            'images.*' => 'nullable|image'
        ]);

        $image = $product->image;
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $product->image);
            $image = $request->file('image')->store('products', 'public');
        }

        $images = $product->images;
        if ($request->has('images')) {
            foreach ($request->file('images') as $file) {
                $images[] = $file->store('products', 'public');
            }
        }

        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'discounted_price' => $request->discounted_price,
            'stock' => $request->stock,
            'category' => $request->category,
            'color' => $request->color,
            'sizes' => $request->sizes,
            'tags' => $request->tags,
            'sku' => $request->sku, // Allow updating of SKU if necessary
            'description' => $request->description,
            'image' => $image,
            'images' => $images
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        Storage::delete('public/' . $product->image);
        foreach ($product->images as $image) {
            Storage::delete('public/' . $image);
        }
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
