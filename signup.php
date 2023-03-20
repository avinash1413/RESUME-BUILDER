<?php
$showAlert = false;
$showError = false;
include 'conn.php';
if(!$conn){
    echo '<script>alert("not connected successfully")</script>';
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $username = $_POST['user'];
	$email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    $existsql = "SELECT * FROM `userinfo` WHERE email = '$email' ";
    $result=mysqli_query($conn,$existsql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        $showError ="User Already Exists";
    }
    else{
        if($password == $cpassword){
           $sql = "INSERT INTO `userinfo` (`sno`, `username`,`email`, `password`,`cpassword` ,`tstamp`) VALUES (NULL,'$username','$email','$password','$cpassword', current_timestamp())";
           $result = mysqli_query($conn,$sql);
		  
           if($result){
            $showAlert = true;
           }
        }
        else{
            $showError = "Passwords do not match";
        }
    
    }

}
?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/82b716bd33.js"></script>
	<title>Register</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			padding:75px;
			background:linear-gradient(to top,#5b2c6f 0%,#e8daef 100%);
		}

		.container {
			width: 70%;
			min-height: 80vh;
			border-radius: 20px;
			background-color: #fff;
			display: flex;
			margin: auto;
			justify-content: center;
			align-items: center;
			box-shadow: 3px 3px rgb(255, 255, 240);
			

		}

		h1 {
			display: flex;
			margin: auto;
			justify-content: center;
			align-items: center;
			padding-bottom: 30px;
			color: #4A235A;
			font-size: 45px;

		}

		@media screen and (max-width:650px) {
			.button {
				width: 85%;
				

			}
			body{
				padding:0px;
			}

			.container {
				width: 100%;
				height: 120vh;
			    padding:20px;
				margin-top: -75px;
				border-radius: 0px;
			}

			h1 {
				font-size: 45px;
				text-align: center;
				display: flex;
				margin: auto;
				justify-content: center;
				align-items: center;
			}

			.input-group {
				padding: 5px;
				margin-top: 5px;
			}

			a {
				padding-bottom: 35px;
			}
		}

		.button {
			background-color: #BB8FCE;
			border: none;
			width: 85%;
			margin-left: 45px;
			margin-top: 35px;

		}


		.button:hover {
			background-color: #6C3483;

		}

		.input-group {
			padding: 5px;
			margin-top: 8px;
		}

		.form-control {
			border: none;
			border-bottom: 1px solid black;
			outline: 0;
			border-radius: none;
			border-color: #BB8FCE;
			/*background-color: #F4ECF7 ;*/
		}

		.form-control:hover {
			border-color: #4A235A;

		}

		a {
			display: flex;
			margin: auto;
			justify-content: center;
			align-items: center;
			text-align: center;
			font-size: 18px;

			text-transform: capitalize;
			color: #6C3483;
			padding-left: 40px;

		}

		i {
			color: #6C3483;
			margin-top: 5px;
			padding: 10px;
		}
	</style>
</head>

<body>
<?php
if($showAlert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
	<strong> Success!</strong> You are successfully registered in the application.
	<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
if($showError){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
	<strong> Error!</strong>'.$showError.'
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
?>

	<div class="container">
		<form action="signup.php" method = "POST">

			<div class="row">
				<h1> Sign up</h1>
				<div class="col-sm-6">
					<img src="images/signup.png" class="img-fluid" alt="...">
					<a href="signin.php">Already an account</a>
				</div>
				<div class="col-sm-5">
					<div class="input-group mb-2">
						<i class="fa fa-user icon" aria-hidden="true"></i>
						<input type="text" required class="form-control shadow-none" name="user" placeholder="Username" aria-label="Username"
							aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-2">
						<i class="fas fa-envelope" aria-hidden="true"></i>
						<input type="email" required class="form-control shadow-none"name="email" placeholder="email" aria-label="Username"
							aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-2">
						<i class="fas fa-lock" aria-hidden="true"></i>
						<input type="password" required class="form-control shadow-none"name="pass" placeholder="password"
							aria-label="Username" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-2">
						<i class="fa fa-unlock-alt icon" aria-hidden="true"></i>
						<input type="password" required class="form-control shadow-none" name="cpass" placeholder="confirm your password"
							aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<button class="btn btn-lg btn-primary button text-center" type="submit" name="submit">SIGN-UP</button>

				</div>
				<div class="col-sm-1"></div>
			</div>
		</form>
	</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
		integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
		crossorigin="anonymous"></script>


</body>

</html>

