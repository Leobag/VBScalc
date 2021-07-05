@extends('layout')

@section('title')
  <link rel="stylesheet" href="{{asset('css/contactSmall.css')}}">
  <link rel="stylesheet" href="{{asset('css/about.css')}}">
  <title>About me</title>
@endsection

 @section('main')


   <div id="background" class="container-fluid w-100 px-0 mx-0">
     <div class="row col-12 h-100 text-left mx-0 px-0">
           <h1 id="aboutHeader"> {{$background->title}} </h1>

           <img class="w-100 h-100" src="{{asset('/storage/' . $background->photoName ) }}" alt="{{$background->photoName}}">

     </div>

   </div>

 @foreach ($abouts as $about)


  <div class="container rounded d-flex aboutdiv">

    <div class="row rowDiv1">

      <div class="col-md-5 row flex-column">

          <h2 class="text-center">{{$about->title}}</h2>


          <div class="row">
              @foreach ($about->descriptions as $description)



                <div class="col-12">


                  <p>{{$description->text1}}</p>



                  <p>{{$description->text2}}</p>

                </div>
                @endforeach
          </div>

      </div>

      <div class="aboutImageDiv col-md-6">

        <img class="w-100 rounded aboutPhoto" src="{{asset('/storage/' . $about->photos->first()->name)}}" alt="{{$about->photos->first()->name}}">


      </div>

    </div>

  </div>

 @endforeach



  <div id="experienceDiv" class="container d-flex">

          <div class="row middleHolder">


      @foreach ($experiences as $experience)

        <div class="experienceHolder col-12 row rounded">



            <div class="col-md-3 col-11">

              <img class="experiencePhoto thumbnail rounded" src="{{asset('/storage/' . $experience->photos->first()->name)}}" alt="{{$experience->photos->first()->name}}">

            </div>

            <div class="col-md-9 col-sm-12 row d-flex">

              <div class="col-12 titleHolder">
                <h3 class="experienceTitle">{{$experience->company_name}}</h3>
              </div>


              <div class="col-6">


                <div class="col-12">
                    <p>Role: {{$experience->role}}</p>
                </div>

              <div class="col-12">
                  <p>Years in position: {{$experience->years}}</p>
              </div>

              <div class="col-12">
                <p>{{$experience->descriptions->first()->text1}}</p>
              </div>




              </div>

              <div class="col-6 expDescRight">

                <p>{{$experience->descriptions->first()->text2}}</p>

              </div>


            </div>

        </div>


      @endforeach

    </div>

  </div>



@include('contactSmall')


 @endsection
