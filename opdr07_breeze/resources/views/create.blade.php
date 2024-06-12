<h1>New Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="code">Barcode: </label>
    <input type="number" name="code" id="code" required>
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" required>
    <label for="description">Description: </label>
    <textarea name="description" id="description" required></textarea>
    <label for="quantity">Quantity: </label>
    <input name="quantity" id="quantity" type="number" max="100" min="0" required>
    <label for="price">Price: </label>
    <input type="number" name="price" id="price" step="0.01" max="999999.99" min="0.01" required>
    <button type="submit">Create Product</button>
</form>