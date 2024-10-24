<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- SEO Optimized Title -->
    <title>Checkout | Hackclothing - Secure Purchase of Luxury Designer T-Shirts</title>

    <!-- SEO Meta Description -->
    <meta name="description"
        content="Complete your purchase at Hackclothing. Securely checkout with your premium designer T-shirts from Givenchy, Dior, Iceberg, Kenzo, and more. Fast and easy process.">

    <!-- SEO Keywords -->
    <meta name="keywords"
        content="checkout, secure purchase, Hackclothing, luxury designer T-shirts, Givenchy, Dior, Iceberg, Kenzo, high-end fashion, USA, premium clothing">

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
    <!-- BEGIN: Section -->
    <section class="preloader" id="preloader">
        <div class="spinner-eff spinner-eff-1">
            <div class="bar bar-top"></div>
            <div class="bar bar-right"></div>
            <div class="bar bar-bottom"></div>
            <div class="bar bar-left"></div>
        </div>
    </section>
    <!-- END: Section -->

    <!-- BEGIN: Section -->
    @include('header')
    <!-- END: Section -->


    <!-- BEGIN: Page Banner Section -->
    <section class="pageBannerSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageBannerContent text-center">
                        <h2>Checkout</h2>
                        <div class="pageBannerPath">
                            <a href="/">Home</a>&nbsp;&nbsp;>&nbsp;&nbsp;<span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Page Banner Section -->

    <!-- BEGIN: Checkout Page Section -->
    <section class="checkoutPage">
        <div class="container">
            <h1>Checkout</h1>
            <form action="{{ route('checkout.placeOrder') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="loginLinks">
                            <p>
                                @if (Auth::check())
                                    Enjoy Secure Checkout, {{ Auth::user()->name }}!
                                @else
                                    Already have an account?
                                    <a href="{{ route('login') }}">Click Here to Login</a>
                                @endif
                            </p>
                        </div>

                        <h3>Select Shipping Address</h3>
                        <div class="form-group">
                            <label for="address">Select Shipping Address</label>
                            <select name="address_id" id="address" required>
                                <option value="">-- Select an Address --</option>
                                @foreach ($addresses as $address)
                                    <option value="{{ $address->id }}">
                                        {{ $address->address_line_1 }}, {{ $address->city }}, {{ $address->state }} -
                                        {{ $address->zip_code }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <a href="{{ route('addresses.create') }}">Add a new address</a>
                        </div>

                        <!-- Contact Phone and Order Note -->
                        <h3>Additional Details</h3>
                        <div class="checkoutForm">
                            <input type="text" name="contact_phone" placeholder="Contact Phone *" required />
                            <textarea name="order_note" placeholder="Order Note (optional)"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="orderReviewWrap">
                            <h3>Your Order</h3>
                            <div class="orderReview">
                                <div class="cart-summary">
                                    <h2>Order Summary</h2>
                                    @foreach ($cartItems as $item)
                                        <div>{{ $item->product->title }} ({{ $item->quantity }}) -
                                            ${{ number_format($item->price * $item->quantity, 2) }}</div>
                                    @endforeach
                                    <div>Total: ${{ number_format($totalAmount, 2) }}</div>
                                </div>

                                <ul class="wc_payment_methods">
                                    <li>
                                        <input type="radio" value="3" name="paymentMethod"
                                            id="paymentMethod03" />
                                        <label for="paymentMethod03">Paypal</label>
                                    </li>
                                </ul>


                                <button type="submit" class="placeOrderBTN ulinaBTN">
                                    <span>Place Order</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- END: Checkout Page Section -->



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
