@extends('layouts.master')
@section('pageTitle')
Create Book
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="my-4">Create a Book</h1>
        @include('partials.errors')
        <form action="{{ route('admin.create') }}" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                @foreach ($genres as $genre)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="{{ $genre->id }}" name="genres[]">
                        <label for="" class="form-check-label">{{ $genre->name }}</label>
                    </div>
                @endforeach
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

@endsection
