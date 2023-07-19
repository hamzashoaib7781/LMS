<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LMS Login</title>
    <link rel="stylesheet" href="allcss.css?v=<?php echo time(); ?>">
  </head>
  <body class="regbody">
			
	<h1 class="reghead">Library Managment System</h1>
	
	<br><br>


	<form class="logform col-5 p-5" method="post">
			<h2 style="text-align: center" class="pb-4">Login Form</h2>

		<label class="reglabel">Email:</label><br>
		<input name="email" id="email" class="regfield">
		<span id="emailerror"></span>

		<br><br>

		<label class="reglabel">Password:</label><br>
		<input name="password" id="password" class="regfield">
		<span id="passworderror"></span>

		<br><br>
		<div style="text-align: center;">
		<input type="submit" value="Submit" name="submit" id="submitbtn" style="background-color: cornflowerblue; width: 80%;
		height: 35px; border-radius: 10px; border: none; color:white; font-weight:bold; font-size: 18px;">
		</div>
		
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "datalibrary";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if (isset($_POST['submit'])) {
				$email = $_POST['email'];
				$password = $_POST['password'];
		
				$query = "SELECT * FROM library WHERE Email='$email' AND Password='$password'";
				$result = $conn->query($query);
		
				if ($result->num_rows == 1) {
					$_SESSION['email'] = $email;
					$_SESSION['loggedin'] = true;
					header("Location: LMSdashboard.php");
					exit;
				} else {
					echo "<b>Invalid email or password</b>";
				}
			}

		?>
		<br>
		<span id="login">Don't have Account? <a href="register.php" id="log">Register</a> Here ?</span>
	</form>
	<br/>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script type="text/javascript">
		$('#emailerror').text("");
		$('#passworderror').text("");

		var email_err = true;
		var password_err = true;

		$('#email').keyup(function() {
			email_check();
		})

		function email_check() {
			var email_val = $('#email').val();
			if (email_val.length == '') {
				$('#emailerror').text("** PLease enter your email");
				$('#emailerror').focus();
				$('#emailerror').css("color", "red");
				$('#emailerror').css("font-size", "12px");
				email_err = false;
				return false;
			} else {
				email_err = true;
				$('#emailerror').text("");
			}
			var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
			if (!reg.test(email_val)) {
				$('#emailerror').focus();
				$('#emailerror').text("** Please enter valid email. i.e no spaces, @ required, '.' is required ");
				$('#emailerror').css("color", "red");
				$('#emailerror').css("font-size", "12px");
				email_err = false;
				return false;
			} else {
				email_err = true;
				$('#emailerror').text("");
			}
		}

		$('#password').keyup(function() {
			password_check();
		})

		function password_check() {
			var pass_str = $('#password').val();
			if (pass_str.length == '') {
				$('#passworderror').text("** PLease Fill the password");
				$('#passworderror').focus();
				$('#passworderror').css("color", "red");
				$('#passworderror').css("font-size", "12px");
				pass_err = false;
				return false;
			} else {
				pass_err = true;
				$('#passworderror').text("");
			}
			if ((pass_str.length < 6) || (pass_str.length > 20)) {
				$('#passworderror').text("** Password length must be betwween 6 and  20 words");
				$('#passworderror').focus();
				$('#passworderror').css("color", "red");
				$('#passworderror').css("font-size", "12px");
				pass_err = false;
				return false
			} else {
				pass_err = true;
				$('#passworderror').text("");
			}
		}

		$('#submitbtn').click(function() {
			name_err = true;
			fname_err = true;
			email_err = true;
			age_err = true;
			password_err = true;

			email_check();
			password_check();

			if (email_err == true && password_err == true) {
				return true;
			} else {
				return false;
			}
		})
	</script>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>