<!DOCTYPE html>
<html>
<head>
	<title>FriendSpace</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


 	<link rel="stylesheet" href="css/design.css">

	
</head>
<style>
	body{
		overflow-x: hidden;
	}
	
	#signup{
		width: 60%;
		border-radius: 30px;
	}

	#signup:hover{
		background-color: #72D563;
	}
	#login{
		width: 60%;
		border: 1px solid #1da1f2;
		border-radius: 30px;
	}

	#login:hover{
		width: 60%;
		background-color: #77A7FF;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	

</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="bg-info">
				<center><h3 class="mb-1 py-2" style="color: white;">Welcome to FriendSpace</h3></center>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row">
			<div class="col-sm-6  bg_image" style="height: 500px;">


				<div class="d-inline-block" style="width: 300px; margin: 40% 25%;">
					<h1 class="text-dark" style="font-size: 40px; font-style: italic;">FriendSpace</h1>
					<strong class="text-dark" style="font-size: 20px;">FriendSpace helps you connect and share with the people in your life.</strong>
				</div>


			</div>
			<div class="col-sm-6" style="height: 500px;">

				<div style="width: 400px; margin: 40% 10%;">
					
					<form method="post" action="">

						<center>
							<button id="login" class="btn btn-primary btn-lg text-white text-center" name="login">Login</button>
						</center>

						<center>
							<button id="signup" class="btn btn-success btn-lg mt-3 text-center" name="signup">Sign up</button>
						</center>


						<?php
							
							if(isset($_POST['signup'])){
								echo "<script>window.open('signup.php','_self')</script>";
							}
						?>
					
						<?php
							if(isset($_POST['login'])){
								echo "<script>window.open('signin.php','_self')</script>";
							}

						?>
					</form>
				</div>
			
				
			</div>
		</div>
	</div>

		
	
</body>
</html>