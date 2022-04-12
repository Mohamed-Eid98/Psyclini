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
<body id="bootstrap-overrides top">
  
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

  <!--banner begin-->
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xl-7">
          <div class="block">
            <span class="text-uppercase text-sm letter-spacing ">It's never too late!</span>
            <h1 class="mb-3 mt-3">Your Mental Health Matters</h1>
            
            <p class="mb-4 pr-5 font-large-p">With the help of the best Therapists, Psychiatrists and Counselors get back up on your feet.</p>
            <div class="btn-container ">
              <a href="#doctor_mainpage" class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4">Get Started<i class="icofont-simple-right ml-2  "></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner end-->

  <!--book an appointment section begin-->
  <section class="section" id="doctor_mainpage">
    <div class="container ">
      <div class="row align-items-center ">
        <div class="col-lg-7">
          <div class="appoinment-content">
            <img src="../img/doctors.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4">
          <div class=" pl-4 mt-4 mt-lg-0">
            <h2 class="title-color">Easy, Fast<br>& Efficient</h2>
            <p class="mt-4 mb-5 font-large-p">Choose your therapist and book an appointment from the comfort of your home.</p>
            <a href="doctors.html" class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4">Book an Appointment<i class="icofont-simple-right ml-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--book an appointment section end-->

  <!--Working Hours Table begin-->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="feature-block d-lg-flex">
            <div class="feature-item-clinic mb-5 mb-lg-0"><!--Clinic Working Hours-->
              <div class="feature-icon mb-4">
                <i class="icofont-ui-clock"></i>
              </div>
              <span>Timing schedule</span>
              <h4 class="mb-3">Clinic Working Hours</h4>
              <ul class="w-hours list-unstyled">
                <li class="d-flex justify-content-between">Sat : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Sun : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Mon : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Tue : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Wed : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Thu : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Fri : <span class="afternoon-sch"> 17:00 - 22:00</span></li>
              </ul>
            </div>
            <div class="feature-item-doctors mb-5 mb-lg-0"><!--Doctors Working Hours-->
              <div class="feature-icon mb-4">
                <i class="icofont-ui-clock"></i>
              </div>
              <span>Timing schedule</span>
              <h4 class="mb-3">Doctors Working Days</h4>
              <ul class="w-hours list-unstyled">
                <li class="d-flex justify-content-between">Sat <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Mohammad Adel</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Walaa Mohammad</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Ahmed Abd El Ghane</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amira Ali</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amir Karim</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amin Ali</a></span></span></li>
                <li class="d-flex justify-content-between">Sun <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Samir Mohammad</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Marina Kamil</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Said Ali</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Manar Ahmed</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Samar Said</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Moustafa Said</a></span></span></li>
                <li class="d-flex justify-content-between">Mon <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Ahmed Abbas</a></span></span> <span class="vr"> </span> <span class="morning-sch"><span><a href="#">Nader Ali</a></span></span> <span class="vr"> </span> <span class="afternoon-sch"><span><a href="#">Salah Abd Alah</a></span></span> <span class="vr"> </span> <span class="afternoon-sch"><span><a href="#">Kamal Mohammad</a></span></span></li>
                <li class="d-flex justify-content-between">Tue <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Mohammad Adel</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Mohammad Adel</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Ahmed Abd El Ghane</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amira Ali</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amir Karim</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amin Ali</a></span></span></li>
                <li class="d-flex justify-content-between">Wed <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Samir Mohammad</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Marina Kamil</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Said Ali</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Manar Ahmed</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Samar Said</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Moustafa Said</a></span></span></li>
                <li class="d-flex justify-content-between">Thu <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Ahmed Abbas</a></span></span> <span class="vr"> </span> <span class="morning-sch"><span><a href="#">Nader Ali</a></span></span> <span class="vr"> </span> <span class="afternoon-sch"><span><a href="#">Salah Abd Alah</a></span></span> <span class="vr"> </span> <span class="afternoon-sch"><span><a href="#">Kamal Mohammad</a></span></span></li>
                <li class="d-flex justify-content-between">Fri <span>Open</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Working Hours Table end-->

  <!--testimonial section begin-->
  <section class="section testimonial-2 gray-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="section-title text-center">
            <h2>What Our Patients Say</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row align-items-center " >
        <div class="col-lg-12 testimonial-wrap-2">

          <div class="testimonial-block style-2  gray-bg" ><!--Testimonial 1-->
            <i class="icofont-quote-right"></i>
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 1 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info ">
              <h4>Amazing service!</h4>
              <span>Azza Shawky</span>
              <p>knowledgeable, patient, committed, kind, great listener. Couldn't ask for more from a therapist. </p>
            </div>
            <h5>To Doctor : <a href="#"> Marina Kamil</a></h5>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 2-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 2 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Expert doctors!</h4>
              <span>Essam Mansour</span>
              <p> Dr Moustafa is a great therapist as I found him easy to open up to and he helped me develop the tools & skills needed to get through difficult time and to go forward. 
                Would highly recommend him. 
              </p>
            </div>
            <h5>To Doctor : <a href="#"> Moustafa Said</a></h5>
            <i class="icofont-quote-right"></i>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 3-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 3 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>The Best!</h4>
              <span>Naser Ezz El-Dean</span>
              <p>
                Thanks Dr.Ahmed for your time and for listening to me. Best regards.
              </p>
            </div>
            <h5>To Doctor : <a href="#"> Ahmed Abd El Ghane</a></h5>
            <i class="icofont-quote-right"></i>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 4-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 4 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Nice Environment!</h4>
              <span>Mina Emad</span>
              <p class="mt-4 dir-rtl">مريح جدا في التعامل و قدرت اتكلم معاه براحتي وبصدق</p>
            </div>
            <i class="icofont-quote-right"></i>
            <h5>To Doctor : <a href="#">Samir Mohammad</a></h5>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 5-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 5 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Great Responses</h4>
              <span>Esraa Mostafa</span>
              <p class="dir-rtl">
                د كمال مخلص جدا ومنظم واسلوبه جميل ساعدني كتير في فهم مشاعري وازاي اتعامل معها بطريقة مختلفة غيرت عندي حاجات كتيرة شكرا جدا               </p>
            </div>
            <i class="icofont-quote-right"></i>
            <h5>To Doctor : <a href="#">Kamal Mohammad</a></h5>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--testimonial section end-->

  <!--contact us section begin-->
  <section class="section contact" id="contact-us">
    <div class="container ">
      <div class="col-md-5">
        <h2 class="title-color">Contact Us</h2><br>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 ">
          <div class="address-block">
            <div class="media">
              <i class="icofont-location-pin"></i>
              <div class="media-body">
                <h3>Location</h3>
                <p>17 Bahgat Ali St., Zamalek<br>Cairo, Egypt</p>
              </div>
            </div>
            <div class="media">
              <i class="icofont-phone"></i>
              <div class="media-body">
                <h3>Phone</h3>
                <p>(+20) 012 3456 7891<br> (+20) 02 2345 6234 </p>
              </div>
            </div>
            <div class="media">
              <i class="icofont-ui-email"></i>
              <div class="media-body">
                <h3>Email</h3>
                <p>psyclini_clinic@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="contact-form">
            <form action="!#" class="row">
              <div class="col-lg-6">
                <input type="text" name="name" class="form-control main" placeholder="Name" required>
              </div>
              <div class="col-lg-6">
                <input type="email" class="form-control main" placeholder="Email" name="email" required>
              </div>
              <div class="col-lg-12">
                <input type="tel" class="form-control main" placeholder="Phone Number" required>
              </div>
              <div class="col-lg-12">
                <textarea name="message" rows="8" class="form-control main" placeholder="Your message"></textarea>
              </div>
              <div class="col-md-12 text-right">
                <button class=" btn btn-primary rounded-pill submit px-3" type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact us section end-->

  <div class="container">
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





  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


