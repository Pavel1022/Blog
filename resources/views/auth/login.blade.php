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
                    <form id="contact" action="{{ route('login') }}" method="post">
                        @csrf
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="username" type="text" id="username" @error('username') is-invalid @enderror placeholder="{{ __('Username or E-Mail') }}" value="{{ old('username') }}" required  autofocus>

                            @error('username')
                            <span role="alert">
                                <strong style="color: red;">{{ $message }}</strong>
                            </span>
                        @enderror

                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="password" type="password" id="password" @error('password') is-invalid @enderror placeholder="{{ __('Password') }}" required autocomplete="current-password">

                            @error('password')
                            <span role="alert">
                                <strong style="color: red;">{{ $message }}</strong>
                            </span>
                        @enderror

                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">{{ __('Login') }}</button>
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