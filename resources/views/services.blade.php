@extends('layout')

@section('title')
  <link rel="stylesheet" href="{{asset('/css/services.css')}}">
  <link rel="stylesheet" href="{{asset('/css/contactSmall.css')}}">
<title>Services</title>
@endsection


@section('main')

  <div id="background" class="container-fluid w-100 px-0 mx-0">
    <div class="row col-12 h-100 text-md-left text-sm-center mx-0 px-0">
          <h1 id="services"> {{$background->title}} </h1>

          <img id="servicesImg" class="w-100 h-100" src="{{asset('/storage/' . $background->photoName ) }}" alt="{{$background->photoName}}">

    </div>

  </div>

  <div id="mainSection" class="container-fluid px-0 w-100">

      @foreach ($services as $service)

      <div class="bodycontainer mx-1 row @if ($loop->index % 2 == 0) {{'flex-row-reverse'}}  @else {{'flex-row'}}  @endif">

          <div class="px-0 d-flex col-sm-10 fullsmall flex-sm-column row @if ($loop->index % 2 == 0) {{'rightlong col-lg-9 col-md-11 flex-md-row-reverse'}} @else {{'leftlong col-md-11 col-lg-9 flex-md-row'}}  @endif">

              <div class="col-md-5 col-sm-12 mx-2 d-flex">
                  <img class="textImage rounded" src="{{asset('storage/' . $service->photos->first()->name)}}" alt="{{$service->photos->first()->name}}">
              </div>

              <div class="col-md-6 col-sm-12 row flex-column descText d-flex">

                    <div class="sectionTitle d-flex">

                        <h2>{{$service->title}}</h2>

                    </div>

                    <div class="sectionIntro d-flex">

                      <h6>{{$service->description}}</h6>

                    </div>

                    <div class="row mt-2 sectionText d-flex">

                          <div class="col-6 sectionTextLeft">
                              <p> {{$service->descriptions->first()->text1}}</p>
                          </div>
                          <div class="col-6 sectionTextRight">
                            <p> {{$service->descriptions->first()->text2}} </p>
                          </div>


                    </div>

              </div>
              <div class="col-md-1">

              </div>
          </div>
     </div>



      @endforeach

  </div>

    @include('contactSmall')


@endsection
