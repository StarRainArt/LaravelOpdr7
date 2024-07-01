<x-dashboard-layout>

<a href="{{ route('dashboard') }}">Return</a>
<article>
    <h1>{{$product->name}}</h1>
    <h3>{{$product->price}} - {{$product->quantity}}</h3>
    <p>{{$product->description}}</p>
    <a href="{{ route('products.edit', $product->id)}}">Edit Product</a>
</article>

</x-dashboard-layout>