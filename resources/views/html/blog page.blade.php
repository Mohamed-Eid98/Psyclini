<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="icon" href="../img/icon.png">
    <title>Psyclini</title>
    
</head>
<body id="bootstrap-overrides">
  
  <!--nav bar begin-->
  <header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="../img/logo.png" alt="" class="img-fluid" >
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icofont-navigation-menu"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarmain">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('doctors/') }}">Doctors</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('articles/') }}">Articles</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{ url('test/') }}">Tests</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('blog/') }}">Blog</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{ url('') }}">Games</a></li>      
            <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
            <a class="btn btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ url('sign in/') }}">Sign In</a>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--nav bar End-->

  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <section class="section blog-wrap">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-lg-12 mb-5">
                    <div class="single-blog-item"><!--Post content begin-->
                      <img src="../img/banner.png" alt="" class="img-fluid">
                      <div class="blog-item-content mt-5">

                        <div class="blog-item-meta mb-3">
                          <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Child Disorders</span>
                          <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i> Comments</span>
                          <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
                        </div> 

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto expedita sapiente.</p>

                        <div class="mt-5 clearfix">
                          <ul class="float-left list-inline tag-option"> 
                            <li class="list-inline-item"><a href="#">Advancher</a></li>
                            <li class="list-inline-item"><a href="#">Landscape</a></li>
                            <li class="list-inline-item"><a href="#">Travel</a></li>
                          </ul>        
                          <ul class="float-right list-inline">
                            <li class="list-inline-item"> Share: </li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-pinterest" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-linkedin" aria-hidden="true"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12"><!-- Comments -->
                    <div class="comment-area mt-4 mb-5">
                      <h4 class="mb-4">2 Comments on Healthy environment... </h4>
                      <ul class="comment-tree list-unstyled">
                        <li class="mb-5">
                          <div class="comment-area-box">
                            <div class="comment-thumb float-left">
                              <img alt="" src="../img/Testimonial 2 pic.jpg" class="img-fluid">
                            </div>
                            <div class="comment-info">
                              <h5 class="mb-1">John</h5>
                              <span>United Kingdom</span>
                              <span class="date-comm">| Posted April 7, 2019</span>
                            </div>
                            <div class="comment-meta mt-2">
                              <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply</a>
                            </div>
                            <div class="comment-content mt-3">
                              <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="comment-area-box">
                            <div class="comment-thumb float-left">
                              <img alt="" src="../img/Testimonial 5 pic.jpg" class="img-fluid">
                            </div>
                            <div class="comment-info">
                              <h5 class="mb-1">Philip W</h5>
                              <span>United Kingdom</span>
                              <span class="date-comm">| Posted June 7, 2019</span>
                            </div>
                            <div class="comment-meta mt-2">
                              <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply </a>
                            </div>
                            <div class="comment-content mt-3">
                              <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  {{-- <div class="col-lg-12"><!--Write a Comment-->
                    <form class="comment-form my-5" id="comment-form">
                      <h4 class="mb-4">Write a Comment</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input class="form-control" type="text" name="mail" id="mail" placeholder="Email">
                          </div>
                        </div>
                      </div>
                      <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>
                      <input class="btn btn-primary rounded-pill" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
                    </form>
                  </div> --}}
                </div>
              </div>

              <div class="col-lg-4"><!--Side Bar-->
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                  <div class="sidebar-widget search  mb-3 "><!--Search-->
                    <h4>Search Here</h4>
                    <form action="#" class="search-form">
                      <input type="text" class="form-control" placeholder="search">
                      <i class="ti-search"></i>
                    </form>
                  </div>
      
                  <div class="sidebar-widget latest-post mb-3"><!--Popular Atricles-->
                    <h4>Popular Articles</h4>
                    <div class="py-2">
                      <span class="text-sm text-muted">03 Mar 2018</span>
                      <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
                    </div>
      
                    <div class="py-2">
                      <span class="text-sm text-muted">03 Mar 2018</span>
                      <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
                    </div>
      
                    <div class="py-2">
                      <span class="text-sm text-muted">03 Mar 2018</span>
                        <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
                    </div>                       
                  </div>
      
                  <div class="sidebar-widget category mb-3"><!--Department -->
                    <h4>Department</h4>
                    <ul class="list-unstyled">
                      <li class="align-items-center">
                        <a href="#">Child Disorders</a>
                        <span>(7)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Adolescence disorders</a>
                        <span>(20)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Mood Disorders (Depression)</a>
                        <span>(10)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Anxiety Disorders and Obsessions</a>
                        <span>(5)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Marriage Counselling/Relationship Disorders</a>
                        <span>(5)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Psychotic Disorders</a>
                        <span>(5)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Addiction</a>
                        <span>(5)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Sexual Disorders</a>
                        <span>(5)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Eating Disorders</a>
                        <span>(5)</span>
                      </li>
                    </ul>
                  </div>
                  <div class="sidebar-widget tags mb-3"><!--Tags -->
                    <h4 class="mb-4">Tags</h4>
                    <a href="#">Doctors</a>
                    <a href="#">agency</a>
                    <a href="#">company</a>
                    <a href="#">medicine</a>
                    <a href="#">surgery</a>
                    <a href="#">Marketing</a>
                    <a href="#">Social Media</a>
                    <a href="#">Branding</a>
                    <a href="#">Laboratory</a>
                  </div>
                </div>
              </div>
            </div><!--end row-->
          </div>
        </section>
      </div>
    </div>
  </section>
          


        




  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


