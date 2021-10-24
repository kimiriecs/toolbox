 <!--  here Navbar Logo Section starts -->
 <div class="navbar-logo">
     <span class="navbar-logo-first">Tool</span>
     <span class="navbar-logo-second">Box</span>
 </div>
 <!--  here Navbar Logo Section ends -->


 <!--  here Navbar Links Section ends -->
 @if (Route::has('login'))
     <div class="navbar-link">Login</div>
 @endif
 @if (Route::has('register'))
     <div class="navbar-link">Register</div>
 @endif
 @if (Route::has('home'))
     <div class="navbar-link">Home</div>
 @endif
 <!--  here Navbar Links Section ends -->
