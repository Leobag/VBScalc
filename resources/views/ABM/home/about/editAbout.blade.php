@extends('layout')

@section('title')

<link rel="stylesheet" href="/css/ABMedit.css">
<title>Edit About</title>
@endsection

@section('main')

      <div class="row pt-4">
        <div class="col-12 text-center pt-4">
          <h1 class="pt-4">Edit information of About-table</h1>
        </div>
      </div>

      <div class="row container">
    <div class="col-12 col-lg-10">
    <form id="editform" class="container-fluid" method="post" action="/ABM/home/editAbout" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="name">Name</label>
            <input type="hidden" name="id" value="{{$about->id}}">
            <input type="text" class="form-control" name="name" id="name" value="{{$about->name}}" rows="1"></input>
          </div>
          <div class="form-group">
            <label for="intro_p1">Intro part 1</label>
            <input type="text" class="form-control" name="intro_p1" id="intro_p1" value="{{$about->intro_p1}}" rows="4"></input>
          </div>
          <div class="form-group">
            <label for="intro_p2">Intro part 2</label>
            <input type="text" class="form-control" name="intro_p2" id="intro_p2" value="{{$about->intro_p2}}" rows="4"></input>
          </div>




        <h2 class="edit">Edit photos</h2>


        <div class="row my-3 flex-column flex-lg-row flex-wrap">
          <div class="col-6 col-lg-3 row">
              <img class="formphoto col" src="{{asset('storage/' . $about->photoName)}}" alt="{{$about->photoName}}">
          </div>

          <div class="col-6 col-lg-3 pt-lg-5 pl-5">
            <a href="/ABM/home/editAbout/{{$about->id}}/removePhoto" class=" btn btn-primary">Remove</a>
          </div>
        </div>


        <div class="form-group mb-4">
        <label for="photo">Add new photo</label>
        <input type="file" multiple="multiple" class="form-control" name="photo" id="photo" value=""></input>
        </div>



      <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
      <a href="/ABM/home/mainHome" class="btn btn-secondary col-3">Return</a>
    </form>


    </div>

    </div>


@endsection
