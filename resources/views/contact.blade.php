@extends('layouts.app')
@section('title','Contact')
@section('content') 

<section class="page-title p-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-main">
                            <h2 class="title">contact us</h2>

                            <ul class="breacrumd">
                                <li><a href="/">home </a></li>
                                <li>/</li>
                                <li>contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</section>

        <section class="s-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-main">
                            <div class="top-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus"
                                    width="100%" height="533px" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <div class="contact-info">
                                <div class="item" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="icon"><i class="fa fa-phone-volume"></i></div>
                                    <h5>Contact Us</h5>
                                    <p>+(406) 555-0120</p>
                                    <p><a href="https://themesflat.co/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="83c1e2f0eaefeae0ece5ecece7b2b1b0c3e4eee2eaefade0ecee">[email&#160;protected]</a></p>

                                </div>

                                <div class="item" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="icon"><i class="fa fa-map"></i></div>
                                    <h5>Address here</h5>
                                    <p>4517 Washington Ave. Manchester, </p>
                                    <p>Kentucky 39495, USA</p>

                                </div>

                                <div class="item" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="icon"><i class="fa fa-phone-volume"></i></div>
                                    <h5>open time</h5>
                                    <p>Mon - Fri : 9.00am - 22.00pm </p>
                                    <p>Saturday : 11.00 - 23.00 Sunday : close</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="location">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block-text center">
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">just drop a line!</h3>
                            <p class="text" data-aos-duration="1000" data-aos="fade-up">Give us a call or drop by anytime, we endeavour to answer all enquiries
                                within 24 hours on business <br /> days. We will be happy to answer your questions.
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="location-main">
                            <div class="image left" data-aos-duration="1000" data-aos="zoom-in-right">
                                <img src="{{url('assets/images/section/contact-01.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                
                                <form action="{{$url}}" method="post" class="s2">
                                    @csrf
                                    <div class="form-group"> 
                                        <input data-aos-duration="1000" data-aos="fade-up" type="text" class="form-control" id="inputName" name="name" placeholder="Name*" value="{{ isset($data) ? $data->name : '' }}">
                                        <span class="text-danger float-start">@error('name') {{$message}} @enderror</span>
                                        <input data-aos-duration="1000" data-aos="fade-up" type="text" class="form-control" id="inputPhone" name="phone" placeholder="Phone*" value="{{ isset($data) ? $data->phone_no : '' }}">
                                        <span class="text-danger float-start">@error('phone') {{$message}} @enderror</span>
                                        <input data-aos-duration="1000" data-aos="fade-up" type="email" class="form-control" id="inputemail"  name="email"  placeholder="Email*" value="{{ isset($data) ? $data->email : '' }}">
                                        <span class="text-danger float-start">@error('email') {{$message}} @enderror</span>
                                        <input data-aos-duration="1000" data-aos="fade-up" type="text" class="form-control" id="inputaddress"  name="address"placeholder="Address*" value="{{ isset($data) ? $data->address : '' }}">
                                        <span class="text-danger float-start">@error('address') {{$message}} @enderror</span>
                                        <textarea data-aos-duration="1000" data-aos="fade-up" name="message" id="" cols="30" rows="10"
                                            placeholder="Message">{{ isset($data) ? $data->message : '' }}</textarea>
                                        <span class="text-danger float-start">@error('message') {{$message}} @enderror</span>
                                    </div>
                                    <button type="submit" class="tf-button style3" data-aos-duration="1000" data-aos="fade-up">submit</button>
                                </form>
                            </div>
                            <div class="image right" data-aos-duration="1000" data-aos="zoom-in-left">
                                <img src="{{url('assets/images/section/contact-02.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

@endsection 