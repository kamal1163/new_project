@extends('layouts.app')
@section('title', 'Reset Password')
@section('content') 

<section class="location">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Reset Password</h2>
                <div class="location-main">
                    <div class="content">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group"> 
                                <input  data-aos-duration="1000" data-aos="fade-up" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email*" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="tf-button style3" data-aos-duration="1000" data-aos="fade-up">Send Password Reset Link</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
