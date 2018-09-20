<html>
<head>
  <title> Login </title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<?php
require_once('/home/dvkglyyn/public_html/FFA/Smarty/lib/Smarty.class.php');
//new instance of smarty
$smarty = new Smarty();
$smarty->setTemplateDir('/home/dvkglyyn/public_html/FFA/Smarty/templates');
$smarty->setCompileDir('/home/dvkglyyn/public_html/FFA/Smarty/templates_c');
$smarty->setCacheDir('/home/dvkglyyn/public_html/FFA/Smarty/cache');
$smarty->setConfigDir('/home/dvkglyyn/public_html/FFA/Smarty/configs');
$smarty->setCaching(true);
//Display the templates on index page
$smarty->display('header.tpl');
$smarty->display('footer.tpl');

if(isset($_POST['email']) || isset($_POST['password'])){
	if(!$_POST['email'] || !$_POST['password']){
		$err = "Please enter an email and password";
	}

	if(!$error){
		require_once('classes/users.classes.php');

		$usersObj = new users($DBH);
		$checkUser = $usersObj->checkUser($_POST['email'], $_POST['password']);

		if($checkUser){
			//a user was found
$_SESSION['loggedin'] = true;
		    	$_SESSION['userData'] = $checkUser;
		    	echo "<script> window.location.assign('index.php?p=dashboard'); </script>";
		}else{
		    	$err = "Incorrect username and password";
		}
	}
}
?>


<form class="form-login" method="post" action="#">
<div class="text-container">
  <span class="blocktext">
    <h1>Please Login!</h1>
  </span>

<div class="form-login">
  <label for="email" class="cols-sm-2 control-label">Your Email</label>
  <div class="cols-sm-10">
    <div class="register-group">
      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
      <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
    </div>
  </div>
</div>

<div class="form-login">
  <label for="password" class="cols-sm-2 control-label">Password</label>
  <div class="cols-sm-10">
    <div class="register-group">
      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
      <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
    </div>
  </div>
</div>
</div>

<div class="form-login">
  <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
</div>
<br>
</form>
