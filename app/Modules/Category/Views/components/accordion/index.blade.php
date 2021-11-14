<div class="accordion">

    @foreach ($categories as $category)

        @if ($category->parent && $category->parent->id === 1)

            <x-category::accordion.item :category="$category">

                @if ($category->children->count())
                    <x-category::accordion.item-content :category="$category" />
                    <x-category::accordion.add-new-sub-category :category="$category" />
                @else
                    <x-category::accordion.add-new-sub-category :category="$category" />
                @endif

            </x-category::accordion.item>

        @endif

    @endforeach

</div>
