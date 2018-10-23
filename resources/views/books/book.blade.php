@extends('layouts.master')
@section('pageTitle')
{{ $book->title }} at Books Unlimited
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">{{ $book->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <img class="book-image" src="https://fakeimg.pl/400/282828/?text={{ $book->title }}" alt="{{ $book->title }}">
        </div>
        <div class="col-sm-12 col-md-9">
            <p>Author: {{ $book->author }}</p>
            <p>Description: {{ $book->description }}</p>
            <p>Price: ${{ $book->price }}</p>
            <p>
                @foreach ($book->genres as $genre)
                    <a href="#" class="badge badge-secondary">{{ $genre->name }}</a>
                @endforeach
            </p>
            <p><a href="#" class="btn btn-success">Purchase</a></p>
        </div>
    </div>

@endsection
