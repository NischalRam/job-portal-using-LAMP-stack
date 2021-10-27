<?php

error_reporting(0);

$db=new mysqli("localhost","root","","job");
if(isset($_POST['sf'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];


    $q=$db->query("INSERT INTO `signup`(`firstname`,`lastname`,`email`,`password`,`confirm_password`) VALUES ('$firstname','$lastname','$email','$password','$confirm_password')");
    if($q>0){
      echo '
      
      <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #4BB543;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>



<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
  <strong>SUCCESS!</strong> You have successfully registered.
</div>

</body>
</html>
      
      ';
    }
    else{
        echo '
        
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>



<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
  <strong>ERROR!</strong> Sorry, something went wrong please try again.
</div>

</body>
</html>

        
        ';
    }
    
}
 
?>












<html>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="mainhome/website-menu-17/css/style.css">

</head>

<section class="ftco-section" style="padding: 0%;">
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container-fluid">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
					aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item active"><a href="./index.html" class="nav-link">Home</a></li>
						<!-- <li class="nav-item "><a href="./signup.html" class="nav-link">Sign up</a></li> -->
						<li class="nav-item "><a href="./signin.php" class="nav-link">Sign in</a></li>

						<!-- <li class="nav-item"><a href="./mainhome/website-menu-17/student/studentform.php" class="nav-link">Apply</a></li> -->
						<!-- <li class="nav-item"><a href="./mainhome/website-menu-17/dataret/table-07/index.php" class="nav-link">Hire</a></li> -->
						<li class="nav-item"><a href="./mainhome/website-menu-17/dev.html" class="nav-link">Developers</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</section>

<!------ Include the above in your HEAD tag ---------->
<br><br><br>
<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="signup.php" method="post" accept-charset="utf-8" class="form" role="form">
                <legend>Sign Up</legend>

                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="firstname" value="" class="form-control input-lg"
                            placeholder="First Name" />
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="lastname" value="" class="form-control input-lg"
                            placeholder="Last Name" />
                    </div>
                </div>
                <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" />
                <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" />
                <input type="password" name="confirm_password" value="" class="form-control input-lg"
                    placeholder="Confirm Password" />

                <button class="btn btn-lg btn-primary btn-block signup-btn" name="sf" type="submit">
                    Create my account</button>
            </form>
        </div>
    </div>
</div>
</div>

</html>


<style>
    #wrap {
        background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
        /* Mozilla Firefox */
        background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
        /* Opera */
        background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
        /* Webkit (Safari/Chrome 10) */
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
        /* Webkit (Chrome 11+) */
        background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
        /* W3C Markup, IE10 Release Preview */
        background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    legend {
        color: #141823;
        font-size: 25px;
        font-weight: bold;
    }

    .signup-btn {
        background: #79bc64;
        background-image: -webkit-linear-gradient(top, #79bc64, #578843);
        background-image: -moz-linear-gradient(top, #79bc64, #578843);
        background-image: -ms-linear-gradient(top, #79bc64, #578843);
        background-image: -o-linear-gradient(top, #79bc64, #578843);
        background-image: linear-gradient(to bottom, #79bc64, #578843);
        -webkit-border-radius: 4;
        -moz-border-radius: 4;
        border-radius: 4px;
        text-shadow: 0px 1px 0px #898a88;
        -webkit-box-shadow: 0px 0px 0px #a4e388;
        -moz-box-shadow: 0px 0px 0px #a4e388;
        box-shadow: 0px 0px 0px #a4e388;
        font-family: Arial;
        color: #ffffff;
        font-size: 20px;
        padding: 10px 20px 10px 20px;
        border: solid #3b6e22 1px;
        text-decoration: none;
    }

    .signup-btn:hover {
        background: #79bc64;
        background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
        background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
        background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
        background-image: -o-linear-gradient(top, #79bc64, #5e7056);
        background-image: linear-gradient(to bottom, #79bc64, #5e7056);
        text-decoration: none;
    }

    .navbar-default .navbar-brand {
        color: #fff;
        font-size: 30px;
        font-weight: bold;
    }

    .form .form-control {
        margin-bottom: 10px;
    }

    @media (min-width:768px) {
        #home {
            margin-top: 50px;
        }

        #home .slogan {
            color: #0e385f;
            line-height: 29px;
            font-weight: bold;
        }
    }
</style>