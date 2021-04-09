<?php include('server.php') ?>
<!doctype html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<title>Basic PHP Authentication</title>
</head>
<body>

<div class="page-title-area item-bg-1">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-title-content">
<h2>Sign In</h2>
<ul>
<li><a href="index.php">Home</a></li>
<li>Sign In</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="sign-in-area ptb-100">
<div class="container">
<div class="sign-in-form">
<div class="sign-in-title">
<h3>Welcome Back!</h3>
<p>Please Sign In to your account.</p>
</div>
<form method="post" action="sign-in.php">
<?php include('errors.php'); ?>
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" name="username" placeholder="Username">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Password">
</div>
</div>
<div class="col-lg-12">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="checkme">
 <label class="form-check-label" for="checkme">Keep me Log In</label>
</div>
</div>
<div class="col-lg-12">
<p class="forgot-password"><a href="enter_email.php">Forgot Password?</a></p>
</div>
<div class="col-lg-12">
<div class="send-btn">
<button type="submit" class="default-btn" name="signin_user">
Sign In Now
<span></span>
</button>
</div>
<br>
<span>Don't have account? <a href="sign-up.php">Register!</a></span>
</div>
</div>
</form>
</div>
</div>
</div>

</body>

</html>