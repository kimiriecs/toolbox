
<!--  here Categories Section starts -->

    @foreach ($categories as $category)

        @if ($category->parent && $category->parent->id === 1)
        {{-- @if ($category->children->count() > 0) --}}
        {{-- @if ($category->parent && $category->parent->id === 1 && $category->children->count() > 0) --}}
            
            <div class="sidebar--section">
                <h3 class="sidebar--button">{{ $category->name }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="sidebar--button-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </h3>
                <div class="sidebar--content-container">
                    @if ($category->children->count())
                        @foreach ($category->children as $sub)
                            <div class="sidebar-link">
                                <a href="{{ route($sub->slug)}}">{{ $sub->name }}</a>
                            </div>
                        @endforeach
                    @else
                        <div class="sidebar-link">
                            <a href="#">create new category</a>
                        </div>
                    @endif
                </div>
            </div>

        @endif

   @endforeach 
 
 <!--  here Categories Section ends -->
