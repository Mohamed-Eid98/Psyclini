@extends('layouts.app')
@section('content')
    
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
  
  {{-- <!--nav bar begin-->
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
  <!--nav bar End--> --}}

  
  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8"><!--articles -->
          <div class="row">    
            <div class="col-lg-12 col-md-12 mb-5"><!--article 1-->
              <div class="blog-item">
                <div class="blog-thumb">
                  <img src="../img/الوسواس القهري.jpg" alt="" class="img-fluid ">
                </div>
                <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i>General Psychiatry</span>
                    <span class="text-black text-capitalize text-muted mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div>
                  <div lang="ar" dir="rtl">
                    <h2 class="mt-3 mb-3"><a href="{{ route('article1') }}">الوسواس القهري</a></h2>
                    <p class="mb-4">هو أحد الاضطرابات النفسية العقلية التي قد تُصيب البعض و هو عبارة عن أفكار
                      و صور تدخل إلى عقل الإنسان بطريقة مكررة ويحاول جاهداً مقاومتها دون جدوى
                      و... 
                    </p>
                  </div>
                  <a href="{{ route('article1') }}" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-5"><!--article 2-->
              <div class="blog-item">
                <div class="blog-thumb">
                  <img src="../img/الفصام.jpg" alt="" class="img-fluid ">
                </div>
                <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i>General Psychiatry</span>
                    <span class="text-black text-capitalize text-muted mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div>
                  <div lang="ar" dir="rtl">
                    <h2 class="mt-3 mb-3"><a href="{{ route('article2') }}">الشيزوفرينيا أو انفصام الشخصية</a></h2>
                    <p class="mb-4">تُعّرف الشيزوفرينيا، أو الفصام، أو الفُصام العقلي، أو السكيزوفرينيا، أو السكيتسوفرينيا بأنه اضطراب نفسي مزمن يفسّر فيه المصاب الواقع بشكل غير طبيعي، وتسبب الإصابة بفصام الشخصية الهلوسة، وحدوث مشاكل في التركيز، والتفكير، وطريقة التعبير عن المشاعر، بالإضافة الي... </p>
                  </div>
                  <a href="{{ route('article2') }}" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-5"><!--article 3-->
              <div class="blog-item">
                <div class="blog-thumb">
                  <img src="../img/الرهاب الاجتماعي.jpg" alt="" class="img-fluid ">
                </div>
                <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i>General Psychiatry</span>
                    <span class="text-black text-capitalize text-muted mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div> 
                  <div lang="ar" dir="rtl">
                  <h2 class="mt-3 mb-3"><a href="{{ route('article3') }}">طرق دعم مصاب الرهاب الاجتماعي</a></h2>
                  <p class="mb-4">إن مسئولية دعم مصاب الرهاب الاجتماعي تقع بشكل أساسي على عاتق المقربين والأحباء، وفي هذا المقال سنتعرف على طرق فعالة لدعم مصاب الرهاب الاجتماعي، وكذلك بعض الطرق التي يمكن أن يعتمد عليها المصاب نفسه وتساعده في العلاج.</p>
                </div>
                  <a href="{{ route('article3') }}" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4"><!--Side Bar-->
          <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
            {{-- <div class="sidebar-widget search  mb-3 "><!--Search-->
              <h4>Search Here</h4>
              <form action="#" class="search-form">
                <input type="text" class="form-control" placeholder="search">
                <i class="ti-search"></i>
              </form>
            </div> --}}

            <div class="sidebar-widget latest-post mb-3"><!--Popular Atricles-->
              <h4>Popular Articles</h4>
              <div class="py-2">
                <span class="text-sm text-muted">28 Jan 2022</span>
                <h6 class="my-2"><a href="{{ route('article1') }}">الوسواس القهري</a></h6>
              </div>

              <div class="py-2">
                <span class="text-sm text-muted">06 Feb 2022</span>
                <h6 class="my-2"><a href="{{ route('article2') }}">مرض الفصام</a></h6>
              </div>

              <div class="py-2">
                <span class="text-sm text-muted">03 Mar 2018</span>
                  <h6 class="my-2"><a href="{{ route('article3') }}">طرق دعم مصاب الرهاب الاجتماعي</a></h6>
              </div>                       
            </div>
{{-- 
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
            </div> --}}

          </div>
        </div>
      </div><!--end row-->
      {{-- <div class="row mt-5"><!--page numbers-->
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
      </div> --}}
    </div>
  </section>

  <div class="container"><!--footer-->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top my-footer">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2022 Ain Shams Uni. , Faculty of Science,<br> Maths. Department. </span>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="{{ route('home') }}" class="a-no-decor"><img src="../img/icon.png" width="45"></a>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://github.com/AlyaaRushdy/Psyclini"><i class="icofont-github"></i></a></li>
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://www.facebook.com/FacultyofScienceASU/"><i class="icofont-facebook"></i></a></li>
      </ul>
    </footer>
  </div>




  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>

@endsection