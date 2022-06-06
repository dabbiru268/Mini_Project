<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <div>
          <h4>Check your expenses here</h4>
     </div>
     <div class="links">
            <ul>
                <li><a href="expense_tracker.html">Expense Tracker</a></li>
                <!-- <span><li><a href="logout.php">Logout</a></li></span> -->
            </ul>
     </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>