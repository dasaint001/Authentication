<?php include('server.php') ?>
<!doctype html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<title>Basic PHP Authentication </title>

</head>
<body>
<div class="page-title-area item-bg-1">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-title-content">
<h2>Sign Up</h2>
<ul>
<li><a href="index.php">Home</a></li>
<li>Sign Up</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="signup-area ptb-100">
<div class="container">
<div class="signup-form">
<h3>Create your Account</h3>
<form method="post" action="sign-up.php">
<?php include('errors.php'); ?>
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Email" required="required" value="<?php echo $email; ?>">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="password" class="form-control" name="password_1" placeholder="Password" required="required">
</div>
<div class="form-group">
    <input type="password" class="form-control" name="password_2" placeholder="Confirm Password" required="required">
</div>
<div class="col-lg-12">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="checkme">
<label class="form-check-label" for="checkme">Keep Me Sign Up</label>
</div>
</div>
<div class="col-lg-12">
<div class="send-btn">
<button type="#" class="default-btn" name="signup_user">
Sign Up Now
<span></span>
</button>
</div>
<br>
<span>Already a registered user? <a href="sign-in.php">Signin!</a></span>
</div>
</div>
</form>
</div>
</div>
</div>

</body>

</html>