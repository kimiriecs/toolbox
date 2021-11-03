 <!--  here Categories Section starts -->
 <div class="sidebar--section">
     <h3 class="sidebar--button">Categories
         <svg xmlns="http://www.w3.org/2000/svg" class="sidebar--button-icon" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
         </svg>
     </h3>
     <div class="sidebar--content-container">
     @foreach ($categories as $category)
     <div class="sidebar-link">
         @if ($category->id == 1)
            <a href="{{ route('category-nocategory') }}">{{ $category->name }}</a>
        @else    
            <a href="{{ route('category-' . $category->id-1) }}">{{ $category->name }}</a>
        @endif
    </div>
    @endforeach
     </div>
                
            
     {{-- <div class="sidebar--content-container">
         <div class="sidebar-link">
             <a href="{{ route('all-categories') }}">all-categories</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('all-categories-with-children') }}">all-categories-with-children</a>
         </div>
         <hr class="sidebar-devider">
     </div> --}}
 </div>
 <!--  here Categories Section ends -->



 <!--  here Relationships Section starts -->
 <div class="sidebar--section">
     <h3 class="sidebar--button">Relationships
         <svg xmlns="http://www.w3.org/2000/svg" class="sidebar--button-icon" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
         </svg>
     </h3>
     <div class="sidebar--content-container">
         <div class="sidebar-link">
             <a href="{{ route('one-to-one') }}">one-to-one</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('one-to-many') }}">one-to-many</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('many-to-many') }}">many-to-many</a>
         </div>
         <hr class="sidebar-devider">
         <div class="sidebar-link">
             <a href="{{ route('has-one-through') }}">has-one-through</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('has-many-through') }}">has-many-through</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('has-one-of-many') }}">has-one-of-many</a>
         </div>
         <hr class="sidebar-devider">
         <div class="sidebar-link">
             <a href="{{ route('polimorphic-one-to-one') }}">polimorphic-one-to-one</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('polimorphic-one-to-many') }}">polimorphic-one-to-many</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('polimorphic-one-of-many') }}">polimorphic-one-of-many</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('polimorphic-many-to-many') }}">polimorphic-many-to-many</a>
         </div>

         <hr class="sidebar-devider">
     </div>
 </div>
 <!--  here Relationships Section ends -->

 <!--  here Form Components Section starts -->
 <div class="sidebar--section">
     <h3 class="sidebar--button">UI Components
         <svg xmlns="http://www.w3.org/2000/svg" class="sidebar--button-icon" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
         </svg>
     </h3>
     <div class="sidebar--content-container">

         <div class="sidebar-link">
             <a href="{{ route('tables') }}">tables</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('buttons') }}">buttons</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('inputs') }}">inputs</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('checkBoxes') }}">checkboxes</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('radioButtons') }}">radiobuttons</a>
         </div>

         <hr class="sidebar-devider">
     </div>
 </div>
 <!--  here Form Components Section ends -->

 <!--  here Form Users Section starts -->
 <div class="sidebar--section">
     <h3 class="sidebar--button">Users
         <svg xmlns="http://www.w3.org/2000/svg" class="sidebar--button-icon" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
         </svg>
     </h3>
     <div class="sidebar--content-container">

         <div class="sidebar-link">
             <a href="{{ route('administration') }}">Administration</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('trainers') }}">Trainers</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('trainees') }}">Trainees</a>
         </div>
         <div class="sidebar-link">
             <a href="{{ route('folowers') }}">Folowers</a>
         </div>

         <hr class="sidebar-devider">
     </div>
 </div>
 <!--  here Form Users Section ends -->
