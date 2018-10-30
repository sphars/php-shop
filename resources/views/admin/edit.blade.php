@extends('layouts.master')
@section('pageTitle')
Edit Book
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="my-4">Edit Book</h1>
        @include('partials.errors')
        <form action="{{ route('admin.update') }}" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book['title'] }}">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ $book['author'] }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $book['price'] }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $book['description'] }}">
            </div>
            <div class="form-group">
                @foreach ($genres as $genre)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="{{ $genre->id }}" name="genres[]"
                        @if ($book->genres->contains($genre->id)) checked=checked @endif >
                        <label for="" class="form-check-label">{{ $genre->name }}</label>
                    </div>
                @endforeach
            </div>
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $bookId }}">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('admin.delete', ['id' => $book->id]) }}" class="btn btn-danger">Delete</a>
        </form>
    </div>
</div>

@endsection
