<?php
Session_start();
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

require_once('connection/db.php');
?>

<html>

<head>
  <title>Fit For All</title>
</head>

<body>

  <div class="bgimg">
    <div class="text-container">
      <span class="blocktext">
        <h1>WELCOME TO FITNESS FOR ALL</h1>
      </span>
      <br>
      <span class="blocktext">
        Providing better communication with Personal Trainers.
      </span>
    </div>
  </div>

</body>

</html>
