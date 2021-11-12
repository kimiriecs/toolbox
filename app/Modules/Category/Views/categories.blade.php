@extends('layouts.admin-layout')


@section('content')

    <ul style="padding: 2rem; 
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;">
        @foreach ($categories as $category)
            <li style="width: 30%;
                        height: 40px;
                        background-color: #314b7c;
                        color: #8aa0ca;
                        margin-bottom: 1rem;
                        border-radius: 0.5rem;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        ">
                <span>
                    <a href="{{ route($category->slug) }}" style="color: #8aa0ca;
                                        ">
                        {{ $category->name }}
                    </a>
                </span>
            </li>
        @endforeach
    </ul>
    <button style="width: 30%;
                    height: 40px;
                    background-color: #314b7c;
                    color: #8aa0ca;
                    margin-bottom: 1rem;
                    border-radius: 0.5rem;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    ">
        <span>
            <a href="{{ route('category-create') }}" style="color: #8aa0ca;">
                new
            </a>
        </span>
    </button>

@endsection
