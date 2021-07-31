@extends('layout')

@section('title')
<link rel="stylesheet" href="/css/ABMadd.css">
<title>Add About</title>
@endsection

@section('main')

  <div class="row container pt-4 pl-5">
    <div class="col-12 pt-4">
      <h1 class="pt-5">New About-section</h1>
    </div>
  </div>

  <div class="row container pl-5">
    <div class="col-12">
  <form method="post" action="{{action('ABM\ABMaboutcontroller@addAbout')}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" required value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="intro1">Intro part 1</label>
      <input type="text" class="form-control" name="intro1" id="intro1" required value="" rows="4"></input>
    </div>
    <div class="form-group">
      <label for="intro2">Intro part 2</label>
      <input type="text" class="form-control" name="intro2" id="intro2" required value="" rows="1"></input>
    </div>

    <div class="form-group">
      <label for="photos">Photos</label>
      <input type="file" multiple="multiple" class="form-control" required name="photos[]" id="photos" value=""></input>
    </div>

    <h2>Descriptions</h2>
    <div id="divDescriptions">
  </div>
  <button id="addDescription" class="btn btn-primary mb-3" type="button" name="addDescription">Add description</button>




  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
    <a href="/ABM/about/mainAbout" class="btn btn-secondary col-3">Back</a>
  </div>
    </form>
  </div>
  <script type="text/javascript" src="{{asset('js/ABMedit.js')}}"></script>


@endsection
