@extends('layout')

@section('title')
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('/css/services.css')}}">
<title>Services</title>
@endsection


@section('main')

  <div id="background" class="container-fluid w-100 px-0 mx-0">
    <div class="row col-12 h-100 text-left mx-0 px-0">
          <h1 id="services"> {{$background->title}} </h1>

          <img class="w-100 h-100" src="{{asset('/storage/' . $background->photoName ) }}" alt="{{$background->photoName}}">

    </div>

  </div>

  <div id="mainSection" class="container-fluid px-0 w-100">

      @foreach ($services as $service)

      <div class="bodycontainer mx-1 row @if ($loop->index % 2 == 0) {{'flex-row-reverse'}}  @else {{'flex-row'}}  @endif">

          <div class="px-0 d-flex col-sm-10 fullsmall flex-sm-column row @if ($loop->index % 2 == 0) {{'rightlong col-lg-9 col-md-11 flex-md-row-reverse'}} @else {{'leftlong col-md-11 col-lg-9 flex-md-row'}}  @endif">

              <div class="col-md-5 col-sm-12 mx-2 d-flex">
                  <img class="textImage rounded" src="{{asset('storage/bulle.jpg')}}" alt="Random">
              </div>

              <div class="col-md-6 col-sm-12 row flex-column descText d-flex">

                    <div class="sectionTitle d-flex">

                        <h2>{{$service->title}}</h2>


                    </div>

                    <div class="row mt-2 sectionText d-flex">

                          <div class="col-6 sectionTextLeft">
                              <p> {{$service->serviceDescription->intro_p1}}</p>
                          </div>
                          <div class="col-6 sectionTextRight">
                            <p> {{$service->serviceDescription->intro_p1}} </p>
                          </div>


                    </div>

              </div>
              <div class="col-md-1">

              </div>
          </div>
     </div>



      @endforeach

  </div>

  <div id="contact" class="container w-md-50 w-80 rounded">

    <div class="row d-flex contactDiv">

      <div class="col-md-4 col-10 flex-column">

        <h2>Contact me</h2>
        </br>
        <p>Any consultation is done without cost</p>


      </div>
      <div class="col-md-2 col-10 d-flex contactButton rounded">
        <a class="rounded" href="#"> Contact me </a>
      </div>

    </div>

  </div>


@endsection
