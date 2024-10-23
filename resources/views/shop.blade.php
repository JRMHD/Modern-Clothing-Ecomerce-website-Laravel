<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- SEO Optimized Title -->
    <title>Shop Luxury Designer T-Shirts | Hackclothing - USA's Premier Fashion Destination</title>

    <!-- SEO Meta Description -->
    <meta name="description"
        content="Shop premium designer T-shirts from top brands like Givenchy, Dior, Iceberg, Kenzo, and more at Hackclothing.com. Experience high-end fashion in the USA." />

    <!-- Keywords relevant to your store -->
    <meta name="keywords"
        content="Luxury designer T-shirts, Givenchy T-shirts, Christian Dior, Kenzo, Iceberg, men's fashion, high-end fashion USA, premium T-shirts, Hackclothing" />

    <!-- Author -->
    <meta name="author" content="Hackclothing.com" />

    <!-- BEGIN: CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/fontawesome-all.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/lightcase.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/settings.css" />
    <link rel="stylesheet" href="css/ulina-icons.css" />
    <link rel="stylesheet" href="css/ignore_for_wp.css" />
    <link rel="stylesheet" href="css/preset.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- END: CSS -->

    <!-- BEGIN: Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- END: Favicon -->
</head>


<body>
    <!-- BEGIN: PreLoder Section -->
    <section class="preloader" id="preloader">
        <div class="spinner-eff spinner-eff-1">
            <div class="bar bar-top"></div>
            <div class="bar bar-right"></div>
            <div class="bar bar-bottom"></div>
            <div class="bar bar-left"></div>
        </div>
    </section>
    <!-- END: PreLoder Section -->

    <!-- BEGIN: Header 01 Section -->
    @include('header')
    <!-- END: Header 01 Section -->


    <!-- BEGIN: Page Banner Section -->
    <section class="pageBannerSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageBannerContent text-center">
                        <h2>Our Shop</h2>
                        <div class="pageBannerPath">
                            <a href="/">Home</a>&nbsp;&nbsp;>&nbsp;&nbsp;<span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Page Banner Section -->

    <!-- BEGIN: Shop Page Section -->
    <style>
        .productItem01 {
            margin-bottom: 30px;
        }

        .pi01Thumb {
            position: relative;
            overflow: hidden;
            aspect-ratio: 3/4;
        }

        .pi01Thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .pi01Actions {
            position: absolute;
            right: 20px;
            top: 20px;
            visibility: hidden;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .productItem01:hover .pi01Actions {
            visibility: visible;
            opacity: 1;
        }

        .pi01Actions a {
            display: block;
            width: 40px;
            height: 40px;
            background: #fff;
            color: #222;
            font-size: 14px;
            text-align: center;
            line-height: 40px;
            margin-bottom: 10px;
            border-radius: 50%;
            transition: all 0.4s ease;
        }

        .pi01Actions a:hover {
            background: #222;
            color: #fff;
        }

        .productLabels {
            position: absolute;
            left: 20px;
            top: 20px;
        }

        .productLabels span {
            display: block;
            height: 25px;
            background: #222;
            color: #fff;
            font-size: 12px;
            line-height: 25px;
            padding: 0 12px;
            margin-bottom: 5px;
        }

        .pi01Details {
            padding: 20px 0;
        }

        .pi01Price {
            margin: 10px 0;
        }

        .pi01Price ins {
            text-decoration: none;
            font-weight: 600;
            margin-right: 10px;
        }

        .pi01Price del {
            color: #666;
        }

        .pi01VColor {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .color-dot {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
            border: 1px solid #ddd;
        }

        .pi01VSize {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .pi01VSItem label {
            padding: 5px 10px;
            border: 1px solid #ddd;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .pi01VSItem input:checked+label {
            background: #222;
            color: #fff;
            border-color: #222;
        }

        .pi01VSItem input {
            display: none;
        }

        .filterSection {
            margin-bottom: 30px;
        }

        .filterSection h4 {
            margin-bottom: 15px;
            font-weight: 600;
        }

        .filterCategory,
        .filterPrice {
            margin-bottom: 20px;
        }

        .priceSlider {
            width: 100%;
        }
    </style>
    <section class="shopPageSection">
        <div class="container">
            <div class="row">
                <!-- Filter Sidebar -->
                <div class="col-lg-3">
                    <div class="filterSection">
                        <h4>Filter by Category</h4>
                        <div class="filterCategory">
                            <select id="categoryFilter" class="form-control">
                                <option value="">All Categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <h4>Filter by Price</h4>
                        <div class="filterPrice">
                            <input type="range" id="priceFilter" class="priceSlider" min="0" max="500"
                                step="10" value="500">
                            <div id="priceRange">Up to $500</div>
                        </div>
                    </div>
                </div>

                <!-- Products Listing -->
                <div class="col-lg-9">
                    <div class="row shopProductRow" id="productList">
                        @include('profile.partials.product_list', ['products' => $products])
                    </div>

                    <!-- Pagination and Load More -->
                    <div class="row shopPaginationRow">
                        <div class="col-lg-12 text-center">
                            <a href="javascript:void(0);" class="ulinaBTN2 shopLoadMore">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryFilter = document.getElementById('categoryFilter');
            const priceFilter = document.getElementById('priceFilter');
            const priceRange = document.getElementById('priceRange');
            const productList = document.getElementById('productList');

            // Update Price Display
            priceFilter.addEventListener('input', function() {
                priceRange.textContent = `Up to $${priceFilter.value}`;
                filterProducts();
            });

            // Trigger filter when category changes
            categoryFilter.addEventListener('change', function() {
                filterProducts();
            });

            // Fetch filtered products via AJAX
            function filterProducts() {
                const category = categoryFilter.value;
                const maxPrice = priceFilter.value;

                fetch(`/filter-products?category=${category}&max_price=${maxPrice}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        productList.innerHTML = data.products; // Replace product list with filtered products
                    })
                    .catch(error => console.error('Error fetching products:', error));
            }
        });
    </script>
    <!-- END: Shop Page Section -->

    <!-- BEGIN: Footer Section -->
    @include('footer')
    <!-- END: Site Info Section -->

    <!-- BEGIN: Back To Top -->
    <a href="javascript:void(0);" id="backtotop"><i class="fa-solid fa-angles-up"></i></a>
    <!-- END: Back To Top -->


    <!-- BEGIN: JS -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/shuffle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel.filter.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/jquery.nice-select.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.plugin.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/circle-progress.js"></script>

    <script src="js/gmaps.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCA_EDGVQleQtHIp2fZ-V56QFRbRL8cXT8"></script>

    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/extensions/revolution.extension.video.min.js"></script>

    <script src="js/theme.js"></script>
    <!-- END: JS -->
</body>

</html>
