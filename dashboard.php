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

require_once('connection/db.php');
?>

<html>

  <head>
    <title>Your Dashboard</title>
  </head>
  <div class="text-container">
    <span class="blocktext">
      <h1>Your Dashboard</h1>
    </span>
  <body>

  </body>

</html>
