@extends('layouts.admin-layout')


@section('content')

    <div class="">

        <form action="{{ route('category-store') }}" method="POST" style="display:flex;
                                    flex-direction:column;
                                    justify-content:center;
                                    align-items:center;
                                    padding:5rem;
                                    margin-top:1rem;
                            ">
            @csrf

            <input type="text" id="name" name="name" style="padding:1rem 2rem;
                                                                margin-bottom:1rem;
                                                                border-radius:0.5rem;
                                                                border:none;
                                                                outline:none;
                                                                color:#8aa0ca;
                                                                ">
            <label for="name">Category Name</label>



            <input type="text" id="slug" name="slug" style="padding:1rem 2rem;
                                                                margin-bottom:1rem;
                                                                border-radius:0.5rem;
                                                                border:none;
                                                                outline:none;
                                                                color:#8aa0ca;
                                                                ">
            <label for="name">Category Slug</label>


            {{-- <input type="text" id="parent" name="parent" style="padding:1rem 2rem;
                                                    margin-bottom:1rem;
                                                    border-radius:0.5rem;
                                                    border:none;
                                                    outline:none;
                                                    color:#8aa0ca;
                                                    "> --}}

            <select
            {{-- <select disabled = "{!! Route::is('sub-category-create') ? true : false !!}" --}}
                    name="parent" id="parent" 
                    style="
                    /* appearance: none; */
                            padding:1rem 2rem;
                            margin-bottom:1rem;
                            border-radius:0.5rem;
                            border:none;
                            outline:none;
                            color:#8aa0ca;
                            ">
                @if (Route::is('sub-category-create'))
                    <option value="{{ $category->id }}" default>{{ ucfirst($category->name) }}</option>
                @else
                <option value="1" default>Root Category</option>
                    @foreach ($categories as $category)
                        @if ($category->parent_id === 1)
                            <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                        @endif
                    @endforeach
                @endif
            </select>
            <label for="parent">Parent Category ID</label>


            <button type="submite" style="width: 30%;
                                        height: 40px;
                                        background-color: #314b7c;
                                        color: #8aa0ca;
                                        margin-bottom: 1rem;
                                        border-radius: 0.5rem;
                                        display:flex;
                                        justify-content:center;
                                        align-items:center;
                                        ">
                <span>save</span>
            </button>
        </form>

    </div>

@endsection
