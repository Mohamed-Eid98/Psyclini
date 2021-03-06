<!doctype html>
<html lang="en">
    <head>
        <title>Psyclini</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/icofont.css">
        <link rel="stylesheet" href="../css/signin_signup_style.css">
        <link rel="stylesheet" href="../css/home_style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="icon" href="../img/icon.png">
    </head>
	<body>  
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
    

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                                <div class="signup-wrap p-4 p-md-5">
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Sign Up</h3>
                                        </div>          
                                    </div>
                                    <form action="{{ route('patient.data') }}"  method="POST" class="signup-form">
                                        @csrf
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control"  name = "name" required>
                                            <label class="form-control-placeholder" for="Username" >Name </label>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="email" class="form-control" name="email" required>
                                            <label class="form-control-placeholder" for="email" >E-mail</label>
                                        </div>

                                        <div class="form-group mt-3">
                                            <input type="tel" class="form-control" name="phone" required>
                                            <label class="form-control-placeholder" for="phone">Phone Number</label>
                                        </div>
                                        <div class="form-group">
                                            <input id="password-field" type="password" name = "password" class="form-control" required>
                                            <label class="form-control-placeholder" for="password">Password</label>
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded-pill submit px-3">Sign Up</button>
                                        </div>
                                        <div class="form-group d-md-flex">
                                            <div class="w-50 text-left">
                                                <label class="checkbox-wrap checkbox-primary mb-0"> Remember Me
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>          
                                        </div>
                                    </form>
                                    <p class="text-center sign-color">Already a Member? <a href="Sign In.html" >Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
	</body>
</html>

