@extends('layout')

@section('title')

<link rel="stylesheet" href="/css/ABMedit.css">
<title>Edit Service</title>
@endsection

@section('main')
@php
  $counter = 0;

@endphp
      <div class="row pt-4">
        <div class="col-12 text-center pt-4">
          <h1 class="pt-4">Edit information of Service-table</h1>
        </div>
      </div>

      <div class="row container">
    <div class="col-12 col-lg-10">
    <form id="editform" class="container-fluid" method="post" action="/ABM/service/editService" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <input type="hidden" name="id" value="{{$service->id}}">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="edService[{{$service->id}}][title]" id="title" value="{{$service->title}}" rows="1"></input>
      </div>
      <div class="form-group">
        <label for="description">Internal description</label>
        <input type="text" class="form-control" name="edService[{{$service->id}}][description]" id="description" value="{{$service->description}}" rows="4"></input>
      </div>



    <h2 class="edit">descriptions</h2>




    @foreach ($descriptions as $key => $value)

    <div class="row">


      <div class="form-group col-10">
      <label for="description">Description {{$loop->index+1}}</label>
      <input type="hidden" name="descriptionId" value="{{$value->id}}">
      <input type="text" class="form-control my-2" name="descriptions[{{$value->id}}][text1]" id="description" value="{{$value->text1}}" rows="3"></input>
      <input type="text" class="form-control my-2" name="descriptions[{{$value->id}}][text2]" value="{{$value->text2}}" rows="3"></input>
      </div>


      <div class="col-2">
      <a class="btn btn-primary mt-lg-4" href="/ABM/service/editService/{{$value->id}}/removeDescription">Remove</a>
      </div>
    </div>
    @endforeach
    <div id="divDescriptions">
  </div>
  <button id="addDescription" class="btn btn-primary mb-3" type="button" name="addDescription">Add description</button>



    <h2 class="edit">Edit photos</h2>
    @php
      $photocounter = 1;
    @endphp
    @if(count($photos) != 0)

    @foreach($photos as $photo)
      @php
        $photocounter++;
      @endphp


    <div class="row my-3 flex-column flex-lg-row flex-wrap">
      <div class="col-6 col-lg-3 row">
          <img class="formphoto col" src="{{asset('storage/' . $photo->name)}}" alt="{{$photo->name}}">
      </div>

      <div class="col-6 col-lg-3 pt-lg-5 pl-5">
        <a href="/ABM/service/editService/{{$photo->id}}/removePhoto" class=" btn btn-primary">Remove</a>
      </div>
    </div>

    @endforeach

    @endif

    <div class="form-group mb-4">
    <label for="photos">Add new photos</label>
    <input type="hidden" name="counter" value="{{$photocounter}}">
    <input type="file" multiple="multiple" class="form-control" name="photos[]" id="photos" value=""></input>
    </div>




    <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
    <a href="/ABM/service/mainService" class="btn btn-secondary col-3">Return</a>
    </form>


    </div>

    </div>

    <script type="text/javascript" src="{{asset('js/ABMedit.js')}}"></script>

@endsection
