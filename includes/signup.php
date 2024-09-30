<?php require_once "connect.php"; ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Road Trip Rental | Signup</title>
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
	<link rel="stylesheet" href="css/passtrength.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--<link rel="stylesheet" type="text/css" href="login/style.css">-->
	<style type="text/css">
		label {
			font-size: 18px
		}
	</style>
</head>

<body style="background-image: url('img/2.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
	<div class="container">
				<h2 class="text-center" style="color:white">Signup</h2>
				<br>

		<form action="" method="post" id="signup" >
	
			<div class="row">
				<label for="fullname" class="col-sm-2 col-form-label col-md-offset-4">Username</label>

			<div class="col-md-3 ">
			<div class="form-group">
                      <div>
				<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Username" aria-describedby="userHB"  >
					<small id="userHB" class="form-text text-muted">
	  Your username must be 6-10 characters long, contain letters and numbers Only!</small>
                      </div>
			</div>
			</div>
			<div class="col-md-3">
			<p id="status"> </p>
			</div>
</div>

		<div class="row">
			<label for="fullnamereal" class="col-sm-2 col-form-label col-md-offset-4">Fullname</label>
			<div class="col-md-3">
			<div class="form-group">
				<div>
				<input type="text" class="form-control" id="fullnamereal" name="fullnamereal" placeholder="Fullname"  >
				</div>
			</div>
			</div>
		</div>

		<div class="row">
			<label for="licenceno" class="col-sm-2 col-form-label col-md-offset-4">Licence Number</label>
			<div class="col-md-3 ">
			<div class="form-group">
				<div>
				<input type="tel" class="form-control" id="licenceno" name="licenceno" placeholder="Licence Number">
				</div>
			</div>
			</div>
		</div>

		<div class="row">
			<label for="mobileno" class="col-sm-2 col-form-label col-md-offset-4">Phone Number</label>
			<div class="col-md-3 ">
			<div class="form-group">
				<div>
				<input type="tel" class="form-control" id="mobileno" name="mobileno" placeholder="Phone Number">
				</div>
			</div>
			</div>
		</div>

		<div class="row">
			<label for="age" class="col-sm-2 col-form-label col-md-offset-4">Date Of Birth</label>
			<div class="col-md-3 ">
			<div class="form-group">
				<div>
 				<input type="date" class="form-control" id="age"  name="age" placeholder="dd/mm/yyyy">
 				</div>
			</div>
			</div>
		</div>
		
		<div class="row">
			<label for="emailid" class="col-sm-2 col-form-label col-md-offset-4">Email ID</label>
			<div class="col-md-3 ">
			<div class="form-group">
				<div>
				<input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email ID">
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<label for="password" class="col-sm-2 col-form-label col-md-offset-4">Password</label>
			
			<div class="col-md-3 ">
			<div class="form-group">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="passwordHelpInline">
				<small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 6-15 characters long, contain atleast one letter and number, Only!</small>
			</div>
			</div>
		</div>
		<div class="row">
			<label for="confirmpass" class="col-sm-2 col-form-label col-md-offset-4">Confirm Password</label>
			<div class="col-md-3 ">
			<div class="form-group">
				<div>
				<input type="password" class="form-control" id="confirmpass" name="confirmpass" placeholder="Re-enter password again">
				</div>
			</div>
			</div>
		</div>
			
		 <div class=" row">
    <!--<div class="col-md-2">Checkbox</div>-->
    <div class="col-md-3 col-md-offset-4">
      <div class="form-check">
      <div>	
        <input class="form-check-input" type="checkbox" id="terms" name="terms">
        <label class="form-check-label" for="terms">
          <a href="#" style="text-decoration: none;"><span style="color:red;">Terms and conditions</span></a>
        </label>
        </div>
      </div>
     
    <div class="row">
			<div class="col-md-2 ">
			<div class="form-group">
				 <button type="submit" name="signup"  class="btn btn-primary">Signup</button>
			</div>
			</div>
		</div>	
  </div>
	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>

	<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.2/additional-methods.min.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>  

<script src="js/jquery.passtrength.js"></script>

</div>
</body>
</html>			