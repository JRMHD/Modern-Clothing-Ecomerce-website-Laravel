<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkoutForm()
    {
        $user = Auth::user();
        $cartItems = CartItem::where('user_id', $user->id)->with('product')->get();
        $totalAmount = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        // Get all user addresses
        $addresses = $user->addresses;

        return view('checkout', compact('cartItems', 'totalAmount', 'addresses'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'address_id' => 'required|exists:addresses,id',
            'contact_phone' => 'required|string',
            'order_note' => 'nullable|string',
        ]);

        $user = Auth::user();
        $cartItems = CartItem::where('user_id', $user->id)->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Retrieve the selected address
        $address = Address::findOrFail($request->address_id);

        // Create the order
        $order = Order::create([
            'user_id' => $user->id,
            'shipping_address' => $address->address_line_1 . ', ' . $address->city . ', ' . $address->state,
            'total_amount' => $cartItems->sum(function ($item) {
                return $item->price * $item->quantity;
            }),
            'contact_phone' => $request->contact_phone, // Save contact phone
            'order_note' => $request->order_note, // Save order note
        ]);

        // Create order items
        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'size' => $cartItem->size,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->price,
            ]);
        }

        // Clear the cart
        CartItem::where('user_id', $user->id)->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    }


    public function viewOrders()
    {
        // Alternative 1: Use the Order model directly
        $orders = Order::where('user_id', Auth::id())
            ->with('orderItems.product')
            ->get();

        // Alternative 2: Get the user first
        // $user = User::find(Auth::id());
        // $orders = $user->orders()->with('orderItems.product')->get();

        // Alternative 3: Use eager loading
        // $user = User::with('orders.orderItems.product')
        //              ->find(Auth::id());
        // $orders = $user->orders;

        return view('orders.index', compact('orders'));
    }
}
