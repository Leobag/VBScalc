@extends('layout')

@section('title')
  <link rel="stylesheet" href="{{asset('css/about.css')}}">
  <title>About me</title>
@endsection

 @section('main')


   <div id="background" class="container-fluid w-100 px-0 mx-0">
     <div class="row col-12 h-100 text-left mx-0 px-0">
           <h1 id="services"> {{$background->title}} </h1>

           <img class="w-100 h-100" src="{{asset('/storage/' . $background->photoName ) }}" alt="{{$background->photoName}}">

     </div>

   </div>

  <div id="aboutdiv" class="container">

    <div class="row">

      <div class="col-md-5 col-11 row flex-column">

          <h2>Who am I?</h2>

          <div class="row">

                <div class="col-5">

                  <p></p>

                </div>
                <div class="col-5">

                  <p></p>

                </div>

          </div>

      </div>

      <div class=" col-md-5 col-11">



      </div>

    </div>

  </div>

  <div id="experiencediv" class="container rounded">

    <div class="row d-flex">



    </div>

  </div>

  <div id="section3" class="container">

    <div class="row">

    </div>

  </div>
<!-- En div för varje punkt i experiences  -->


 @endsection
