@extends('layout')

@section('title')

<link rel="stylesheet" href="/css/ABMedit.css">
<title>Edit Contact</title>
@endsection

@section('main')


      <div class="row pt-4">
        <div class="col-12 text-center pt-4">
          <h1 class="pt-4">Edit information of Contact-table</h1>
        </div>
      </div>

      <div class="row container">
    <div class="col-12 col-lg-10">
    <form id="editform" class="container-fluid" method="post" action="/ABM/contact/editContact" enctype="multipart/form-data">

      @csrf

      <div class="form-group">
        <label for="title">Title</label>
        <input type="hidden" name="id" value="{{$contact->id}}">
        <input type="text" class="form-control" name="title" id="title" value="{{$contact->title}}" rows="1"></input>
      </div>

      <div class="form-group">
        <label for="text">Text</label>
        <input type="text" class="form-control" name="text" id="text" value="{{$contact->text}}" rows="1"></input>
      </div>





    <h2 class="edit">Edit photos</h2>


    <div class="row my-3 flex-column flex-lg-row flex-wrap">
      <div class="col-6 col-lg-3 row">
          <img class="formphoto col" src="{{asset('storage/' . $contact->photoName)}}" alt="{{$contact->photoName}}">
      </div>

      <div class="col-6 col-lg-3 pt-lg-5 pl-5">
        <a href="/ABM/contact/editContact/{{$contact->id}}/removePhoto" class=" btn btn-primary">Remove</a>
      </div>
    </div>


    <div class="form-group mb-4">
    <label for="photo">Add new photo</label>
    <input type="file" class="form-control" name="photo" id="photo" value=""></input>
    </div>




    <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
    <a href="/ABM/contact/mainContact" class="btn btn-secondary col-3">Return</a>
    </form>


    </div>

    </div>


@endsection
