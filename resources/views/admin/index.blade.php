@extends('layouts.master')
@section('pageTitle')
Books Unlimited Administration
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Books Unlimited Administration</h1>
        </div>
        @if (Session::has('info'))
        <div class="col-md-12">
            <p class="alert alert-info">{{ Session::get('info') }}</p>
        </div>
        @endif
        <div class="col-md-12 text-right">
            <a href="{{ route('admin.create') }}" class="btn btn-info my-3">Add Book</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->price }}</td>
                        <td><a href="{{route('admin.edit', ['id' => $book->id]) }}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
