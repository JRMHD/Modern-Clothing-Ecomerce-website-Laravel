@extends('layouts.admin')

@section('content')
    <style>
        .orders-container {
            padding: 15px;
            min-height: 100vh;
            background: linear-gradient(135deg, #ECF5F4, #ffffff);
        }

        .content-wrapper {
            max-width: 1200px;
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

        .orders-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            padding: 20px;
        }

        .orders-table {
            width: 100%;
            border-collapse: collapse;
        }

        .orders-table th,
        .orders-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .orders-table th {
            background-color: #f8fafc;
            color: #2c3e50;
            font-weight: 600;
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            display: inline-block;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: inline-block;
            text-decoration: none;
            margin: 2px;
        }

        .btn-primary {
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: white;
        }

        .btn-danger {
            background: linear-gradient(to right, #e74c3c, #c0392b);
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: 0 10px;
            }

            .orders-card {
                padding: 10px;
            }

            /* Hide table headers on mobile */
            .orders-table thead {
                display: none;
            }

            /* Convert table rows to cards */
            .orders-table,
            .orders-table tbody,
            .orders-table tr,
            .orders-table td {
                display: block;
                width: 100%;
            }

            .orders-table tr {
                margin-bottom: 15px;
                background: #f8fafc;
                border-radius: 10px;
                padding: 10px;
                border: 1px solid #e2e8f0;
            }

            .orders-table td {
                padding: 8px 10px;
                text-align: right;
                border-bottom: 1px solid #edf2f7;
            }

            .orders-table td:last-child {
                border-bottom: none;
            }

            /* Add labels for each cell */
            .orders-table td::before {
                content: attr(data-label);
                float: left;
                font-weight: 600;
                color: #2c3e50;
            }

            .action-buttons {
                justify-content: flex-end;
            }

            .btn {
                padding: 6px 12px;
                font-size: 13px;
            }
        }
    </style>

    <div class="orders-container">
        <div class="content-wrapper">
            <!-- Header Card -->
            <div class="header-card">
                <div class="header-content">
                    <h2 style="margin: 0; font-size: 24px; font-weight: 600;">Orders Management</h2>
                </div>
            </div>

            <!-- Orders Card -->
            <div class="orders-card">
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Total Amount</th>
                            <th>Placed At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td data-label="Order ID">{{ $order->id }}</td>
                                <td data-label="User">{{ $order->user->name }}</td>
                                <td data-label="Status">
                                    <span class="status-badge"
                                        style="background-color: {{ $order->status === 'pending' ? '#fed7aa' : ($order->status === 'completed' ? '#bbf7d0' : '#bfdbfe') }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </td>
                                <td data-label="Total Amount">${{ number_format($order->total_amount, 2) }}</td>
                                <td data-label="Placed At">{{ $order->created_at->format('d-m-Y H:i') }}</td>
                                <td data-label="Actions">
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.orders.show', $order->id) }}"
                                            class="btn btn-primary">View</a>
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
