<!-- If RootCategory already exists then show form for creating Start category whith RootCategory as 'Parent' -->
<!-- Then creating category by sending POST request to the route('category-create') -->

<div class="accordion--link-container">
    <a class="accordion--link" href="{{ route('category-create') }}">
        add first category
        <svg xmlns="http://www.w3.org/2000/svg" class="accordion--link-icon" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </a>
</div>
