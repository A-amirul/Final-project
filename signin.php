<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


 	<link rel="stylesheet" href="css/design.css">

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<style>
	body{
		overflow-x: hidden;
	}
	
	
	
	#signin{
		width: 70%;
		border-radius: 30px;
	}
	
	

	.field-icon {
	  float: right;
	  margin-left: -25px;
	  margin-top: -25px;
	  position: relative;
	  z-index: 2;
	  margin-right: 10px;
	}
</style>

<body>
	<div class="container">
		<div class="row my-5">
			<div class="col-sm-12">
				<div class="border border-5 border-mute px-5 py-4 m-auto" style="width: 50%;">
					<div>
						<h3 class="text-center mb-5" style=""><strong>Login to FriendSpace</strong></h3>
					</div>

					<div class="">
						<form action="" method="post">
							<input type="email" name="email" placeholder="Email" required="required" class="form-control input-md">
							<br>

							<div class="">
								<input id="password-field" type="password" name="pass" placeholder="Password" required="required" class="form-control input-md">

								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

								<script type="text/javascript">
									$(".toggle-password").click(function() {

									  $(this).toggleClass("fa-eye fa-eye-slash");
									  var input = $($(this).attr("toggle"));
									  if (input.attr("type") == "password") {
									    input.attr("type", "text");
									  } else {
									    input.attr("type", "password");
									  }
									});
								</script>

							</div>

							<div class="mt-4">
								<a style="text-decoration:none; float: left; color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgotten password?</a>

								<a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="Create Account!" href="signup.php">Don't have an account?</a>
							</div>


							<br><br><br>

							<center><button id="signin" class="btn btn-primary btn-lg" name="login">Login</button></center>

							<?php include("login.php"); ?>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>