@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Foods</h1>
    <a href="{{ route('foods.create') }}" class="btn btn-primary">Add Food</a>
    <table class="table">
        <thead>
            <tr>
                
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>image</th>
                <th>production date</th>
                <th>shelf life</th>
                <th>Actions</th>
               
        
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
            <tr>
                
                <td>{{ $food->name }}</td>
                <td>{{ $food->desc }}</td>
                <td>{{ $food->price }}</td>
                <td>
                    @if($food->image_url)
                        <img src="{{ $food->image_url }}" alt="{{ $food->name }}" width="50">
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $food->production_date }}</td>
                <td>{{ $food->shelf_life }}</td>
                <td>
                    <a href="{{ route('foods.show', $food->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
