<x-dashboard-layout>

<a href="{{ route('products.create') }}">Create New Product</a>

<section>
    @foreach ($products as $product)
        <article>
            <a href="{{ route("products.product", $product->id) }}">
                <h1>{{$product->name}}</h1>
            </a>
            <p>{{$product->code}}</p>
            <form action="{{ route('products.destroy', $product->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </article>
    @endforeach
</section>

</x-dashboard-layout>