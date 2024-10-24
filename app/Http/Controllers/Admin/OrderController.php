<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems.product')->orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
    }


    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled'
        ]);

        $order->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Order status updated.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted.');
    }

    public function dashboard()
    {
        // Fetch total orders
        $totalOrders = Order::count();

        // Fetch total sales (assuming you have a 'total_amount' column in the orders table)
        $totalSales = Order::sum('total_amount');

        // Fetch recent orders (limit to 5)
        $recentOrders = Order::orderBy('created_at', 'desc')->limit(5)->get();

        // Fetch total products
        $totalProducts = Product::count();

        // Fetch recent products (limit to 5)
        $recentProducts = Product::orderBy('created_at', 'desc')->limit(5)->get();

        // Pass all the data to the dashboard view
        return view('admin.dashboard', compact('totalOrders', 'totalSales', 'recentOrders', 'totalProducts', 'recentProducts'));
    }
}
