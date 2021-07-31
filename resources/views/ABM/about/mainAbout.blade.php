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
           <th>Title</th>
           <th>Intro part 1</th>
           <th>Intro part 2</th>
           <th>Associated photos</th>
           <th>Associated discriptions</th>
           <th></th>

        </tr>
        @foreach ($abouts as $id => $about)
          <tr>
            <td class="">{{$about->id}}</td>
            <td class="">{{$about->title}}</td>
            <td class="">{{$about->intro1}}</td>
            <td class="">{{$about->intro2}}</td>
            <td class="">

              @foreach ($about->photos as $key => $photo)
                <img class="thumbnail sectionphoto" src="{{asset('storage/' . $photo->name)}}" alt="{{$photo->name}}">
              @endforeach

            </td>

            <td class="">

              @foreach ($about->descriptions as $key => $description)

                <p>{{$description->text1}}</p>
                <br>
                <p>{{$description->text2}}</p>
                <br>

              @endforeach

            </td>




        <td>
            <a class="btn btn-primary" href="editAbout/{{$about->id}}"><i class="far fa-edit"></i></a>
         </td>

        <td>
          <a class="btn btn-primary" href="destroyAbout/{{$about->id}}"><i class="far fa-trash-alt"></i></a>
        </td>


        </tr>
      @endforeach
          <a class="plus btn btn-primary addButton" href="/ABM/about/addAbout"><i class="fas fa-plus fa-2x"></i></a>
      </table>

      <table class="mainTable" style="width:100%" border="1">
        <h2>Experience-table</h2>

        <tr>
          <th>ID</th>
          <th>Company Name</th>
          <th>Role</th>
          <th>Years</th>
          <th>Associated photos</th>
          <th>Associated descriptions</th>
        </tr>

        @foreach ($experiences as $key => $experience)

          <tr>
            <td>{{$experience->id}}</td>
            <td>{{$experience->company_name}}</td>
            <td>{{$experience->role}}</td>
            <td>{{$experience->years}}</td>

            <td>
              @foreach ($experience->photos as $key => $photo)
                <img class="thumbnail sectionphoto" src="{{asset('/storage/' . $photo->name)}}" alt="{{$photo->name}}">
              @endforeach
            </td>

            <td>
                @foreach ($experience->descriptions as $key => $description)
                  <p>{{$description->text1}}</p>
                  <br>
                  <p>{{$description->text2}}</p>
                  <br>
                @endforeach
            </td>

            <td>
                <a class="btn btn-primary" href="editExperience/{{$experience->id}}"><i class="far fa-edit"></i></a>
             </td>

            <td>
              <a class="btn btn-primary" href="destroyExperience/{{$experience->id}}"><i class="far fa-trash-alt"></i></a>
            </td>

          </tr>

        @endforeach
        <a class="plus btn btn-primary addButton" href="/ABM/about/addExperience"><i class="fas fa-plus fa-2x"></i></a>
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
            <a class="plus btn btn-primary addButton" href="/ABM/about/addBackground"><i class="fas fa-plus fa-2x"></i></a>
      </table>

    </div>
  </div>





@endsection
