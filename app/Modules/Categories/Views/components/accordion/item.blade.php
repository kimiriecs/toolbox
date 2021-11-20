<div class="accordion--item">
    <h3 class="accordion--header">
        <button class="accordion--button" data-target="#{{ $category->id }}">{{ $category->name }}
            <svg xmlns="http://www.w3.org/2000/svg" class="accordion--button-icon" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </h3>
    <div class="accordion--collapse-content" id="#{{ $category->id }}">
        <div class="accordion--collapse-content--body">
            {{ $slot }}
        </div>
    </div>
</div>
