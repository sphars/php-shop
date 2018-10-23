@extends('layouts.master')
@section('pageTitle')
Books at Books Unlimited
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Books at Books Unlimited</h1>
        </div>
    </div>
    @if (isset($books))
    <div class="row">
        @foreach ($books as $book)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card my-2">
                <img class="book-image card-img-top" src="https://fakeimg.pl/400/282828/?text={{ $book->title }}" alt="{{ $book->title }}">
                <div class="card-body">
                    <h5 class="card-title book-title">{{ $book->title }}</h5>
                    <p class="card-text book-author">{{ $book->author }}</p>
                    <p class="card-text book-genres">
                        @foreach ($book->genres as $genre)
                            <a href="#" class="badge badge-secondary">{{ $genre->name }}</a>
                        @endforeach
                    </p>
                    <div class="text-center my-2">
                        <a href="{{ route('books.book', ['id' => $book->id]) }}" class="btn btn-outline-info">View </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$books->links()}}
        </div>
    </div>
    @endif
@endsection
