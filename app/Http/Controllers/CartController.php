<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Add a product to the cart
    public function add(Request $request, $productId)
    {
        $request->validate([
            'size' => 'required|string',
        ]);

        $product = Product::findOrFail($productId);
        $user = Auth::user();

        // Create or update the cart item
        $cartItem = CartItem::firstOrCreate([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'size' => $request->size,
        ], [
            'title' => $product->title,          // Store product title
            'price' => $product->price,          // Store product price
            'sku' => $product->sku,               // Store product SKU
            'quantity' => 1,                      // Default quantity
        ]);

        // If the product already exists in the cart, increment the quantity
        if (!$cartItem->wasRecentlyCreated) {
            $cartItem->increment('quantity');
        }

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    // Display the cart
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();
        $cartCount = $cartItems->sum('quantity'); // Calculate total items in the cart

        return view('cart.index', compact('cartItems', 'cartCount'));
    }
    // Remove item from cart
    public function destroy($id)
    {
        $cartItem = CartItem::findOrFail($id);

        // Check if the cart item belongs to the authenticated user
        if ($cartItem->user_id !== Auth::id()) {
            abort(403);
        }

        $cartItem->delete();
        return redirect()->back()->with('success', 'Item removed from cart.');
    }

    // Update cart item quantity
    public function update(Request $request, $id)
    {
        $request->validate([
            'action' => 'required|string|in:increment,decrement',
        ]);

        $cartItem = CartItem::findOrFail($id);

        // Check if the cart item belongs to the authenticated user
        if ($cartItem->user_id !== Auth::id()) {
            abort(403);
        }

        if ($request->action === 'increment') {
            $cartItem->increment('quantity');
        } elseif ($request->action === 'decrement') {
            if ($cartItem->quantity > 1) {
                $cartItem->decrement('quantity');
            } else {
                // Optionally, handle case where quantity is already 1 and decrement is requested
                return response()->json(['message' => 'Quantity cannot be less than 1.'], 400);
            }
        }

        return response()->json(['success' => true]);
    }
}
