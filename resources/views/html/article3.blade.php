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

  <!--nav bar End-->

  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <section class="section blog-wrap">
          <div class="container">
            <div class="row" >
              <div class="col-lg-8"><!--Article begin-->
                <div class="row">
                  <div class="col-lg-12 mb-5">
                    <div class="single-blog-item">
                      <img src="../img/الرهاب الاجتماعي.jpg" alt="" class="img-fluid">
                      <div class="blog-item-content mt-3" >
                        <div class="blog-item-meta mb-3">
                          <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i>General Psychiatry</span>
                          <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 06th February 2022</span>
                        </div> 
                        <div lang="ar" dir="rtl" >
                          <h2 class="mb-4 text-md"><a href="{{route('article3')}}">طرق دعم مصاب الرهاب الاجتماعي</a></h2>

                          <h3 class="article-subtitle">المحتوي</h3>
                          <ul class="list-unstyled article-parag" >
                            <li><a href="{{ url('/article3'.'#المرض') }}">أمور يجب أن تتوقف عن قولها</a></li>
                            <li><a href="{{ url('/article3'.'#الاعراض') }} ">طرق دعم مصاب الرهاب الاجتماعي</a></li>
                            <li><a href="{{ url('/article3'.'#التشخيص') }}">نصائح لمصاب القلق الاجتماعي</a></li>
                            <li><a href="{{ url('/article3'.'#المرجع') }}""> المراجع</a></li>
                          </ul>
                          <p class="article-parag">
                            إذا كنت والدًا وكان طفلي يعاني ويحتاج إلى دعم، فسأكون في أمس الحاجة إلى المساعدة، فمن أكبر المشاكل المتعلقة بالأمراض العقلية تتعلق بنقص التوجيه، على عكس المشاكل الجسدية، مثل الخلل في المعدة أو الكسر في العظام، فلا توجد أي تعليمات واضحة لضمان الشفاء من المشاكل النفسية، يمكن للأطباء المتخصصين هنا تقديم الاقتراحات الجيدة لك فقط، لتعتمد عليها في دعم مصاب الرهاب الاجتماعي.
                          </p>
                          <p class="article-parag">
                            إن مسئولية دعم مصاب الرهاب الاجتماعي تقع بشكل أساسي على عاتق المقربين والأحباء، وفي هذا المقال سنتعرف على طرق فعالة لدعم مصاب الرهاب الاجتماعي، وكذلك بعض الطرق التي يمكن أن يعتمد عليها المصاب نفسه وتساعده في العلاج.
                          </p>
                          <h3 class="article-subtitle" id="المرض">أمور يجب أن تتوقف عن قولها</h3>
                          <p class="article-parag">
                            لا تكن سخيفًا، الجميع مشغولون جدًا بحياتهم ولا يمكنهم التركيز عليك.
                          </p>
                          <p class="article-parag">
                            أنت حقًا بحاجة إلى تجميع نفسك معًا! :
                          </p>
                          <p class="article-parag">
                            عند محاولة شخص ما البدء في دعم مصاب الرهاب الاجتماعي، يبدو أن الاستجابة الطبيعية منهم تتلخص في تشجيع المصاب على الهدوء، ومن المفارقات أن هذا يزيد الأمر سوءًا،غير قادر على القيام بذلك فعلًا.
                          </p>
                          <p class="article-parag">
                            لماذا تشعر بالقلق؟
                          </p>
                          <p class="article-parag">
                            هذا واحد من أكثر الأسئلة إثارة للغضب على الإطلاق بالنسبة لمصابي القلق الاجتماعي، لكن يُطلب من مرضى هذا الاضطراب ذلك الطلب مرة واحدة على الأقل على مر سنوات معاناتهم، إذا كان يعرف المريض سبب شعوره بالقلق الشديد، فبالتأكيد سيتمكن من إيجاد حل لهذا الأمر. السؤال عن السبب يبرز فقط كم أن المريض جاهل بنفسه، وهذا غير صحيح أبدًا، من الطبيعي أن يطرح البشر أسئلة ويحاولون تحديد المشكلة، فنحن نحب حل المشاكل، لكن بالنسبة لمصاب القلق الاجتماعي هو لا يستطيع معرفة السبب.
                          </p>
                          
                          <h3 id="الاعراض" class="article-subtitle">طرق دعم مصاب الرهاب الاجتماعي</h3>
                          <p class="article-parag ">
                            <ul class="article-parag list-style-triangle">
                              <li>محاولة تفهم عواطفهم</li>
                            </ul>
                            الشيء الأساسي الذي يجب تذكره هو أن القلق ليس اضطرابًا عقلانيًا، لذلك من المرجح ألا تساعد الاستجابة العقلانية، خاصة خلال لحظة الضيق، بدلًا من ذلك حاول التعامل مع المشاعر وتقبل شعورهم بالقلق، وبدلاً من أن تكون مباشرًا معهم حاول أن تكون صبورًا ولطيفًا، ذكرهم أنه على الرغم من أنهم يشعرون بالضيق الآن، فإن هذا الشعور سوف يزول قريبًا.عند دعم مصاب الرهاب الاجتماعي، تعامل مع الأفكار غير المنطقية واعترف بأنه قلق، على سبيل المثال جرب شيئًا مثل: “يمكنني أن أفهم سبب شعورك بهذه الطريقة، لكن يمكنني أن أؤكد لك أنه ليس حقيقيا وسينتهي قريبًا.”
                          </p>
                          <p class="article-parag ">
                            <ul class="article-parag list-style-triangle">
                              <li>التركيز على مشاعرهم</li>
                            </ul>
                            إذا كنت ترغب في دعم مصاب الرهاب الاجتماعي، لا تسأله لماذا يشعر بالقلق، بدلًا من ذلك اسأله عن شعوره، شجعه على كتابة قائمة بأعراضه، امنح المصاب مساحة من الوقت ليشعر بالراحة دون مقاطعة، إذا كان يبكي دعه بمفرده ولا توقفه، سوف يخفف هذا من شعورهم بشكل أسرع.
                          </p>
                          <p class="article-parag ">
                            <ul class="article-parag list-style-triangle">
                              <li>التحلي بالصبر</li>
                            </ul>
                            يعد الصبر فضيلة كبيرة عندما يتعلق الأمر بالرهاب الاجتماعي، حاول ألا تفقد أعصابك أو تنفجر في وجه المصاب، فعندما تكون أنت من يعمل على دعم مصاب الرهاب الاجتماعي، حاول أن تنتظر حتى ينتهي الجزء الأسوأ قبل اتخاذ إجراء أو محاولة مساعدة الشخص في تبرير ما يحدث.
                          </p>
                          <p class="article-parag ">
                            <ul class="article-parag list-style-triangle">
                              <li>حاول أن تكون مضحكًا</li>
                            </ul>
                            إذا كنت ترغب في دعم مصاب الرهاب الاجتماعي، اعلم أن الضحك يقتل التوتر مثل الماء الذي يقتل النار، عند دعم مصاب الرهاب الاجتماعي من الكيد أن تكون الصديق الرائع الذي يجعله يضحك عندما يكون في محنة.
                          </p>
                          
                          <h3 id="التشخيص" class="article-subtitle"> نصائح لمصاب القلق الاجتماعي </h3>
                          <p class="article-parag ">
                            يصاب الجميع بالتوتر في مواقف اجتماعية معينة، ولكن إذا كنت مصابًا باضطراب الرهاب الاجتماعي، فقد تكون الأحداث اليومية صعبة للغاية، قد تشعر بالخوف أكثر مما يشعر به الآخرون في التفاعلات الاجتماعية، لكن لا تدع الخوف يمنعك من عيش الحياة على أكمل وجه، جرب هذه النصائح لمساعدتك على الشعور بالتحسن.
                          </p>
                          <p class="article-parag ">
                            <ul class="article-parag list-style-triangle">
                              <li>تحكم في تنفسك</li>
                            </ul>
                            يمكن أن يسبب القلق تغيرات في جسمك تجعلك غير مرتاح، على سبيل المثال، قد يصبح تنفسك سريعًا جدًا، هذا يمكن أن يجعلك أكثر قلقا، قد تشعر بالتوتر أو الدوار أو الاختناق، يمكن أن تساعدك تقنيات معينة في إبطاء تنفسك وإدارة أعراض اضطراب القلق الأخرى، جرب طرق مثل: التأمل واليوجا.
                          </p>
                          <p class="article-parag ">
                            <ul class="article-parag list-style-triangle">
                              <li>ممارسة الرياضة</li>
                            </ul>
                            يمكن أن تساعد ممارسة الرياضة والاسترخاء التدريجي للعضلات أيضًا، كما يمكن أن تساعدك اليوجا أيضًا على الهدوء، حيث يمكنها المساعدة في خفض ضغط الدم ومعدل ضربات القلب، وتساعد في تقليل القلق العام.
                          </p>
                          <p class="article-parag ">
                            <ul class="article-parag list-style-triangle">
                              <li>التحضير</li>
                            </ul>
                            يمكن أن يساعدك التخطيط المسبق للمواقف الاجتماعية التي تجعلك متوترًا على الشعور بمزيد من الثقة في النفس، قد تشعر بالحاجة إلى تجنب بعض المواقف لأنها تجعلك قلقًا، فبدلاً من ذلك حاول الاستعداد لما هو قادم.
                          </p>


                          <h3 id="المرجع" class="article-subtitle">المراجع</h3>
                          <ul class="list-unstyled article-parag" >
                            <li><a href="https://www.medicalnewstoday.com/articles/176891" target="_blank">Social anxiety disorder</a></li>
                            <li><a href="https://www.mayoclinic.org/diseases-conditions/social-anxiety-disorder/symptoms-causes/syc-20353561" target="_blank">Social phobia</a></li>
                          </ul>
                        </div>
                        <div class="mt-5 clearfix">
                          <ul class="float-left list-inline tag-option"> 
                            <li class="list-inline-item"><a href="#">Schizophrenia</a></li>
                            <li class="list-inline-item"><a href="#">Mental Disorders</a></li>
                            <li class="list-inline-item"><a href="#">Hallucinations</a></li>
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
                  </div>
       --}}
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
                        <h6 class="my-2"><a href="{{route('article3')}}">طرق دعم مصاب الرهاب الاجتماعي</a></h6>
                    </div>                       
                  </div>
      
                  {{-- <div class="sidebar-widget category mb-3"><!--Department -->
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
