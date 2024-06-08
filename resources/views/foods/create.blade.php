@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Food</h1>
    <form action="{{ route('foods.store') }}" method="POST">
        @csrf
    
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="desc">description</label>
            <input type="text" name="desc" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="img_url">image</label>
            <input type="text" name="img_url" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="production_date">production date</label>
            <input type="date" name="production_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="shelf_life">shelf life</label>
            <input type="number" name="shelf_life" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
