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
                         <!-- Loading spinner and success message placeholders -->
                         <div id="loading_spinner" style="display: none; margin-top: 10px;">
                             <!-- SVG Spinner for a modern look -->
                             <svg width="24" height="24" viewBox="0 0 100 100" class="loading-spinner">
                                 <circle cx="50" cy="50" r="40" stroke="gray" stroke-width="8"
                                     fill="none" />
                                 <circle cx="50" cy="50" r="40" stroke="#007bff" stroke-width="8"
                                     fill="none" stroke-linecap="round" stroke-dasharray="250"
                                     stroke-dashoffset="250">
                                     <animate attributeName="stroke-dashoffset" from="250" to="0"
                                         dur="1s" repeatCount="indefinite" />
                                 </circle>
                             </svg>
                         </div>
                         <div id="subscribe_message" style="display: none; margin-top: 10px; color: #28a745;"></div>
                     </div>

                     <!-- AJAX and loading spinner script -->
                     <script>
                         $(document).ready(function() {
                             $('#subscribe_form').on('submit', function(e) {
                                 e.preventDefault(); // Prevent default form submission

                                 // Show the loading spinner and hide any previous message
                                 $('#loading_spinner').show();
                                 $('#subscribe_message').hide();

                                 $.ajax({
                                     url: "{{ route('subscribe') }}", // Your route for handling subscription
                                     method: "POST",
                                     data: $(this).serialize(),
                                     success: function(response) {
                                         $('#loading_spinner').hide(); // Hide spinner
                                         $('#subscribe_form')[0].reset(); // Reset form fields
                                         $('#subscribe_message').text(response.success)
                                     .show(); // Show success message
                                     },
                                     error: function(xhr) {
                                         $('#loading_spinner').hide(); // Hide spinner
                                         $('#subscribe_message').text("An error occurred. Please try again.")
                                             .show();
                                     }
                                 });
                             });
                         });
                     </script>



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
