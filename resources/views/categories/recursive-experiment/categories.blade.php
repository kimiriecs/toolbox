@extends('layouts.app')

@section('content')

    <ul>

        @foreach ($categories as $category)

            <li>
                {{ $category->name }}

                @routeIs('all-categories-with-children')
                @includeWhen($category->children->count(), 'categories.category', ['children' => $category->children])
                @includeUnless($category->children->count(), 'categories.noCategories')
                @endRouteIs

            </li>

        @endforeach

    </ul>

@endsection
