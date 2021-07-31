@extends('layout')

@section('title')
  <link rel="stylesheet" type="text/css" href="{{asset('css/ABM.css') }}">
  <title>Admin</title>

@endsection
@section('main')
  <div class="row pt-5 text-center mr-0 pr-0 m-3">
    <div class="col-12 pt-5 text-center pr-0 mr-0">

      <table class="mainTable" style="width:100%" border="1">
        <h2>About-table</h2>
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Intro part 1</th>
           <th>Intro part 2</th>
           <th>Photo</th>
           <th></th>

        </tr>
        @foreach ($abouts as $id => $about)
          <tr>
            <td class="">{{$about->id}}</td>
            <td class="">{{$about->name}}</td>
            <td class="">{{$about->intro_p1}}</td>
            <td class="">{{$about->intro_p1}}</td>
            <td class="">

                <img class="thumbnail sectionphoto" src="{{asset('storage/' . $about->photoName)}}" alt="{{$about->photoName}}">

            </td>



        <td>
            <a class="btn btn-primary" href="editAbout/{{$about->id}}"><i class="far fa-edit"></i></a>
         </td>

        <td>
          <a class="btn btn-primary" href="destroyAbout/{{$about->id}}"><i class="far fa-trash-alt"></i></a>
        </td>


        </tr>
      @endforeach
          <a class="plus btn btn-primary addButton" href="/ABM/home/addAbout"><i class="fas fa-plus fa-2x"></i></a>
      </table>

      <table class="mainTable" style="width:100%" border="1">
        <h2>Service-table</h2>
        <tr>
           <th>ID</th>
           <th>Title</th>
           <th>Description</th>
           <th></th>

        </tr>
        @foreach ($services as $id => $service)
          <tr>
            <td class="">{{$service->id}}</td>
            <td class="">{{$service->title}}</td>
            <td class="">{{$service->description}}</td>






        <td>
            <a class="btn btn-primary" href="editService/{{$service->id}}"><i class="far fa-edit"></i></a>
         </td>

        <td>
          <a class="btn btn-primary" href="destroyService/{{$service->id}}"><i class="far fa-trash-alt"></i></a>
        </td>


        </tr>
      @endforeach
          <a class="plus btn btn-primary addButton" href="/ABM/home/addService"><i class="fas fa-plus fa-2x"></i></a>
      </table>





      <table class="mainTable" style="width:100%" border="1">
        <h2>Background photo & text</h2>

        <tr>
          <th>ID</th>
          <th>Photo</th>
          <th>Title</th>
          <th>Text</th>
          <th></th>

        </tr>

          @foreach ($backgrounds as $key => $background)
            <tr>
              <td>{{$background->id}}</td>
              <td> <img class="thumbnail sectionphoto" src="{{asset('/storage/' . $background->photoName)}}" alt="{{$background->photoName}}"> </td>
              <td>{{$background->title}}</td>

              <td>{{$background->text}}</td>

              <td>
                  <a class="btn btn-primary" href="editBackground/{{$background->id}}"><i class="far fa-edit"></i></a>
               </td>

              <td>
                <a class="btn btn-primary" href="destroyBackground/{{$background->id}}"><i class="far fa-trash-alt"></i></a>
              </td>

            </tr>
          @endforeach
            <a class="plus btn btn-primary addButton" href="/ABM/home/addBackground"><i class="fas fa-plus fa-2x"></i></a>
      </table>

    </div>
  </div>





@endsection
