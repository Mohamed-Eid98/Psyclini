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
        <header  >
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

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                                <div class="login-wrap p-4 p-md-5">
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Sign In</h3>
                                        </div>          
                                    </div>
                                    <form action="{{ route('patient.login') }}" class="signin-form" method="POST">
                                        @csrf
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="email" required>
                                            <label class="form-control-placeholder" for="Username" >E-mail/Username</label> 
										</div>
                                        <div class="form-group">
                                            <input id="password-field" type="password" class="form-control" name = 'password' required>
                                            <label class="form-control-placeholder" for="password">Password</label>
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded-pill submit px-3">Sign In</button>
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
                                    <p class="text-center sign-color" >Not a Member ?<a href="{{ route('signUp') }}"> Sign Up</a></p>
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

