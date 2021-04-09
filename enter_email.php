<?php include('server.php'); ?>
<!DOCTYPE html>
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
	<form class="login-form" action="enter_email.php" method="post">
		<h2 class="form-title">Reset password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
        <div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Email" required="required" value="<?php echo $email; ?>">
</div>
</div>
<button type="#" class="default-btn" name="reset-password">
Reset
<span></span>
</button>
	</form>
</body>
</html>