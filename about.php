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
  <title>Fit For All</title>
</head>

<body>

  <div class="bgimgabout">
    <div class="text-container">
      <span class="about">
        <h1>We are committed to you!</h1>
      </span>
      <br>
      <span class="about">
        Providing better communication with Personal Trainers.
      </span>
      <span class="about">
        We are a website that strives to provide the best quality services
        <br>for communication with personal trainers.
      </span>
      <span class="about">
        <br>
        To access our forums, please navigate to the forum page.
      </span>
    </div>
  </div>

</body>

</html>
