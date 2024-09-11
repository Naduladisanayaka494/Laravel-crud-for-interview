@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add New Item</h1>
        <a href="{{ route('items.index') }}" class="btn btn-secondary mb-3">Back to Items List</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Item Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter item name">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description" placeholder="Enter item description"></textarea>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" class="form-control" placeholder="Enter item quantity">
            </div>

            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>
    </div>
@endsection
