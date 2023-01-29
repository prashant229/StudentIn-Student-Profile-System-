<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$roll = $_POST['roll'];
	$password = $_POST['password'];

	if (!empty($roll) && !empty($password) ) {

		    //read from database database
		    $query = "select * from `itw2a`.`users` where roll = '$roll' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
									
						header("Location: index.php");
						echo "pass";
						die;
					}
					else{
						echo '<script type="text/javascript">';
echo ' alert("wrong username or password!")'; 

echo '</script>';
					}
				}
			}
			
// 			echo '<script type="text/javascript">';
// echo ' alert("You are successfully logged in")'; 

// echo '</script>';

		}else
		{
			echo '<script type="text/javascript">';
echo ' alert("wrong username or password!")'; 

echo '</script>';
			
		}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
	   <!-- JavaScript Bundle with Popper -->
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


	<!-- my css -->
	<link rel="stylesheet" href="style7.css">


	<style type="text/css">
		form {
    		width:100%;
			min-width: 20rem;
			padding : 10px 10px;
		}
		.loginHead {
			
			color:#166fc7;
			width:calc(100% + 20px);
			margin:0;
			padding:10px 10px;
			border-top-left-radius: 10px;
    		border-top-right-radius: 10px;
			margin:-10px -10px;
			min-height:2rem;
			display:flex;
			align-items:center;
			padding:10px 20px;

	
			font-family: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
			font-weight: 900;


		}

	

		
	</style>
	<link rel="stylesheet" href="style5.css">
	</head>

<body>
<div class="div1">
	<div class="logo"><a href="index.php" class="homeli">Home</a> </div>
		<div class="loginHead">
			<b><h2>Login</h2></b>
		</div>
		<form method="post">
			
			<input id="text" type="text" name="roll" placeholder="Enrollment No"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input  type="submit" value="Login"><br><br>
			<!-- style="background:#4D49C1;"id="button" -->
			<div class="contenlg">New user? <a href="signup.php" style="color:#166fc7;text-decoration:none;" class="logq"> &nbsp;Sign up</a></div>
		</form>
	</div>
</body>

</html>