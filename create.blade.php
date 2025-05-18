@extends('layout')

@section('content')
    <h2>Add Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required><br><br>
        <textarea name="description" placeholder="Description"></textarea><br><br>
        <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>
        <button type="submit">Create</button>
    </form>
    <br><a href="{{ route('products.index') }}">← Back</a>
@endsection
