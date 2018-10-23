@extends('layouts.master')
@section('pageTitle')
Books Unlimited
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Welcome to Books Unlimited!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                At Books Unlimited, we strive to bring the best and obscure books to
                surprise and delight every reader!
            </p>
            <p class="text-center">
                Here's a random book from our library: <a href="{{ route('books.book', ['id' => $book->id]) }}">{{ $book->title }}</a>
            </p>
            <div class="text-center">
                <a href="{{ route('books.index') }}" class="btn btn-primary">Go to books</a>
            </div>
        </div>
    </div>

@endsection
