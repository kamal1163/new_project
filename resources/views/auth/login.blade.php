@extends('layouts.app')
@section('title', 'Login')
@section('content') 

<style>
 .offset-md-4 {
    margin-left: 0px;
}
.form-check-label {
    display: table;
}
.forget_password {
  margin-top: 0px !important;
  text-decoration: underline;
  color: blue !important;
}
</style>

<section class="location">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Login</h2>
                <div class="location-main">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}" class="s2">
                            @csrf
                            <div class="form-group"> 
                                <input data-aos-duration="1000" data-aos="fade-up" type="email" class="form-control" id="email" placeholder="Email*" name="email" value="{{ old('email') }}" autocomplete="email">
                                <span class="text-danger float-start">@error('email') {{ $message }} @enderror</span>
                                
                                <input data-aos-duration="1000" data-aos="fade-up" type="password" class="form-control" id="password" placeholder="Password*" name="password" autocomplete="new-password">
                                <span class="text-danger float-start">@error('password') {{ $message }} @enderror</span>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                           Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="tf-button style3 text-center" data-aos-duration="1000" data-aos="fade-up">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="image right" data-aos-duration="1000" data-aos="zoom-in-left">
                        <img src="{{ url('assets/images/section/contact-02.jpg') }}" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
