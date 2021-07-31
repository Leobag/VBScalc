@extends('layout')

@section('title')
  <link rel="stylesheet" type="text/css" href="{{asset('css/ABM.css') }}">
  <title>Admin</title>

@endsection
@section('main')
  <div class="row pt-5 text-center mr-0 pr-0 m-3">
    <div class="col-12 pt-5 text-center pr-0 mr-0">


      <table class="mainTable" style="width:100%" border="1">
        <h2>Contact photo & text</h2>

        <tr>
          <th>ID</th>
          <th>Photo</th>
          <th>Title</th>
          <th>Text</th>
          <th></th>

        </tr>

          @foreach ($contacts as $key => $contact)
            <tr>
              <td>{{$contact->id}}</td>
              <td> <img class="thumbnail sectionphoto" src="{{asset('/storage/' . $contact->photoName)}}" alt="{{$contact->photoName}}"> </td>
              <td>{{$contact->title}}</td>

              <td>{{$contact->text}}</td>

              <td>
                  <a class="btn btn-primary" href="editContact/{{$contact->id}}"><i class="far fa-edit"></i></a>
               </td>

              <td>
                <a class="btn btn-primary" href="destroyContact/{{$contact->id}}"><i class="far fa-trash-alt"></i></a>
              </td>

            </tr>
          @endforeach
            <a class="plus btn btn-primary addButton" href="/ABM/contact/addContact"><i class="fas fa-plus fa-2x"></i></a>
      </table>

    </div>
  </div>





@endsection
