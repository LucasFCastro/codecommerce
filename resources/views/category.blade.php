<h1>Lista de Categorias</h1>

@foreach($categories as $category)
    <ul>
        <li>
            {{ $category->name }}
        </li>
    </ul>

@endforeach

<p>Total de categorias: <b>{{ count($categories) }}</b></p>