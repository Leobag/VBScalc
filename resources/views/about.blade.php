@extends('layout')

@section('title')
  <link rel="stylesheet" href="{{asset('css/about.css')}}">
  <title>About me</title>
@endsection

 @section('main')


<div id="background" class="container-fluid row w-100 px-0 mx-0 d-none d-lg-block">
  <img class="col-12 px-0" src="{{asset('storage/office_about.jpg')}}" alt="bckgrnd">

</div>
<!-- Större Div som sätter tonen för sidan -->
<div class="container">

  <div id="aboutdiv" class="row">
        <h2 class="text-center col-12 intextheader">Who am I?</h2>

        <div class="col-12 col-md-6">
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

        <div class="col-12 col-md-6">
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

  </div>

  <div id="companydiv" class="row">
    <div class="col-12">
      <h2 class="intextheader text-center">My Services</h2>

    </div>

        <div class="col-12 col-md-6">
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

        <div class="col-12 col-md-6">
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

  </div>

  <div id="experiencediv" class="row">
      <div class="col-12">
        <h2 class="intextheader text-center">My experience</h2>

      </div>
        <div class="my-3 text-center row col-10">
          @foreach($experiences as $experience)

            <div class="col-10 col-md-6">
              <h3>{{$experience->company_name}}</h3>
              <p>{{$experience->role}}</p>
              <p>Total years worked: {{$experience->years}}</p>
            </br>
              <h5>Specifications:</h5>
              <ul class="inlist px-0">
                @foreach($experience->experiencedescriptions as $description)
                  <li>Role: {{$description->description}} </br> Years worked: {{$description->years}}</li>
                </br>
                @endforeach
              </ul>
            </div>

          @endforeach

        </div>

  </div>


</div>

<!-- En div för varje punkt i experiences  -->


 @endsection
