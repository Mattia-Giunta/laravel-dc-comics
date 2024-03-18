@extends('layouts.layout')

@section('title', 'Benvenuti | Home')

@section('content')

<section class="w-100">

    <div class="container-fluid  position-relative  jumbo" >

        <div class="btn-series">current series</div>

    </div>

    <div class="w-75 container-fluid ">

        <div class="row row-cols-6">

            @foreach ( $cards as $element )
                <div class="col ">

                    <img class="comics-cards w-100 mt-5" src="{{ $element['thumb'] }}" alt="">

                    <p class="mt-3 text-uppercase ">{{ $element['title'] }}</p>

                </div>
            @endforeach

        </div>

        <button class="btn-load-more">load more</button>
    </div>

    <section class="blue-banner mt-5 ">

        <ul>

          <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            <span>digital comics</span>
          </li>

          <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
            <span>dc merchandise</span>
          </li>

          <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            <span>subscription</span>
          </li>

          <li>
            <img class="location-img" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
            <span>comin location</span>
          </li>

          <li>
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            <span>dc power visa</span>
          </li>


        </ul>

    </section>

</section>

@endsection
