@extends('layouts.layout')

@section('title', 'DC Comic | Read Show')

@section('content')
    <main>


        <h2>{{ $comic->title }}</h2>

        <p>
            {{ $comic->description }}
        </p>



    </main>
@endsection
