@extends('layout.main')

@section('content')

<div class="row mt-5 mb-5">
    <div class="col">

        @if (session('success'))

            <p class='alert alert-success'>{{session('success')}}</p>

        @endif

        @if ($errors->any())

            <p class="alert alert-danger">Please check your input
            </p>

        @endif

        <form action="{{route('book-update', $book->id)}}" method="POST">
        @csrf

        <div class="col">
        <a href="{{route('book-listing')}}">Back to Book Listing</a>
        <h3 class="mt-3">Edit Book</h3>
        </div>

        <div class = "mt-5 mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$book->title}}"
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class = "mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$book->price}}">
            @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class = "mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea class="form-control @error('synopsis') is-invalid @enderror" id="synopsis" name="synopsis" rows="10">{{$book->synopsis}}</textarea>
            @error('synopsis')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <button class= "mt-5 btn btn-primary">SAVE</button>
        </div>
    </form>
    </div>
</div>

@endsection
