<ul>
    @foreach ($categories as $category)
        <li>
            <p>Name: {{ $category->name }}</p>
            @include('children_categories', ['categories' => $category->childrenCategories])
        </li>
    @endforeach
</ul>
