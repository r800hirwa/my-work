<h1>Edit Product</h1>
<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}"><br><br>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}"><br><br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('products.index') }}">Back</a>
