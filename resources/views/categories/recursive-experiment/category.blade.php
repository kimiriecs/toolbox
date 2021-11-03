<ul style="margin-left: 1rem">

    @foreach ($children as $child)

    <li style="margin-left: 1rem">

        {{ $child->name }}

        @includeWhen($child->children->count(), 'categories.category', ['children' => $child->children])

        @includeUnless($child->children->count(), 'categories.noCategories')

    </li>

    @endforeach

</ul>
