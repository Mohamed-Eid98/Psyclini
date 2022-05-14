@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>

    <title>Psyclini</title>
    
</head>
<body id="bootstrap-overrides">
  

  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

            <div class="col-lg-12 mb-5"><!--Create a Post-->
              <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="single-blog-item feature-item create-post">
                <h4 class="mb-1">Create a Post</h4> 
                <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="What are you thinking??"></textarea>
                <label >Department
                  <select class="form-select post-dep-dropdown" name="cate" >
                    <option class="op" value="child_adol">Child and Adolescence Disorders</option>
                    <option class="op" value="general">General Psychiatry</option>
                    <option class="op" value="geriatric">Geriatric Psychiatry</option>
                    <option class="op" value="pid">Psychiatry of Intellectual Disability (PID)</option>
                    <option class="op" value="marital">Marital and Family Relations</option>
                    <option class="op" value="forensic">Forensic Psychiatry</option>
                    <option class="op" value="addiction">Addiction</option>
                    <option class="op" value="life_coach">Life Coach</option>
                  </select>
                </label>
                <label class="text-muted add-img">
                  <i class="icofont-image"><input type="file" name="post-pic" id="post-pic" class="post-pic" accept="image/*"></i>
                  Add an Image 
                </label>
                <div class="text-right ">
                    <button class="btn btn-primary rounded-pill px-3 ">Post</button>
                  </div>
              </div>
              </form>
            </div>



            @foreach ($posts as $post)
            <div class="col-lg-12 mb-5"><!--Post 1-->
              <div class="single-blog-item feature-item"><!--Post content begin-->
                <div class="comment-area"><!--Post Owner-->
                  <div class="comment-area-box post-owner">
                    <div class="comment-thumb float-left">
                      <img alt="" src="../img/Testimonial 5 pic.jpg" class="img-fluid">
                    </div>
                    <div class="comment-info ">
                      <h4 class="mb-1 ">{{ $post->patient->name}}</h4>
                      {{-- $post->patients->first()->name --}}
                    </div>
                  </div>
                </div>

                <a href="blog page.html"><img src="{{ asset('images/'. $post->image) }}" alt="" class="img-fluid"></a>
                <div class="blog-item-content mt-5">

                  <div class="blog-item-meta mb-3"><!--Post headers-->
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Child Disorders</span>
                    <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>{{ $post->comments_count }} Comments</span>
                    <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> {{ $post->added_at }}</span>
                  </div> 

                  <p class="article-parag">
                      {{ $post->body }}
                  </p>
                  
                  <a href="{{ url('/blogPage', $post->id) }}" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
                
            </div>
        </div>
        @endforeach

                  
          </div>
        </div>

        <div class="col-lg-4"><!--Side Bar-->
          <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
            <div class="sidebar-widget search  mb-3 "><!--Search-->
              <h4>Search Here</h4>
              <form action="{{ route('post.search') }}"  method="GET" class="search-form">
                <input type="text" class="form-control" name= 'posts' placeholder="search">
                <i class="ti-search"></i>
               
                  {{-- <button class="btn btn-primary rounded-pill px-3 ">Post</button> --}}
              
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
                {{ $posts->links() }}
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <div class="container"><!--footer-->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top my-footer">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2022 Ain Shams Uni. , Faculty of Science,<br> Maths. Department. </span>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="index.html" class="a-no-decor"><img src="../img/icon.png" width="45"></a>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://github.com/AlyaaRushdy/Psyclini"><i class="icofont-github"></i></a></li>
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://www.facebook.com/FacultyofScienceASU/"><i class="icofont-facebook"></i></a></li>
      </ul>
    </footer>
  </div>

</body>
</html>
@endsection

