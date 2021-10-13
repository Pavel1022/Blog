@extends('layouts.app')

@section('content')
<section class="contact-us">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12">
          <div class="down-contact">
            <div class="row">
              <div class="col-lg-8">
                <div class="sidebar-item contact-form">
                  <div class="sidebar-heading">
                    <h2>Send us a message</h2>
                  </div>
                  <div class="content">
                    <form id="contact" action="{{ route('register') }}" method="post">
                        @csrf
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="first_name" type="text" id="first_name" @error('first_name') is-invalid @enderror placeholder="{{ __('First Name') }}" required autocomplete="first_name">

                            @error('first_name')
                            <span role="alert">
                                <strong style="color: red;">{{ $message }}</strong>
                            </span>
                        @enderror

                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="last_name" type="text" id="last_name" @error('last_name') is-invalid @enderror placeholder="{{ __('Last Name') }}" required autocomplete="last_name">

                            @error('last_name')
                            <span role="alert">
                                <strong style="color: red;">{{ $message }}</strong>
                            </span>
                        @enderror

                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="username" type="text" id="username" @error('username') is-invalid @enderror placeholder="{{ __('Username') }}" required autocomplete="username">

                            @error('username')
                            <span role="alert">
                                <strong style="color: red;">{{ $message }}</strong>
                            </span>
                        @enderror
                        
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="email" type="email" id="email" @error('email') is-invalid @enderror placeholder="{{ __('E-Mail') }}" required autocomplete="email">
                            
                            @error('email')
                            <span role="alert">
                                <strong style="color: red;">{{ $message }}</strong>
                            </span>
                        @enderror

                          </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                          <fieldset>
                            <input name="password" type="password" id="password" @error('password') is-invalid @enderror placeholder="{{ __('Password') }}" required autocomplete="new-password">

                            @error('password')
                            <span role="alert">
                                <strong style="color: red;">{{ $message }}</strong>
                            </span>
                        @enderror

                          </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                          <fieldset>
                            <input name="password_confirmation" type="password" id="password-confirm" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">{{ __('Register') }}</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="sidebar-item contact-information">
                  <div class="sidebar-heading">
                    <h2>contact information</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li>
                        <h5>090-484-8080</h5>
                        <span>PHONE NUMBER</span>
                      </li>
                      <li>
                        <h5>info@company.com</h5>
                        <span>EMAIL ADDRESS</span>
                      </li>
                      <li>
                        <h5>123 Aenean id posuere dui, 
                            <br>Praesent laoreet 10660</h5>
                        <span>STREET ADDRESS</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection