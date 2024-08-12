@extends('layouts.app')
@section('title','Register')
@section('content') 

<section class="location">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Register</h2>
                <div class="location-main">
                    <div class="content">
                        <form action="{{ route('register') }}" method="post" class="s2">
                            @csrf
                            <div class="form-group"> 
                                <input data-aos-duration="1000" data-aos="fade-up" id="name" type="text" class="form-control" placeholder="Name*" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                <span class="text-danger float-start">@error('name') {{ $message }} @enderror</span>
                                
                                <input data-aos-duration="1000" data-aos="fade-up" type="email" class="form-control" id="email" placeholder="Email*" name="email" value="{{ old('email') }}" autocomplete="email">
                                <span class="text-danger float-start">@error('email') {{ $message }} @enderror</span>
                                
                                <input data-aos-duration="1000" data-aos="fade-up" type="password" class="form-control" id="password" placeholder="Password*" name="password" autocomplete="new-password">
                                <span class="text-danger float-start">@error('password') {{ $message }} @enderror</span>
                                
                                <input data-aos-duration="1000" data-aos="fade-up" id="password-confirm" type="password" placeholder="Password Confirmation*" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                            <button type="submit" class="tf-button style3" data-aos-duration="1000" data-aos="fade-up">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
