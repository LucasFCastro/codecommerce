<h1>Lista de Produtos</h1>

@foreach($products as $product)
    <ul>
        <li>
            {{ $product->name }}
        </li>
    </ul>

@endforeach

<p>Total de produtos: <b>{{ count($products) }}</b></p>