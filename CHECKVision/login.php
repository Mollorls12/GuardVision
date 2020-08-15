<!DOCTYPE html>
<html>
<head>
		<!-- core:css -->
		<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo_2/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index.php");
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>

<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
				<div class="auth-left-wrapper">

				  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">CHECK.<span>Vision</span></a>
					<h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
<div>
		<form class="box" action="" method="post" name="login">
		<label for="user1">Nom d'utilisateur</label>
		<input type="text" class="form-control" name="username" id="user1" placeholder="Nom d'utilisateur">
</div>
<div>
	<label for="mdp1">Mot de passe</label>
	<input type="password" class="form-control" name="password" id="mdp1" placeholder="Mot de passe">
</div>
	<div class="mt-3">
	</div>
<div>
<input type="submit" value="Connexion " name="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
</div>
</form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>
<!-- <p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p> -->
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>