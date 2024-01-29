<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

		if(!empty($Username) && !empty($Password) && !is_numeric($Username))
		{

			//read from database
			$query = "SELECT * from mercheelogin where Username = '$Username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $Password)
					{

						$_SESSION['AccountID'] = $user_data['AccountID'];
						header("Location: MercheeMenu.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="LoginCss.css">
</head>
<body>
<form method="post">
  
  <div class="Login">
    <h1>Log In</h1>
    <p class="font1">
    <span class="Arials">Welcome to </span>  
    <span class="Pixeltype">Merchee!!</span>
    <br>Discover your favorite merchandise.</br>
    </p>
  
  </div>
  <div class="container">
    <label for="uname"><b>Username</b></label>
 	<input id="text" type="text" placeholder="Enter Username" name="Username">
     
    <label for="psw"><b>Password</b></label>
    <input id="text" type="password" placeholder="Enter Password" name="Password">
	   
    <button id="button" type="submit">Login</button>
   
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  	</div>

  	<div class="cncl" style="background-color:#f1f1f1,border-radius: 25px;">
    <button type="button" class="cancelbtn"><a href="http://localhost/MercheeWebsite/MercheeMenu.php">Go Back</a></button>
    <p1 style="margin-left:190px;">Forgot <a href="#">password?</a></p1>
    <p style="text-align:center;">Don't have an account? <a href="http://localhost/MercheeWebsite/MercheeSignup.php">Sign up</a>.</p> 
  
	</div>
</form>

</body>
</html>



