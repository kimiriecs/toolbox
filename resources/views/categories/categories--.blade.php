@extends('layouts.app')

@section('content')

    <ul>

        {{-- @foreach ($categories as $category)

            <li>
                {{ $category->name }}

                @routeIs('all-categories-with-children')
                @includeWhen($category->children->count(), 'categories.category', ['children' => $category->children])
                @includeUnless($category->children->count(), 'categories.noCategories')
                @endRouteIs

            </li>

        @endforeach --}}


        <?php function recursive($collection)
        {
            if (!$collection) {
                echo "<li>It\'s empty</li>";
            } else {
                foreach ($collection as $item) {
                    echo "<li>{$item->name}</li>";
                    if (!$item->children->count()) {
                        echo "<li>It\'s empty</li>";
                    } else {
                        recursive($item->children, 'child');
                    }
                }
            }
        }
        recursive($categories);
       ?>



        @eachRecursive($categories)

    </ul>

@endsection
