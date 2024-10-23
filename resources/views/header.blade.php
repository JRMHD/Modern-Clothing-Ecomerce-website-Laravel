 <header class="header01 isSticky">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <div class="headerInner01">
                     <div class="logo">
                         <a href="/">
                             <img src="images/logo.png" alt="Ulina" />
                         </a>
                     </div>
                     <div class="mainMenu">
                         <ul>
                             <li><a href="/">Home</a></li>
                             <li><a href="shop">Shop</a></li>
                             <li><a href="about">About</a></li>
                             <li><a href="faq">FAQ's</a></li>
                             <li><a href="contact">Contacts</a></li>
                         </ul>
                     </div>
                     <div class="accessNav">
                         <a href="javascript:void(0);" class="menuToggler"><i class="fa-solid fa-bars"></i>
                             <span>Menu</span></a>
                         <div class="anSocial">
                             <div class="ansWrap">
                                 <a class="fac" href="javascript:void(0);"><i
                                         class="fa-brands fa-facebook-f"></i></a>
                                 <a class="twi" href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                                 <a class="lin" href="javascript:void(0);"><i
                                         class="fa-brands fa-linkedin-in"></i></a>
                                 <a class="ins" href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                             </div>
                             <a class="tog" href="javascript:void(0);"><i class="fa-solid fa-share-alt"></i></a>
                         </div>
                         <div class="anSelects">
                             <div class="anSelect">
                                 <select name="languages">
                                     <option value="ENG">EN</option>
                                 </select>
                             </div>
                             <div class="anSelect">
                                 <select name="currency">
                                     <option value="USD">USD</option>
                                 </select>
                             </div>
                         </div>
                         <div class="anItems">
                             <div class="anSearch">
                                 <a href="javascript:void(0);"><i class="fa-solid fa-search"></i></a>
                             </div>
                             <div class="anUser">
                                 @auth
                                     <!-- If user is authenticated, redirect to dashboard -->
                                     <a href="{{ route('dashboard') }}">
                                         <i class="fa-solid fa-user"></i>
                                     </a>
                                 @else
                                     <!-- If user is not authenticated, show login/register modal -->
                                     <a href="javascript:void(0);" id="userLoginBtn">
                                         <i class="fa-solid fa-user"></i>
                                     </a>
                                 @endauth
                             </div>
                             <!-- BEGIN: Login/Register Modal -->
                             <div id="userLoginModal" class="login-modal">
                                 <div class="login-modal-content">
                                     <span class="closeModal">&times;</span>
                                     <div class="login-modal-body">
                                         <h2>Welcome</h2>
                                         <p>Please login or create an account</p>

                                         <!-- Login Button -->
                                         <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                                         <!-- Register Button -->
                                         <a href="{{ route('register') }}" class="btn btn-secondary">Create Account</a>
                                     </div>
                                 </div>
                             </div>
                             <!-- END: Login/Register Modal -->

                             <style>
                                 /* Modal Container */
                                 .login-modal {
                                     display: none;
                                     position: fixed;
                                     z-index: 999;
                                     left: 0;
                                     top: 0;
                                     width: 100%;
                                     height: 100%;
                                     background-color: rgba(0, 0, 0, 0.5);
                                     overflow: auto;
                                     justify-content: center;
                                     align-items: center;
                                 }

                                 /* Modal Content */
                                 .login-modal-content {
                                     background-color: #fff;
                                     margin: 15% auto;
                                     padding: 20px;
                                     border-radius: 10px;
                                     width: 100%;
                                     max-width: 400px;
                                     text-align: center;
                                 }

                                 /* Close Button */
                                 .closeModal {
                                     color: #aaa;
                                     float: right;
                                     font-size: 28px;
                                     font-weight: bold;
                                 }

                                 .closeModal:hover,
                                 .closeModal:focus {
                                     color: #333;
                                     text-decoration: none;
                                     cursor: pointer;
                                 }

                                 /* Buttons */
                                 .login-modal-body .btn {
                                     display: block;
                                     margin: 10px 0;
                                     padding: 12px 20px;
                                     border: none;
                                     border-radius: 8px;
                                     font-size: 16px;
                                     cursor: pointer;
                                 }

                                 .btn-primary {
                                     background-color: #007bff;
                                     color: white;
                                 }

                                 .btn-secondary {
                                     background-color: #6c757d;
                                     color: white;
                                 }
                             </style>
                             <script>
                                 // Show the modal when the user clicks on the icon
                                 document.getElementById('userLoginBtn').addEventListener('click', function() {
                                     document.getElementById('userLoginModal').style.display = 'flex';
                                 });

                                 // Close the modal when the close button is clicked
                                 document.querySelector('.closeModal').addEventListener('click', function() {
                                     document.getElementById('userLoginModal').style.display = 'none';
                                 });

                                 // Close the modal if the user clicks outside the modal content
                                 window.onclick = function(event) {
                                     var modal = document.getElementById('userLoginModal');
                                     if (event.target === modal) {
                                         modal.style.display = 'none';
                                     }
                                 }
                             </script>

                             <div class="anCart">
                                 <a href="{{ route('cart.index') }}">
                                     <i class="fa-solid fa-shopping-cart"></i>
                                     <span>{{ $cartCount }}</span> <!-- Use the dynamic cart count -->
                                 </a>
                             </div>


                         </div>
                         <div class="anSupport">
                             <i class="fa-solid fa-headset"></i>
                             <h3>Helpline</h3>
                             <h3>(870) 774-9450</h3>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- BEGIN: Search Popup Section -->
 <section class="popup_search_sec">
     <div class="popup_search_overlay"></div>
     <div class="pop_search_background">
         <div class="container">
             <div class="row">
                 <div class="col-sm-6 col-md-6">
                     <div class="popup_logo">
                         <a href="/"><img src="images/logo2.png" alt="Ulina" /></a>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6">
                     <a href="javascript:void(0);" id="search_Closer" class="search_Closer"></a>
                 </div>
             </div>
         </div>
         <div class="middle_search">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 text-center">
                         <div class="popup_search_form">
                             <form method="get" action="#">
                                 <input type="search" name="s" id="s"
                                     placeholder="Type Words and Hit Enter" />
                                 <button type="submit">
                                     <i class="fa-solid fa-search"></i>
                                 </button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END: Search Popup Section -->
