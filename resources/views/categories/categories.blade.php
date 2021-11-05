@extends('layouts.admin-layout')


@section('content')

    <ul 
    style="padding: 2rem; 
            /* background-color: hsl(219, 57%, 56%);  */
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;"
            >
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
                    {{ $category->name }}
                </span>
            </li>            
        @endforeach
    </ul>

    <form action="{{ route('category-create') }}" method="POST">
    @csrf

    <input type="text" name="name">
    <input type="text" name="slug">
    <input type="text" name="parent">

    <button type="submit">save</button>
    </form>
    
@endsection