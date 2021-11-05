
<!--  here Categories Section starts -->
@if ($categories->count())
        
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
                    <div class="sidebar-link"  style="display:flex; align-items:center;">
                        <span  style="display:flex; height:100%; align-items:center;">
                            <a href="{{ route('sub-category-create', ['category' => $category->slug]) }}" style="color: rgb(199, 255, 199)">create new category</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="onIcon" fill="none" viewBox="0 0 24 24" stroke="rgb(199, 255, 199)" style="height: 1.5rem; width:1.5rem;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </div>
                @else
                <div class="sidebar-link"  style="display:flex; align-items:center;">
                    <span  style="display:flex; height:100%; align-items:center;">
                        <a href="{{ route('sub-category-create', ['category' => $category->slug]) }}" style="color: rgb(199, 255, 199)">create new category</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="onIcon" fill="none" viewBox="0 0 24 24" stroke="rgb(199, 255, 199)" style="height: 1.5rem; width:1.5rem;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </div>
                @endif
            </div>
        </div>

    @endif

@endforeach 
@else
<!-- If no categories send POST reques for creating RootCategory and then show form for creating Start category whith RootCategory as 'Parent' -->
<!-- Then creating category by sending POST request to the route('category-create') -->
<div class="sidebar-link"  style="display:flex; align-items:center;">
<span  style="display:flex; height:100%; align-items:center;">
    <a href="{{ route('start-category-create', ['category' => 'RootCategory']) }}" style="color: rgb(199, 255, 199)">create new category</a>
    <svg xmlns="http://www.w3.org/2000/svg" class="onIcon" fill="none" viewBox="0 0 24 24" stroke="rgb(199, 255, 199)" style="height: 1.5rem; width:1.5rem;">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
</span>
</div>

@endif

<!--  here Categories Section ends -->
