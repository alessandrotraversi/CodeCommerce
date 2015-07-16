<h1>Esempio View</h1>


<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach   
</ul>