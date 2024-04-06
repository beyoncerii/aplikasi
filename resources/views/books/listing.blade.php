@extends('layout.main')

@section('content')

    <div class="row mt-5 mb-5">
        <div class="col">

        @if (session('success'))

        <p class='alert alert-success'>{{session('success')}}</p>

        @endif


        <a href="{{route('book-create')}}">Add New Book</a>
        <h3 class="mt-3">Books Listing</h3>

        <table class="table">
            <thead class="tr">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Action</th>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>
                            <a href="{{route('book-single', $book->id)}}">
                                {{$book->title}}
                            </a>
                        </td>
                        <td>{{$book->author->name}}</td>
                        <td>{{$book->price}}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href={{route ('book-edit', $book->id)}}>EDIT</a>

                            <form action="{{ route('book-destroy', $book->id) }}" method="POST" class="d-inline" onsubmit="return confirm ('Are you sure you want to delete book titled {{$book->title}}')">

                                @method('delete')
                                @csrf

                                <button class="btn btn-danger btn-sm" type="submit">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$books->links()}}

        </div>
@endsection
