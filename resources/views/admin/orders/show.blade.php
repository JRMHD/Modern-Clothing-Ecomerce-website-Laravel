@extends('layouts.admin')

@section('content')
    <style>
        * {
            box-sizing: border-box;
            -webkit-overflow-scrolling: touch;
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .order-container {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(135deg, #ECF5F4, #ffffff);
            padding: 15px;
            overflow-x: hidden;
        }

        .content-wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .header-card {
            width: 100%;
            background: white;
            border-radius: 20px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            margin-bottom: 25px;
            overflow: hidden;
        }

        .header-content {
            padding: 25px;
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: white;
        }

        .details-card {
            width: 100%;
            background: white;
            border-radius: 20px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            padding: 25px;
            margin-bottom: 25px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }

        .info-item {
            padding: 15px;
            background: #f8fafc;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            word-break: break-word;
        }

        .info-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
            display: block;
        }

        .info-value {
            color: #64748b;
        }

        .status-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 25px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 10px;
        }

        .form-group {
            width: 100%;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 14px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-success {
            background: linear-gradient(to right, #2ecc71, #27ae60);
            color: white;
        }

        .btn-secondary {
            background: linear-gradient(to right, #95a5a6, #7f8c8d);
            color: white;
        }

        .order-items {
            width: 100%;
            margin-top: 20px;
        }

        .item-card {
            background: #f8fafc;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #e2e8f0;
        }

        .item-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #edf2f7;
        }

        .item-row:last-child {
            border-bottom: none;
        }

        .item-label {
            font-weight: 600;
            color: #2c3e50;
        }

        .product-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        @media (min-width: 768px) {
            .info-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .status-form {
                flex-direction: row;
                align-items: flex-end;
            }

            .btn {
                width: auto;
                margin-bottom: 0;
            }

            .form-group {
                flex: 1;
            }
        }

        @media (min-width: 1024px) {
            .info-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>

    <div class="order-container">
        <div class="content-wrapper">
            <div class="header-card">
                <div class="header-content">
                    <h2 style="margin: 0; font-size: 24px; font-weight: 600;">Order #{{ $order->id }}</h2>
                </div>
            </div>

            <div class="details-card">
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">User</span>
                        <span class="info-value">{{ $order->user->name }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Shipping Address</span>
                        <span class="info-value">{{ $order->shipping_address }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Contact Phone</span>
                        <span class="info-value">{{ $order->contact_phone }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Order Note</span>
                        <span class="info-value">{{ $order->order_note ?? 'No note provided' }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Current Status</span>
                        <span class="info-value">{{ ucfirst($order->status) }}</span>
                    </div>
                </div>

                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST" class="status-form">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="status" class="info-label">Update Status:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing
                            </option>
                            <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                            <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered
                            </option>
                            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Update Status</button>
                </form>

                <h3 style="color: #2c3e50; margin-bottom: 15px;">Order Items</h3>
                <div class="order-items">
                    @foreach ($order->orderItems as $item)
                        <div class="item-card">
                            <div class="item-row">
                                <span class="item-label">Product</span>
                                <span>{{ $item->product->title }}</span>
                            </div>
                            <div class="item-row">
                                <span class="item-label">Quantity</span>
                                <span>{{ $item->quantity }}</span>
                            </div>
                            <div class="item-row">
                                <span class="item-label">Size</span>
                                <span>{{ $item->size }}</span>
                            </div>
                            <div class="item-row">
                                <span class="item-label">Color</span>
                                <span>{{ $item->product->color }}</span>
                            </div>
                            <div class="item-row">
                                <span class="item-label">SKU</span>
                                <span>{{ $item->product->sku }}</span>
                            </div>
                            <div class="item-row">
                                <span class="item-label">Image</span>
                                @if ($item->product->image)
                                    <img src="{{ asset('storage/' . $item->product->image) }}" alt="Product Image"
                                        class="product-image">
                                @else
                                    <span>No Image Available</span>
                                @endif
                            </div>
                            <div class="item-row">
                                <span class="item-label">Price</span>
                                <span>${{ number_format($item->price, 2) }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div style="margin-top: 25px;">
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back to Orders</a>
                </div>
            </div>
        </div>
    </div>
@endsection
