@extends('layout.main')

@section('content')

<div class="row mt-5">
    <div class="col-8">

    <h1>User Information</h1>

    @forelse ($users as $user )

    <p><strong>Name: </strong> {{ $user['name'] }}</p>

    <p><strong>Email: </strong> {{ $user['email'] }}</p>

    <p><strong>Course: </strong> {{ $user['course'] }}</p>

    <hr>

    @empty

    {!! $html_content !!}

    @endforelse

    </div>

    <div class="col-4 bg-secondary">
        @include('layout.sidebar')
    </div>

    </div>





@endsection


    {{-- ni untuk for each users --}}

    {{-- @foreach ($users as $user)

    <p><strong>Name: </strong> {{ $user['name'] }}</p>

    <p><strong>Email: </strong> {{ $user['email'] }}</p>

    <p><strong>Course: </strong> {{ $user['course'] }}</p>

    <hr>

    @endforeach --}}

    {{-- ni untuk user array --}}

    {{-- @if($user['name'] == 'Seri')

    <p><strong>Name: </strong> {{ $user['name'] }}</p>

    <p><strong>Email: </strong> {{ $user['email'] }}</p>

    <p><strong>Course: </strong> {{ $user['course'] }}</p>

    @else
    <h2>Eh, tak kenal >.< !!</h2>

    @endif --}}

    {{-- ni untuk user login go through authentication --}}

    {{-- @auth
        <p><strong>Name: </strong> {{ $user['name'] }}</p>

        <p><strong>Email: </strong> {{ $user['email'] }}</p>

        <p><strong>Course: </strong> {{ $user['course'] }}</p>
    @endauth

    {{-- ni untuk guest user --}}

    {{-- @guest
        <h3>Anda perlu login untuk melihat maklumat</h3>
    @endguest  --}}
