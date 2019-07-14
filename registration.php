<?php
include 'db.php';
//include 'register.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                    	<form action="register.php">
	                        <h2 class="form-title">Sign up</h2>
	                        <form method="GET" class="register-form" id="register-form" >
	                            <div class="form-group">
	                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
	                                <input type="text" name="name" id="name" placeholder="Your Name"  required>
	                            </div>
	                            <div class="form-group">
	                                <label for="email"><i class="zmdi zmdi-email"></i></label>
	                                <input type="email" name="email" id="email" placeholder="Your Email" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
	                                <input type="password" name="pass" id="pass" placeholder="Password" required>
	                            </div>
	                            <!-- <div class="form-group">
	                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
	                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required>
	                            </div> -->

	                            <div class="form-group">
	                                <label for="location"><i class="zmdi zmdi-pin"></i></label>
	                                <input type="text" name="location" id="location" placeholder="location" required>
	                            </div>

	                            <div class="form-group">
	                                <!-- <label for="schoolname"><i class="zmdi zmdi-home"></i></label> -->
	                                <!-- <input type="text" name="schoolname" id="schoolname" placeholder="School Name"/> -->
	                                     <strong>school-name  :</strong>  
	                                     <select name="school">
		                                  	<option value="Gowtham model school,hyderabad,333">Gowtham model school,hyderabad,333</option>
										    <option value="vignan high school,vikarabad,444">vignan high school,vikarabad,444</option>
										    <!-- <option value="fiat">Fiat</option> -->
										    <option value="gurkul international school,warangal,111">gurkul international school,warangal,111</option>
									  </select>
	                                <!-- <ul class="dropdown-menu">
								      <li><a href="#">Gowtham model school</a></li>
								      <li><a href="#">vignan high school</a></li>
								      <li><a href="#">gurkul international school</a></li>
								    </ul> -->
	                            </div>
	                            <div class="form-group form-button">
	                        	        <!-- <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/> -->
	                        	        <input  type="submit" value="Register" name="signup" id="signup" class="btn btn-primary">
	                            </div>
	                        </form>
	                    </div>
	                </form>
                    <div class="signup-image">
                        <figure><img src="images/signup.png" alt="sing up image"></figure>
                        <a href='Login1.php' class="btn btn-success">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
