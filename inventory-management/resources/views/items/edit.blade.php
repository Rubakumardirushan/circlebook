@extends('layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Item</h2>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $item->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label fw-bold">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $item->quantity }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label fw-bold">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $item->price }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Item</button>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
