@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Books</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('book.store') }}">
                    @csrf
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" id="author" placeholder="Enter Author">
                            @error('author')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" class="form-control" id="stock" placeholder="Enter Stock">
                            @error('stock')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
