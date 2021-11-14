<!--  Sidebar starts here -->
@if ($categories->count() > 1)

    <x-category::accordion.index :categories="$categories" />
                
    <x-category::accordion.add-new-category />
    
@elseif($categories->count() === 1 )

<!-- If RootCategory already exists 
    then show form for creating Start category 
    whith RootCategory as 'Parent'
    Then creating category by sending POST request 
    to the route('category-create') -->
    <x-category::accordion.add-first-category />
    
@else

<!-- If there are no yet categories 
    then send POST reques for creating RootCategory 
    and then show form for creating Start category 
    whith RootCategory as 'Parent' 
    Then creating category by sending POST request 
    to the route('category-create') -->
    <x-category::accordion.add-root-category />

@endif

<!--  Sidebar ends here -->
