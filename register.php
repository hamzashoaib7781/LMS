<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LMS Registration</title>
	<link rel="stylesheet" href="allcss.css?v=<?php echo time(); ?>">
  </head>
  <body class="regbody">
			
	<h1 class="reghead">Library Managment System</h1>
	
	<br><br>

	<form class="regform col-lg-6 col-md-7 col-sm-8 col-10 p-5" method="post">
			<h2 style="text-align: center" class="pb-5">Registration</h2>
		
		
		<label class="reglabel">Name:</label><br>
		<input name="name" id="name" class="regfield">
		<span id="nameerror"></span>

		<br><br>

		<label class="reglabel">Father Name:</label><br>
		<input name="fname" id="fname" class="regfield">
		<span id="fnameerror"></span>

		<br><br>

		<label class="reglabel">Email:</label><br>
		<input name="email" id="email" class="regfield">
		<span id="emailerror"></span>

		<br><br>

		<label class="reglabel">Age:</label><br>
		<input name="age" id="age" class="regfield">
		<span id="ageerror"></span>

		<br><br>

		<label class="reglabel">Password:</label><br>
		<input name="password" id="password" class="regfield" type="password">
		<span id="passworderror"></span>

		<br><br>
		<div style="text-align: center;">
		<input type="submit" value="Submit" name="submit" id="submitbtn" style="background-color: cornflowerblue; width: 80%;
		height: 35px; border-radius: 10px; border: none; color:white; font-weight:bold; font-size: 18px;">
		</div>
		<br><br>
		
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "datalibrary";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$fname = $_POST['fname'];
			$email = $_POST['email'];
			$age = $_POST['age'];
			$pass = $_POST['password'];

			$insert = "INSERT INTO library (Name, Fathername, Email, Age, Password)VALUES('$name', '$fname', '$email', '$age', '$pass')";

			$run_query = mysqli_query($conn, $insert);
			header("Location: login.php");
		}

		?>
		<span id="login"><a href="login.php" id="log">Login</a> Here ?</span><br>
	</form>
	<br/>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script type="text/javascript">
		$('#nameerror').text("");
		$('#fnameerror').text("");
		$('#emailerror').text("");
		$('#ageerror').text("");
		$('#passworderror').text("");

		var name_err = true;
		var fname_err = true;
		var email_err = true;
		var age_err = true;
		var password_err = true;

		$('#name').keyup(function() {
			name_check();
		})

		function name_check() {
			var name_val = $('#name').val();
			if (name_val.length == '') {
				$('#nameerror').text("** PLease enter the Name");
				$('#nameerror').focus();
				$('#nameerror').css("color", "red");
				$('#nameerror').css("font-size", "12px");
				name_err = false;
				return false;
			} else {
				name_err = true;
				$('#nameerror').text("");
			}
			if ((name_val.length < 3) || (name_val.length > 32)) {
				$('#nameerror').text("** Name length must be betwween 3 and 32 words");
				$('#nameerror').focus();
				$('#nameerror').css("color", "red");
				$('#nameerror').css("font-size", "12px");
				name_err = false;
				return false;
			} else {
				name_err = true;
				$('#nameerror').text("");
			}
			var reg = /^[a-zA-Z ]+$/;
			if (!reg.test(name_val)) {
				$('#nameerror').focus();
				$('#nameerror').text("** Only alphabets are allowed in Name");
				$('#nameerror').css("color", "red");
				$('#nameerror').css("font-size", "12px");
				name_err = false;
				return false;
			} else {
				name_err = true;
				$('#nameerror').text("");
			}
			if ((name_val.split(" ").length - 1) > 2) {
				$('#nameerror').focus();
				$('#nameerror').text("** Only two spaces allowed in Name");
				$('#nameerror').css("color", "red");
				$('#nameerror').css("font-size", "12px");
				name_err = false;
				return false;
			} else {
				name_err = true;
				$('#nameerror').text("");
			}
		}

		$('#fname').keyup(function() {
			fname_check();
		})

		function fname_check() {
			var fname_val = $('#fname').val();
			if (fname_val.length == '') {
				$('#fnameerror').text("** PLease enter the Father Name");
				$('#fnameerror').focus();
				$('#fnameerror').css("color", "red");
				$('#fnameerror').css("font-size", "12px");
				fname_err = false;
				return false;
			} else {
				fname_err = true;
				$('#fnameerror').text("");
			}
			if ((fname_val.length < 3) || (fname_val.length > 32)) {
				$('#fnameerror').text("** Father Name length must be betwween 3 and 32 words");
				$('#fnameerror').focus();
				$('#fnameerror').css("color", "red");
				$('#fnameerror').css("font-size", "12px");
				fname_err = false;
				return false;
			} else {
				fname_err = true;
				$('#fnameerror').text("");
			}
			var reg = /^[a-zA-Z ]+$/;
			if (!reg.test(fname_val)) {
				$('#fnameerror').focus();
				$('#fnameerror').text("** Only alphabets are allowed in Father Name");
				$('#fnameerror').css("color", "red");
				$('#fnameerror').css("font-size", "12px");
				fname_err = false;
				return false;
			} else {
				fname_err = true;
				$('#fnameerror').text("");
			}
			if ((fname_val.split(" ").length - 1) > 2) {
				$('#fnameerror').focus();
				$('#fnameerror').text("** Only two spaces allowed in Father Name");
				$('#fnameerror').css("color", "red");
				$('#fnameerror').css("font-size", "12px");
				fname_err = false;
				return false;
			} else {
				fname_err = true;
				$('#fnameerror').text("");
			}
		}

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

		$('#age').keyup(function() {
			age_check();
		})

		function age_check() {
			var age_val = $('#age').val();
			if (age_val.length == '') {
				$('#ageerror').text("** PLease enter your age");
				$('#ageerror').focus();
				$('#ageerror').css("color", "red");
				$('#ageerror').css("font-size", "12px");
				age_err = false;
				return false;
			} else {
				age_err = true;
				$('#ageerror').text("");
			}
			if ((age_val.length < 1) || (age_val.length > 3)) {
				$('#ageerror').text("** Age length must be betwween 1 and 3 words");
				$('#ageerror').focus();
				$('#ageerror').css("color", "red");
				$('#ageerror').css("font-size", "12px");
				age_err = false;
				return false
			} else {
				age_err = true;
				$('#ageerror').text("");
			}
			var reg = /^[0-9]/i;
			if (!reg.test(age_val)) {
				$('#ageerror').focus();
				$('#ageerror').text("** Please write our age in numbers");
				$('#ageerror').css("color", "red");
				$('#ageerror').css("font-size", "12px");
				age_err = false;
				return false;
			} else {
				age_err = true;
				$('#ageerror').text("");
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

			name_check();
			fname_check();
			email_check();
			age_check();
			password_check();

			if (name_err == true && fname_err == true && email_err == true && age_err == true && password_err == true) {
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