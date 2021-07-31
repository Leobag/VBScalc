@extends('layout')

@section('title')
<link rel="stylesheet" href="/css/ABMadd.css">
<title>Add Service</title>
@endsection

@section('main')

  <div class="row container pt-4 pl-5">
    <div class="col-12 pt-4">
      <h1 class="pt-5">New Service-section</h1>
    </div>
  </div>

  <div class="row container pl-5">
    <div class="col-12">
  <form method="post" action="{{action('ABM\ABMhomecontroller@addService')}}">
    @csrf


    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" required value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" required value="" rows="4"></input>
    </div>


  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
    <a href="/ABM/home/mainHome" class="btn btn-secondary col-3">Back</a>
  </div>
    </form>
  </div>

@endsection
