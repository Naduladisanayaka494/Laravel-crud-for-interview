@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Item Details</h1>
        <a href="{{ route('items.index') }}" class="btn btn-secondary mb-3">Back to Items List</a>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Item Name: {{ $item->name }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $item->description }}</p>
                <p class="card-text"><strong>Quantity:</strong> {{ $item->quantity }}</p>
            </div>
        </div>
    </div>
@endsection
