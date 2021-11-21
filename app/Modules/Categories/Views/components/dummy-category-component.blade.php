<br>
<h3>Category name: {{ $category->name }}</h3>
<br>
<h3>Current route name: {{ Route::currentRouteName() }}</h3>
<br>
<h3>Current route uri: {{ Request::path() }}</h3>

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
    <a href="{{ route('all-categories') }}" style="color:#8aa0ca;">
        AllCategories
    </a>
</button>