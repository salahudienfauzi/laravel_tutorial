@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Books</div>

                <div class="card-body">
                    @if (session('flash_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('flash_success') }}
                        </div>
                    @endif

                    <a href="{{ route('book.create') }}" class="btn btn-success">Create</a>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>Stock</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->stock }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
