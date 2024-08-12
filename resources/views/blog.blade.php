@extends('layouts.app')
@section('title','Blog')
@section('content') 

<section class="page-title p-contact">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="page-title-main">
                    <h2 class="title">Blog</h2>

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


<section class="popular-posts mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block-text center style-2">
                    <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Popular Posts </p>
                    <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Trending News </h3>
                </div>

                <div class="swiper popularSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-box-popular">
                                <div class="image">
                                    <img src="assets/images/section/blog-01.jpg" alt="">
                                </div>

                                <div class="content">
                                    <p class="category">Trending, News, Food</p>


                                    <a href="blog_single.html" class="h5 title">Restaurant Staffing for Today
                                        and Tomorrow</a>
                                    <ul>
                                        <li class="author"><a href="#">by Elliot Alderson </a></li>
                                        <li class="time"><a href="#">February 20, 2023 </a></li>
                                        <li class="cmt"><a href="#">2 Comment </a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box-popular">
                                <div class="image">
                                    <img src="assets/images/section/blog-02.jpg" alt="">
                                </div>

                                <div class="content">
                                    <p class="category">NEWS, RECIPES</p>


                                    <a href="blog_single.html" class="h5 title">Three Best Practices in Managing
                                        Online Reviews</a>
                                    <ul>
                                        <li class="author"><a href="#">by Elliot Alderson </a></li>
                                        <li class="time"><a href="#">February 20, 2023 </a></li>
                                        <li class="cmt"><a href="#">2 Comment </a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box-popular">
                                <div class="image">
                                    <img src="assets/images/section/blog-03.jpg" alt="">
                                </div>

                                <div class="content">
                                    <p class="category">FOOD, STORY, RECIPES</p>


                                    <a href="blog_single.html" class="h5 title">My One Piece of Advice For The
                                        Restaurant </a>
                                    <ul>
                                        <li class="author"><a href="#">by Elliot Alderson </a></li>
                                        <li class="time"><a href="#">February 20, 2023 </a></li>
                                        <li class="cmt"><a href="#">2 Comment </a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box-popular">
                                <div class="image">
                                    <img src="assets/images/section/blog-04.jpg" alt="">
                                </div>

                                <div class="content">
                                    <p class="category">Trending, News, Food</p>


                                    <a href="blog_single.html" class="h5 title">Restaurant Staffing for Today
                                        and Tomorrow</a>
                                    <ul>
                                        <li class="author"><a href="#">by Elliot Alderson </a></li>
                                        <li class="time"><a href="#">February 20, 2023 </a></li>
                                        <li class="cmt"><a href="#">2 Comment </a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box-popular">
                                <div class="image">
                                    <img src="assets/images/section/blog-05.jpg" alt="">
                                </div>

                                <div class="content">
                                    <p class="category">Trending, News, Food</p>


                                    <a href="blog_single.html" class="h5 title">Restaurant Staffing for Today
                                        and Tomorrow</a>
                                    <ul>
                                        <li class="author"><a href="#">by Elliot Alderson </a></li>
                                        <li class="time"><a href="#">February 20, 2023 </a></li>
                                        <li class="cmt"><a href="#">2 Comment </a></li>
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


<section class="s-formmail-2">
    <div class="container">
        <div class="row">
            <div class="formmail-content">
                <div class="block-text ">

                    <h4 class="title" data-aos-duration="1000" data-aos="fade-up">Subscribe to receive the latest news from us </h4>

                    <form class="s1" data-aos-duration="1000" data-aos="fade-up">
                        <div class="form-group ">

                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email address*">

                        </div>


                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree that my submitted data
                                is being collected and stored.</label>
                        </div>
                    </form>

                </div>

                <div class="image" data-aos-duration="1000" data-aos="fade-left">
                    <img src="assets/images/section/11111s1d2d.png" alt="">
                </div>

            </div>

        </div>
    </div>
</section>


