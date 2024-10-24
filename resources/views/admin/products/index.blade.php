@extends('layouts.admin')

@section('content')
    <style>
        .products-container {
            padding: 15px;
            min-height: 100vh;
            background: linear-gradient(135deg, #ECF5F4, #ffffff);
            width: 100%;
            overflow-x: hidden;
            /* Prevent horizontal scroll on container */
        }

        .content-wrapper {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 15px;
            width: 100%;
        }

        .header-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            margin-bottom: 25px;
            width: 100%;
        }

        .header-content {
            padding: 25px;
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .create-button {
            background: white;
            color: #2c3e50;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .create-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .data-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
            width: 100%;
        }

        /* Remove the wrapper padding that was causing the double scroll */
        .table-wrapper {
            width: 100%;
        }

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

        .category-tag {
            background: #ECF5F4;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            display: inline-block;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-info {
            background: #e0f2fe;
            color: #0369a1;
            margin-right: 8px;
        }

        .btn-danger {
            background: #fee2e2;
            color: #b91c1c;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .actions-cell {
            white-space: nowrap;
        }

        @media (max-width: 768px) {
            .products-container {
                padding: 10px;
            }

            .content-wrapper {
                padding: 0 10px;
            }

            .header-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

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
                background: white;
                border: 1px solid #edf2f7;
                border-radius: 8px;
            }

            .responsive-table td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 12px 15px;
                border: none;
                font-size: 14px;
            }

            .responsive-table td::before {
                content: attr(data-label);
                font-weight: 500;
                color: #64748b;
                padding-right: 10px;
            }

            /* Special handling for actions column on mobile */
            .responsive-table td:last-child {
                border-bottom: none;
                flex-direction: row;
                justify-content: flex-end;
                gap: 10px;
            }

            .responsive-table td:last-child::before {
                display: none;
            }

            .btn {
                padding: 6px 12px;
                font-size: 13px;
            }
        }
    </style>

    <div class="products-container">
        <div class="content-wrapper">
            <!-- Header Card -->
            <div class="header-card">
                <div class="header-content">
                    <h2 style="margin: 0; font-size: 24px; font-weight: 600;">Products Management</h2>
                    <a href="{{ route('admin.products.create') }}" class="create-button">
                        <i class="fas fa-plus"></i> Create Product
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Products Table -->
            <div class="data-card">
                <div class="table-wrapper">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td data-label="Title">{{ $product->title }}</td>
                                    <td data-label="Price">${{ $product->price }}</td>
                                    <td data-label="Stock">{{ $product->stock }}</td>
                                    <td data-label="Category">
                                        <span class="category-tag">{{ $product->category }}</span>
                                    </td>
                                    <td data-label="Actions" class="actions-cell">
                                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-info">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
