@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Item Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row" class="w-25">Name:</th>
                        <td>{{ $item->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Description:</th>
                        <td>{{ $item->description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Quantity:</th>
                        <td>{{ $item->quantity }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Price:</th>
                        <td>{{ $item->price }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ route('items.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
