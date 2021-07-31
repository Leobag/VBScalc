@extends('layout')

@section('title')
<link rel="stylesheet" href="/css/ABMadd.css">
<title>Add Experience</title>
@endsection

@section('main')

  <div class="row container pt-4 pl-5">
    <div class="col-12 pt-4">
      <h1 class="pt-5">New Experience-table</h1>
    </div>
  </div>

  <div class="row container pl-5">
    <div class="col-12">
  <form method="post" action="{{action('ABM\ABMaboutcontroller@addExperience')}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
      <label for="company_name">Company Name</label>
      <input type="text" class="form-control" name="company_name" id="company_name" required value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="role">Role</label>
      <input type="text" class="form-control" name="role" id="role" required value="" rows="4"></input>
    </div>
    <div class="form-group">
      <label for="years">Years</label>
      <input type="text" class="form-control" name="years" id="years" required value="" rows="1"></input>
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
