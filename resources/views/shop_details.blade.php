<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $product->title }} - Product Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <style>
        :root {
            --brand-color: #f8fafc;
            --text-color: #1e293b;
            --accent-color: #3b82f6;
            --secondary-color: #64748b;
            --hover-color: #2563eb;
            --success-color: #22c55e;
            --error-color: #ef4444;
            --border-color: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", -apple-system, BlinkMacSystemFont,
                "Segoe UI", Roboto, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: #ffffff;
        }

        .header {
            background: white;
            padding: 1rem 0;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            height: 40px;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .logo:hover {
            opacity: 0.8;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-link {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.875rem;
            transition: color 0.2s;
            position: relative;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--accent-color);
            transition: width 0.2s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 2rem;
        }

        .message {
            position: fixed;
            top: 1rem;
            right: 1rem;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            z-index: 1100;
            animation: slideIn 0.3s ease-out;
            max-width: 24rem;
        }

        .message.success {
            border-left: 4px solid var(--success-color);
        }

        .message.error {
            border-left: 4px solid var(--error-color);
        }

        .message-icon {
            font-size: 1.25rem;
        }

        .message.success .message-icon {
            color: var(--success-color);
        }

        .message.error .message-icon {
            color: var(--error-color);
        }

        .message-content {
            flex: 1;
        }

        .message-title {
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 0.25rem;
        }

        .message-text {
            font-size: 0.875rem;
            color: var(--secondary-color);
        }

        .message-close {
            color: var(--secondary-color);
            cursor: pointer;
            padding: 0.25rem;
            transition: color 0.2s;
        }

        .message-close:hover {
            color: var(--text-color);
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .product-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin: 2rem auto;
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .product-images {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: 600px;
            object-fit: cover;
            border-radius: 0.75rem;
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }

        .image-gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }

        .additional-image {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s;
            border: 2px solid transparent;
        }

        .additional-image:hover {
            border-color: var(--accent-color);
        }

        .additional-image.active {
            border-color: var(--accent-color);
        }

        .product-info {
            padding: 1rem;
        }

        .product-title {
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-color);
            line-height: 1.2;
        }

        .price {
            font-size: 1.875rem;
            color: var(--accent-color);
            margin: 1.5rem 0;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .discounted-price {
            color: var(--secondary-color);
            text-decoration: line-through;
            font-size: 1.25rem;
        }

        .product-meta {
            margin: 2rem 0;
            padding: 1.5rem;
            background: var(--brand-color);
            border-radius: 0.75rem;
            border: 1px solid var(--border-color);
        }

        .product-meta p {
            margin: 0.75rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-meta strong {
            color: var(--text-color);
        }

        select {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            border: 1px solid var(--border-color);
            margin-top: 0.5rem;
            font-size: 1rem;
            color: var(--text-color);
            background-color: white;
            cursor: pointer;
            transition: border-color 0.2s;
        }

        select:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.1);
        }

        .button {
            background: var(--accent-color);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin: 1rem 1rem 1rem 0;
        }

        .button:hover {
            background: var(--hover-color);
            transform: translateY(-1px);
        }

        .button.secondary {
            background: transparent;
            color: var(--text-color);
            border: 1px solid var(--border-color);
        }

        .button.secondary:hover {
            background: var(--brand-color);
            border-color: var(--secondary-color);
        }

        .social-share {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .social-share h3 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--text-color);
        }

        .social-icons {
            display: flex;
            gap: 1.5rem;
        }

        .social-icon {
            color: var(--secondary-color);
            font-size: 1.5rem;
            transition: all 0.2s;
        }

        .social-icon:hover {
            color: var(--accent-color);
            transform: translateY(-2px);
        }

        @media (max-width: 1024px) {
            .product-container {
                gap: 2rem;
                padding: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .product-container {
                grid-template-columns: 1fr;
            }

            .main-image {
                height: 400px;
            }

            .nav-links {
                display: none;
            }
        }

        .footer {
            background-color: #1e293b;
            color: white;
            padding: 2rem 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-section {
            flex: 1;
            margin: 0 1rem;
        }

        .footer-section h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #f8fafc;
        }

        .footer-section p,
        .footer-section a {
            font-size: 0.875rem;
            color: #f0f4f8;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #3b82f6;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .recent-products {
            margin: 2rem 0;
        }

        .recent-products h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
            color: var(--text-color);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .product-image-wrapper img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .product-card-content {
            padding: 1rem;
        }

        .product-card-content h3 {
            font-size: 1rem;
            color: var(--text-color);
            margin-bottom: 0.5rem;
        }

        .product-card-content .price {
            font-size: 1.125rem;
            color: var(--accent-color);
        }
    </style>
</head>

<body>
    <!-- Header remains the same -->
    <header class="header">
        <div class="nav-container">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo" />
            </a>
            <nav class="nav-links">
                <a href="{{ url('/shop') }}" class="nav-link">Shop</a>
                <a href="{{ url('/about') }}" class="nav-link">About Us</a>
                <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            </nav>
        </div>
    </header>
    <div id="message-container"></div>

    <main class="container">
        <div class="product-container">
            <!-- Product images section -->
            <div class="product-images">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="main-image"
                    id="main-image" />

                @if ($product->images && count($product->images) > 0)
                    <div class="image-gallery">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                            class="additional-image active" onclick="updateMainImage(this)" />
                        @foreach ($product->images as $additionalImage)
                            <img src="{{ asset('storage/' . $additionalImage) }}"
                                alt="Additional image of {{ $product->title }}" class="additional-image"
                                onclick="updateMainImage(this)" />
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Product info section -->
            <div class="product-info">
                <h1 class="product-title">{{ $product->title }}</h1>

                <div class="price">
                    ${{ $product->price }} @if ($product->discounted_price)
                        <span class="discounted-price">${{ $product->discounted_price }}</span>
                    @endif
                </div>

                <div class="product-meta">
                    <p>
                        <strong>Availability:</strong>
                        <span class="{{ $product->stock > 0 ? 'text-success' : 'text-error' }}">
                            {{ $product->stock > 0
                                ? $product->stock .
                                    ' in
                                                                                                                                                stock'
                                : 'Out of stock' }}
                        </span>
                    </p>
                    <p>
                        <strong>Color:</strong>
                        <span>{{ $product->color }}</span>
                    </p>
                    <p>
                        <strong>SKU:</strong>
                        <span>{{ $product->sku }}</span>
                    </p>

                    <label for="size" class="block text-sm font-medium text-gray-700 mt-4">Select Size:</label>
                    <select name="size" id="size" required>
                        <option value="">Choose a size</option>
                        @foreach (explode(',', $product->sizes) as $size)
                            <option value="{{ trim($size) }}">
                                {{ trim($size) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <p class="description">{{ $product->description }}</p>

                <button onclick="addToCart({{ $product->id }})" class="button"
                    {{ $product->stock <= 0 ? 'disabled' : '' }}>
                    <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>

                <a href="{{ route('cart.index') }}" class="button secondary">
                    <i class="fas fa-shopping-bag"></i> View Cart
                </a>

                <a href="{{ url('/shop') }}" class="button secondary">
                    <i class="fas fa-arrow-left"></i> Continue Shopping
                </a>

                <div class="social-share">
                    <h3>Share this product</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"
                            class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ urlencode($product->title) }}"
                            target="_blank" class="social-icon">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url={{ url()->current() }}&media={{ asset('storage/' . $product->image) }}&description={{ urlencode($product->title) }}"
                            target="_blank" class="social-icon">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}"
                            target="_blank" class="social-icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="recent-products">
            <h2>Products You Might like</h2>
            <div class="products-grid">
                @foreach ($recentProducts as $recentProduct)
                    <a href="{{ url('shop/product', $recentProduct->id) }}" class="product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('storage/' . $recentProduct->image) }}"
                                alt="{{ $recentProduct->title }}" />
                        </div>
                        <div class="product-card-content">
                            <h3>{{ $recentProduct->title }}</h3>
                            <p class="price">${{ $recentProduct->price }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

    </main>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>About Hackclothing</h3>
                <p>
                    Your premier destination for high-end designer T-shirts from renowned brands like Iceberg, Givenchy,
                    Christian Dior, and Kenzo. We are dedicated to bringing you the latest luxury fashion trends.
                </p>
            </div>
            <div class="footer-section quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ url('/shop') }}">Shop Designer T-Shirts</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    <li><a href="{{ url('/terms') }}">Terms & Conditions</a></li>
                    <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p>Email: <a href="mailto:info@hackclothing.com">info@hackclothing.com</a></p>
                <p>Phone: <a href="tel:+15551234567">(870) 774-9450</a></p>
                <p>Address: 4132 E Joppa Rd Ste 110, Nottingham, MD 21236</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <span id="current-year"></span> Hackclothing. All rights reserved.</p>
        </div>

        <script>
            document.getElementById('current-year').textContent = new Date().getFullYear();
        </script>

    </footer>

    <script>
        function showMessage(type, title, message) {
            const container = document.getElementById('message-container');
            const messageEl = document.createElement('div');
            messageEl.className = `message ${type}`;
            messageEl.innerHTML = `
                    <i class="message-icon fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
                    <div class="message-content">
                        <div class="message-title">${title}</div>
                        <div class="message-text">${message}</div>
                    </div>
                    <button class="message-close" onclick="this.parentElement.remove()">
                        <i class="fas fa-times"></i>
                    </button>
                `;
            container.appendChild(messageEl);

            // Auto-remove after 5 seconds
            setTimeout(() => messageEl.remove(), 5000);
        }

        function updateMainImage(element) {
            const mainImage = document.getElementById('main-image');
            mainImage.src = element.src;

            // Update active state
            document.querySelectorAll('.additional-image').forEach(img => {
                img.classList.remove('active');
            });
            element.classList.add('active');
        }

        function addToCart(productId) {
            const size = document.getElementById('size').value;

            if (!size) {
                showMessage('error', 'Error', 'Please select a size before adding to cart');
                return;
            }

            const url = `{{ url('cart/add') }}/${productId}`;

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        size: size
                    }),
                })
                .then(response => {
                    if (response.ok) {
                        showMessage('success', 'Success', 'Product added to cart successfully');

                        // Optionally update cart count if you have one in the header
                        updateCartCount();
                    } else {
                        throw new Error('Failed to add to cart');
                    }
                })
                .catch(error => {
                    showMessage('error', 'Error', 'Failed to add product to cart. Please try again.');
                });
        }

        function updateCartCount() {
            // If you have a cart count element in your header
            fetch('{{ url('cart/count') }}')
                .then(response => response.json())
                .then(data => {
                    const cartCount = document.querySelector('.cart-count');
                    if (cartCount) {
                        cartCount.textContent = data.count;
                    }
                })
                .catch(error => console.error('Error updating cart count:', error));
        }

        // Initialize image gallery
        document.addEventListener('DOMContentLoaded', function() {
            const mainImage = document.getElementById('main-image');
            const additionalImages = document.querySelectorAll('.additional-image');

            additionalImages.forEach(img => {
                img.addEventListener('click', function() {
                    // Remove active class from all images
                    additionalImages.forEach(image => image.classList.remove('active'));
                    // Add active class to clicked image
                    this.classList.add('active');
                    // Update main image
                    mainImage.src = this.src;
                });
            });

            // Zoom effect on main image
            if (mainImage) {
                mainImage.addEventListener('mousemove', function(e) {
                    const bounds = this.getBoundingClientRect();
                    const x = e.clientX - bounds.left;
                    const y = e.clientY - bounds.top;

                    // Calculate percentage positions
                    const xPercent = Math.round(100 / (bounds.width / x));
                    const yPercent = Math.round(100 / (bounds.height / y));

                    // Apply the transform
                    this.style.transformOrigin = `${xPercent}% ${yPercent}%`;
                    this.style.transform = 'scale(1.2)';
                });

                mainImage.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            }
        });
    </script>
</body>

</html>
