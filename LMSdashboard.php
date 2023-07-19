<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DashBoard LMS</title>
    
    <link rel="stylesheet" href="css.css">
    
  </head>
  <body style="background-image:url(lib3.png); background-size: 100% 100%; background-attachment: fixed; font-weight: bold">
   
   <div class="container-fluid">
   	<div class="row">
   		<?php
		include("sidebar.php");
		?>
   		<div class="contant col-9">
   		<br><br>
   			<h1 id="heading2"><span style="border: 5px solid white; background-color: rgb(0, 0, 0, 0.5);">&nbsp;&nbsp;Library Managment System&nbsp;&nbsp;</span></h1>
   			<br><br>
   			<div class="container mb-5 mt-5">
   			<div class="row justify-content-evenly">
   			<div class="col-3 box"><a class="link" href="poetrybooks.php">Poetry Books</a></div>
   			<div class="col-4 box"><a class="link" href="holybooks.php">Holy Books</a></div>
   			<div class="col-3 box"><a class="link" href="Urdubooks.php">Urdu Books</a></div>
   			</div>
   			</div>
   			<div class="container mb-5">
   			<div class="row justify-content-evenly">
   			<div class="col-3 box"><a class="link" href="englishbooks.php">English Books</a></div>
   			<div class="col-4 box"><a class="link" href="Chemistrybooks.php">Web Technologies</a></div>
   			<div class="col-3 box"><a class="link" href="physicsbooks.php">Physics Books</a></div>
   			</div>
   			</div>
   			<div class="container mb-5">
   			<div class="row justify-content-evenly">
   			<div class="col-3 box"><a class="link" href="novels.php">Novels</a></div>
   			<div class="col-4 box"><a class="link" href="historybooks.php">History Books</a></div>
   			<div class="col-3 box"><a class="link" href="mathbooks.php">Math Books</a></div>
   			</div>
   			</div>
			
   		</div>
   	</div>
   </div>
   <?php
		include("footer.php");
		?>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>