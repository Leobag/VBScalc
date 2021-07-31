@extends('layout')



    @section('title')
      <link rel="stylesheet" href="{{asset('css/ABM.css')}}">
      <title>Admin</title>

    @endsection




    @section('main')

      <div class="container indexContainer">

        <div class="row d-flex indexRow">

          <div class="col-12">

            <h2>Vad vill du ändra på?</h2>

          </div>

          <div class="col-12 indexHolder">
            <a class="indexButton" href="home/mainHome">Home</a>
          </div>

          <div class="col-12 indexHolder">
            <a class="indexButton" href="service/mainService">Services</a>
          </div>

          <div class="col-12 indexHolder">
            <a class="indexButton" href="about/mainAbout">About</a>
          </div>

          <div class="col-12 indexHolder">
            <a class="indexButton" href="contact/mainContact">Contact</a>
          </div>


        </div>

      </div>

    @endsection
