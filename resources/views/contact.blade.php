<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Optimized Title -->
    <title>Contact Us | Hackclothing - Reach Out for Luxury Designer T-Shirts</title>

    <!-- SEO Meta Description -->
    <meta name="description"
        content="Contact Hackclothing today for inquiries about luxury designer T-shirts. We're here to help with your shopping experience and questions about Givenchy, Dior, Kenzo, and more.">

    <!-- SEO Keywords -->
    <meta name="keywords"
        content="Contact Hackclothing, luxury designer T-shirts, customer support, Givenchy T-shirts, Dior fashion, Kenzo USA, high-end clothing inquiries, Hackclothing contact">

    <!-- Author -->
    <meta name="author" content="Hackclothing.com">

    <!-- BEGIN: CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/ulina-icons.css">
    <link rel="stylesheet" href="css/ignore_for_wp.css">
    <link rel="stylesheet" href="css/preset.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- END: CSS -->

    <!-- BEGIN: Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
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
                        <h2>Contact</h2>
                        <div class="pageBannerPath">
                            <a href="/">Home</a> <i> > </i> <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Page Banner Section -->

    <!-- BEGIN: Contact Section -->
    <section class="stayConnected">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="secTitle">Stay Connected</h2>
                    <p class="secDesc">We’d love to hear from you! Reach out with any questions or inquiries about our
                        latest arrivals</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="contactItems">
                        <div class="contactItem">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <h5>Location</h5>
                            <p>4132 E Joppa Rd Ste 110, Nottingham, MD 21236</p>
                        </div>
                        <div class="contactItem">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <h5>Phone</h5>
                            <p>(800) 774-9450</p>
                        </div>
                        <div class="contactItem">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <h5>Email</h5>
                            <p>info@hackclothing.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-2">
                    <form action="{{ route('contact.submit') }}" method="POST" class="contactForm" id="contact_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="required" type="text" name="conName" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <input class="required" type="email" name="conEmail" placeholder="Your email"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input class="required" type="text" name="conPhone" placeholder="Your phone"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="conSubject" placeholder="Subject" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="required" name="message" placeholder="Write your message here" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="ulinaBTN" id="submit_button">
                                    <span>Submit Now</span>
                                </button>
                            </div>
                        </div>

                        <!-- Modern Loading Spinner -->
                        <div id="loading_spinner" style="display:none; text-align: center; margin-top: 20px;">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"
                                style="width: 40px; height: 40px;">
                                <style>
                                    .spinner-ring {
                                        transform-origin: center;
                                        animation: spin 1.2s linear infinite;
                                    }

                                    .spinner-ring circle {
                                        fill: none;
                                        stroke: #ECF5F4;
                                        stroke-width: 8;
                                        stroke-linecap: round;
                                        stroke-dasharray: 45, 200;
                                        stroke-dashoffset: 0;
                                        animation: pulse 1.2s ease-in-out infinite;
                                    }

                                    @keyframes spin {
                                        100% {
                                            transform: rotate(360deg);
                                        }
                                    }

                                    @keyframes pulse {
                                        0% {
                                            stroke-dasharray: 45, 200;
                                            stroke-dashoffset: 0;
                                        }

                                        50% {
                                            stroke-dasharray: 160, 200;
                                            stroke-dashoffset: -35;
                                        }

                                        100% {
                                            stroke-dasharray: 45, 200;
                                            stroke-dashoffset: -200;
                                        }
                                    }
                                </style>
                                <g class="spinner-ring">
                                    <circle cx="50" cy="50" r="35" />
                                </g>
                            </svg>
                        </div>

                        <!-- Success Message Area -->
                        <div id="success_message"
                            style="display: none; margin-top: 20px; padding: 15px; border-radius: 8px; background-color: #dcf7dc; color: #0a5d0a; text-align: center;">
                            <!-- Success message will be shown here -->
                        </div>
                    </form>
                </div>

                <style>
                    #loading_spinner {
                        margin: 20px auto;
                        width: 40px;
                        height: 40px;
                    }

                    #success_message {
                        animation: fadeIn 0.3s ease-in-out;
                    }

                    @keyframes fadeIn {
                        from {
                            opacity: 0;
                            transform: translateY(-10px);
                        }

                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }
                </style>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#contact_form').on('submit', function(e) {
                            e.preventDefault();

                            // Show spinner and disable submit button
                            $('#loading_spinner').show();
                            $('#submit_button').prop('disabled', true);

                            $.ajax({
                                url: "{{ route('contact.submit') }}",
                                method: "POST",
                                data: $(this).serialize(),
                                success: function(response) {
                                    $('#loading_spinner').hide();
                                    $('#submit_button').prop('disabled', false);

                                    if (response.success) {
                                        $('#success_message').text(response.success).show();
                                        $('#contact_form')[0].reset();

                                        // Hide success message after 5 seconds
                                        setTimeout(() => {
                                            $('#success_message').fadeOut();
                                        }, 5000);
                                    }
                                },
                                error: function(xhr) {
                                    $('#loading_spinner').hide();
                                    $('#submit_button').prop('disabled', false);

                                    const errorMsg = xhr.responseJSON?.message ||
                                        "An error occurred. Please try again.";
                                    alert(errorMsg);
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </section>
    <!-- END Contact Section -->

    <!-- BEGIN: Map Section -->
    <section class="ulinaMapSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ulinaContactMap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3488.5441391460377!2d-76.4850784240389!3d39.39955607162129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c809b42b742c6f%3A0x19289cbdf8a5f03e!2s4132%20E%20Joppa%20Rd%20%23110%2C%20Nottingham%2C%20MD%2021236%2C%20USA!5e1!3m2!1sen!2ske!4v1729548863309!5m2!1sen!2ske"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Map Section -->

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
