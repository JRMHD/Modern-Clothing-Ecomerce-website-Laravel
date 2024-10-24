<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>My Cart | Hackclothing - Secure Purchase of Luxury Designer T-Shirts</title>

    <style>
        :root {
            --primary: #ECF5F4;
            --secondary: #2C3E50;
            --accent: #16A085;
            --gray: #95A5A6;
            --light: #ffffff;
            --shadow: rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            background: #f8f9fa;
        }

        .cart-container {
            max-width: 1200px;
            margin: 1rem auto;
            padding: 1rem;
            background: var(--light);
            border-radius: 1rem;
            box-shadow: 0 4px 6px var(--shadow);
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary);
            flex-wrap: wrap;
            gap: 1rem;
        }

        .cart-logo {
            height: 40px;
            width: auto;
        }

        .cart-title {
            color: var(--secondary);
            font-size: clamp(1.5rem, 4vw, 2rem);
            margin: 0;
        }

        .cart-empty {
            text-align: center;
            padding: 2rem;
            background: var(--primary);
            border-radius: 0.5rem;
            color: var(--secondary);
            font-size: clamp(1rem, 3vw, 1.2rem);
        }

        /* Desktop Table Styles */
        .desktop-cart {
            display: block;
            width: 100%;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        .cart-table th {
            background: var(--primary);
            color: var(--secondary);
            padding: 1rem;
            text-align: left;
            font-size: clamp(0.875rem, 2vw, 1rem);
        }

        .cart-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--primary);
            vertical-align: middle;
            font-size: clamp(0.875rem, 2vw, 1rem);
        }

        /* Mobile Card Styles */
        .mobile-cart {
            display: none;
        }

        .cart-card {
            background: var(--light);
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid var(--primary);
        }

        .cart-card-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .cart-card-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .cart-card-title {
            font-weight: 600;
            color: var(--secondary);
            flex-grow: 1;
        }

        .cart-card-details {
            display: grid;
            gap: 0.5rem;
        }

        .cart-card-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px solid var(--primary);
        }

        .cart-card-label {
            color: var(--gray);
            font-size: 0.875rem;
        }

        .cart-item-image {
            width: clamp(60px, 10vw, 80px);
            height: clamp(60px, 10vw, 80px);
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            background: var(--primary);
            border: none;
            color: var(--secondary);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            background: var(--accent);
            color: var(--light);
        }

        .remove-btn {
            background: #FF6B6B;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.875rem;
        }

        .remove-btn:hover {
            background: #FF5252;
        }

        .cart-summary {
            background: var(--primary);
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin-top: 2rem;
        }

        .cart-total {
            font-size: clamp(1.125rem, 3vw, 1.5rem);
            color: var(--secondary);
            font-weight: 600;
            text-align: right;
            margin-bottom: 1rem;
        }

        .cart-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .shop-btn,
        .checkout-btn {
            display: inline-block;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: all 0.3s ease;
            text-align: center;
            flex: 1;
        }

        .shop-btn {
            background: var(--light);
            color: var(--secondary);
            border: 1px solid var(--secondary);
        }

        .checkout-btn {
            background: var(--accent);
            color: var(--light);
        }

        .shop-btn:hover,
        .checkout-btn:hover {
            transform: translateY(-2px);
            filter: brightness(95%);
        }

        @media (max-width: 768px) {
            .cart-container {
                margin: 0;
                border-radius: 0;
                padding: 1rem;
            }

            .desktop-cart {
                display: none;
            }

            .mobile-cart {
                display: block;
            }

            .cart-header {
                justify-content: center;
                text-align: center;
            }

            .cart-actions {
                flex-direction: column;
            }

            .shop-btn,
            .checkout-btn {
                width: 100%;
            }

            .quantity-btn {
                width: 36px;
                height: 36px;
            }
        }
    </style>
</head>

<body>
    <main class="cart-container">
        <div class="cart-header">
            <img src="/images/logo.png" alt="Logo" class="cart-logo">
            <h1 class="cart-title">Your Cart</h1>
        </div>

        @if ($cartItems->isEmpty())
            <div class="cart-empty">
                <p>Your cart is empty</p>
                <a href="{{ route('shop') }}" class="shop-btn">Continue Shopping</a>
            </div>
        @else
            <!-- Desktop View -->
            <div class="desktop-cart">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $cartItem)
                            <tr>
                                <td>{{ $cartItem->title }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $cartItem->product->image) }}"
                                        alt="{{ $cartItem->title }}" class="cart-item-image">
                                </td>
                                <td>{{ $cartItem->size }}</td>
                                <td>
                                    <div class="quantity-controls">
                                        <button class="quantity-btn"
                                            onclick="updateQuantity({{ $cartItem->id }}, 'decrement')">-</button>
                                        <span>{{ $cartItem->quantity }}</span>
                                        <button class="quantity-btn"
                                            onclick="updateQuantity({{ $cartItem->id }}, 'increment')">+</button>
                                    </div>
                                </td>
                                <td>${{ number_format($cartItem->price * $cartItem->quantity, 2) }}</td>
                                <td>
                                    <form action="{{ route('cart.destroy', $cartItem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="remove-btn">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Mobile View -->
            <div class="mobile-cart">
                @foreach ($cartItems as $cartItem)
                    <div class="cart-card">
                        <div class="cart-card-header">
                            <img src="{{ asset('storage/' . $cartItem->product->image) }}"
                                alt="{{ $cartItem->title }}" class="cart-card-image">
                            <div class="cart-card-title">{{ $cartItem->title }}</div>
                        </div>
                        <div class="cart-card-details">
                            <div class="cart-card-row">
                                <span class="cart-card-label">Size</span>
                                <span>{{ $cartItem->size }}</span>
                            </div>
                            <div class="cart-card-row">
                                <span class="cart-card-label">Quantity</span>
                                <div class="quantity-controls">
                                    <button class="quantity-btn"
                                        onclick="updateQuantity({{ $cartItem->id }}, 'decrement')">-</button>
                                    <span>{{ $cartItem->quantity }}</span>
                                    <button class="quantity-btn"
                                        onclick="updateQuantity({{ $cartItem->id }}, 'increment')">+</button>
                                </div>
                            </div>
                            <div class="cart-card-row">
                                <span class="cart-card-label">Price</span>
                                <span>${{ number_format($cartItem->price * $cartItem->quantity, 2) }}</span>
                            </div>
                            <div class="cart-card-row" style="border-bottom: none;">
                                <form action="{{ route('cart.destroy', $cartItem->id) }}" method="POST"
                                    style="width: 100%;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-btn" style="width: 100%;">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="cart-summary">
                <div class="cart-total">
                    Total:
                    ${{ number_format($cartItems->sum(function ($item) {return $item->price * $item->quantity;}),2) }}
                </div>
                <div class="cart-actions">
                    <a href="{{ route('shop') }}" class="shop-btn">Continue Shopping</a>
                    <a href="{{ route('checkout.form') }}" class="checkout-btn">Proceed to Checkout</a>
                </div>
            </div>

        @endif
    </main>

    <script>
        function updateQuantity(cartItemId, action) {
            const url = `{{ url('cart/update') }}/${cartItemId}`;
            fetch(url, {
                    method: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        action: action
                    })
                })
                .then(response => {
                    if (response.ok) {
                        window.location.reload();
                    } else {
                        alert('Failed to update quantity.');
                    }
                });
        }
    </script>
</body>

</html>
