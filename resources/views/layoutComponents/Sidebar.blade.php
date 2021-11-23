<!--  Sidebar starts here -->

@push('accordion-styles')
    <link rel="stylesheet" href="{{ asset('accordion/accordion.css') }}">
@endpush

@push('accordion-scripts')
    <script src="{{ asset('accordion/accordion.js') }}"></script>
@endpush


@if ($categories->count() > 1)

    <x-categories::accordion.index :categories="$categories">
        @foreach ($categories as $category)

            @if ($category->parent_id === 1)

                <x-categories::accordion.item :category="$category">

                    @if ($category->children->count())

                        @foreach ($category->children as $subCategory)

                            <x-categories::sub-category-button :category="$category" :subCategory="$subCategory"/>

                        @endforeach

                        <x-categories::add-new-sub-category-button :category="$category" />
                    @else
                        <x-categories::add-new-sub-category-button :category="$category" />
                    @endif

                </x-categories::accordion.item>

            @endif

        @endforeach
    </x-categories::accordion.index>

    <x-categories::add-new-category-button />

@elseif($categories->count() === 1 )

    <!-- If RootCategory already exists 
    then show form for creating Start category 
    whith RootCategory as 'Parent'
    Then creating category by sending POST request 
    to the route('category.create') -->
    <x-categories::add-first-category-button />

@else

    <!-- If there are no yet categories 
    then send POST reques for creating RootCategory 
    and then show form for creating Start category 
    whith RootCategory as 'Parent' 
    Then creating category by sending POST request 
    to the route('category.create') -->
    <x-categories::add-root-category-button />

@endif

<!--  Sidebar ends here -->
