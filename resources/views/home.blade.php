@extends('layout')

@section('title')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<title>Bagiu Consulting</title>


@endsection

@section('main')
  <div id="background" class="container-fluid w-100 px-0">
    <img id="backgroundImg" src="{{asset('/storage/' . $background->photoName)}}" alt="{{$background->photoName}}">
    <div class="row h-100 text-left">
      <div class="titles col-12  col-md-8 col-lg-6 text-center">
        <h1 id="h1"> {{$background->title}} </h1> <br>
        <h4> {{$background->text}} </h4>
      </div>


    </div>

  </div>

  <div class="undertitle" class="container my-2">
        <h2 class="services">About me</h2>
  </div>

  <div id="aboutdiv" class="container flex-column-reverse flex-lg-row">
      <div id="aboutleft" class="col-10 col-lg-6 my-3 my-lg-0">
          <h2 class="abouttitle text-center">{{$about->name}}</h2>
          <p class="abouttext"> {{$about->intro_p1}}</p>
           <p class="abouttext"> {{$about->intro_p2}} </p>
              </br>
            <a id="contactme" class="rounded" href="#">Contact me</a>
      </div>
      <div id="aboutright" class="col-12 col-lg-5">
        <img class="rounded w-100" src="{{asset('/storage/' . $about->photoName)}}" alt="{{$about->photoName}}">
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
            <a class="readmorebutton rounded" href="#">Read more</a>
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
            <a class="rounded" href="{{$tool->link}}">Read more</a>
          </div>
        </div>

      @endforeach




        </div>


  </div>




@endsection
