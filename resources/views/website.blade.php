<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>IEQ - FEV</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/website/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/website/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/website/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('img/fevicon.png') }}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/website/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> -->
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand"href="/">
                    <img src="{{ asset('img/logo-ieq.jpg') }}">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="color:white;"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="category.html">Category</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="testimonial.html">Testimonial</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="/admin">Painel</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start --> 
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                            <div style="display:flex; justify-content: center;" class="banner_img">
                                <img style="width:50%; height:auto;" src="{{ asset('img/logo-ieq.jpg') }}">
                            </div>
                            <div style="display:flex; justify-content: center;">
                                <h2 style="color:white;">Em Construção</h2>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Become Artitech of your future business</h1>
                              <form>
                                 <input type="text" class="search_text" placeholder="Search text here" name="Search text here">
                                 <div class="search_bt"><a href="#">Search Now</a></div>
                              </form>
                           </div>
                        </div> -->
                     </div>
                  </div>
                  <!-- <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_img"><img src="{{ asset('img/banner-img.png') }}"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Become Artitech of your future business</h1>
                              <form>
                                 <input type="text" class="search_text" placeholder="Search text here" name="Search text here">
                                 <div class="search_bt"><a href="#">Search Now</a></div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_img"><img src="{{ asset('img/banner-img.png') }}"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Become Artitech of your future business</h1>
                              <form>
                                 <input type="text" class="search_text" placeholder="Search text here" name="Search text here">
                                 <div class="search_bt"><a href="#">Search Now</a></div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- categroy section start -->
      <!-- <div class="categroy_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="categroy_taital">Popular Categories</h1>
               </div>
            </div>
            <div class="categroy_section_2">
               <div id="main_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-1.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Materials</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-2.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Industrials</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn active"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-3.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Consumer Disc</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-1.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Materials</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-2.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Industrials</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn active"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-3.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Consumer Disc</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-1.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Materials</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-2.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Industrials</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn active"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-4">
                              <div class="hover01 column">
                                 <figure><img src="{{ asset('img/img-3.png') }}"></figure>
                              </div>
                              <h3 class="materials_text">Consumer Disc</h3>
                              <p class="categroy_text">words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't</p>
                              <div class="readmore_btn"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div> -->
      <!-- categroy section end -->
      <!-- market section start -->
      <!-- <div class="market_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="market_taital">Market Research Reports</h1>
               </div>
            </div>
            <div class="market_section_2">
               <h4 class="market_text active">01 <span class="padding10">words which don't look even slightly believable. If you are going </span></h4>
               <p class="dummy_text">anything embarrassing hidden in the middle of text. All the Lorem Ipsum generator</p>
               <h4 class="market_text">02 <span class="padding10">words which don't look even slightly believable. If you are going </span></h4>
               <p class="dummy_text">anything embarrassing hidden in the middle of text. All the Lorem Ipsum g</p>
               <h4 class="market_text">03 <span class="padding10">words which don't look even slightly believable. If you are going </span></h4>
               <p class="dummy_text">anything embarrassing hidden in the middle of text. All the Lorem Ipsum generato</p>
               <h4 class="market_text">04 <span class="padding10">words which don't look even slightly believable. If you are going </span></h4>
               <p class="dummy_text">aanything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet t</p>
            </div>
            <div class="seemore_bt"><a href="#">Read More</a></div>
         </div>
      </div> -->
      <!-- market section end -->
      <!-- blog section start -->
      <!-- <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="blog_taital">Latest Blogs</h1>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="blog_img"><img src="img/blog-img1.png"></div>
                     <div class="btn_main">
                        <div class="date_text"><a href="#">06<br>April</a></div>
                     </div>
                     <div class="blog_box">
                        <h3 class="blog_text">Undoubtable source</h3>
                        <p class="lorem_text"> looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, contenish</p>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_img"><img src="img/blog-img2.png"></div>
                     <div class="btn_main">
                        <div class="date_text active"><a href="#">06<br>April</a></div>
                     </div>
                     <div class="blog_box">
                        <h3 class="blog_text">Undoubtable source</h3>
                        <p class="lorem_text"> looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, contenish</p>
                     </div>
                     <div class="read_bt active"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_img"><img src="img/blog-img3.png"></div>
                     <div class="btn_main">
                        <div class="date_text"><a href="#">06<br>April</a></div>
                     </div>
                     <div class="blog_box">
                        <h3 class="blog_text">Undoubtable source</h3>
                        <p class="lorem_text"> looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, contenish</p>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- blog section end -->
      <!-- client section start -->
      <!-- <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="client_taital">Our clients Review</h1>
                  <p class="client_text">Content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
               </div>
            </div>
         </div>
      </div>
      <div class="client_section_2">
         <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="customer_main">
                              <div class="customer_left">
                                 <div class="customer_img"><img src="img/client-img.png"></div>
                              </div>
                              <div class="customer_right">
                                 <h3 class="customer_name">Doen Amrk</h3>
                                 <p class="enim_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted </p>
                              </div>
                           </div>
                           <div class="customer_main_1">
                              <div class="customer_left_1">
                                 <div class="client_img1"><img src="img/client-img1.png"></div>
                              </div>
                              <div class="customer_right_1">
                                 <h3 class="customer_name">Josp Amrk</h3>
                                 <p class="enim_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lette </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="customer_main">
                              <div class="customer_left">
                                 <div class="customer_img"><img src="img/client-img.png"></div>
                              </div>
                              <div class="customer_right">
                                 <h3 class="customer_name">Doen Amrk</h3>
                                 <p class="enim_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted </p>
                              </div>
                           </div>
                           <div class="customer_main_1">
                              <div class="customer_left_1">
                                 <div class="client_img1"><img src="img/client-img1.png"></div>
                              </div>
                              <div class="customer_right_1">
                                 <h3 class="customer_name">Josp Amrk</h3>
                                 <p class="enim_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lette </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="customer_main">
                              <div class="customer_left">
                                 <div class="customer_img"><img src="img/client-img.png"></div>
                              </div>
                              <div class="customer_right">
                                 <h3 class="customer_name">Doen Amrk</h3>
                                 <p class="enim_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted </p>
                              </div>
                           </div>
                           <div class="customer_main_1">
                              <div class="customer_left_1">
                                 <div class="client_img1"><img src="img/client-img1.png"></div>
                              </div>
                              <div class="customer_right_1">
                                 <h3 class="customer_name">Josp Amrk</h3>
                                 <p class="enim_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lette </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div> -->
      <!-- client section end -->
      <!-- contact section start -->
      <!-- <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Contact Us</h1>
                  <p class="contact_text"> content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
               </div>
            </div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12 padding15">
                     <form action="">
                        <div class="mail_section_1 ">
                           <input type="text" class="mail_text" placeholder="Name" name="Name">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div> -->
      <!-- contact section end -->
      <!-- footer section start -->
      <!-- <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#"><span class="padding_left_10"><i class="fa fa-map-marker" aria-hidden="true"></i></span>It is a long established fact that a <br>reader will be </a>
                        </li>
                        <li>
                           <a href="#"><span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>(+71) 1234567890</a>
                        </li>
                        <li>
                           <a href="#"><span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>demo@gmail.com</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="newslatter_main">
                     <h1 class="useful_text">Follow Us</h1>
                     <div class="footer_social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- footer section end -->
      <!-- copyright section start -->
      <!-- <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div> -->
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('js/website/jquery.min.js') }}"></script>
      <script src="{{ asset('js/website/popper.min.js') }}"></script>
      <script src="{{ asset('js/website/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/website/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/website/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/website/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/website/custom.js') }}"></script>
   </body>
</html>