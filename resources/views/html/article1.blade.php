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
  
  <!--nav bar begin-->

  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <section class="section blog-wrap">
          <div class="container">
            <div class="row">
              <div class="col-lg-8"><!--Article begin-->
                <div class="row">
                  <div class="col-lg-12 mb-5">
                    <div class="single-blog-item">
                      <img src="../img/الوسواس القهري.jpg" alt="" class="img-fluid">
                      <div class="blog-item-content mt-3">
                        <div class="blog-item-meta mb-3">
                          <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i>General Psychiatry</span>
                          <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2022</span>
                        </div> 

                        <div lang="ar" dir="rtl">
                          <h2 class="mb-4 text-md"><a href="{{ route('article1') }}">الوسواس القهري</a></h2>
                          <h3>المحتوي</h3>
                          <ul class="list-unstyled article-parag">
                            <li><a href="{{ url('/article1'.'#المرض') }}"> ما هو مرض الوسواس القهري</a></li>
                            <li><a href="{{ url('/article1'.'#الاعراض') }}"> أعراض الإصابة بالوسواس القهري</a></li>
                            <li><a href="{{ url('/article1'.'#العلاج') }}">علاج الوسواس القهري</a></li>
                            <li><a href="{{ url('/article1'.'#الفيديو') }}">فيديو عن الوسواس القهري</a></li>
                            <li><a href="{{ url('/article1'.'#المرجع') }}">المراجع</a></li>
                          </ul>

                          <h3 class="article-subtitle" id="المرض"> ما هو مرض الوسواس القهري </h3>
                          <p class="article-parag">هو أحد الاضطرابات النفسية العقلية التي قد تُصيب البعض و هو عبارة عن أفكار
                            وصور تدخل إلى عقل الإنسان بطريقة مكررة ويحاول جاهداً مقاومتها دون جدوى,
                            و يتسبب هذا الاضطراب  بتعكير صفو حياة المصاب وقد يتسبّب بتغيّبه عن المدرسة،
                            أو الجامعة، أو العمل، وكذلك يؤثر في علاقاته بشكلٍ ملحوظ، ويجعل الشخص يشعر
                            أنّ تصرفاته خارجة عن سيطرته.
                          </p>

                          <!--<blockquote class="quote">
                            A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.
                          </blockquote>-->
                          <h3 id="الاعراض" class="article-subtitle">اعراض الإصابه بالوسواس القهري</h3>
                          <p class="article-parag">
                            يوجد الكثير من الاعراض لمريض الوسواس القهري تختلف من مريض لاخر
                            و تتضمن الاعراض تحت مسمي الهواجس والسلوك القهري ومن الاعراض الشائعه :
                            <ul class="list-style-triangle article-parag">
                              <li>	الإفراط في غسل اليدين أو الاستحمام أو القيام بأنشطة تُظهر حرصاً على النظافة بشكلٍ زائد عن حده كالإفراط في تنظيف القطع المنزلية كذلك.</li>
                              <li>	التفحص الدائم للأمور بشكلٍ يزيد عن الحد الطبيعي، كفحص الجسد للتأكد من سلامته، وتفقد الأمور باستمرار بشكلٍ غيرطبيعي.</li>
                              <li>	تكرار القيام ببعض الأمور، كإعادة الكتابة مرات ومرات، أو تكرار القراءة، أو تكرار بعض الحركات الجسدية كالرمش مثلاً، أو يمكن أن يقوم المصاب بتكرار بعض التصرفات للوصول إلى رقم محدد كالقيام بمهمة ثلاث مرات لاقتناع المصاب أنّ هذا يُشعره أنّ أداءه سليم وصحيح. </li>
                              <li>	إعادة ترتيب الأشياء على الرغم من أنّها مرتبة ولا تحتاج إلى ذلك.</li>
                              <li>	العدّ خلال أداء مهمة معينة للوصول إلى رقم ما.</li>
                            </ul>
                          </p>
                          <h3 id="العلاج" class="article-subtitle">علاج الوسواس القهري</h3>
                          <p class="article-parag">
                            يقوم علاج حالات الإصابة بالوسواس القهري  بالاعتماد على صحة
                            المصاب العامة وحالته، ويجدر بالذكر أنّ الطبيب المختص عليه أن
                            يأخذ بعين الاعتبار المشاكل والاضطرابت الصحية التي يُعاني منها
                            المصاب بالوسواس القهري، فكثير منهم يعاني إلى جانب هذا الاضطراب
                            من الاكتئاب  أو القلق , ويمكن العلاج بوصف الادويه او العلاج النفسي
                            كالعلاج السُّلوكي المعرفي وقد وجد بعض الباحثين أنّ له دور فعال يماثل
                            العلاجات الدوائية.
                          </p>
                          
                          <h3 id="الفيديو" class="article-subtitle">فيديو عن الوسواس القهري</h3>
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/0AHrQRCwr_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          
                          <h3 id="المرجع" class="article-subtitle" >المراجع</h3>
                          <ul class="list-unstyled article-parag">
                            <li><a href="https://www.webmd.com/mental-health/obsessive-compulsive-disorder#1" target="_blank">What is OCD</a></li>
                            <li><a href="https://mawdoo3.com/%D9%85%D8%A7_%D9%87%D9%88_%D8%A7%D9%84%D9%88%D8%B3%D9%88%D8%A7%D8%B3_%D8%A7%D9%84%D9%82%D9%87%D8%B1%D9%8A" target="_blank">mawdoo3</a></li>
                            <li><a href="https://www.webteb.com/articles" target="_blank"> webteb</a></li>
                            <li><a href="https://www.nimh.nih.gov/health/topics/obsessive-compulsive-disorder-ocd" target="_blank">The National Institute of Mental Health</a></li>
                          </ul>
                        </div>

                        <div class="mt-5 clearfix">
                          <ul class="float-left list-inline tag-option"> 
                            <li class="list-inline-item"><a href="#">OCD</a></li>
                            <li class="list-inline-item"><a href="#">Anxiety</a></li>
                            <li class="list-inline-item"><a href="#">Neurodivergent</a></li>
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
                </div>
              </div><!--Article end-->

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
          </div>
        </section>
      </div>
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