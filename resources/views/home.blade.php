@extends('layout')

@section('title')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<title>Bagiu Consulting</title>


@endsection


@section('main')
  <div id="background" class="container-fluid w-100 px-0">
    <div class="row h-100 text-left">
      <div class="titles col-12  col-md-8 col-lg-6 text-center">
        <h1 id="h1"> Success for your business</h1> <br>
        <h4>Helping businesses to grow with more than 30 years of experience
            with finding the right solution for a business to keep moving forward. </h4>
      </div>


    </div>

  </div>

  <div class="undertitle" class="container my-2">
        <h2 class="services">About me</h2>
  </div>

  <div id="aboutdiv" class="container flex-column-reverse flex-lg-row">
      <div id="aboutleft" class="col-10 col-lg-6 my-3 my-lg-0">
          <h2 class="abouttitle text-center">Jon Bagiu</h2>
          <p class="abouttext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
           <p class="abouttext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </br>
            <a id="contactme" class="" href="#">Contact me</a>
      </div>
      <div id="aboutright" class="col-12 col-lg-5">
        <img class="rounded w-100" src="{{asset('/storage/bulle.jpg')}}" alt="bullmannen">
      </div>
  </div>

  <div class="undertitle" class="container my-3">
        <h2 class="services">Services</h2>
  </div>

  <div id="tridad" class="container-fluid row mx-auto px-0">

@foreach($services as $service)
      <div class="col-11 col-lg-3 text-center rounded tri">
        <div class="inspace">
          <h2>{{$service->title}}</h2>
          <p>{{$service->description}}</p>
            <a class="readmorebutton" href="{{$service->link}}">Read more</a>
        </div>
      </div>

  @endforeach


  </div>

  <div class="undertitle" class="container my-3">
        <h2 class="services">Tools</h2>
  </div>

  <div id="tools" class="container row mx-auto">

    @foreach($tools as $tool)

        <div class="shadebox col-5 col-md-3 m-2">
          <div class="inspace" style="">
            <h2>{{$tool->name}}</h2>
            <p>{{$tool->description}}</p>
            <a href="{{$tool->link}}">Read more</a>
          </div>
        </div>

      @endforeach




        </div>


  </div>








@endsection
