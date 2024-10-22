<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->title }} - Product Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --brand-color: #ECF5F4;
            --text-color: #333;
            --accent-color: #2C3E50;
            --secondary-color: #95A5A6;
            --hover-color: #34495E;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
        }

        .header {
            background: var(--brand-color);
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .logo {
            max-height: 60px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-link:hover {
            color: var(--hover-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .product-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin: 2rem auto;
        }

        .product-images {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .image-gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.5rem;
        }

        .additional-image {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .additional-image:hover {
            transform: scale(1.05);
        }

        .product-info {
            padding: 1rem;
        }

        .product-title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--accent-color);
        }

        .price {
            font-size: 1.5rem;
            color: var(--accent-color);
            margin: 1rem 0;
        }

        .discounted-price {
            color: var(--secondary-color);
            text-decoration: line-through;
            margin-left: 0.5rem;
        }

        .product-meta {
            margin: 1.5rem 0;
            padding: 1rem;
            background: var(--brand-color);
            border-radius: 8px;
        }

        .product-meta p {
            margin: 0.5rem 0;
        }

        .button {
            background: var(--accent-color);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.2s;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 1rem 1rem 0;
        }

        .button:hover {
            background: var(--hover-color);
        }

        .button.secondary {
            background: var(--secondary-color);
        }

        .social-share {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .social-icon {
            color: var(--accent-color);
            font-size: 1.5rem;
            transition: color 0.2s;
        }

        .social-icon:hover {
            color: var(--secondary-color);
        }

        .recent-products {
            margin: 4rem 0;
            padding: 2rem 0;
            background: var(--brand-color);
        }

        .recent-products h2 {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--accent-color);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1.5rem;
            padding: 0 1rem;
        }

        .product-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-card-content {
            padding: 1rem;
        }

        .product-card h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: var(--accent-color);
        }

        .product-card p {
            color: var(--secondary-color);
        }

        @media (max-width: 1024px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .product-container {
                grid-template-columns: 1fr;
            }

            .image-gallery {
                grid-template-columns: repeat(3, 1fr);
            }

            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: block;
            }
        }

        @media (max-width: 480px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
        }

        footer {
            background: var(--accent-color);
            color: white;
            padding: 3rem 0;
            margin-top: 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
        }

        .footer-section p {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: white;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="nav-container">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            </a>
            <nav class="nav-links">
                <a href="{{ url('/shop') }}" class="nav-link">Shop</a>
                <a href="{{ url('/about') }}" class="nav-link">About Us</a>
                <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="product-container">
            <div class="product-images">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="main-image">

                @if ($product->images && count($product->images) > 0)
                    <div class="image-gallery">
                        @foreach ($product->images as $additionalImage)
                            <img src="{{ asset('storage/' . $additionalImage) }}"
                                alt="Additional image of {{ $product->title }}" class="additional-image"
                                onclick="document.querySelector('.main-image').src = this.src">
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="product-info">
                <h1 class="product-title">{{ $product->title }}</h1>

                <div class="price">
                    ${{ $product->price }}
                    @if ($product->discounted_price)
                        <span class="discounted-price">${{ $product->discounted_price }}</span>
                    @endif
                </div>

                <div class="product-meta">
                    <p><strong>Availability:</strong> {{ $product->stock }} in stock</p>
                    <p><strong>Color:</strong> {{ $product->color }}</p>
                    <p><strong>Sizes:</strong> {{ $product->sizes }}</p>
                    <p><strong>SKU:</strong> {{ $product->sku }}</p>
                </div>

                <p class="description">{{ $product->description }}</p>

                <a href="{{ url('cart/add', $product->id) }}" class="button">
                    <i class="fas fa-shopping-cart"></i> Add to Cart
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
            <h2>Recent Products</h2>
            <div class="products-grid">
                @foreach ($recentProducts as $recentProduct)
                    <a href="{{ url('shop/product', $recentProduct->id) }}" class="product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('storage/' . $recentProduct->image) }}"
                                alt="{{ $recentProduct->title }}">
                        </div>
                        <div class="product-card-content">
                            <h3>{{ $recentProduct->title }}</h3>
                            <p>${{ $recentProduct->price }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Hackclothing</h3>
                <p>Your premier destination for high-end designer T-shirts from renowned brands like Iceberg, Givenchy,
                    Christian Dior, and Kenzo. We are dedicated to bringing you the latest luxury fashion trends.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <p><a href="{{ url('/shop') }}">Shop Designer T-Shirts</a></p>
                <p><a href="{{ url('/about') }}">About Us</a></p>
                <p><a href="{{ url('/contact') }}">Contact Us</a></p>
                <p><a href="{{ url('/terms') }}">Terms & Conditions</a></p>
                <p><a href="{{ url('/privacy') }}">Privacy Policy</a></p>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: <a href="mailto:info@hackclothing.com">info@hackclothing.com</a></p>
                <p>Phone: <a href="tel:+15551234567">(870) 774-9450</a></p>
                <p>Address: 4132 E Joppa Rd Ste 110, Nottingham, MD 21236</p>
            </div>
        </div>
    </footer>


    <script>
        // Enable image gallery functionality
        document.querySelectorAll('.additional-image').forEach(img => {
            img.addEventListener('click', function() {
                document.querySelector('.main-image').src = this.src;
            });
        });
    </script>
</body>

</html>
