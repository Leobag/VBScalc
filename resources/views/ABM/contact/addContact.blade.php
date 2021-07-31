@extends('layout')

@section('title')
<link rel="stylesheet" href="/css/ABMadd.css">
<title>Add Contact</title>
@endsection

@section('main')

  <div class="row container pt-4 pl-5">
    <div class="col-12 pt-4">
      <h1 class="pt-5">New Contact-table</h1>
    </div>
  </div>

  <div class="row container pl-5">
    <div class="col-12">
  <form method="post" action="{{action('ABM\ABMcontactcontroller@addContact')}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" required value="" rows="1"></input>
    </div>

    <div class="form-group">
      <label for="text">Text</label>
      <input type="text" class="form-control" name="text" id="text" required value="" rows="1"></input>
    </div>


    <div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" class="form-control" required name="photo" id="photo" value=""></input>
    </div>




  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
    <a href="/ABM/contact/mainContact" class="btn btn-secondary col-3">Back</a>
  </div>
    </form>
  </div>


@endsection
