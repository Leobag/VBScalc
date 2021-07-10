@extends('layout')

    @section('title')
      <link rel="stylesheet" href="{{asset('css/contact.css')}}">
      <title>Contact </title>
    @endsection

    @section('main')



      <div class="undertitle" class="container my-3 flex-column">
        <div class="row">
          <div class="col-12">

            <h1 class="services text-center">{{$contactpage->title}}</h1>

          </div>
          <div class="col-12 text-center">

            <h5>{{$contactpage->text}}</h5>

          </div>

        </div>
      </div>

        <div id="contactcontainer" class="container py-4 col-10 d-flex rounded">

          <div class="row contactHolder">


              <form id="contact" class="row col-lg-6 col-md-12 d-flex rounded" method="POST" action="{{route('sendMail')}}">
                  @csrf
                  <div class="form-group row col-12 subDiv">
                    <div class="col-12">
                        <label id="labelContact"  class="contactText" for="name">{{__('Name:')}}</label>
                    </div>
                      <div class="col-12">

                            <input type="text" class="form-control   @error('name') is-invalid @enderror" placeholder="Name" name="name" id="name"  aria-describedby="nameHelp" required autocomplete="name" value="{{ old('name') }}">
                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                      </div>
                  </div>


                  <div class="form-group row col-12 subDiv">

                    <div class="col-12">
                        <label for="email" class="col-form-label contactText text-left">{{ __('E-Mail Address:') }}</label>
                    </div>
                      <div class="col-12">
                          <input id="email" type="email" placeholder="E-mail Address" class="form-control col-12 input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row col-12 subDiv">

                    <div class="col-12">
                        <label for="subject" class="col-form-label contactText text-left">{{ __('Subject: ') }}</label>
                    </div>
                      <div class="col-12">
                          <input id="subject" type="text" placeholder="Subject" class="form-control col-12 input @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject">

                          @error('subject')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group col-12 subDiv">
                      <label id="labelContact" class="contactText" for="message">{{__('Message:')}}</label>
                      <textarea name="message" rows="8" cols="40" placeholder="Please write your message here..." class="form-control @error('message') is-invalid @enderror" id="message" aria-describedby="messageHelp" required autocomplete="message" value="{{ old('message') }}"></textarea>

                      @error('message')

                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-group col-md-12 col-sm-10 buttonDiv">

                      <button class="contact-submit rounded mt-2" type="submit">Send</button>

                  </div>

              </form>

              <div class="col-6 conPhotoDiv">
                <img class="contactPhoto rounded" src="{{asset('/storage/' . $contactpage->photoName)}}" alt="$contactpage->photoName">
              </div>

            </div>


          </div>


    @endsection
