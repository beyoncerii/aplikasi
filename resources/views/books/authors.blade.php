@extends('layout.main')

@section('content')

    <div class="row">
        <div class="col">

            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th colspan="2">Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($authors as $author)
                    <tr>
                        <td colspan="2"><strong>Books by {{$author->name}}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="5%"></td>
                        <td>
                        @foreach($author->books as $book)
                        {{$book->title}} <br>
                        @endforeach

                        @if ($author->books->count() <1)
                        <em>Author does not have any books.</em>
                        @endif
                        </td>

                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
