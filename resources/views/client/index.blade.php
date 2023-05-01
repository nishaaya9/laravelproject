<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ARB College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Header -->
@include('client.header')
<!-- /.header -->
    
<!-- slider area start -->
@include('client.slider')
<!-- slider area end -->

    <!-- about area start -->
    @include('client.about')
    <!-- about area end -->

    <!-- course area start -->
    @include('client.course')
    <!-- course area end -->

    <!-- take toure area start -->
    <div class="take-toure-area ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-title sec-style-two">
                        <img class="title-top-shape" src="assets/images/icon/title-top-shape.png" alt="image">
                        <span class="text-uppercase">Take A Tour</span>
                        <h2>Video tour on Edification</h2>
                    </div>
                </div>
            </div>
            <div class="video-area">
                <a class="expand-video" href="https://www.youtube.com/watch?v=cdfMgotGKIM"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
    <!-- take toure area end -->
    
    <!-- teacher area start -->
    @include('client.teacher')
    <!-- teacher area end -->
    
    <!-- events area start -->
    @include('client.teacher')
    <!-- events area end -->

    <!-- testimonial area start -->
    <div class="testimonial-area ptb--120">
        <img class="tst-bg" src="assets/images/bg/tst-bg-shape.png" alt="image">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="tst-carousel owl-carousel">
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                                <span class="text-uppercase primary-color mb-0">happy students</span>
                                <h2>Testimonial </h2>
                            </div>
                            <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                            <h4>Kawsar Ahhamed</h4>
                            <span>App Developer</span>
                        </div>  
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                                <span class="text-uppercase primary-color mb-0">happy students</span>
                                <h2>Testimonial</h2>
                            </div>
                            <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                            <h4>Kawsar Ahhamed</h4>
                            <span>App Developer</span>
                        </div>  
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                                <span class="text-uppercase primary-color mb-0">happy students</span>
                                <h2>Testimonial</h2>
                            </div>
                            <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                            <h4>Kawsar Ahhamed</h4>
                            <span>App Developer</span>
                        </div> 
                    </div>
                </div><!-- row -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- testimonial-area --> 

    <!-- blog area start -->
    <div class="feature-blog  pt--120 pb--70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">Top stories</span>
                        <h2>Blog & news</h2> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-carousel owl-carousel card-deck">                     
                  <div class="card mb-5"> 
                    <img class="card-img-top" src="assets/images/blog/blog-thumbnail1.jpg" alt="image">
                    <div class="card-body p-25"> 
                        <ul class="list-inline primary-color mb-3">
                            <li><i class="fa fa-clock-o"></i> AUGUST 6, 2017</li>
                            <li><i class="fa fa-comments"></i> 3 Comments</li>
                        </ul>
                      <h4 class="card-title mb-4"><a href="blog-details.html">The Death Of architechture</a></h4>
                      <p class="card-text">We’re a philosophical bunch here at School site and we have thought long and hard about.</p> 
                      <a class="btn btn-primary btn-round btn-sm" href="blog-details.html"> Read More </a>
                    </div>
                  </div><!-- card -->                
                  <div class="card mb-5"> 
                    <img class="card-img-top" src="assets/images/blog/blog-thumbnail2.jpg" alt="image">
                    <div class="card-body p-25"> 
                        <ul class="list-inline primary-color mb-3">
                            <li><i class="fa fa-clock-o"></i> AUGUST 6, 2017</li>
                            <li><i class="fa fa-comments"></i> 3 Comments</li>
                        </ul>
                      <h4 class="card-title mb-4"><a href="blog-details.html">Aenean id ullamcorper</a></h4>
                      <p class="card-text">We’re a philosophical bunch here at School site and we have thought long and hard about.</p> 
                      <a class="btn btn-primary btn-round btn-sm" href="blog-details.html"> Read More </a>
                    </div>
                  </div><!-- card -->
       
                  <div class="card mb-5"> 
                    <img class="card-img-top" src="assets/images/blog/blog-thumbnail3.jpg" alt="image">
                    <div class="card-body p-25"> 
                        <ul class="list-inline primary-color mb-3">
                            <li><i class="fa fa-clock-o"></i> AUGUST 6, 2017</li>
                            <li><i class="fa fa-comments"></i> 3 Comments</li>
                        </ul>
                      <h4 class="card-title mb-4"><a href="blog-details.html">The Death Of architechture</a></h4>
                      <p class="card-text">We’re a philosophical bunch here at School site and we have thought long and hard about.</p> 
                      <a class="btn btn-primary btn-round btn-sm" href="blog-details.html"> Read More </a>
                    </div>
                  </div><!-- card -->         
                  <div class="card mb-5"> 
                    <img class="card-img-top" src="assets/images/blog/blog-thumbnail1.jpg" alt="image">
                    <div class="card-body p-25"> 
                        <ul class="list-inline primary-color mb-3">
                            <li><i class="fa fa-clock-o"></i> AUGUST 6, 2017</li>
                            <li><i class="fa fa-comments"></i> 3 Comments</li>
                        </ul>
                      <h4 class="card-title mb-4"><a href="blog-details.html">The Death Of architechture</a></h4>
                      <p class="card-text">We’re a philosophical bunch here at School site and we have thought long and hard about.</p> 
                      <a class="btn btn-primary btn-round btn-sm" href="blog-details.html"> Read More </a>
                    </div>
                  </div><!-- card -->    
                </div><!-- blog-carousel -->
            </div><!-- blog-carousel -->
        </div>
    </div> <!-- blog area end -->

    <!-- cta area start -->
    <div class="cta-area primary-bg has-color ptb--50"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="cta-content">
                        <p class="mb-2">Click to Join the Advance Workshop</p>
                        <h2>Training in advance networking</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cta-btn">
                        <a class="btn btn-light btn-round" href="#">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end --> 

    <!-- footer area start -->
    @include('client.footer')
    <!-- footer area end -->


    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>