<section class="blog-sidebar style-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block-text">
                    <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Stay up-to-date </p>
                    <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Latest Posts

                    </h3>


                </div>
                <div class="blog-sidebar-main">
                    <div class="main-content">

                        <div class="blog-box-4" data-aos-duration="1000" data-aos="fade-up">
                            <a href="#" class="image">
                                <img src="assets/images/section/blog-01.jpg" alt="">
                            </a>


                            <div class="content">
                                <a href="blog_single.html" class="category">Trending, News, Food </a>
                                <a href="blog_single.html" class="h4 title"> Why Local is 'The Last Mile'
                                    for National Restaurant</a>

                                <p class="text">Bigger certainly doesn’t mean better when giving your guests a
                                    memorable dining experience and a tasty meal...</p>
                                <ul class="meta">
                                    <li><a href="#">by Elliot Alderson </a></li>
                                    <li><a href="#">February 20, 2020 </a></li>
                                    <li><a href="#">2 Comment </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog-box-4" data-aos-duration="1000" data-aos="fade-up">
                            <a href="#" class="image">
                                <img src="assets/images/section/blog-02.jpg" alt="">
                            </a>


                            <div class="content">
                                <a href="blog_single.html" class="category">Trending, News, Food </a>
                                <a href="blog_single.html" class="h4 title"> Reaching Out to Help Restaurants
                                    Recover</a>

                                <p class="text">Bigger certainly doesn’t mean better when giving your guests a
                                    memorable dining experience and a tasty meal...</p>
                                <ul class="meta">
                                    <li><a href="#">by Elliot Alderson </a></li>
                                    <li><a href="#">February 20, 2020 </a></li>
                                    <li><a href="#">2 Comment </a></li>
                                </ul>
                            </div>
                        </div>



                        <div class="blog-box-3" data-aos-duration="1000" data-aos="fade-up">
                            <h2>"</h2>
                            <p class="text">“ How many times have you heard that paper is matter of the past?
                                Obviously, this panorama is not so drastic. From time to time we want to have
                                the pleasure to hold a good ”</p>
                            <div class="line"></div>
                            <p class="author">Justin Byonce</p>
                        </div>


                        <div class="blog-box-4 s1" data-aos-duration="1000" data-aos="fade-up">
                            <a href="#" class="image">
                                <img src="assets/images/section/blog-03.jpg" alt="">
                            </a>


                            <div class="content">
                                <a href="blog_single.html" class="category">Trending, News, Food </a>
                                <a href="blog_single.html" class="h4 title">Creating Opportunities for Ukrainian
                                    Refugees</a>

                                <p class="text">Bigger certainly doesn’t mean better when giving your guests a
                                    memorable dining experience and a tasty meal...</p>
                                <ul class="meta">
                                    <li><a href="#">by Elliot Alderson </a></li>
                                    <li><a href="#">February 20, 2020 </a></li>
                                    <li><a href="#">2 Comment </a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="blog-box-3" data-aos-duration="1000" data-aos="fade-up">
                            <img src="assets/images/icon/noun_link.png" alt="">
                            <h5>Loyalty is key to keeping customers happy <br /> in the face of rising prices
                            </h5>
                            <div class="line"></div>
                            <p class="author">Justin Byonce</p>
                        </div>


                        <div class="blog-box-4 s1 bb-n" data-aos-duration="1000" data-aos="fade-up">
                            <a href="#" class="image">
                                <img src="assets/images/section/blog-01.jpg" alt="">
                            </a>


                            <div class="content">
                                <a href="blog_single.html" class="category">Trending, News, Food </a>
                                <a href="blog_single.html" class="h4 title">DoorDash Ordering Trends: Diners Are
                                    Picking Local</a>

                                <p class="text">Bigger certainly doesn’t mean better when giving your guests a
                                    memorable dining experience and a tasty meal...</p>
                                <ul class="meta">
                                    <li><a href="#">by Elliot Alderson </a></li>
                                    <li><a href="#">February 20, 2020 </a></li>
                                    <li><a href="#">2 Comment </a></li>
                                </ul>
                            </div>
                        </div>



                        <ul class="pagination" data-aos-duration="1000" data-aos="fade-up">
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-sidebar">
                        <div class="widget avt">

                            <form class="s1">
                                <div class="form-group ">

                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Write content">

                                </div>

                                
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget category">
                            <div class="heading-top">
                                <h5>categories</h5>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><a href="#">Food</a></li>
                                    <li class=""><a href="#">Industry expertise</a></li>
                                    <li><a href="#">Restaurants</a></li>
                                    <li><a href="#">Fast Casual Restaurants</a></li>
                                    <li><a href="#">Casual Dining</a></li>
                                    <li><a href="#">Pizzerias</a></li>
                                    <li><a href="#">Coffee’s </a></li>
                                </ul>
                            </div>
                        </div>



                        <div class="widget tag">
                            <div class="heading-top">
                                <h5>tags</h5>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><a class="active" href="#">Fitness Power</a></li>
                                    <li><a href="#">Martial Arts </a></li>
                                    <li><a href="#">Healthy</a></li>
                                    <li><a href="#">Trainning </a></li>
                                    <li><a href="#">Gym </a></li>
                                    <li><a href="#">Cardio</a></li>
                                    <li><a href="#">Functional</a></li>
                                    <li><a href="#">Yoga</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="widget banner">
                            <div class="image">
                                <img src="assets/images/section/banner.png" alt="">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection