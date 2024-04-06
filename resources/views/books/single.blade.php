@extends('layout.main')

@section('content')

    <div class="row mt-5">
        <div class="col">
            <h3>{{$book->title}}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="https://via.placeholder.com/400x600.png" alt="" class="img-fluid">

        </div>
        <div class="col-8">
            <table>
                <tr>
                    <td><strong>Price</strong></td>
                    <td>RM {{$book->price}}</td>
                </tr>
                <tr>
                    <td valign="top"><strong>Synopsis</strong></td>
                    <td>{{nl2br($book->synopsis)}}</td>
                </tr>
            </table>
        </div>
    </div>

@endsection
