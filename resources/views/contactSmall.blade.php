
<div class="undertitle" class="container my-3">
      <h2 class="services">Contact me</h2>
</div>

  <div id="contactcontainer" class="container d-flex rounded">
        <form id="contactSmall" class="row d-flex rounded" method="POST" action="{{route('sendMail')}}">
            @csrf
            <div class="form-group row col-md-8 col-sm-10 subDiv">
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


            <div class="form-group row col-md-8 col-sm-10 subDiv">

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

            <div class="form-group row col-md-8 col-sm-10 subDiv">

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

            <div class="form-group col-md-8 col-sm-10 subDiv">
                <label id="labelContact" class="contactText" for="message">{{__('Message:')}}</label>
                <textarea name="message" rows="8" cols="40" placeholder="Please write your message here..." class="form-control @error('message') is-invalid @enderror" id="message" aria-describedby="messageHelp" required autocomplete="message" value="{{ old('message') }}"></textarea>

                @error('message')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-8 col-sm-10 buttonDiv">

                <button class="contact-submit rounded mt-2" type="submit">Send</button>

            </div>

        </form>



    </div>
