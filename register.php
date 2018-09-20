<html>
<head>
  <title> Register </title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<?php
require_once('/home/dvkglyyn/public_html/FFA/Smarty/lib/Smarty.class.php');
require_once('connection/db.php');
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
if(!$err){
  require_once('users.classes.php');

  $usersObj = new users($DBH);
  $createUser = $usersObj->registerUsers($_POST['email'],
  $_POST['password'],
  $_POST['name'],
  $_POST['username'],
  $_POST['isPT']);

  if($createUser){
    echo"<script> window.location.assign('index.php?p=registersuccess'); </script>";
  }
}

	}
 ?>

<body>

  <form class="form-registration" method="post" action="#">

    <?php if($err){
    	echo '<div class="alert alert-danger" role="alert">
    	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    	<span class="sr-only">Error:</span>
    	'.$err.'
    	</div>';
    } ?>

  						<div class="form-register">
  							<label for="name" class="cols-sm-2 control-label">Your Name*</label>
  							<div class="cols-sm-10">
  								<div class="register-group">
  									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
  								</div>
  							</div>
  						</div>

              <div class="form-register">
  							<label for="email" class="cols-sm-2 control-label">Your Email</label>
  							<div class="cols-sm-10">
  								<div class="register-group">
  									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
  									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required/>
  								</div>
  							</div>
  						</div>

  						<div class="form-register">
  							<label for="username" class="cols-sm-2 control-label">Username</label>
  							<div class="cols-sm-10">
  								<div class="register-group">
  									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
  									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" required/>
  								</div>
  							</div>
  						</div>

  						<div class="form-register">
  							<label for="password" class="cols-sm-2 control-label">Password</label>
  							<div class="cols-sm-10">
  								<div class="register-group">
  									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
  									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
  								</div>
  							</div>
  						</div>

  						<div class="form-register">
                <div class="cols-sm-10">
  								<div class="register-group">
  									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <br>
                    <label class="radio-inline"><input type="radio" name="optradio">I'm a Personal Trainer</label>
                    <label class="radio-inline"><input type="radio" checked="checked" name="optradio">I'm not a Personal Trainer</label>
  								</div>
  							</div>
  						</div>

  						<div class="form-register ">
  							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
  						</div>
              <br>
  					</form>

</body>
</html>
