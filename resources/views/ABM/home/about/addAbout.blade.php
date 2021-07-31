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
  <form method="post" action="{{action('ABM\ABMhomecontroller@addAbout')}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" required value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="intro_p1">Intro part 1</label>
      <input type="text" class="form-control" name="intro_p1" id="intro_p1" required value="" rows="4"></input>
    </div>
    <div class="form-group">
      <label for="intro_p2">Intro part 2</label>
      <input type="text" class="form-control" name="intro_p2" id="intro_p2" required value="" rows="1"></input>
    </div>

    <div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" class="form-control" required name="photo" id="photo" value=""></input>
    </div>




  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
    <a href="/ABM/home/mainHome" class="btn btn-secondary col-3">Back</a>
  </div>
    </form>
  </div>

@endsection
