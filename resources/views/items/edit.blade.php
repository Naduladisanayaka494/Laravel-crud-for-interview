@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Item</h1>
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

        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Item Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $item->name }}" placeholder="Enter item name">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description" placeholder="Enter item description">{{ $item->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" class="form-control" value="{{ $item->quantity }}" placeholder="Enter item quantity">
            </div>

            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
@endsection
