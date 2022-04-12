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

  <!--banner begin-->
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xl-7">
          <div class="block">
            <span class="text-uppercase text-sm letter-spacing ">It's never too late!</span>
            <h1 class="mb-3 mt-3">Your Mental Health Matters</h1>
            
            <p class="mb-4 pr-5">With the help of the best Therapists, Psychiatrists and Counselors get back up on your feet</p>
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
            <p class="mt-4 mb-5">Choose your therapist and book an appointment from the comfort of your home.</p>
            <a href="doctors.html" class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4">Book an Appointment<i class="icofont-simple-right ml-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--book an appointment section end-->

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
            <h5>To Doctor : <a href="#"> Mazen Salah</a></h5>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 2-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 2 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Expert doctors!</h4>
              <span>Essam Mansour</span>
              <p> Dr Mostafa is a great therapist as I found him easy to open up to and he helped me develop the tools & skills needed to get through difficult time and to go forward. 
                Would highly recommend him. 
              </p>
            </div>
            <h5>To Doctor : <a href="#"> Mostafa Ezzat</a></h5>
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
                Thanks Dr.Bassma for your time and for listening to me. Best regards.
              </p>
            </div>
            <h5>To Doctor : <a href="#"> Bassma Adel</a></h5>
            <i class="icofont-quote-right"></i>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 4-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 4 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Nice Environment!</h4>
              <span>Mina Emad</span>
              <p class="mt-4 dir-rtl">
                مريح جدا في التعامل و قدرت اتكلم معاه براحتي وبصدق
              </p>
            </div>
            <i class="icofont-quote-right"></i>
            <h5>To Doctor : <a href="#"> Eslam Fathy</a></h5>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 5-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 5 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Great Responses</h4>
              <span>Esraa Mostafa</span>
              <p class="dir-rtl">
                د حسين مخلص جدا ومنظم واسلوبه جميل ساعدني كتير في فهم مشاعري وازاي اتعامل معها بطريقة مختلفة غيرت عندي حاجات كتيرة شكرا جدا               </p>
            </div>
            <i class="icofont-quote-right"></i>
            <h5>To Doctor : <a href="#"> Hussien Mahmoud</a></h5>
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





  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


