<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="code">Code:</label>
        <input type="text" id="code" name="code" value="{{ $product->code }}">
    </div>

    <div>
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}">
    </div>

    <div>
        <label for="quantity">Aantal:</label>
        <input type="number" id="quantity" name="quantity" value="{{ $product->quantity }}">
    </div>

    <div>
        <label for="price">Prijs:</label>
        <input type="text" id="price" name="price" value="{{ $product->price }}">
    </div>

    <div>
        <label for="description">Beschrijving:</label>
        <textarea id="description" name="description">{{ $product->description }}</textarea>
    </div>

    <button type="submit">Bijwerken</button>
</form>

<a href="{{ route('products.dashboard') }}">Go Back</a>