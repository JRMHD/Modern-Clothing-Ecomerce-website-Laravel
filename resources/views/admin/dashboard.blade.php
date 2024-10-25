@extends('layouts.admin')

@section('content')
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            padding: 15px;
            min-height: 100vh;
            background: linear-gradient(135deg, #ECF5F4, #ffffff);
        }

        .content-wrapper {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .header-card {
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

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stats-card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .stats-icon {
            width: 50px;
            height: 50px;
            background: #ECF5F4;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .data-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .card-header {
            padding: 20px;
            border-bottom: 1px solid #edf2f7;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-wrapper {
            overflow-x: auto;
            padding: 10px;
        }

        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            display: inline-block;
        }

        .category-tag {
            background: #ECF5F4;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            display: inline-block;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: 0 10px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .header-content h2 {
                font-size: 20px !important;
            }

            .stats-card {
                padding: 20px;
            }

            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .table-wrapper {
                margin: 0 -10px;
            }

            .status-badge,
            .category-tag {
                padding: 4px 8px;
                font-size: 12px;
            }
        }

        /* Table styles that work better on mobile */
        .responsive-table {
            width: 100%;
            border-collapse: collapse;
        }

        .responsive-table th {
            background: #f8fafc;
            padding: 15px;
            text-align: left;
            color: #64748b;
            font-weight: 500;
            font-size: 13px;
            white-space: nowrap;
        }

        .responsive-table td {
            padding: 15px;
            border-bottom: 1px solid #edf2f7;
        }

        @media (max-width: 640px) {
            .responsive-table {
                display: block;
            }

            .responsive-table thead {
                display: none;
            }

            .responsive-table tbody {
                display: block;
            }

            .responsive-table tr {
                display: block;
                margin-bottom: 15px;
                border: 1px solid #edf2f7;
                border-radius: 8px;
                padding: 10px;
            }

            .responsive-table td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                border: none;
            }

            .responsive-table td::before {
                content: attr(data-label);
                font-weight: 500;
                margin-right: 10px;
                color: #64748b;
            }
        }
    </style>

    <div class="dashboard-container">
        <div class="content-wrapper">
            <!-- Header Card -->
            <div class="header-card">
                <div class="header-content">
                    <h2 style="margin: 0 0 10px 0; font-size: 24px; font-weight: 600;">{{ __('Admin Dashboard') }}</h2>
                    <p style="margin: 0; opacity: 0.9;">
                        Welcome, {{ Auth::guard('admin')->check() ? Auth::guard('admin')->user()->name : 'Guest' }}
                    </p>

                </div>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <!-- Total Orders -->
                <div class="stats-card">
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <div style="color: #888; font-size: 15px; margin-bottom: 8px;">Total Orders</div>
                            <div style="font-size: 28px; font-weight: bold; color: #2c3e50;">{{ $totalOrders }}</div>
                        </div>
                        <div class="stats-icon">📦</div>
                    </div>
                </div>

                <!-- Total Products -->
                <div class="stats-card">
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <div style="color: #888; font-size: 15px; margin-bottom: 8px;">Total Products</div>
                            <div style="font-size: 28px; font-weight: bold; color: #2c3e50;">{{ $totalProducts }}</div>
                        </div>
                        <div class="stats-icon">🛍️</div>
                    </div>
                </div>

                <!-- Total Sales -->
                <div class="stats-card">
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <div style="color: #888; font-size: 15px; margin-bottom: 8px;">Total Sales</div>
                            <div style="font-size: 28px; font-weight: bold; color: #2c3e50;">${{ $totalSales }}</div>
                        </div>
                        <div class="stats-icon">💰</div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="data-card">
                <div class="card-header">
                    <h4 style="margin: 0; font-size: 18px; color: #2c3e50;">Recent Orders</h4>
                    <span class="status-badge" style="background: #ECF5F4; color: #2c3e50;">Last 24 hours</span>
                </div>
                <div class="table-wrapper">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentOrders as $order)
                                <tr>
                                    <td data-label="Order ID" style="color: #2c3e50; font-weight: 500;">#{{ $order->id }}
                                    </td>
                                    <td data-label="Status">
                                        <span class="status-badge"
                                            style="
                                        background: {{ $order->status === 'completed' ? '#dcfce7' : ($order->status === 'pending' ? '#fef9c3' : '#f1f5f9') }};
                                        color: {{ $order->status === 'completed' ? '#166534' : ($order->status === 'pending' ? '#854d0e' : '#475569') }};">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                    <td data-label="Amount" style="color: #2c3e50;">${{ $order->total_amount }}</td>
                                    <td data-label="Date" style="color: #64748b;">{{ $order->created_at->format('d M Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Products -->
            <div class="data-card">
                <div class="card-header">
                    <h4 style="margin: 0; font-size: 18px; color: #2c3e50;">Recent Products</h4>
                    <span class="status-badge" style="background: #ECF5F4; color: #2c3e50;">Latest Updates</span>
                </div>
                <div class="table-wrapper">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentProducts as $product)
                                <tr>
                                    <td data-label="Product" style="color: #2c3e50; font-weight: 500;">
                                        {{ $product->title }}</td>
                                    <td data-label="Category"><span class="category-tag">{{ $product->category }}</span>
                                    </td>
                                    <td data-label="Price" style="color: #2c3e50;">${{ $product->price }}</td>
                                    <td data-label="Date" style="color: #64748b;">
                                        {{ $product->created_at->format('d M Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
