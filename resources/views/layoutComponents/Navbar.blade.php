 <!--  here Navbar Logo Section starts -->
 <div class="navbar-logo">
     <span class="navbar-logo-first">Tool</span>
     <span class="navbar-logo-second">Box</span>
 </div>
 <!--  here Navbar Logo Section ends -->

 <!--  here Navbar Links Section ends -->
 
 @if (Route::has('admin.dashboard.subcategory.index') && !Request::is('home*') && !Request::is('/') && !Request::is('register*') && !Request::is('login*'))
     <div class="navbar-link">
         <a href="{{ route('admin.dashboard.subcategory.index') }}">Dashboard</a>
     </div>
 @endif

 @if (Route::has('home') && !Request::is('home*') && !Request::is('/') && !Request::is('register*') && !Request::is('login*'))
     <div class="navbar-link">
         <a href="{{ route('home') }}" target="_blank">Site</a>
     </div>
 @endif

 @if (Route::has('all-categories') && !Request::is('home*') && !Request::is('/') && !Request::is('register*') && !Request::is('login*'))
     <div class="navbar-link">
         <a href="{{ route('all-categories') }}">Categories</a>
     </div>
 @endif

 @if (Route::has('home') && !Request::is('admin*') )
     <div class="navbar-link">
         <a href="{{ route('home') }}">Home</a>
     </div>
 @endif

 @if (Route::has('login'))
     <div class="navbar-link">
         <a href="{{ route('login') }}">Login</a>
     </div>
 @endif

 @if (Route::has('register'))
     <div class="navbar-link">
         <a href="{{ route('register') }}">Register</a>
     </div>
 @endif

 @if (Route::has('logout'))
     <div class="navbar-link">
         <a href="{{ route('logout') }}">Logout</a>
     </div>
 @endif
 <!--  here Navbar Links Section ends -->
