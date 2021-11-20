<ul style="padding: 2rem; 
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;">
    @foreach ($data['categories'] as $category)
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
                @if ($category->parent_id === null || $category->parent_id === 1)
                    <a href="{{ route('category-show', ['category' => $category->slug]) }}" style="color: #8aa0ca;">
                @else
                    <a href="{{ route('category-show', ['category' => $category->parent->slug, 'subCategory' => $category->slug]) }}" style="color: #8aa0ca;">
                @endif
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