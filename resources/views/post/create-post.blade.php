@extends('layouts.app')
@section('title','Create Post')
@section('content') 

<section class="location">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Create Post</h2>
                <div class="location-main">
                    <div class="content">
                        <form action="{{ url('store-post') }}" method="post" class="s2">
                            @csrf
                            <div class="form-group"> 
                                <input data-aos-duration="1000" data-aos="fade-up" id="title" type="text" class="form-control" placeholder="Title*" name="title">
                                <span class="text-danger float-start">@error('title') {{ $message }} @enderror</span>
                                
                                <textarea data-aos-duration="1000" data-aos="fade-up" type="text" class="form-control" id="body" placeholder="Body*" name="body"></textarea>
                                <span class="text-danger float-start">@error('body') {{ $message }} @enderror</span>
                                
                            </div>
                            <button type="submit" class="tf-button style3" data-aos-duration="1000" data-aos="fade-up">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
