@extends('layouts.app')

@section('content')

    <ul>

        @foreach ($categories as $category)
            <li>
                {{ $category->name }}

                @includeWhen($category->children->count(), 'categories.category', ['children' => $category->children])

                @includeUnless($category->children->count(), 'categories.noCategories')

            </li>
        @endforeach

    </ul>

@endsection
