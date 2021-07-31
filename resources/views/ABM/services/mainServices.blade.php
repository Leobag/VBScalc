@extends('layout')

@section('title')
  <link rel="stylesheet" type="text/css" href="{{asset('css/ABM.css') }}">
  <title>Admin</title>

@endsection
@section('main')
  <div class="row pt-5 text-center mr-0 pr-0 m-3">
    <div class="col-12 pt-5 text-center pr-0 mr-0">
      <table class="mainTable" style="width:100%" border="1">
        <h2>Service-table</h2>
        <tr>
           <th>ID</th>
           <th>Title</th>
           <th>Internal description</th>
           <th>Associated photos</th>
           <th>Associated discriptions</th>
           <th></th>

        </tr>
        @foreach ($services as $id => $service)
          <tr>
            <td class="">{{$service->id}}</td>
            <td class="">{{$service->title}}</td>
            <td class="">{{$service->description}}</td>
            <td class="">

              @foreach ($service->photos as $key => $photo)
                <img class="thumbnail sectionphoto" src="{{asset('storage/' . $photo->name)}}" alt="{{$photo->name}}">
              @endforeach

            </td>

            <td class="">

              @foreach ($service->descriptions as $key => $description)

                <p>{{$description->text1}}</p>
                <br>
                <p>{{$description->text2}}</p>
                <br>

              @endforeach

            </td>




        <td>
            <a class="btn btn-primary" href="editService/{{$service->id}}"><i class="far fa-edit"></i></a>
         </td>

        <td>
          <a class="btn btn-primary" href="destroyService/{{$service->id}}"><i class="far fa-trash-alt"></i></a>
        </td>


        </tr>
      @endforeach
          <a class="plus btn btn-primary addButton" href="/ABM/service/addService"><i class="fas fa-plus fa-2x"></i></a>
      </table>


      <table class="mainTable" style="width:100%" border="1">
        <h2>Background photo & text</h2>

        <tr>
          <th>ID</th>
          <th>Photo</th>
          <th>Title</th>

        </tr>

          @foreach ($backgrounds as $key => $background)
            <tr>
              <td>{{$background->id}}</td>
              <td> <img class="thumbnail sectionphoto" src="{{asset('/storage/' . $background->photoName)}}" alt="{{$background->photoName}}"> </td>
              <td>{{$background->title}}</td>

              <td>
                  <a class="btn btn-primary" href="editBackground/{{$background->id}}"><i class="far fa-edit"></i></a>
               </td>

              <td>
                <a class="btn btn-primary" href="destroyBackground/{{$background->id}}"><i class="far fa-trash-alt"></i></a>
              </td>

            </tr>
          @endforeach
            <a class="plus btn btn-primary addButton" href="/ABM/service/addBackground"><i class="fas fa-plus fa-2x"></i></a>
      </table>

    </div>
  </div>





@endsection
