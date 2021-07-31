@extends('layout')

@section('title')

<link rel="stylesheet" href="/css/ABMedit.css">
<title>Edit Service</title>
@endsection

@section('main')

      <div class="row pt-4">
        <div class="col-12 text-center pt-4">
          <h1 class="pt-4">Edit information of Service-table</h1>
        </div>
      </div>

      <div class="row container">
    <div class="col-12 col-lg-10">
    <form id="editform" class="container-fluid" method="post" action="/ABM/home/editService">
          @csrf

          <div class="form-group">
            <label for="title">Title</label>
            <input type="hidden" name="id" value="{{$service->id}}">
            <input type="text" class="form-control" name="title" id="title" value="{{$service->title}}" rows="1"></input>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$service->description}}" rows="4"></input>
          </div>






      <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
      <a href="/ABM/home/mainHome" class="btn btn-secondary col-3">Return</a>
    </form>


    </div>

    </div>


@endsection
