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
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li><a class="dropdown-item" href="department.html">All Departments</a></li>
                <li><a class="dropdown-item" href="department.html#child_adol">Child and Adolescence Disorders</a></li>
                <li><a class="dropdown-item" href="department.html#general">General Psychiatry</a></li>
                <li><a class="dropdown-item" href="department.html#geriatric">Geriatric Psychiatry</a></li>
                <li><a class="dropdown-item" href="department.html#pid">Psychiatry of Intellectual Disability (PID)</a></li>
                <li><a class="dropdown-item" href="department.html#marital">Marital and Family Relations</a></li>
                <li><a class="dropdown-item" href="department.html#forensic">Forensic Psychiatry</a></li>
                <li><a class="dropdown-item" href="department.html#addiction">Addiction</a></li>
                <li><a class="dropdown-item" href="department.html#life_coach">Life Coach</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="doctors.html">Doctors</a></li>
            <li class="nav-item"><a class="nav-link" href="articles.html">Articles</a></li> 
            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>       
            <li class="nav-item"><a class="nav-link" href="tests.html">Tests</a></li>
            <li class="nav-item"><a class="nav-link" href="games.html">Games</a></li>      
            <li class="nav-item"><a class="nav-link" href="index.html#contact-us">Contact Us</a></li>
            <a class="btn btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="Sign In.html">Sign In</a>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--nav bar End-->

  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-12 mb-5"><!--Create a Post-->
              <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="single-blog-item feature-item create-post ">
                <h4 class="mb-1">Create a Post</h4> 
                <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="What are you thinking??"></textarea>
                <label class="text-muted">
                  <input type="file" name="post-pic" id="post-pic" class="post-pic" accept="image/*">
                </label>
                <select class="custom-select" name='cate'>
                  <option value="dep">Open this select menu</option>
                  <option value="otism">One</option>
                  <option value="ocd">Two</option>
                  <option value="add">Three</option>
                </select>
                <div class="text-center">
                  <button class="btn btn-primary">Post</button>
                </div>
              </div>
            </form>
            </div>
            <div class="col-lg-12 mb-5"><!--Post 1-->
              <div class="single-blog-item feature-item"><!--Post content begin-->
                <div class="comment-area"><!--Post Owner-->
                  <div class="comment-area-box post-owner">
                    <div class="comment-thumb float-left">
                      <img alt="" src="../img/Testimonial 5 pic.jpg" class="img-fluid">
                    </div>
                    <div class="comment-info ">
                      <h4 class="mb-1 ">Esraa Mostafa</h4>
                    </div>
                  </div>
                </div>

                <a href="blog page.html"><img src="../img/banner.png" alt="" class="img-fluid"></a>
                <div class="blog-item-content mt-5">

                  <div class="blog-item-meta mb-3"><!--Post headers-->
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Child Disorders</span>
                    <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>2 Comments</span>
                    <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
                  </div> 

                  <p class="article-parag">
                    Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!
                  </p>
                  <a href="blog page.html" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-12 mb-5"><!--Post 2-->
              <div class="single-blog-item feature-item"><!--Post content begin-->
                <div class="comment-area"><!--Post Owner-->
                  <div class="comment-area-box post-owner">
                    <div class="comment-thumb float-left">
                      <img alt="" src="../img/Testimonial 5 pic.jpg" class="img-fluid">
                    </div>
                    <div class="comment-info ">
                      <h4 class="mb-1 ">Esraa Mostafa</h4>
                    </div>
                  </div>
                </div>

                <a href="blog page connected.html"><img src="../img/banner.png" alt="" class="img-fluid"></a>
                <div class="blog-item-content mt-5">

                  <div class="blog-item-meta mb-3"><!--Post headers-->
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Child Disorders</span>
                    <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>2 Comments</span>
                    <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
                  </div> 

                  <p class="article-parag">
                    Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!
                  </p>
                  <a href="blog page connected.html" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-12 mb-5"><!--Post 3-->
              <div class="single-blog-item feature-item"><!--Post content begin-->
                <div class="comment-area"><!--Post Owner-->
                  <div class="comment-area-box post-owner">
                    <div class="comment-thumb float-left">
                      <img alt="" src="../img/Testimonial 5 pic.jpg" class="img-fluid">
                    </div>
                    <div class="comment-info ">
                      <h4 class="mb-1 ">Esraa Mostafa</h4>
                    </div>
                  </div>
                </div>

                <a href="blog page connected.html"><img src="../img/banner.png" alt="" class="img-fluid"></a>
                <div class="blog-item-content mt-5">

                  <div class="blog-item-meta mb-3"><!--Post headers-->
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Child Disorders</span>
                    <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>2 Comments</span>
                    <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
                  </div> 

                  <p class="article-parag">
                    Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!
                  </p>
                  <a href="blog page connected.html" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>       
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

            <div class="sidebar-widget latest-post mb-3"><!--Latest Posts-->
              <h4>Popular Posts</h4>
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
              <h4>Departments</h4>
              <ul class="list-unstyled">
                <li class="align-items-center">
                  <a href="#">Child and Adolescence Disorders</a>
                  <span>(0)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Geriatric Psychiatry</a>
                  <span>(0)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">General Psychiatry</a>
                  <span>(2)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Psychiatry of Intellectual Disability (PID)</a>
                  <span>(0)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Marital and Family Relations</a>
                  <span>(0)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Forensic Psychiatry</a>
                  <span>(0)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Addiction</a>
                  <span>(0)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Life Coach</a>
                  <span>(0)</span>
                </li>                
              </ul>
            </div>
            
            <div class="sidebar-widget tags mb-3"><!--Tags -->
              <h4 class="mb-4">Tags</h4>
              <a href="#">Doctors</a>
              <a href="#">Counseling</a>
              <a href="#">Autism</a>
              <a href="#">Medicine</a>
              <a href="#">Neurodivergent</a>
              <a href="#">Eating Disorders</a>
              <a href="#">Anxiety</a>
              <a href="#">Depression</a>
              <a href="#">OCD</a>
            </div>
          </div>
        </div>
      </div><!--end row-->
      <div class="row mt-5"><!--page numbers-->
        <div class="col-lg-8">
          <nav class="pagination py-2 d-inline-block">
            <div class="nav-links">
              <span aria-current="page" class="page-numbers current">1</span>
              <a class="page-numbers" href="#">2</a>
              <a class="page-numbers" href="#">3</a>
              <a class="page-numbers" href="#"><i class="icofont-thin-double-right"></i></a>    
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>




  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>

