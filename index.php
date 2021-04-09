<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must sign in first";
  	header('location: sign-in.php');
  }
  if (isset($_GET['sign-out'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: sign-in.php");
  }
?>
<!doctype html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Basic PHP Authentication</title>
</head>
<body>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?sign-out='1'" style="color: red;">sign out</a> </p>
    <?php endif ?>
</div>

</body>

</html>