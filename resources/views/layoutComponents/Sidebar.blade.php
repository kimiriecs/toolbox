<!--  here Categories Section starts -->
@if ($categories->count() > 1)

    @foreach ($categories as $category)

        @if ($category->parent && $category->parent->id === 1)

            <div class="accordion">
                <h3 class="accordion--button">{{ $category->name }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="accordion--button-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </h3>
                <div class="accordion--content-container">
                    @if ($category->children->count())
                        @foreach ($category->children as $sub)
                            <div class="accordion--link-container">
                                <span class="accordion--link-wrapper">
                                    <a class="accordion--link" href="{{ route($sub->slug) }}">{{ $sub->name }}</a>
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="accordion--link-icon" fill="none"
                                        viewBox="0 0 24 24" stroke="rgb(199, 255, 199)"
                                        >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg> --}}
                                </span>
                            </div>
                        @endforeach
                        <div class="accordion--link-container">
                            <span class="accordion--link-wrapper">
                                <a class="accordion--link" href="{{ route('sub-category-create', ['category' => $category->slug]) }}"
                                    style="color: rgb(199, 255, 199)">create new sub-category</a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="accordion--link-icon" fill="none"
                                    viewBox="0 0 24 24" stroke="rgb(199, 255, 199)"
                                    >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </div>
                    @else
                        <div class="accordion--link-container">
                            <span class="accordion--link-wrapper">
                                <a class="accordion--link" href="{{ route('sub-category-create', ['category' => $category->slug]) }}"
                                    style="color: rgb(199, 255, 199)">create new sub-category</a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="accordion--link-icon" fill="none"
                                    viewBox="0 0 24 24" stroke="rgb(199, 255, 199)"
                                    style="height: 1.5rem; width:1.5rem;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </div>
                    @endif
                </div>
            </div>

        @endif

    @endforeach

    <div class="accordion--link-container">
        <span class="accordion--link-wrapper">
            <a class="accordion--link" href="{{ route('category-create') }}"
                style="color: rgb(199, 255, 199)">
                create new category
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="accordion--link-icon" fill="none"
                viewBox="0 0 24 24" stroke="rgb(199, 255, 199)"
                >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
    </div>

@elseif($categories->count() === 1 )

    <!-- If RootCategory already exists then show form for creating Start category whith RootCategory as 'Parent' -->
    <!-- Then creating category by sending POST request to the route('category-create') -->

    <div class="accordion--link-container">
        <span class="accordion--link-wrapper">
            <a class="accordion--link" href="{{ route('category-create') }}"
                style="color: rgb(199, 255, 199)">
                create first category
            </a>
            <svg xmlns="http://www.w3.org/2000/svg"  class="accordion--link-icon" fill="none"
                viewBox="0 0 24 24" stroke="rgb(199, 255, 199)"
                >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
    </div>

@else
    <!-- If no categories send POST reques for creating RootCategory and then show form for creating Start category whith RootCategory as 'Parent' -->
    <!-- Then creating category by sending POST request to the route('category-create') -->
    
        {{-- <form name="myform" 
                action="{{ route('root-category-create') }}" 
                method="post" 
                class="sidebar-link" 
                style="display:flex; align-items:center;">

            @csrf

            <input type="text" style="display: none" name="name" value="Root Category">

            <div onclick="myform.submit()"
                style="cursor: pointer; 
                        color: rgb(199, 255, 199); 
                        display:flex; 
                        max-height:5rem; 
                        align-items:center;">
                <span style="display: inline-block;
                            width: 100%;
                            height: 100%;
                            padding: 1rem 2rem;">
                    create new category
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="accordion--link-icon" fill="none" viewBox="0 0 24 24"
                    stroke="rgb(199, 255, 199)">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </form> --}}
        <div class="accordion--link-container">
            <span class="accordion--link-wrapper">
                <a class="accordion--link" href="{{ route('root-category-create') }}"
                    style="color: rgb(199, 255, 199)">
                    create first category
                </a>
                <svg xmlns="http://www.w3.org/2000/svg"  class="accordion--link-icon" fill="none"
                    viewBox="0 0 24 24" stroke="rgb(199, 255, 199)"
                    >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
        </div>


@endif

<!--  here Categories Section ends -->
