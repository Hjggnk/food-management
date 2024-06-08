@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Food Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $food->name }}
        </div>
        <div class="card-body">
            @if($food->image_url)
                <img src="{{ $food->img_url }}" alt="{{ $food->name }}" class="img-fluid mb-3">
            @endif
            <p><strong>description: </strong>{{ $food->desc }}</p>
            <p><strong>price: </strong>{{ $food->price }}</p>
            <p><strong>production date:</strong>{{ $food->production_date }}</p>
            <p><strong>shelf life: </strong>{{ $food->shelf_life }} month </p>
         
            <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
