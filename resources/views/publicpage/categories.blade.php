<h1>Lista categorie</h1>


<ul>
    @foreach($categories as $category)
    <li>{{ $category->name }} >> {{ $category->description }}</li>
    @endforeach   
</ul>