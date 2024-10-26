 <!-- BEGIN: Footer Section -->
 <footer class="footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-6">
                 <aside class="widget aboutWidget">
                     <div class="footerLogo">
                         <a href="/"><img src="images/logo2.png" alt="Hackclohting" /></a>
                     </div>
                     <div class="aboutWidContent">
                         We are dedicated to providing high-quality clothing and exceptional customer service.
                     </div>
                     <div class="subscribForm">
                         <form id="subscribe_form" method="post" action="{{ route('subscribe') }}">
                             @csrf
                             <input type="email" name="subsEmail" placeholder="Your email here" required />
                             <button type="submit">
                                 <i class="fa-solid fa-envelope"></i>
                             </button>
                         </form>
                         <div id="loading" class="loading" style="display: none;"></div>
                         <div id="message" style="display: none;"></div>
                     </div>


                     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                     <script>
                         $(document).ready(function() {
                             $('#subscribe_form').on('submit', function(event) {
                                 event.preventDefault(); // Prevent the default form submission

                                 // Show loading indicator
                                 $('#loading').show();
                                 $('#message').hide();

                                 $.ajax({
                                     url: $(this).attr('action'),
                                     type: 'POST',
                                     data: $(this).serialize(),
                                     success: function(response) {
                                         // Hide loading and show success message
                                         $('#loading').hide();
                                         $('#message').text(response.success).css('color', 'green').show();
                                         $('#subscribe_form')[0].reset(); // Reset form fields
                                     },
                                     error: function(xhr) {
                                         // Hide loading and show error message
                                         $('#loading').hide();
                                         let errorMessage = 'An error occurred. Please try again.';
                                         if (xhr.responseJSON && xhr.responseJSON.errors) {
                                             errorMessage = xhr.responseJSON.errors.subsEmail[0];
                                         }
                                         $('#message').text(errorMessage).css('color', 'red').show();
                                     }
                                 });
                             });
                         });
                     </script>
                     <style>
                         .loading {
                             border: 8px solid #f3f3f3;
                             /* Light gray */
                             border-top: 8px solid #3498db;
                             /* Blue */
                             border-radius: 50%;
                             width: 40px;
                             /* Size of the spinner */
                             height: 40px;
                             /* Size of the spinner */
                             animation: spin 1s linear infinite;
                             margin: 10px auto;
                             /* Center the spinner */
                         }

                         @keyframes spin {
                             0% {
                                 transform: rotate(0deg);
                             }

                             100% {
                                 transform: rotate(360deg);
                             }
                         }

                         #message {
                             margin-top: 10px;
                             font-size: 16px;
                         }
                     </style>
                 </aside>
             </div>
             <div class="col-lg-3 col-md-6">
                 <aside class="widget">
                     <h3 class="widgetTitle">Address</h3>
                     <div class="addressContent">
                         <div class="singleAddress">
                             <i class="fa-solid fa-location-dot"></i>
                             4132 E Joppa Rd Ste 110, Nottingham, MD 21236
                         </div>
                         <div class="singleAddress">
                             <i class="fa-solid fa-phone"></i>
                             (800) 774-9450
                         </div>
                         <div class="singleAddress">
                             <i class="fa-solid fa-envelope"></i>
                             <a href="mailto:info@hackclothing.com">info@hackclothing.com</a>
                         </div>
                     </div>
                 </aside>
             </div>
             <div class="col-lg-2 col-md-6">
                 <aside class="widget">
                     <h3 class="widgetTitle">Useful Links</h3>
                     <ul>
                         <li><a href="javascript:void(0);">Shop Now</a></li>
                         <li><a href="shop">Shop</a></li>
                         <li><a href="about">About Us</a></li>
                         <li><a href="javascript:void(0);">Support</a></li>
                     </ul>
                 </aside>
             </div>
             <div class="col-lg-3 col-md-6">
                 <aside class="widget twoColMenu">
                     <h3 class="widgetTitle">Categories</h3>
                     <ul>
                         <li><a href="shop/men">Men</a></li>
                         <li><a href="shop/women">Women</a></li>
                         <li><a href="shop/kids">Kids</a></li>
                         <li><a href="shop/clothing">Clothing</a></li>

                     </ul>
                 </aside>
             </div>
         </div>
         <div class="row footerAccessRow">
             <div class="col-md-6">
                 <div class="footerSocial">
                     <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                     <a href="javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>
                     <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="footerPayments">
                     <a href="javascript:void(0);"><i class="fa-brands fa-cc-paypal"></i></a>
                     <a href="javascript:void(0);"><i class="fa-brands fa-cc-stripe"></i></a>
                     <a href="javascript:void(0);"><i class="fa-brands fa-cc-mastercard"></i></a>
                     <a href="javascript:void(0);"><i class="fa-brands fa-cc-visa"></i></a>
                     <a href="javascript:void(0);"><i class="fa-brands fa-cc-apple-pay"></i></a>
                     <a href="javascript:void(0);"><i class="fa-brands fa-cc-amazon-pay"></i></a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12">
                 <div class="footerBar"></div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12 text-center">
                 <div class="siteInfo">
                     All rights reserved &nbsp;<a href="/">Hackclothing</a>&nbsp;&nbsp;&copy;&nbsp;&nbsp;<span
                         id="currentYear"></span>
                 </div>
                 <div>
                     Developed by <a href="https://jrmhd.tech/" target="_blank">Jrmhd Technologies</a>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- END: Footer Section -->
 <script>
     // Auto-update the year
     document.getElementById("currentYear").innerText = new Date().getFullYear();
 </script>


 <!-- BEGIN: Site Info Section -->
 <section class="siteInfoSection">
     <div class="container">
         <div class="row">
             <div class="col-md-6">

             </div>
             <div class="col-md-6">
                 <div class="footerNav">
                     <ul>
                         <li><a href="javascript:void(0);">Terms & Condition</a></li>
                         <li><a href="javascript:void(0);">Privacy Policy</a></li>
                         <li><a href="javascript:void(0);">Legal</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END: Site Info Section -->
