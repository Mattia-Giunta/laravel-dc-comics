@extends('layouts.layout')

@section('title', 'DC Comic | Read Show')

@section('content')
    <main>

        <div class="container-fluid  position-relative  jumbo" ></div>

        <div class="container-fluid w-75 ">

            <div class="row text-center">


                <div class="col ">

                    <img class="mt-5" src="{{ $comic->thumb }}" alt="">

                    <p class="mt-3 text-uppercase ">{{ $comic->title }}</p>

                    <p class="mt-3 text-uppercase ">Price{{ $comic->price }}</p>


                </div>


            </div>


        </div>




    </main>
@endsection
