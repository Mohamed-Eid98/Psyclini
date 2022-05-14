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
<body id="bootstrap-overrides top">
  
  

  <section class="section test-wrap">
    <div class="container col-lg-6">
      <div class="dir-rtl">
        <div class="feature-item ">
          <div class="quiz-container" id="quiz">
            <div class="quiz-header">
              <h4 id="question">هل تشعر كثيرا بالرغبه في النوم والنعاس؟</h4>
              <ul class="list-unstyled">
                <li>
                  <input type="radio" name="answer" id="y" class="answer test-radio">
                  <label for="y" id="y_text" class="test-lable">نعم</label>
                </li>
                <li>
                  <input type="radio" name="answer" id="N" class="answer test-radio">
                  <label for="N" id="N_text" class="test-lable">لا</label>
                </li>
              </ul>
            </div>
            <button id="submit" class="btn btn-primary rounded-pill">التالي</button>
          </div> 
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







  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/test1.blade.php"></script> 


</body>
</html>


@endsection