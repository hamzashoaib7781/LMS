<?php

$host="localhost";
$username="root";
$password="";
$db="datalibrary";
$connection= mysqli_connect($host,$username,$password,$db);
if ($connection){
    echo "Successfull";
}else
{
    echo "unsuccessfull";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform authentication check
  // Replace the if condition with your own authentication logic

  if ($username === 'admin' && $password === 'admin123') {
    // Authentication successful
    session_start();
    $_SESSION['admin'] = true;
    header('Location: admin.php');
    exit();
  } else {
    // Authentication failed
    echo 'Invalid username or password';
  }
}

// Check if the admin is authenticated
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
  // Admin is authenticated, show the admin page
  // Add your code for displaying books, adding, and deleting books here
} else {
  // Admin is not authenticated, redirect to the login page
  header('Location: index.html');
  exit();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Library Management System</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Welcome to the Library Management System</h1>
  
  <div id="admin-section">
    <h2>Admin Login</h2>
    <?php
		
		include("sidebar.php");
        include("LMSdashboard.php");
		?>
   		
    <form action="admin.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
  
  <!-- Rest of the website content -->
  
  <script src="script.js"></script>
</body>
</html>
