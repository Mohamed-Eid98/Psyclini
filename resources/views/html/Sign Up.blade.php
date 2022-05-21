@extends('layouts.app')
@section('content')

<!doctype html>
<html lang="en">
    <head>
        <title>Psyclini</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/icofont.css">
        <link rel="stylesheet" href="../css/signin_signup_style.css">
        <link rel="stylesheet" href="../css/home_style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/flick/jquery-ui.css" rel="stylesheet">
        <link rel="icon" href="../img/icon.png">
 	<body>  

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                                <div class="signup-wrap p-4 p-md-5">
                                    <div class="d-flex">
                                        <div class="w-100 ">
                                            <h3 class="">Sign Up</h3>
                                            <label class="text-muted text-helper">If You're a Therapist Please Contact the Secretary <a href="index.html#contact-us">Here</a></label>
                                        </div>         
                                    </div>

                                    <form action="{{ route('patient.data') }}"  method="POST" class="signup-form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-3">
                                        <input type="text" class="form-control" required>
                                            <label class="form-control-placeholder required" for="Firstname" >Name</label>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}
                                             @endif  
                                        </div>
                                        
                                        <div class="form-group mt-3">
                                        <input type="tel" class="form-control" name="phone" required>
                                            <label class="form-control-placeholder required" for="phone">Phone Number</label>
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}
                                            @endif
                                        </div>
                                        <div class="form-group mt-4">
                                        <input class="form-control " name="dob" id="my_date" required>
                                            <label class="form-control-placeholder required " for="dob">Date of Birth</label>
                                            @if ($errors->has('dob'))
                                                 <span class="text-danger">{{ $errors->first('dob') }}
                                             @endif
                                        </div>
                                        <div class="form-group mt-3">
                                        <input type="email" class="form-control" name="email" required>
                                            <label class="form-control-placeholder required" for="email" >E-mail</label>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}
                                            @endif
                                        </div>
                                        <div class="form-group">
                                        <input id="password-field" type="password" class="form-control" required>
                                            <label class="form-control-placeholder required " for="password">Password</label>
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}
                                             @endif
                                        </div>
                                        <div class="form-group mt-4 profile-pic">
                                            {{-- <label class="lbl" >Add a Profile Picture</label> --}}
                                            {{-- <label class="btn btn-outline-primary w-50 ml-4">Add<input type="file" name= "patient_image" class="ml-2" placeholder="Browse" accept="image/*"> </label> --}}
                                            <label class="text-muted add-img">
                                                <i class="icofont-image"><input type="file" name="patient-pic" id="post-pic" class="post-pic" accept="image/*"></i>
                                                Add an Image 
                                              </label>
                                        </div> 
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded-pill submit px-3">Sign Up</button>
                                        </div>
                
                                    </form>
                                    <p class="text-center sign-color">Already a Member? <a href="{{ route('signin') }}" >Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--لينك jquery الرئيسي -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><!--لينك المكتبه بتاعه التاريخ نفسه-->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/singin_signup.js"></script>

        <script>
            $("#my_date").datepicker({
                maxDate: "-548",
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0"
            });
        </script>
	</body>
</html>
@endsection
