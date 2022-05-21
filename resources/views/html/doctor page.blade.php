@extends('layouts.app')
@section('content')
    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Psyclini</title>
    
</head>
<body id="bootstrap-overrides top">
  

  <section class="section doctor-page">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-7 col-md-7">

          <div class="row feature-item"> 
            <div class="doctor-img-block col-lg-4">
              <img src="{{ asset('').$doctor->img }}" alt="" class="img-fluid w-100">
              <div class="info-block mt-4">
                <h4 class="mb-0" id="doctor_name">{{ $doctor->name}}</h4>
              </div>
            </div>

            <div class="doctor-details mt-4 mt-lg-0 col-lg-8">
              <h4 >Basic Info</h4>
              <label class="doctor-title"> Speciality : <label> {{ $doctor->speciality}} </label></label><br>
              <label class="doctor-title"> Rating  : </label>
              <div class="d-flex justify-content-between col-lg-5 list-unstyled rating">
                <i class="icofont-star full-star"></i>
                <i class="icofont-star full-star"></i>
                <i class="icofont-star full-star"></i>
                <i class="icofont-star full-star"></i>
                <i class="icofont-star empty-star"></i>
              </div>
            </div>
          </div>

          <div class="row feature-item doctor-qualification">
            <ul class="nav nav-tabs">
              <li><a data-toggle="tab" href="#doctor-details" class="nav-link active">Doctor's Details</a></li>
              <li><a data-toggle="tab" href="#reviews" class="nav-link ">Reviews</a></li>
            </ul>
          
            <div class="tab-content col-lg-12 col-md-12">
              <div id="doctor-details" class="tab-pane fade in active show">
                <div class="experience-section">
                  <h4 class="">Experience</h4>
                  <div class="edu-block ">
                    <span class="h6 text-muted">Year(2005-2007) </span>
                    <h5 class="title-color">MBBS, M.D at University of Wyoming</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <div class="edu-block">
                    <span class="h6 text-muted">Year(2007-2009) </span>
                    <h5 class="title-color">M.D. of Netherland Medical College</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!--
                <div class="experience-section">
                  <h4 class="">Certificates</h4>
                  <div class="edu-block ">
                    <span class="h6 text-muted">Year(2005-2007) </span>
                    <h5 class="title-color">MBBS, M.D at University of Wyoming</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <div class="edu-block">
                    <span class="h6 text-muted">Year(2007-2009) </span>
                    <h5 class="title-color">M.D. of Netherland Medical College</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                -->
                <div class="experience-section">
                  <h4 class="">Education</h4>
                  <div class="edu-block ">
                    <span class="h6 text-muted">Year(2005-2007) </span>
                    <h5 class="title-color">{{ $doctor->education}} at University of Wyoming</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <div class="edu-block">
                    <span class="h6 text-muted">Year(2007-2009) </span>
                    <h5 class="title-color">M.D. of Netherland Medical College</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>

              <div id="reviews" class="tab-pane fade doctor-reviews">
                <div class="container review-meta d-flex justify-content-center align-items-center ">
                  <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="ratings"> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star"></i> </div>
                      <h5 class="review-count">12 Reviews</h5>
                    </div>
                    <div class="mt-4 d-flex justify-content-between align-items-center">
                      <h5 class="review-stat">Communication</h5>
                      <div class="small-ratings"> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star"></i> <i class="icofont-star"></i> </div>
                    </div>
                    <div class="mt-1 d-flex justify-content-between align-items-center">
                      <h5 class="review-stat">Understanding of the situation</h5>
                      <div class="small-ratings"> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star"></i> </div>
                    </div>
                    <div class="mt-1 d-flex justify-content-between align-items-center">
                      <h5 class="review-stat">Providing effective solutions</h5>
                      <div class="small-ratings"> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star"></i> <i class="icofont-star"></i> <i class="icofont-star"></i> </div>
                    </div>
                    <div class="mt-1 d-flex justify-content-between align-items-center mb-3">
                      <h5 class="review-stat">Commitment to start and end times</h5>
                      <div class="small-ratings"> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color"></i> <i class="icofont-star rating-color "></i></div>
                    </div>
                  </div>
                </div> 

                <div class="testimonial-2 review-contents">
                  <div class="row align-items-center">
                    <div class="col-lg-12 testimonial-wrap">
                      <div class="feature-item style-2 " ><!--Testimonial 1-->
                        <div class="client-info ">
                          <p>knowledgeable, patient, committed, kind, great listener. Couldn't ask for more from a therapist. </p>
                        </div>
                        <h6 class="title-color">By : Mina Kamil</h6>
                      </div>
                      <div class="feature-item style-2 "><!--Testimonial 2-->
                        <div class="client-info">
                          <p> Dr Moustafa is a great therapist as I found him easy to open up to and he helped me develop the tools & skills needed to get through difficult time and to go forward. 
                            Would highly recommend him. 
                          </p>
                        </div>
                        <h6 class="title-color">By : Ahmed Salah</h6>
                      </div>
                      <div class="feature-item style-2 "><!--Testimonial 3-->
                        <div class="client-info">
                          <p>
                            Thanks Dr.Ahmed for your time and for listening to me. Best regards.
                          </p>
                        </div>
                        <h6 class="title-color">By : Doaa Ezz</h6>
                      </div>
              
                      <div class="feature-item style-2"><!--Testimonial 4-->
                        <div class="client-info">
                          <p class="dir-rtl">مريح جدا في التعامل و قدرت اتكلم معاه براحتي وبصدق</p>
                        </div>
                        <h6 class="title-color">By : Ezzat Mostafa</h6>
                      </div>
              
                      <div class="feature-item style-2"><!--Testimonial 5-->
                        <div class="client-info">
                          <p class="dir-rtl">
                            د كمال مخلص جدا ومنظم واسلوبه جميل ساعدني كتير في فهم مشاعري وازاي اتعامل معها بطريقة مختلفة غيرت عندي حاجات كتيرة شكرا جدا               </p>
                        </div>
                        <h6 class="title-color">By : Esraa Ahmed</h6>
                      </div>
            
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-5 position-sticky fixed-top ">
          <div class="sidebar-widget white-bg p-4 calendar-container ">
            <div class="calendar">
              <h4 class="mb-4">Book an Appoinment</h4>
              <div class="appointment-fees justify-content-center">
                <i class="icofont-money"></i>
                <label class="30-min-fee">60 Mins : 220 EGP</label>
                <!--
                <label class="ver-divider"> - </label>              
                <label class="60-min-fee">60 Mins : 200 EGP</label>
                -->
              </div>
              <div class="year-header"> 
                <span class="left-button" id="prev"><i class="icofont-rounded-left"></i></span> 
                <span class="year" id="label">2022</span> 
                <span class="right-button" id="next"><i class="icofont-rounded-right"></i></span>
              </div> 
              <table class="months-table w-100"> 
                <tbody>
                  <tr class="months-row">
                    <td class="month">Jan</td> 
                    <td class="month">Feb</td> 
                    <td class="month">Mar</td> 
                    <td class="month">Apr</td> 
                    <td class="month">May</td> 
                    <td class="month">Jun</td> 
                    <td class="month">Jul</td>
                    <td class="month">Aug</td> 
                    <td class="month">Sep</td> 
                    <td class="month">Oct</td>          
                    <td class="month">Nov</td>
                    <td class="month">Dec</td>
                  </tr>
                </tbody>
              </table>               
              <table class="days-table w-100"> 
                <td class="day">Sun</td> 
                <td class="day">Mon</td> 
                <td class="day">Tue</td> 
                <td class="day">Wed</td> 
                <td class="day">Thu</td> 
                <td class="day">Fri</td> 
                <td class="day">Sat</td>
              </table> 
              <div class="frame"> 
                <table class="dates-table w-100"> 
                  <tbody class="tbody">             
                  </tbody> 
                </table>
              </div> 
            </div>
            <div class="events-container"></div>
            <div class="justify-content-center disp-flex">
              <a class="button book-button" href="{{ route('book.store')}}" id="book-button">Book Now</a>
            </div>
          </div>
          <button class="button" id="add-button">Add Event</button>
          <div class="dialog" id="dialog">
            <h2 class="dialog-header"> Add New Event </h2>
            <form class="form" id="form">
              <div class="form-container" align="center">
                <label class="form-label" id="valueFromMyButton" for="name">Event name</label>
                <input class="input" type="text" id="name" maxlength="36">
                <label class="form-label" id="valueFromMyButton" for="count">Number of people to invite</label>
                <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
                <input type="button" value="Cancel" class="button" id="cancel-button">
                <input type="button" value="OK" class="button button-white" id="ok-button">
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!--footer begin-->
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
  <!--footer end-->




  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/calendar.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


@endsection
